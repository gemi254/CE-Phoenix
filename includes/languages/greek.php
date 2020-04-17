<?php
/*
  $Id$

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2020 osCommerce

  Released under the GNU General Public License
*/

// look in your $PATH_LOCALE/locale directory for available locales
// or type locale -a on the server.
// Array examples which should work on all servers:
// 'en_US.UTF-8 = 'en_US.UTF8 = 'enu_usa'
// 'en_GB.UTF-8 = 'en_GB.UTF8 = 'eng_gb'
// 'en_AU.UTF-8 = 'en_AU.UTF8 = 'ena_au'
@setlocale(LC_TIME, 'el_GR.UTF-8'); mb_internal_encoding("UTF-8");

const DATE_FORMAT_SHORT = '%d/%m/%Y';  // this is used for strftime()
const DATE_FORMAT_LONG = '%A %d %B, %Y'; // this is used for strftime()
const DATE_FORMAT = 'd/m/Y'; // this is used for date()
const DATE_TIME_FORMAT = DATE_FORMAT_SHORT . ' %H:%M:%S';
const JQUERY_DATEPICKER_I18N_CODE = 'el'; // leave empty for en_US; see http://jqueryui.com/demos/datepicker/#localization
const JQUERY_DATEPICKER_FORMAT = 'dd/mm/yy'; // see http://docs.jquery.com/UI/Datepicker/formatDate

// if USE_DEFAULT_LANGUAGE_CURRENCY is true, use the following currency, instead of the applications default currency (used when changing language)
const LANGUAGE_CURRENCY = 'EUR';

// Global entries for the <html> tag
//const HTML_PARAMS = 'dir="ltr" lang="el"';
const HTML_PARAMS = 'dir="ltr" lang="gr"';

// charset for web pages and emails
const CHARSET = 'utf-8';

// page title
const TITLE = STORE_NAME;

// header text in includes/header.php
const HEADER_TITLE_CREATE_ACCOUNT = 'Δημιουργία Λογαριασμού';
const HEADER_TITLE_MY_ACCOUNT = 'Ο Λογαριασμός Μου';
const HEADER_TITLE_CART_CONTENTS = 'Περιεχόμενα Καλαθιού';
const HEADER_TITLE_CHECKOUT = 'Ολοκλήρωση Αγορών';
const HEADER_TITLE_TOP = 'Αρχική';
const HEADER_TITLE_CATALOG = 'Κατάλογος';
const HEADER_TITLE_LOGOFF = 'Έξοδος';
const HEADER_TITLE_LOGIN = 'Είσοδος';

// footer text in includes/footer.php
const FOOTER_TEXT_REQUESTS_SINCE = 'αιτήματα από';

// text for gender
const MALE = 'Άντρας';
const FEMALE = 'Γυναίκα';
const MALE_ADDRESS = 'Κος';
const FEMALE_ADDRESS = 'Κα';

// text for date of birth example
const DOB_FORMAT_STRING = 'mm/dd/yyyy';

// checkout procedure text
const CHECKOUT_BAR_DELIVERY = 'Πληροφορίες Παράδοσης';
const CHECKOUT_BAR_PAYMENT = 'Πληροφορίες Πληρωμής';
const CHECKOUT_BAR_CONFIRMATION = 'Επιβεβαίωση';
const CHECKOUT_BAR_FINISHED = 'Τελειώσατε!';

// pull down default text
const PULL_DOWN_DEFAULT = 'Επιλέξτε';
const TYPE_BELOW = 'Συμπληρώστε';

// javascript messages
const JS_ERROR = 'Προέκυψαν σφάλματα κατά την επεξεργασία της φόρμας σας.\n\nΠαρακαλούμε διορθώστε τα παρακάτω:\n\n';

//const JS_REVIEW_TEXT = '* Το \'Κείμενο Αξιολόγησης\' πρέπει να έχει τουλάχιστον ' . REVIEW_TEXT_MIN_LENGTH . ' χαρακτήρες.\n';
const JS_REVIEW_RATING = '* Πρέπει να αξιολογήσετε το προϊόν για την κριτική σας.\n';

const JS_ERROR_NO_PAYMENT_MODULE_SELECTED = '* Επιλέξτε τρόπο πληρωμής για την παραγγελία σας.\n';

const JS_ERROR_SUBMITTED = 'Η φόρμα έχει ήδη υποβληθεί. Πατήστε Εντάξει και περιμένετε να ολοκληρωθεί αυτή η διαδικασία.';

const ERROR_NO_PAYMENT_MODULE_SELECTED = 'Επιλέξτε τρόπο πληρωμής για την παραγγελία σας.';

const CATEGORY_COMPANY = 'Στοιχεία Επιχείρησης';
const CATEGORY_PERSONAL = 'Οι Προσωπικές Σας Πληροφορίες';
const CATEGORY_ADDRESS = 'Η Διεύθυνσή Σας';
const CATEGORY_CONTACT = 'Τα Στοιχεία Επικοινωνίας Σας';
const CATEGORY_OPTIONS = 'Επιλογές';
const CATEGORY_PASSWORD = 'Ο Κωδικός Σας';

const ENTRY_COMPANY = 'Τίτλος Επιχείρησης:';
const ENTRY_COMPANY_TEXT = '';
const ENTRY_GENDER = 'Φύλο:';
const ENTRY_GENDER_ERROR = 'Επιλέξτε το Γένος σας.';
const ENTRY_GENDER_TEXT = '*';
const ENTRY_FIRST_NAME = 'Όνομα:';
const ENTRY_FIRST_NAME_ERROR = 'Το Όνομά σας πρέπει να περιέχει τουλάχιστον ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' χαρακτήρες.';
const ENTRY_FIRST_NAME_TEXT = '*';
const ENTRY_LAST_NAME = 'Επώνυμο:';
const ENTRY_LAST_NAME_ERROR = 'Το Επώνυμό σας πρέπει να περιέχει τουλάχιστον ' . ENTRY_LAST_NAME_MIN_LENGTH . ' χαρακτήρες.';
const ENTRY_LAST_NAME_TEXT = '*';
const ENTRY_DATE_OF_BIRTH = 'Ημ/νία Γέννησης:';
const ENTRY_DATE_OF_BIRTH_ERROR = 'Η Ημ/νία Γέννησής σας πρέπει να είναι αυτής της μορφής: HH/MM/ΕΕΕΕ (π.χ. 21/05/1970)';
const ENTRY_DATE_OF_BIRTH_TEXT = '* (π.χ. 21/05/1970)';
const ENTRY_EMAIL_ADDRESS = 'Διεύθυνση E-Mail:';
const ENTRY_EMAIL_ADDRESS_ERROR = 'Η Διεύθυνση E-Mail σας πρέπει να περιέχει τουλάχιστον ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' χαρακτήρες.';
const ENTRY_EMAIL_ADDRESS_CHECK_ERROR = 'Η Διεύθυνση E-Mail σας δε φαίνεται να είναι έγκυρη - πραγματοποιήστε τυχόν διορθώσεις.';
const ENTRY_EMAIL_ADDRESS_ERROR_EXISTS = 'Η Διεύθυνση E-Mail σας υπάρχει ήδη στο μητρώο μας - πραγματοποιήστε είσοδο με αυτήν τη διεύθυνση e-mail σας ή δημιουργήστε λογαριασμό με διαφορετική διεύθυνση.';
const ENTRY_EMAIL_ADDRESS_TEXT = '*';
const ENTRY_STREET_ADDRESS = 'Διεύθυνση:';
//const ENTRY_STREET_ADDRESS_ERROR = 'Η Διεύθυνσή σας πρέπει να περιέχει τουλάχιστον ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' χαρακτήρες.';
const ENTRY_STREET_ADDRESS_TEXT = '*';
const ENTRY_SUBURB = 'Προάστιο:';
const ENTRY_SUBURB_TEXT = '';
const ENTRY_POST_CODE = 'Τ.Κ.:';
//const ENTRY_POST_CODE_ERROR = 'Ο Τ.Κ. σας πρέπει να περιέχει τουλάχιστον ' . ENTRY_POSTCODE_MIN_LENGTH . ' χαρακτήρες.';
const ENTRY_POST_CODE_TEXT = '*';
const ENTRY_CITY = 'Πόλη:';
//const ENTRY_CITY_ERROR = 'Η Πόλη σας πρέπει να περιέχει τουλάχιστον ' . ENTRY_CITY_MIN_LENGTH . ' χαρακτήρες.';
const ENTRY_CITY_TEXT = '*';
const ENTRY_STATE = 'Νομός:';
//const ENTRY_STATE_ERROR = 'Ο Νομός σας πρέπει να περιέχει τουλάχιστον ' . ENTRY_STATE_MIN_LENGTH . ' χαρακτήρες.';
const ENTRY_STATE_ERROR_SELECT = 'Επιλέξτε έναν από τους νομούς της λίστας.';
const ENTRY_STATE_TEXT = '*';
const ENTRY_COUNTRY = 'Χώρα:';
const ENTRY_COUNTRY_ERROR = 'Επιλέξτε μία από τις χώρες της λίστας.';
const ENTRY_COUNTRY_TEXT = '*';
const ENTRY_TELEPHONE_NUMBER = 'Τηλέφωνο:';
//const ENTRY_TELEPHONE_NUMBER_ERROR = 'Το Τηλέφωνό σας πρέπει να περιέχει τουλάχιστον ' . ENTRY_TELEPHONE_MIN_LENGTH . ' χαρακτήρες.';
const ENTRY_TELEPHONE_NUMBER_TEXT = '*';
const ENTRY_FAX_NUMBER = 'Fax:';
const ENTRY_FAX_NUMBER_TEXT = '';
const ENTRY_NEWSLETTER = 'Λίστα Ενημερώσεων:';
const ENTRY_NEWSLETTER_TEXT = '';
const ENTRY_NEWSLETTER_YES = 'Εγγραφή';
const ENTRY_NEWSLETTER_NO = 'Διαγραφή';
const ENTRY_PASSWORD = 'Κωδικός:';
//const ENTRY_PASSWORD_ERROR = 'Ο Κωδικός σα πρέπει να περιέχει τουλάχιστον ' . ENTRY_PASSWORD_MIN_LENGTH . ' χαρακτήρες.';
const ENTRY_PASSWORD_ERROR_NOT_MATCHING = 'Η Επιβεβαίωση Κωδικού πρέπει να συμπίπτει με τον Κωδικό σας.';
const ENTRY_PASSWORD_TEXT = '*';
const ENTRY_PASSWORD_CONFIRMATION = 'Επιβεβαίωση Κωδικού:';
const ENTRY_PASSWORD_CONFIRMATION_TEXT = '*';
const ENTRY_PASSWORD_CURRENT = 'Τρέχων Κωδικός:';
const ENTRY_PASSWORD_CURRENT_TEXT = '*';
//const ENTRY_PASSWORD_CURRENT_ERROR = 'Ο Κωδικός σας πρέπει να περιέχει τουλάχιστον ' . ENTRY_PASSWORD_MIN_LENGTH . ' χαρακτήρες.';
const ENTRY_PASSWORD_NEW = 'Νέος Κωδικός:';
const ENTRY_PASSWORD_NEW_TEXT = '*';
//const ENTRY_PASSWORD_NEW_ERROR = 'Ο Νέος Κωδικός σας πρέπει να περιέχει τουλάχιστον ' . ENTRY_PASSWORD_MIN_LENGTH . ' χαρακτήρες.';
const ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING = 'Η Επιβεβαίωση Κωδικού πρέπει να συμπίπτει με το Νέο Κωδικό σας.';
const PASSWORD_HIDDEN = '--ΑΠΟΚΡΥΨΗ--';

const FORM_REQUIRED_INFORMATION = '* Απαιτούμενο πεδίο';

// constants for use in tep_prev_next_display function
const TEXT_RESULT_PAGE = 'Σελίδες Αποτελεσμάτων:';
const TEXT_DISPLAY_NUMBER_OF_PRODUCTS = 'Εμφάνιση <strong>%d</strong> ως <strong>%d</strong> (από <strong>%d</strong> προϊόντα)';
const TEXT_DISPLAY_NUMBER_OF_ORDERS = 'Εμφάνιση <strong>%d</strong> ως <strong>%d</strong> (από <strong>%d</strong> παραγγελίες)';
const TEXT_DISPLAY_NUMBER_OF_REVIEWS = 'Εμφάνιση <strong>%d</strong> ως <strong>%d</strong> (από <strong>%d</strong> κριτικές)';
const TEXT_DISPLAY_NUMBER_OF_PRODUCTS_NEW = 'Εμφάνιση <strong>%d</strong> ως <strong>%d</strong> (από <strong>%d</strong> νέα προϊόντα)';
const TEXT_DISPLAY_NUMBER_OF_SPECIALS = 'Εμφάνιση <strong>%d</strong> ως <strong>%d</strong> (από <strong>%d</strong> προσφορές)';

const PREVNEXT_TITLE_FIRST_PAGE = 'Πρώτη Σελίδα';
const PREVNEXT_TITLE_PREVIOUS_PAGE = 'Προηγούμενη Σελίδα';
const PREVNEXT_TITLE_NEXT_PAGE = 'Επόμενη Σελίδα';
const PREVNEXT_TITLE_LAST_PAGE = 'Τελευταία Σελίδα';
const PREVNEXT_TITLE_PAGE_NO = 'Σελίδα %d';
const PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE = 'Προηγούμενο Σύνολο %d Σελίδων';
const PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE = 'Επόμενο Σύνολο %d Σελίδων';
const PREVNEXT_BUTTON_FIRST = '&lt;&lt;ΠΡΩΤΗ';
const PREVNEXT_BUTTON_PREV = '[&lt;&lt;&nbsp;Προηγούμενη]';
const PREVNEXT_BUTTON_NEXT = '[Επόμενη&nbsp;&gt;&gt;]';
const PREVNEXT_BUTTON_LAST = 'ΤΕΛΕΥΤΑΙΑ&gt;&gt;';

const IMAGE_BUTTON_ADD_ADDRESS = 'Προσθήκη Διεύθυνσης';
const IMAGE_BUTTON_ADDRESS_BOOK = 'Βιβλίο Διευθύνσεων';
const IMAGE_BUTTON_BACK = 'Πίσω';
const IMAGE_BUTTON_BUY_NOW = 'Άμεση Αγορά';
const IMAGE_BUTTON_CHANGE_ADDRESS = 'Αλλαγή Διεύθυνσης';
const IMAGE_BUTTON_CHECKOUT = 'Ολοκλήρωση Αγορών';
const IMAGE_BUTTON_CONFIRM_ORDER = 'Επιβεβαίωση Παραγγελίας';
const IMAGE_BUTTON_CONTINUE = 'Συνέχεια';
const IMAGE_BUTTON_CONTINUE_SHOPPING = 'Συνέχεια Αγορών';
const IMAGE_BUTTON_DELETE = 'Διαγραφή';
const IMAGE_BUTTON_EDIT_ACCOUNT = 'Επεξεργασία Λογαριασμού';
const IMAGE_BUTTON_HISTORY = 'Ιστορικό Παραγγελιών';
const IMAGE_BUTTON_LOGIN = 'Είσοδος';
const IMAGE_BUTTON_IN_CART = 'Στο Καλάθι';
const IMAGE_BUTTON_NOTIFICATIONS = 'Ειδοποιήσεις';
const IMAGE_BUTTON_QUICK_FIND = 'Γρήγορη Εύρεση';
const IMAGE_BUTTON_REMOVE_NOTIFICATIONS = 'Αφαίρεση Ειδοποιήσεων';
const IMAGE_BUTTON_REVIEWS = 'Κριτικές';
const IMAGE_BUTTON_SEARCH = 'Αναζήτηση';
const IMAGE_BUTTON_SHIPPING_OPTIONS = 'Επιλογές Αποστολής';
const IMAGE_BUTTON_TELL_A_FRIEND = 'Πείτε το σε ένα φίλο';
const IMAGE_BUTTON_UPDATE = 'Ενημέρωση';
const IMAGE_BUTTON_UPDATE_CART = 'Ενημέρωση Καλαθιού';
const IMAGE_BUTTON_WRITE_REVIEW = 'Νέα Κριτική';

const SMALL_IMAGE_BUTTON_DELETE = 'Διαγραφή';
const SMALL_IMAGE_BUTTON_EDIT = 'Επεξεργασία';
const SMALL_IMAGE_BUTTON_VIEW = 'Προβολή';

const ICON_ARROW_RIGHT = 'περισσότερα';
const ICON_CART = 'Στο Καλάθι';
const ICON_ERROR = 'Σφάλμα';
const ICON_SUCCESS = 'Επιτυχία';
const ICON_WARNING = 'Προειδοποίηση';

const TEXT_GREETING_PERSONAL = 'Καλωσήλθατε και πάλι, <span class="greetUser">%s!</span> Θέλετε να δείτε ποια <a href="%s"><u>νέα προϊόντα</u></a> είναι διαθέσιμα για αγορά;';
const TEXT_GREETING_PERSONAL_RELOGON = '<small>Εάν δεν είστε ο/η %s, <a href="%s"><u>πραγματοποιήστε είσοδο</u></a> με το λογαριασμό σας.</small>';
const TEXT_GREETING_GUEST = 'Καλωσήλθατε, <span class="greetUser">επισκέπτη!</span> Θέλετε να <a href="%s"><u>συνδεθείτε</u></a> ή προτιμάτε να <a href="%s"><u>δημιουργήσετε ένα λογαριασμό</u></a>;';

const TEXT_SORT_PRODUCTS = 'Ταξινόμηση προϊόντων ';
const TEXT_DESCENDINGLY = 'φθίνουσα';
const TEXT_ASCENDINGLY = 'αύξουσα';
const TEXT_BY = ' από ';

const TEXT_REVIEW_BY = 'από %s';
const TEXT_REVIEW_WORD_COUNT = '%s λέξεις';
const TEXT_REVIEW_RATING = 'Βαθμολογία: %s [%s]';
const TEXT_REVIEW_DATE_ADDED = 'Υποβλήθη: %s';
const TEXT_NO_REVIEWS = 'Δεν υπάρχουν κριτικές.';

const TEXT_NO_NEW_PRODUCTS = 'Δεν υπάρχουν προϊόντα.';

const TEXT_UNKNOWN_TAX_RATE = 'Άγνωστος συντελεστής Φ.Π.Α.';

const TEXT_REQUIRED = '<span class="errorText">Απαιτείται</span>';

const ERROR_TEP_MAIL = '<font face="Verdana, Arial" size="2" color="#ff0000"><strong><small>ΣΦΑΛΜΑ TEP:</small> Αδυναμία αποστολής e-mail μέσω του καθορισμένου εξυπηρετητή SMTP. Ελέγξτε τις ρυθμίσεις του αρχείου php.ini και διορθώστε τον εξυπηρετητή SMTP, εάν είναι απαραίτητο.</strong></font>';

const TEXT_CCVAL_ERROR_INVALID_DATE = 'Η Ημερομηνία λήξης της πιστωτικής κάρτας σας δεν είναι έγκυρη. Ελέγξτε την ημερομηνία και προσπαθήστε ξανά.';
const TEXT_CCVAL_ERROR_INVALID_NUMBER = 'Ο αριθμός πιστωτικής κάρτας που εισάγατε δεν είναι έγκυρος. Ελέγξτε τον αριθμό και προσπαθήστε ξανά.';
const TEXT_CCVAL_ERROR_UNKNOWN_CARD = 'Τα πρώτα τέσσερα ψηφία του αριθμού που εισάγατε είναι: %s. Εάν ο αριθμός είναι σωστός, λυπούμαστε αλλά δε δεχόμαστε αυτόν τον τύπο πιστωτικής κάρτας. Εάν είναι λάθος, προσπαθήστε ξανά.';

//const FOOTER_TEXT_BODY = 'Copyright &copy; ' . date('Y') . ' <a href="' . tep_href_link(FILENAME_DEFAULT) . '">' . STORE_NAME . '</a><br />Powered by <a href="http://www.oscommerce.com" target="_blank">osCommerce</a>';


// category views
const TEXT_VIEW = 'Εμφάνιση: ';
const TEXT_VIEW_LIST = ' Λίστα';
const TEXT_VIEW_GRID = ' Πλέγμα';

// search placeholder
const TEXT_SEARCH_PLACEHOLDER = 'Αναζήτηση';

// message for required inputs
const FORM_REQUIRED_INFORMATION = '<i class="fas fa-asterisk text-danger"></i> Υποχρεωτικές πληροφορίες';
const FORM_REQUIRED_INPUT = '<span class="form-control-feedback text-danger"><i class="fas fa-asterisk"></i></span>';

// grid/list
const TEXT_SORT_BY = 'Ταξινόμηση ανά ';
// moved from index
const TABLE_HEADING_IMAGE = '';
const TABLE_HEADING_MODEL = 'Μοντέλο';
const TABLE_HEADING_PRODUCTS = 'Ονομα προίόντος';
const TABLE_HEADING_MANUFACTURER = 'Κατασκευστής';
const TABLE_HEADING_QUANTITY = 'Stock';
const TABLE_HEADING_PRICE = 'Τιμή';
const TABLE_HEADING_WEIGHT = 'Βάγος';
const TABLE_HEADING_BUY_NOW = 'Αγορά τώρα';
const TABLE_HEADING_LATEST_ADDED = 'Ημ/νια προσθήκης';
const TABLE_HEADING_ORDERED = 'Τα πίο διάσημα';

// product notifications
const PRODUCT_SUBSCRIBED = '%s has been added to your Notification List';
const PRODUCT_UNSUBSCRIBED = '%s has been removed from your Notification List';
const PRODUCT_ADDED = '%s has been added to your Cart';
const PRODUCT_REMOVED = '%s has been removed from your Cart';

// bootstrap helper
const MODULE_CONTENT_BOOTSTRAP_ROW_DESCRIPTION = '';

// noscript helper
const TEXT_NOSCRIPT = <<<'EOT'
<p><strong>JavaScript seems to be disabled in your browser.</strong></p>
<p>You must have JavaScript enabled in your browser to utilize the functionality of this website.<br>
<a class="alert-link" href="https://www.enable-javascript.com/" target="_blank" rel="nofollow">Click here for instructions on enabling javascript in your browser</a>.</p>
EOT;

// sitewide is-product
const IS_PRODUCT_SHOW_PRICE = '%s';
const IS_PRODUCT_SHOW_PRICE_SPECIAL = '<del>%s</del> <span class="text-danger">now %s</span>';
const IS_PRODUCT_BUTTON_BUY = '<i class="fas fa-shopping-cart"></i>';
const IS_PRODUCT_BUTTON_VIEW = '<i class="fas fa-eye"></i> Εμφάνιση';

// sitewide product listing
const LISTING_SORT_DOWN = '<i class="fas fa-level-down-alt text-primary"></i>';
const LISTING_SORT_UP = '<i class="fas fa-level-up-alt text-primary"></i>';
const LISTING_SORT_UNSELECTED = '<i class="fas fa-level-up-alt text-black-50"></i>';
// for new style internal pages
const LINK_TEXT_EDIT = '<small><a class="%s" href="%s">Επεξεργασία</a></small>';
const SHIPPING_FA_ICON = '<i class="fas fa-shipping-fast fa-fw fa-3x float-right text-black-50"></i>';
const PAYMENT_FA_ICON = '<i class="fas fa-file-invoice-dollar fa-fw fa-3x float-right text-black-50"></i>';

const ENTRY_COMMENTS = 'Προσθέστε κάτι που πρέπει να γνωρίζουμε?';
const ENTRY_COMMENTS_PLACEHOLDER = 'Σχόλια εδώ...';
const TABLE_HEADING_OR = '-ή-';

?>
