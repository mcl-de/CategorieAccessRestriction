<?php

function userCanAccessCategory($title, $user, $action, $result) {
	global $wgGroupPermissions;
	global $wgLang;
	global $wgCARPattern;

	$return = true;
	//$noContent = false;
	$canAccessCategories = true;

	// Page has categories
	if (count($title->getParentCategories()) > 0) {

		// walk page categories
		foreach ($title->getParentCategories() as $key => $value) {
			// get category
			$category = preg_split('/:/', $key);
			$category = strtolower($category[1]);

			// match pattern but has no access
			if (preg_match($wgCARPattern, $category) && !(in_array($category, $user->getGroups()))) {
				error_log('Has no access to group: '.$category);
				$return = false;
			}
		}
	}

	return $return;
}

$wgHooks['userCan'][] = 'userCanAccessCategory';

?>