<?php $content = new RideBase(); ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>TQDK</title>
</head lang="Az">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<meta name="description" content="A"> 
 	<meta name="Keywords" content="">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="js/jquery.js" ></script>
	<link rel="shortcut icon" href="" type="image/png">
	<link rel="stylesheet" href="css/style.css"/>
	<script type='text/javascript'>
		(function(){ var widget_id = 'kvpIj3weqB';var d=document;var w=window;function l(){
		  var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;
		  s.src = '//code.jivosite.com/script/widget/'+widget_id
			; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}
		  if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}
		  else{w.addEventListener('load',l,false);}}})();
	</script>
<body>
    <div class="opacityContent"></div>
    <div class="opacityCall">
        <div class="closeCall">close</div>
        <form action="<?=$_SERVER['REQUEST_URI']; ?>" method="POST">
            <div class="formCalling">
                <label>
                    Adınız:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="text" name="callName"/><br><br>
                </label>
                <label>
                    Nömrəniz:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="phone" name="callNumber"/><br>
                </label>
                <input class="callingSent" type="submit" name="sentCalling" value="Göndərmək?"/>
            </div>
        </form>
    </div>
    <div class="mainContent">
        <div class="closeMain">close</div>
        <div class="mainAllContent"></div>
    </div>
<div class="begin">
    <div class="opacity"></div>
    <div class="contentJs"></div>
	<div class="top_menu">
        <div class="logo_l"><a href="https://www.facebook.com/pozitivzeka/" target="_blank">
            <img  src="images/facebook.png" alt="facebook"/></a>
        <a href="https://www.facebook.com/pozitivzeka/" target="_blank">
            <img  src="images/skype.png" alt="skype"/></a></div>
			<nav>
				<ul>
                    <li> <a href=""> Онлайн </a>
						<ul>
							<li><a href="#cons"> Онлайн консультация </a></li>
						</ul>
					</li>
					<li><a href="#content">Услуги</a>
						<ul>
							<li><a href="#kurs"> Задания &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
							<li><a href="#kurs"> Курсы</a></li>
							<li><a href="#kurs">Проекты и иследования</a></li>
						</ul>
					</li>
					<li><a href="#test_psi">Психологические тесты</a></li>
					<li><a href="#galery">Мультимедия</a></li>
					<li><a href="#footer_z">Издания</a>
						<ul>
							<li><a href="#galery"> Видео </a></li>
							<li><a href=""> Статьи</a></li>
						</ul>
					</li>
					<li><a href="#foot">Новости и объявления</a></li>
				</ul>
			</nav>
	</div>
    <div class="calling">
         Заказать звонок?
    </div>
	<div class="one_background_image" style="background:<?php $content->contentBackground(); ?>">
		<div style="color:<?php $content->contentTextColor();?>">
			<?php $content->contentText(); 
			 $content->contentTextTwo(); ?>
		</div>
        <?php $content->contentEdit(); ?>
	</div>
	<div class="content_content">
		<div class="content_kurs" id="kurs">
			<div>
				<div>Задания</div>
				<div><?php $content->setTrainings(); ?></div>
				<div class="TelimP osnK"><< Подробнее >></div>
			</div>
			<div>
				<div>Курсы</div>
				<div><?php $content->setCoursess(); ?></div>
				<div class="KursP osnK"><< Подробнее >></div>
			</div>
			<div>
				<div>Проекты</div>
				<div><?php $content->setProjects(); ?></div>
				<div class="LayhelerP osnK"><< Подробнее >></div>
			</div>
		</div>
	</div>
	<div class="test_content" id="test_psi" <?php $content->psiTextBackground(); ?>>
		<div class="text_content_text" </di>
			<div><?php $content->psiImage();?></div>
			<div class="block_text">
				<?php $content->psiTextOne();
                    $content->psiTextTwo();
                ?>
				
			</div>
			<div class="osnK testStart">Начать</div>
		</div>
	</div>
	<div class="galery_content">
		<div id="galery">
            <span class="osnK galetyStart"> << Подробнее >> </span>
			<?php $content->galery();?>
		</div>
	</div>
	<div class="help_footer">
		<img src="images/helps.jpg" alt="help" />
		<div>
			<div id="cons">
				<form action="<?=$_SERVER['REQUEST_URI']; ?>" method="POST"></br>
					<div>
						<label> Имя </br>
							<input type="text" name="name" title="name"></br></br>
						</label>
					</div>
					<div>
						<label> Фамилия </br>
							<input type="text" name="last_name" title="last name"></br></br>
						</label>
					</div>
					<div>
						<label> E-mail </br>
							<input type="email" name="email" title="e-mail"></br></br>
						</label>
					</div>
					<div>
						<label> Сообщения </br>
							<textarea name="message" ></textarea></br></br>
						</label>
					</div>
					<div class="send">
						<input type="submit" name="Send" value="Отправить">
					</div>
				</form>
			</div>
		</div>
	</div>
	<hr>
	<footer id="foot">
		<div>
			<div class="osnK footNews">Новости </div>
			<div class="osnK footAds">Объявления</div>
		</div>
	</footer>
</div>
</body>
</html>
