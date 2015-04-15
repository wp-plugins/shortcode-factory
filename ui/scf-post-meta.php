<div class="scf-shortcode-wrapper">
	<h2 class="scf-shortcode-title" data-shortcode="scf-post-meta">[scf-post-meta]</h2>
	<p class="scf-shortcode-desc"><?=__('Outputs metadata of the post. If ID or Slug is provided, outputs the metadata of that particular post.', 'shortcode-factory')?></p>
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
			<label for="scf-control-type" class="scf-control-label"><?=__('Metadata Type', 'shortcode-factory')?> <span class="optional scf-right"><?=__('(optional)', 'shortcode-factory')?></span></label>
			<select id="scf-control-type" name="scf-param-type" class="scf-control-select scf-param" data-param-name="type">
				<option value="">-- Select --</option>
				<option value="post-date">Publish Date (default)</option>
				<option value="post-modified">Modified Date</option>
				<option value="comments-feed">Comments Feed Link</option>
			</select>
		</div>

		<div class="scf-control">
			<label for="scf-control-format" class="scf-control-label"><?=__('Format', 'shortcode-factory')?> <span class="optional scf-right"><?=__('(optional)', 'shortcode-factory')?></span></label>
			<input type="text" id="scf-control-format" name="scf-param-format" class="scf-control-text scf-param scf-opt-a" data-param-name="format" />
			<span class="notes scf-opt-a"><?=__('<a href="https://codex.wordpress.org/Formatting_Date_and_Time" target="_blank">PHP Date Format</a> or default as Settings -> General -> Date Format', 'shortcode-factory')?></span>

			<select id="scf-control-format" name="scf-param-format" class="scf-control-select scf-param scf-opt-b" data-param-name="format" style="display:none;">
				<option value="">-- Select --</option>
				<option value="atom">Atom</option>
				<option value="rdf">RDF</option>
				<option value="rss">RSS</option>
				<option value="rss2">RSS 2.0 (default)</option>
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

			if(v == "" || v == "post-date" || v == "post-modified") {
				$(".scf-opt-a").show();
				$(".scf-opt-b").hide();
				$(".scf-opt-b").val("");
			} else {
				$(".scf-opt-a").hide();
				$(".scf-opt-b").show();
				$(".scf-opt-a").val("");
			}
		});

		scf_go_back();
		scf_insert();
	});
</script>
