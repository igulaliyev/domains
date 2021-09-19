					<footer class="page_footer ls ms s-pt-80 s-pb-70 s-py-lg-120 s-pt-xl-135 s-pb-xl-105 c-gutter-60 text-center text-md-left">
				<div class="container">
					<div class="row">
						<div class="divider-20 d-none d-xl-block"></div>
						<div class="col-md-6 col-xl-3 order-xl-2 order-md-4 animate" data-animation="fadeInUp">
							<div class="widget links">
								<h4 class="widget-title"><?=lang("App.footer_links")?></h4>
								<ul>
									<li class="cat-item">
										<a href="/privacy">Privacy Policy</a>
									</li>
									<li class="cat-item">
										<a href="/terms">Terms & Conditions</a>
									</li>
									<li class="cat-item">
										<a href="index.php">Tezliklə</a>
									</li>
									<li class="cat-item">
										<a href="index.php">Tezliklə</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-md-6 col-xl-3 order-xl-3 order-md-3 animate" data-animation="fadeInUp">
							<div class="widget services-links">
								<h4 class="widget-title"><?=lang("App.services_page_button")?></h4>
								<ul>
									<li class="cat-item">
										<a href="index.php">Fiber-Optik İnternet</a>
									</li>
									<li class="cat-item">
										<a href="standarttv.php">Standart TV</a>
									</li>
									<li class="cat-item">
										<a href="smarttv.php">Smart TV</a>
									</li>
									<li class="cat-item">
										<a href="iptv.php">İP TV</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-md-6 col-xl-3 order-xl-3 order-md-3 animate" data-animation="fadeInUp">
							<div class="widget widget_icons_list">
								<h4 class="widget-title"><?=lang("App.contact_page_button")?></h4>
                                <?php if ($config['phone'] !='') : ?>
								<p><?=$config['phone']?></p>
                                <?php endif ?>
                                <?php if ($config['mobile'] !='') : ?>
								<p><?=$config['mobile']?></p>
                                <?php endif ?>

								<h4 class="widget-title"><?=lang("App.footer_address")?></h4>
								<p><?=$config['address']?></p>
								<a href="/contact" class="small-text">
									<i class="fa fa-map-marker color-main3 fs-14"></i>
                                    <?=lang("App.footer_look_on_map")?>
								</a>
							</div>
							<div class="divider-45 d-none d-md-block d-xlz-none"></div>
						</div>
					</div>
				</div>
			</footer>
			<section class="page_copyright ds s-py-10 copyright-bg">
				<div class="container">
					<div class="row align-items-center">
						<div class="divider-15 d-none d-lg-block"></div>
						<div class="col-md-12 text-center">
							<p>&copy; <span class="copyright_year">2021</span> <?=lang("App.footer_copyright")?></p>
						</div>
						<div class="divider-15 d-none d-lg-block"></div>
					</div>
				</div>
			</section>


		</div><!-- eof #box_wrapper -->
	</div><!-- eof #canvas -->
<!--<script src="//code.jivosite.com/widget/PpOHuauqfV" async></script>-->


	<script src="/assets/js/compressed.js"></script>
	<script src="/assets/js/main.js"></script>


	<!-- Google Map Script -->

</body>

</html>