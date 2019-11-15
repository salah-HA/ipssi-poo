<?php

require_once('vendor/autoload.php');

use Ipssi\Evaluation\Useless;
use Ipssi\Evaluation\Creation\Page;

new Useless(); // Ceci ne sert à rien
$Page = new Page(600,400, 'red');
$Page->getInfo();

