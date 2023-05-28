
<?php
    // this function set a cookie in the users browser.
    setcookie('name' , 'sohel', time() + 86400);
    // setting sessions
    $_SESSION['name'] = 'sohel';
?>