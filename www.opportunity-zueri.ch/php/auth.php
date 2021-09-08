<?php
if (!isset($_SERVER['PHP_AUTH_USER']) || 
    $_SERVER['PHP_AUTH_USER'] != "tn" || 
    $_SERVER['PHP_AUTH_PW'] != "ophp-21") 
{
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Sorry, you may not see this page. Good-bye.';
    exit;
} else {
    // echo "<p>Hallo {$_SERVER['PHP_AUTH_USER']}.</p>";
    // echo "<p>Sie gaben {$_SERVER['PHP_AUTH_PW']} als Passwort ein.</p>";
}
?>