## What is Room/Machine Manager ?

Room/Machine Manager is a Web Application written in Laravel. The main goal of the app is to ease up the 
process of managing Room and Machines by creating a dynamic solution to resources manipulation

## How to deploy project locally

To work with the Project, you will need to install : 
- **[PHP](https://www.php.net/)**
- **[Composer](https://getcomposer.org/)**
- **[Laravel](https://laravel.com/)**
- **[Apache](https://httpd.apache.org/)**

### Set-up the Database
- Enter the .env file in the base of the project
- Edit the database environment variables
    DB_DATABASE=your_database
    DB_USERNAME=your_username
    DB_PASSWORD=your_password

- Run the migrations
```
php artisan migrate
```
Now, you're set up to start using the application


