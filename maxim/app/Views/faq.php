<section class="s-pb-70 s-pt-80 s-pt-lg-120 s-pt-xl-160 s-pb-xl-70 faq-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- tabs start -->
                <ul class="nav nav-tabs" role="tablist">
					<?php foreach ($tabs as $tab) : ?>
                    <li class="nav-item">
                        <a class="nav-link" id="tab<?=$tab['id']?>" data-toggle="tab" href="#tab<?=$tab['id']?>_pane" role="tab" aria-controls="tab<?=$tab['id']?>_pane" aria-expanded="true"><?=$tab['name']?></a>
                    </li>
					<?php endforeach ?>
                </ul>
                <div class="tab-content ls">
                    <?php foreach ($tabs as $tab) : ?>
                    <div class="tab-pane fade show active" id="tab<?=$faq['id']?>_pane" role="tabpanel" aria-labelledby="tab<?=$faq['id']?>">

                        <div id="accordion<?=$tab['id']?>" role="tablist">
                            <?php foreach ($faqs as $faq) : ?>
                            <div class="tab-block">
                                <div role="tab" id="collapse<?=$faq['id']?>_header">
                                    <p class="text-normal">
                                        <a class="faq" data-toggle="collapse" href="#collapse<?=$faq['id']?>" aria-expanded="false" aria-controls="collapse<?=$faq['id']?>">
                                            <?=$faq['question']?>
                                        </a>
                                    </p>
                                </div>

                                <div id="collapse<?=$faq['id']?>" class="collapse" role="tabpanel" aria-labelledby="collapse<?=$faq['id']?>_header" data-parent="#accordion<?=$faq['id']?>">
                                    <div class="card-body">
                                        <p>
                                            <?=$faq['answer']?>
                                        </p>

                                    </div>
                                </div>
                            </div>
                            <?php endforeach ?>
                        </div>
                        <!-- collapse -->
                    </div>
                    <?php endforeach ?>
                </div>
                <!-- tabs end-->
            </div>
        </div>
    </div>
</section>