# laravel-bootstrap-template
This is a Laravel 5 starting package with Bootstrap, jQuery, Font Awesome and Modernizr included.

### Integrated components in detail
The last commit of laravel-bootstrap-package contains:

| Component | Integrated version |
| ------ | ------ |
| Laravel | 5.6.5 |
| Bootstrap | 4.0.0 |
| jQuery | 3.2.1 |
| Font Awesome Free | 5.0.6 |
| Modernizr | 3.5.0 |



To assure being bleeding edge the included composer.json loads the following components automatically and pushes them into the public directory:
```sh
"twbs/bootstrap": "*",
"components/jquery": "dev-master",
"components/modernizr": "dev-master",
"components/font-awesome": "dev-master"
```

So please keep in mind that you update and overwrite those components mentioned above while running this command after initial project creation:
```sh
composer update
```



### Requirements
- This Laravel package requires a php version >=7.1.3
- Make sure you have composer installed

### Getting started
```sh
# cloning repo
git clone https://github.com/secrux/laravel-bootstrap-template.git <project_name>

# change into your project directory and let composer install components
cd <project_name>
composer install

# let composer update and publish files to make sure you are bleeding edge
composer update

# create your personal environment settings file
cp .env.example .env

# and generate your personal key
php artisan key:generate

# now you can start the laravel development server
# and check if your project is runnning under http://127.0.0.1:8000 (default)
php artisan serve
```

### Questions
If you have any question feel free to contact secrux[at]protonmail.com.
