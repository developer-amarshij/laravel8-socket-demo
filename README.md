# Laravel 8 socket demo project setup

Welcome to Laravel 8 socket demo! This document will guide you through the setup process for this Laravel project.

## Prerequisites

Make sure you have the following installed on your machine:

-   [PHP 7.4](https://www.php.net/manual/en/install.php)
-   [Composer 2.5](https://getcomposer.org/)
-   [Docker Desktop](https://docs.docker.com/desktop/setup/install/windows-install/)

## Getting Started

-   **Clone the repository:**

    ```bash
    git clone https://github.com/developer-amarshij/laravel8-socket-demo.git
    ```

-   **Navigate to the project folder:**

    ```bash
    cd laravel8-socket-demo
    ```

-   **Install PHP dependencies:**

    ```bash
    composer install
    ```

-   **Copy the example environment file and configure:**

    ```bash
    cp .env.example .env
    ```

    Update the `.env` file with your database credentials and other configuration settings.

-   **Generate application key:**

    ```bash
    php artisan key:generate
    ```

-   **Run database migrations:**

    ```bash
    php artisan migrate
    ```

-   **Run database seeder:**

    ```bash
    php artisan db:seed
    ```

-   **Create storage link:**

    ```bash
    php artisan storage:link
    ```

-   **Start docker the application:**

    ```bash
    docker compose up
    ```

    Visit [http://localhost:8000](http://localhost:8000) in your browser.
