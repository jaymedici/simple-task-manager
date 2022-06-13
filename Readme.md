# A Simple Task Management App

## About this App
This is a simple task management web app created using laravel and livewire to showcase a bit of my knowledge.

## Server Requirements
To run this app, your server must either run Apache or Nginx and have mod_rewrite enabled. The app uses Mysql for the database backend. Other requirements:
- PHP 7.3 +
- composer installed

## Installation
- Rename the .env.example to .env and change the variables to match your server
- On your shell install the app's dependencies via composer:
```html
composer install
```
- Generate application encryption key
```html
php artisan key:generate
```
- Run the table migrations
```html
php artisan migrate
```
- (Optional) Run seeder to create a default project for you
```html
php artisan db:seed
```

**Note:** An internet connection might be needed while running the app as the app references one or two CDN libraries.