function rinjani_open_uploader(element, class_name){

	$that = jQuery(element);
    wp.media.editor.send.attachment = function(props, attachment){

    	$that.prev().val(attachment.url);

    	jQuery('.'+class_name + ' > img').remove();
    	jQuery('.'+class_name).prepend('<img src="'+attachment.url+'" style="width:100%">');
    }

    wp.media.editor.open(this);

    return false;
}