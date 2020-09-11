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

Add migration path in your console config file:

```php
'controllerMap' => [
    ...
    'migrate' => [
    ...
        'migrationPath' => [
            ...
            '@vendor/it-yakutia/banner/src/migrations',
        ],
    ],
]
```

Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= Url::toRoute(['/banner/back/index']); ?>
```

Add RBAC roles:

```
banner
```

Add fixtures:

```sh
php yii fixture Banner --namespace='ityakutia\banner\tests\fixtures'
```

Add fixtures in docker:

```sh
php yii fixture Banner --namespace='ityakutia\banner\tests\fixtures' --interactive=0
```
