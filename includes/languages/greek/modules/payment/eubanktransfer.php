<?php
/*
$Id: eubanktransfer.php,v 1.5 2006/01/16 14:36:04 i2paq Exp $

Thanks Onkel Flo for creating its basic.

osCommerce, Open Source E-Commerce Solutions
http://www.oscommerce.com

Copyright (c) 2002 osCommerce

Released under the GNU General Public License
BER 2013 translated from swedish to greek
*/

define('MODULE_PAYMENT_EU_BANKTRANSFER_TEXT_TITLE', 'ΕΕ τραπεζικό έμβασμα');
define('MODULE_PAYMENT_EU_BANKTRANSFER_TEXT_DESCRIPTION', '' .
'Παρακαλούμε να μεταφέρετε το συνολικό ποσό στον ακόλουθο τραπεζικό λογαριασμό. Μην ξεχάσετε να συμπεριλάβετε το όνομά σας και το id τάξη ως αποστολέα.<br />' .
'<br />λογαριασμός: ' . MODULE_PAYMENT_EU_ACCOUNT_HOLDER .
'<br />Ο λογαριασμός IBAN: ' . MODULE_PAYMENT_EU_IBAN .
'<br />BIC/SWIFT-code: ' . MODULE_PAYMENT_EU_BIC .
'<br />Τράπεζα: ' . MODULE_PAYMENT_EU_BANKNAME .
'<br /><br /><b>Σημείωση:</b> Έχετε επιλέξει να πληρώσει με τραπεζική μεταφορά, βεβαιωθείτε ότι η πληρωμή σε τραπεζικό λογαριασμό μας εντός 7 ημερών, διαφορετικά η παραγγελία σας θα διαγραφεί.<br />Στέλνουμε όταν η πληρωμή έχει καταχωρηθεί στον τραπεζικό λογαριασμό μας!<br />');

define('MODULE_PAYMENT_EU_BANKTRANSFER_TEXT_EMAIL_FOOTER', 'Παρακαλούμε να μεταφέρετε το συνολικό ποσό στον ακόλουθο τραπεζικό λογαριασμό. Πληκτρολογήστε το όνομά σας και το id τάξη, όπως τον αποστολέα.' . "\n" .
"λογαριασμός: " . MODULE_PAYMENT_EU_ACCOUNT_HOLDER . "\n" .
"Ο λογαριασμός IBAN: " . MODULE_PAYMENT_EU_IBAN . "\n" .
"BIC/SWIFT-code: " . MODULE_PAYMENT_EU_BIC . "\n" . 
"Τράπεζα: " . MODULE_PAYMENT_EU_BANKNAME . "\n\n" . 
'Σημείωση: Έχετε επιλέξει να πληρώσει με τραπεζική μεταφορά, βεβαιωθείτε ότι η πληρωμή σε τραπεζικό λογαριασμό μας εντός 7 ημερών, διαφορετικά η παραγγελία σας θα διαγραφεί.'. "\n" .
'Στέλνουμε όταν η πληρωμή έχει καταχωρηθεί στον τραπεζικό λογαριασμό μας!');
?>
