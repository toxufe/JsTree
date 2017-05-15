<?php

/**
 * @copyright Copyright &copy; Thiago Talma, thiagomt.com, 2014
 * @package   yii2-jstree
 * @version   1.0.0
 */

namespace toxufe\jstree;

use yii\web\AssetBundle;


/**
 * Asset bundle for JsTree Widget
 * @author Thiago Talma <thiago@thiagomt.com>
 * @since  1.0
 */
class JsTreeUserAsset extends AssetBundle
{
    public $sourcePath = '@vendor/toxufe/jstree/assets/';
    public $js = [
        'jstree_user.js',
    ];
    public $css = [
    ];

    public function init()
    {
        parent::init();

        $this->depends[] = JsTreeAsset::className();
    }

}
