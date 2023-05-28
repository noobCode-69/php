
<?php
    session_start();
?>

<body>
<ul>
    <li><a href="home.php">HOME</a></li>
    <li><a href="contact.php">CONTACT</a></li>
</ul>
</body>

<?php
    echo $_SESSION['username'];