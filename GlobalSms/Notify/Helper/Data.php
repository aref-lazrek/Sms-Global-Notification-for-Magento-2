<?php

namespace GlobalSms\Notify\Helper;

use \Magento\Framework\App\ObjectManager as ObjectManager;
use \Magento\Framework\Event\Observer as Observer;
use \Magento\Store\Model\ScopeInterface as ScopeInterface;
use \Magento\Framework\App\Helper\AbstractHelper as AbstractHelper;

class Data extends AbstractHelper
{

    /**
     * To be used by the API
     * @var string
     */
    protected $_host             = 'https://api.smsglobal.com/';

    /**
     * Getting Basic Configuration
     * These functions are used to get the api username and password
     */

    /**
     * Getting GlobalSMS API Username
     * @return string
     */
    public function getGlobalSmsApiUsername()
    {
        return $this->getConfig('globalsms_notify_configuration/basic_configuration/notify_username');
    }

    /**
     * Getting GlobalSMS API Password
     * @return string
     */
    public function getGlobalSmsApiPassword()
    {
        return $this->getConfig('globalsms_notify_configuration/basic_configuration/notify_password');
    }


    /**
     * Checking Admin SMS is enabled or not
     * @return string
     */
    public function isAdminNotificationsEnabled()
    {
        return $this->getConfig('globalsms_notify_admins/admin_configuration/notify_admin_enabled');
    }

    /**
     * Getting Admin Mobile Number
     * @return string
     */
    public function getAdminSenderId()
    {
        return $this->getConfig('globalsms_notify_admins/admin_configuration/notify_admin_mobile');
    }

    /**
     * Getting admin message for new order
     * @return string
     */
    public function getAdminMessageForNewOrder()
    {
        return $this->getConfig('globalsms_notify_admins/admin_configuration/notify_new_order_admin_message');
    }

    /**
     * Getting Admin message for order Hold
     * @return string
     */
    public function getAdminMessageForOrderHold()
    {
        return $this->getConfig('globalsms_notify_admins/admin_configuration/notify_hold_admin_message');
    }

    /**
     * Getting Admin message for order unhold
     * @return string
     */
    public function getAdminMessageForOrderUnHold()
    {
        return $this->getConfig('globalsms_notify_admins/admin_configuration/notify_unhold_admin_message');
    }

    /**
     * Getting Admin message for order cancelled
     * @return string
     */
    public function getAdminMessageForOrderCancelled()
    {
        return $this->getConfig('globalsms_notify_admins/admin_configuration/notify_cancelled_admin_message');
    }

    /**
     * Getting Admin message for Invoiced
     * @return string
     */
    public function getAdminMessageForInvoiced()
    {
        return $this->getConfig('globalsms_notify_admins/admin_configuration/notify_invoiced_admin_message');
    }


    /**
     * Getting Admin message for Sign up
     * @return string
     */
    public function getAdminMessageForRegister()
    {
        return $this->getConfig('globalsms_notify_admins/admin_configuration/notify_register_admin_message');
    }


    /**
     * Getting Customer Configuration
     * These functions are used to get the customer information when new order is placed
     */

    /**
     * Checking Customer SMS is enabled or not
     * @return string
     */
    public function isCustomerNotificationsEnabledOnOrder()
    {
        return $this->getConfig('globalsms_notify_orders/new_order/notify_new_order_enabled');
    }

    /**
     * Getting Customer Sender ID
     * @return string
     */
    public function getCustomerSenderId()
    {
        return $this->getConfig('globalsms_notify_orders/new_order/notify_new_order_sender_id');
    }

    /**
     * Getting Customer Message
     * @return string
     */
    public function getCustomerMessageOnOrder()
    {
        return $this->getConfig('globalsms_notify_orders/new_order/notify_new_order_message');
    }

    /**
     * Getting Customer Configuration
     * These functions are used to get the customer information when order is on hold
     */

    /**
     * Checking Customer SMS is enabled or not
     * @return string
     */
    public function isCustomerNotificationsEnabledOnHold()
    {
        return $this->getConfig('globalsms_notify_orders/hold_order/notify_hold_order_enabled');
    }

    /**
     * Getting Customer Sender ID
     * @return string
     */
    public function getCustomerSenderIdonHold()
    {
        return $this->getConfig('globalsms_notify_orders/hold_order/notify_hold_order_sender_id');
    }

    /**
     * Getting Customer Message
     * @return string
     */
    public function getCustomerMessageOnHold()
    {
        return $this->getConfig('globalsms_notify_orders/hold_order/notify_hold_order_message');
    }

    /**
     * Getting Customer Configuration
     * These functions are used to get the customer information when order is on un hold
     */

    /**
     * Checking Customer SMS is enabled or not
     * @return string
     */
    public function isCustomerNotificationsEnabledOnUnHold()
    {
        return $this->getConfig('globalsms_notify_orders/unhold_order/notify_unhold_order_enabled');
    }

    /**
     * Getting Customer Sender ID
     * @return string
     */
    public function getCustomerSenderIdonUnHold()
    {
        return $this->getConfig('globalsms_notify_orders/unhold_order/notify_unhold_order_sender_id');
    }

    /**
     * Getting Customer Message
     * @return string
     */
    public function getCustomerMessageOnUnHold()
    {
        return $this->getConfig('globalsms_notify_orders/unhold_order/notify_unhold_order_message');
    }

    /**
     * Getting Customer Configuration
     * These functions are used to get the customer information when order is Cancelled
     */

    /**
     * Checking Customer SMS is enabled or not
     * @return string
     */
    public function isCustomerNotificationsEnabledOnCancelled()
    {
        return $this->getConfig('globalsms_notify_orders/cancelled_order/notify_cancelled_order_enabled');
    }

    /**
     * Getting Customer Sender ID
     * @return string
     */
    public function getCustomerSenderIdonCancelled()
    {
        return $this->getConfig('globalsms_notify_orders/cancelled_order/notify_cancelled_order_sender_id');
    }

    /**
     * Getting Customer Message
     * @return string
     */
    public function getCustomerMessageOnCancelled()
    {
        return $this->getConfig('globalsms_notify_orders/cancelled_order/notify_cancelled_order_message');
    }

    /**
     * Getting Customer Configuration
     * These functions are used to get the customer information when invoice is created
     */

    /**
     * Checking Customer SMS is enabled or not
     * @return string
     */
    public function isCustomerNotificationsEnabledOnInvoiced()
    {
        return $this->getConfig('globalsms_notify_orders/invoiced_order/notify_invoiced_order_enabled');
    }

    /**
     * Getting Customer Sender ID
     * @return string
     */
    public function getCustomerSenderIdonInvoiced()
    {
        return $this->getConfig('globalsms_notify_orders/invoiced_order/notify_invoiced_order_sender_id');
    }

    /**
     * Getting Customer Message
     * @return string
     */
    public function getCustomerMessageOnInvoiced()
    {
        return $this->getConfig('globalsms_notify_orders/invoiced_order/notify_invoiced_order_message');
    }

    /**
     * The Basics:
     * These functions are used to do the basic functionality
     */

    /**
     * Send Configuration path to this function and get the module admin Config data
     * @param @var $configPath
     * @return string
     */
    public function getConfig($configPath)
    {
        return $this->scopeConfig->getValue(
            $configPath,
            ScopeInterface::SCOPE_STORE);
    }

    /**
     * Curl Function to get the result from GlobalSMS API
     * @param @var $url
     * @return string
     */
    public function curl($url)
    {   
        return file_get_contents($url);

    }

    /**
     * Verification of API Account
     * @param @var $username
     * @param @var $password
     * @return bool
     */
    public function verifyApi($username, $password)
    {
       return  true;
    }


    /**
     * Sending SMS
     * @param @var $username
     * @param @var $password
     * @param @var $senderID
     * @param @var $destination
     * @param @var $message
     * @return void
     */
    public function sendSms($username, $password, $senderID, $destination, $message)
    {
    	  $_destination=ltrim(ltrim($destination, '+'), '0');
        $_host       = $this->_host;
        $path       = 'http-api.php?action=sendsms';
        $data       = '&user='.urlencode($username).
                      '&password='.urlencode($password).
                      '&from='.urlencode($senderID).
                      '&to='.urlencode($_destination).             
                      '&text='.urlencode($message);
        $url        = $_host.$path.$data;
        $this->curl($url);
    }


    /**
     * Insert Admin Config Values in the message using order data
     * @param @var $message
     * @param @var $data
     * @return string
     */
    public function manipulateSMS($message, $data)
    {
        $keywords   = [
            '{order_id}',
            '{firstname}',
            '{middlename}',
            '{lastname}',
            '{dob}',
            '{email}',
            '{price}',
            '{cc}',
            '{gender}',
            '{pc}'
        ];
        $message            = str_replace($keywords, $data, $message);
        return $message;
    }

    /**
     * The Fetchers
     * These functions are used to fetch the details using observer
     */

    /**
     * Getting Products
     * @param Observer $observer
     * @return string
     */
    public function getProduct(Observer $observer)
    {
        $productId          = $observer->getProduct()->getId();
        $objectManager      = ObjectManager::getInstance();
        $product            = $objectManager->get('Magento\Catalog\Model\Product')->load($productId);
        return $product;
    }

    /**
     * Getting Order Details
     * @param Observer $observer
     * @return string
     */
    public function getOrder(Observer $observer)
    {
        $order              = $observer->getOrder();
        $orderId            = $order->getIncrementId();
        $objectManager      = ObjectManager::getInstance();
        $order              = $objectManager->get('Magento\Sales\Model\Order');
        $orderInformation   = $order->loadByIncrementId($orderId);
        return $orderInformation;
    }
}