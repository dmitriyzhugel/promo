<hr>
<h3>Рассчет кредита</h3>
<br>
<div class="row">
	<div class="col-md-12" style="text-align: center;">
		<div class="card bg-light mb-3">
		  <div class="card-header">Ежемесячный платеж:</div>
		  <div class="card-body">
			<h4 class="card-title"><?=number_format($month_pay,2,'.',' ');?></h4>
			<p class="card-text"></p>
		  </div>
		</div>
		<div class="card bg-light mb-3">
		  <div class="card-header">Переплата по кредиту:</div>
		  <div class="card-body">
			<h4 class="card-title"><?=number_format($more_pay,2,'.',' ');?></h4>
			<p class="card-text"></p>
		  </div>
		</div>
		<div class="card bg-light mb-3">
		  <div class="card-header">Общая стоимость:</div>
		  <div class="card-body">
			<h4 class="card-title"><?=number_format($summ_pay,2,'.',' ');?></h4>
			<p class="card-text"></p>
		  </div>
		</div>
	</div>
</div>