<?php
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8"/>
    </head>
    <body>
        Xin chào: <?php echo $_SESSION['hoten']; ?>
    </body>
</html>
