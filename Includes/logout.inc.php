<?php

session_start();
session_unset();
session_destroy();

header("Location: ../HRMS_Front_Page/HRMS_Front_Page_HTML/index.php");
die();

