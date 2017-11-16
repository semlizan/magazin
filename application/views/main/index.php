<div class="content">
    <p class="naz">Мыло ручной работы</p>

    <!--блок с 10 лучшими товарами-->
    <div class="TOP">
        <p>ТОП-10 лучших(тут нужен слайдер, это нужно убрать)</p>

        <?php
        $item =
            array(
                'name' => 'Мыло №1',
                'img' => '/img/киви.png',
//                'about' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque aut beatae cum esse eum expedita explicabo itaque laudantium natus nemo numquam porro quasi repellat saepe sapiente suscipit, temporibus veniam, voluptas!'
                'price' => '100 р.'
            );

        $items = array();
        for ($i=0;$i<4;$i++){
            $items[]=$item;
        }

        ?>
        <?php foreach ($items as $item):?>
            <li class="product-wrapper">
                <div class="product">
                    <p class="product-name"> <?=$item['name'] ?></p>
                    <div class="product-photo">
                        <img src="<?=$item['img']?>" alt="">
                    </div>
                    <p class="product-price"><?=$item['price']?></p>
<!--                    <p class="product-about"> --><?//=$item['about'] ?><!--</p>-->
                    <a href="" class="btn product-to-basket"> В корзину</a>
                    <!--открытие полной карточки товара-->
                    <a href="/catalog/tovar/" class="btn product-to-basket">Описание товара</a>
                </div>

            </li>
        <?php endforeach;?>

    </div>

</div>