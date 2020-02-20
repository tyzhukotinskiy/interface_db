<section id="employees">
    <?php
        for($i = 0; $i < count($employees); $i++){ ?>
            <p>Employ № <?=$employees[$i]->id?></p>
            <p><?=$employees[$i]->first_name?> <?=$employees[$i]->second_name?></p>
            <hr>
        <?php   }
    ?>
</section>