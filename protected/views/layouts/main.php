<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />

        <!-- blueprint CSS framework -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
        <!--[if lt IE 8]>
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
        <![endif]-->

        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />


        <?php
        Yii::app()->clientScript->registerScriptFile('https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.14/jquery-ui.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/jquery.livequery.min.js');
        Yii::app()->clientScript->registerCssFile('http://code.jquery.com/ui/1.9.1/themes/base/jquery-ui.css');
        Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/js/bs/css/bootstrap.min.css');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/bs/js/bootstrap.min.js');
        Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/js/bs-editable/css/bootstrap-editable.css');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/bs-editable/js/bootstrap-editable.min.js');
        Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . '/js/jquery.slimscroll.min.js');
        Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/js/font-awesome/css/font-awesome.min.css');
        ?>


        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>

    <body>


        <div class="container" id="page">


            <div>
            </div><!-- header -->

            <div class="row buttons" style="float: right; margin:2px;">
            </div>

            <div id="mainmenu" class="navbar">

            </div><!-- mainmenu -->
            <?php if (isset($this->breadcrumbs)): ?>
                <?php
                $this->widget('zii.widgets.CBreadcrumbs', array(
                    'links' => $this->breadcrumbs,
                ));
                ?><!-- breadcrumbs -->
            <?php endif ?>

            <?php echo $content; ?>

            <div class="clear"></div>

            <div id="footer">
            </div><!-- footer -->

        </div><!-- page -->

    </body>
</html>
