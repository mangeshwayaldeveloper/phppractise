<!DOCTYPE html>
<html>
<head>
    <title>Chess Board</title>
    <style>
        table {
            width: 400px;
            border-collapse: collapse;
        }

        td {
            width: 30px;
            height: 30px;
        }

        .white {
            background-color: #FFFFFF;
        }

        .black {
            background-color: #000000;
        }
    </style>
</head>
<body>
<table>
    <?php
    for ($row = 1; $row <= 8; $row++) {
        echo "<tr>";
        for ($col = 1; $col <= 8; $col++) {
            $color = ($row + $col) % 2 == 0 ? "white" : "black";
            echo "<td class='$color'></td>";
        }
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>
