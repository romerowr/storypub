<?php 
	include 'head_common.php';
	?>

	

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">StoryPub</a>
    </div>
    <ul class="nav navbar-nav">
        <li class="dropdown"><a href="<?= '/home'; ?>">Home</a></li>
      <li class="dropdown"><a href="<?= '/dashboard'; ?>">DashBoard</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="<?= '/register'; ?>"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li class="active"><a href="<?= '/login'; ?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <h1><?= $this->page; ?></h1>
        <br>
	<form class="form-log" action="/login/login" method="post">
        <p><label for="email">Email: <input type="email" name="email"></label></p>
        <p><label for="passwd">Password: <input type="password" name="passwd"></label></p>
        <p>
            <input type="submit" value="Sign in"></p>
        <div class="msg"></div>
    </form>
  <p>*Aceptas todos los derechos.</p>
</div>


	
<?php 
	include 'footer_common.php';
?>