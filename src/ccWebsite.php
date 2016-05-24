<?php
/*
 * ComputerCraft Web Stats
 * @copyright 2016
 * @author lorenzo at poixson.com
 * @link http://poixson.com/
 */
namespace pxn\ccWebStats;

use pxn\phpUtils\Config;
use pxn\phpUtils\Defines;


class ccWebsite extends \pxn\phpUtils\portal\Website {



	public static function autoinit() {
		return new self();
	}
	public function __construct() {
		parent::__construct();
		// fav icon
		Config::set(Defines::KEY_SITE_TITLE, '{pagetitle} - PoiXson');
	}



}
