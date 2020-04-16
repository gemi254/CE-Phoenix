<?php
/*
  $Id: advanced_search.php 1739 2007-12-20 00:52:16Z hpdl $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/

define('NAVBAR_TITLE_1', 'Σύνθετη Αναζήτηση');
define('NAVBAR_TITLE_2', 'Αποτελέσματα Αναζήτησης');

define('HEADING_TITLE_1', 'Σύνθετη Αναζήτηση');
define('HEADING_TITLE_2', 'Προϊόντα που συμπίπτουν με τα κριτήρια αναζήτησης');

define('HEADING_SEARCH_CRITERIA', 'Κριτήρια Αναζήτησης');

define('TEXT_SEARCH_IN_DESCRIPTION', 'Αναζήτηση Στις Περιγραφές Προϊόντων');
define('ENTRY_CATEGORIES', 'Κατηγορίες:');
define('ENTRY_INCLUDE_SUBCATEGORIES', 'Να Συμπεριληφθούν Οι Υποκατηγορίες');
define('ENTRY_MANUFACTURERS', 'Κατασκευαστές:');
define('ENTRY_PRICE_FROM', 'Τιμή Από:');
define('ENTRY_PRICE_TO', 'Τιμή Εώς:');
define('ENTRY_DATE_FROM', 'Ημερομηνία Από:');
define('ENTRY_DATE_TO', 'Ημερομηνία Εώς:');

define('TEXT_SEARCH_HELP_LINK', '<u>Βοήθεια Αναζήτησης</u> [?]');

define('TEXT_ALL_CATEGORIES', 'Όλες Οι Κατηγορίες');
define('TEXT_ALL_MANUFACTURERS', 'Όλοι Οι Κατασκευαστές');

define('HEADING_SEARCH_HELP', 'Βοήθεια Αναζήτησης');
define('TEXT_SEARCH_HELP', 'Οι όροι αναζήτησης μπορούν να διαχωρίζονται από τους όρους AND και/ή OR για μεγαλύτερο έλεγχο επί των αποτελεσμάτων της αναζήτησης.<br><br>Για παράδειγμα, η φράση <u>Microsoft AND ποντίκι</u> θα παράξει ένα σύνολο αποτελεσμάτων που θα περιέχει και τις δύο λέξεις. Ωστόσο, στη φράση <u>ποντίκι OR πληκτρολόγιο</u>, το σύνολο αποτελεσμάτων, που θα προκύψει, θα περιέχει και τις δύο ή μία από τις δύο λέξεις.<br><br>Ακριβείς φράσεις μπορούν να αναζητηθούν, εάν οι όροι αναζήτησης περικλείονται από εισαγωγικά.<br><br>Για παράδειγμα, η φράση <u>"φορητός υπολογιστής"</u> θα παράξει ένα σύνολο αποτελεσμάτων, τα οποία θα ταιριάζουν ακριβώς με τη φράση.<br><br>Οι παρενθέσεις μπορούν να χρησιμοποιηθούν για περισσότερο έλεγχο επί του συνόλου των αποτελεσμάτων.<br><br>Για παράδειγμα, <u>Microsoft AND (πληκτρολόγιο OR ποντίκι OR "visual basic")</u>.');
define('TEXT_CLOSE_WINDOW', '<u>Κλείσιμο Παραθύρου</u> [x]');

define('TABLE_HEADING_IMAGE', '');
define('TABLE_HEADING_MODEL', 'Τύπος');
define('TABLE_HEADING_PRODUCTS', 'Όνομα Προϊόντος');
define('TABLE_HEADING_MANUFACTURER', 'Κατασκευαστής');
define('TABLE_HEADING_QUANTITY', 'Ποσότητα');
define('TABLE_HEADING_PRICE', 'Τιμή');
define('TABLE_HEADING_WEIGHT', 'Βάρος');
define('TABLE_HEADING_BUY_NOW', 'Άμεση Αγορά');

define('TEXT_NO_PRODUCTS', 'Δεν υπάρχει προϊόν που να συμπίπτει με τα κριτήρια αναζήτησης.');

define('ERROR_AT_LEAST_ONE_INPUT', 'Πρέπει να συμπληρωθεί τουλάχιστον ένα από τα πεδία της φόρμας αναζήτησης.');
define('ERROR_INVALID_FROM_DATE', 'Μη έγκυρη Ημερομηνία Από.');
define('ERROR_INVALID_TO_DATE', 'Μη έγκυρη Ημερομηνία Εώς.');
define('ERROR_TO_DATE_LESS_THAN_FROM_DATE', 'Η Ημερομηνία Εώς πρέπει να είναι μεγαλύτερη ή ίση της Ημερομηνίας Από.');
define('ERROR_PRICE_FROM_MUST_BE_NUM', 'Η Τιμή Από πρέπει να είναι αριθμός.');
define('ERROR_PRICE_TO_MUST_BE_NUM', 'Η Τιμή Εώς πρέπει να είναι αριθμός.');
define('ERROR_PRICE_TO_LESS_THAN_PRICE_FROM', 'Η Τιμή Εώς πρέπει να είναι μεγαλύτερη ή ίση της Τιμής Από.');
define('ERROR_INVALID_KEYWORDS', 'Μη έγκυροι όροι αναζήτησης.');
?>
