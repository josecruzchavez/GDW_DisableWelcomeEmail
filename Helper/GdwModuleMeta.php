<?php
declare(strict_types=1);

namespace GDW\DisableWelcomeEmail\Helper;

final class GdwModuleMeta
{
    /** @return array{desc:string, config_path:string, config_anchor:string, repo_url:string, docs_url:string} */
    public static function getMeta(): array
    {
        return [
            'desc' => 'Deshabilita el mensaje de bienvenida al crear una nueva cuenta.',
            'config_path' => 'adminhtml/system_config/edit/section/customer',
            'config_anchor' => '#customer_create_account-link',
            'repo_url' => 'https://github.com/josecruzchavez/GDW_DisableWelcomeEmail',
            'docs_url' => 'https://docs.gdw.mx/modulos/gdw_disablewelcomeemail',
        ];
    }
}