# 项目文档
## 1. 基本介绍
### 1.0 项目介绍
Discover 是基于开发语言 `PHP7.3`，`Laravel` 框架开发。项目中采用的拓展如下：
* [dcat/laravel-admin](https://github.com/jqhph/dcat-admin)
* [overtrue/laravel-pinyin](https://github.com/overtrue/laravel-pinyin)
* [propaganistas/laravel-phone](https://github.com/Propaganistas/Laravel-Phone)
* [spatie/laravel-enum](https://github.com/spatie/laravel-enum)
* [yxx/laravel-quick](https://github.com/youyingxiang/laravel-quick)
* [zgldh/qiniu-laravel-storage](https://github.com/overtrue/laravel-filesystem-qiniu)

### 1.1 适用场景

### 1.2 安装

* [Github 地址](https://github.com/youyingxiang/Discover), [gitee 地址](https://gitee.com/dcat-phper/discover)
* 执行 `composer install`  
* 将 `.env.example` 复制重命名为 `.env`, 并在 `.env` 设置数据库账号密码等信息。
* 执行 `php artisan migrate` 生成表结构。
* 执行 `php artisan db:seed --class=InitSeeder` 初始化数据库。
