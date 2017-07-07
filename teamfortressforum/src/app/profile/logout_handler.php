<?php
include_once('../helpers/helper_functions.php');
session_start();
session_destroy();
header('Location: ' . url('teamfortressforum/src/index.php'));
exit;
