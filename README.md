本项目是基于 Laravel 10.x 的模块化开发框架, 项目为了便于管理分为 框架, 核心, 组件, 使用 composer 进行模块化安装

- 项目文档 : https://weiran.tech

## 介绍

使用本项目可以快速的完成项目业务逻辑的开发, 其中包含

- RBAC 权限管理
- 用户管理
- 接口验签
- 接口文档 swagger 格式生成
- 支持 Laravel Octane 运行加速

项目是在通用业务逻辑的基础上剥离出来, 并可应用在快速开发的项目中, 可满足日常 80% 的开发需求

### 环境

```
php : >=8.2
```

### [不推荐] Octane 运行加速

> 此项会导致项目静态变量堆积, 不作为生产环境推荐

laravel octane 安装

```
# 安装 octane
composer require laravel/octane
composer require guzzlehttp/guzzle

# 清理 services.php / 安装 octane / 启动 octane
composer run weiran-update
php artisan octane:install
php artisan octane:start
```

使用 frankenphp 运行并使用 wrk 运行压测之后的测试, 10 线程, 并发 100 请求, 平均响应时间 46ms

```
wrk -c 100 -t 10 http://127.0.0.1:8000/test
Running 10s test @ http://127.0.0.1:8000/test
  10 threads and 100 connections
  Thread Stats   Avg      Stdev     Max   +/- Stdev
    Latency    46.73ms   21.38ms 265.22ms   81.50%
    Req/Sec   221.04     47.20   356.00     73.13%
  22043 requests in 10.09s, 24.63MB read
Requests/sec:   2184.06
Transfer/sec:      2.44MB
```

## 安装

**初始化项目并启动服务**

```
# Install
$ composer create-project weiran/project weiran_v1 '^1.0'

# Start service server
$ cd weiran_v1
$ php artisan serve

  INFO  Server running on [http://127.0.0.1:8000].  
  Press Ctrl+C to stop the server
```

> 因为默认框架中不包含 `/` 主页访问, 所以访问主页会报 404 错误码


**创建 test 模块**

```
# 快速创建模块
$ php artisan weiran:make test -Q
```

test 模块不支持自动加载, 需要手动加载

在 `composer.json` 文件中加入 `psr-4` 的类自动加载

```json
{
    "autoload": {
        "psr-4": {
            "\\Test\\": "modules/test/src"
        }
    }
}
```

在 `config/app.php` 文件的 `providers` 中加入服务加载器

```php
<?php

return [
    'providers' => [
        Test\ServiceProvider::class
    ]
]
```

运行 `composer dumpautoload` 生成类加载文件

```
# test web request
$ curl http://127.0.0.1:8000/test

# test api request
Test Web Request Success
$ curl http://127.0.0.1:8000/api/test
Test Api Request Success

# test backend request
$ curl 127.0.0.1:8000/mgr-page/test
> 302 response
> to login url ...
```

## 初始化

**创建数据库**

在初始化数据库之前需要先创建一个空数据库, 数据库类型为 `utf8mb4_general_ci`, 可以保证 emoji 类型的数据正常存储, 这里我定义名字为
`weiran_project_v1`

```
> mysql -u root -p
> create database weiran_project_v1 charset=utf8mb4;
```

在 `.env` 文件中配置账号和密码

```
# Database Config
# ------------------------------------
DB_HOST=127.0.0.1
DB_DATABASE=weiran_project_v1
DB_USERNAME=root
DB_PASSWORD=null
```

**执行 migrate**

```
$ php artisan weiran:migrate

   INFO  Preparing database.  

  Creating migration table ................................................. 21ms DONE

   INFO  Running migrations.  

  2018_02_27_144933_create_pam_account_table ............................... 20ms DONE
  2018_02_27_144935_create_pam_permission_role_table ....................... 16ms DONE
  2018_02_27_144935_create_pam_permission_table ............................ 35ms DONE
  2018_02_27_144935_create_pam_role_table .................................. 11ms DONE
  2018_02_27_144936_create_pam_role_account_table .......................... 34ms DONE
  2018_02_27_144938_create_sys_config_table ................................ 39ms DONE
  2018_03_12_213504_create_pam_log_table ................................... 11ms DONE
  2018_07_09_164941_alter_pam_log_add_field_parent_id ...................... 20ms DONE
  2018_12_24_105815_create_sys_failed_jobs_table ........................... 17ms DONE
  2021_04_27_183109_create_pam_ban_table ................................... 28ms DONE
  2021_04_27_183141_create_pam_token_table ................................. 25ms DONE
  2021_06_29_233109_alt_pam_ban_add_account_type ........................... 17ms DONE
  2022_12_08_113154_alter_pam_account_table_add_uem_index .................. 34ms DONE
  2023_02_24_102135_alter_pam_account_table_add_note_field ................. 21ms DONE
  2023_04_12_154447_alt_sys_config_table_add_key_index ..................... 10ms DONE
  2024_04_08_174443_add_uuid_to_sys_failed_jobs_table ...................... 26ms DONE
...
```

**执行安装**

```
$ php artisan system:install
Start Install Weiran Framework!
Init UserRole Ing...
Init Role success
Install User Roles Success
Init Rbac Permission...
(weiran.core.PermissionCommand) Import permission Success! 
Init Rbac Permission Success
```

**创建用户**

创建管理员

```
$ php artisan system:user create_user

 Please input passport!:
 > weiran_root

 Please input password!:
 > weiran_root

 Please input role name!:
 > root

User weiran_root created
```

**生成接口文档**

```
$ php artisan core:doc api
 Output swagger api doc, view http://localhost:8000/docs/swagger-ui/
```

生成的 swagger 文件在 `public/docs/swagger-ui` 目录下, 访问 http://localhost:8000/docs/swagger-ui/ 可在线查看接口文档

## 反馈

[Github Issues](https://github.com/weiran-tech/project/issues)
