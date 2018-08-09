<div class="row">
	<div class="col-md-4">
		<div class="card bg-light mb-3" style="max-width: 20rem;">
		  <div class="card-header">Ежемесячный платеж:</div>
		  <div class="card-body">
			<h4 class="card-title"><?=number_format($month_pay,2,'.',' ');?></h4>
			<p class="card-text"></p>
		  </div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="card bg-light mb-3" style="max-width: 20rem;">
		  <div class="card-header">Переплата по кредиту:</div>
		  <div class="card-body">
			<h4 class="card-title"><?=number_format($more_pay,2,'.',' ');?></h4>
			<p class="card-text"></p>
		  </div>
		</div>
	</div>
	<div class="col-md-4">
		<div class="card bg-light mb-3" style="max-width: 20rem;">
		  <div class="card-header">Общая стоимость:</div>
		  <div class="card-body">
			<h4 class="card-title"><?=number_format($summ_pay,2,'.',' ');?></h4>
			<p class="card-text"></p>
		  </div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#paymentScheduleModal">
			График платежей
		</button>
	</div>	
</div>
<style type="text/css">
.modal.show .modal-dialog {
  -webkit-transform: translate(0, 150px);
  transform: translate(0, 150px);
}

@media (min-width: 992px) {
  .modal.show .modal-dialog {
    -webkit-transform: translate(0, 250px);
    transform: translate(0, 250px);
  }
}
</style>
<div class="modal fade" id="paymentScheduleModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="display: none;" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-body">
				<button type="button" class="close push-xs-right" data-dismiss="modal" aria-label="Close">
					<i class="fa fa-close"></i>
				</button>
				<div class="container-fluid modal-item">
					<div class="row">
						<!--<div class="col-lg-6">
							<div class="single_item-img">
								<img src="/img/modal1.jpg" alt="image" class="initial loading" data-was-processed="true">
							</div>
						</div>-->
						<div class="col-lg-12">
							<div class="single_item-details">
								<h2>График платежей</h2>
								<?php if(!$is_mobile){ ?>
								<table class="table" style="margin-top: 10px;">
								    <thead>
									    <tr>
										    <th>Месяц</th>
										    <th>Оплата процентов, <?=$currency;?></th>
										    <th>Оплата основного долга, <?=$currency;?></th>
										    <th>Ежемесячный платеж всего, <?=$currency;?></th>
										    <th>Остаток погашения, <?=$currency;?></th>
									    </tr>
								    </thead>
								    <tbody>
									<?php foreach($schedule as $schedule_item){ ?>
									<tr class="table-warning">
										<th scope="row"><?=$schedule_item['i_term'];?></th>
										<td><?=number_format($schedule_item['percent_pay'],2,',',' ');?></td>
										<td><?=number_format($schedule_item['debt_part'],2,',',' ');?></td>
										<td><?=number_format($month_pay,2,',',' ');?></td>
										<td><?=number_format($schedule_item['debt_balance'],2,',',' ');?></td>
									</tr>
									<?php } ?>
								    </tbody>
								</table>
								<?php }else{ ?>
								<?php foreach($schedule as $schedule_item){ ?>
								<div class="card bg-light mb-3" style="max-width: 20rem;">
								  <div class="card-header">Месяц, <?=$schedule_item['i_term'];?></div>
								  <div class="card-body">
									<h4 class="card-title">Оплата процентов</h4>
									<p class="card-text"><?=number_format($schedule_item['percent_pay'],2,',',' ');?></p>
									<h4 class="card-title">Оплата основного долга</h4>
									<p class="card-text"><?=number_format($schedule_item['debt_part'],2,',',' ');?></p>
									<h4 class="card-title">Остаток погашения</h4>
									<p class="card-text"><?=number_format($schedule_item['debt_balance'],2,',',' ');?></p>
								  </div>
								</div>
								<?php } ?>
								<?php } ?>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>