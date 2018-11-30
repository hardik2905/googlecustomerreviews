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

class Mamis_GoogleCustomerReviews_Model_Observer
{
    /**
     * Add order information into GA block to render on checkout success pages
     *
     * @param Varien_Event_Observer $observer
     */
    public function setGoogleCustomerReviewsOnOrderSuccessPageView(Varien_Event_Observer $observer)
    {
        $orderIds = $observer->getEvent()->getOrderIds();

        if (empty($orderIds) || !is_array($orderIds)) {
            return;
        }

        $block = Mage::app()->getFrontController()
            ->getAction()
            ->getLayout()
            ->getBlock('googlecustomerreviews.reviews.optin');

        if ($block) {
            $block->setOrderIds($orderIds);
        }
    }
}
