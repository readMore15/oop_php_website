<!DOCTYPE html>
<html>
<head>
	<title>Shareboard</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<?php echo ROOT_URL; ?>assets/css/style.css">
</head>
<body>
	<nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Shareboard</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo ROOT_URL; ?>">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo ROOT_URL; ?>shares">Shares</a>
          </li>
        </ul>
        
        <ul class="nav navbar-nav navbar-right">
          <?php if(isset($_SESSION['is_logged_in'])) : ?>
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo ROOT_URL; ?>shares">Welcome <?php echo $_SESSION['user_data']['name']; ?></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo ROOT_URL; ?>users/logout">Logout</a>
            </li>
          <?php else : ?>
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo ROOT_URL; ?>users/login">Login</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo ROOT_URL; ?>users/register">Register</a>
            </li>
          <?php endif; ?>
        </ul>
      </div>
    </nav>

    <main role="main" class="container mt-5">
      <div class="row">
       <div class="col-md-12">
        <?php echo Messages::display(); ?>
       </div>
      </div>
	    <div class="row">
	     <div class="col-md-12">
        <?php require($view); ?> 
       </div>
	    </div>
    </main><!-- /.container -->
</body>
</html>