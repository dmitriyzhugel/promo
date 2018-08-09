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
		    <h1>Сравнение кредитов</h1>
	    </div>
	    <div class="">
		    <ul class="pager middle">
			    <li>Главная</li>
			    <li><a href="javascript:void(0)">Сравнение кредитов</a></li>
		    </ul>
	    </div>
    </section>
    <section class="service_single-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-9 col-md-8 order-12">
				<div class="service_single-details">
					<h3 class="form_title">Параметры кредитов</h3>
					<form class="register" method="post" id="frm-compare">
						<div class="row">
							<!-- left colon -->
							<div class="col-md-6">
								<div class="form-group row">
									<div class="col-md-12">
										<label class="col-form-label">Сумма кредита:</label><br>
										<input id="SUM1" name="SUM1" class="form-control" type="text" placeholder="Сумма кредита" value="300000">
									</div>
								</div>
								<div class="form-group row">
									<div class="col-md-12">
										<label class="col-form-label">Срок кредита (в месяцах):</label><br>
										<input id="TERM1" name="TERM1" class="form-control" type="number" placeholder="Срок кредита" value="36">
									</div>
								</div>
								<div class="form-group row">
									<div class="col-md-12">
										<label class="col-form-label">Процентная ставка (% в год):</label><br>
										<input id="PERCENT1" name="PERCENT1" class="form-control" placeholder="Процентная ставка" value="17.5">
									</div>	
								</div>
								<div id="calc-container1" class="text-center"></div>
							</div>
							<!-- right colon -->
							<div class="col-md-6">
								<div class="form-group row">
									<div class="col-md-12">
										<label class="col-form-label">Сумма кредита:</label><br>
										<input id="SUM2" name="SUM2" class="form-control" type="text" placeholder="Сумма кредита" value="300000">
									</div>
								</div>
								<div class="form-group row">
									<div class="col-md-12">
										<label class="col-form-label">Срок кредита (в месяцах):</label><br>
										<input id="TERM2" name="TERM2" class="form-control" type="number" placeholder="Срок кредита" value="36">
									</div>
								</div>
								<div class="form-group row">
									<div class="col-md-12">
										<label class="col-form-label">Процентная ставка (% в год):</label><br>
										<input id="PERCENT2" name="PERCENT2" class="form-control" placeholder="Процентная ставка" value="17.5">
									</div>	
								</div>
								<div id="calc-container2" class="text-center"></div>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-md-12 text-center">
								<button id="btn-calc" type="submit" class="btn btn-default btn-primary">Рассчитать</button>
								<span style="color:#85909a;font-size:10px;">*Расчет носит справочный характер.</span>
							</div>
						</div>
					</form>
					<img src="/img/home/services/services.jpg" alt="serviceimg" class="img-full">
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
					<li class="list-group-item"><a href="/calc/credit/">Кредитный калькулятор</a></li>
					<li class="list-group-item"><a href="/calc/ipoteka/">Ипотечный калькулятор</a></li>
					<li class="list-group-item active"><a href="/calc/compare/">Сравнение кредитов</a></li>
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