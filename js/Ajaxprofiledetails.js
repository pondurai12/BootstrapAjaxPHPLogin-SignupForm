        $(document).ready(function(){     
           $("#signin").click(function(){
				  var email = $('#email').val();  
                 var password = $('#password').val(); 
			   //alert(" "+email+" "+password);
  $.post("Ajaxprofiledetails.php",
  {
    email:email,
  password:password
  },
  function(data, status){
    alert("Data: " + data + "\nStatus: " + status);
  });
});
});