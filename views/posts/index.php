<?php
	use app\widgets\FooterWidget;
	use app\widgets\SubscribeWidget;
?>
<div class="main-wrapper blog">

    <!-- BREDCRUMB -->
    <section class="bredcrumb">
	<div class="bg-image text-center" style="background-image: url('/img/bg-bredcrumb.jpg');">
	    <h1><?=$sub_category->NAME;?></h1>
	</div>
	<div class="">
	    <ul class="pager middle">
		<li>Главная</li>
		<li><a href="javascript:void(0)"><?=$sub_category->NAME;?></a></li>
	    </ul>
	</div>
    </section>

    <!-- BLOG LEFT SIDEBAR -->
    <section class="blog-grid">
	<div class="container">
	    <div class="row">
		<div class="col-lg-8 order-12">
		    <!-- blog single column starts -->
		    <div class="row">
			<?php foreach($posts as $post){ ?>
			<div class="col-md-12">
			    <div class="card card-style2">				
				<div class="card-block">				    
				    <a href="/<?=$sub_category->ALIAS;?>/<?=$post->ALIAS;?>/"><h4 class="card-title"><?=$post->NAME;?></h4></a>                                    
				    <div class="card_img">
                                        <?=$is_mobile?$post->BANNER_MOBILE:$post->BANNER;?>
                                    </div>
                                    <p>
					<?=$post->PREVIEW;?>
				    </p>
				    <a href="/<?=$sub_category->ALIAS;?>/<?=$post->ALIAS;?>/" class="btn btn-secondary btn-default">Подробнее</a>
				</div>                                
			    </div>
			</div>
			<?php } ?>
		    </div>
		    <!-- blog single column ends -->
		    <!--<nav aria-label="Page navigation">
			<ul class="pagination">
			    <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
			    <li class="page-item active"><a class="page-link" href="#">1</a></li>
			    <li class="page-item "><a class="page-link" href="#">2</a></li>
			    <li class="page-item"><a class="page-link" href="#">3</a></li>
			    <li class="page-item"><a class="page-link" href="#">4</a></li>
			    <li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
			</ul>
		    </nav>-->
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
		    <!--<h4>Последние статьи</h4>-->
		    <!--<div class="media-box">
			<div class="media-icon">
			    <img src="/img/blog/c1.jpg" alt="img" class="img-full">
			</div>
			<div class="media-content">
			    <a href="blog-singlepost-right-sidebar.html"><h6>Lectus tristique lacinia non in diam mauris ultricies rutrum.</h6></a>
			    <p><i class="fa fa-calendar" aria-hidden="true"></i> 02 Feb, 2017</p>
			</div>
		    </div>-->
		    <!--<div class="media-box">
			<div class="media-icon">
			    <img src="/img/blog/c2.jpg" alt="img" class="img-full">
			</div>
			<div class="media-content">
			    <a href="blog-singlepost-right-sidebar.html"><h6>Lectus tristique lacinia non in diam mauris ultricies rutrum.</h6></a>
			    <p><i class="fa fa-calendar" aria-hidden="true"></i> 02 Feb, 2017</p>
			</div>
		    </div>-->
		    <!--<div class="media-box">
			<div class="media-icon">
			    <img src="/img/blog/c3.jpg" alt="img" class="img-full">
			</div>
			<div class="media-content">
			    <a href="blog-singlepost-right-sidebar.html"><h6>Lectus tristique lacinia non in diam mauris ultricies rutrum.</h6></a>
			    <p><i class="fa fa-calendar" aria-hidden="true"></i> 02 Feb, 2017</p>
			</div>
		    </div>-->
		    <h4>Может понадобиться</h4>
		    <div class="tags">
			<a class="btn no-bg btn-secondary-outlined btn-mid" href="/calc/credit/">Кредитный калькулятор</a>
			<a class="btn no-bg btn-secondary-outlined btn-mid" href="/calc/ipoteka/">Ипотечный калькулятор</a>
			<a class="btn no-bg btn-secondary-outlined btn-mid" href="/calc/compare/">Сравнение кредитов</a>
			<a class="btn no-bg btn-secondary-outlined btn-mid" href="/credits/">Подбор кредита</a>
			<a class="btn no-bg btn-secondary-outlined btn-mid" href="/zaim/">Подбор займа</a>
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