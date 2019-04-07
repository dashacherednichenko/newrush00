var cart = {};
var basket = document.getElementById('full_table');
var basket_summ = document.getElementById('price_total');
document.addEventListener('DOMContentLoaded', function(){
    // if (out != 0) {
    //     how_much.setAttribute('style', 'display:block');
    //     how_much.innerHTML = out;
    //     console.log('how_much', how_much);
    // }
    // else {
    //     how_much.setAttribute('style', 'display:none');
    //     console.log('111how', how_much);
    // }
    if (localStorage.getItem('cart') != null) {
        document.getElementById('full').setAttribute('style', 'display:block');
        // console.log('111how', cart);
    }
    else{
        document.getElementById('empty').setAttribute('style', 'display:block');
    }

});
// function checkbasket() {
//     if (localStorage.getItem('cart') != null)
//     {
//         cart = JSON.parse(localStorage.getItem('cart'));
//     }
//     console.log("CART", cart);
// }

function reload_cart(id, count, price) {
    var input_count = document.getElementById('inp_count_'+id);
    var id_total = document.getElementById('total_'+id);
    input_count.value = count;
    id_total.innerHTML = count * price;
    console.log('input_count',input_count);
}

function ft_plus(id, price){
    cart[id]++;
    console.log('cart', id);
    showbasket();
    reload_cart(id, cart[id], price);
    var tmp = document.getElementById('total_sum_basket').innerHTML;
    console.log(tmp);
    tmp = tmp *1 + price*1;
    document.getElementById('total_sum_basket').innerHTML = tmp;
};

function ft_minus(id, price){
    console.log('cartid', cart[id]);
    if (cart[id] >= 2) {
        cart[id]--;
        var tmp = document.getElementById('total_sum_basket').innerHTML;
        tmp = tmp *1 - price*1;
        document.getElementById('total_sum_basket').innerHTML = tmp;
    }
    showbasket();
    reload_cart(id, cart[id], price);
};

function ft_delete(id, price){

};
var request = new XMLHttpRequest();
request.open('GET', 'goods.json');
request.onreadystatechange = function() {
    if (this.readyState == 4) {
        if (this.status == 200) {
            var response = JSON.parse(this.responseText);
            show_big_cart();
        }
        else {
            console.log("error with data");
        }
    }
    function show_big_cart() {
        var out='';
        var total = 0;
        for (var key in cart)
        {
            out += '<tr class="cart-order"><td><b><div><span style="display:none">' + key +
                '</span><div class="cart-order_img"><img src = "'+response[key]['image']+
                '"></div><div class="cart-order_text"><span class="htitle">'+response[key]['name']+
                '</span></div><div class="desc-itm-bundle"><div class="col-2" style="float:left"><span>Ціна</span><p>\n' +
                ' <b class="product_price">'+response[key]['cost']+
                '</b><span class="currency">грн.</span></p></div> <div class="col-2" style="float:left"><span>Кількість</span>' +
                '<button class="minus" onclick="ft_minus('+key+','+response[key]['cost']+')" type="button" data-art="'+key+'">-</button><input class="shk-count" type="text" style="border:none" size="2" name="count[]" id="inp_count_'+key+'"maxlength="3" title="змінити кількість" value="'+cart[key]+
                '"><button class="plus" onclick="ft_plus('+key+','+response[key]['cost']+')" type="button"  data-art="'+key+'">+</button></div><div class="col-2" style="float:left"><span>Сума</span><p><b id="total_'+key+'">'+cart[key]*response[key]['cost']+'</b><span class="currency">грн.</span></p>\n' +
                '</div></div></b></td><td><a title="Видалити" class="shk-del"><button class="delete" onclick="ft_delete('+key+','+response[key]['cost']+')" data-art="'+key+'">x</button></a></td><tr>';
            total += cart[key]*response[key]['cost'];
        }
        basket.innerHTML = out;
        basket_summ.innerHTML = 'Загальна сума: <b id="total_sum_basket">'+total+'</b> <span class="currency">грн.</span>';
    }
}
request.send(null);

