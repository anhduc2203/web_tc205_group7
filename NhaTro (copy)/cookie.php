<?php
session_start();
$flag = 0;
if (!empty($_POST['hoten']) && !empty($_POST['email']) && !empty($_POST['diachi'])) {
    $thongtin = $_POST['hoten'] . '-' . $_POST['email'] . '-' . $_POST['diachi'];
    $_SESSION['hoten'] = $_POST['hoten'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['diachi'] = $_POST['diachi'];
    $flag = 1;
}
?>

<html>
    <head>
        <meta charset="UTF-8"/>
        <style type="text/css">
            table
            {
                background: #ffff99;
                margin: auto;
                width: 500px;

            }
            table input[type="text"]
            {
                margin: 7px 0;
                width: 300px;
                height: 30px;
                border: black solid 1px;
            }
            table label
            {
                margin-left: 20px;
            }
            table input[type="submit"]
            {
                background: #ff0000;
                color: #ffffff;
                padding: 7px;
                margin: 10px;
            }
            .title
            {
                background: #00cc00;
                color: #ffffff;
                height: 30px;
                text-align: center;
                font-size: 20px;
            }
        </style>
    </head>

    <form name="thongtin" method="POST">
        <table>
            <tr> 
                <td colspan="2" class="title">Thông tin khách hàng</td>
            </tr>
            <tr>
                <td> <label>Họ và tên</label> </td>
                <td><input type="text" name="hoten" value=""/></td>
            </tr>
            <tr>
                <td> <label>Email</label> </td>
                <td><input type="text" name="email" value=""/></td>
            </tr>
            <tr>
                <td> <label>Địa chỉ</label> </td>
                <td><input type="text" name="diachi" value=""/></td>
            </tr>
            <tr>
                <td colspan="2" class="title"> <input type="submit" name="submit" value="Xác nhận"/></td>
            </tr>
        </table>

        <table>
            <?php
            if ($flag == 1) {
                ?>
                <tr>
                    <td>
                        Thông tin khách hàng<br>
                        Họ tên: <?php echo $_SESSION['hoten']; ?> <br>
                        Email: <?php echo $_SESSION['email']; ?><br>
                        Địa chỉ: <?php echo $_SESSION['diachi']; ?><br>
                        <a href="docsession.php">Click here</a>
                    </td>
                </tr>
                <?php
            }
            ?>
        </table>

    </form>
</html>
