<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2014 osCommerce

  Released under the GNU General Public License
*/

  define('MODULE_PAYMENT_PAYPAL_STANDARD_TEXT_TITLE', 'Πληρωμές PayPal Πρότυπο');
  define('MODULE_PAYMENT_PAYPAL_STANDARD_TEXT_PUBLIC_TITLE', 'PayPal (συμπεριλαμβανομένων των πιστωτικών και χρεωστικών καρτών)');
  define('MODULE_PAYMENT_PAYPAL_STANDARD_TEXT_DESCRIPTION', '<img src="images/icon_info.gif" border="0" />&nbsp;<a href="http://library.oscommerce.com/Package&en&paypal&oscom23&payments_standard" target="_blank" style="text-decoration: underline; font-weight: bold;">Δείτε Online Τεκμηρίωση</a><br /><br /><img src="images/icon_popup.gif" border="0" />&nbsp;<a href="https://www.paypal.com" target="_blank" style="text-decoration: underline; font-weight: bold;">Επισκεφθείτε την ιστοσελίδα PayPal</a>');

  define('MODULE_PAYMENT_PAYPAL_STANDARD_ERROR_ADMIN_CURL', 'Η ενότητα αυτή απαιτεί cURL να έχει ενεργοποιηθεί στην PHP και δεν θα φορτώσει μέχρι να έχει ενεργοποιηθεί σε αυτόν τον διακομιστή.');
  define('MODULE_PAYMENT_PAYPAL_STANDARD_ERROR_ADMIN_CONFIGURATION', 'Αυτή η ενότητα δεν θα φορτώσει μέχρι τον Πωλητή παράμετρο Διεύθυνση E-Mail έχει ρυθμιστεί. Παρακαλούμε επεξεργαστείτε και να διαμορφώσετε τις ρυθμίσεις της παρούσας ενότητας.');

  define('MODULE_PAYMENT_PAYPAL_STANDARD_TEXT_PAYPAL_RETURN_BUTTON', 'Επιστροφή στην ' . STORE_NAME); // Maximum length 60 characters, otherwise it is ignored.
  define('MODULE_PAYMENT_PAYPAL_STANDARD_TEXT_INVALID_TRANSACTION', 'Δεν ήταν δυνατή η επαλήθευση της συναλλαγής PayPal. Παρακαλώ δοκιμάστε ξανά.');

  define('MODULE_PAYMENT_PAYPAL_STANDARD_DIALOG_CONNECTION_LINK_TITLE', 'Δοκιμή σύνδεσης API διακομιστή');
  define('MODULE_PAYMENT_PAYPAL_STANDARD_DIALOG_CONNECTION_TITLE', 'Δοκιμή σύνδεσης API διακομιστή');
  define('MODULE_PAYMENT_PAYPAL_STANDARD_DIALOG_CONNECTION_GENERAL_TEXT', 'Δοκιμές σύνδεση με το διακομιστή ..');
  define('MODULE_PAYMENT_PAYPAL_STANDARD_DIALOG_CONNECTION_BUTTON_CLOSE', 'κοντά');
  define('MODULE_PAYMENT_PAYPAL_STANDARD_DIALOG_CONNECTION_TIME', 'Χρόνος σύνδεσης:');
  define('MODULE_PAYMENT_PAYPAL_STANDARD_DIALOG_CONNECTION_SUCCESS', 'Επιτυχία!');
  define('MODULE_PAYMENT_PAYPAL_STANDARD_DIALOG_CONNECTION_FAILED', 'Αποτυχία! Παρακαλούμε ελέγξτε τα Επιβεβαιώστε τις ρυθμίσεις SSL Certificate και προσπαθήστε ξανά.');
  define('MODULE_PAYMENT_PAYPAL_STANDARD_DIALOG_CONNECTION_ERROR', 'Παρουσιάστηκε σφάλμα. Παρακαλούμε ανανεώστε τη σελίδα, εξετάστε τις ρυθμίσεις σας, και δοκιμάστε ξανά.');
?>
