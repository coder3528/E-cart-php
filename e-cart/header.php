<?php 

session_start();
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<!-- Bootstrap 5 cdn link -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">CodeWithShaikh</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
      </ul>
      <div>
        <?php 
        $count=0;
        if (isset($_SESSION['cart']))
         {
          $count=count($_SESSION['cart']);
        }
        ?>
      	<a class="btn btn-success" href="mycart.php">My Cary (<?php echo $count; ?>)</a>
      </div>
 
    </div>
  </div>
</nav>

</body>
</html>