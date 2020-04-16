<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2014 osCommerce

  Released under the GNU General Public License
*/

  define('MODULE_PAYMENT_PAYPAL_EXPRESS_TEXT_TITLE', 'PayPal Express Checkout');
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_TEXT_PUBLIC_TITLE', 'PayPal (συμπεριλαμβανομένων των πιστωτικών και χρεωστικών καρτών)');
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_TEXT_DESCRIPTION', '<img src="images/icon_info.gif" border="0" />&nbsp;<a href="http://library.oscommerce.com/Package&en&paypal&oscom23&express_checkout" target="_blank" style="text-decoration: underline; font-weight: bold;">Δείτε Online Τεκμηρίωση</a><br /><br /><img src="images/icon_popup.gif" border="0" />&nbsp;<a href="https://www.paypal.com" target="_blank" style="text-decoration: underline; font-weight: bold;">Επισκεφθείτε την ιστοσελίδα PayPal</a>');

  define('MODULE_PAYMENT_PAYPAL_EXPRESS_ERROR_ADMIN_CURL', 'Η ενότητα αυτή απαιτεί cURL να έχει ενεργοποιηθεί στην PHP και δεν θα φορτώσει μέχρι να έχει ενεργοποιηθεί σε αυτόν τον διακομιστή.');
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_ERROR_ADMIN_CONFIGURATION', 'Αυτή η ενότητα δεν θα φορτώσει μέχρι το Λογαριασμό Πωλητή ή API διαπιστευτηρίων οι παράμετροι έχουν ρυθμιστεί. Παρακαλούμε επεξεργαστείτε και να διαμορφώσετε τις ρυθμίσεις της παρούσας ενότητας.');

  define('MODULE_PAYMENT_PAYPAL_EXPRESS_TEXT_BUTTON', 'Αναχώρηση με PayPal');
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_TEXT_COMMENTS', 'Σχόλια:');
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_EMAIL_PASSWORD', 'Ένας λογαριασμός αυτομάτως έχει δημιουργηθεί για σας με την ακόλουθη διεύθυνση e-mail και τον κωδικό πρόσβασης:' . "\n\n" . 'Ο λογαριασμός Κατάστημα Διεύθυνση E-Mail: %s' . "\n" . 'Ο λογαριασμός Κατάστημα Κωδικός: %s' . "\n\n");

  define('MODULE_PAYMENT_PAYPAL_EXPRESS_BUTTON', 'https://www.paypalobjects.com/webstatic/en_US/btn/btn_checkout_pp_142x27.png');
//  define('MODULE_PAYMENT_PAYPAL_EXPRESS_LANGUAGE_LOCALE', 'el_GR');
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_LANGUAGE_LOCALE', 'US');

  define('MODULE_PAYMENT_PAYPAL_EXPRESS_DIALOG_CONNECTION_LINK_TITLE', 'Δοκιμή σύνδεσης API διακομιστή');
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_DIALOG_CONNECTION_TITLE', 'Δοκιμή σύνδεσης API διακομιστή');
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_DIALOG_CONNECTION_GENERAL_TEXT', 'Δοκιμές σύνδεση με το διακομιστή ..');
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_DIALOG_CONNECTION_BUTTON_CLOSE', 'Κοντά');
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_DIALOG_CONNECTION_TIME', 'Χρόνος σύνδεσης:');
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_DIALOG_CONNECTION_SUCCESS', 'Επιτυχία!');
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_DIALOG_CONNECTION_FAILED', 'Αποτυχία! Παρακαλούμε ελέγξτε τα Επιβεβαιώστε τις ρυθμίσεις SSL Certificate και προσπαθήστε ξανά.');
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_DIALOG_CONNECTION_ERROR', 'Παρουσιάστηκε σφάλμα. Παρακαλούμε ανανεώστε τη σελίδα, εξετάστε τις ρυθμίσεις σας, και δοκιμάστε ξανά.');

  define('MODULE_PAYMENT_PAYPAL_EXPRESS_ERROR_NO_SHIPPING_AVAILABLE_TO_SHIPPING_ADDRESS', 'Αποστολή δεν είναι προς το παρόν διαθέσιμα για την επιλεγμένη διεύθυνση αποστολής. Παρακαλώ επιλέξετε ή να δημιουργήσετε μια νέα διεύθυνση αποστολής να χρησιμοποιήσετε με την αγορά σας.');
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_WARNING_LOCAL_LOGIN_REQUIRED', 'Συνδεθείτε στο λογαριασμό σας για να επιβεβαιώσετε την παραγγελία.');
  define('MODULE_PAYMENT_PAYPAL_EXPRESS_NOTICE_CHECKOUT_CONFIRMATION', 'Παρακαλούμε να διαβάσετε και να επιβεβαιώσετε την παραγγελία σας παρακάτω. Η παραγγελία σας δεν θα γίνει επεξεργασία μέχρι να έχει επιβεβαιωθεί.');
?>
