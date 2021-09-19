<?php
class connectMYSQL{
    public $_mysql;
    public $_sql;
    public function getConnectSql(){
        $datax = explode(":", base64_decode(file_get_contents($_SERVER['DOCUMENT_ROOT'] . "con.txt")));
        $host = trim($datax[0]);
        $login = trim($datax[1]);
        $passwor = trim($datax[2]);
        $db = trim($datax[3]);
        $this->_mysql = new mysqli($host, $login, $passwor, $db);
    }
    public function sqlSelect($sql){
        return $this->_sql = $sql;
    }
    public function select(){
        $connect = $this->getConnectSql();
        $conn = $this->_mysql;
        $sql = $this->_sql;
        if(!$result = $conn->query($sql)){
            echo " В базе Sql нет некоторых  таблиц ". mysqli_connect_error();
            return false;
        }
        while($rou = $result->fetch_array(MYSQLI_ASSOC))
			$items[] = $rou;
		$result->free();
		$conn->close();
        return $items;
    }
    
}

class RideBase{
    public function AllConnectEdit($sql){
        $connectSql = new connectMYSQL();
        $connectSql->sqlSelect($sql);
        $item = $connectSql->select();
        return $itemOn = $this->ISArray($item);
    }
    public function ISArray($data){
        if(is_array($data))
            return $data;
    }
    
/*--------------------первая страница изображения и заголовок----------------------------*/
    public function contentEdit(){
        $sql = "SELECT id, images, alt  FROM `content`";
        $item = $this->AllConnectEdit($sql);
        foreach($item as $items){
            switch($items){
                case "":
                    break;
                default:
                    echo $info = "<img src='{$items['images']}' alt='{$items['alt']}'/>";
            }
        }
    }
    
    public function contentText(){
        $sql = "SELECT id, text_one, textOneSize FROM `content`";
        $item = $this->AllConnectEdit($sql);
        foreach($item as $items){
            echo $info = "<div style='font-size:{$items['textOneSize']}px;'>{$items['text_one']} </div>";
        }   
    }
    
    public function contentTextColor(){
        $sql = "SELECT id, color_text FROM `content`";
        $item = $this->AllConnectEdit($sql);
        foreach($item as $items){
             echo $items['color_text'];
        }   
    }
    
    public function contentBackground(){
        $sql = "SELECT id, background FROM `content`";
        $item = $this->AllConnectEdit($sql);
        foreach($item as $items){
            echo $items['background'];
        }  
    }
    
    public function contentTextTwo(){
        $sql = "SELECT id, text_two, textTwoSize FROM `content`";
        $item = $this->AllConnectEdit($sql);
        foreach($item as $items){
            echo $info = "<div style='font-size:{$items['textTwoSize']}px;'>{$items['text_two']}; </div>";
        } 
    }
    /*--------------------первая страница изображения и заголовок------------- end---------------*/
    /*--------------------Раздел курсов тренингов------------- begin-----------------------------*/
    public function setTrainings(){
        $sql = "SELECT id, images, alt FROM `service_telimler`";
        $item = $this->AllConnectEdit($sql);
        foreach($item as $items){
            echo $info = "<img src='{$items['images']}' alt='{$items['alt']}'/>";
        }
    }
    
    public function setCoursess(){
        $sql = "SELECT id, images, alt FROM `service_kurslar`";
        $item = $this->AllConnectEdit($sql);
        foreach($item as $items){
            echo $info = "<img src='{$items['images']}' alt='{$items['alt']}'/>";
        }
    }
    
    public function setProjects(){
        $sql = "SELECT id, images, alt FROM `service_layhe`";
        $item = $this->AllConnectEdit($sql);
        foreach($item as $items){
            echo $info = "<img src='{$items['images']}' alt='{$items['alt']}'/>";
        }
    }
    /*--------------------Раздел курсов тренингов------------- end-----------------------------*/
    /*--------------------Раздел психологического теста------------- begin---------------------*/
    public function psiImage(){
        $sql = "SELECT id, images, alt FROM `psihological_image`";
        $item = $this->AllConnectEdit($sql);
        foreach($item as $items){
            echo $info = "<img src='{$items['images']}' alt='{$items['alt']}'/>";
        }
    }
    
     public function psiTextOne(){
        $sql = "SELECT id, text, color, size FROM `psihological_textOne`";
         $item = $this->AllConnectEdit($sql);
        foreach($item as $items){
            echo $info = "<div style='color:{$items['color']}; font-size:{$items['size']}px;'>
                        {$items['text']}</div>";
        }
    }
    
    public function psiTextTwo(){
        $sql = "SELECT id, text, color, size FROM `psihological_textTwo`";
        $item = $this->AllConnectEdit($sql);
        foreach($item as $items){
            echo $info = "<div style='color:{$items['color']}; font-size:{$items['size']}px;'>
                        {$items['text']}</div>";
        }
    }
    
    public function psiTextBackground(){
        $sql = "SELECT id, background FROM `psihological_background`";
        $item = $this->AllConnectEdit($sql);
        foreach($item as $items){
            echo $info = "style='background-color:{$items['background']}'";
        }
    }
    public function galery(){
        $sql = "SELECT id, images, alt FROM `galery`";
        $item = $this->AllConnectEdit($sql);
        foreach($item as $items){
            $i =1;
            echo $info = "<div><img src='{$items['images']}' alt='{$items['alt']}'/></div>";
            if($i > 10)
                 break;
            $i++;
        }
    }
}
// -------------------------------------------Admin panels-------------------------------------------------
class ConclusionMenu{
    public function __construct(){
		ob_start();
		$login = $_SERVER['PHP_AUTH_USER'];
		$password = "3333836";
		if(!$_COOKIE['Admin'] or !($_SERVER['PHP_AUTH_PW'] == $password)){
			header("Content-type; charset='utf-8'");
			header('WWW-Authenticate: Basic realm = "admins"');
			header('HTTP/1,0 401 Unauthorized');
			if($_SERVER['PHP_AUTH_USER'] == 'admin')
				setcookie("Admin", $password, time()+3600);
		}ob_end_flush();
        echo "hello $login";
    }
    public function conclusionI(){
        $connectSql = new connectMYSQL();
        $sql = "SELECT id, value FROM `top_menu`";
        $connectSql->sqlSelect($sql);
        $item = $connectSql->select();
        if(is_array($item)){
            foreach($item as $items){
                $info = "
                    <tr><td>{$items['id']}</td>
                    <td>{$items['value']}</td>
                ";
            echo $info;
            }
        }
    }
}

class EtidContent{
    public function AllConnectEdit($sql){
        $connectSql = new connectMYSQL();
        $connectSql->sqlSelect($sql);
        $item = $this->turnOverArray($connectSql->select());
        return $itemOn = $this->ISArray($item);
    }
    public function ISArray($data){
        if(is_array($data))
            return $data;
    }
    
    public function selectContent(){
        $sql = "SELECT id, text_one, textOneSize, text_two, textTwoSize, color_text, background FROM `content`";
        $item = $this->AllConnectEdit($sql);
             foreach($item as $items){
                $info = "
                    <tr><td>{$items['id']} </td>
                    <td>{$items['text_one']}<br>
                        <input type='text' name='textOne'/>
                    </td>
                    <td>{$items['textOneSize']}<br>
                        <input type='number' name='textOneSize' />
                    </td>
                    <td>{$items['text_two']}<br>
                        <input type='text' name='textTwo'/>
                    </td>
                    <td>{$items['textTwoSize']}<br>
                        <input type='number' name='textTwoSize'/>
                    </td>
                    <td>{$items['color_text']}<br>
                        <input type='text' name='colorText'/>
                    </td>
                    <td>{$items['background']}<br>
                        <input type='text' name='background'/>
                    </td>
                ";
                $image = "<input type='file' name='image' accept='image/png' value='загрузите Png'/>"; 
                echo $info . "<td> $image </td>" . "<td><input type='submit' value='изменить'></td>";
             }
        if($_SERVER['REQUEST_METHOD'] == 'POST')
            $this->editContentt();
        $x = $_POST['sent'];
        if(!empty($x))
            $this->donwloadServiceImage();
        if(!empty($_POST['sentPsi']))
            $this->EditPsi();
    }
    
    public function clearSTR($data){
        return htmlentities(trim(strip_tags($data)));
    } 
    public function clearINT($data){
        return htmlentities(trim(strip_tags((int)$data)));
    }
    public function turnOverArray($data){
        return array_reverse($data, true);
    } 
    public function update($sql){
        $connectSql = new connectMYSQL();
        $connectSql->getConnectSql();
        $conn = $connectSql->_mysql;
        //$sqli = htmlentities($conn->real_escape_string($sql));
        if($conn->query($sql))
                echo "done<br>";
    }
    public function editContentt(){
        $textOne =  $this->clearSTR($_POST['textOne']);
        $textOneSize =  $this->clearINT($_POST['textOneSize']);
        $textTwo =  $this->clearSTR($_POST['textTwo']);
        $textTwoSize =  $this->clearINT($_POST['textTwoSize']);
        $colorText =  $this->clearSTR($_POST['colorText']);
        $background =  $this->clearSTR($_POST['background']);
        $update = "UPDATE `content` SET";
        $where = "WHERE `content` . `id` = 1";
        if(!empty($textOne)){
            $sql = $update." `text_one` = '$textOne' ".$where;
            $this->update($sql);
        }elseif(!empty($textOneSize)){
            $sql = $update." `textOneSize` = $textOneSize ".$where;
            $this->update($sql);
        }elseif(!empty($textTwo)){
            $sql = $update." `text_two` = '$textTwo' ".$where;
             $this->update($sql);
        }elseif(!empty($textTwoSize)){
            $sql = $update." `textTwoSize` = $textTwoSize ".$where;
            $this->update($sql);
        }elseif(!empty($colorText)){
            $sql = $update." `color_text` = '$colorText' ".$where;
             $this->update($sql);
        }elseif(!empty($background)){
            $sql = $update." `background` = '$background' ".$where;
            $this->update($sql);
        }
        $this->contentDownloadImage();
            
    }
    
    public function downloadImage($file, $fileTmp, $bdname, $alt, $id){
        $url = "images/" . $file;
        $update = "UPDATE `$bdname` SET ";
        $where = " WHERE `$bdname` . `id` = $id";
        if(!empty($file)){
            if(!move_uploaded_file($fileTmp, $url)){
                echo("<br>download error image <br>");
            }
            $sql = $update .  " `images` = '$url', `alt` = '$alt'" .  $where;
            $this->update($sql);
        }
    }
    
    public function contentDownloadImage(){
        $file = $_FILES['image']['name'];
        $fileTmp = $_FILES['image']['tmp_name'];
        $bdname = 'content';
        $alt = "content";
        $this->downloadImage($file, $fileTmp, $bdname, $alt, 1);
    }
    
    public function donwloadServiceImage(){
        $telimAlt = $this->clearSTR($_POST['telimAlt']);
        $kursAlt = $this->clearSTR($_POST['kursAlt']);
        $layheAlt = $this->clearSTR($_POST['layheAlt']);
        if($file = $_FILES['imageTelim']['name']){
            $fileTmp = $_FILES['imageTelim']['tmp_name'];
            $this->downloadImage($file, $fileTmp, "service_telimler", $telimAlt, 1); 
        }
        if($file = $_FILES['imageKurs']['name']){
            $fileTmp = $_FILES['imageKurs']['tmp_name'];
            $this->downloadImage($file, $fileTmp, "service_kurslar", $kursAlt, 1); 
        }
        if($file = $_FILES['imageLayhe']['name']){
            $fileTmp = $_FILES['imageLayhe']['tmp_name'];
            $this->downloadImage($file, $fileTmp, "service_layhe", $kursAlt, 1); 
        }
    }
    public function selectPsiBackground(){
        $sql = "SELECT id, background FROM `psihological_background`";
        $item = $this->AllConnectEdit($sql);
        foreach($item as $items){
            echo $items['background'];
        }
    }
    public function selectPsiTextOne(){
        $sql = "SELECT id, text FROM `psihological_textOne`";
        $item = $this->AllConnectEdit($sql);
        foreach($item as $items){
            echo $items['text'];
        }
    }
    public function selectPsiTextOneSize(){
        $sql = "SELECT id, size FROM `psihological_textOne`";
        $item = $this->AllConnectEdit($sql);
        foreach($item as $items){
            echo $items['size'];
        }
    }
    public function selectPsiTextOneColor(){
        $sql = "SELECT id, color FROM `psihological_textOne`";
        $item = $this->AllConnectEdit($sql);
        foreach($item as $items){
            echo $items['color'];
        }
    }
    public function selectPsiTextTwo(){
        $sql = "SELECT id, text FROM `psihological_textTwo`";
        $item = $this->AllConnectEdit($sql);
        foreach($item as $items){
            echo $items['text'];
        }
    }
    public function selectPsiTextTwoColor(){
        $sql = "SELECT id, color FROM `psihological_textTwo`";
        $item = $this->AllConnectEdit($sql);
        foreach($item as $items){
            echo $items['color'];
        }
    }
    public function selectPsiTextTwoSize(){
        $sql = "SELECT id, size FROM `psihological_textTwo`";
        $item = $this->AllConnectEdit($sql);
        foreach($item as $items){
            echo $items['size'];
        }
    }
    
    public function connectPsi($bdName, $select, $id){
        $update = "UPDATE `$bdName` SET ";
        $where = " WHERE `$bdName` . `id` = '$id'";
        $sql = $update . $select . $where;
        $this->update($sql);
    }
    public function EditPsi(){
        $textOne = $this->clearSTR($_POST['textOne']);
        $textOneSize = $this->clearSTR($_POST['textOneSize']);
        $textTwo = $this->clearSTR($_POST['textTwo']);
        $textTwoSize = $this->clearSTR($_POST['textTwoSize']);
        $textColorOne = $this->clearSTR($_POST['textColorOne']);
        $textColorTwo = $this->clearSTR($_POST['textColorTwo']);
        $background = $this->clearSTR($_POST['background']);
        $PsiAlt = $this->clearSTR($_POST['PsiAlt']);
        if(!empty($textOne)){
            $select = " `text` = '$textOne' ";
            $this->connectPsi('psihological_textOne', $select, 1);
        }
        if(!empty($textOneSize)){
            $select = " `size` = '$textOneSize' ";
            $this->connectPsi('psihological_textOne', $select, 1);
        }
        if(!empty($textColorOne)){
            $select = " `color` = '$textColorOne' ";
            $this->connectPsi('psihological_textOne', $select, 1);
        }
        if(!empty($textTwo)){
            $select = " `text` = '$textTwo' ";
            $this->connectPsi('psihological_textTwo', $select, 1);
        }
        if(!empty($textTwoSize)){
            $select = " `size` = '$textTwoSize' ";
            $this->connectPsi('psihological_textTwo', $select, 1);
        }
        if(!empty($textColorTwo)){
            $select = " `color` = '$textColorTwo' ";
            $this->connectPsi('psihological_textTwo', $select, 1);
        }
        if(!empty($background)){
            $select = " `background` = 'background' ";
            $this->connectPsi('psihological_background', $select, 1);
        }
        if($file = $_FILES['imagePsi']['name']){
            $fileTmp = $_FILES['imagePsi']['tmp_name'];
            $this->downloadImage($file, $fileTmp, "psihological_image", $PsiAlt); 
        }
    }
    
    public function galeryAll(){
        $sql = "SELECT id, images, alt FROM `galery`";
        $item = $this->AllConnectEdit($sql);
            foreach($item as $items){
                $i =1;
                echo $info = "
                    <tr><td>{$items['id']}
                    <td><img src='{$items['images']}'/></td>
                    <td><input type='file' name='imageGalery{$items['id']}' accept='image/jpeg, image/jpg, image/gif, image/png'  /></td>
                        <td><input type='text' name='GaleryAlt{$items['id']}' /></td>
                        <td><input type='submit' name= 'sentGalery{$items['id']}' value='{$items['id']}save'></td>
                        <td><input type='submit' name= 'deleteGalery{$items['id']}' value='{$items['id']}delete'></td>
                    ";
                if(1 * $_POST["sentGalery{$items['id']}"]){
                    $file = $_FILES["imageGalery{$items['id']}"]["name"];
                    $GaleryAlt = $this->clearSTR($_POST["GaleryAlt{$items['id']}"]);
                    $fileTmp = $_FILES["imageGalery{$items['id']}"]['tmp_name'];
                    $this->downloadImage($file, $fileTmp, "galery", $GaleryAlt, $items['id']);
                }
                if(1 * $_POST["deleteGalery{$items['id']}"]){
                    $sql = "DELETE FROM `galery` WHERE `galery` .`id` = {$items['id']}";
                    $this->update($sql);
                }
                $i++;
            }
        if($file = $_FILES['galeryImageAdd']['name']){
            $connectSql = new connectMYSQL();
            $connectSql->getConnectSql();
            $url = "images/" . $file;
            $galeryAltAdd = $this->clearSTR($_POST['galeryAltAdd']);
            $fileTmp = $_FILES['galeryImageAdd']['tmp_name'];
            $sql = "INSERT INTO `galery`(`images`, `alt`) VALUES (?, ?)";
            $stp = $connectSql->_mysql->prepare($sql);
		    $stp->bind_param("ss", $url, $galeryAltAdd);
		    $stp->execute();
		    $stp->close();
        }
    }
    /* ----------------------edit kurs --------------------*/
    /*---------------------------------admin--start----------------------------------------*/
    public function loadBegineTelimAll($bdNameX, $newHeader, $newbody, $submit, $doneTelim, $BegineSave, $BegineDelete){
        $sql = "SELECT id, header, body FROM `$bdNameX`";
        $item = $this->AllConnectEdit($sql);
            foreach($item as $items){
                $info = "
                    <tr><td>{$items['id']} </td>
                    <td><div>{$items['header']}</div>
                        <input type='text' name='header{$items['id']}'/></td>
                    <td><div>{$items['body']}</div>
                    <textarea name='body{$items['id']}'> </textarea></td>
                    <td><div>{$items['done']} </div>
                        <input type='checkbox' name='$doneTelim' /></td>
                    <td><input type='submit' name='$BegineSave{$items['id']}' value ='{$items['id']}save'/></td>
                    <td><input type='submit' name='$BegineDelete{$items['id']}' value ='{$items['id']}delete'/></td>
                ";
                echo($info);
                if(1 * $_POST["$BegineSave{$items['id']}"]){
                    $header = $this->clearSTR($_POST["header{$items['id']}"]);
                    $body = $this->clearSTR($_POST["body{$items['id']}"]);
                    $done = $_POST[$doneTelim];
                        if($done)
                            $done = 1;
                        else
                            $done = 0;
                        $select = " `header` = '$header', `body` = '$body', `done` = '$done' ";
                        $this->connectPsi($bdNameX, $select, $items['id']);
                }
                if(1 * $_POST["$BegineDelete{$items['id']}"]){
                    $sql = "DELETE FROM `$bdNameX` WHERE `$bdNameX` .`id` = {$items['id']}";
                    $this->update($sql);
                }
            }
        if(!empty($newHeader) && !empty($newbody)){
            if($_POST[$submit]){
                $int = 0;
                $connectSql->getConnectSql();
                $sql = "INSERT INTO `$bdNameX`(`header`, `body`, `done`) VALUES (?, ?, ?)";
                $stp = $connectSql->_mysql->prepare($sql);
                $stp->bind_param("ssi", $newHeader, $newbody, $int);
                $stp->execute();
                $stp->close();
            }
        }
    }
    public function loadBegineTelim(){
        $bdNameX = "begineTelim";
        $submit = "galeryImageSave";
        $doneTelim = "doneTelim";
        $BegineSave = "BegineSave";
        $BegineDelete = "BegineDelete";
        $newHeader = $this->clearSTR($_POST['TelimHeader']);
        $newbody = $this->clearSTR($_POST['TelimBody']);
        $this->loadBegineTelimAll($bdNameX, $newHeader, $newbody, $submit, $doneTelim, $BegineSave, $BegineDelete);
    }
    public function loadBegineKurs(){
        $bdNameX = "begineKurs";
        $submit = "galeryImageSaveKurs";
        $doneTelim = "doneLeyhe";
        $BegineSave = "BegineSaveKurs";
        $BegineDelete = "BegineDeleteKurs";
        $newHeader = $this->clearSTR($_POST['kursHeader']);
        $newbody = $this->clearSTR($_POST['kursBody']);
        $this->loadBegineTelimAll($bdNameX, $newHeader, $newbody, $submit, $doneTelim, $BegineSave, $BegineDelete);
    }
    public function loadBegineLayhe(){
        $bdNameX = "begineLayhe";
        $submit = "galeryImageSaveLayhe";
        $doneTelim = "doneLayhe";
        $BegineSave = "BegineSaveLayhe";
        $BegineDelete = "BegineDeleteLayhe";
        $newHeader = $this->clearSTR($_POST['LayheHeader']);
        $newbody = $this->clearSTR($_POST['LayheBody']);
        $this->loadBegineTelimAll($bdNameX, $newHeader, $newbody, $submit, $doneTelim, $BegineSave, $BegineDelete);
    }
    public function loadBegineLayheElm(){
        $bdNameX = "begineElmiT";
        $submit = "galeryImageSaveLayheElm";
        $doneTelim = "doneLayheElm";
        $BegineSave = "BegineSaveLayheElm";
        $BegineDelete = "BegineDeleteLayheElm";
        $newHeader = $this->clearSTR($_POST['LayheHeaderElm']);
        $newbody = $this->clearSTR($_POST['LayheBodyElm']);
        $this->loadBegineTelimAll($bdNameX, $newHeader, $newbody, $submit, $doneTelim, $BegineSave, $BegineDelete);
    }
    /*---------------------------------admin--end----------------------------------------*/
    /*---------------------------------users--start----------------------------------------*/
    public function loadBegineContentTelimAll($sql, $end, $startC){
        $connectSql = new connectMYSQL();
        $item = $this->AllConnectEdit($sql);
            echo "$startC <div class='begineTelim allStyle' >";
            foreach($item as $items){
                if($items['done'] == 0 ){
                    echo $info = " <div class = 'firstDiv'>{$items['header']}</div> {$items['body']}";
                }
            }
            echo "</div> $end <div style = 'color:red' class='begineTelimEnd allStyle' id='begineTelimEnd'>";
            foreach($item as $items){
                if($items['done'] == 1 ){
                    echo $info = " <div class = 'firstDiv'>{$items['header']}</div> {$items['body']} ";
                }
            }
            echo "</div>";
    }
    public function loadBegineContentTelim(){
        $sql = "SELECT id, header, body, done FROM `begineTelim`";
        $startC = "<h2 id='begineTelim'>Planlaşdırılan təlimlər</h2>";
        $end = "<h2>Keçirilmiş təlimlər</h2> ";
        $this->loadBegineContentTelimAll($sql, $end, $startC);
    }
    public function loadBegineContentKurs(){
        $sql = "SELECT id, header, body, done FROM `begineKurs`";
        $startC = "<h2 id='begineTelim'>Planlaşdırılan kurslar</h2>";
        $end = "<h2>Keçirilmiş kurslar</h2> ";
        $this->loadBegineContentTelimAll($sql, $end, $startC);
    }
    public function loadBegineContentLayhe(){
        $sql = "SELECT id, header, body, done FROM `begineLayhe`";
        $startC = "<h2 id='begineTelim'>Cari layihələr</h2>";
        $end = "<h2>Bitmiş layihələr</h2> ";
        $this->loadBegineContentTelimAll($sql, $end, $startC);
    }
    public function loadBegineContentElmi(){
        $sql = "SELECT id, header, body FROM `begineElmiT`";
        $item = $this->AllConnectEdit($sql);
            echo "$startC <div class='begineTelim allStyle' >";
            echo "<div class='allStyle' style='margin-top:0px'><h2>Elmi tədqiqatlara dəstək</h2>";
            foreach($item as $items){
                if($items['header']){
                    echo $info = " <div class = 'firstDiv'>{$items['header']}</div> {$items['body']} ";
                }
            }
             echo("</div>");
    }
    public function userPsiTest(){
        $sql = "SELECT width, height, src, content FROM `userTestPsi`";
        $item = $this->AllConnectEdit($sql);
            foreach($item as $items){
                 $info = "<iframe width='{$items['width']}' height='{$items['height']}' src='{$items['src']}' frameborder='0'               allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>
                        <div class='userPsiTest'>{$items['content']}</div>";
                echo $info;
            }
    }
    /*---------------------------------users--end----------------------------------------*/
    /*---------------------------------admin--start----------------------------------------*/
    public function adminPsiTest(){
        $userTestWidth = $this->clearSTR($_POST['userTestWidth']);
        $userTestHeight = $this->clearSTR($_POST['userTestHeight']);
        $userTestSrc = $this->clearSTR($_POST['userTestSrc']);
        $userTestContent = $this->clearSTR($_POST['userTestContent']);
        $sql = "SELECT id, width, height, src, content FROM `userTestPsi`";
        $item = $this->AllConnectEdit($sql);
            foreach($item as $items){
                $info = "
                    <tr><td>{$items['id']} </td>
                    <td><div>{$items['width']}</div>
                        <input type='text' name='width{$items['id']}'/></td>
                    <td><div>{$items['height']}</div>
                        <input type='text' name='height{$items['id']}'/></td>
                    <td><div>{$items['src']} </div>
                        <input type='text' name='src{$items['id']}'/></td>
                    <td><div>{$items['content']} </div>
                        <textarea name='content{$items['id']}'> </textarea></td>
                    <td>
                        <input type='submit' name='userTestSave{$items['id']}' value ='{$items['id']}save'/></td>
                    <td>
                        <input type='submit' name='userTestDell{$items['id']}' value ='{$items['id']}delete'/></td>
                ";
                echo($info);
                if(1 * $_POST["userTestSave{$items['id']}"]){
                    $width = $this->clearSTR($_POST["width{$items['id']}"]);
                    $height = $this->clearSTR($_POST["height{$items['id']}"]);
                    $src = $this->clearSTR($_POST["src{$items['id']}"]);
                    $content = $this->clearSTR($_POST["content{$items['id']}"]);
                        if(!empty($src)){
                            $select = "`src` = '$src'";
                            $this->connectPsi('userTestPsi', $select, $items['id']);
                        }
                        if(!empty($content)){
                            $select = "`content` = '$content'";
                            $this->connectPsi('userTestPsi', $select, $items['id']);
                        }
                        if(!empty($width)){
                            $select = "`width` = '$width'";
                            $this->connectPsi('userTestPsi', $select, $items['id']);
                        }
                        if(!empty($height)){
                            $select = "`height` = '$height'";
                            $this->connectPsi('userTestPsi', $select, $items['id']);
                        }
                }
                if(1 * $_POST["userTestDell{$items['id']}"]){
                    $sql = "DELETE FROM `userTestPsi` WHERE `userTestPsi` .`id` = {$items['id']}";
                    $this->update($sql);
                }
        }
        
        if(!empty($userTestSrc) && !empty($userTestContent)){
            if($_POST['userTestPsiAdd']){
                $connectSql->getConnectSql();
                $width = 300;
                $height = 260;
                $sql = "INSERT INTO `userTestPsi`(`width`, `height`, `src`, `content`) VALUES (?, ?, ?, ?)";
                $stp = $connectSql->_mysql->prepare($sql);
                $stp->bind_param("iiss", $width, $height, $userTestSrc, $userTestContent);
                $stp->execute();
                $stp->close();
            }
        }
    }
    /*---------------------------------users--start----------------------------------------*/
    public function userGaleryStart(){
        $sql = "SELECT id, images, alt FROM `galery`";
        $item = $this->AllConnectEdit($sql);
        foreach($item as $items){
            echo $info = "<div><img class='imagesGalery' src='{$items['images']}' alt='{$items['alt']}'/></div>";
        }
    }
    public function footNews(){
        $sql = "SELECT id, headers, body, date FROM `userNews`";
        $item = $this->AllConnectEdit($sql);
            foreach($item as $items){
                echo $info = "<h3>{$items['headers']}</h3>
                        <div style='font-size:15px;margin:-20px 0px 20px 0px;'> {$items['date']}</div>
                        <div> {$items['body']}</div>
                    ";
            }
    }
    public function footerAds(){
        $sql = "SELECT id, header, body, date FROM `footerAds`";
        $item = $this->AllConnectEdit($sql);
            foreach($item as $items){
                echo $info = "<h3>{$items['header']}</h3>
                        <div style='font-size:15px;margin:-20px 0px 20px 0px;'> {$items['date']}</div>
                        <div> {$items['body']}</div>
                    ";
            }
    }
    /*---------------------------------users--end----------------------------------------*/
    /*---------------------------------admin--start----------------------------------------*/
    public function adminFootNews(){
        $footerHeaderHews = $this->clearSTR($_POST['footerHeaderHews']);
        $footerBodyHews = $this->clearSTR($_POST['footerBodyHews']);
        $footerHewsDate = $this->clearSTR($_POST['footerHewsDate']);
        $sql = "SELECT id, headers, body, date FROM `userNews`";
        $item = $this->AllConnectEdit($sql);
            foreach($item as $items){
                $info = "
                    <tr><td>{$items['id']} </td>
                    <td><div>{$items['headers']}</div>
                        <input type='text' name='newsHeaders{$items['id']}'/></td>
                    <td><div>{$items['body']}</div>
                        <input type='text' name='newsBody{$items['id']}'/></td>
                    <td><div>{$items['date']} </div>
                        <input type='date' name='newsDate{$items['id']}'/></td>
                    <td>
                        <input type='submit' name='newsSave{$items['id']}' value ='{$items['id']}save'/></td>
                    <td>
                        <input type='submit' name='newsDel{$items['id']}' value ='{$items['id']}delete'/></td>
                ";
                echo($info);
                if(1 * $_POST["newsSave{$items['id']}"]){
                    $newsHeaders = $this->clearSTR($_POST["newsHeaders{$items['id']}"]);
                    $newsBody = $this->clearSTR($_POST["newsBody{$items['id']}"]);
                    $newsDate = $this->clearSTR($_POST["newsDate{$items['id']}"]);
                        if(!empty($newsHeaders)){
                            $select = "`headers` = '$newsHeaders'";
                            $this->connectPsi('userNews', $select, $items['id']);
                        }
                        if(!empty($newsBody)){
                            $select = "`body` = '$newsBody'";
                            $this->connectPsi('userNews', $select, $items['id']);
                        }
                        if(!empty($newsDate)){
                            $select = "`date` = '$newsDate'";
                            $this->connectPsi('userNews', $select, $items['id']);
                        }
                }
                if(1 * $_POST["newsDel{$items['id']}"]){
                    $sql = "DELETE FROM `userNews` WHERE `userNews` .`id` = {$items['id']}";
                    $this->update($sql);
                }
        }
        if(!empty($footerHeaderHews) && !empty($footerBodyHews)){
                if($_POST['footerAddHews']){
                    $connectSql->getConnectSql();
                    $sql = "INSERT INTO `userNews`(`headers`, `body`, `date`) VALUES (?, ?, ?)";
                    $stp = $connectSql->_mysql->prepare($sql);
                    $stp->bind_param("sss", $footerHeaderHews, $footerBodyHews, $footerHewsDate);
                    $stp->execute();
                    $stp->close();
            }
        }
    }
    
    public function adminFootAds(){
        $footerHeaderAds = $this->clearSTR($_POST['footerHeaderAds']);
        $footerBodyAds = $this->clearSTR($_POST['footerBodyAds']);
        $footerAdsDate = $this->clearSTR($_POST['footerAdsDate']);
        $sql = "SELECT id, header, body, date FROM `footerAds`";
        $item = $this->AllConnectEdit($sql);
            foreach($item as $items){
                $info = "
                    <tr><td>{$items['id']} </td>
                    <td><div>{$items['header']}</div>
                        <input type='text' name='adsHeaders{$items['id']}'/></td>
                    <td><div>{$items['body']}</div>
                        <input type='text' name='adsBody{$items['id']}'/></td>
                    <td><div>{$items['date']} </div>
                        <input type='date' name='adsDate{$items['id']}'/></td>
                    <td>
                        <input type='submit' name='adsSave{$items['id']}' value ='{$items['id']}save'/></td>
                    <td>
                        <input type='submit' name='adsDel{$items['id']}' value ='{$items['id']}delete'/></td>
                ";
                echo($info);
                if(1 * $_POST["adsSave{$items['id']}"]){
                    $adsHeaders = $this->clearSTR($_POST["adsHeaders{$items['id']}"]);
                    $adsBody = $this->clearSTR($_POST["adsBody{$items['id']}"]);
                    $adsDate = $this->clearSTR($_POST["adsDate{$items['id']}"]);
                        if(!empty($adsHeaders)){
                            $select = "`header` = '$adsHeaders'";
                            $this->connectPsi('footerAds', $select, $items['id']);
                        }
                        if(!empty($adsBody)){
                            $select = "`body` = '$adsBody'";
                            $this->connectPsi('footerAds', $select, $items['id']);
                        }
                        if(!empty($adsDate)){
                            $select = "`date` = '$adsDate'";
                            $this->connectPsi('footerAds', $select, $items['id']);
                        }
                }
                if(1 * $_POST["adsDel{$items['id']}"]){
                    $sql = "DELETE FROM `footerAds` WHERE `footerAds` .`id` = {$items['id']}";
                    $this->update($sql);
                }
        }
        if(!empty($footerHeaderAds) && !empty($footerBodyAds)){
                if($_POST['footerAddAds']){
                    $connectSql->getConnectSql();
                    $sql = "INSERT INTO `footerAds`(`header`, `body`, `date`) VALUES (?, ?, ?)";
                    $stp = $connectSql->_mysql->prepare($sql);
                    $stp->bind_param("sss", $footerHeaderAds, $footerBodyAds, $footerAdsDate);
                    $stp->execute();
                    $stp->close();
            }
        }
    }
}