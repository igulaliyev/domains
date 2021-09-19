
<section class="page_slider flexslider"><!--
    <div class="container-fluid">
        <div class="row">

            <div class="divider-60"></div>

            <div class="col-md-12 text-center">
                <h1>Internet</h1>
            </div>

            <div class="divider-50"></div>

        </div>
    </div>
    <ol class="breadcrumb full-width">
        <li class="breadcrumb-item">
            <a href="/">Home</a>
        </li>
        <li class="breadcrumb-item active">
            Internet
        </li>
    </ol>-->
    <ul class="slides">
      <li  class="ds" data-thumb-alt="" style="width: 100%; float: left; margin-right: -100%; position: relative; opacity: 0; display: block; z-index: 1;">
        <img src="/assets/img/slider01.png" alt="" draggable="false">
      </li>
    </ul>

</section>
<section class="s-py-80 s-py-lg-120 s-py-xl-160 ls ms">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 offset-lg-2" id="price">
							<h1 class="text-center"><?=lang("App.isptarif_page_title")?></h1>
							<p class="text-center big"><?=lang("App.isptarif_page_description")?></p>
						</div>
					</div>
					<div class="divider-45 d-none d-lg-block"></div>
					<div class="row c-gutter-60">
					<?php foreach ($tarifs as $tarif) : ?>
						<div class="mx-auto col-lg-3 col-12">
							<div class="pricing-plan hero-bg rounded">
								<div class="plan-name text-uppercase bg-maincolor3">
									<h3>
										<?=$tarif['name'];?>
									</h3>
								</div>
								<div class="plan-desc">
									<div class="plan-content">
										<h6 class="color-main5"><?=$tarif['speed'];?></h6>
										<p class="small-text">
											mb/s
										</p>
									</div>
									<div class="price-icon">
										<img src="/assets/img/<?=$tarif['img'];?>" alt="">
									</div>
								</div>
								<div class="plan-features">
									<ul class="list-bordered">
										<li><?=lang("App.isptarif_page_nightspeed")?>: <?=$tarif['night_speed'];?> mb/s</li>
										<li>
                                            <?php if ($tarif['installation_price'] === '0') : ?>
                                                <?=lang("App.freeinstallation")?>
                                            <?php else : ?>
                                                <?=lang("App.installation")?>: <?=$tarif['installation_price'];?>
                                                <span class="plan-sign small-text">azn</span>
                                            <?php endif ?>
                                        </li>
									</ul>
								</div>
								<div class="price-wrap d-flex">
									<span class="plan-sign small-text">azn</span>
									<span class="plan-price color-main5"><?=$tarif['price'];?></span>
									<span class="plan-decimals small-text"><?=lang("App.paymentperiod")?></span>
								</div>
								<div class="plan-button">
									<a href="#" class="btn btn-maincolor3"><span><?=lang("App.isptarif_page_buybutton")?></span></a>
								</div>
							</div>
                        <div class="divider-45 d-block d-lg-none"></div>
					</div>
					<?php endforeach ?>
				</div>
			</section>
