$(function () {


$.ajax({
     url : 'https://bookmymakeover.com/medigate/erp/API/menu_link.php',
     type : "POST",
     dataType : 'json',
     success : function(data){
       $('.link').attr('href',data.link);
       $('.link2').attr('href',data.link2);
     }})
   })
