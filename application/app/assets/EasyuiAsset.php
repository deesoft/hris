<?php

namespace app\assets;

use Yii;

/**
 * EasyuiAsset
 *
 * @author Misbahul D Munir <misbahuldmunir@gmail.com>
 * @since 1.0
 */
class EasyuiAsset extends \yii\web\AssetBundle
{
    const THEME_COOKIE_KEY = '_easyui_theme';

    public $sourcePath = '@app/assets/easyui';
    public $css = [
        'themes/{theme}/easyui.css',
        'main.css',
        'themes/icon.css',
    ];
    public $js = [
        'jquery.easyui.min.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
    public $theme = 'default';
    
    public function init()
    {
        $theme = $this->getTheme();
        foreach ($this->css as $i => $css) {
            $this->css[$i] = strtr($css, ['{theme}' => $theme]);
        }
        parent::init();
    }

    protected function getTheme()
    {
        //return Yii::$app->request->cookies->getValue(static::THEME_COOKIE_KEY, 'default');
        return $this->theme;
    }
}