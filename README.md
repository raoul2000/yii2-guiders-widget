yii2-guiders-widget
==========================
Wrapper around "Guiders JS" jQuery plugin, "*a user experience design pattern for introducing users to a web application*". 

Check out the  [Home page](http://www.jeffpickhardt.com/guiders/) of the Plugin.

> Please note that this extension does not provide any aditionnal feature than the one available in the wrapped plugin. 
> It has no other dependency than the [Yii2 Framework](http://www.yiiframework.com/)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist raoul2000/yii2-guiders-widget "*"
```

or add

```
"raoul2000/yii2-guiders-widget": "*"
```

to the require section of your `composer.json` file.


Usage
-----
This is an example no how to use this extension once it is installed. Let's create a 3 steps tour :

```php
<?php 

// creates the first guider

raoul2000\widget\guiders\Guiders::widget([
	'show' => true,
	'pluginOptions' => [
		'buttons' => [['name' => "Next"]],
		'description' => "<b>Guiders</b> are a user interface design pattern for introducing features " 
			. " of software. This dialog box, for example, is the first in a series of guiders " 
			. " that together make up a guide.",
		'id' => "first",
		'next' => "second",
		'overlay' => true,
		'title' => "Welcome to Guiders.js!",
		'closeOnEscape' => true,
		'xButton' => true,
		'width' => 500
	]
]);


// creates the second guider. Note that 'show' is false by default.

raoul2000\widget\guiders\Guiders::widget([
	'pluginOptions' => [
		'buttons' => [['name' => "Next"]],
		'description' => "This is an intresting lorem ipsum colomn or what !",
		'id' => 'second',
		'next' => 'third',
		'overlay' => true,
		'title' => "Focus",
		'closeOnEscape' => true,
		'xButton' => true,
		'width' => 500,
		'attachTo'  => '#focusHere',
		'autoFocus' => true,
		'highlight' => '#focusHere',
		'position' => 6
	]
]);


// creates the third guider. 

raoul2000\widget\guiders\Guiders::widget([
	'pluginOptions' => [
		'buttons' => [
			[
				'name' => "Done",
				'onclick' => new yii\web\JsExpression('function(){guiders.hideAll();}')
			],
			[
				// if name is "close", "next", or "back", 
				// onclick defaults to guiders.hideAll, guiders.next, or guiders.prev respectively)
				'name' => 'back' 
			],
			[
				'name' => 'before you leave!',
				'onclick' => new yii\web\JsExpression('function(){alert("thanks for joining our Guiders Tour !");}')
			]
		],
		'description' => "That's all folks...well not exactly. There are <b>plenty</b> of nice options to play with"
			." so to create a nice tour. <h4>Check the Guiders-JS page</h4>",
		'id' => "third",
		'title' => "Welcome to Guiders.js!",
		'closeOnEscape' => true,
		'xButton' => true,
		'width' => 400
	]
]);

?>
```

For more information on the plugin options and usage, please refer to [guiders-JS@github](https://github.com/jeff-optimizely/Guiders-JS).

License
-------

**yii2-guiders-widget** is released under the BSD 3-Clause License. See the bundled `LICENSE.md` for details.