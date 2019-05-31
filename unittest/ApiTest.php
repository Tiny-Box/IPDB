<?php
// wangyanxiang@baixing.com

use Baixing\ChibiTools\Api;

class MoneyTest extends PHPUnit_Framework_TestCase {
	private $ip_known;
	private $ip_unknown;
	private $ip_chinese;

	function setUp() {
		$this->ip_chinese = [
			'北京' => [
				'202.96.0.133',
				'202.106.0.20',
				'202.106.196.115',
			],
			'青岛' => [
				'202.102.134.68',
			],
		];
		$this->ip_unknown = [
			'012.013.176.128', // 美国
			'129.071.000.000', // 美国
			'012.011.139.255', // 美国
			'012.107.033.225', // 美国
			'035.009.027.027', // 美国
			'110.225.105.003', // 印度
			'060.248.227.175', // 台湾
			'210.246.192.149', // 泰国
			'203.184.192.216', // 香港
			'218.189.215.194', // 香港
			'125.031.001.039', // 澳门

			'192.168.000.001', // 内网
			'172.016.000.001', // 内网
			'010.000.000.001', // 内网
		];
	}

	public function test_ip2city_unknown() {
		foreach ($this->ip_unknown as $ip) {
			$ipCityInfo = Api::getIpCityInfoCN($ip);
			$this->assertEquals($city_from_ip, null, "IP解析可能有错误：{国外或港澳台}, {$ip}");
		}
	}

	public function test_ip2city_chinese() {
		foreach ($this->ip_chinese as $city => $ips) {
			foreach ($ips as $ip) {
				$ipCityInfo = Api::getIpCityInfoCN($ip);
				$this->assertEquals($city, $ipCityInfo[2], "IP解析可能有错误：{$city}, {$ip}");
			}
		}
	}
}
