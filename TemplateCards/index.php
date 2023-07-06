<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cards">
    <title>Cards</title>
    <link rel="stylesheet" type="text/css" href="./Resources/css/style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@100&display=swap');
    </style>
</head>

<body>
    <header id="my-header">
        <nav>
            <h5>Responsive Cards</h5>
            <div class="dropdown">
                <button class="dropdown-button" onclick="toggleMenu()">
                    <img src="./Resources/img/menu.webp" alt="Icono" class="icono">
                </button>
                <div class="dropdown-content" id="dropdownContent">
                    <ul class="list">
                        <li><a title="About me" class="list1" id="title" href="#">Home</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <br>
    <br>
    <div class="container">
        <?php
        include_once('conex.php');
        $query = "SELECT * FROM Cards";
        $result = $con->query($query);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $num = $row["num"];
                echo "<div class='card'/>$num</div>";
            }
        } else {
            echo "No se encontraron registros en la base de datos.";
        }
        $con->close();
        ?>
    </div>
    <script src="./Resources/js/script.js"></script>
</body>

</html>

<!-- Romel Tejada -->