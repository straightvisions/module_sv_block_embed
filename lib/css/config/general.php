<?php
	echo $_s->build_css(
		is_admin() ? '.editor-styles-wrapper .wp-block-embed' : '.sv100_sv_content_wrapper article .wp-block-embed',
		array_merge(
			$module->get_setting('padding')->get_css_data('padding'),
			$module->get_setting('margin')->get_css_data(),
			$module->get_setting('border')->get_css_data()
		)
	);