![gdw_opengraph](https://gestiondigitalweb.com/github_assets/gdw_disablewelcomeemail/gdw_disablewelcomeemail.jpg)

# GDW DisableWelcomeEmail para Magento 2
Este módulo tiene la finalidad de deshabilitar el correo de bienvenida que se le envía a nuevos usuarios.

* La configuración puede ser por tienda.

## Compatibilidad
✓ Magento 2.3.x, ✓ Magento 2.4.x

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

### Expresiones de gratitud

* 📢 Comenta a otros sobre este proyecto.
* 👨🏽‍💻 Da las gracias públicamente.
* [🍺 Invítame una cerveza.](https://www.paypal.me/gestiondigitalweb)

### Otros enlaces
* [Sitio web](https://gestiondigitalweb.com/?utm_source=github&utm_medium=gdw&utm_campaign=core&utm_id=link)
* [Listado de Módulos](https://gestiondigitalweb.com/gdw-modulos/index.php)
* [Facebook](https://www.facebook.com/GestionDigitalWeb)
