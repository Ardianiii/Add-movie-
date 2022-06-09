<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="text-center">

	<main class="form-signin">
	  <form action="signupLogic.php" method="POST">
	    <img class="mb-4" src="https://getbootstrap.com/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
	    <h1 class="h3 mb-3 fw-normal">Please sign up</h1>

	    <div class="form-floating">
	      <input type="text" class="form-control" id="floatingInput" placeholder="Emri" name="emri">
	      <label for="floatingInput">Emri</label>
	    </div>
	    <div class="form-floating">
	      <input type="text" class="form-control" id="floatingInput" placeholder="Mbiemri" name="mbiemri">
	      <label for="floatingInput">Mbiemri</label>
	    </div>
	    <div class="form-floating">
	      <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="username">
	      <label for="floatingInput">Username</label>
	    </div>
	    <div class="form-floating">
	      <input type="email" class="form-control" id="floatingInput" placeholder="email" name="email">
	      <label for="floatingInput">Email</label>
	    </div>
	    <div class="form-floating">
	      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
	      <label for="floatingPassword">Password</label>
	    </div>

	    <div class="checkbox mb-3">
	      <label>
	        <input type="checkbox" value="remember-me"> Remember me
	      </label>
	    </div>
	    <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Sign up</button>
	    <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
	  </form>
	</main>

</body>
</html>