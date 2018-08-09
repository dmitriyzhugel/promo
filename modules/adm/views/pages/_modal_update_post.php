<div class="modal inmodal fade" id="modal-update-post" tabindex="-1" role="dialog"  aria-hidden="true">
    <div class="modal-dialog modal-lg">
	<div class="modal-content">
	    <div class="modal-header">
		<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
		<h4 class="modal-title">Редактирование статьи</h4>
		<small class="font-bold">Сделайте необходимые настройки и нажмите кнопку Сохранить.</small>
	    </div>
	    <div class="modal-body">		
		<div class="row">
		    <div class="col-sm-8">
			<form role="form">
			    <input type="hidden" id="update_ID" value="" />			    
			    <div class="form-group"><label>Название</label> <input id="update_NAME" type="text" placeholder="Введите название" class="form-control"></div>
			    <div class="form-group"><label>Алиас</label> <input id="update_ALIAS" type="text" placeholder="Введите алиас" class="form-control"></div>
			    <div class="form-group"><label>TITLE</label> <input id="update_TITLE" type="text" placeholder="Введите TITLE" class="form-control"></div>
			    <div class="form-group">
				<label>DESCRIPTION</label>
				<textarea id="update_DESCRIPTION" class="form-control" placeholder="DESCRIPTION" style="height:100px;"></textarea>
			    </div>
			    <div class="form-group"><label>H1</label> <input id="update_H1" type="text" placeholder="Введите H1" class="form-control"></div>
			    <div class="form-group"><label>Отображать статью</label> <input id="update_VISIBLE" name="update_VISIBLE" type="checkbox" checked="checked" value="1"></div>
			    <div class="form-group"><label>Отображать в главном меню</label> <input id="update_VISIBLE_MENU" name="update_VISIBLE_MENU" type="checkbox" checked="checked" value="1"></div>
			    <div class="form-group">
				<label>Категория</label>
				<select id="update_CATEGORY" class="form-control">
				    <?php foreach($categories as $sub_category){ ?>
				    <option value="<?=$sub_category->ID;?>"><?=$sub_category->NAME;?></option>
				    <?php } ?>
				</select>
			    </div>
                        </form>
		    </div>
		</div>
		<div class="row">
		    <div class="col-lg-12">
			<div class="ibox float-e-margins">
			    <div class="ibox-title">
				<h5>Предпросмотр</h5>
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
			    <div class="ibox-content no-padding">

				<div class="summernote" id="update_PREVIEW">
				    <h3>Lorem Ipsum is simply</h3>
				    dummy text of the printing and typesetting industry. <strong>Lorem Ipsum has been the industry's</strong> standard dummy text ever since the 1500s,
				    when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
				    typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
				    <br/>
				    <br/>
				    <ul>
					<li>Remaining essentially unchanged</li>
					<li>Make a type specimen book</li>
					<li>Unknown printer</li>
				    </ul>
				</div>

			    </div>
		    </div>
		</div>
            </div>
	    <div class="row">
		    <div class="col-lg-12">
			<div class="ibox float-e-margins">
			    <div class="ibox-title">
				<h5>Текст статьи</h5>
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
			    <div class="ibox-content no-padding">

				<div class="summernote" id="update_CONTENT">
				    <h3>Lorem Ipsum is simply</h3>
				    dummy text of the printing and typesetting industry. <strong>Lorem Ipsum has been the industry's</strong> standard dummy text ever since the 1500s,
				    when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
				    typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
				    <br/>
				    <br/>
				    <ul>
					<li>Remaining essentially unchanged</li>
					<li>Make a type specimen book</li>
					<li>Unknown printer</li>
				    </ul>
				</div>

			    </div>
		    </div>
		</div>
            </div>
	    </div>

	    <div class="modal-footer">
		<button type="button" class="btn btn-white" data-dismiss="modal">Закрыть</button>
		<button type="button" class="btn btn-primary" onclick="fnClickUpdatePost();">Сохранить</button>
	    </div>
	</div>
    </div>
</div>