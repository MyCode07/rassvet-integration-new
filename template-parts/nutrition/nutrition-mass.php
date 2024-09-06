<h3 class="nutrition-mass__title">Массовая доля групп продуктов питания в рационе</h3>
<div class="nutrition-mass__flex">
    <div class="nutrition-mass__graphic">
        <canvas></canvas>
    </div>
    <div class="nutrition-mass__list">
        <ol>
            <?php
            foreach ($nutrient_mass as $item) :
                if ($item['title']) {
                    $icon = '' . $item['title'] . '';
                } else {
                    $icon = 'Продукты';
                }
            ?>
                <li data-icon="<?= $assetsUrl ?>/img/icons/<?php echo $render->icons[$icon] ?>.svg" data-percent="<?php echo round($item['percent'], 1) ?>">
                    <svg width="24" height="24" viewBox="0 0 24 24">
                        <use xlink:href='<?= $assetsUrl ?>/img/svg/icons.svg#<?php echo $render->icons[$icon] ?>' />
                    </svg>
                    <span><?php echo $item['title'] ?></span>
                    <span><b><?php echo round($item['percent'], 1) ?>%</b></span>
                    <span><?php echo $item['mass'] ?> <?php echo $item['unit'] ?></span>
                </li>
            <?php
            endforeach;
            ?>
        </ol>
    </div>
</div>