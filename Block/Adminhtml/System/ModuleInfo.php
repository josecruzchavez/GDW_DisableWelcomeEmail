<?php
namespace GDW\DisableWelcomeEmail\Block\Adminhtml\System;

use GDW\Core\Block\Adminhtml\System\Core\ModuleInfo as Fieldset;

class ModuleInfo extends Fieldset
{
    const GDW_MODULE_CODE = 'GDW_DisableWelcomeEmail';

    public function getDesc()
    {
        return 'Deshabilita el mensaje de Bienvenida al crear una nueva cuenta.';
    }
}