# Aguita de coco e-commerce


## Running locally

### What you need first

### Database script

Run these in your mysql command line.

`CREATE DATABASE laravel;`
`USE laravel;`

### Steps:

1. MySQL
2. A mysql database named "laravel" (see Database script)
3. Edit .env file (in the root of the project) and change the DB_USERNAME
and DB_PASSWORD values to match your credentials

To run the locally follow this steps:

1. `git clone git@github.com:tony-coder-18/aguita-coco-ecommerce.git`
2. `cd aguita-coco-ecommerce`
3. `php artisan migrate`
4  `php artisan serve`

This app was developed by Bill Llach Bruges. SDG.
