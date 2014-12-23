<?php

use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */

\app\assets\EasyuiAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <?php $this->beginBody() ?>
    <body class="easyui-layout" style="text-align:left">
        <div region="north" border="false" style="background:#666;text-align:center">
            <div id="header-inner">
                <table cellpadding="0" cellspacing="0" style="width:100%;">
                    <tr>
                        <td rowspan="2" style="width:20px;">
                        </td>
                        <td style="height:52px;">
                            <div style="color:#fff;font-size:22px;font-weight:bold;">
                                <a href="/index.php" style="color:#fff;font-size:22px;font-weight:bold;text-decoration:none">jQuery EasyUI</a>
                            </div>
                            <div style="color:#fff">
                                <a href="/index.php" style="color:#fff;text-decoration:none">easyui helps you build your web pages easily!</a>
                            </div>
                        </td>
                        <td style="padding-right:5px;text-align:right;vertical-align:bottom;">
                            <div id="topmenu">
                                <a href="/index.php">Home</a>
                                <a href="/demo/main/index.php">Demo</a>
                                <a href="/tutorial/index.php">Tutorial</a>
                                <a href="/documentation/index.php">Documentation</a>
                                <a href="/download/index.php">Download</a>
                                <a href="/extension/index.php">Extension</a>
                                <a href="/contact.php">Contact</a>
                                <a href="/forum/index.php">Forum</a>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>

        </div>
        <div region="west" split="true" border="false" title=" " style="width:250px;padding:5px;">
            <ul class="easyui-tree">
            </ul>
        </div>
        <div region="center" border="false">
            <div id="main-content">
                <?= $content ?>
            </div>
        </div>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
