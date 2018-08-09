$(document).ready(function () {
    oTableInit();
    jsTreeInit();
});
function oTableInit() {
    /* Init DataTables */
    var oTable = $('#editable').dataTable();
    /* Apply the jEditable handlers to the table */
    oTable.$('[data-role="td-edit"]').editable('/adm/category/update/', {
	"callback": function (sValue, y) {
	    var aPos = oTable.fnGetPosition(this);
	    oTable.fnUpdate(sValue, aPos[0], aPos[1]);
	},
	"submitdata": function (value, settings) {
	    return {
		"row_id": this.parentNode.getAttribute('data-row-id'),
		"id": this.parentNode.getAttribute('data-row-id'),
		"column": oTable.fnGetPosition(this)[2]
	    };
	},

	"width": "90%",
	"height": "100%"
    });
}
function jsTreeInit(){
    $('#jstree-category').jstree({
            'core' : {
                'check_callback' : true
            },
            'plugins' : [ 'types', 'dnd' ],
            'types' : {
                'default' : {
                    'icon' : 'fa fa-folder'
                },
                'html' : {
                    'icon' : 'fa fa-file-code-o'
                },
                'svg' : {
                    'icon' : 'fa fa-file-picture-o'
                },
                'css' : {
                    'icon' : 'fa fa-file-code-o'
                },
                'img' : {
                    'icon' : 'fa fa-file-image-o'
                },
                'js' : {
                    'icon' : 'fa fa-file-text-o'
                }

        }
    });
}
function fnClickAddRow() {
    var oTable = $('#editable').dataTable();
    var next_id = oTable.fnGetData().length + 1;
    $('#editable').dataTable().fnAddData([
	next_id,
	"Custom row",
	"New row",
	'<a href="#"><i class="fa fa-check text-navy"></i></a>'
    ]);
    oTableInit();
}
function fnClickAddNewCategory() {
    var name = $('#new-category-NAME').val();
    var alias = $('#new-category-ALIAS').val();
    var parent = $('#new-category-PARENT').val();
    if (name && alias) {	
	$.ajax({
	    type: "POST",
	    url: "/adm/category/create/",
	    dataType: "json",
	    cache: false,
	    data: {
		name: name,
		alias: alias,
		parent: parent
	    }, // post data
	    success: function (data) {
		if (data.status === 'OK') {
		    location.href = '/adm/category/';
		}
	    }
	});
    }
}
function fnClickViewCategory(id){
    $('#update_ID').val(id);
    $.ajax({
	    type: "POST",
	    url: "/adm/category/view/",
	    dataType: "json",
	    cache: false,
	    data: {
		id: id
	    }, // post data
	    success: function (data) {
		if (data.status === 'OK') {
		    $('#update-category-NAME').val( data.data.NAME );
		    $('#update-category-ALIAS').val( data.data.ALIAS );
		    $('#update-category-VISIBLE').prop( "checked", data.data.VISIBLE );
		    $('#update-category-VISIBLE_MENU').prop( "checked", data.data.VISIBLE_MENU );
		    $('#update-category-PARENT').val( data.data.PARENT );
		    $('#modal-form-update-category').modal('show');
		}
	    }
    });
}
function fnClickUpdateCategory(){
    var update_ID = $('#update_ID').val();
    var update_NAME = $('#update-category-NAME').val();
    var update_ALIAS = $('#update-category-ALIAS').val();
    var update_PARENT = $('#update-category-PARENT').val();
    var update_VISIBLE = $("input[name='update-category-VISIBLE']:checked").val();
    var update_VISIBLE_MENU = $("input[name='update-category-VISIBLE_MENU']:checked").val();
    $.ajax({
	    type: "POST",
	    url: "/adm/category/update_form/",
	    dataType: "json",
	    cache: false,
	    data: {
		id: update_ID,
		name: update_NAME,
		alias: update_ALIAS,
		parent: update_PARENT,
		visible: update_VISIBLE,
		visible_menu: update_VISIBLE_MENU		
	    }, // post data
	    success: function (data) {
		if (data.status === 'OK') {
		    location.href = location.href;
		}
	    }
    });
}