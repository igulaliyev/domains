<?php
class Server{
    public $_host;
    public $_login;
    public $_pass;
    public $myDB;
    public $_connecting;
    
    public function __construct(){
        $this->_host = $this->ClearSTR($_POST['host']);
        $this->_login = $this->ClearSTR($_POST['login']);
        $this->_pass = $this->ClearSTR($_POST['password']);
        $this->myDB = $this->ClearSTR($_POST['nameBD']);
        if($this->_host && $this->_login && $this->_pass && $this->myDB){
            $this->checkBD();
            $this->writeFileConnect();
        }
    }
    
    public function ClearSTR($data){
        return trim(strip_tags($data));
    }
    public function ClearINT($data){
        return (int)trim(strip_tags($data));
    }
    
    public function connect(){
        $this->_connecting = @new mysqli($this->_host, $this->_login, $this->_pass, $this->myDB);
    }
    
    public function createBase(){
        $base = $this->myDB;
        $set = new mysqli($this->_host, $this->_login, $this->_pass, "");
        $createBase = "CREATE DATABASE IF NOT EXISTS `$base` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";
        $set->query($createBase);
        $set->close();
        $set = new mysqli($this->_host, $this->_login, $this->_pass, $base);
        $createBegineElmiT = "
            CREATE TABLE `begineElmiT` (
              `id` int(11) NOT NULL,
              `header` text NOT NULL,
              `body` text NOT NULL,
              `done` text NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
        ";
        $createBegineElmiTInsert = "
            INSERT INTO `begineElmiT` (`id`, `header`, `body`, `done`) VALUES
                (1, 'научный заголовок', 'научный -------------', '1'),
                (2, 'научный заголовок2', 'научный -------------2', '0');
        ";
        $createBegineKurs = "
            CREATE TABLE `begineKurs` (
              `id` int(11) NOT NULL,
              `header` text NOT NULL,
              `body` text NOT NULL,
              `done` int(11) NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
        ";
        $createBegineKursInsert = "
            INSERT INTO `begineKurs` (`id`, `header`, `body`, `done`) VALUES
                (2, 'новый заголовок', 'новое содержимое77777777999', 1),
                (3, 'новый заголовок', 'новое содержимое77777', 0),
                (4, 'новый заголовок9900', 'новое содержимое44555555', 0),
                (5, 'новый заголовок', 'новое содержимое77777', 0),
                (6, 'новый заголовок888', 'новое содержимое8888', 0);
        ";
        $createBegineLayhe = "
            CREATE TABLE `begineLayhe` (
              `id` int(11) NOT NULL,
              `header` text NOT NULL,
              `body` text NOT NULL,
              `done` int(11) NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
        ";
        $createBegineLayheInsert = "
            INSERT INTO `begineLayhe` (`id`, `header`, `body`, `done`) VALUES
                (1, 'новый заголовок1', 'вапаааааа', 1),
                (2, 'новый', 'новый 1111', 0),
                (3, 'новый88', 'новый 1111888', 0);
        ";
        $createBegineTelim = "
            CREATE TABLE `begineTelim` (
              `id` int(11) NOT NULL,
              `header` text NOT NULL,
              `body` text NOT NULL,
              `done` int(11) NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
        ";
        $createBegineTelimInsert = "
            INSERT INTO `begineTelim` (`id`, `header`, `body`, `done`) VALUES
                (2, 'новый заголовок', 'новое содержимое', 0),
                (3, 'новый заголовок1ы', 'здесь будет текст', 1),
                (5, 'новый заголовок45', 'новое содержимое44', 1),
                (8, 'новый заголовок9900', 'новое содержимое77777', 0),
                (9, 'новый заголовок9900', 'новое содержимое77777', 0),
                (10, 'новый заголовокл', 'содержимое', 0);
        ";
        $createTableContent = "
            CREATE TABLE `content` (
              `id` int(11) NOT NULL,
              `images` text NOT NULL,
              `alt` text NOT NULL,
              `text_one` text NOT NULL,
              `text_two` text NOT NULL,
              `color_text` text NOT NULL,
              `background` text NOT NULL,
              `textOneSize` INT NOT NULL,
              `textTwoSize` INT NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
        ";
        $createTableContentInsert = "
            INSERT INTO `content` (`id`, `images`, `alt`, `text_one`, `text_two`, `color_text`, `background`, `textOneSize`, `textTwoSize` )
            VALUES
            (1, 'images/bg.png', 'content', 'test one  nnnnnnnnnn', 'text two hhhhhhhhhhhhhhhhhhhhhhhhh', 'black', 'silver', 25, 16);
        ";
        $footerAds = "
            CREATE TABLE `footerAds` (
              `id` int(11) NOT NULL,
              `header` text NOT NULL,
              `body` text NOT NULL,
              `date` text NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
        ";
        $footerAdsInsert = "
            INSERT INTO `footerAds` (`id`, `header`, `body`, `date`) VALUES
                (1, 'new Ads', 'content Ads', '2019-05-15'),
                (2, 'new ads m2', 'footerAddAds', '2019-05-11');
        ";
        $createTableGalery = "
            CREATE TABLE `galery` (
                  `id` int(11) NOT NULL,
                  `images` text NOT NULL,
                  `alt` text NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
        ";
        $createTableGaleryInsert = "
            INSERT INTO `galery` (`id`, `images`, `alt`) VALUES
                (1, 'images/bg.png', 'ccc'),
                (2, 'images/bg.png', 'cc');
        ";
        $createTablePsiGal = "
            CREATE TABLE `psihological_background` (
                  `id` int(11) NOT NULL,
                  `background` text NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
        ";
        $createTablePsiGalInsert = "
            INSERT INTO `psihological_background` (`id`, `background`) VALUES
            (1, '#3c68e2');
        ";
        $createTablePsiImage = "
            CREATE TABLE `psihological_image` (
                  `id` int(11) NOT NULL,
                  `images` text NOT NULL,
                  `alt` text NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
        ";
        $createTablePsiImageInsert = "
            INSERT INTO `psihological_image` (`id`, `images`, `alt`) VALUES
            (1, 'images/bg.png', 'ttt');
        ";
        $createTablePsiTextOne = "
            CREATE TABLE `psihological_textOne` (
                  `id` int(11) NOT NULL,
                  `text` text NOT NULL,
                  `color` text NOT NULL,
                  `size` int(11) NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
        ";
        $createTablePsiTextOneInsert = "
            INSERT INTO `psihological_textOne` (`id`, `text`, `color`, `size`) VALUES
            (1, 'пройти психолгический тест', 'silver', 35);
        ";
        $createTablePsiTextTwo = "   
            CREATE TABLE `psihological_textTwo` (
              `id` int(11) NOT NULL,
              `text` text NOT NULL,
              `color` text NOT NULL,
              `size` int(11) NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
        ";
        $createTablePsiTextTwoInsert = "
            INSERT INTO `psihological_textTwo` (`id`, `text`, `color`, `size`) VALUES
            (1, 'здесь будет ваш текст ', 'silver', 15);
        ";
        $createTableServiceKurs = "
            CREATE TABLE `service_kurslar` (
              `id` int(11) NOT NULL,
              `images` text NOT NULL,
              `alt` text NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
        ";
        $createTableServiceKursInsert = "
            INSERT INTO `service_kurslar` (`id`, `images`, `alt`) VALUES
            (1, 'images/bg.png', '');
        ";
        $createTableServiceLayhe = "
            CREATE TABLE `service_layhe` (
              `id` int(11) NOT NULL,
              `images` text NOT NULL,
              `alt` text NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
        ";
        $createTableServiceLayheInsert = "
            INSERT INTO `service_layhe` (`id`, `images`, `alt`) VALUES
            (1, 'images/bg.png', 'g');
        ";
        $createTableServiceTelim = "
            CREATE TABLE `service_telimler` (
              `id` int(11) NOT NULL,
              `images` text NOT NULL,
              `alt` text NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
        ";
        $createTableServiceTelimInsert = "
            INSERT INTO `service_telimler` (`id`, `images`, `alt`) VALUES
            (1, 'images/bg.png', 't');
        ";
        $createUserNews = "
            CREATE TABLE `userNews` (
              `id` int(11) NOT NULL,
              `headers` text NOT NULL,
              `body` text NOT NULL,
              `date` text NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
        ";
        $createUserNewsInsert = "
            INSERT INTO `userNews` (`id`, `headers`, `body`, `date`) VALUES
                (1, 'новость 1', 'содержания новости ', '2019-05-17'),
                (2, 'Новость 2', 'footerBodyHews', '2019-05-12');
        ";
        $createUserTestPsi = "
            CREATE TABLE `userTestPsi` (
              `id` int(11) NOT NULL,
              `width` int(11) NOT NULL,
              `height` int(11) NOT NULL,
              `src` text NOT NULL,
              `content` text NOT NULL
            ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
        ";
        $createUserTestPsiInsert = "
            INSERT INTO `userTestPsi` (`id`, `width`, `height`, `src`, `content`) VALUES
                (1, 300, 260, 'https://www.youtube.com/embed/qN4ooNx77u0', 'здесь будет текстздес\r\nздесь будет текстздес'),
                (3, 300, 260, 'https://www.youtube.com/embed/nlcIKh6sBtc', 'userTestPsiAdduserTestPsiAdd');
        ";
        $createTableAlertAdd = "
            ALTER TABLE `begineElmiT` ADD PRIMARY KEY (`id`);
            ALTER TABLE `begineKurs` ADD PRIMARY KEY (`id`);
            ALTER TABLE `begineLayhe` ADD PRIMARY KEY (`id`);
            ALTER TABLE `begineTelim` ADD PRIMARY KEY (`id`);
            ALTER TABLE `content` ADD PRIMARY KEY (`id`);
            ALTER TABLE `footerAds` ADD PRIMARY KEY (`id`);
            ALTER TABLE `galery` ADD PRIMARY KEY (`id`);
            ALTER TABLE `userNews` ADD PRIMARY KEY (`id`);
            ALTER TABLE `userTestPsi` ADD PRIMARY KEY (`id`);
            ALTER TABLE `psihological_background` ADD PRIMARY KEY (`id`);
            ALTER TABLE `psihological_image` ADD PRIMARY KEY (`id`);
            ALTER TABLE `psihological_textOne` ADD PRIMARY KEY (`id`);
            ALTER TABLE `psihological_textTwo` ADD PRIMARY KEY (`id`);
            ALTER TABLE `service_kurslar` ADD PRIMARY KEY (`id`);
            ALTER TABLE `service_layhe` ADD PRIMARY KEY (`id`);
            ALTER TABLE `service_telimler` ADD PRIMARY KEY (`id`);
        ";
        $createTableAlertAddModify = "
            ALTER TABLE `begineElmiT` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
            ALTER TABLE `begineKurs` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
            ALTER TABLE `begineLayhe` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
            ALTER TABLE `begineTelim` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
            ALTER TABLE `content` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
            ALTER TABLE `footerAds` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
            ALTER TABLE `galery` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
            ALTER TABLE `userNews` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
            ALTER TABLE `userTestPsi` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
            ALTER TABLE `psihological_background` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
            ALTER TABLE `psihological_image` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
            ALTER TABLE `psihological_textOne` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
            ALTER TABLE `psihological_textTwo` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
            ALTER TABLE `service_kurslar` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
            ALTER TABLE `service_layhe` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
            ALTER TABLE `service_telimler` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
            ALTER TABLE `tom_menu_ul` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
            ALTER TABLE `top_menu` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
            COMMIT;
        ";
        $set->query($createBegineElmiT);
        $set->query($$createBegineElmiTInsert);
        $set->query($createBegineKurs);
        $set->query($createBegineKursInsert);
        $set->query($createBegineLayhe);
        $set->query($createBegineLayheInsert);
        $set->query($createBegineTelim);
        $set->query($createBegineTelimInsert);
        $set->query($createTableContent);
        $set->query($createTableContentInsert);
        $set->query($footerAds);
        $set->query($footerAdsInsert);
        $set->query($createTableGalery);
        $set->query($createTableGaleryInsert);
        $set->query($createTablePsiGal);
        $set->query($createTablePsiGalInsert);
        $set->query($createTablePsiImage);
        $set->query($createTablePsiImageInsert); 
        $set->query($createTablePsiTextOne);
        $set->query($createTablePsiTextOneInsert);
        $set->query($createTablePsiTextTwo);
        $set->query($createTablePsiTextTwoInsert);
        $set->query($createTableServiceKurs);
        $set->query($createTableServiceKursInsert);
        $set->query($createTableServiceLayhe);
        $set->query($createTableServiceLayheInsert);
        $set->query($createTableServiceTelim); 
        $set->query($createTableServiceTelimInsert);
        $set->query($createUserNews);
        $set->query($createUserNewsInsert);
        $set->query($createTableAlertAdd);
        $set->query($createTableAlertAddModify);
        $set->close();
    }
    
    public function checkBD(){
        $this->connect();
        $conne = $this->_connecting;
        $base = $this->myDB;
        $sql = "SELECT * FROM $base";
        @$result = $conne->query($sql);
        if(!isset($result)){
           echo("базы данных не существует, будет создана новая - $base</br>");
        }else{
             $conne->close();
            echo("connecting");
        }
        if(mysqli_connect_errno($conne)){
            echo("connecting error ". mysqli_connect_error());
        }
        $this->createBase();
    }
    
    public function writeFileConnect(){
        $text = $this->_host . " : " . $this->_login . " : " . $this->_pass . " : " . $this->myDB;
        $txt = base64_encode($text);
        $files = fopen($_SERVER['DOCUMENT_ROOT'] . "con.txt", "w+") or die("не ужалось сделать запись");
        fwrite($files, $txt);
        $datax = explode(":", base64_decode(file_get_contents($_SERVER['DOCUMENT_ROOT'] . "con.txt")));
        $host = $datax[0];
        $login = $datax[1];
        $passwor = $datax[2];
        $db = $datax[3];
        fclose($files);
    }
    
}