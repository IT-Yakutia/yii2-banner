Banner service for yii2
=====================
Banner server for yii2

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run
```sh
php composer.phar require --prefer-dist it-yakutia/yii2-banner "*"
```
or add
```json
"it-yakutia/yii2-banner": "*"
```
to the require section of your `composer.json` file.

Add Module in backend config `main.php`:
```php
return [
    ...
    'modules' => [
        ...
        'banner' => \ityakutia\banner\Module::class,
        ...
    ],
    ...
];
```

In console config `main.php` add `migrationPath` value in `controllerMap` `migration` section:
```php
return [
    ...
    'controllerMap' => [
        ...
	    'migrate' => [
		    'class' => \yii\console\controllers\MigrateController::class,
		    'migrationPath' => [
				'@console/migrations',
				...
			    '@ityakutia/banner/migrations',
			    ...
		    ],
	    ],
    ],
```
And just run the command:
```sh
php yii migrate
```

Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= Url::toRoute(['/banner/back/index']); ?>
```

Fixtures
--------

Add fixtures:

```sh
php yii fixture Banner --namespace='ityakutia\banner\tests\fixtures'
```

Add fixtures in docker:

```sh
php yii fixture Banner --namespace='ityakutia\banner\tests\fixtures' --interactive=0
```
