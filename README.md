
# Laravel Project Setup

This is a Laravel project of customizable dashboard. Follow the steps below to set up and run the project locally.

## Prerequisites

Before you begin, ensure you have the following installed:

- PHP (7.3+)
- Composer
- Node.js
- NPM

## 1. Install PHP dependencies

Install all the required PHP dependencies:

```bash
composer install
```

## 2. Install JavaScript dependencies

Install all the required JavaScript dependencies:

```bash
npm install
```

## 3. Set up your environment file

Copy the `.env.example` file to create your `.env` file:

## 4. Generate the application key

Generate the application key for Laravel:

```bash
php artisan key:generate
```

## 5. Seed the database

Seed the database with the default data:

```bash
php artisan seed
```

## 6. Run the development build

Compile the front-end assets for development:

```bash
npm run dev
```

## 7. Start the Laravel development server

Start the server using Laravel's built-in server:

```bash
php artisan serve
```

Your application will be running on [http://localhost:8000](http://localhost:8000).

## 8. Additional Commands

- To migrate the database:

```bash
php artisan migrate
```

## License

This project is licensed under the MIT License.
