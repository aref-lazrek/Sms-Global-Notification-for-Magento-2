# Sms-Global-Notification-for-Magento-2
a Magento 2 module for Sms notification with smsglobal.com using http api
For Customer & Admin

Installation 

Download ZIP Archive  
Put extracted files in app folder of your Magento 2 root directory

If your not in developer mode you need to run these commands:  
  
php bin/magento setup:upgrade  
php bin/magento setup:di:compile  
php bin/magento cache:clean  

go to stores/configuration and enter api credentials
enable notification and add a message
