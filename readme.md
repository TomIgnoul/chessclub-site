# Chess Club Site

A CRUD web application built with Laravel for a local chess club,
to support their online presence, news and tournaments.

Made for the Backend Web course (EHB, 2026).

## Requirements

- PHP 8.2 or higher
- Composer
- Node.js 20 or higher
- SQLite (or MySQL)

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

https://laracopilot.com/blog/php-artisan-make-model-cheatsheet/
