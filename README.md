# Region Photo
This is site that allows users to upload photos of their cities or region to attract tourists.

## How to install
This application uses Docker. To make it up and running use this command.

`docker-compose up`

## To install dependencies
`composer install`

## To create the symbolic links run this command
`php artisan storage:link`

## Create .env file in the root directory
And set up your database connection

## To generate Application Key run this command
`php artisan key:generate`

## Migrate database and seed data
`php artisan migrate --seed`

## Install NodeJS Dependencies
`npm i`

## How to login

Use this link to login as an Administor or Regular user http://localhost:8000/login

### **User credentials**
#### *Super admin*

#### username: super-admin@example.com
#### password: password

#### *Regular User*

#### username: regular-user@example.com
#### password: password

## Database connection

#### username: my_user
#### password: my_password
#### database: my_database
#### port: 3333


