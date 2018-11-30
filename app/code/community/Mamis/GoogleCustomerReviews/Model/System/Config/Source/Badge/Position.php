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

class Mamis_GoogleCustomerReviews_Model_System_Config_Source_Badge_Position
{
    public $_badgePositions = array(
        "BOTTOM_RIGHT"  => "Bottom Right",
        "BOTTOM_LEFT"   => "Bottom Left",
        "INLINE"  => "Inline",
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
