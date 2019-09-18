$(document).ready(function () {
    $(".item_add").click(function () {
        var id = $(this).attr("data-id");
        $.post("/cart/add/" + id, {}, function (data) {
            var result = JSON.parse(data);
            $(".simpleCart_total").html(result.sum);
            $(".simpleCart_quantity").html(result.count);
        });
        return false;
    });
    $(".simpleCart_empty").click(function () {
        $.post("/cart/clear", {}, function (data) {
            var result = JSON.parse(data);
            $(".simpleCart_total").html(result.sum);
            $(".simpleCart_quantity").html(result.count);
            $('.cart-header').fadeOut('slow', function () {
            $('.cart-header').remove();
            });
        });
         
    });
    
    $('.myclose').click(function () { 
        var id = $(this).attr("data-id");
        console.log('-----', id);
        
        var obj = this;
        $.post("/cart/sub/"+id,{},function (data){
            var result = JSON.parse(data);
            $(".simpleCart_total").html(result.sum);
            $(".simpleCart_quantity").html(result.count);
            $(obj).closest('.cart-header').fadeOut('slow', function () {
            $(obj).closest('.cart-header').remove();
            });
        });            
    });                        
                
    $.post("/cart/info", {}, function (data) {
        var result = JSON.parse(data); 
        $(".simpleCart_total").html(result.sum);
        $(".simpleCart_quantity").html(result.count);
    });
    
    
    $('.zakaz').click(function () {console.log('+++');
    var name = document.getElementById("zakaz-name").value;
    var surname = document.getElementById("zakaz-surname").value;
    var adress = document.getElementById("zakaz-adress").value;
    var korzina = document.getElementsByClassName("close2 myclose");
   
    var tovars = [];
    for (i=0; i<korzina.length; i++ ) { console.log('lenght', korzina.length);
        if (korzina[i]) {
            tovars.push(korzina[i].getAttribute('data-id'));
        } 
    };
    /*var zakazu = {
        name: name,
        surname: surname,
        adress: adress,
        tovars: tovars
    };*/
console.log('TOVARS', tovars);
    
    $.post("cart/zakazinfo", {
    name: name,
    surname: surname,
    adress: adress,
    tovars: tovars
  }, function () {
      
                // var result = JSON.parse(data);
       // if (result.code == 200) {
         //   var div = document.getElementByClassName("zakaz");
         //   div[0].classList.add("disabled-div");
        //}
        ;
    });
    
    });
    
        
});




