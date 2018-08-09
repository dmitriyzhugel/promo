<?php
	use app\widgets\FooterWidget;
	use app\widgets\SocialShareWidget;
	use app\widgets\DatePostWidget;
	use app\widgets\SubscribeWidget;
	$this->title = $post->TITLE;
?>
<style type="text/css">
    .bredcrumb .pager.middle li{
        text-transform: none;
    }
</style>
<div class="main-wrapper blog">
<!-- BREDCRUMB -->
<section class="bredcrumb">
	<div class="bg-image text-center" style="background-image: url('/img/bg-bredcrumb.jpg');">
		<h1><?=$post->H1;?></h1>
	</div>
	<div class="">
		<ul class="pager middle">
			<li>Главная</li>
			<li><a href="javascript:void(0)"><?=$post->H1;?></a></li>
		</ul>
	</div>
</section>

<!-- BLOG FULLWIDTH -->
<section class="blog-grid blog-fullwidth">
	<div class="container">
		<div class="row">
                    <div class="col-lg-12">
                        <!-- blog single column starts -->
				<div class="row">
					<div class="col-md-12">
						<div class="card card-style3">
							<div class="card_img">
                                                            <?php if($post->PIC){ ?>
                                                            <img style="max-width:300px;" class="img-full" src="<?=$post->PIC;?>" alt="<?=$post->NAME;?>">
                                                            <?php } ?>
								<?= DatePostWidget::widget(['c_date'=>$post->C_DATE]);?>
							</div>
							<div class="card-block">
								<ul class="list-inline">
									<li>
										<a href="javascript:void(0);"><i class="fa fa-user-o" aria-hidden="true"></i> <span class="">Zaimovik</span></a>
									</li>
								</ul>
								<h2 class="card-title"><?=$post->NAME;?></h2>
								<br>
								<?=$post->CONTENT;?>
                                                                <?=$post->BANNER_MOBILE;?>
								<?= SocialShareWidget::widget();?>
							</div>
						</div>
					</div>
				</div>
			<!-- blog single column ends -->
                    </div>
                </div>
        </div>
</section>
    
<?= SubscribeWidget::widget();?>
<?=FooterWidget::widget();?>

</div>