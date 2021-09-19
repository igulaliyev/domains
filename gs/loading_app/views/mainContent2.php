<?php
    include_once("../models/RideBase.php");
    $selected = new EtidContent();
?>
<div class="begineMenu">
    <div><a href="#begineKurs"> kurslar</a></div>
    <div><a href="#begineKursEnd"> Bitmiş kurslar</a></div>
</div>
<div>
     <?php $selected->loadBegineContentKurs(); ?>
</div>