<?php
/**
*  Mamis.IT
*
*  NOTICE OF LICENSE
*
*  This source file is subject to the EULA
*  that is available through the world-wide-web at this URL:
*  http://www.mamis.com.au/licencing
*
*  @category   Mamis
*  @copyright  Copyright (c) 2014 by Mamis.IT (http://www.mamis.com.au)
*  @author     Matthew Muscat <matthew@mamis.com.au>
*  @license    http://www.mamis.com.au/licencing
*/

class Mamis_GoogleCustomerReviews_Helper_Data extends Mage_Core_Helper_Abstract
{
    /**
    * Config paths for using throughout the code
    */
    const XML_PATH_SETTINGS = 'mamis_googlecustomerreviews/';

    /**
    * Return store config value for key
    *
    * @param   string $key
    * @return  string
    */
    public function getStoreConfig($key, $flag=false)
    {
        $path = self::XML_PATH_SETTINGS . $key;

        if ($flag) {
            return Mage::getStoreConfigFlag($path);
        }
        else {
            return Mage::getStoreConfig($path);
        }
    }

    public function getMerchantId()
    {
        return self::getStoreConfig('general/merchant_id');
    }

    /* Begin GCR Badge Methods */

    public function isBadgeEnabled()
    {
        return self::getStoreConfig('badge/active', true);
    }

    public function getBadgePosition()
    {
        return self::getStoreConfig('badge/badge_position');
    }

    public function getBadgeContainer()
    {
        return self::getStoreConfig('badge/badge_container');
    }

    /* End GCR Badge Methods */

    /* Begin GCR Opt-In Configuration */

    public function isOptInEnabled()
    {
        return self::getStoreConfig('opt_in/active', true);
    }

    public function getOrderEstimatedDeliveryDays()
    {
        return self::getStoreConfig('opt_in/estimated_delivery_days');
    }

    public function getOptInStyle()
    {
        return self::getStoreConfig('opt_in/opt_in_style');
    }

    public function isSendProductsEnabled()
    {
        return self::getStoreConfig('opt_in/send_products', true);
    }

    /* End GCR Opt-In Configuration */
}
