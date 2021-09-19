<?php
    include_once("../models/RideBase.php");
    $selected = new EtidContent();
?>
<div class="begineMenu">
    <div><a href="#begineTelim"> təlimlər</a></div>
    <div><a href="#begineTelimEnd"> Bitmiş təlimlər</a></div>
</div>
<div>
    <?php $selected->loadBegineContentTelim(); ?>
</div>