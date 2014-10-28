<?php

// Define namespace

namespace Sonic;

// Require paths

require_once ('paths.php');

// Load smarty config
// First check config dir

if (file_exists (CONFIG_DIR . 'smarty.php'))
{
	require_once (CONFIG_DIR . 'smarty.php');
}

// Otherwise check config parent dir

else if (file_exists (ABS_CONFIG . 'smarty.php'))
{
	require_once (ABS_CONFIG . 'smarty.php');
}
else
{
	exit ('`' . CONFIG . '` smarty config file does not exist');
}