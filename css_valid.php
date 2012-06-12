<?php
require_once 'Services/W3C/CSSValidator.php';

$v = new Services_W3C_CSSValidator();
$us = array('http://www.pudu.cz/','http://www.fcb.cz','http://www.proreality.cz','http://www.vsb.cz/');
sort($us);
foreach ($us as $u) {
    $r = $v->validateURI($u);
    if ($r->isValid()) {
        echo $u." is valid!\n";
    } else {
        echo $u." is NOT valid!\n";
    }
}
?> 
