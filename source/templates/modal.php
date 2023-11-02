
<div class="sdg-modal" id="modal-sdg<?=$row['Id']?>">
    <h2 class="modal-title"><?=$row["title"]?></h2>
    <p class="modal-content"><?=$row['content']?></p>
    <img class="modal-img" src="<?=$row['img']?>" style="background: <?= $row['color'] ?> "/>
    
    <button type="button" class="modal-button" id="back-button" onclick="location.reload()">
        Terug
    </button>
</div>
