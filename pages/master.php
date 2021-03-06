<!doctype html>
<html>
<head>
  <title><?php echo $pageTitle; ?></title>
  <link rel="stylesheet" type="text/css" href="css/style.css"  />
  <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
  <script src="js/jquery-1.12.3.min.js"></script>
</head>
<body>
  <div id="wrapper">

    <div id="contentWrapper">
      <div id="navBar" class="nav">
        <div id="logo">
          <img src="img/logo.svg" alt="M.C. CoreDB" />
        </div>
        <div id="menu">
          <ul class="menu-links">
              <a href="dashboard.php"><li class="<?php echo $linkHighlights['home'] ?>">HOME</li></a>
	     <?php if(isset($_SESSION['userID']) && $_SESSION['userID'] > 0): ?>
              <?php if($_SESSION['canCreate'] == 1): ?> 
	        <a href="domains.php"><li class="<?php echo $linkHighlights["domain"] ?>">DOMAIN</li></a>
	      <?php endif;?>
	      <a href="prospectus.php"><li class="<?php echo $linkHighlights["prospectus"] ?>">PROSPECTUS</li></a>
              <a href="courses.php"><li class="<?php echo $linkHighlights["courses"] ?>">COURSES</li></a>
              <a href="stats.php"><li class="<?php echo $linkHighlights["stats"] ?>">STATS</li></a>
              <a href="index.php?logout=true"><li>LOGOUT</li></a>
             <?php endif; ?>
          </ul>
        </div>
      </div>
    </div>

    <div id="content">
	<?php if(isset($messages)): ?>
	<div id="messages">
		<h2>Hold up! There's some errors:</h2>
                <ul>
			<?php foreach($messages as $msg): ?>
				<li class="<?php echo $msg['class']; ?>"><?php echo $msg['text']; ?></li>
			<?php endforeach; ?>
		</ul>
	</div>	
	<?php endif; ?>
	<?php include_once('pages/' . $content);?>
    </div>

  </div>
</body>
<html>
