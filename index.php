<?php
/**
 * Manifest file
 * 
 * @copyright  2017 by @albert
 * @license    2017 by http://hoanganh.vn
 */

define('__RUN__', 1);

include 'config.php';
include 'lib.php';
include 'controller.php';

Libraries::init();
Database::getDbo();
Controller::routeURI();
