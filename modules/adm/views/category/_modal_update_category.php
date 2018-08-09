<div id="modal-form-update-category" class="modal fade" aria-hidden="true">
	<div class="modal-dialog">
	    <div class="modal-content">
		<div class="modal-body">
		    <div class="row">
			<div class="col-sm-6 b-r"><h3 class="m-t-none m-b">Редактирование категории</h3>

			    <p>Введите название и алиас категории.</p>

			    <form role="form">
				<input type="hidden" id="update_ID" value="" />	
				<div class="form-group"><label>Название</label> <input id="update-category-NAME" type="text" placeholder="Введите название" class="form-control"></div>
				<div class="form-group"><label>Алиас</label> <input id="update-category-ALIAS" type="text" placeholder="Введите алиас" class="form-control"></div>
				<div class="form-group"><label>Родительская</label>
				    <select class="form-control" id="update-category-PARENT">
				    <option value="0">--- Главная ---</option>
				    <?php foreach($parents as $parent){ ?>
					<option value="<?=$parent->ID;?>"><?=$parent->NAME;?></option>
				    <?php } ?>
				    </select>
				</div>
				<div class="form-group"><label>Отображать категорию</label> <input id="update-category-VISIBLE" name="update-category-VISIBLE" type="checkbox" checked="checked" value="1"></div>
			    <div class="form-group"><label>Отображать в главном меню</label> <input id="update-category-VISIBLE_MENU" name="update-category-VISIBLE_MENU" type="checkbox" checked="checked" value="1"></div>
				<!--<div>
				    <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Log in</strong></button>
				    <label> <input type="checkbox" class="i-checks"> Remember me </label>
				</div>-->
			    </form>
			</div>
			<div class="col-sm-6">
			    <p>Название и алиас правятся прямо в таблице</p>
			    <p class="text-center">
				<a href=""><i class="fa fa-folder big-icon"></i></a>
			    </p>
			</div>
		    </div>
		</div>
		<div class="modal-footer">
		    <button type="button" class="btn btn-white" data-dismiss="modal">Закрыть</button>
		    <button type="button" class="btn btn-primary" onclick="fnClickUpdateCategory();">Сохранить категорию</button>
                </div>
	    </div>
	</div>
</div>