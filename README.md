# fizzBuzzApi

### Installation

1. Install the dependencies.

    ```sh
    $ composer install
    ```

    or

    ```sh
    $ php composer.phar install
    ```

2. If you run

    ```sh
    $ php artisan serve
    ```

    The endpoint of the result is goint to be: http://127.0.0.1:8000/api/fizzbuzz/:min/:max

    If you put the project in a virtualhost the enpoint is going to be: {SERVER_NAME}/api/fizzbuzz/:min/:max

    Where min and max are two int numbers ex: -10, 20

3. Run the Test

    ```sh
    $ ./vendor/bin/phpunit
    ```
