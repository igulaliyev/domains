<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="author" content="Gulaliyev Ilkin">
  <meta name="description" content="wit- лучшие курсы по веб программированию для студентов,курсы ip -телефонии, windows server, MsSQL, MySQL, VueJS, NodeJS, AJax">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
  <title>Wit</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/virtual_ats.css">
  <link rel="stylesheet" href="css/media.css">
  <link rel="shortcut icon" href="images/logo_ico.png">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
  <div class="wraper">
    <?PHP include_once("main_menu.php");
    @$id = $_GET['id'];
    if($id !== ' '){
      switch ($id) {
        case 'IPphone':
          include_once("beg/voice.php");break;
        case 'virtual_ats':
            include_once("beg/virtual_ats.php");break;
        default:
          include_once("body.php");break;
      }
    }else {
      include_once("body.php");
    }
    include_once("footer.php");
    ?>
  </div>
</body>
</html>
