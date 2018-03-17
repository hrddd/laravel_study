# laravel_study
for laravel study

## Setup
for Mac (homebrew installed)
### Composer Install
```
$ brew tap homebrew/php
$ brew install composer
```
### Laravel Install
install
```
$ composer global require "laravel/installer"
```
path
```
$ echo 'export PATH=~/.composer/vendor/bin:$PATH' >> ~/.bash_profile
$ source ~/.bash_profile
```

### Local Setting
genarate key
```
php artisan key:generate
```
migration and seeding
```
php artisan migrate --seed
```
*if 'Class UsersTableSeeder does not exist'
```
composer dump-autoload
```
storage link
```
php artisan storage:link
```
### Use MAMP
.env
```
DB_DATABASE=your_awsome_database_name
DB_USERNAME=root
DB_PASSWORD=root
DB_SOCKET=/Applications/MAMP/tmp/mysql/mysql.sock
```

/Applications/MAMP/conf/apache/httpd.conf
Uncomment a line in this file at #575.
```
# Virtual hosts
#Include /Applications/MAMP/conf/apache/extra/httpd-vhosts.conf
```

/Applications/MAMP/conf/apache/extra/httpd-vhosts.conf
Add the following code to show page on MAMP server.
```
Listen 9999

<VirtualHost *:9999>
    DocumentRoot "/absolute/path/to/laravel_project/public"
    <Directory "/absolute/path/to/laravel_project/public">
        AllowOverride All
    </Directory>
</VirtualHost>
```

