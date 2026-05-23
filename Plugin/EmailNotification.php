<?php
namespace GDW\DisableWelcomeEmail\Plugin;

use GDW\DisableWelcomeEmail\Helper\Data;
use Magento\Customer\Api\Data\CustomerInterface;

class EmailNotification extends \Magento\Customer\Model\EmailNotification {

    private Data $helper;
    
    public function __construct(Data $helper)
    {
        $this->helper = $helper;
    }


    public function aroundNewAccount(
        \Magento\Customer\Model\EmailNotification $subject,
        \Closure $proceed,
        CustomerInterface $customer,
        string $type,
        ?string $backUrl = '',
        ?int $storeId = 0,
        ?string $sendemailStoreId = null
    ): void {

        $code = 'customer/create_account/diable_send_welcome_email';

        if ($this->helper->getConfigValue($code, $storeId) == true) {
            return;
        }

        $proceed($customer, $type, $backUrl, $storeId, $sendemailStoreId);
    }

}

