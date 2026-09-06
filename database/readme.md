# Chess Club Site

A simple CRUD web appliction, built with Laraval for a Chess club to support their online presenc, activities, news and tournaments.

## Requirements

- PHP 8.2 or higher
- Composer
- Node.js 20 or higher
- SQLit (or MySQL)

## Installation

1. Clone the repository
   `git clone https://github.com/TomIgnoul/chessclub-site.git`

2. Install PHP dependencies
   `composer install`

3. Install JavaScript dependencies
   `npm install`

4. Copy the environment file
   `cp .env.example .env`

5. Generate an application key
   `php artisan key:generate`

6. Create the database and run the migrations
   `php artisan migrate:fresh --seed`

7. Compile the assets
   `npm run dev`

8. Start the server
   `php artisan serve`

The site is then available at http://localhost:8000

## Default admin account

Email: admin@ehb.be
Password: Password!321

## Sources

- Laravel documentation (https://laravel.com/docs)
- Claude (Anthrophic) as learning partner for explanations and debugging throughout.
