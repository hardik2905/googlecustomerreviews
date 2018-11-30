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

class Mamis_GoogleCustomerReviews_Block_Optin extends Mamis_GoogleCustomerReviews_Block_Abstract
{
    public function getOrderEstimatedDeliveryDays()
    {
        return Mage::helper('mamis_googlecustomerreviews')->getOrderEstimatedDeliveryDays();
    }

    public function getOptInStyle()
    {
        return Mage::helper('mamis_googlecustomerreviews')->getOptInStyle();
    }

    public function getOrder()
    {
        $orderIds = $this->getOrderIds();

        if (empty($orderIds) || !is_array($orderIds) || !isset($orderIds[0])) {
            return;
        }

        return Mage::getModel('sales/order')
            ->load($orderIds[0]);
    }

    public function getEstimatedDeliveryDate($order)
    {
        $orderDate = $order->getCreatedAtStoreDate()
            ->toString(Varien_Date::DATETIME_INTERNAL_FORMAT);
        $estimatedDeliveryDays = Mage::helper('mamis_googlecustomerreviews')
            ->getOrderEstimatedDeliveryDays();
        $deliveryDate = Mage::getModel('core/date')
            ->date('Y-m-d', strtotime($orderDate . "+$estimatedDeliveryDays  days"));

        return $deliveryDate;
    }

    public function getDeliveryCountry($order)
    {
        return $order->getShippingAddress()->getCountryId();
    }

    public function getOrderProducts($orderItems)
    {
        $orderProducts = array();

        if (Mage::helper('mamis_googlecustomerreviews')->isSendProductsEnabled()) {
            foreach ($orderItems as $orderItem) {
                $orderProducts[]['gtin'] = $orderItem->getProduct()->getSku();
            }
        }

        return json_encode($orderProducts);
    }

    protected function _toHtml()
    {
        if (!Mage::helper('mamis_googlecustomerreviews')->isOptInEnabled()) {
            return '';
        }

        return parent::_toHtml();
    }
}
