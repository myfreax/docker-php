# Getting Started

**Table of contents:**

1. [Getting Started](#getting-started)

1. [Docker-compose基本用法](#docker-compose)

1. [配置 PHP](#configure-php)

1. [配置 Nginx](#configure-nginx)

1. [配置 MySQL](#configure-mysql)

1. [配置 Redis](#configure-redis)

1. [配置 MongoDB](#configure-mongodb)

## Getting Started
>If live behind the [GFW](https://zh.wikipedia.org/zh-hans/%E9%98%B2%E7%81%AB%E9%95%BF%E5%9F%8E) please read this post [Use Ali cloud](http://www.myfreax.com/use-aliyun-mirror-acceleration-on-docker/)


#### 请先安装

- [Docker](https://www.docker.com/)

- [Docker-compose](https://github.com/docker/compose/releases)

>Windows and Mac 用户只需要安装Docker

#### Getting Started

```bash

git clone https://github.com/huangyanxiong01/docker-php.git

cd docker-php

docker-compose up -d
```
现在你可以在浏览器中打开http://127.0.0.1:3000/ 



## Docker-compose

> 服务包含 nginx, redis, mongodb, mysql, php-fpm
 
- docker-compose stop

>Stop  service
       
- docker-compose start

>start  service

- docker-compose restart

>restart service

- docker-compose restart mysql

>重启mysql服务 


## Configure PHP

- PHP包含那些扩展?

PHP Modules | Zend Modules
-----| ------- | -------------
Core,date,libxml,openssl,pcre,zlib,filter,hash,pcntl,Reflection | xdebug
SPL,session,standard,mysqlnd,PDO,xml,calendar,ctype,dom | opcahce
sockets,ev,mbstring,fileinfo,ftp,gd,gettext,iconv,json,exif,mongodb |
mysqli,pdo_mysql,Phar,posix,readline,shmop,SimpleXML,eio,swoole |
sysvmsg,sysvsem,sysvshm,tokenizer,uv,wddx,xmlreader,xmlwriter,xsl,zip,Zend |



## Configure Nginx


- 怎么改变Nginx监听的端口?

你可以在项目的根目录找到.env文件，修改NGINX_PORT的值


## Configure MySQL

- 怎么改变MySQL的用户名密码，初始化数据库 ?

可以在docker/mysql/mysql.env文件中修改这些值

## Configure Redis

请阅读官方文档

## Configure MongoDB

请阅读官方文档