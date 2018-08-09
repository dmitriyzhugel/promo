<?php
	use app\widgets\FooterWidget;
	use app\widgets\SocialShareWidget;
	use app\widgets\DatePostWidget;
	use app\widgets\SubscribeWidget;
	$this->title = $post->TITLE;
?>
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

<!-- TESTIMONIAL SECTION -->
<section class="blog-grid">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 order-12">
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

				<!-- Comments Starts -->
				<!--
                                <div class="comment-wrapper">
					<h3>Comments (3)</h3>
					<div class="row">
						<div class="col-12">
							<div class="comment">
								<div class="comment_img">
									<img src="/img/blog/user1.jpg" alt="">
								</div>
								<div class="comment_title">
									<h5>Jessica Brown</h5>
									<span><i class="fa fa-calendar" aria-hidden="true"></i> Mar 20, 2017</span>
									<p>
										Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudant
										totam rem ape riamipsa eaque  quae nisi ut aliquip commodo consequat.
									</p>
									<a href="#" class="btn btn-mid">Reply</a>
								</div>								
								<div class="reply">
									<div class="reply_img">
										<img src="/img/blog/user2.jpg" alt="">
									</div>
									<div class="reply_title">
										<h5>Zerad Pawel</h5>
										<span><i class="fa fa-calendar" aria-hidden="true"></i> Mar 20, 2017</span>
										<p>
											Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudant, totam rem ape riamipsa eaque.
										</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12">
							<div class="comment">
								<div class="comment_img">
									<img src="/img/blog/user3.jpg" alt="">
								</div>
								<div class="comment_title">
									<h5>Jonathan Franco</h5>
									<span><i class="fa fa-calendar" aria-hidden="true"></i> Mar 20, 2017</span>
									<p>
										Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudant totam rem ape riamipsa eaque  quae nisi ut aliquip commodo consequat.
									</p>
									<a href="#" class="btn btn-mid">Reply</a>
								</div>
							</div>
						</div>
					</div>
				</div>
                                -->
				<!-- Comments ends -->
				<!-- Leave a Comment -->
				<!--
                                <form class="comment_box">
					<h3>Leave a Comment</h3>
					<div class="row">
						<div class="form-group col-md-6">
						  <input type="text" class="form-control" id="exampleInputName" placeholder="Name">
						</div>
						<div class="form-group col-md-6">
						  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
						</div>
						<div class="form-group col-md-12">
						   <textarea class="form-control" id="exampleTextarea" rows="5" placeholder="Message"></textarea>
						</div>
					</div>
				  <button type="submit" class="btn btn-default btn-primary bold">Send Message</button>
				</form>
                                -->
				<!-- Leave a Comment ends -->

			</div>
			<div class="col-lg-4 order-1 blog-sidebar sidebar">
				<form class="form_search">
					<input class="form-control mr-sm-2" type="text" placeholder="Поиск...">
					<button class="btn-search btn-search my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
				</form>
				<h4><?=$main_category->NAME;?></h4>
				<ul class="list-group">
					<?php foreach($co_categories as $co_category){ ?>
					<li class="list-group-item <?=($co_category->ID===$sub_category->ID)?'active':'';?>"><a href="/<?=$co_category->ALIAS;?>/"><?=$co_category->NAME;?></a></li>
					<?php } ?>
				</ul>
				<!--<h4>Recent News</h4>
				<div class="media-box">
					<div class="media-icon">
						<img src="/img/blog/c1.jpg" alt="img" class="img-full">
					</div>
					<div class="media-content">
						<h6>Lectus tristique lacinia non in diam mauris ultricies rutrum.</h6>
						<p><i class="fa fa-calendar" aria-hidden="true"></i> Mar 20, 2017</p>
					</div>
				</div>
				<div class="media-box">
					<div class="media-icon">
						<img src="/img/blog/c2.jpg" alt="img" class="img-full">
					</div>
					<div class="media-content">
						<h6>Lectus tristique lacinia non in diam mauris ultricies rutrum.</h6>
						<p><i class="fa fa-calendar" aria-hidden="true"></i> Mar 20, 2017</p>
					</div>
				</div>
				<div class="media-box">
					<div class="media-icon">
						<img src="/img/blog/c3.jpg" alt="img" class="img-full">
					</div>
					<div class="media-content">
						<h6>Lectus tristique lacinia non in diam mauris ultricies rutrum.</h6>
						<p><i class="fa fa-calendar" aria-hidden="true"></i> Mar 20, 2017</p>
					</div>
				</div>-->
				<h4>Может понадобиться</h4>
				<div class="tags">
					<a class="btn btn-secondary-outlined no-bg btn-mid" href="/calc/credit/">Кредитный калькулятор</a>
					<a class="btn btn-secondary-outlined no-bg btn-mid" href="/calc/ipoteka/">Ипотечный калькулятор</a>
					<a class="btn btn-secondary-outlined no-bg btn-mid" href="/calc/compare/">Сравнение кредитов</a>
					<a class="btn btn-secondary-outlined no-bg btn-mid" href="/credits/">Подбор кредита</a>
					<a class="btn btn-secondary-outlined no-bg btn-mid" href="/zaim/">Подбор займа</a>
                                        <a class="btn no-bg btn-secondary-outlined btn-mid" href="/cards/">Кредитные карты</a>
				</div>
			</div>
		</div>
	</div>
</section>

<div id="morphing-content" class="hidden">
	<!-- FORM -->
	<section class="home-form" id="quote">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="text-center">Get a Quote </h2>
					<form class="row pb30">
						<div class="form-group col-md-6">
							<input type="text" class="form-control" id="exampleInputName" aria-describedby="userName" placeholder="Your Name">
						</div>
						<div class="form-group col-md-6">
							<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
						</div>
						<div class="form-group col-md-6">
							<input type="text" class="form-control" id="exampleInputPhone" aria-describedby="userPhone" placeholder="Phone">
						</div>
						<div class="form-group col-md-6 selectOptions">
							<select name="topic" class="form-control select-drop">
								<option>Select a Topic</option>
								<option>Topic 1</option>
								<option>Topic 2</option>
								<option>Topic 3</option>
							</select>
						</div>
						<div class="col-md-12 text-center">
							<button type="submit" class="btn btn-default bg-navy">Send Request</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</div>
	<?= SubscribeWidget::widget();?>

	<?=FooterWidget::widget();?>
</div>