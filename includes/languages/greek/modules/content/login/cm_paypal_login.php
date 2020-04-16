<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2014 osCommerce

  Released under the GNU General Public License
*/

  define('MODULE_CONTENT_PAYPAL_LOGIN_TITLE', 'Σύνδεση με PayPal');
  define('MODULE_CONTENT_PAYPAL_LOGIN_DESCRIPTION', 'Ενεργοποίηση Σύνδεση με PayPal με απρόσκοπτη ολοκλήρωση της παραγγελίας για το PayPal Express Checkout πληρωμές<br /><br /><img src="images/icon_info.gif" border="0" />&nbsp;<a href="http://library.oscommerce.com/Package&en&paypal&oscom23&log_in" target="_blank" style="text-decoration: underline; font-weight: bold;">Δείτε Online Τεκμηρίωση</a><br /><br /><img src="images/icon_popup.gif" border="0">&nbsp;<a href="https://www.paypal.com" target="_blank" style="text-decoration: underline; font-weight: bold;">Επισκεφθείτε την ιστοσελίδα PayPal</a>');

  define('MODULE_CONTENT_PAYPAL_LOGIN_TEMPLATE_TITLE', 'Σύνδεση με PayPal');
  define('MODULE_CONTENT_PAYPAL_LOGIN_TEMPLATE_CONTENT', 'Έχετε λογαριασμό στο PayPal; Ασφαλής συνδεθείτε με το PayPal για να ψωνίζουν ακόμα πιο γρήγορα!');
  define('MODULE_CONTENT_PAYPAL_LOGIN_TEMPLATE_SANDBOX', 'Λειτουργία Test: Ο διακομιστής Sandbox έχει επιλεχθεί.');

  define('MODULE_CONTENT_PAYPAL_LOGIN_ERROR_ADMIN_CURL', 'Η ενότητα αυτή απαιτεί cURL να έχει ενεργοποιηθεί στην PHP και δεν θα φορτώσει μέχρι να έχει ενεργοποιηθεί σε αυτόν τον διακομιστή.');
  define('MODULE_CONTENT_PAYPAL_LOGIN_ERROR_ADMIN_CONFIGURATION', 'Αυτή η ενότητα δεν θα φορτώσει μέχρι το αναγνωριστικό πελάτη και Secret παράμετροι έχουν ρυθμιστεί. Παρακαλούμε επεξεργαστείτε και να διαμορφώσετε τις ρυθμίσεις της παρούσας ενότητας.');

  define('MODULE_CONTENT_PAYPAL_LOGIN_LANGUAGE_LOCALE', 'el_GR');

  define('MODULE_CONTENT_PAYPAL_LOGIN_ATTR_GROUP_personal', 'Προσωπικές Πληροφορίες');
  define('MODULE_CONTENT_PAYPAL_LOGIN_ATTR_GROUP_address', 'Διεύθυνση Πληροφοριών');
  define('MODULE_CONTENT_PAYPAL_LOGIN_ATTR_GROUP_account', 'Πληροφορίες Λογαριασμού');
  define('MODULE_CONTENT_PAYPAL_LOGIN_ATTR_GROUP_checkout', 'Ταμείο Express');

  define('MODULE_CONTENT_PAYPAL_LOGIN_ATTR_full_name', 'Ονοματεπώνυμο');
  define('MODULE_CONTENT_PAYPAL_LOGIN_ATTR_date_of_birth', 'Ημερομηνία Γέννησης');
  define('MODULE_CONTENT_PAYPAL_LOGIN_ATTR_age_range', 'Ηλικία');
  define('MODULE_CONTENT_PAYPAL_LOGIN_ATTR_gender', 'Γένος');
  define('MODULE_CONTENT_PAYPAL_LOGIN_ATTR_email_address', 'Διεύθυνση ηλεκτρονικού ταχυδρομείου');
  define('MODULE_CONTENT_PAYPAL_LOGIN_ATTR_street_address', 'Οδός');
  define('MODULE_CONTENT_PAYPAL_LOGIN_ATTR_city', 'Πόλη');
  define('MODULE_CONTENT_PAYPAL_LOGIN_ATTR_state', 'Κατάσταση');
  define('MODULE_CONTENT_PAYPAL_LOGIN_ATTR_country', 'Χώρα');
  define('MODULE_CONTENT_PAYPAL_LOGIN_ATTR_zip_code', 'Ταχυδρομικός Κώδικας');
  define('MODULE_CONTENT_PAYPAL_LOGIN_ATTR_phone', 'Τηλέφωνο');
  define('MODULE_CONTENT_PAYPAL_LOGIN_ATTR_account_status', 'Κατάσταση Λογαριασμού (επαλήθευση)');
  define('MODULE_CONTENT_PAYPAL_LOGIN_ATTR_account_type', 'Είδος Λογαριασμού');
  define('MODULE_CONTENT_PAYPAL_LOGIN_ATTR_account_creation_date', 'Ημερομηνία Δημιουργίας Λογαριασμού');
  define('MODULE_CONTENT_PAYPAL_LOGIN_ATTR_time_zone', 'Time Zone');
  define('MODULE_CONTENT_PAYPAL_LOGIN_ATTR_locale', 'Τοπικές');
  define('MODULE_CONTENT_PAYPAL_LOGIN_ATTR_language', 'Γλώσσα');
  define('MODULE_CONTENT_PAYPAL_LOGIN_ATTR_seamless_checkout', 'Ευκολότερη Ταμείο');

  define('MODULE_CONTENT_PAYPAL_LOGIN_DIALOG_CONNECTION_LINK_TITLE', 'Δοκιμή σύνδεσης API διακομιστή');
  define('MODULE_CONTENT_PAYPAL_LOGIN_DIALOG_CONNECTION_TITLE', 'Δοκιμή σύνδεσης API διακομιστή');
  define('MODULE_CONTENT_PAYPAL_LOGIN_DIALOG_CONNECTION_GENERAL_TEXT', 'Δοκιμές σύνδεση με το διακομιστή ..');
  define('MODULE_CONTENT_PAYPAL_LOGIN_DIALOG_CONNECTION_BUTTON_CLOSE', 'Κοντά');
  define('MODULE_CONTENT_PAYPAL_LOGIN_DIALOG_CONNECTION_TIME', 'Χρόνος σύνδεσης:');
  define('MODULE_CONTENT_PAYPAL_LOGIN_DIALOG_CONNECTION_SUCCESS', 'Επιτυχία!');
  define('MODULE_CONTENT_PAYPAL_LOGIN_DIALOG_CONNECTION_FAILED', 'Αποτυχία! Παρακαλούμε ελέγξτε τα Επιβεβαιώστε τις ρυθμίσεις SSL Certificate και προσπαθήστε ξανά.');
  define('MODULE_CONTENT_PAYPAL_LOGIN_DIALOG_CONNECTION_ERROR', 'Παρουσιάστηκε σφάλμα. Παρακαλούμε ανανεώστε τη σελίδα, εξετάστε τις ρυθμίσεις σας, και δοκιμάστε ξανά.');

  define('MODULE_CONTENT_PAYPAL_LOGIN_DIALOG_URLS_LINK_TITLE', 'Εμφάνιση URLs PayPal Εφαρμογή');
  define('MODULE_CONTENT_PAYPAL_LOGIN_DIALOG_URLS_TITLE', 'URLs PayPal Εφαρμογή');
  define('MODULE_CONTENT_PAYPAL_LOGIN_DIALOG_URLS_RETURN_TEXT', 'Ανακατεύθυνση / URL Επιστροφή:');
  define('MODULE_CONTENT_PAYPAL_LOGIN_DIALOG_URLS_PRIVACY_TEXT', 'Πολιτική Προστασίας Προσωπικών Δεδομένων URL:');
  define('MODULE_CONTENT_PAYPAL_LOGIN_DIALOG_URLS_TERMS_TEXT', 'Συμφωνία χρήστη URL:');
  define('MODULE_CONTENT_PAYPAL_LOGIN_DIALOG_URLS_BUTTON_CLOSE', 'Κοντά');
?>
