# OXID User Form Extension Example

This module is an example to demonstrate how to extend a user form in OXID eShop.

The corresponding tutorial can be found in our [official documentation](https://docs.oxid-esales.com/developer/en/latest/development/modules_components_themes/module/tutorials/frontend_user_forms.html).

Installation
------------

In shop's root directory, run the following commands:


``` shell
composer config repositories.oe_extenduserform vcs https://github.com/OXID-eSales/extend-user-demo-module.git
composer require oxid-esales/extend-user-demo-module
./vendor/bin/oe-eshop-db_migrate migrations:migrate oe_extenduserform
```
