$("button").click(function (e){
    var id = $(this).attr('id_produto')
    $.ajax({
        type: "post",
        url: "http://localhost/pomar/carrinho",
        data: {'id': id},
        dataType: "json",
    }).done(function(data){
        console.log(data)
    });
});