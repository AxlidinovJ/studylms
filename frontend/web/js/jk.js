
function show(card){
    // $("#blok").load($(this).attr('href'));
    // $('#myModal').modal('show');
    $("#blok").html(card);
    $('#myModal').modal();
}

function showcard(){
    $.ajax({
        url:'/card/show',
        type: 'GET',
        success: function (res){
           show(res);
        },
        error: function (){
            console.log("xatolik");
        }
    });
}

function delteproduct(id) {
    $.ajax({
        url: '/card/delitem',
        data: {id: id},
        type: 'GET',
        success: function (res) {
            show(res);
        },
        error: function () {
            console.log("xatolik");
        }
    });
}

$(document).ready(function(){

    $(".card").click(function(e){
      e.preventDefault();
        var id = $(this).data('id');
        $.ajax({
            url:'/card/add',
            data: {id:id},
            type: 'GET',
            success: function (res){
                show(res);
            },
            error: function (){
                console.log("xatolik");
            }
        });
    });

    $(".clear").click(function (e){
        e.preventDefault();
        $.ajax({
          url:"/card/clear",
           type: 'GET',
           success:function (res){
              show(res);
              console.log("Tozalandi");
           },
           error:function (){
              alert("O'chirishda xatolik");
           }
       });
    });


});



function show1(card){
    $("#blok1").html(card);
    $('#loginModal').modal();
}

function show2(card){
    $("#blok2").html(card);
    $('#signupModal').modal();
}

function showLogin(){
    $.ajax({
        url:'/site/login1',
        type: 'GET',
        success: function (res){
           show1(res);
        },
    });
}

function showSignup(){
    $.ajax({
        url:'/site/signup1',
        type: 'GET',
        success: function (res){
           show2(res);
        },
    });
}