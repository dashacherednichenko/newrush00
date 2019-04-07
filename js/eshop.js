var cart = {};

document.addEventListener('DOMContentLoaded', function(){
    loadinggoods();
    // checkbasket();
    // showbasket();
//    console.log("TEST");
});

function add_to_cart(prod) {
    console.log("ADD", prod.getAttribute('data-art'));
    var id = prod.getAttribute('data-art');
    if (cart[id] != undefined)
        cart[id]++;
    else
        cart[id] = 1;
    localStorage.setItem('cart', JSON.stringify(cart));
    showbasket();
    console.log(cart);
}

function loadinggoods() {
    var request = new XMLHttpRequest();
    request.open('GET', 'goods.json');
    request.onreadystatechange = function() {
        if (this.readyState == 4) {
            if (this.status == 200) {
                var response = JSON.parse(this.responseText);
                var out = '';
                for (var key in response)
                {
                    out += '<div class="catalogueItem item">' +
                        '<a href="" class="catalogueItem_title">'+ response[key]['name']+'</a>' +
                        ' <div class="image_container"><img src="'+response[key]['image']+'">' +
                        '</div><div>' +
                        // '<form action="'+key+'" method="post">\n' +
                        '                                        <fieldset>\n' +
                        '                                            <input type="hidden" name="id" value="'+key+'" />\n' +
                        '                                            <input type="hidden" name="name" value="'+response[key]['name']+'" />\n' +
                        '                                            <input type="hidden" name="count" value="1" />\n' +
                        '                                            <input type="hidden" value="'+response[key]['cost']+'" />\n' +
                        '                                            <div class="product-price">\n' +
                        '                                                <div class="price">\n' +
                        '                                                    <span>'+response[key]['cost']+'<span class="currency">грн.</span></span>\n' +
                        '                                                </div>\n' +
                        '                                                <button type="submit" class="but add-to-cart" data-art="'+key+'" onclick="add_to_cart(this)">\n' +
                        '                                                    <img src="templates/images/buy.png" id="mini_icon"><p>Купити</p>\n' +
                        '                                                </button>\n' +
                        '                                            </div>\n' +
                        '                                        </fieldset>\n' +
                        // '                                    </form>' +
                        '</div>' +
                        '</div>';
                }
                // console.log("TEST&&&&", response);
                var catalog = document.getElementsByClassName('catalogue-list');
                catalog[0].innerHTML = out;
                console.log(catalog);
            }
        else {
                console.log("error with data");
            }
        }
    }
    request.send(null);
}