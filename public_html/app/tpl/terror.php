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
      <li ><a href="<?= '/login'; ?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <h1><?= $this->page; ?></h1>
        <h1>hola</h1>
	<table class="table table-hover">
		<?php for($i=0;$i<count($this->dataTable);$i++){ ?>
			<tr>
			<?php foreach($this->dataTable[$i] as $key=>$value) :?>
				
	        		<td><?= $value; ?></td>
	    	
	    	<?php endforeach; ?>
	    	</tr>
	    <?php } ?>
	</table>
  <p>The .navbar-right class is used to right-align navigation bar buttons.</p>
</div>
