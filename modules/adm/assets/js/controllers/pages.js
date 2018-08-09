$(document).ready(function () {
    $('[data-role="editable"]').dataTable();
    $('.summernote').summernote();
});

function fnClickOpenAddNewPostDialog(category){
    $('#modal-new-post').modal('show');
    $('#new_CATEGORY').val(category);
}

function fnClickAddNewPost() {
    console.log('...fnClickAddNewPost');
    var new_NAME = $('#new_NAME').val();
    var new_ALIAS = $('#new_ALIAS').val();
    var new_TITLE = $('#new_TITLE').val();
    var new_DESCRIPTION = $('#new_DESCRIPTION').val();
    var new_H1 = $('#new_H1').val();
    var new_VISIBLE = $("input[name='new_VISIBLE']:checked").val();
    var new_VISIBLE_MENU = $("input[name='new_VISIBLE_MENU']:checked").val();
    var new_PREVIEW = $('#new_PREVIEW').code();
    var new_CONTENT = $('#new_CONTENT').code();
    var new_CATEGORY = $('#new_CATEGORY').val();
    $.ajax({
	    type: "POST",
	    url: "/adm/pages/create/",
	    dataType: "json",
	    cache: false,
	    data: {
		name: new_NAME,
		alias: new_ALIAS,
		title: new_TITLE,
		description: new_DESCRIPTION,
		h1: new_H1,
		visible: new_VISIBLE,
		visible_menu: new_VISIBLE_MENU,
		preview: new_PREVIEW,
		content: new_CONTENT,
		category: new_CATEGORY
	    }, // post data
	    success: function (data) {
		if(data.status === 'OK'){
		    location.href = location.href;
		}
	    }
    });
}

function fnClickViewPost(id) {
    $('#update_ID').val(id);
    $.ajax({
	    type: "POST",
	    url: "/adm/pages/view/",
	    dataType: "json",
	    cache: false,
	    data: {
		id: id
	    }, // post data
	    success: function (data) {
		if (data.status === 'OK') {
		    $('#update_NAME').val( data.data.NAME );
		    $('#update_ALIAS').val( data.data.ALIAS );
		    $('#update_TITLE').val( data.data.TITLE );
		    $('#update_DESCRIPTION').val( data.data.DESCRIPTION );
		    $('#update_H1').val( data.data.H1 );
		    $('#update_VISIBLE').prop( "checked", data.data.VISIBLE );
		    $('#update_VISIBLE_MENU').prop( "checked", data.data.VISIBLE_MENU );		    
		    $("#update_PREVIEW").code(data.data.PREVIEW);
		    $('#update_CONTENT').code(data.data.CONTENT);
		    $('#update_CATEGORY').val(data.data.CATEGORY);
		    $('#modal-update-post').modal('show');
		}
	    }
    });
}

function fnClickUpdatePost(){
    var update_ID = $('#update_ID').val();
    var update_NAME = $('#update_NAME').val();
    var update_ALIAS = $('#update_ALIAS').val();
    var update_TITLE = $('#update_TITLE').val();
    var update_DESCRIPTION = $('#update_DESCRIPTION').val();
    var update_H1 = $('#update_H1').val();
    var update_VISIBLE = $("input[name='update_VISIBLE']:checked").val();
    var update_VISIBLE_MENU = $("input[name='update_VISIBLE_MENU']:checked").val();
    var update_PREVIEW = $('#update_PREVIEW').code();
    var update_CONTENT = $('#update_CONTENT').code();
    var update_CATEGORY = $('#update_CATEGORY').val();
    $.ajax({
	    type: "POST",
	    url: "/adm/pages/update/",
	    dataType: "json",
	    cache: false,
	    data: {
		id: update_ID,
		name: update_NAME,
		alias: update_ALIAS,
		title: update_TITLE,
		description: update_DESCRIPTION,
		h1: update_H1,
		visible: update_VISIBLE,
		visible_menu: update_VISIBLE_MENU,
		preview: update_PREVIEW,
		content: update_CONTENT,
		category: update_CATEGORY
	    }, // post data
	    success: function (data) {
		if(data.status === 'OK'){		    
		    location.href = location.href;
		}
	    }
    });
}