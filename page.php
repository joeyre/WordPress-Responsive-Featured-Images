<?php if ( has_post_thumbnail() ) {
$image_src = wp_get_attachment_image_src( get_post_thumbnail_id(),'your-image-name' );
echo '<img width="100%" src="' . $image_src[0] . '">';} ?>
