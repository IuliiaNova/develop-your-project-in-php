<?php
require_once '../src/controllers/pathControllers.php';

session_start();
require_once BASE_PATH.'/src/funcs/userLoginConfirmation.php';

$pageTitle = 'Create an account - Crypto Domain';

// Actual view
include_once BASE_PATH.'/src/templates/user/signUpUser.php';