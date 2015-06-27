<div class="scf-shortcode-wrapper">
	<h2 class="scf-shortcode-title" data-shortcode="scf-allow" data-has-closing="1">[scf-allow]</h2>
	<p class="scf-shortcode-desc"><?=__('Allows content to specified roles only.', 'shortcode-factory')?></p>
	<div class="scf-controls-group">
		<div class="scf-control">
			<label for="scf-control-role" class="scf-control-label"><?=__('Select Role(s)', 'shortcode-factory')?></label>
			<input type="hidden" id="scf-control-role" name="scf-param-role" value="" class="scf-param" data-param-name="role" />
			<?php
				global $wp_roles;

				if (!isset($wp_roles)) {
					$wp_roles = new WP_Roles();
				}

				$roles = $wp_roles->get_names();

				foreach($roles as $roleName => $roleTitle) {
			?>
					<span class="scf-control-chkbox">
						<input type="checkbox" id="role-<?=$roleName?>" name="role-<?=$roleName?>" value="<?=$roleName?>" class="chk-role" /> <?=$roleTitle?>
					</span>
			<?php
				}
			?>
		</div>

		<div class="scf-control separator">
			<button type="button" id="scf-action-back" class="button button-large scf-control-button">&lt; <?=__('Back', 'shortcode-factory')?></button>
			<button type="button" id="scf-action-insert" class="button button-primary button-large scf-control-button scf-right"><?=__('Insert', 'shortcode-factory')?></button>
		</div>
	</div>
</div>

<script type="text/javascript">
	jQuery(document).ready(function($){
		$(".chk-role").on("change", function(e) {
			var roles = [];

			$(".chk-role:checked").each(function(i){
				roles.push($(this).val());
				$("#scf-control-role").val(roles.join(","));
			});
		});

		scf_go_back();
		scf_insert();
	});
</script>
