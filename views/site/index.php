<?php
    use app\widgets\FooterWidget;
    use app\widgets\BannerSliderWidget;
    use app\widgets\BrandsWidget;
    use app\widgets\SubscribeWidget;
    use app\widgets\DatePostWidget;
    $this->title = 'Займ онлайн на карту срочно, микрозаймы ' . date('Y');
?>
<div class="main-wrapper home">
    <?php /*BannerSliderWidget::widget();*/ ?>
    
    <!-- FEATURE -->   

    <!-- WHY CHOOSE US -->    
    
    <!-- COUNTING UP -->
        
    <!-- OUR PORTFOLIO -->    

    <!-- TESTIMONIAL SECTION -->
    
    <!-- OUR SERVICES -->
    <section class="services-area">
	<div class="container">
	    <!-- section title -->
	    <div class="row justify-content-center">
		<div class="col-md-8">
		    <div class="sectionTitle text-center">
			<h2>Сервисы</h2>
			<p>Рассчет кредитов и займов онлайн, подбор лучших предложений</p>
		    </div>
		</div>
	    </div>
	    <!-- section title ends -->
	    <div class="row">
		<div class="col-md-6 col-lg-4">
		    <div class="media-box">
			<div class="media-icon">
			    <a href="/calc/credit/" style="color:#4ac8ed;"><i class="fa fa-line-chart"></i></a>
			</div>
			<div class="media-content">
			    <a href="/calc/credit/"><h4>Кредитный калькулятор</h4></a>
			    <p>Рассчет ежемесячного платежа и суммы переплаты</p>
			</div>
		    </div>
		</div>
		<div class="col-md-6 col-lg-4">
		    <div class="media-box">
			<div class="media-icon">
			    <a href="/calc/ipoteka/" style="color:#4ac8ed;"><i class="fa fa-building"></i></a>
			</div>
			<div class="media-content">
			    <a href="/calc/ipoteka/"><h4>Ипотечный калькулятор</h4></a>
			    <p>Рассчет ежемесячного платежа по ипотеке и суммы переплаты</p>
			</div>
		    </div>
		</div>
		<div class="col-md-6 col-lg-4">
		    <div class="media-box">
			<div class="media-icon">
			    <a href="/calc/compare/" style="color:#4ac8ed;"><i class="fa fa-balance-scale"></i></a>
			</div>
			<div class="media-content">
			    <a href="/calc/compare/"><h4>Сравнение кредитов</h4></a>
			    <p>Сравните 2 кредита и выберите - лучший</p>
			</div>
		    </div>
		</div>
		<div class="col-md-6 col-lg-4">
		    <div class="media-box">
			<div class="media-icon">
			    <i class="fa fa-percent"></i>
			</div>
			<div class="media-content">
			    <a href="#"><h4>Подбор кредита</h4></a>
			    <p>Подберите наиболее выгодный для Вас кредит</p>
			</div>
		    </div>
		</div>
		<div class="col-md-6 col-lg-4">
		    <div class="media-box">
			<div class="media-icon">
			    <i class="fa fa-ruble"></i>
			</div>
			<div class="media-content">
			    <a href="#"><h4>Подбор займа</h4></a>
			    <p>Подберите наиболее выгодный для Вас займ</p>
			</div>
		    </div>
		</div>
		<div class="col-md-6 col-lg-4">
		    <div class="media-box">
			<div class="media-icon">
			    <i class="fa fa-credit-card"></i>
			</div>
			<div class="media-content">
			    <a href="#"><h4>Подбор кредитной карты</h4></a>
			    <p>Каталог лучших кредитных карт</p>
			</div>
		    </div>
		</div>
	    </div>
	</div>
    </section>

    <!-- FORM -->
    <!--<section class="home-form bg-navy" id="quote">
	<div class="container">
	    <div class="row">
		<div class="col-md-12 col-lg-8">
		    <h2>Получить деньги</h2>
		    <form class="row">
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
				<option>Select a topic</option>
				<option>Topic 1</option>
				<option>Topic 2</option>
				<option>Topic 3</option>
			    </select>
			</div>
			<div class="col-md-6">
			    <button type="submit" class="btn btn-default btn-primary">Send Request</button>
			</div>
		    </form>
		</div>
		<div class="col-lg-4">
		    <div class="promo-img">
			<img data-original="img/home/bg-form.png" alt="promo">
		    </div>
		</div>
	    </div>
	</div>
    </section>-->

    <!-- OUR TEAM -->
    <?= BrandsWidget::widget();?>

    <section class="home-blog">
	<div class="container">
	    <!-- section title -->
	    <div class="row justify-content-center">
		<div class="col-sm-8">
		    <div class="sectionTitle text-center">
			<h2>Последнее из Блога</h2>
			<p>Полезная информация о кредитовании</p>
		    </div>
		</div>
	    </div>
	    <!-- section title ends -->
	    <div class="row">
		<?php foreach($last_posts as $last_post){ ?>
		<div class="col-md-4">
		    <div class="card card-style3">
			<div class="card_img">
                            <a href="/<?=$last_post->category->ALIAS;?>/<?=$last_post->ALIAS;?>/"><img style="max-width: 300px;" class="img-full" data-original="<?=$last_post->PIC;?>" alt="<?=$last_post->NAME;?>"></a>
			    <?= DatePostWidget::widget(['c_date'=>$last_post->C_DATE]);?>
			</div>
			<div class="card-block">
			    <ul class="list-inline">
				<li>
				    <a href="/<?=$last_post->category->ALIAS;?>/<?=$last_post->ALIAS;?>/"><i class="fa fa-user-o" aria-hidden="true"></i> <span class="text-primary">Zaimovik</span></a>
				</li>
				<!--<li>
				    <a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i> 350</a>
				</li>-->
				<!--<li>
				    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 30</a>
				</li>-->
			    </ul>
			    <a href="/<?=$last_post->category->ALIAS;?>/<?=$last_post->ALIAS;?>/"><h4 class="card-title"><?=$last_post->NAME;?></h4></a>
			</div>
		    </div>
		</div>
		<?php } ?>
	    </div>
	</div>
    </section>

    <div id="morphing-content" class="hidden">
	<!-- FORM -->
	<section class="home-form" id="quote">
	    <div class="container">
		<div class="row">
		    <div class="col-md-12">
			<h2 class="text-center">Получить деньги</h2>
			<form class="row pb30">
			    <div class="form-group col-md-6">
				<input type="text" class="form-control" id="requestInputName" aria-describedby="userName" placeholder="Ваше имя">
			    </div>
			    <div class="form-group col-md-6">
				<input type="email" class="form-control" id="requestInputEmail" aria-describedby="emailHelp" placeholder="Email">
			    </div>
			    <div class="form-group col-md-6">
				<input type="text" class="form-control" id="requestInputPhone" aria-describedby="userPhone" placeholder="Телефон">
			    </div>
			    <div class="form-group col-md-6 selectOptions">
				<select name="topic" class="form-control select-drop">
				    <option>Выберите тип кредита...</option>
				    <option value="1">Потребительский кредит</option>
				    <option value="2">Займ</option>
				    <option value="3">Ипотека</option>
				</select>
			    </div>
			    <div class="col-md-12 text-center">
				<button type="submit" class="btn btn-default bg-navy">Отправить заявку</button>
			    </div>
			</form>
		    </div>
		</div>
	    </div>
	</section>
    </div>
    <?= SubscribeWidget::widget();?>

    <?= FooterWidget::widget();?>
</div>