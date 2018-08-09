<style>
    .jstree-open > .jstree-anchor > .fa-folder:before {
        content: "\f07c";
    }

    .jstree-default .jstree-icon.none {
        width: 0;
    }
</style>
<div class="row">
    <div class="col-lg-8">
	<div class="ibox float-e-margins">
	    <div class="ibox-title">
		<h5>Дерево категорий</h5>
	    </div>
	    <div class="ibox-content">
		
		<div id="jstree-category">
		    <?php foreach($parents as $parent){ ?>
		    <ul>
			<li><?=$parent->NAME;?>
			<ul>
			    <?php foreach($categories as $category){ ?>
				<?php if($category->PARENT === $parent->ID){ ?>
				    <li><?=$category->NAME;?></li>
				<?php } ?>
			    <?php } ?>
			</ul>    
			</li>
		    </ul>
		    <?php } ?>
                        <!--<ul>
                            <li class="jstree-open">Admin theme
                                <ul>
                                    <li>css
                                        <ul>
                                            <li data-jstree='{"type":"css"}'>animate.css</li>
                                            <li data-jstree='{"type":"css"}'>bootstrap.css</li>
                                            <li data-jstree='{"type":"css"}'>style.css</li>
                                        </ul>
                                    </li>
                                    <li>email-templates
                                        <ul>
                                            <li data-jstree='{"type":"html"}'>action.html</li>
                                            <li data-jstree='{"type":"html"}'>alert.html</li>
                                            <li data-jstree='{"type":"html"}'>billing.html</li>
                                        </ul>
                                    </li>
                                    <li>fonts
                                        <ul>
                                            <li data-jstree='{"type":"svg"}'>glyphicons-halflings-regular.eot</li>
                                            <li data-jstree='{"type":"svg"}'>glyphicons-halflings-regular.svg</li>
                                            <li data-jstree='{"type":"svg"}'>glyphicons-halflings-regular.ttf</li>
                                            <li data-jstree='{"type":"svg"}'>glyphicons-halflings-regular.woff</li>
                                        </ul>
                                    </li>
                                    <li class="jstree-open">img
                                        <ul>
                                            <li data-jstree='{"type":"img"}'>profile_small.jpg</li>
                                            <li data-jstree='{"type":"img"}'>angular_logo.png</li>
                                            <li class="text-navy" data-jstree='{"type":"img"}'>html_logo.png</li>
                                            <li class="text-navy" data-jstree='{"type":"img"}'>mvc_logo.png</li>
                                        </ul>
                                    </li>
                                    <li class="jstree-open">js
                                        <ul>
                                            <li data-jstree='{"type":"js"}'>inspinia.js</li>
                                            <li data-jstree='{"type":"js"}'>bootstrap.js</li>
                                            <li data-jstree='{"type":"js"}'>jquery-2.1.1.js</li>
                                            <li data-jstree='{"type":"js"}'>jquery-ui.custom.min.js</li>
                                            <li  class="text-navy" data-jstree='{"type":"js"}'>jquery-ui-1.10.4.min.js</li>
                                        </ul>
                                    </li>
                                    <li data-jstree='{"type":"html"}'> affix.html</li>
                                    <li data-jstree='{"type":"html"}'> dashboard.html</li>
                                    <li data-jstree='{"type":"html"}'> buttons.html</li>
                                    <li data-jstree='{"type":"html"}'> calendar.html</li>
                                    <li data-jstree='{"type":"html"}'> contacts.html</li>
                                    <li data-jstree='{"type":"html"}'> css_animation.html</li>
                                    <li  class="text-navy" data-jstree='{"type":"html"}'> flot_chart.html</li>
                                    <li  class="text-navy" data-jstree='{"type":"html"}'> google_maps.html</li>
                                    <li data-jstree='{"type":"html"}'> icons.html</li>
                                    <li data-jstree='{"type":"html"}'> inboice.html</li>
                                    <li data-jstree='{"type":"html"}'> login.html</li>
                                    <li data-jstree='{"type":"html"}'> mailbox.html</li>
                                    <li data-jstree='{"type":"html"}'> profile.html</li>
                                    <li  class="text-navy" data-jstree='{"type":"html"}'> register.html</li>
                                    <li data-jstree='{"type":"html"}'> timeline.html</li>
                                    <li data-jstree='{"type":"html"}'> video.html</li>
                                    <li data-jstree='{"type":"html"}'> widgets.html</li>
                                </ul>
                            </li>
                        </ul>-->
                </div>
		
	    </div>
	</div>
    </div>
</div>
<div class="row">
    <div class="col-lg-8">
	<div class="ibox float-e-margins">
	    <div class="ibox-title">
		<h5>Категории</h5>
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
		    <a data-toggle="modal" class="btn btn-primary" href="#modal-form-new-category">Добавить новую категорию</a>
		</div>
		<!--<div class="row">
		    <div class="col-sm-9 m-b-xs">
			<div data-toggle="buttons" class="btn-group">
			    <label class="btn btn-sm btn-white"> <input type="radio" id="option1" name="options"> Day </label>
			    <label class="btn btn-sm btn-white active"> <input type="radio" id="option2" name="options"> Week </label>
			    <label class="btn btn-sm btn-white"> <input type="radio" id="option3" name="options"> Month </label>
			</div>
		    </div>
		    <div class="col-sm-3">
			<div class="input-group"><input type="text" placeholder="Search" class="input-sm form-control"> <span class="input-group-btn">
				<button type="button" class="btn btn-sm btn-primary"> Go!</button> </span></div>
		    </div>
		</div>-->
		<table class="table table-striped table-bordered table-hover" id="editable">
		    <thead>
			<tr>
			    <th>#</th>
			    <th>Название</th>
			    <th>Алиас</th>
			    <th></th>
			</tr>
		    </thead>
		    <tbody>
			<?php foreach($categories as $category){ ?>
			<tr data-row-id="<?=$category->ID;?>">
			    <td><?=$category->ID;?></td>
			    <td data-role="td-edit"><?=$category->NAME;?></td>
			    <td data-role="td-edit"><?=$category->ALIAS;?></td>
			    <td>				    
				<!--<a href="#"><i class="fa fa-check text-navy"></i></a>-->
				<a href="javascript:void(0);" onclick="fnClickViewCategory(<?=$category->ID;?>);"><i class="fa fa-edit text-navy"></i></a>
			    </td>
			</tr>
			<?php } ?>
		    </tbody>
		</table>
	    </div>
	</div>
    </div>
</div>
<div id="modal-form-new-category" class="modal fade" aria-hidden="true">
	<div class="modal-dialog">
	    <div class="modal-content">
		<div class="modal-body">
		    <div class="row">
			<div class="col-sm-6 b-r"><h3 class="m-t-none m-b">Новая категория</h3>

			    <p>Введите название и алиас категории.</p>

			    <form role="form">
				<div class="form-group"><label>Название</label> <input id="new-category-NAME" type="text" placeholder="Введите название" class="form-control"></div>
				<div class="form-group"><label>Алиас</label> <input id="new-category-ALIAS" type="text" placeholder="Введите алиас" class="form-control"></div>
				<div class="form-group"><label>Родительская</label>
				    <select class="form-control" id="new-category-PARENT">
				    <option value="0">--- Главная ---</option>
				    <?php foreach($parents as $parent){ ?>
					<option value="<?=$parent->ID;?>"><?=$parent->NAME;?></option>
				    <?php } ?>
				    </select>
				</div>
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
		    <button type="button" class="btn btn-primary" onclick="fnClickAddNewCategory();">Добавить категорию</button>
                </div>
	    </div>
	</div>
</div>
<?=$this->context->renderPartial('_modal_update_category',['parents'=>$parents]); ?>