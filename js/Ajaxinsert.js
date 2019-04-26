
	

$(document).ready(function(){
	
    $('#register').click(function(){
//   var name = $('#name').val();
//    var age= $('#age').val();
//    var contact = $('#contact').val();
//    var email = $('#email').val();
//    var password = $('#password').val();
      
 var data = $('#form').serialize();
 //alert("name "+name+"age "+age+"contact "+contact+"email "+email+"aaa "+password);
     
//alert("daa "+data);

/*if(name!=''||age!=''||contact!=''||email!='' ||password!='')
 {
	 alert("name inside if  "+name+"age "+age+"contact "+contact+"email "+email+"aaa "+password);
 	 $('#dis').html('<span class="text-danger">All fields are Required</span>')
 }else if ((password.length) < 8) {
 $('#dis').html('<span class="text-danger">Password should atleast 8 character in length...!!!!!!")</span>')
	 }else    {
		 alert("  elseename "+name+"age "+age+"contact "+contact+"email "+email+"aaa "+password);*/
$.ajax(
{
url: "Ajaxinsert.php",
type: "POST",
data:data,
success: function(data){
	alert(" sucessfully Registered added Record"+data);
}


});

	 
     });  
});



	
