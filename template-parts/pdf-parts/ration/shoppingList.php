<?php
foreach ($shoppingList as $w_idx => $list) :
    $sorted_list = $render->chunk_array($list,  3000,  2, true);
    foreach ($sorted_list as  $lists) :
        if (count($lists)):
?>
            <section class="section shopping-list" id="shopping-list-w-<?php echo $w_idx ?>" data-tabs-area>
                <div class="shopping-list__img">
                    <img src="<?= $assetsUrl ?>/img/shopping-list.png" alt="">
                </div>
                <div class="section__container _container">
                    <?php
                    require APPLICATION_PATH . '/template-parts/pdf-parts/header.php';
                    ?>
                    <div class="section__body">
                        <?php
                        $section_title = 'Список продуктов для покупок. Неделя ' .  $w_idx + 1;
                        require APPLICATION_PATH . '/template-parts/pdf-parts/section-title.php';
                        ?>
                        <div class="grid grid-2">
                            <?php
                            foreach ($lists as $list_item) :
                                if ($list_item) :
                                    echo '<ol class="shopping-list__item">';
                                    foreach ($list_item as $key => $item) :
                                        $icon = '' . $key . '';
                                        require APPLICATION_PATH . '/template-parts/ration/shopping-list-item.php';
                                    endforeach;
                                    echo '</ol>';
                                endif;
                            endforeach;
                            ?>
                        </div>
                    </div>
                    <?php
                    require APPLICATION_PATH . '/template-parts/pdf-parts/footer.php';
                    ?>
                </div>
            </section>
<?php
        endif;
    endforeach;
endforeach;
?>