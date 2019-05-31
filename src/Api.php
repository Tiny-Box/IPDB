<?php

/**
 * @site https://www.ipip.net
 * @desc Parse IP library in ipdb format
 * @copyright IPIP.net
 */

namespace Baixing\ChibiTools;

class Api
{
	const DB_NAME = 'ipipfree.ipdb';

	public static function getIpCityInfoCN($ip) {
		$dbPath = __DIR__ . '/../' . self::DB_NAME;
		try {
			$city = new City($dbPath);
			$ipCityInfo = $city->find($ip, 'CN');
		} catch (\Exception $e) {
			return null;
		}

		return $ipCityInfo;
	}
}
