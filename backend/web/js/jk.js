$(document).ready(function(){
    var status = $("status").click(function(){
     $.ajax({
         type:"POST",
         url:'site/status',
         data: {'id':id},
         success:function(data){
            //  alert("Yes");
            console.log("salom");
         },
         error:function(data){
            //  alert("Error");
            console.log("alik");

         }
     }) 
    });
  });