# Laravel first app | Blog app for demo purposes

- [x] Styling with bootstrap
- [x] Articles list
- [x] Create article
- [x] Update article
- [x] Delete article 

## Description

For persisting data is used `sqlite` database and for styling `bootstrap` v5. <br>
There's only one table in database with fields `title` and `text` and <br>
contoller with methods for **CRUD** operations. Overall it's minimalist blog app for demo purposes.

## Installation

Installing dependencies with (composer)[https://getcomposer.org/]

```bash
composer install 
```

First create empty `sqlite` database and then run migrations (creating tables in database). 

```bash
touch ./database/database.sqlite # creating empty sqlite database, it's just empty text file
php artisan migrate # running migrations
```

Run server and go to `http://localhost:8000/`
```bash
php artisan serve
```