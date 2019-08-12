<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table{
            background: #8fd19e;
            width: 500px;
            margin: auto;
        }
        .title{
            background: #6f42c1;
            line-height: 35px;
            text-align: center;
            color: white;
        }
        .btn-input{
            width: 380px;
            height: 30px;
            border:1px solid #ba8b00;
            margin: 5px 0;
        }
        table input[type='submit'] {
            background: gold;
            color: #1b1e21;
            border: 1px solid purple;
            font-weight: bold;
            cursor: pointer;
        }
        .result{
            background: #80bdff;
            color: red;
            height: 35px;
            width: 380px;
        }

    </style>
</head>
<body>
    <?php
        if (isset($_POST['submit']))
        {
            if (isset($_POST['str-input']) && isset($_POST['word-replaced']) && isset($_POST['word-new'])) {
                $str_input = $_POST['str-input'];
                $word_replaced = $_POST['word-replaced'];
                $word_new = $_POST['word-new'];
                $str_result = str_replace($word_replaced,$word_new,$str_input);
            }
        }
    ?>
    <form name = "frm-replace" method="post">
        <table>
            <tr>
                <td colspan="2" class="title">Thay thế từ trong chuỗi </td>
            </tr>
            <tr>
                <td>Chuỗi</td>
                <td><input type="text" name="str-input"  class="btn-input" value="<?php  echo $_POST['str-input']?>"></td>
            </tr>
            <tr>
                <td>Từ gốc </td>
                <td><input type="text" name="word-replaced" class="btn-input" value="<?php echo $_POST['word-replaced']?>"></td>
            </tr>
            <tr>
                <td>Từ thay thế </td>
                <td><input type="text" name = "word-new" class="btn-input" value="<?php echo $_POST['word-new']?>"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" name="submit" value="Thay thế "></td>
            </tr>
            <tr>
                <td colspan="2" align="center" ><input type="text" name="result" class="result" value="<?php echo $str_result?>"></td>
            </tr>
        </table>

    </form>

</body>
</html>
