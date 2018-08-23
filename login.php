
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js"></script>
  </head>
  <body>
  <section class="section">
    <div class="container">
    <!-- if user credential fails -->
    
    <?php if(isset($_GET['msg']) && $_GET['msg']==1) { ?>
    <div class='notification is-danger'>
    Invalid user credentials
    </div>
    <?php } ?>



      <form action="auth.php" method="POST">
     
<!-- 	 <div class="field">
      	<label class="label">First Name</label>
  			<div class="control has-icons-left has-icons-right">
    			<input class="input is-success" type="text" placeholder="Text input" name="fname">
    		<span class="icon is-small is-left">
      			<i class="fas fa-user"></i>
    		</span>
    		
  		</div>
 	 </div>
 	  <div class="field">
      	<label class="label">Last Name</label>
  			<div class="control has-icons-left has-icons-right">
    			<input class="input is-success" type="text" placeholder="Text input" name="lname">
    		<span class="icon is-small is-left">
      			<i class="fas fa-user"></i>
    		</span>
    		
  		</div>
 	 </div> -->

 	 <div class="field">
  		<label class="label">Email</label>
  		<div class="control has-icons-left has-icons-right">
    		<input class="input" type="email" placeholder="Eg:abc@gmail.com" name="email" required >
    	<span class="icon is-small is-left">
      	<i class="fas fa-envelope"></i>
    	</span>
    
  		</div>
 
	</div>
	 <div class="field">
  		<label class="label">Password</label>
  		<div class="control has-icons-left ">
    		<input class="input" type="password" placeholder="password" name="pwd" required>
    	<span class="icon is-small is-left">
      	<i class="fas fa-lock"></i>
    	</span>
    
  		</div>
 
	</div>

	<div class="control">
    <button class="button is-link" type="submit">Login</button>
    </div>


</form>
      
    </div>
  </section>
  </body>
</html>