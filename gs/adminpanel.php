<?php
    include_once("loading_app\models\Server.php");
    $connecti = new Server();
    include_once("loading_app\models\RideBase.php");
    $intiring = new ConclusionMenu();
    
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
    <style>
        p{ margin-left: 500px;}
        table, tr, th, td{
            border: 1px solid silver;
            padding: 3px;
        }
        input{width: 120px}
        img{width: 200px;}
        ul li{float: left;
            margin-left: 20px;
        }
        ul a{text-decoration: none;}
        ul{list-style: none}
        nav{position: fixed;
            background: white;
            padding: 10px;
        }
        body div:last-child{margin-top: 80px;}
    </style>
</head>
<body>
     <nav>
        <ul>
                <li><a href="#content">One Content</a></li>
                <li><a href="#kurs">Kurs</a></li>
                <li><a href="#psiTest">Psi Test</a></li>
                <li><a href="#galery">Galery</a></li>
                <li> <a href="#editTelim">Edit telim</a></li>
                <li><a href="#editKurs">Edit kurs</a></li>
                <li><a href="#editLayhe">Edit layhe</a></li>
                <li><a href="#elmiDestek">Elmi destek</a></li>
                <li><a href="#editTest">Edit test</a></li>
                <li><a href="#editNews">Edit News</a></li>
                <li><a href="#editAds">Edit Ads</a></li>
        </ul>
    </nav>
    <div>
		<div>
            <div></div>
            <form action="<?=$_SERVER['REQUEST_URI']; ?>" method="post">
                <label>
                    Host
                    <input type="text" name="host" />
                </label> 
                <label>
                    login
                    <input type="text" name="login" />
                </label> 
                <label>
                    password
                    <input type="text" name="password" />
                </label> 
                <label>
                    mysql BD
                    <input type="text" name="nameBD" title="name bd"/>
                </label>
                <input type="submit" value="connect" />
            </form>
        </div>
        <!--<div>
            <hr>
            <p> Edit menu</p>
            <table>
                <thead>
                    <th>id</th>
                    <th>Menu</th>
                    <th>Sub menu</th>
                    <th>Edit menu</th>
                    <th>Edit link menu</th>
                    <th>Edit sub menu</th>
                    <th>Edit link sub menu</th>
                    <th>Delet menu</th>
                    <th>Delet sub menu</th>
                </thead>
                <tbody>
                    <?php $select = new EtidContent(); ?>
                </tbody>
            </table>
        </div>-->
        <div>
            <hr>
            <p id="content">Основной контент ( текст и рисунок)</p>
            <form action="<?=$_SERVER['REQUEST_URI']; ?>" method="post" enctype="multipart/form-data">
                <table>
                    <thead>
                        <th>id</th>
                        <th> text one</th>
                        <th> text one size</th>
                        <th> text two</th>
                        <th> text two size</th>
                        <th> text color</th>
                        <th> background</th>
                        <th> images</th>
                        <th> save</th>
                    </thead>
                    <tbody>
                        <?php $select->selectContent();?>
                    </tbody>
                </table>
            </form>
            <hr>
            <p id="kurs">раздел курсов</p>
            <form action="<?=$_SERVER['REQUEST_URI']; ?>" method="post" enctype="multipart/form-data">
                <table>
                    <thead>
                        <th>id</th>
                        <th> image Telim</th>
                        <th> Telim alt</th>
                        <th> image Kurslar</th>
                        <th> Kurslar alt</th>
                        <th> image Layheler</th>
                        <th> Layheler alt</th>
                        <th> save</th>
                    </thead>
                    <tbody>
                        <td>1</td>
                        <td><input type='file' name='imageTelim' accept='image/png' value='загрузите Png'/></td>
                        <td><input type='text' name='telimAlt' /></td>
                        <td><input type='file' name='imageKurs' accept='image/png' value='загрузите Png'/></td>
                        <td><input type='text' name='kursAlt' /></td>
                        <td><input type='file' name='imageLayhe' accept='image/png' value='загрузите Png'/></td>
                        <td><input type='text' name='layheAlt' /></td>
                        <td><input type='submit' name= "sent" value='save'></td>
                    </tbody>
                </table>
            </form>
            <hr>
            <p id="psiTest">Psi Test</p>
            <form action="<?=$_SERVER['REQUEST_URI']; ?>" method="post" enctype="multipart/form-data">
                <table>
                    <thead>
                        <th>id</th>
                        <th> text one</th>
                        <th> text one size</th>
                        <th> text two</th>
                        <th> text two size</th>
                        <th> text color One</th>
                        <th> text color Two</th>
                        <th> background</th>
                        <th> images</th>
                        <th> images alt</th>
                        <th> save</th>
                    </thead>
                    <tbody>
                        <td>1</td>
                        <td><?php $select->selectPsiTextOne(); ?>
                            <input type='text' name='textOne' /></td>
                        <td><?php $select->selectPsiTextOneSize(); ?>
                            <input type='text' name='textOneSize' /></td>
                        <td><?php $select->selectPsiTextTwo();?>
                            <input type='text' name='textTwo' /></td>
                        <td><?php $select->selectPsiTextTwoSize();?>
                            <input type='text' name='textTwoSize' /></td>
                        <td><?php $select->selectPsiTextOneColor();?>
                            <input type='text' name='textColorOne' /></td>
                        <td><?php $select->selectPsiTextTwoColor();?>
                            <input type='text' name='textColorTwo' /></td>
                        <td><?php $select->selectPsiBackground();  ?>
                            <input type='text' name='background' /></td>
                        <td><input type='file' name='imagePsi' accept='image/png' value='загрузите Png'/></td>
                        <td><input type='text' name='PsiAlt' /></td>
                        <td><input type='submit' name= "sentPsi" value='save'></td>
                    </tbody>
                </table>
            </form>
            <hr>
            <p id="galery">Galery</p>
            <form action="<?=$_SERVER['REQUEST_URI']; ?>" method="post" enctype="multipart/form-data">
                <table>
                    <thead>
                        <th>id</th>
                        <th> image</th>
                        <th> donload new image</th>
                        <th> new alt</th>
                        <th>save</th>
                        <th>delete</th>
                        <th>add image</th>
                        <th>add alt</th>
                        <th>save</th>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td><td></td><td></td><td></td><td></td><td></td>
                            <td>
                                <input type="file" accept="image/jpeg, image/png, image/gif, image/jpg" name="galeryImageAdd" />
                            </td>
                            <td>
                                <input type="text" name="galeryAltAdd" /?
                            </td>
                            <td>
                                <input type="submit" name="galeryImageSave" value ="add"/?
                            </td>
                        </tr>
                        <tr>
                            <?php $select->galeryAll() ?>
                        </tr>
                    </tbody>
                </table>
            </form>
            <hr>
            <p id="editTelim">load content Telim</p>
            <form action="<?=$_SERVER['REQUEST_URI']; ?>" method="post" enctype="multipart/form-data">
                <table>
                    <thead>
                        <th>id</th>
                        <th> header</th>
                        <th> body</th>
                        <th> отметить как пройденный</th>
                        <th>save</th>
                        <th>delete</th>
                        <th>new header</th>
                        <th>new body</th>
                        <th>save</th>
                    </thead>
                    <tbody>
                        <tr><td></td><td></td><td></td><td></td><td></td><td></td>
                            <td>
                                <input type="text" name="TelimHeader" />
                            </td>
                            <td>
                                <input type="text" name="TelimBody" />
                            </td>
                            <td>
                                <input type="submit" name="galeryImageSave" value ="add"/>
                            </td>
                            <td>
                                <?php $select->loadBegineTelim(); ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
            <hr>
            <p id="editKurs">load content Kurs</p>
            <form action="<?=$_SERVER['REQUEST_URI']; ?>" method="post" enctype="multipart/form-data">
                <table>
                    <thead>
                        <th>id</th>
                        <th> header</th>
                        <th> body</th>
                        <th> отметить как пройденный</th>
                        <th>save</th>
                        <th>delete</th>
                        <th>new header</th>
                        <th>new body</th>
                        <th>save</th>
                    </thead>
                    <tbody>
                        <tr><td></td><td></td><td></td><td></td><td></td><td></td>
                            <td>
                                <input type="text" name="kursHeader" />
                            </td>
                            <td>
                                <input type="text" name="kursBody" />
                            </td>
                            <td>
                                <input type="submit" name="galeryImageSaveKurs" value ="add"/>
                            </td>
                            <td>
                                <?php $select->loadBegineKurs(); ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
            <hr>
            <p id="editLayhe">load content Layhe</p>
            <form action="<?=$_SERVER['REQUEST_URI']; ?>" method="post" enctype="multipart/form-data">
                <table>
                    <thead>
                        <th>id</th>
                        <th> header</th>
                        <th> body</th>
                        <th> отметить как пройденный</th>
                        <th>save</th>
                        <th>delete</th>
                        <th>new header</th>
                        <th>new body</th>
                        <th>save</th>
                    </thead>
                    <tbody>
                        <tr><td></td><td></td><td></td><td></td><td></td><td></td>
                            <td>
                                <input type="text" name="LayheHeader" />
                            </td>
                            <td>
                                <input type="text" name="LayheBody" />
                            </td>
                            <td>
                                <input type="submit" name="galeryImageSaveLayhe" value ="add"/>
                            </td>
                            <td>
                                <?php $select->loadBegineLayhe(); ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
            <form action="<?=$_SERVER['REQUEST_URI']; ?>" method="post">
                <hr>
                <p id="elmiDestek">Elmi tədqiqatlara dəstək</p>
                <table>
                    <thead>
                        <th>id</th>
                        <th> header</th>
                        <th> body</th>
                        <th> --------</th>
                        <th>save</th>
                        <th>delete</th>
                        <th>new header</th>
                        <th>new body</th>
                        <th>save</th>
                    </thead>
                    <tbody>
                        <tr><td></td><td></td><td></td><td></td><td></td><td></td>
                            <td>
                                <input type="text" name="LayheHeaderElm" />
                            </td>
                            <td>
                                <input type="text" name="LayheBodyElm" />
                            </td>
                            <td>
                                <input type="submit" name="galeryImageSaveLayheElm" value ="add"/>
                            </td>
                            <td>
                                <?php $select->loadBegineLayheElm(); ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
            <form action="<?=$_SERVER['REQUEST_URI']; ?>" method="post">
                <hr>
                <p id="editTest">Добавления и удаления тестов</p>
                <table>
                    <thead>
                        <th>id</th>
                        <th> width</th>
                        <th> height</th>
                        <th>src</th>
                        <th>content</th>
                        <th>save</th>
                        <th>delete</th>
                        <th>new src</th>
                        <th>new content</th>
                    </thead>
                    <tbody>
                        <tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
                            <td>
                                <input type="text" name="userTestSrc" />
                            </td>
                            <td>
                                <textarea name="userTestContent" ></textarea>
                            </td>
                            <td>
                                <input type="submit" name="userTestPsiAdd" value ="add"/>
                            </td>
                            <td>
                                <?php $select->adminPsiTest(); ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
            <form action="<?=$_SERVER['REQUEST_URI']; ?>" method="post">
                <hr>
                <p id="editNews">Добавления и удаления Новостей</p>
                <table>
                    <thead>
                        <th>id</th>
                        <th> header</th>
                        <th> body</th>
                        <th>date</th>
                        <th>save</th>
                        <th>delete</th>
                        <th>new head</th>
                        <th>new body</th>
                        <th>date</th>
                        <th>add</th>
                    </thead>
                    <tbody>
                        <tr><td></td><td></td><td></td><td></td><td></td><td></td>
                            <td>
                                <input type="text" name="footerHeaderHews" />
                            </td>
                            <td>
                                <textarea name="footerBodyHews" ></textarea>
                            </td>
                             <td>
                                <input type="date" name="footerHewsDate" />
                            </td>
                            <td>
                                <input type="submit" name="footerAddHews" value ="add"/>
                            </td>
                            <td>
                                <?php $select->adminFootNews(); ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
            <form action="<?=$_SERVER['REQUEST_URI']; ?>" method="post">
                <hr>
                <p id="editAds">Добавления и удаления Объфвлений</p>
                <table>
                    <thead>
                        <th>id</th>
                        <th> header</th>
                        <th> body</th>
                        <th>date</th>
                        <th>save</th>
                        <th>delete</th>
                        <th>new head</th>
                        <th>new body</th>
                        <th>add</th>
                    </thead>
                    <tbody>
                        <tr><td></td><td></td><td></td><td></td><td></td><td></td>
                            <td>
                                <input type="text" name="footerHeaderAds" />
                            </td>
                            <td>
                                <textarea name="footerBodyAds" ></textarea>
                            </td>
                             <td>
                                <input type="date" name="footerAdsDate" />
                            </td>
                            <td>
                                <input type="submit" name="footerAddAds" value ="add"/>
                            </td>
                            <td>
                                <?php $select->adminFootAds(); ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
	</div>
</body>
</html>