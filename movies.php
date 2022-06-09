<?php 

	include_once ('config.php');

  if (empty($_SESSION['emri'])) {
        header('Location: login.php');
  }


 ?>



<!DOCTYPE html>
<html>
<head>
	<title>Add form</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<style>
		table{
			border: 1px solid black;
			border-collapse:collapse;
		}
		th,td{
			padding: 5px 10px;
			border:1px solid black;
		}
	</style>
  <link rel="stylesheet" type="text/css" href="css/dashboard.css">

</head>
<body>

	<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Welcome <?php echo $_SESSION['emri']; ?></a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="logout.php">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="movies.php">
              <span data-feather="file"></span>
              Movies
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart"></span>
              Products
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users"></span>
              Customers
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              Reports
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers"></span>
              Integrations
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Saved reports</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Current month
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Last quarter
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Social engagement
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Year-end sale
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div>
      </div>

      <h2>Add a new movie</h2>

      <form action="addMovie.php" method="POST">

      <div class="form-floating input-container">
        <input type="text" class="form-control" id="floatingInput" placeholder="Movie name" name="movie_name">
        <label for="floatingInput">Movie name</label>
      </div>
      <div class="form-floating input-container">
        <input type="text" class="form-control" id="floatingInput" placeholder="Movie Description" name="movie_description">
        <label for="floatingInput">Movie Description</label>
      </div>
      <div class="form-floating input-container">
        <input type="text" class="form-control" id="floatingInput" placeholder="Movie Quality" name="movie_quality">
        <label for="floatingInput">Movie Quality</label>
      </div>
      <div class="form-floating input-container">
        <input type="number" class="form-control" id="floatingInput" placeholder="Movie Rating" name="movie_rating">
        <label for="floatingInput">Movie Rating</label>
      </div>
      <div class="form-floating input-container">
        <input type="file" class="form-control" id="floatingInput" placeholder="Movie image" name="movie_image">
        <label for="floatingInput">Movie Image</label>
      </div>
      <button class="btn btn-lg btn-primary " type="submit" name="submit" style="width: 40%; margin: 20px;">Add movie</button>
    </form>
   
      
      
    </main>
  </div>
</div>


	


</body>
</html>