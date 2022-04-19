<main>
    <div id="disc-container" class="container"><?php  
    
    foreach ($arr_dischi as $disco) {
        ?>
        <div class="disc">
            <img src="<?=$disco['poster']?>" alt="">
            <h3><?=$disco['title']?></h3>
            <small><?=$disco['author']?></small>
            <strong><?=$disco['year']?></strong>
        </div><?php
    }
?>
</div>
</main>