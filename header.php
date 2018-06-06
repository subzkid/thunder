<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="Guido van Dijk">

	<title>Test site</title>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> data-spy="scroll" data-target=".navbar-collapse">
<?php  
  if ( is_home() ) { ?>
    <header>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo home_url('/'); ?>"><img src="/wp-content/themes/eigenThema/images/logo.svg" alt="logo"/></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        
        <?php
        
          wp_nav_menu(
            array(
              'theme_location' => 'primary'
            )
          ); 
        
        ?>

        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

  </header>
<?php } else { ?>
    
    <header>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo home_url('/'); ?>"><img src="/wp-content/themes/eigenThema/images/logo.svg" alt="logo"/></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        
          <ul id="menu-main-naviation" class="menu">
            <li><a href="<?php echo home_url('/'); ?>"><span class="glyphicon glyphicon-menu-left"></span>Go back</a></li>
          </ul>

        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

  </header>

<?php } ?>
  
