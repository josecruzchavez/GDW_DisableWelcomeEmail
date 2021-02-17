<?php
namespace GDW\DisableWelcomeEmail\Block\Adminhtml\System;

use GDW\Core\Block\Adminhtml\System\Core\ModuleInfoFull as Fieldset;

class ModuleInfoFull extends Fieldset
{
    const GDW_MODULE_CODE = 'GDW_DisableWelcomeEmail';
    const GDW_MODULE_LINK = 'system_config/edit/section/customer/#customer_create_account-link';

    public function getDescFull()
    {
        $html =
<<<HTML
    <p>Deshabilita el mensaje de Bienvenida al crear una nueva cuenta.</p>
HTML;
        return $html;
    }
}