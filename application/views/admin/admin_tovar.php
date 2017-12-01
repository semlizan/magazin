<div class="content">
    <div class="post">
        <p class="meta"><span class="date">Добавление товара</span></p>
        <div class="entry_tab">

            <form method="post" >

                <input name="name" type="text" class="admin-articles-input" placeholder="Введите название товара">

                <textarea name="info" id="" cols="30" rows="10" class="admin-articles-input" placeholder="Введите описание товара"></textarea>

                <input name="price" type="text" class="admin-articles-input" placeholder="Введите цену товара">

                <input type="file" name="photo" class="admin-articles-input" multiple accept="image/*,image/jpeg">

                <div class="admin-form-status">
                    <form method="post">
                        <select class="admin-order-status" required><option> Раздел </option>
                            <option value="1">Мужское</option>
                            <option value="2">Женское</option>
                            <option value="3">Детское</option>
                            <option value="4">Акции</option>
                        </select>
                    </form>

                   <span  class="quantity">Количество</span>
                    <div class="quantity">
                        <input class="catalog-tovar-quantity" type="number" min="1" max="100" step="1" value="1">
                    </div>

                <div class="gap"></div>
                <input type="submit" name="adduser" class="anketa-submit" value="Сохранить данные">

            </form>
        </div>
    </div>
</div>