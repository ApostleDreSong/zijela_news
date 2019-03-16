<?php require ('header.php');
?>

<div class="container">

<div class="row">
	<aside>
<div class="card">
<article class="card-body">

<h4 class="card-title mb-4 mt-1">Sign in</h4>
	 <form action="api.php" method="post" role="form">
    <div class="form-group">
    	<label>Your email</label>
        <input name="email" class="form-control" placeholder="Email" type="email" required>
    </div> <!-- form-group// -->
    <div class="form-group">
    	<a class="float-right" href="#">Forgot?</a>
    	<label>Your password</label>
        <input name="password" class="form-control" placeholder="******" type="password" required>
    </div> <!-- form-group// --> 
    <div class="form-group"> 
    <div class="checkbox">
      <label> <input type="checkbox"> Save password </label>
    </div> <!-- checkbox .// -->
    </div> <!-- form-group// -->  
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block" name="login"> Login  </button>
    </div> <!-- form-group// -->                                                           
</form>
            <div class="form-group">
                <input class="btn btn-success" type="submit" onclick="goToSignup()" value="Signup">
            </div>

</article>
</div> <!-- card.// -->

<?php require ('footer.php');
?>

	</aside> <!-- col.// -->