<h1 align="center" style="color:orange" >Velzon</h1>
<p align="center">
    <a href="https://packagist.org/packages/cpriego/valet-linux">
        <img src="https://poser.pugx.org/cpriego/valet-linux/license.svg" alt="License">
    </a>
</p>

## About

Velzon is a Laravel [Amazon](https://amazon.com) clone project using th ane TALL stack ([Tailwindcss](https://tailwindcss.com/), [Alpinejs](https://github.com/alpinejs/alpine/), [Laravel](https://laravel.com/), [Livewire](https://laravel-livewire.com/) ).

> Note: Work in Progress.

## Screenshots

![home-page](public/assets/images/screenshots/home-page.png)

See the full home page [here](https://raw.githubusercontent.com/josuapsianturi/velzon/main/public/assets/images/screenshots/home-page-full.png)

![shop-page](public/assets/images/screenshots/shop-page.png)

See the full shop page [here](https://raw.githubusercontent.com/josuapsianturi/velzon/main/public/assets/images/screenshots/shop-page-full.png)

![checkout-page](public/assets/images/screenshots/checkout-page.png)

See the full checkout page [here](https://raw.githubusercontent.com/josuapsianturi/velzon/main/public/assets/images/screenshots/checkout-page-full.png)

![cart-page](public/assets/images/screenshots/cart-page.png)

See the full cart page [here](https://raw.githubusercontent.com/josuapsianturi/velzon/main/public/assets/images/screenshots/cart-page-full.png)

![admin-all-products-page](public/assets/images/screenshots/admin-all-products-page.png)

see the full admin all products page [here](https://raw.githubusercontent.com/josuapsianturi/velzon/main/public/assets/images/screenshots/admin-all-products-page-full.png)

![stripe-payment-page](public/assets/images/screenshots/stripe-payment-page.png)

## Additional Features
- Pagination
- Filter products by price and items
- Related products & Popular products

## Requirements
-   Node v14.19.1
-   npm 6.14.16
-   composer 2.2.6
-   php 8.0.17
-   mysql 8.0.27

## Installation
Here is how you can run the project locally:
1. Clone this repo
    ```sh
    git clone https://github.com/josuapsianturi/velzon.git
    ```
1. Go into the project root directory
    ```sh
    cd velzon
    ```
1. Install PHP dependencies 
    ```sh
    composer install
    ```
1. Copy .env.example file to .env 
    ```sh
    cp .env.example .env
    ```
1. Generate key 
    ```sh
    php artisan key:generate
    ```
1. Create database velzon
1. Set your credentials
     DB_DATABASE=velzon, DB_USERNAME=yourDbUsername, DB_PASSWORD=yourDbPassword in your `.env` file
1. Migrate
    ```sh
    php artisan migrate
    ```
1. Seed
    ```sh
    php artisan db:seed
    ```
1. Run server 
    ```sh
    php artisan serve
    ```  
1. Visit `localhost:8000` in your favorite browser.     

    > Make sure to follow your Laravel local Development Environment.

## Contributing
Pull requests are welcome.

## License
Velzon is an open-sourced software licensed under [the MIT license](https://github.com/josuapsianturi/velzon/blob/main/LICENSE)
