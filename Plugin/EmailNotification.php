<?php
namespace GDW\DisableWelcomeEmail\Plugin;

use GDW\DisableWelcomeEmail\Helper\Data;

class EmailNotification extends \Magento\Customer\Model\EmailNotification {

    private $helper;
    
    public function __construct(Data $helper)
    {
        $this->helper = $helper;
    }


    public function aroundNewAccount(
        \Magento\Customer\Model\EmailNotification $subject,
        \Closure $proceed,
        \Magento\Customer\Api\Data\CustomerInterface $customer,
        $type,
        $backUrl = '',
        $storeId = 0,
        $sendemailStoreId = null
    ) {

        $code = 'customer/create_account/diable_send_welcome_email';

        if($this->helper->getConfigValue($code, $storeId) == true){
           return;
        }

        $result = $proceed($customer ,$type ,$backUrl ,$storeId ,$sendemailStoreId);
        return $result; 
    }

}

