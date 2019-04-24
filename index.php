<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login page</title>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        
<script
  src="https://code.jquery.com/jquery-3.4.0.min.js"
  integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg="
  crossorigin="anonymous"></script>
	
	   <script type="text/javascript" src="Js/Ajaxprofiledetails.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body class="Bglogin">

	<h1 class="loginheading">Login Page</h1>

	<section class="container-fluid">
		
		<section class= "row justify-content-center">
			
			<section class = "col-12 col-sm-6 col-md-3">
				
				 <form   method="post"  class="form-container"  id="formsubmit" >
  <div class="form-group">
      <div class="wrap"  >
          <svg height="75pt" viewBox="0 0 512 512" width="75pt" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><linearGradient id="a" gradientTransform="matrix(1 0 0 -1 0 -19430)" gradientUnits="userSpaceOnUse" x1="0" x2="512" y1="-19686" y2="-19686"><stop offset="0" stop-color="#00f38d"/><stop offset="1" stop-color="#009eff"/></linearGradient><path d="m512 256c0 141.386719-114.613281 256-256 256s-256-114.613281-256-256 114.613281-256 256-256 256 114.613281 256 256zm0 0" fill="url(#a)"/><path d="m314.203125 247.9375c23.515625-17.710938 38.75-45.851562 38.75-77.488281 0-53.457031-43.492187-96.949219-96.953125-96.949219-53.457031 0-96.949219 43.492188-96.949219 96.949219 0 31.636719 15.230469 59.777343 38.746094 77.488281-62.960937 23.632812-107.894531 84.445312-107.894531 155.5625h30c0-75.046875 61.054687-136.097656 136.101562-136.097656 75.042969 0 136.097656 61.050781 136.097656 136.097656h30c-.003906-71.117188-44.933593-131.929688-107.898437-155.5625zm-125.152344-77.488281c0-36.917969 30.03125-66.949219 66.949219-66.949219s66.949219 30.03125 66.949219 66.949219-30.03125 66.953125-66.949219 66.953125-66.949219-30.035156-66.949219-66.953125zm0 0" fill="#fff"/></svg>
      </div>
      
    <label for="email">Email address</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email" required="required">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="InputPassword1">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password" name="password" required="required">
  </div>
  
       <div class="form-group">        
  <button type="submit" value="submit" name='submit' id="signin" class="btn btn-primary btn-block">Login</button>
             </div>       
             <div class="form-group"> <p class="text-center"><a href="register.php">Create an Account</a></p> </div>
</form>
	
				<div id="result" ></div>
			</section>
		
		
	</section>

	
	
	
	
      <!--  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>	-->
</body>
</html>