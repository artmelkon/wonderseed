<?php
	
    if($page === '/index.php') {
		$root = './inc/php/';
		$root_css = './inc/css/';
		$root_js = './inc/js/';
		$root_img = './img/';
	} else {
		$root = '../inc/php/';
		$root_css = '../inc/css/';
		$root_js = '../inc/js/';
		$root_img = '../img/';
	}
	
	$file_top_nav = $root.'top-nav.php';
	$file_mobile_nav = $root.'mobile-nav.php';
	$file_main_css = $root_css.'main.css';
	$file_title_section = $root.'title-section.php';
	$file_content = $root.'content.php';
	$file_functions_js = $root_js.'script.js';
	$file_header_tag = $root.'header-tag.php';
	$file_menu = $root.'menu.php';
	$file_section_one = $root.'section-one.php';
	$file_section_two = $root.'section-two.php';
	$file_sub_anime = $root.'sub-anim.php';
	$file_board_members = $root.'board-members.php';
	$file_team_lib = $root_js.'team-member-lib.js';
	$file_content_center = $root.'content-center.php';
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

