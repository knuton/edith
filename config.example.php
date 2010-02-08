<?php
/**
 * Edith configuration
 */

// root uri to your application
define('EDITH_URI', '/edith');

// path to the folder which will keep text files of all pages
// (needs to be read and writeable by the server)
define('EDITH_DATA_PATH', 'data');

// to specify representation types as subdirectories, 'directory'
// to specify representation types as file extensions, 'extension'
define('EDITH_REPRESENTATION_FORMAT', 'directory');

// to handle concurrent access, the edit box uses Google Mobwrite
// http://code.google.com/p/google-mobwrite/
// Uncomment the configuration lines to enable Mobwrite

// choose a unique identifier for your application so that Mobwrite can
// identify all your pages
# define('MOBWRITE_KEY', 'edith-text');

// to host your own version of Mobwrite, change the following uri
# define('MOBWRITE_URI', 'http://edith-mobwrite.appspot.com/scripts/q.py');

