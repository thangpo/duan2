<?php
    $user1="duc";
    $user2="dep";
    $user3="trai";
    $user4="sieu pham";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table tr th{
            border-bottom: 3px solid green;
            padding: 7px 20px;
        }
        table tr td{
            border-bottom: 1px solid green;
            padding: 7px 20px;
        }
    </style>
</head>
<body>
    <h1>DANH SACH CAC USER</h1>
    <table>
        <tr>
            <th>STT</th>
            <th>HO VA TEN</th>
        </tr>
        <tr>
            <td>1</td>
            <td><?php echo $user1 ?></td>
        </tr>
        <tr>
            <td>2</td>
            <td><?php echo $user2 ?></td>
        </tr>
        <tr>
            <td>3</td>
            <td><?php echo $user3 ?></td>
        </tr>
        <tr>
            <td>4</td>
            <td><?php echo $user4 ?></td>
        </tr>
    </table>
</body>
</html>