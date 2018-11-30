<?php
/**
 * Mamis.IT
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the EULA
 * that is available through the world-wide-web at this URL:
 * http://www.mamis.com.au/licencing
 *
 * @category   Mamis
 * @copyright  Copyright (c) 2016 by Mamis.IT Pty Ltd (http://www.mamis.com.au)
 * @author     Matthew Muscat <matthew@mamis.com.au>
 * @license    http://www.mamis.com.au/licencing
 */

class Mamis_GoogleCustomerReviews_Block_Badge extends Mamis_GoogleCustomerReviews_Block_Abstract
{
    public function getBadgePosition()
    {
        return Mage::helper('mamis_googlecustomerreviews')->getBadgePosition();
    }

    public function getBadgeContainer()
    {
        if ($this->getBadgePosition() == 'INLINE') {
            return Mage::helper('mamis_googlecustomerreviews')->getBadgeContainer();
        }
        else {
            return false;
        }
    }

    protected function _toHtml()
    {
        if (!Mage::helper('mamis_googlecustomerreviews')->isBadgeEnabled()) {
            return '';
        }

        return parent::_toHtml();
    }
}
