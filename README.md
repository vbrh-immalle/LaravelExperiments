# Instructions

- download the `vendor`-directory and update autoloader with `composer install`
- create a database and schema in MySQL
    - you can run 1 sql command as root : `mysql -u root -p -e "show databases"`
    - can be handier to get interactive mysql prompt : `mysql -u root -p`
    - copy/paste this code to create a user, database-schema and give all permissions

```
CREATE USER 'imma2'@'localhost' IDENTIFIED BY 'imma2pwd';
CREATE DATABASE larablog3;
GRANT ALL ON larablog3.* TO 'imma2'@'localhost';
FLUSH PRIVILEGES;`
```
    - want to delete the schema?
        - `DROP DATABASE larablog`
- copy `.env.example` to `.env` and edit the database-credentials
- run `php migrate:refresh --seed` to create and populate tables
- run `php artisan serve`
    - visit http://localhost:8000/users
    - visit http://localhost:8000/users/1
    - visit http://localhost:8000/messages
    - visit http://localhost:8000/messages/1