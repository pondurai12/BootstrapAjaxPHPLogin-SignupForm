
	

$(document).ready(function(){
	
    $('#register').click(function(){
   var name = $('#username').val();
    var age= $('#age').val();
    var contact = $('#contact').val();
    var email = $('#email').val();
    var password = $('#password').val();
      
 
 alert("name "+name+"age "+age+"contact "+contact+"email "+email+"aaa "+password);
     


if(name==''||age==''||contact==''||email=='' ||password=='')
 {
 	 $('#response').html('<span class="text-danger">All fields are Required</span>')
 }else if ((password.length) < 8) {
 $('#response').html('<span class="text-danger">Password should atleast 8 character in length...!!!!!!")</span>')
	 }else    
$.ajax(
{
url: "Ajaxinsert.php",
type: "POST",
data:$('#form').serialize(),
beforeSend:function(){
	$('#response').html('<span class="text">Loding....response.</span>')
},
success: function(data)
{
$('form').trigger("reset");
$('#response').fadeIn().html(data);
setTimeOut(function(){
$('#response').fadeOut(slow)}
,5000);

}

});


     });  
});



	