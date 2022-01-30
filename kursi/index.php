<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="author" content="Gulaliyev Ilkin +994773333836">
  <meta name="description" content="wit- лучшие курсы по веб программированию для студентов,курсы ip -телефонии, windows server, MsSQL, MySQL, VueJS, NodeJS, AJax">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
  <title>Wit</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/main_menu.css">
  <link rel="stylesheet" href="css/body.css">
  <link rel="stylesheet" href="css/footer.css">
  <link rel="stylesheet" href="css/virtual_ats.css">
  <link rel="stylesheet" href="css/course_position.css">
  <link rel="stylesheet" href="css/voice.css">
  <link rel="stylesheet" href="css/media.css">
  <link rel="stylesheet" href="css/frontend.css">
  <link rel="stylesheet" href="css/frontend_htmlCss.css">
  <link rel="stylesheet" href="css/frontend_course.css">
  <link rel="stylesheet" href="css/htmlcss.css">
  <link rel="stylesheet" href="css/htmlcss2.css">
  <link rel="stylesheet" href="css/line.css">
  <link rel="stylesheet" href="css/javascript_all.css">
  <link rel="stylesheet" href="css/js1.css">
  <link rel="stylesheet" href="css/js2.css">
  <link rel="stylesheet" href="css/js3.css">
  <link rel="stylesheet" href="css/ajax.css">
  <link rel="stylesheet" href="css/jQuery.css">
  <link rel="stylesheet" href="css/contakt.css">
  <link rel="shortcut icon" href="images/logo_ico.png">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <script type="text/javascript" >
  /*  window.onkeydown = function(evt) {
        if(evt.keyCode == 123) return false;
    };

    window.onkeypress = function(evt) {
        if(evt.keyCode == 123) return false;
    };
    document.oncontextmenu = cmenu; function cmenu() { return false; }*/
</script>
</head> <!-- onmousedown="return false" onselectstart="return false"-->
<body>
  <div class="wraper__ flex flexDirCol">
    <?PHP include_once("main_menu.php");
    @$id = $_GET['id'];
    if($id !== ' '){
      switch ($id) {
        case 'IPphone':
          include_once("beg/voice.php");break;
        case 'virtual_ats':
          include_once("beg/virtual_ats.php");break;
        case 'voice':
          include_once("beg/voice.php");break;
        case 'FrontEnd':
          include_once("beg/frontend/frontend.php");break;
        case 'BackEnd':
          include_once("beg/backend/backend.php");break;
        case 'htmlcss':
          include_once("beg/frontend/htmlcss.php");break;
        case 'htmlcss2':
          include_once("beg/frontend/htmlcss2.php");break;
        case 'frendcour':
          include_once("beg/frontend/frontend_cours.php");break;
        case 'htmlcss_course':
          include_once("beg/frontend/frend_htmlcss.php");break;
        case 'JavaScript_all':
          include_once("beg/frontend/Javascript_all.php");break;
        case 'js1':
          include_once("beg/frontend/js1.php");break;
        case 'js2':
          include_once("beg/frontend/js2.php");break;
        case 'js3':
          include_once("beg/frontend/js3.php");break;
        case 'jquery':
          include_once("beg/frontend/jquery.php");break;
        case 'ajax':
          include_once("beg/frontend/ajax.php");break;
        case 'nodeJS':
          include_once("beg/frontend/nodeJS.php");break;
        case 'contact':
          include_once("beg/contakt.php");break;
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
