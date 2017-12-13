<html>
	<head>
    <title>Tasty Recipes</title>
    <link rel="stylesheet" href="<?php echo asset_url(); ?>css/reset.css">
		<link rel="stylesheet" href="<?php echo asset_url(); ?>css/stylesheet.css">
    <link rel="stylesheet" href="<?php echo asset_url(); ?>css/login.css">
    <link rel="stylesheet" href="<?php echo asset_url(); ?>css/signup.css">
    <link href="https://fonts.googleapis.com/css?family=Grand+Hotel%7CUbuntu%7CYanone+Kaffeesatz" rel="stylesheet">
	</head>

	<body>
    <?php $this->session->set_userdata('last_page', current_url()); ?>
    <nav>
      <div class="topnav" id="myTopnav">
        <p>Tasty Recipes</p>
          <a class="<?php if (basename($_SERVER['PHP_SELF'], ".php") == 'home') echo'active'; ?>" href="<?php echo base_url(); ?>home">Home</a>
          <a class="<?php if (basename($_SERVER['PHP_SELF'], ".php") == 'calendar') echo'active'; ?>" href="<?php echo base_url(); ?>calendar">Calendar</a>
          <a class="<?php if (basename($_SERVER['PHP_SELF'], ".php") == 'meatballs') echo'active'; ?>" href="<?php echo base_url(); ?>meatballs">Meatballs</a>
          <a class="<?php if (basename($_SERVER['PHP_SELF'], ".php") == 'pancake') echo'active'; ?>" href="<?php echo base_url(); ?>pancake">Pancakes</a>
          <?php if(!$this->session->userdata('logged_in')) : ?>
                <a href="<?php echo base_url(); ?>users/register" id="signupbutton">Sign up</a>
                <button id="loginbtn" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>

                <div id="id01" class="modal">

                    <form class="modal-content animate" action="<?php echo base_url(); ?>users/login" method = "post">

                        <div class="containerlogin">
                            <label>Username</label>
                            <input type="text" placeholder="Enter Username" name="username" required autofocus>

                            <label>Password</label>
                            <input type="password" placeholder="Enter Password" name="password" required autofocus>

                            <button type="submit" class="loginbutton">Login</button>
                        </div>

                        <div class="containerlogin" id="cancelbutton">
                            <input type="checkbox" checked="checked"> Remember me
                            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                        </div>
                    </form>
                </div>
                <?php endif; ?>

          <?php if($this->session->userdata('logged_in')) : ?>
            <a id="logout" href="<?php echo base_url(); ?>Users/logout">Log out</a>
          <?php endif; ?>

          <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
      </div>

          <script>
            function myFunction() {
              var x = document.getElementById("myTopnav");
              if (x.className === "topnav") {
                  x.className += " responsive";
              } else {
                  x.className = "topnav";
              }
            }
          </script>
    </nav>

    <header>
      <img id="head" src="<?php echo asset_url(); ?>/images/header.png" alt="Header of Tasty Recipes">
    </header>

    <!-- FLASH MESSAGE -->

    <?php if($this->session->flashdata('user_registered')): ?>
      <?php echo '<p class="alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('login_failed')): ?>
      <?php echo '<p class="alert-fail">'.$this->session->flashdata('login_failed').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('user_loggedin')): ?>
      <?php echo '<p class="alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('logged_out')): ?>
      <?php echo '<p class="alert-success">'.$this->session->flashdata('logged_out').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('comment_posted')): ?>
      <?php echo '<p class="alert-success">'.$this->session->flashdata('comment_posted').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('comment_deleted')): ?>
      <?php echo '<p class="alert-success">'.$this->session->flashdata('comment_deleted').'</p>'; ?>
    <?php endif; ?>

    <div class="wrapper">
