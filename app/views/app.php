<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Conquest</title>

    <!-- Bootstrap -->
    <link href="public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Main Style -->
    <link href="public/css/style.css" rel=stylesheet>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <nav class="navbar navbar-default navbar-static-top">
  <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Тестовое задание</a>
      </div>
      <ul class="nav navbar-nav">
      <li class=""><a href="/index/palindrom">Проверить палиндром</a></li>
      <li class=""><a href="/nav">Многоуровневое меню</a></li>
      <li class=""><a href="/news">Новости</a></li>
      <li class=""><a href="/personal">SQL</a></li>
      </ul>
      </div>
      </nav>
      <div class="container">
          <?php require_once "views/../".$data['content'].".php"; ?>
      </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="public/js/bootstrap.min.js"></script>
  </body>
</html>