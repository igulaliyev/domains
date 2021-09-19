<?php
    include_once("../models/RideBase.php");
    $selected = new EtidContent();
?>
<div class="begineMenu">
    <div><a href="#begineLayhe"> layihələr</a></div>
    <div><a href="#begineLayheEnd"> Bitmiş layihələr</a></div>
    <div><a href="#allStyle"> Elmi tədqiqatlara dəstək</a></div>
</div>
<div>
    <?php $selected->loadBegineContentLayhe();
        $selected->loadBegineContentElmi();?>
</div>
<!--<h2>Cari layihələr</h2>
<div class="begineLayhe allStyle" id="begineLayhe">
    <div>layihə adi</div>
    <div>layihə hakinda</div>
</div>
<h2>Bitmiş layihələr</h2>
<div class="begineLayheEnd allStyle" id="begineLayheEnd">
    <div>layihə adi</div>
    <div>layihə hakinda</div>
</div>
<h2>Elmi tədqiqatlara dəstək</h2>
<div class="allStyle" id="allStyle">
    <div>здесь будет заголовок</div>
    <div>здесь будет текст</div>
</div>-->