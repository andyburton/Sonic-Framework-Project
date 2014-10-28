<?php

// Load config files

require_once (ABS_CONFIG . 'author.php');
require_once (ABS_CONFIG . 'db.php');
require_once (ABS_CONFIG . 'www.php');
require_once (ABS_CONFIG . 'email.php');
//require_once (CONFIG_DIR . 'db-slaves.php');

// Enable development and tools

@define ('MODE_TOOLS',		TRUE);
@define ('MODE_DEV',		TRUE);