<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location: login.php');
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" tyle="text/css" href="Assets/style.css">
        <title>Barber Shop</title>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <img class="logo_img_2" src="Assets/barbershop.png">
            </div>
            <div class="content-area">
                <div class="left-panel">
                    <?php
                        include 'navigation.php';
                    ?>
                </div>
                <div class="right-panel">
                    <table class="users-table">
                        <tr>
                            <th>Serviço</th>
                            <th>Preço</th>
                        </tr>
                        <?php
                            $con = mysqli_connect('localhost','root');
                            mysqli_select_db($con, 'barbershop');
                            $sql = "SELECT name, price FROM products";
                            $result = $con->query($sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo "<tr><td>" . $row["name"]. "</td><td>" . $row["price"] . "</td></tr>";
                                }
                            }
                            mysqli_close($con);
                        ?>
                    </table>
                    <a href="new-product.php"><div class="new-user-button">Novo Serviço</div></a>
                </div>
            </div>
        </div>
    </body>
</html>