<?php

class QueryController extends GxController {

    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id, 'Query'),
        ));
    }

    public function actionImport() {
        $filePath1 = 'C:\Users\Aale\Dropbox\Development\htdocs\freebase\data\full_queries.txt';
        echo "start parsing " . $filePath1 . "<br>";
        Query::readQueryFile($filePath1);

        //$filePath2 = 'C:\Users\Aale\Dropbox\Development\htdocs\freebase\data\full_multi_queries.txt';
        //echo "start parsing ".$filePath2."<br>";
        //Query::readQueryFile($filePath2);
        $this->render('import', array());
    }

    public function actionExtract() {
        $this->render('extract_fbid', array());
    }

    public function actionCreate() {
        $model = new Query;


        if (isset($_POST['Query'])) {
            $model->setAttributes($_POST['Query']);

            if ($model->save()) {
                if (Yii::app()->getRequest()->getIsAjaxRequest())
                    Yii::app()->end();
                else
                    $this->redirect(array('view', 'id' => $model->id));
            }
        }

        $this->render('create', array('model' => $model));
    }

    public function actionUpdate($id) {
        $model = $this->loadModel($id, 'Query');


        if (isset($_POST['Query'])) {
            $model->setAttributes($_POST['Query']);

            if ($model->save()) {
                $this->redirect(array('view', 'id' => $model->id));
            }
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    public function actionDelete($id) {
        if (Yii::app()->getRequest()->getIsPostRequest()) {
            $this->loadModel($id, 'Query')->delete();

            if (!Yii::app()->getRequest()->getIsAjaxRequest())
                $this->redirect(array('admin'));
        } else
            throw new CHttpException(400, Yii::t('app', 'Your request is invalid.'));
    }

    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('Query');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    public function actionAdmin() {
        $model = new Query('search');
        $model->unsetAttributes();

        if (isset($_GET['Query']))
            $model->setAttributes($_GET['Query']);

        $this->render('admin', array(
            'model' => $model,
        ));
    }

}