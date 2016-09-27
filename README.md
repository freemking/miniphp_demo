# miniphp_demo

### 安装说明
执行`composer install`安装框架包

### 代码结构说明

> app框架文件夹

>> app/controllers 控制器文件

>> app/models 模型文件

>> app/views 视图文件

> conf配置文件夹
>> conf/app.ini 配置文件

> public公用文件夹

>> public/index.php 入口文件

>> public/css 样式文件

>> public/js JavaScript文件

>> public/img 图片文件
>

### 服务器配置说明

#### nginx
```
server {
    listen       80;
    server_name  www.miniphp.com;
    root         /var/www/document_root/public;
    index        index.php index.html;

    if (!-e $request_filename) {
        rewrite ^/(.*)  /index.php?$1 last;
    }

    location ~ \.php$ {
        fastcgi_pass 127.0.0.1:9000;
        fastcgi_index index.php;
	    include /usr/local/etc/nginx/conf.d/php-fpm;
    }
}

```

#### apache
```
<VirtualHost *:80>
    DocumentRoot "D:/work/document_root/public"
    ServerName www.miniphp.com
    RewriteEngine on
    RewriteCond %{DOCUMENT_ROOT}%{REQUEST_FILENAME} !-f
    RewriteRule ^/(.*)$ /index.php/$1
</VirtualHost>

```