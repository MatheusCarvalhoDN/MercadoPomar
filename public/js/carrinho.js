$("button").click(function (e){
    var id = $(this).attr('id_carrinho')
    $(this).parent().parent().remove()
    $.ajax({
        type: "post",
        url: "http://localhost/pomar/remove/carrinho",
        data: {'id': id},
        dataType: "json",
    }).done(function(data){
        console.log(data)
    });
});

$('input[type=number]').keyup(function (e) { 
    var id = $(this).attr('id_carrinho')
    var preco = $(this).attr('preco')
    var qntd = $(this).val();
    $('.c'+id).text(qntd * preco);
    $.ajax({
        type: "post",
        url: "http://localhost/pomar/update/carrinho",
        data: {'id': id, 'qntd': qntd},
        dataType: "json",
    }).done(function(data){
        console.log(data)
    });
});