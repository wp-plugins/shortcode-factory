<?php
	$scfOptionPages = array(
		__('Welcome', 'shortcode-factory') => 'welcome',		// Title => id suffix (also used for {file-name}.php)
		__('Settings', 'shortcode-factory') => 'settings',
		__('Help', 'shortcode-factory') => 'help',
		__('Support', 'shortcode-factory') => 'support'
	);

	$titles = "";
	$contents = "";

	foreach($scfOptionPages as $pageTitle => $pageId) {
		$titles .= "<li><a href='#scf-page-{$pageId}'>{$pageTitle}</a></li>";

		$contents .= "<div id='scf-page-{$pageId}'>";
		$contents .= @get_include_contents(SCF_UI."/options/".$pageId.".php");
		$contents .= "</div>";

	}
?>
<div class="wrap">
	<a href="https://www.facebook.com/pages/WPMadeasy/785993324849159" target="_blank" class="scf-right" style="margin-top: 20px;"><img src="<?=SCF_IMGURL?>/followus.png" /></a>
	<h2><?=SCF_FULLNAME?></h2>
	<p style="font-size: 11px; margin-top: 0; color: #666;"><?=__('Version', 'shortcode-factory')?> <?=SCF_VERSION?></p>
	<p><?=SCF_DESCRIPTION?></p>

	<div id="scf-pages">
		<ul>
			<?=$titles?>
		</ul>

		<?=$contents?>
	</div>
</div>

<script type="text/javascript">
	jQuery(document).ready(function($){
		$( "#scf-pages" ).tabs({
			//active: 1
		});

		$('.scf-form-settings').submit(function(){
			var data =  $(this).serialize();

			$(".scf-notice")
				.removeClass("scf-error")
				.removeClass("scf-success")
				.addClass("scf-alert")
				.html("<span class='dashicons dashicons-info' style='color: #00A8EF;'></span> <?=__('Saving, please wait', 'shortcode-factory')?>")
				.show();

			$.post('options.php', data).error(function(){
				$(".scf-notice")
					.html("<?=__('Settings were not saved successfully, please try again.', 'shortcode-factory')?>")
					.removeClass("scf-alert")
					.addClass("scf-error")
					.show();
			}).success(function(){
				$(".scf-notice")
					.html("<?=__('Settings updated.', 'shortcode-factory')?>")
					.removeClass("scf-alert")
					.addClass("scf-success")
					.show();
			});

			return false;
		});
	});
</script>