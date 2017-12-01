<div class="content">
    <div class="post">
        <p class="meta"><span class="date">Оформление заказа</span></p>
        <div class="entry_zak">
            <form method="post" >

                <span class="anketa-head">Имя</span>
                <input name="name" type="text" class="anketa-input" placeholder="Имя" value="Елизавета">
                <div class="clear"></div>
                <div class="gap"></div>

                <span class="anketa-head">Фамилия</span>
                <input name="name" type="text" class="anketa-input" placeholder="фамилия" value="Фамилия">
                <div class="clear"></div>
                <div class="gap"></div>


                <span class="anketa-head">Телефон</span>
                <input type="tel" name="phone_number" class="anketa-input" list="tel-list" placeholder="+7 (900) 123-45-67" pattern="\+7\s?[\(]{0,1}9[0-9]{2}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}">
                <div class="clear"></div>
                <div class="gap"></div>

                <span class="anketa-head">Адрес доставки</span>
                <input name="text" type="text" class="anketa-input" placeholder="Адрес доставки">
                <div class="clear"></div>
                <div class="gap"></div>


                    <form method="post">
                        <select class="admin-order-status" required><option> Способ получения </option>
                            <option value="1">самовывоз</option>
                            <option value="2">доставка</option>
                        </select>
                    </form>

                <span class="anketa-head">Оплата при получении*</span>

                <div class="clear"></div>

                <div class="zakaz-itog" >
                    <span class="zakaz-span"> итог </span>
                    <span class="zakaz-span"> 400 </span>
                </div>

                <div class="clear"></div>
                <div class="gap"></div>
                <input type="submit" name="adduser" class="anketa-submit" value="Провести заказ">

            </form>
        </div>
    </div>
</div>
