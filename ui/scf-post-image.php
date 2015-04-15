<div class="scf-shortcode-wrapper">
	<h2 class="scf-shortcode-title" data-shortcode="scf-post-image">[scf-post-image]</h2>
	<p class="scf-shortcode-desc"><?=__('Outputs featured image of the post. If ID or Slug is provided, outputs the featured image of that particular post.', 'shortcode-factory')?></p>
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
			<label for="scf-control-type" class="scf-control-label"><?=__('Output Type', 'shortcode-factory')?> <span class="optional scf-right"><?=__('(optional)', 'shortcode-factory')?></span></label>
			<select id="scf-control-type" name="scf-param-type" class="scf-control-select scf-param" data-param-name="type">
				<option value="">-- Select --</option>
				<option value="id">ID</option>
				<option value="url">URL (default)</option>
				<option value="html">HTML Image Element</option>
			</select>
		</div>

		<div class="scf-control scf-toggle">
			<label for="scf-control-size" class="scf-control-label"><?=__('Format', 'shortcode-factory')?> <span class="optional scf-right"><?=__('(optional)', 'shortcode-factory')?></span></label>
			<select id="scf-control-size" name="scf-param-size" class="scf-control-select scf-param scf-opt-a" data-param-name="size">
				<option value="">-- Select --</option>
				<option value="thumbnail">Thumbnail (default)</option>
				<option value="medium">Medium</option>
				<option value="full">Large / Full</option>
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
		$("#scf-control-type").on("change", function(e) {
			var v = $(this).val();

			if(v == "" || v == "url" || v == "html") {
				$(".scf-toggle").show();
			} else {
				$(".scf-toggle").hide();
				$(".scf-opt-a").val("");
			}
		});

		scf_go_back();
		scf_insert();
	});
</script>
