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
                    <div class="my-cart">
                        <p class="error"></p>
                        <form method="post" action="basket" id="shopOrderForm">
                            <input type="hidden" name="order" value="1">
                            <table cellpadding="3">
                                <tbody><tr style="font-weight:bold;font-size:22px"><td>Оформлення замовлення</td></tr>
                                <tr>
                                    <td style="font-weight:bold" class="attention">Ім"я*:</td>
                                    <td>
                                        <input name="fullname" size="30" class="textfield" type="text" value="">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="font-weight:bold;padding-right:10px" class="attention">Телефон*:</td>
                                    <td>
                                        <input name="phone" id="phone" size="30" class="textfield" type="text" value="" placeholder="+38(___) ___-__-__">
                                    </td>
                                </tr>
                                <tr>
                                    <td>E-mail:</td>
                                    <td>
                                        <input name="email" size="30" class="textfield" type="text" value="">
                                    </td>
                                </tr>
                                <tr>
                                    <td title="Оберіть спосіб доставки" style="padding-right:10px">Спосіб доставки:</td>
                                    <td>
                                        <div class="opt_delivery">
                                            <input name="shk_delivery" type="radio" value="НОВА ПОШТА" class="myradio" id="delivery__НОВАЯ ПОЧТА">
                                            <label for="delivery__НОВАЯ ПОЧТА" style="display:inline-block">НОВА ПОШТА</label>
                                            <img src="templates/images/icon-nova-poshta.png" style="height: 20px;">
                                            <br>
                                            <input name="shk_delivery" type="radio" value="Кур'єром" class="myradio" id="delivery__Курьером / монтажной бригадой">
                                            <label for="delivery__Курьером / монтажной бригадой" style="display:inline-block">Кур'єром</label>
                                            <br>
                                            <input name="shk_delivery" type="radio" value="ІН-ТАЙМ" class="myradio" id="delivery__ИН-ТАЙМ">
                                            <label for="delivery__ИН-ТАЙМ" style="display:inline-block">ІН-ТАЙМ</label>
                                            <img src="templates/images/icon-intime.jpg" style="height: 20px;">
                                            <br>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Адреса:</td>
                                    <td>
                                        <input name="address" size="30" class="textfield" type="text" value="">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding-right:10px">Коментар:</td>
                                    <td>
                                        <textarea name="message" class="textfield" rows="2" cols="30" style="width:220px"></textarea>
                                    </td>
                                </tr>
                                <tr style="display:none">
                                    <td>OderIdCredit:</td>
                                    <td>
                                        <input name="OderIdCredit" size="30" class="textfield" type="text" value="">
                                    </td>
                                </tr>
                                </tbody></table>
                            <input type="submit" name="submit_button" class="button" value="Оформити замовлення">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
