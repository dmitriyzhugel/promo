<?php
	use app\widgets\FooterWidget;
?>
<style type="text/css">
    @media (max-width: 767px) {
        .hidden-xs,
          tr.hidden-xs,
          th.hidden-xs,
          td.hidden-xs {
            display: none !important;
          }
    }
</style>
<div class="main-wrapper services">
    <!-- BREDCRUMB -->
    <section class="bredcrumb">
	    <div class="bg-image text-center" style="background-image: url('/img/bg-bredcrumb.jpg');">
		    <h1>Ипотечный калькулятор</h1>
	    </div>
	    <div class="">
		    <ul class="pager middle">
			    <li>Главная</li>
			    <li><a href="javascript:void(0)">Ипотечный калькулятор</a></li>
		    </ul>
	    </div>
    </section>
    <section class="service_single-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-8 order-12">
				<div class="service_single-details">
					<h3 class="form_title">Параметры кредита</h3>
					<form class="register" method="post" id="frm-calc">
						<div class="form-group row">
							<label for="SUM" class="col-md-2 col-form-label">Сумма кредита:</label>
							<div class="col-md-6">
								<input id="SUM" name="SUM" class="form-control" type="text" placeholder="Сумма кредита" value="1000000">
							</div>
							<div class="col-md-2 selectOptions">
								<select id="CURRENCY" name="CURRENCY" class="form-control select-drop">
									<option value="₽">руб.</option>
									<option value="USD">$</option>
									<option value="EUR">€</option>
								</select>
							</div>
						</div>
						<div class="form-group row">
							<label for="TERM" class="col-md-2 col-form-label">Срок кредита (в месяцах):</label>
							<div class="col-md-8">
								<input id="TERM" name="TERM" class="form-control" type="number" placeholder="Срок кредита" value="120">
							</div>
						</div>
						<div class="form-group row">
							<label for="PERCENT" class="col-md-2 col-form-label">Процентная ставка (% в год):</label>
							<div class="col-md-8">
								<input id="PERCENT" name="PERCENT" class="form-control" placeholder="Процентная ставка" value="10.5">
							</div>	
						</div>
						<div class="form-group row">
							<label class="col-md-2 col-form-label"></label>
							<div class="col-md-8">
								<button id="btn-calc" type="submit" class="btn btn-default btn-primary">Рассчитать</button>
								<span style="color:#85909a;font-size:10px;">*Расчет носит справочный характер.</span>
							</div>
						</div>
					</form>
					<div id="calc-container"></div>
					<!--<img src="/img/home/services/services.jpg" alt="serviceimg" class="img-full">-->
					<div class="service_details-desc">
						<h2>Предложения наших партнеров</h2>
						<?php foreach($offers as $offer){ ?>
						<div class="row" style="margin-top:15px;">
						    <div class="col-lg-12">
							<?=!$is_mobile?$offer->CONTENT:$offer->CONTENT_MOBILE;?>
						    </div>
						</div>
						<?php } ?>						
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 order-1 sidebar hidden-xs">
				<ul class="list-group">
					<!--<li class="list-group-item"><a href="services-1.html">All Services</a></li>-->
					<li class="list-group-item"><a href="/calc/credit/">Кредитный калькулятор</a></li>
					<li class="list-group-item active"><a href="/calc/ipoteka/">Ипотечный калькулятор</a></li>
					<li class="list-group-item"><a href="/calc/compare/">Сравнение кредитов</a></li>
					<li class="list-group-item"><a href="javascript:void(0);">Подбор кредита</a></li>
					<li class="list-group-item"><a href="javascript:void(0);">Подбор займа</a></li>
					<li class="list-group-item"><a href="javascript:void(0);">Подбор кредитной карты</a></li>
				</ul>
			</div>
		</div>
	</div>
    </section>
	<?= FooterWidget::widget();?>
</div>