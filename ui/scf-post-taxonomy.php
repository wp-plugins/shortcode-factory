<div class="scf-shortcode-wrapper">
	<h2 class="scf-shortcode-title" data-shortcode="scf-post-taxonomy">[scf-post-taxonomy]</h2>
	<p class="scf-shortcode-desc"><?=__('Outputs custom taxonomies of the post. If ID or Slug is provided, outputs the tags of that particular post.', 'shortcode-factory')?></p>
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
			<label for="scf-control-taxonomy" class="scf-control-label"><?=__('Custom Taxonomy Slug', 'shortcode-factory')?> <span class="required scf-right"><?=__('(required)', 'shortcode-factory')?></span></label>
			<input type="text" id="scf-control-taxonomy" name="scf-param-taxonomy" class="scf-control-text scf-param" data-param-name="taxonomy" data-required="1" placeholder="This field is required" />
		</div>

		<div class="scf-control">
			<label for="scf-control-type" class="scf-control-label"><?=__('Output Type', 'shortcode-factory')?> <span class="optional scf-right"><?=__('(optional)', 'shortcode-factory')?></span></label>
			<select id="scf-control-type" name="scf-param-type" class="scf-control-select scf-param" data-param-name="type">
				<option value="">-- Select --</option>
				<option value="text">Text</option>
				<option value="link">Link (default)</option>
			</select>
		</div>

		<div class="scf-control">
			<label for="scf-control-separator" class="scf-control-label"><?=__('Separator', 'shortcode-factory')?> <span class="optional scf-right"><?=__('(optional)', 'shortcode-factory')?></span></label>
			<input type="text" id="scf-control-separator" name="scf-param-separator" class="scf-control-text scf-param" data-param-name="separator" />
			<span class="notes"><?=__('By default multiple items are separated with a comma.', 'shortcode-factory')?></span>
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
