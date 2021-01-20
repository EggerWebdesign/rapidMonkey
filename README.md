# rapidMonkey CMS based on Laravel 8.0+

## Requirements

-   Laravel installer
-   Composer
-   Npm installer

## Installation

```
# Clone the repository from GitHub and open the directory:
git clone https://github.com/EggerWebdesign/rapidMonkey.git

# cd into your project directory
cd rapdMonkey

#install composer and npm packages
composer install
npm install && npm run dev

# Start prepare the environment:
cp .env.example .env // setup database credentials
php artisan key:generate
php artisan migrate
php artisan storage:link

# Run your server
php artisan serve

```

### Project made possible thanks to:

-   [Laravel Jetstream](https://jetstream.laravel.com/1.x/introduction.html)
-   [Tailwind CSS](https://tailwindcss.com/)
-   [Windmill Dashboard](https://windmill-dashboard.vercel.app/)
-   [Larawind](https://github.com/miten5/larawind)
