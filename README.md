![gdw_opengraph](https://medios.gdw.mx/github_assets/gdw_disablewelcomeemail/gdw_disablewelcomeemail.jpg)

# GDW DisableWelcomeEmail para Magento 2
[![Latest Stable Version](https://img.shields.io/packagist/v/gdw/disablewelcomeemail?style=for-the-badge)](https://packagist.org/packages/gdw/disablewelcomeemail) [![PHP Version Require](https://img.shields.io/packagist/dependency-v/gdw/disablewelcomeemail/php?style=for-the-badge)](https://packagist.org/packages/gdw/disablewelcomeemail) [![Magento Framework Require](https://img.shields.io/packagist/dependency-v/gdw/disablewelcomeemail/magento%2Fframework?style=for-the-badge)](https://packagist.org/packages/gdw/disablewelcomeemail) [![License](https://img.shields.io/packagist/l/gdw/disablewelcomeemail?style=for-the-badge)](https://packagist.org/packages/gdw/disablewelcomeemail)


Este módulo tiene la finalidad de deshabilitar el correo de bienvenida que se le envía a nuevos usuarios.

* La configuración puede ser por tienda.

## Compatibilidad
✓ Magento 2.4.0 a 2.4.3 (rama 4.x)

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
* [Sitio web](https://gdw.com/?utm_source=github&utm_medium=gdw&utm_campaign=disablewelcomeemail&utm_id=link)
* [Listado de Módulos](https://gdw.mx/modulos/)
* [Facebook](https://www.facebook.com/GestionDigitalWeb)
* [Youtube](https://www.youtube.com/c/Gestiondigitalweb)


### Documentación

- [https://docs.gdw.mx/modulos/gdw_disablewelcomeemail](https://docs.gdw.mx/modulos/gdw_disablewelcomeemail)

### Changelog
Consulta el changelog del módulo en:

- [https://docs.gdw.mx/modulos/gdw_disablewelcomeemail/changelog](https://docs.gdw.mx/modulos/gdw_disablewelcomeemail/changelog)
