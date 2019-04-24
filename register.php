<!DOCTYPE html>
<html lang="en">
<head>
	    <title>Registration page </title>
 <!-- <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">-->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
<script
  src="https://code.jquery.com/jquery-3.4.0.min.js"
  integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg="
  crossorigin="anonymous"></script>
	
	 <link rel="stylesheet" type="text/css" href="style.css">
	  <script type="text/javascript" src="Js/Ajaxinsert.js"></script>
    </head>
	
	 <body class="bgreg" >
        <h1 style="text-align: center">Registration form</h1>
  
        
      
        <section class="container-fluid">
            
            <section class="row justify-content-center">
            <section class = "col-12 col-sm-6 col-md-3"> </section>
         <form  method="post" class="regform-container" id="form"  >
  <div class="form-group">
      <div class="ricon"  >
          <svg height="80pt" viewBox="0 0 512 512" width="80pt" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><linearGradient id="a" gradientUnits="userSpaceOnUse" x1="0" x2="512" y1="256" y2="256"><stop offset="0" stop-color="#00f38d"/><stop offset="1" stop-color="#009eff"/></linearGradient><path d="m512 256c0 141.386719-114.613281 256-256 256s-256-114.613281-256-256 114.613281-256 256-256 256 114.613281 256 256zm0 0" fill="url(#a)"/><g fill="#fff"><path d="m389.203125 91.484375h-266.40625c-23.261719 0-42.183594 18.925781-42.183594 42.1875v244.65625c0 23.261719 18.921875 42.1875 42.183594 42.1875h266.40625c23.261719 0 42.183594-18.925781 42.183594-42.1875v-244.65625c0-23.261719-18.921875-42.1875-42.183594-42.1875zm-266.40625 30h266.40625c6.71875 0 12.183594 5.46875 12.183594 12.1875v39.367187h-290.773438v-39.367187c0-6.71875 5.464844-12.1875 12.183594-12.1875zm266.40625 269.03125h-266.40625c-6.71875 0-12.183594-5.46875-12.183594-12.1875v-175.289063h290.773438v175.289063c0 6.71875-5.464844 12.1875-12.183594 12.1875zm0 0"/><path d="m269.59375 227.40625h106.019531v30h-106.019531zm0 0"/><path d="m136.390625 227.40625h106.019531v30h-106.019531zm0 0"/><path d="m269.59375 281.777344h106.019531v30h-106.019531zm0 0"/><path d="m136.390625 281.777344h106.019531v30h-106.019531zm0 0"/><path d="m269.59375 336.144531h78.832031v30h-78.832031zm0 0"/><path d="m136.390625 336.144531h106.019531v30h-106.019531zm0 0"/><path d="m156.777344 147.261719c0 7.507812-6.085938 13.59375-13.59375 13.59375-7.503906 0-13.589844-6.085938-13.589844-13.59375 0-7.503907 6.085938-13.589844 13.589844-13.589844 7.507812 0 13.59375 6.085937 13.59375 13.589844zm0 0"/><path d="m204.351562 147.261719c0 7.507812-6.085937 13.59375-13.59375 13.59375-7.507812 0-13.59375-6.085938-13.59375-13.59375 0-7.503907 6.085938-13.589844 13.59375-13.589844 7.507813 0 13.59375 6.085937 13.59375 13.589844zm0 0"/></g></svg>
      </div>
      </div>      
      
      <div class="form-group">
  
    <label for="name">Name </label>
        <input type="text" class="form-control" id="username" name="name"  placeholder="Entername" required="required">
   <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
             </div>
        
             <div class="form-group">
    <label for="name">Age</label>
    <input type="text" class="form-control" id="age" name="age"  placeholder="EnterAge" required="required">
   
             </div>
     <div class="form-group">
    <label for="name">Contact</label>
    <input type="text" class="form-control" id="contact" name="contact"   placeholder="EnterContact" required="required">
   
             </div>
             
        <div class="form-group">
    <label for="name">Email</label>
    <input type="text" class="form-control" id="email" name="email"   placeholder="EnterEmail" required="required">
    </div>
  <div class="form-group">
    <label for="InputPassword">Password</label>
    <input type="password" class="form-control" id="password" name="password"  placeholder="EnterPassword" required="required">
  </div>
             <!-- <div class="form-group">
    <label for="InputPassword1">RetypePassword</label>
    <input type="password" class="form-control" name="confirmpassword" id="exampleInputPassword" placeholder="RetypePassword" required="required">
  </div>-->
  
       <div class="form-group">        
  <button type="submit" id="register" class="btn reg btn-primary btn-block">Register</button>
             </div>       
            <div class="text-center">Already have an account? <a href="index.php">Sign in</a></div>
</form>
          <div id="response"></div>     
                
                
                  </section>
            
        </section>
        

        
        
        <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>-->
    </body>

</html>