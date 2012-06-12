<?php
require_once 'Net/DNSBL.php';
$dnsbl = new Net_DNSBL();
$remoteIP = '93.95.32.135';
$dnsbl->setBlacklists(array('sbl-xbl.spamhaus.org', 'bl.spamcop.net','b.barracudacentral.org','spam.spamrats.com','dyna.spamrats.com','noptr.spamrats.com','bl.tiopan.com'));
#$dnsbl->setBlacklists(array('bl.spamcop.net','b.barracudacentral.org'));

if ($dnsbl->isListed($remoteIP, true)) {
    echo "$remoteIP is listed:\n";
    $data=$dnsbl->getListingBls($remoteIP);
    sort($data);
    foreach ($data as $source) {
        echo "\t".$source."\n";
    }
} else {
    echo "$remoteIP is NOT listed\n";
}
?> 
