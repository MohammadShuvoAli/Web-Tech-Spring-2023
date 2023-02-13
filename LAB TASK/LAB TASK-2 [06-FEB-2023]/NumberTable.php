<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number Table</title>
</head>
<body>
    <h1>Number Table</h1>
    <form action="" method="post">
        <br>
        <input type="text" name="number">
        <input type="submit" value="Submit">
        <br><br>
    </form>

    <table border="2" align="center">
        <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $n=$_POST['number'];
                $res=0;
                for($i=1;$i<=10;$i++){
                    $res=$n*$i;
                    echo "<tr>";
                    echo "<td>" . $n . "</td>";
                    echo "<td>" . "*" . "</td>";
                    echo "<td>" . $i . "</td>";
                    echo "<td>" . "=" . "</td>";
                    echo "<td>" . $res . "</td>";
                    echo "</tr>";
                }
            }
        ?>
    </table>
</body>
</html>
