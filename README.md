Baixing IP to City Library
===
(Maintained by [箱子](mailto:wangyanxiang@baixing.com))

镐京内使用的通过 IP 查询 城市 的 PHP 基础库

### 使用方法
```php
/**
 * return city name of the given ip or null if not found
 * @param string $ip IP address in string format
 * @return Array|null $ipCityInfo
 */
$city = Baixing\Util\IP::getIpCityInfoCN($ip);

$city = [
    0 => '中国',
    1 => '陕西',
    2 => '西安'
];
```

### 目录结构

```
.
├──composer.json
├──src\
└──unittest\
```

#### `src` 目录

IP 查询源码

#### `unittest` 目录

Unit test，可以用以下命令运行
```bash
# at project root folder
composer install
vendor/bin/phpunit --bootstrap vendor/autoload.php unittest/
```
