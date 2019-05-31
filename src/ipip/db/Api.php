<?php

/**
 * @site https://www.ipip.net
 * @desc Parse IP library in ipdb format
 * @copyright IPIP.net
 */

namespace ipip\db;

class Api
{
	const DB_NAME = 'ipipfree.ipdb';

	public static function getCityCNName($ip) {
		$dbPath = __DIR__ . '../../../ipipfree.ipdb';
		$city = new ipip\db\City($dbPath);
		return $city->find($ip, 'CN');
	}
}
