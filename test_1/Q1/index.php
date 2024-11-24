<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <table width="270px" cellspacing="0px" cellpadding="0px" border="1px">
        <?php for ($i = 1; $i <= 8; $i++) : ?>
            <tr>
                <?php for ($j = 1; $j <= 8; $j++) : ?>
                    <?php if (($i + $j) % 2 == 0) : ?>
                        <td height="30px" width="30px" bgcolor="#FFFFFF"></td>
                    <?php else : ?>
                        <td height="30px" width="30px" bgcolor="#000000"></td>
                    <?php endif; ?>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>
    </table>



</body>

</html>