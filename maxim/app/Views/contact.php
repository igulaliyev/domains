<section class="s-py-80 s-py-lg-120 s-py-xl-160 ls ms">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 animate" data-animation="scaleAppear">

							<form class="contact-form c-mb-15 c-gutter-15" method="post" action="contact-form.php">

								<div class="row">

									<div class="col-sm-12">
										<h4><?=lang('App.contact_page_contactform')?></h4>
									</div>
								</div>

								<div class="row">

									<div class="col-sm-6">
										<div class="form-group has-placeholder">
											<label for="name">Adınız,Soyadınız <span class="required">*</span></label>
											<input type="text" aria-required="true" size="30" value="" name="name" id="name" class="form-control" placeholder="Adınız">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group has-placeholder">
											<label for="phone">Əlaqə nömrəniz<span class="required">*</span></label>
											<input type="text" aria-required="true" size="30" value="" name="phone" id="phone" class="form-control" placeholder="Əlaqə nömrəniz">
										</div>
									</div>

								</div>

								<div class="row">

									<div class="col-sm-6">
										<div class="form-group has-placeholder">
											<label for="email">Mail ünvanınız<span class="required">*</span></label>
											<input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="Mail ünvanınız">
										</div>
									</div>
									<div class="col-sm-6">
										<div class="form-group has-placeholder">
											<label for="subject">Mövzu<span class="required">*</span></label>
											<input type="text" aria-required="true" size="30" value="" name="subject" id="subject" class="form-control" placeholder="Mövzu">
										</div>
									</div>

								</div>

								<div class="row">

									<div class="col-sm-12">

										<div class="form-group has-placeholder">
											<label for="message">İsmarıcınız</label>
											<textarea aria-required="true" rows="6" cols="45" name="message" id="message" class="form-control" placeholder="İsmarıcınız"></textarea>
										</div>
									</div>

								</div>

								<div class="row mt-20">

									<div class="col-sm-12">

										<div class="form-group has-placeholder">
											<button type="submit" id="contact_form_submit" name="contact_submit" class="btn btn-maincolor"><span>Göndər</span></button>
										</div>
									</div>

								</div>

							</form>
						</div>
						<!--.col-* -->
						<div class="divider-40 d-block d-lg-none"></div>
						<div class="col-lg-4 animate" data-animation="scaleAppear">

							<h4><?=lang('App.contact_page_details')?></h4>
                            <?php if ($config['address'] !='') : ?>
							    <p class="icon-inline">
								    <span class="icon-styled color-main">
									    <i class="fa fa-map-marker"></i>
								    </span>
								    <span><?=$config['address']?></span>
							    </p>
                            <?php endif ?>
                            <?php if ($config['phone'] !='') : ?>
							    <p class="icon-inline">
								    <span class="icon-styled color-main">
									    <i class="fa fa-phone"></i>
								    </span>
								    <span><?=$config['phone']?></span>
							    </p>
                            <?php endif ?>
                            <?php if ($config['mobile'] !='') : ?>
							<p class="icon-inline">
								<span class="icon-styled color-main">
									<i class="fa fa-mobile-phone"></i>
								</span>
								<span><?=$config['mobile']?></span>
							</p>
                            <?php endif ?>
                            <?php if ($config['email'] !='') : ?>
							<p class="icon-inline">
								<span class="icon-styled color-main">
									<i class="fa fa-pencil"></i>
								</span>
								<span><?=$config['email']?></span>
							</p>
                            <?php endif ?>
							<h4><?=lang('App.contact_page_workinghours')?></h4>

							<div class="row c-gutter-30">
                                <div class="col-">
									<span class="icon-styled color-main pr-2">
										<p><i class="fa fa-clock-o"></i>
									</span>
									<span class="color-darkgrey fw-500"><?=lang('App.contact_page_workingday1-5')?></span></p>
								</div>
								<div class="col-">
                                    <?=$config['working_hours']?>
								</div>
                                <p><div class="col-">
                                    <span class="icon-styled color-main pr-2">
                                <p><i class="fa fa-close"></i>
									</span>
									<span class="color-darkgrey fw-500"><?=lang('App.contact_page_workingday7')?></span>
								</div>
								<div class="col-">
									Qeyri iş günü</p>
								</div>
							</div>

						</div>
						<!--.col-* -->

					</div>
				</div>
			</section>
			<section class="ls ms page_map" data-draggable="true" data-scrollwheel="true">

				
				<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A280dea094a3a85c3446fa4294771bef3e7b79d2f694e217cfe23fcdcd19b8be7&amp;source=constructor" width="991" height="400" frameborder="0"></iframe>
				<!-- .marker -->

			</section>