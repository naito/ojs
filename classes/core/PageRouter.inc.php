<?php

/**
 * @file classes/core/PageRouter.inc.php
 *
 * Copyright (c) 2014-2018 Simon Fraser University
 * Copyright (c) 2003-2018 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class PageRouter
 * @ingroup core
 *
 * @brief Class providing OJS-specific page routing.
 */

import('lib.pkp.classes.core.PKPPageRouter');

class PageRouter extends PKPPageRouter {

	/**
	 * get the cacheable pages
	 * @return array
	 */
	function getCacheablePages() {
		return array('about', 'announcement', 'help', 'index', 'information', 'rt', 'issue', '');
	}
}


