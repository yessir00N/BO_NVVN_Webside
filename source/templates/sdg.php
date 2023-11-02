    <div class="sdg" id="sdg<?= $row['Id']?>" style="background: <?= $row['color'] ?>">
        <p id="sdg<?= $row['Id']?>-title" style="display: none"><?= $row["title"] ?></p>
        <img class="sdg-img" src="<?= $row['img'] ?>">
    </div>

    <?php
        include("../source/templates/modal.php");
    ?>