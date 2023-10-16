<div>
    <div>
        <p>
            <?php
            echo $single['artist'];
            echo '</br>';
            echo $single['title'];
            ?>
        </p>
        <div>
            <div>
                <button>
                    luister
                </button>
            </div>
            <p>
                <?php 
                echo $single['time']
                ?>
            </p>
            <img src='<?=$single['img']?>'>
        </div>
    </div>
</div>