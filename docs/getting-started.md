# Getting Started

**Table of contents:**

1. [Getting Started](#getting-started)

1. [Docker-compose](#docker-compose)

1. [Configure PHP](#configure-php)

1. [Configure Nginx](#configure-nginx)

1. [Configure MySQL](#configure-mysql)

1. [Configure Redis](#configure-redis)

1. [Configure MongoDB](#configure-mongodb)

## Getting Started
>If live behind the [GFW](https://zh.wikipedia.org/zh-hans/%E9%98%B2%E7%81%AB%E9%95%BF%E5%9F%8E) please read this post [Use Ali cloud](http://www.myfreax.com/use-aliyun-mirror-acceleration-on-docker/)


#### Requirements

- [Docker](https://www.docker.com/)

- [Docker-compose](https://github.com/docker/compose/releases)

>Windows and Mac users only need to install Docker

#### Getting Started

```bash

git clone https://github.com/huangyanxiong01/docker-php.git

cd docker-php

docker-compose up -d
```
Now,you can open http://127.0.0.1:3000/ in browser



## Docker-compose

> The service contains nginx, redis, mongodb, mysql, node.js
 
- docker-compose stop

>Stop  service
       
- docker-compose start

>start  service

- docker-compose restart

>restart service


## Configure PHP

- Does php contain those extensions?

PHP Modules | Zend Modules
-----| ------- | -------------
Core,date,libxml,openssl,pcre,zlib,filter,hash,pcntl,Reflection | xdebug
SPL,session,standard,mysqlnd,PDO,xml,calendar,ctype,dom | opcahce
sockets,ev,mbstring,fileinfo,ftp,gd,gettext,iconv,json,exif,mongodb |
mysqli,pdo_mysql,Phar,posix,readline,shmop,SimpleXML,eio,swoole |
sysvmsg,sysvsem,sysvshm,tokenizer,uv,wddx,xmlreader,xmlwriter,xsl,zip,Zend |



## Configure Nginx


- How change Nginx listen port?

You can find .env file in project root dir,Modify the value of NGINX_PORT


## Configure MySQL

- How change MySQL the username,password ?

You can find mysql.env  file in project docker/mysql/ dir,Modify the value of MySQL

## Configure Redis

Please read the official documentation

## Configure MongoDB

Please read the official documentation
