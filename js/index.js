var cart = {};
function showauthmenu(){
    auth_div.setAttribute('style','display:block');
    console.log("TEST");
};
function close_auth_div(){
    auth_div.setAttribute('style','display:none');
}
document.addEventListener('DOMContentLoaded', function(){
    checkbasket();
});

var contacts = document.getElementById('contacts-show');
var contacts_div = document.getElementById('headerContactright-hide');
var auth_div = document.getElementById('auth_div')
contacts.onmouseover = function() {
    contacts_div.setAttribute('style','display:block');
};
contacts_div.onmouseleave = function() {
    contacts_div.setAttribute('style', 'display:none');
};
function checkbasket() {
    if (localStorage.getItem('cart') != null)
    {
        cart = JSON.parse(localStorage.getItem('cart'));
    }
    showbasket(cart);
    console.log("CART", cart);
}

function showbasket(cart) {
    var out = 0;
    for (var i in cart) {
        out += cart[i];
    }
    console.log('OUT', out);
    if (localStorage.getItem('cart') != null) {
        var basket = document.getElementById('menu_icon');
        var how_much = document.getElementById('skolko');
        if (out != 0) {
            how_much.setAttribute('style', 'display:block');
            how_much.innerHTML = out;
            console.log('how_much', how_much);
            basket.src = 'templates/images/icons8-shopping-bag-full-50.png';
        }
        else {
            how_much.setAttribute('style', 'display:none');
            console.log('111how', how_much);
            basket.src = 'templates/images/shopping-bag.png';
        }
    }
    // console.log(out);
}



// function activeA() {
//     var url=document.location.href;
//     console.log('url', url);
//     var menu_a = document.getElementsByClassName('menu');
//     console.log('menu_a', menu_a);
//     menu_a.forEach(function(e){
//         if(e.href==url){
//             e.classList.add('active');
//             // var uuuu = document.getElementsByClassName('active');
//             // var pare = uuuu[0].parentNode;
//             // var parent = pare.parentNode;
//             // var parentmenu = parent.parentNode;
//             // var pareA = parentmenu.firstElementChild;
//             // console.log(uuuu);
//             // $(pareA).addClass('active');
//             // $(".shop-cart-body a").removeClass('active');
//         };
//     });
//     // $.each($(".menu a"),function(){
//     //     if(this.href==url){$(this).addClass('active');
//     //         var uuuu = document.getElementsByClassName('active');
//     //         var pare = uuuu[0].parentNode;
//     //         var parent = pare.parentNode;
//     //         var parentmenu = parent.parentNode;
//     //         var pareA = parentmenu.firstElementChild;
//     //         console.log(uuuu);
//     //         $(pareA).addClass('active');
//     //         $(".shop-cart-body a").removeClass('active');
//     //     };
//     // });
// };

