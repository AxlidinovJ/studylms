<?php

namespace backend\controllers;

use common\models\Slider;
use Yii;
use yii\base\Security;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\UploadedFile;
use yii\filters\AccessControl;

/**
 * SliderController implements the CRUD actions for Slider model.
 */
class SliderController extends DefaultController
{
  
   

    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Slider::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'id' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Slider model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Slider model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Slider();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $rasm = UploadedFile::getInstance($model,'photo');
                $random = new Security();
                $nomi = $random->generateRandomString(32).".".$rasm->extension;
                $rasm->saveAs("images/slider/".$nomi);
                $model->photo = $nomi;
                $model->save();
            }
            return $this->redirect(['view', 'id' => $model->id]);

        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Slider model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $nomi = $model->photo; 
        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $rasm = UploadedFile::getInstance($model,'photo');
                if($rasm){
                    if(file_exists("images/slider/".$nomi))
                    unlink("images/slider/".$nomi);
                    $random = new Security();
                    $nomi = $random->generateRandomString(32).".".$rasm->extension;
                    $rasm->saveAs("images/slider/".$nomi);
                }
                $model->photo = $nomi;
                $model->save();
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Slider model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Slider model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Slider the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Slider::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
