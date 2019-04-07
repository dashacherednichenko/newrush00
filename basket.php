<?php
?>
    <div id="mainContainer">
        <h1>Кошик покупок</h1><br>
        <div id="basket_main">
            <div class="shop-cart">
                <div id="empty">
                    <div class="shop-cart-empty">На жаль, Ваша корзина порожня <img src="templates/images/sad.png"></br>
                        <a href="index.php" >Повернутись до покупок?</a><br>
                    </div>
                </div>
                <div id="full">
                    <table>
                        <colgroup>
                            <col width="95%" />
                            <col width="5%" />
                        </colgroup>
                        <tr class="basket_th">
                            <th>Склад замовлення</th>
                            <th></th>
                            <th></th>
                        </tr>
                        <tbody id ="full_table">
                        </tbody>
                    </table>
                    <div  style="" id="price_total">
                    </div>
                </div>
            </div>
        </div>
    </div>
