#Website read newspaper use RSS crawl data 

- Contact me : lamnguyen24062000@gmail.com
- FB: https://www.facebook.com/lampro.nguyen.9/
- Deploy code: https://tpl-express.herokuapp.com/

# TPLExpress-PHP Sample Code
**[lamit47](https://github.com/lamit47/)

## Requirements
- PHP 5.3 and above.
- Built-in libcurl support.


### 1. Using Composer
You can install the library via [Composer](https://getcomposer.org/). If you don't already have Composer installed, first install it by following one of these instructions depends on your OS of choice:
* [Composer installation instruction for Windows](https://getcomposer.org/doc/00-intro.md#installation-windows)
* [Composer installation instruction for Mac OS X and Linux](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx)

After composer is installed, Then run the following command to install the Omise-PHP library:

```
php composer.phar install
```

Please see configuration section below for configuring your Omise Keys.

### 2. Manually

If you're not using Composer, you can also clone `omise/omise-php` repository into the directory of sample code that you just installed this repository:

```
git clone https://github.com/lamit47/TPLExpress
```

However, using Composer is recommended as you can easily keep the library up-to-date. After cloning the repository, you need to replace line 3 in `config.php` from
```php
3: require_once 'vendor/autoload.php';
```

to

```php
3: require_once 
```

## Configuration
After you installed `omise-php` library already.
So, we have 2 files that you need to change:
- `examples/php`/index.php
- `examples/php`/config.php 

## Folder Structure
In this example, we have some files and folder that you need to concentrate about, as follows:
- `examples/php`/index.php
- `examples/php`/services/*

### services/*
This folder contains sample php files that include `omise-php` library. It will show you how to integrate `omise-php` library into your php file and use it.

## Usage
Run `index.php` in your browser.

## Tips
You are not allowed to send the card data to your servers.
