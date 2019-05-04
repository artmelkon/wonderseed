<?php

		if($page === '/index.php') {
			$root = '.';
		} else {
			$root = '..';
		}
	
		$root_php = $root.'/inc/php/';
		$root_php_components = $root.'/inc/php/components/';
		$root_css = $root.'/inc/css/';
		$root_js = $root.'/inc/js/';
		$root_img = $root.'/img/';
	
	
	$file_top_nav = $root_php.'top-nav.php';
	$file_mobile_nav = $root_php.'mobile-nav.php';
	$file_main_css = $root_css.'main.css';
	$file_title_section = $root_php.'title-section.php';
	$file_content = $root_php.'content.php';
	$file_functions_js = $root_js.'script.js';
	$file_header_tag = $root_php.'header-tag.php';
	$file_menu = $root_php_components.'menu.php';
	$file_section_one = $root_php.'section-one.php';
	$file_section_two = $root_php.'section-two.php';
	$file_sub_anime = $root_php.'sub-anim.php';
	$file_board_members = $root_php.'board-members.php';
	$file_team_lib = $root_js.'team-member-lib.js';
	$file_content_center = $root_php.'content-center.php';
	$file_animations_js = $root_js.'animations.js';
	$file_emotional_intelligence_js = $root_js.'emotional-intelligence.js';
	$file_favicon = $root_img.'favicon.png';


// site main menu
	$menu = (object) [
		'home' => (object) ['url' => '/', 'title' => 'home'],
		'om' => (object) ['url' => '/mission/', 'title' => 'our mission'],
		'ei' => (object) ['url' => '/emotional-intelligence/', 'title' => 'emotional intelligence'],
		'ot' => (object) ['url' => '/our-team/', 'title' => 'our team'],
		'bod' => (object) ['url' => '/board-of-directors/', 'title' => 'board of directors'],
		'rch' => (object) ['url' => '/right-choice/', 'title' => 'the right choice campaign'],
		'dp' => (object) ['url' => '#', 'title' => '- drug prevention'],
		'sp' => (object) ['url' => '#', 'title' => '- suicide prevention &amp; depression'],
		'dnt' => (object) ['url' => '/donate', 'title' => 'donate'],
		'cnt' => (object) ['url' => '/contact/', 'title' => 'contact us'],
		'rc' => (object) ['url' => '#', 'title' => 'resource center'],
		'pdf' => (object) ['url' => '#', 'title' => 'pdf files'],
		'kc' => (object) ['url' => '#', 'title' => 'kid\'s corner'],
		'frm' => (object) ['url' => '#', 'title' => 'forum'],
		'gme' => (object) ['url' => '/gamification/', 'title' => 'gamification of education'],
		'pos' => (object) ['url' => '/storytelling/', 'title' => 'the power of story telling'],
		'eyx' => (object) ['url' => '#', 'title' => 'express yourself campaign'],
		'wp' => (object) ['url' => '#', 'title' => 'our wonderseed partners'],
	];

