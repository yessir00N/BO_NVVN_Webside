<?php

$conn     = new mysqli("mariadb", "db_user", "mijn_p@ss#", "Bo_Nvvn");
$sql      = 'SELECT * FROM sdg ORDER BY title';
$result   = $conn->query($sql);
while( $item = $result->fetch_assoc() ) {
    echo '<h2>'.$item['title'].'</h2>';
}