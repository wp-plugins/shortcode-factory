jQuery(document).ready(function($){
	$("#scf_InsertShortcode").on("click", function(e){
		e.preventDefault();

		var data = {action: 'scf_load_shortcodes_ui'};

		scf_load_ui(data);
	});
});

function scf_load_ui(data) {
	jQuery.get(scf_ajax.url, data, function(resp){
		jQuery.colorbox({
			title: scf_ajax.tag,
			className: scf_ajax.i+"cbox",
			html: resp,
			open: true,
			width: 500,
			height: 400,
			opacity: '0.7',
			fixed: true
		});
	});
}

function scf_go_back(to) {
	to = (typeof to === 'undefined') ? 'main':to;

	var target = "";

	switch(to) {
		case 'main':
			target = "scf_load_shortcodes_ui";
			break;
	}

	jQuery("#scf-action-back").on("click", function(e) {
		e.preventDefault();

		var data = {action: target};

		scf_load_ui(data);
	});
}

function scf_insert() {
	jQuery("#scf-action-insert").on("click", function(e) {
		e.preventDefault();

		var shortcode = jQuery(".scf-shortcode-title").attr("data-shortcode");
		var params = {};
		var isOk = true;

		jQuery(".scf-param").each(function(i){
			var p_name = jQuery(this).attr("data-param-name");
			var p_val = jQuery(this).val();
			var p_required = jQuery(this).attr("data-required");

			if(p_val != "") {
				params[p_name] = p_val;
			} else if(p_val == "" && p_required == "1") { //Required parameter, must not be empty
				jQuery(this).addClass("highlight-error");
				isOk = false;
			}
		});

		if(isOk) {
			scf_insert_shortcode(shortcode, params);
		}
	});
}

function scf_insert_shortcode(shortcode, params) {
	params = (typeof params === 'undefined') ? null : params;

	var attrs = [];
	var strAttrs = "";
	var out = shortcode;

	if(params != null) {
		jQuery.each(params, function(key, val){
			attrs.push(key+"=\""+val+"\"");
		});

		attrs.sort();
		strAttrs = attrs.join(" ");
	}

	if(strAttrs != "") {
		out += " "+strAttrs;
	}

	window.parent.send_to_editor('[' + out + ']');
	jQuery.colorbox.close();
}
