<div class="scf-shortcode-wrapper">
	<h2 class="scf-shortcode-title" data-shortcode="scf-post-author">[scf-post-author]</h2>
	<p class="scf-shortcode-desc"><?=__('Outputs information about the post author. If ID or Slug is provided, outputs the information about author of that particular post.', 'shortcode-factory')?></p>
	<div class="scf-controls-group">
		<div class="scf-control">
			<label for="scf-control-id" class="scf-control-label"><?=__('ID', 'shortcode-factory')?> <span class="optional scf-right"><?=__('(optional)', 'shortcode-factory')?></span></label>
			<input type="text" id="scf-control-id" name="scf-param-id" class="scf-control-text scf-param" data-param-name="id" />
		</div>

		<div class="scf-control">
			<label for="scf-control-slug" class="scf-control-label"><?=__('Slug', 'shortcode-factory')?> <span class="optional scf-right"><?=__('(optional)', 'shortcode-factory')?></span></label>
			<input type="text" id="scf-control-slug" name="scf-param-slug" class="scf-control-text scf-param" data-param-name="slug" />
			<span class="notes"><?=__('Takes precedence over ID parameter.', 'shortcode-factory')?></span>
		</div>

		<div class="scf-control">
			<label for="scf-control-type" class="scf-control-label"><?=__('Information Type', 'shortcode-factory')?> <span class="optional scf-right"><?=__('(optional)', 'shortcode-factory')?></span></label>
			<select id="scf-control-type" name="scf-param-type" class="scf-control-select scf-param" data-param-name="type">
				<option value="">-- Select --</option>
				<option value="ID">ID</option>
				<option value="display_name">Display Name (default)</option>
				<option value="nickname">Nick Name</option>
				<option value="first_name">First Name</option>
				<option value="last_name">Last Name</option>
				<option value="description">Biographical Info</option>
				<option value="jabber">Jabber</option>
				<option value="aim">AIM</option>
				<option value="yim">YIM</option>
				<option value="googleplus">Google Plus</option>
				<option value="twitter">Twitter</option>

				<option value="user_login">Login Name</option>
				<option value="user_pass">Password</option>
				<option value="user_email">Email</option>
				<option value="user_url">URL</option>
				<option value="user_registered">Registration Date/Time</option>
				<option value="user_status">Account Status</option>
				<option value="user_activation_key">Activation Key</option>
				<option value="roles">Roles</option>
				<option value="user_level">Access Level</option>
			</select>
			<span class="notes"><?=__('See <a href="https://codex.wordpress.org/Function_Reference/get_the_author_meta#Parameters" target="_blank">get_the_author_meta()</a> in Wordpress Codex for more supported information types.', 'shortcode-factory')?></span>
		</div>

		<div class="scf-control">
			<label for="scf-control-output" class="scf-control-label"><?=__('Output HTML Tag', 'shortcode-factory')?> <span class="optional scf-right"><?=__('(optional)', 'shortcode-factory')?></span></label>
			<select id="scf-control-output" name="scf-param-output" class="scf-control-select scf-param scf-opt-x" data-param-name="output">
				<option value="">-- Select --</option>
				<option value="raw">Raw / No HTML Tag (default)</option>
				<option value="div">&lt;div&gt;</option>
				<option value="span">&lt;span&gt;</option>
				<option value="p">&lt;p&gt;</option>
				<option value="code">&lt;code&gt;</option>
				<option value="em">&lt;em&gt;</option>
				<option value="strong">&lt;strong&gt;</option>
				<option value="address">&lt;address&gt;</option>
				<option value="other">Other...</option>
			</select>

			<input type="text" id="scf-control-output" name="scf-param-output" class="scf-control-text scf-param scf-opt-y" style="display: none;" data-param-name="output" />
			<span class="notes scf-opt-b" style="display: none;"><?=__('Just enter the HTML Tag name, without angular brackets, i.e. em, strong, address, b or etc.', 'shortcode-factory')?></span>
		</div>

		<div class="scf-control">
			<label for="scf-control-class" class="scf-control-label"><?=__('CSS Class', 'shortcode-factory')?> <span class="optional scf-right"><?=__('(optional)', 'shortcode-factory')?></span></label>
			<input type="text" id="scf-control-class" name="scf-param-class" class="scf-control-text scf-param" data-param-name="class" />
			<span class="notes"><?=__('Default is short code name. Separate one or more class names with a space.', 'shortcode-factory')?></span>
		</div>

		<div class="scf-control separator">
			<button type="button" id="scf-action-back" class="button button-large scf-control-button">&lt; <?=__('Back', 'shortcode-factory')?></button>
			<button type="button" id="scf-action-insert" class="button button-primary button-large scf-control-button scf-right"><?=__('Insert', 'shortcode-factory')?></button>
		</div>
	</div>
</div>

<script type="text/javascript">
	jQuery(document).ready(function($){
		scf_hook_output_change();
		scf_go_back();
		scf_insert();
	});
</script>
