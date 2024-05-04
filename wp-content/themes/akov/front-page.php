<?php
get_header();
$flexible_content = get_field( 'flexible_content' );

if ( ! empty( $flexible_content ) ) {
	foreach ( $flexible_content as $section ) {
		get_template_part( 'parts/home/' . $section['acf_fc_layout'], null, $section );
	}
}

get_footer();