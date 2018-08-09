<style type="text/css">
    .modal-dialog{
	width:900px;
    }
</style>
<div class="row">
    <div class="col-lg-8">
	<div class="ibox float-e-margins">
	    <div class="ibox-title">
		<h5>Управление статьями: <?= $main_category->NAME; ?></h5>
	    </div>
	</div>
    </div>
</div>
<?php foreach($categories as $sub_category){ ?>
<div class="row">
    <div class="col-lg-8">
	<div class="ibox float-e-margins">
	    <div class="ibox-title">
		<h5>Суб-категория: <?= $sub_category->NAME; ?> (<?= $sub_category->ALIAS; ?>)</h5>
		<div class="ibox-tools">
		    <a class="collapse-link">
			<i class="fa fa-chevron-up"></i>
		    </a>
		    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
			<i class="fa fa-wrench"></i>
		    </a>
		    <ul class="dropdown-menu dropdown-user">
			<li><a href="#">Config option 1</a>
			</li>
			<li><a href="#">Config option 2</a>
			</li>
		    </ul>
		    <a class="close-link">
			<i class="fa fa-times"></i>
		    </a>
		</div>
	    </div>
	    <div class="ibox-content">
		<div class="">
		    <!--<a onclick="fnClickAddRow();" href="javascript:void(0);" class="btn btn-primary ">Добавить новую категорию</a>-->
		    <a onclick="fnClickOpenAddNewPostDialog(<?= $sub_category->ID; ?>);" class="btn btn-primary" href="javascript:void(0);">Добавить новую статью</a>
		</div>
		<table class="table table-striped table-bordered table-hover" data-role="editable">
		    <thead>
			<tr>
			    <th>ID</th>
			    <th>Название</th>
			    <th>Алиас</th>
			    <th>TITLE</th>
			    <th>H1</th>
			    <th></th>
			</tr>
		    </thead>
		    <tbody>
			<?php foreach ($posts_storage[ $sub_category->ID ] as $post) { ?>
    			<tr>
    			    <td><?= $post->ID; ?></td>
    			    <td><?= $post->NAME; ?></td>
    			    <td><?= $post->ALIAS; ?></td>
    			    <td><?= $post->TITLE; ?></td>
    			    <td><?= $post->H1; ?></td>
    			    <td>
    				<a href="javascript:void(0);" onclick="fnClickViewPost(<?= $post->ID; ?>);"><i class="fa fa-edit text-navy"></i></a>
    			    </td>
    			</tr>
			<?php } ?>
		    </tbody>
		</table>
	    </div>
	</div>
    </div>
</div>
<?php } ?>
<?=$this->context->renderPartial('_modal_new_post',['categories'=>$categories]); ?>
<?=$this->context->renderPartial('_modal_update_post',['categories'=>$categories]); ?>