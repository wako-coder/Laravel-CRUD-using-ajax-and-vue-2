# Laravel AJAX CRUD Application

This is a simple example of using Laravel 5.8 and Vue 2 for creating CRUD applications with AJAX functionality.

## How To Build This Project From Zero
**[The Ultimate Guide For Creating Laravel CRUD AJAX Application using Laravel 5.8, Vue 2, Tailwindcss, Vue-router, and Axios](./steps.md)**


## Installation

1. Clone the repository:
```bash
git clone https://github.com/wako-coder/Laravel-CRUD-using-ajax-and-vue-2
Laravel-CRUD-using-ajax-and-vue-2
```

2. Copy `.env` file:
```
cp .env.example .env
```

3. Connect to database:
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

4. Install all the dependencies:
```bash
composer update
```

5. Run:
```bash
php artisan key:generate
```

6. migrate and seed the database:
```bash
php artisan migrate --seed
```

7. Done!  

8. Optional: Install npm dependencies to modify `sass` and `vue` files:
```bash
npm install
npm run dev
```
