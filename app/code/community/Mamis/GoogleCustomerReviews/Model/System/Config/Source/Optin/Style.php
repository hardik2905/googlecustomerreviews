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

class Mamis_GoogleCustomerReviews_Model_System_Config_Source_Optin_Style
{
    public $_badgePositions = array(
        "CENTER_DIALOG"  => "Center",
        "BOTTOM_RIGHT_DIALOG"   => "Bottom Right",
        "BOTTOM_LEFT_DIALOG"  => "Bottom Left",
        "TOP_RIGHT_DIALOG"  => "Top Right",
        "TOP_LEFT_DIALOG"  => "Top Left",
        "BOTTOM_TRAY"  => "Bottom Tray",
    );

    /**
     * Returns code => code pairs of attributes for all order attributes
     *
     * @return array
     */
    public function toOptionArray()
    {
        return $this->_badgePositions;
    }
}
