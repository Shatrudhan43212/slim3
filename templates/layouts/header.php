<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>DmvReported.com</title>
  <link href="<?= $baseUrl; ?>assets_new/styles/bootstrap.min.css" rel="stylesheet">
  <link href="<?= $baseUrl; ?>assets_new/styles/main.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>

<body>
  <div class="bgBack">
    <!--header-->
    <header>
      <div class="Htop_bar">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="infoTBox">
                <h6>Destiny Reports, LLC <span>| 24/7 live support</span></h6>
                <div class="H_rightbox">
                  <a href="#"><img src="<?= $baseUrl; ?>assets_new/images/live-chat.png" alt="Live Chat"> Live Chat</a><a href="#"><img src="<?= $baseUrl; ?>assets_new/images/user.png" alt="User"> Login</a><a href="#"><img src="<?= $baseUrl; ?>assets_new/images/msg.png" alt="User"> Email</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="headerBox">
              <div class="logoBox hidden-xs">
                <img src="<?= $baseUrl; ?>assets_new/images/logo.png">
              </div>
              <div class="infoBox">
                <div class="infoBBox">
                  <div class="navBox">
                    <!------------nav----------->
                    <nav class="navbar white navbar-default">
                      <div class="logo hidden-sm hidden-md hidden-lg"><img src="<?= $baseUrl; ?>assets_new/images/logo.png"></div>
                      <div class="container-fluid">
                        <div class="navbar-header">
                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar top-bar"></span>
                            <span class="icon-bar middle-bar"></span>
                            <span class="icon-bar bottom-bar"></span>
                          </button>
                        </div>
                        <div id="navbar-1" class="navbar-collapse collapse mainnav">
                          <ul class="nav navbar-nav">
                            <li><a class="scroller" href="<?= $baseUrl; ?>">Home</a>
                            </li>
                            <li><a href="<?= $baseUrl; ?>login">My account</a>
                            </li>
                            <li><a href="<?= $baseUrl; ?>contact">Contact</a>
                            </li>
                            <li><a href="#">24/7 Live chat</a>
                            </li>
                            <h3 class="hidden-sm hidden-md hidden-lg">1-855-935-6179</h3>
                          </ul>
                        </div>
                      </div>
                    </nav>
                    <!------------nav----------->
                  </div>
                  <h3 class="hidden-xs"><img src="<?= $baseUrl; ?>assets_new/images/phone.png" width="19px" height="19px">1-855-935-6179</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!--header-->
    <?php if($title != 'index.php'){?>
    <!--innerbannerSection-->
    <section class="innerBannerSec innerBannerSec2">
      <div class="container">
        <div class="row">
          <h1><?= $title; ?></h1>
        </div>
      </div>
    </section>
    <!--innerbannerSection-->
    <?php } ?>