<?php
require_once "Uganda.php";
require_once "Kenya.php";
/**
 * General rule of thumb.
 * The namespace declaration should always be the first line of code or it comes after some declarations.
 */

use Kenya\Airport as kenya;

new kenya;
new Uganda\Airport();