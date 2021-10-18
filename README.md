## laravel-cpanel-api
Cpanel Api Integration with laravel 8

### Contents
- [Installation Guide](#installation-guide)
- [Configuration](#configuration)
- [Usage](#usage)

### Installation Guide

To install this package, you can run this code via your terminal
```shell
	composer require staffkojinpro/laravel-cpanel-api:~1.0
```
Or update your `composer.json` by adding this line
```json
	"staffkojinpro/laravel-cpanel-api":"~1.0"
```
Then, run this code
```shell
	composer update
```
After install it, you have to add this line on your `app/config/app.php` on aliases lines.
```php
	'CP' => staffkojinpro\cPanelApi::class,
```

### Configuration

In this package, it only using hash as its authentication. It's the safer way than using your root plain password. First, run this command

In env File
CPANEL_HOST="CpanelSite.com"
CPANEL_PORT=2083
CPANEL_USER="UserInCpanel"
CPANEL_PASSWORD="Secret999"


### Usage

For example, if you are trying to get some list of accounts, you can run this.
```php
	<?php
use CP as Cpanel;

	Route::get('cpanel',function(){
  
    $api = new Cpanel;
		return $api->getLocalQuota();
    
	});
```
For more information you can go to this links [Guide to Cpanel API 2](https://documentation.cpanel.net/display/SDK/Guide+to+cPanel+API+2)
