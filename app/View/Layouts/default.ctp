<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
    <!-- Customizable Select -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.css"> <!-- keep at bottom of stylesheets -->
  
    <title><?php echo $this->fetch('title'); ?></title>
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container" style="min-height:50px; width:100%;">
        <div class="navbar-header" style="width:100%">
          <div style="margin:0 auto; display: table; float:left">
            <div class="row">
              <div class="col-xs-12 hidden-sm hidden-md hidden-lg hidden-xl">
                <a href="/"><img src="/img/logo_small.png" style="margin-top:5px; height:40px;"></a>
              </div>
              <div class="hidden-xs col-sm-12">
                <a href="/"><img src="/img/logo.jpg" style="margin-top:5px; height:40px;"></a>
              </div>
            </div>
          </div>
          <div class="pull-right" style="margin-top:5px;">
            <a href="https://discordapp.com/channels/177922917550522368/319527406115487746" target="_blank"><img style="height:35px" src="/img/icons/discord_icon.png"></a>
            <a href="https://www.facebook.com/events/1979734845588292/" target="_blank"><img style="height:35px" src="/img/icons/fb_icon.png"></a>
            <a href="https://twitter.com/NWSpeedFest" target="_blank"><img style="height:35px" src="/img/icons/twitter_icon.png"></a>
          </div>
          
          <div id="navbar" class="collapse navbar-collapse pull-left" align="center">
            <div class="row">
              <div class="hidden-xs col-sm-12 hidden-md hidden-lg hidden-xl">
                <span class="navbar-span">Speedrunning Marathon</span>
              </div>
              <div class="hidden-xs hidden-sm col-md-12">
                <span class="navbar-span">Speedrunning Marathon for Charity</span>
              </div>
            </div>
          </div>  <!--/.nav-collapse -->
        </div>
      </div>
    </nav>
    
    <img style="width:100%; max-height:500px; border-bottom:1px solid black" src="/img/skyline.png" />
    
    <div class="row" style="margin-bottom:5px">
      <div class="col-xs-12 hidden-sm hidden-md hidden-lg hidden-xl">
        <div class="btn-group btn-group-justified" role="group">
          <div class="btn-group" role="group">
            <a href="/" class="btn btn-default btn-topnav" style="font-size:16px;">Event Info</a>
          </div>
          <div class="btn-group" role="group">
            <a href="/main/involved" class="btn btn-default btn-topnav" style="font-size:16px;">Volunteer</a>
          </div>
          <div class="btn-group" role="group">
            <a href="/main/about" class="btn btn-default btn-topnav" style="font-size:16px;">About Us</a>
          </div>
        </div>
      </div>
      <div class="hidden-xs col-sm-12">
        <div class="btn-group btn-group-justified" role="group">
          <div class="btn-group" role="group">
            <a href="/" class="btn btn-default btn-topnav">Event Info</a>
          </div>
          <div class="btn-group" role="group">
            <a href="/main/submissions" class="btn btn-default btn-topnav">Submissions</a>
          </div>
          <div class="btn-group" role="group">
            <a href="/main/involved" class="btn btn-default btn-topnav">Volunteer</a>
          </div>
          <div class="btn-group" role="group">
            <a href="/main/about" class="btn btn-default btn-topnav">About Us</a>
          </div>
        </div>
      </div>
    </div>
    
    <div class="col-xs-12 col-sm-8 col-md-9">
      <div id="container">
        <div id="content" style="font-family: 'Maven Pro', sans-serif;margin-left:10px">
          <?php echo $this->Session->flash(); ?>
          <?php echo $this->fetch('content'); ?>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-4 col-md-3">
      <a class="twitter-timeline" data-height="800" href="https://twitter.com/NWSpeedFest">Tweets by NWSpeedFest</a>
      <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>
        
  </body>
</html>
