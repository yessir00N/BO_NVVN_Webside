<?php
include_once("../source/Connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <script defer src="js/main.js" type="module"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<nav class="nav">
    <img src="img/NVVN2.png" class="nav__img" alt="">
</nav>
<body>

</body>
<ul class="grid-container">
    <?php
        $rows = $conn->query("SELECT * FROM sdg ORDER BY Id");
        foreach($rows as $row) {
            include("../source/templates/sdg.php");
        }
    ?>
</ul>
</html>