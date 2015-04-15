<?php
/*
 * File: /core/shortcodes.php
 *
 * Built-in short codes, provided by the plugin
 *
 * Notes:
 * 		- Each short code callback must start with scf_shortcode_
 */

/*
 * $scf_builtin_shortcodes
 *
 * This global array holds a register of all built-in short codes.
 * Format:
 * 		1. Short code Slug
 * 		2. Callback Function
 * 		3. Short code Title (Display Name) for UI
 * 		4. Short code Description for UI
 *		5. true=Short code has a UI for parameters; false=(default) Short code has no UI
 */
global $scf_builtin_shortcodes;

$scf_builtin_shortcodes = array();

// Posts/Pages
$scf_builtin_shortcodes['scf-post-id'] = array('scf-post-id', 'scf_shortcode_post_id', __('Post ID', 'shortcode-factory'), __('Prints ID of the post.', 'shortcode-factory'), true);
$scf_builtin_shortcodes['scf-post-title'] = array('scf-post-title', 'scf_shortcode_post_title', __('Post Title', 'shortcode-factory'), __('Prints title of the post.', 'shortcode-factory'), true);
$scf_builtin_shortcodes['scf-post-content'] = array('scf-post-content', 'scf_shortcode_post_content', __('Post Content', 'shortcode-factory'), __('Prints content of the post.', 'shortcode-factory'), true);
$scf_builtin_shortcodes['scf-post-excerpt'] = array('scf-post-excerpt', 'scf_shortcode_post_excerpt', __('Post Excerpt', 'shortcode-factory'), __('Prints excerpt of the post.', 'shortcode-factory'), true);
$scf_builtin_shortcodes['scf-post-meta'] = array('scf-post-meta', 'scf_shortcode_post_meta', __('Post Meta', 'shortcode-factory'), __('Prints several metadata of the post.', 'shortcode-factory'), true);
$scf_builtin_shortcodes['scf-post-permalink'] = array('scf-post-permalink', 'scf_shortcode_post_permalink', __('Post Permalink', 'shortcode-factory'), __('Prints permalink of the post.', 'shortcode-factory'), true);
$scf_builtin_shortcodes['scf-post-author'] = array('scf-post-author', 'scf_shortcode_post_author', __('Post Author', 'shortcode-factory'), __('Prints information about the post author.', 'shortcode-factory'), true);
$scf_builtin_shortcodes['scf-post-image'] = array('scf-post-image', 'scf_shortcode_post_image', __('Post Featured Image', 'shortcode-factory'), __('Prints featured image of the post.', 'shortcode-factory'), true);
$scf_builtin_shortcodes['scf-post-field'] = array('scf-post-field', 'scf_shortcode_post_field', __('Post Custom Field', 'shortcode-factory'), __('Prints a custom field of the post.', 'shortcode-factory'), true);
$scf_builtin_shortcodes['scf-post-category'] = array('scf-post-category', 'scf_shortcode_post_category', __('Post Categories', 'shortcode-factory'), __('Prints categories of the post.', 'shortcode-factory'), true);
$scf_builtin_shortcodes['scf-post-tag'] = array('scf-post-tag', 'scf_shortcode_post_tag', __('Post Tags', 'shortcode-factory'), __('Prints tags of the post.', 'shortcode-factory'), true);
$scf_builtin_shortcodes['scf-post-taxonomy'] = array('scf-post-taxonomy', 'scf_shortcode_post_taxonomy', __('Post Custom Taxonomies', 'shortcode-factory'), __('Prints custom taxonomies of the post.', 'shortcode-factory'), true);
$scf_builtin_shortcodes['scf-post-next'] = array('scf-post-next', 'scf_shortcode_post_next', __('Next Post', 'shortcode-factory'), __('Prints link to the next post.', 'shortcode-factory'), true);
$scf_builtin_shortcodes['scf-post-prev'] = array('scf-post-prev', 'scf_shortcode_post_prev', __('Previous Post', 'shortcode-factory'), __('Prints link to the previous post.', 'shortcode-factory'), true);
$scf_builtin_shortcodes['scf-post-attachments'] = array('scf-post-attachments', 'scf_shortcode_post_attachments', __('Post Attachments', 'shortcode-factory'), __('Prints post attachments.', 'shortcode-factory'), true);

add_action('init', 'scf_register_builtin_shortcodes');

/* Shortcode Callbacks */

/**
 * [scf-post-id] returns the ID of the post.
 *
 */
function scf_shortcode_post_id($atts) {
	extract(
		shortcode_atts(
			array(
				"slug" => ""
			),
			$atts, "scf_shortcode_post_id"
		)
	);

	if(!empty($slug)) {
		return scf_get_post($slug, "id");
	} else {
		return get_the_ID();
	}
}

/**
 * [scf-post-title] returns the title of the post.
 *
 */
function scf_shortcode_post_title($atts) {
	extract(
		shortcode_atts(
			array(
				"id" => "",
				"slug" => ""
			),
			$atts, "scf_shortcode_post_title"
		)
	);

	if(!empty($slug)) {
		return scf_get_post($slug);
	} else {
		return get_the_title($id);
	}
}

/**
 * [scf-post-content] returns the content of the post.
 *
 */
function scf_shortcode_post_content($atts) {
	extract(
		shortcode_atts(
			array(
				"id" => "",
				"slug" => ""
			),
			$atts, "scf_shortcode_post_content"
		)
	);

	if(!empty($slug)) {
		return scf_get_post($slug, "content");
	} elseif(!empty($id)) {
		return scf_get_post($id, "content");
	} else {
		return get_the_content();
	}
}

/**
 * [scf-post-excerpt] returns the excerpt of the post.
 *
 */
function scf_shortcode_post_excerpt($atts) {
	extract(
		shortcode_atts(
			array(
				"id" => "",
				"slug" => ""
			),
			$atts, "scf_shortcode_post_excerpt"
		)
	);

	if(!empty($slug)) {
		return scf_get_post($slug, "excerpt");
	} elseif(!empty($id)) {
		return scf_get_post($id, "excerpt");
	} else {
		return get_the_excerpt();
	}
}

/**
 * [scf-post-meta] returns the several meta of the post.
 *
 * publish date/time
 * modified date/time
 * comment RSS link
 */
function scf_shortcode_post_meta($atts) {
	extract(
		shortcode_atts(
			array(
				"id" => "",
				"slug" => "",
				"type" => "post-date",
				"format" => ""
			),
			$atts, "scf_shortcode_post_meta"
		)
	);

	$params = array(
		"type" => $type,
		"format" => $format
	);

	if(!empty($slug)) {
		return scf_get_post($slug, "meta", $params);
	} elseif(!empty($id)) {
		return scf_get_post($id, "meta", $params);
	} else {
		return scf_get_post(get_the_ID(), "meta", $params);
	}
}

/**
 * [scf-post-permalink] returns the permalink of the post.
 *
 */
function scf_shortcode_post_permalink($atts) {
	extract(
		shortcode_atts(
			array(
				"id" => "",
				"slug" => ""
			),
			$atts, "scf_shortcode_post_permalink"
		)
	);

	if(!empty($slug)) {
		return scf_get_post($slug, "permalink");
	} else {
		return get_permalink($id);
	}
}

/**
 * [scf-post-author] returns the several meta of the post author.
 *
 * See https://codex.wordpress.org/Function_Reference/get_the_author_meta#Parameters
 */
function scf_shortcode_post_author($atts) {
	extract(
		shortcode_atts(
			array(
				"id" => "",
				"slug" => "",
				"type" => "display_name"
			),
			$atts, "scf_shortcode_post_author"
		)
	);

	$params = array(
		"type" => $type
	);

	if(!empty($slug)) {
		return scf_get_post($slug, "author", $params);
	} elseif(!empty($id)) {
		return scf_get_post($id, "author", $params);
	} else {
		return array_to_list(get_the_author_meta($type));
	}
}

/**
 * [scf-post-image] returns the featured image of the post.
 *
 */
function scf_shortcode_post_image($atts) {
	extract(
		shortcode_atts(
			array(
				"id" => "",
				"slug" => "",
				"type" => "url",
				"size" => "thumbnail"
			),
			$atts, "scf_shortcode_post_image"
		)
	);

	$params = array(
		"type" => $type,
		"size" => $size
	);

	if(!empty($slug)) {
		return scf_get_post($slug, "image", $params);
	} elseif(!empty($id)) {
		return scf_get_post($id, "image", $params);
	} else {
		return scf_get_post(get_the_ID(), "image", $params);
	}
}

/**
 * [scf-post-field] returns the custom field of the post.
 *
 */
function scf_shortcode_post_field($atts) {
	extract(
		shortcode_atts(
			array(
				"id" => "",
				"slug" => "",
				"name" => "",
				"separator" => ","
			),
			$atts, "scf_shortcode_post_field"
		)
	);

	$params = array(
		"name" => $name,
		"separator" => $separator
	);

	if(!empty($slug)) {
		return scf_get_post($slug, "field", $params);
	} elseif(!empty($id)) {
		return scf_get_post($id, "field", $params);
	} else {
		return scf_get_post(get_the_ID(), "field", $params);
	}
}

/**
 * [scf-post-category] returns the categories of the post.
 *
 */
function scf_shortcode_post_category($atts) {
	extract(
		shortcode_atts(
			array(
				"id" => "",
				"slug" => "",
				"type" => "link",
				"separator" => ","
			),
			$atts, "scf_shortcode_post_category"
		)
	);

	$params = array(
		"type" => $type,
		"separator" => $separator
	);

	if(!empty($slug)) {
		return scf_get_post($slug, "category", $params);
	} elseif(!empty($id)) {
		return scf_get_post($id, "category", $params);
	} else {
		return scf_get_post(get_the_ID(), "category", $params);
	}
}

/**
* [scf-post-tag] returns the tags of the post.
 *
 */
function scf_shortcode_post_tag($atts) {
	extract(
		shortcode_atts(
			array(
				"id" => "",
				"slug" => "",
				"type" => "link",
				"separator" => ","
			),
			$atts, "scf_shortcode_post_tag"
		)
	);

	$params = array(
		"type" => $type,
		"separator" => $separator
	);

	if(!empty($slug)) {
		return scf_get_post($slug, "tag", $params);
	} elseif(!empty($id)) {
		return scf_get_post($id, "tag", $params);
	} else {
		return scf_get_post(get_the_ID(), "tag", $params);
	}
}

/**
 * [scf-post-taxonomy] returns the custom taxonomies of the post.
 *
 */
function scf_shortcode_post_taxonomy($atts) {
	extract(
		shortcode_atts(
			array(
				"id" => "",
				"slug" => "",
				"taxonomy" => "",
				"type" => "link",
				"separator" => ","
			),
			$atts, "scf_shortcode_post_taxonomy"
		)
	);

	$params = array(
		"taxonomy" => $taxonomy,
		"type" => $type,
		"separator" => $separator
	);

	if(!empty($slug)) {
		return scf_get_post($slug, "taxonomy", $params);
	} elseif(!empty($id)) {
		return scf_get_post($id, "taxonomy", $params);
	} else {
		return scf_get_post(get_the_ID(), "taxonomy", $params);
	}
}

/**
 * [scf-post-next] returns the link to the next post.
 *
 */
function scf_shortcode_post_next($atts) {
	extract(
		shortcode_atts(
			array(
				"label" => "",
				"position" => "",
				"type" => "link"
			),
			$atts, "scf_shortcode_post_next"
		)
	);

	$next_post = get_adjacent_post(true, '', false);
	$output = "";

	if(is_a($next_post, 'WP_Post')) {
		$post_title = get_the_title($next_post->ID);

		if(empty($label)) {
			$label = $post_title;
		} else {
			if(!empty($position)) {
				switch($position) {
					case "before":
						$label = $label.$post_title;
						break;

					case "after":
						$label = $post_title.$label;
						break;
				}
			}

			$label = html_entity_decode($label);
		}

		if($type == "link") {
			$output = '<a href="'.get_permalink($next_post->ID).'">'.$label.'</a>';
		} else {
			$output = get_permalink($next_post->ID);
		}
	}

	return $output;
}

/**
 * [scf-post-prev] returns the link to the previous post.
 *
 */
function scf_shortcode_post_prev($atts) {
	extract(
		shortcode_atts(
			array(
				"label" => "",
				"position" => "",
				"type" => "link"
			),
			$atts, "scf_shortcode_post_prev"
		)
	);

	$prev_post = get_adjacent_post(true, '', true);
	$output = "";

	if(is_a($prev_post, 'WP_Post')) {
		$post_title = get_the_title($prev_post->ID);

		if(empty($label)) {
			$label = $post_title;
		} else {
			if(!empty($position)) {
				switch($position) {
					case "before":
						$label = $label.$post_title;
					break;

					case "after":
						$label = $post_title.$label;
						break;
				}
			}

			$label = html_entity_decode($label);
		}

		if($type == "link") {
			$output = '<a href="'.get_permalink($prev_post->ID).'">'.$label.'</a>';
		} else {
			$output = get_permalink($prev_post->ID);
		}
	}

	return $output;
}

/**
 * [scf-post-children] returns child posts of specified post.
 *
 */
function scf_shortcode_post_attachments($atts) {
	extract(
		shortcode_atts(
			array(
				"id" => "",
				"slug" => "",
				"type" => "linktitle", // link, title, linktitle, id
				"separator" => ","
			),
			$atts, "scf_shortcode_post_attachments"
		)
	);

	$params = array(
		"id" => $id,
		"slug" => $slug,
		"type" => $type,
		"separator" => $separator
	);

	if(!empty($slug)) {
		return scf_get_post($slug, "attachment", $params);
	} elseif(!empty($id)) {
		return scf_get_post($id, "attachment", $params);
	} else {
		return scf_get_post(get_the_ID(), "attachment", $params);
	}
}
