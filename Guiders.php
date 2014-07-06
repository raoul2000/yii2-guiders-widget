<?php

namespace raoul2000\widget\guiders;

use Yii;
use yii\base\Widget;
use yii\base\InvalidConfigException;
use yii\helpers\Json;
use yii\web\JsExpression;
/**
 * Guiders is a wrapper for the [Guiders-JS Jquery Plugin ](https://github.com/jeff-optimizely/Guiders-JS).
 * For documentation on plugin option, please refer to https://github.com/jeff-optimizely/Guiders-JS
 *
 */
class Guiders extends Widget
{
	/**
	 * @var boolean show the guider after creating it.
	 */
	public $show = false;
	/**
	 * @var array options for the Guiders plugin (see https://github.com/jeff-optimizely/Guiders-JS)
	 */
	public $pluginOptions = [];
	
	/**
	 * (non-PHPdoc)
	 * @see \yii\base\Widget::run()
	 */
    public function run()
    {
        $this->registerClientScript();
    }
    /**
     * Registers the needed JavaScript and inject the JS initialization code
     */
    public function registerClientScript()
    {
    	$view = $this->getView();
    	GuidersAsset::register($view);

    	$options = empty($this->pluginOptions) ? '' : Json::encode($this->pluginOptions);
    	$js = "guiders.createGuider($options)" .	($this->show?'.show()':'') . ';';
    	$view->registerJs($js);
    }
}
