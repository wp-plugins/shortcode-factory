<div class="scf-shortcode-wrapper">
	<h2 class="scf-shortcode-title" data-shortcode="scf-post-prev">[scf-post-prev]</h2>
	<p class="scf-shortcode-desc"><?=__('Outputs the link to the previous post.', 'shortcode-factory')?></p>
	<div class="scf-controls-group">
		<div class="scf-control">
			<label for="scf-control-label" class="scf-control-label"><?=__('Link Text', 'shortcode-factory')?> <span class="optional scf-right"><?=__('(optional)', 'shortcode-factory')?></span></label>
			<input type="text" id="scf-control-label" name="scf-param-label" class="scf-control-text scf-param" data-param-name="label" />
			<span class="notes"><?=__('Default is the post title. Used if output type is link.', 'shortcode-factory')?></span>
		</div>

		<div class="scf-control">
			<label for="scf-control-position" class="scf-control-label"><?=__('Link Text Position', 'shortcode-factory')?> <span class="optional scf-right"><?=__('(optional)', 'shortcode-factory')?></span></label>
			<select id="scf-control-position" name="scf-param-position" class="scf-control-select scf-param" data-param-name="position">
				<option value="">Insert 'Link Text' Only (default)</option>
				<option value="before">Insert 'Link Text' Before Post Title</option>
				<option value="after">Insert 'Link Text' After Post Title</option>
			</select>
		</div>

		<div class="scf-control">
			<label for="scf-control-type" class="scf-control-label"><?=__('Output Type', 'shortcode-factory')?> <span class="optional scf-right"><?=__('(optional)', 'shortcode-factory')?></span></label>
			<select id="scf-control-type" name="scf-param-type" class="scf-control-select scf-param" data-param-name="type">
				<option value="">-- Select --</option>
				<option value="url">URL Only</option>
				<option value="link">Link (default)</option>
			</select>
		</div>
		
		<div class="scf-control separator">
			<button type="button" id="scf-action-back" class="button button-large scf-control-button">&lt; <?=__('Back', 'shortcode-factory')?></button>
			<button type="button" id="scf-action-insert" class="button button-primary button-large scf-control-button scf-right"><?=__('Insert', 'shortcode-factory')?></button>
		</div>
	</div>
</div>

<script type="text/javascript">
	jQuery(document).ready(function($){
		scf_go_back();
		scf_insert();
	});
</script>
