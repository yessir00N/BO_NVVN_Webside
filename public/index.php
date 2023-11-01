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
    <ul class="list">
        <li class="listitem"><a href="#Menu"></a>Menu</li>
        <li class="listitem"><a href="#Over"></a>Over</li>
    </ul>

</nav>
<body>

</body>
<ul class="grid-container">
    <?php
        $rows = $conn->query("SELECT * FROM sdg ORDER BY title");
        foreach($rows as $row) {
            include("../source/templates/sdg.php");
        }
    ?>
</ul>
</html>