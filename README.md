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
storage link
```
php artisan storage:link
```