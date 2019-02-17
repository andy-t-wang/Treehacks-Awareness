<?php
    session_start();
    if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 86400)) {
    session_unset();     // unset $_SESSION variable for the run-time
    session_destroy();   // destroy session data in storage
    }
    $_SESSION['LAST_ACTIVITY'] = time();
        if (!isset($_SESSION['CREATED'])) {
        $_SESSION['CREATED'] = time();
    } else if (time() - $_SESSION['CREATED'] > 1800) {
        // session started more than 30 minutes ago
        session_regenerate_id(true);    // change session ID for the current session and invalidate old session ID
        $_SESSION['CREATED'] = time();  // update creation time
    }
    if(!isset($_SESSION['user'])){
      header('location:login.php');
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="shortcut icon" href="verum.ico">
    <link rel="stylesheet" href="assets/css/main.css"/>
    <link rel="stylesheet" href="assets/css/animate.min.css"/>
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
    <title>Verum</title>
    <style media="screen">
      .add_to_cart:hover {
        cursor:pointer;
        background-color:#f4f6f9;
        text-decoration:none;
        color:#FFFFFF;
        }
        .txt:hover {
          text-decoration: underline;
          cursor: pointer;
        }
    </style>
  </head>

  <body >
    <div id="wrapper">
    <header id="header">
		<a href="index.php" class="logo fadeInUp animated">Verum</a>
	</header>
  <div class="animated fadeInUp" style = "padding-left:10%; padding-right: 10%; padding-bottom: 10%">

    <div class="card-deck">
        <div id = "test" class="card add_to_cart">
        <img class="card-img-top" src="images/pic1.jpg" alt="Card image cap">
        <div class="card-body">
          <a href="main.php?verum=<?=urlencode('Stanford') ?>"><h3 class="card-title">Stanford</h3></a>
        </div>
        <div class="card-footer">
          <small class="text-muted">Last updated 1 mins ago</small>
        </div>
        </div>
        <div class="card add_to_cart">
        <img class="card-img-top" src="images/pic2.jpeg" alt="Card image cap">
        <div class="card-body">
          <a href="main.php?verum=<?=urlencode('Roble') ?>"><h3 class="card-title">Roble Dorm</h3></a>
        </div>
        <div class="card-footer">
          <small class="text-muted">Last updated 6 mins ago</small>
        </div>
        </div>
        <div class="card">
        <div class="card-body">
          <h3 class="card-title">Trending Communities</h3>
          <ol>
              <ul class="txt">Stanford Daily <h6>Posts Today: 37</h6></ul>
              <ul class="txt">Palo Alto Downtown <h6>Posts Today: 28</h6></ul>
              <ul class="txt">Stanford Engineering <h6>Posts Today: 23</h6></ul>
            </ol>
        </div>
        </div>
      </div>
      <br>
      <div class="card-deck">
          <div class="card add_to_cart">
          <img class="card-img-top" src="images/pic1.jpg" alt="Card image cap">
          <div class="card-body">
            <a href="main.php?verum=<?=urlencode('Canyon Gates Community') ?>"><h3 class="card-title">Canyon Gates Community</h3></a>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 3 mins ago</small>
          </div>
          </div>
          <div class="card add_to_cart">
          <img class="card-img-top" src="images/pic2.jpeg" alt="Card image cap">
          <div class="card-body">
            <a href="main.php?verum=<?=urlencode('Stanford Club Soccer') ?>"><h3 class="card-title">Stanford Club Soccer</h3></a>
          </div>
          <div class="card-footer">
            <small class="text-muted">Last updated 1 hour ago</small>
          </div>
          </div>
          <div class="card">
          <div class="card-body">
            <h3 class="card-title">Curated Posts</h3>
            <ol>
              <ul class="txt">Should Stanford sue SC county?<h6>View Today: 532</h6></ul>
              <ul class="txt">Roble security is understaffed<h6>Views Today: 487</h6></ul>
              <ul class="txt">New national tax reform will raise tuition <h6>Views Today: 433</h6></ul>
            </ol>
          </div>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript">
    document.getElementsByid("test").onclick = function () {
        location.href = "/index.php";
    };
  </script>
    <script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
