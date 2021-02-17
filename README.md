# GDW DisableWelcomeEmail para Magento 2
Este módulo tiene la finalidad de deshabilitar el correo de bienvenida que se le envía a nuevos usuarios.
La configuración puede ser por tienda.

###### Ejecuta los siguientes comandos en la ruta base de Magento.

### Instalación

```
composer require gdw/disablewelcomeemail

php bin/magento module:enable GDW_DisableWelcomeEmail
php bin/magento setup:upgrade
php bin/magento setup:di:compile
php bin/magento setup:static-content:deploy
php bin/magento cache:flush
```

### Actualización

```
composer update gdw/disablewelcomeemail

php bin/magento module:enable GDW_DisableWelcomeEmail
php bin/magento setup:upgrade
php bin/magento setup:di:compile
php bin/magento setup:static-content:deploy
php bin/magento cache:flush
```

### Eliminación

```
php bin/magento module:disbale GDW_DisableWelcomeEmail
composer remove gdw/disablewelcomeemail
php bin/magento setup:upgrade
php bin/magento setup:di:compile
php bin/magento setup:static-content:deploy
php bin/magento cache:flush
```

### Expresiones de Gratitud

* Comenta a otros sobre este proyecto 📢
* [Invítame una cerveza 🍺](https://www.paypal.me/gestiondigitalweb). 
* Da las gracias públicamente. 
