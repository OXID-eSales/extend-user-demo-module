# OXID User Form Extension Example

This module is an example to demonstrate how to extend a user form in OXID eShop. It adds an additional input field to the billing address form.

Please see our tutorial [Extending a Frontend User Form](https://docs.oxid-esales.com/developer/en/latest/development/modules_components_themes/module/tutorials/frontend_user_forms.html) in the official OXID eShop documentation for more information.

## Branch Compatibility

- b-7.x branch / v2.x version - compatible with OXID eShop compilation 7.x
- b-6.x branch / v1.x version - compatible with OXID eShop compilation 6.x

## Installation

In shop's root directory, run the following commands:

``` shell
composer config repositories.oe_extenduserform vcs https://github.com/OXID-eSales/extend-user-demo-module.git
composer require oxid-esales/extend-user-demo-module
./vendor/bin/oe-eshop-db_migrate migrations:migrate oe_extenduserform
```
