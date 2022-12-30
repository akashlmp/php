<!-- 
    sessions is an array that is stored at the server based on the session id.

    session id are generated when first time visit the site and this session id are stored inthe cookie.


 -->
<?php
session_start();
$_SESSION['name'] = 'php';
echo $_SESSION['name'];
?>