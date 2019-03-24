<html>
    <head> <meta charset="utf-8" />
        <style type="text/css">
            table
            {
                background: #ffff66;
                width: 500px;
                margin: auto;
            }
            table input[type="submit"]
            {
                padding: 15px;
                margin: 5px;
                background: #00cc00;
                color: #ffffff;
            }
            .title
            {
                line-height: 35px;
                background: #00cc00;
                text-align: center;
                color: #ffffff;
                font-weight: bold;
            }
            .a
            {
                width: 380px;
                height: 30px;
                margin: 5px 0;
                border: 1px solid black;
            }
            .b
            {
                width: 380px;
                height: 30px;
                background: bisque;
                color: #00cc00;
                margin: 5px;
            }
           
        </style>
    </head>
    <body>
        <?php
            if (isset($_POST['submit'])){
                if (isset($_POST['chuoi']) && isset($_POST['tugoc']) &&isset($_POST['tuthaythe'])){
                    $chuoi=$_POST['chuoi'];
                    $tugoc=$_POST['tugoc'];
                    $tuthaythe=$_POST['tuthaythe'];
                    $kq=  str_replace($tugoc, $tuthaythe, $chuoi);
                }
            }
        ?>
        <form name="frmthaythechuoi" method="POST">
            <table>
                <tr>
                    <td class="title" colspan="2">Thay thế từ trong chuỗi</td>
                </tr>
                <tr>
                    <td>Chuỗi: </td>
                    <td><input class="a" type="text" name="chuoi" value="<?php echo $_POST['chuoi'];?>"/> </td>
                </tr>
                <tr>
                    <td>Từ gốc: </td>
                    <td><input class="a" type="text" name="tugoc" value="<?php echo $_POST['tugoc']; ?>"/> </td>
                </tr>
                <tr>
                    <td>Từ thay thế: </td>
                    <td><input class="a" type="text" name="tuthaythe" value="<?php echo $_POST['tuthaythe']; ?>"/> </td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input  class="submit" type="submit" name="submit" value="Thay thế"/> </td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input class="b" type="text" name="kq" value=" <?php echo $kq; ?>"/> </td>
                </tr>
            </table>
        </form>
    </body>
</html>

