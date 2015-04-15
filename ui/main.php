<ul class="<?=SCF_INITIALS?>shortcodes">
	<?php
		foreach($scf_builtin_shortcodes as $shortcode) {
			$hasUi = 0;

			if($shortcode[4])
				$hasUi = 1;

			echo '<li><a href="#" class="'.SCF_INITIALS.'shortcode" title="'.$shortcode[3].'" data-slug="'.$shortcode[0].'" data-ui="'.$hasUi.'"><span>'.$shortcode[2].'</span></a></li>';
		}
	?>
</ul>

<script type="text/javascript">
	jQuery(document).ready(function($){
		$(".scf_shortcode").on("click", function(e) {
			e.preventDefault();

			var slug = $(this).attr("data-slug");
			var ui = $(this).attr("data-ui");
			//console.log(slug);

			if(ui == 1) {
				var data = {
					action: 'scf_load_shortcode_ui',
					ui: slug
				};

				scf_load_ui(data);
				//console.log("data:" + $.param(data));
			} else {
				scf_insert_shortcode(slug);
			}
		});
	});
</script>
