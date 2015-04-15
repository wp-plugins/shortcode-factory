<?php
function scf_get_post($post_slug_or_id, $return_data="title", $params=array()) {
	//global $post;

	if(is_array($params) && sizeof($params) > 0) {
		extract($params);
	}

	$args = array(
		'post_status'    => 'publish',
		'posts_per_page' => 1
	);

	$id = "";
	$slug = "";

	if(is_numeric($post_slug_or_id)) {
		$id = $post_slug_or_id;
		$args["p"] = $id;
	} else {
		$slug = $post_slug_or_id;
		$args["name"] = $slug;
	}

	$scf_post = new WP_Query($args);
	$return_data = strtolower($return_data);
	$data = "";

	while($scf_post->have_posts()) {
		$scf_post->the_post();
		$post_id = get_the_ID();

	    switch($return_data) {
	    	case "id":
	    		$data = $post_id;
	    		break;

	    	case "title":
	    		$data = get_the_title($post_id);
	    		break;

	    	case "content":
	    		$data = apply_filters("the_content", get_the_content());
	    		break;

	    	case "excerpt":
	    		$data = get_the_excerpt();
	    		break;

	    	case "meta":
	    		if($type == "post-date") {
	    			$data = get_the_date($format);
	    		}

	    		if($type == "post-modified") {
	    			$data = get_the_modified_date($format);
	    		}

	    		if($type == "comments-feed") {
	    			// format: atom, rdf, rss, rss2
	    			$data = get_post_comments_feed_link($format);
	    		}

	    		break;

	    	case "permalink":
	    		$data = get_permalink();
	    		break;

	    	case "author":
	    		$data = array_to_list(get_the_author_meta($type));
	    		break;

	    	case "image":
	    		if($type == "id") {
	    			$data = get_post_thumbnail_id();
	    		}

	    		if($type == "url") {
	    			$tmpdata = wp_get_attachment_image_src(get_post_thumbnail_id(), $size);
	    			$data = $tmpdata[0];
	    		}

	    		if($type == "html") {
	    			$data = get_the_post_thumbnail($post_id, $size);
	    		}

	    		break;

	    	case "field":
	    		$data = array_to_list(get_post_meta($post_id, $name, true), $separator);
	    		break;

			case "category":
				$categories = get_the_category($post_id);
				$output = array();

				if($categories) {
					foreach($categories as $category) {
						if($type == "link") {
							$output[] = '<a href="'.get_category_link($category->term_id).'">'.$category->name.'</a>';
						} else {
							$output[] = $category->name;
						}
					}
				}

				$data = array_to_list($output, $separator);
				break;

			case "tag":
				$tags = get_the_terms($post_id, "post_tag");
				$output = array();

				if($tags) {
					foreach($tags as $tag) {

						if($type == "link") {
							$output[] = '<a href="'.get_term_link($tag).'">'.$tag->name.'</a>';
						} else {
							$output[] = $tag->name;
						}
					}
				}

				$data = array_to_list($output, $separator);
				break;

			case "taxonomy":
				$terms = get_the_terms($post_id, $taxonomy);
				$output = array();

				if($terms) {
					foreach($terms as $term) {

						if($type == "link") {
							$output[] = '<a href="'.get_term_link($term).'">'.$term->name.'</a>';
						} else {
							$output[] = $term->name;
						}
					}
				}

				$data = array_to_list($output, $separator);
				break;

			case "attachment":
				$children = get_posts(
					array(
						'post_parent' => $post_id,
						'post_type' => 'attachment'
					)
				);

				$output = array();
				$childId = 0;

				foreach($children as $child) {
					$childId = $child->ID;

					if($type == "link") {
						$output[] = get_permalink($childId);
					} elseif($type == "title") {
						$output[] = get_the_title($childId);
					} elseif($type == "id") {
						$output[] = $childId;
					} else { // linktitle
						$output[] = '<a href="'.get_permalink($childId).'">'.get_the_title($childId).'</a>';
					}
				}


				$data = array_to_list($output, $separator);
				break;

	    	default:
	    		$data = get_the_title($post_id);
	    		break;
	    }
	}

	wp_reset_postdata();

	return $data;
}

/**
 * Returns a comma separated list, if $arr is an array, otherwise returns $arr.
 *
 * @param Array|String $arr Single dimension, index based array
 */
function array_to_list($arr, $separator=", ") {
	$ret = $arr;

	// if it's serialized?
	if(is_string($arr)) {
		$ser = unserialize($arr);

		if(is_array($ser)) {
			$arr = $ser;
		}
	}

	if(is_array($arr)) {
		$ret = implode($separator, $arr);
	}

	return $ret;
}