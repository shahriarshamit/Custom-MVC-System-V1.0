<!DOCTYPE html>
<html>
     <head>
          <meta charset="UTF-8">
          <title>Custom MVC System 1.0</title>
     </head>
     <body>
          <?php
          $tokens = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
          echo '===============================================';
          echo '<br/>';
          echo 'Application: Custom MVC System';
          echo '<br/>';
          echo 'Version: 1.0';
          echo '<br/>';
          echo 'Developer: Khandaker Shahriar Shamit';
          echo '<br/>';
          echo 'Company: DevStudio';
          echo '<br/>';
          echo '===============================================';
          echo '<br/>';
          echo '<br/>';
          echo '<br/>';
          echo '===============================================';
          echo '<br/>';
          echo 'DEBUG';
          echo '<br/>';
          echo '===============================================';
          echo '<br/>';
          echo '<pre>';
          print_r($tokens);
          echo '</pre>';
          echo '<br/>';
          echo '<pre>';
          print_r($_SERVER);
          echo '</pre>';
          echo '<br/>';
          echo '<br/>';
          echo '<br/>';
          echo '<br/>';
          echo '<br/>';
          echo '<br/>';
          echo '===============================================';
          echo '<br/>';
          ?>
     </body>
</html>
