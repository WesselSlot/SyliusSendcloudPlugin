# Sylius Sendcloud plugin

## Documentation
### Features
| Requirement        | Implemented |
| ------------- |:-------------:|
| Create a parcel in Sendcloud when the order is placed and payed | No |
| Show sync with Sendcloud status on the shipment overview| No |

## Quickstart Installation

1. Run `composer install`.

2. From the plugin skeleton root directory, run the following commands:

    ```bash
    $ (cd tests/Application && yarn install)
    $ (cd tests/Application && yarn build)
    $ (cd tests/Application && APP_ENV=test bin/console assets:install public)
    
    $ (cd tests/Application && APP_ENV=test bin/console doctrine:database:create)
    $ (cd tests/Application && APP_ENV=test bin/console doctrine:schema:create)
    ```

### Opening Sylius with your plugin

- Using `test` environment:

    ```bash
    (cd tests/Application && APP_ENV=test bin/console sylius:fixtures:load)
    (cd tests/Application && APP_ENV=test symfony server:start -d)
    ```
