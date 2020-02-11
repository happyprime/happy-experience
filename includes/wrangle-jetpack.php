<?php

namespace HappyExperience\Wrangle\Jetpack;

add_filter( 'jetpack_tools_to_include', __NAMESPACE__ . '\reduce_tools' );

/**
 * Remove the automatic registration of many theme tools provided in
 * the Jetpack plugin.
 */
function reduce_tools() {
	return array(
		'verification-tools/verification-tools-utils.php',
	);
}
