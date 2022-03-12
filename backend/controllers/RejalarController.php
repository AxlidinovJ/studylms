<?php

namespace backend\controllers;

use common\models\Rejalar;
use backend\models\RejalarSearch;
use Yii;
use yii\base\Security;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * RejalarController implements the CRUD actions for Rejalar model.
 */
class RejalarController extends DefaultController
{


    /**
     * Lists all Rejalar models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new RejalarSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Rejalar model.
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
     * Creates a new Rejalar model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Rejalar();
        $model->scenario = Rejalar::CREATED_REJA;
        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $rasm = UploadedFile::getInstance($model,'img');
                $random = new Security();
                $nomi = $random->generateRandomString(32).".".$rasm->extension;
                $rasm->saveAs("photos/".$nomi);
                $model->img = $nomi;
                $model->user_id = Yii::$app->user->identity->id;
                $vaqt = strtotime($model->hour);
                $model->hour = $vaqt;
                $model->save();
                // echo "<pre>";
                // print_r($model);
                return $this->redirect(['view', 'id' => $model->id]);
            }

        } else {
            $model->loadDefaultValues();
        }
       
        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Rejalar model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $model->scenario = Rejalar::UPDATED_REJA;
        $nomi = $model->img; 
        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $rasm = UploadedFile::getInstance($model,'img');
                if($rasm){
                    if(file_exists("photos/".$nomi))
                    unlink("photos/".$nomi);
                    $random = new Security();
                    $nomi = $random->generateRandomString(32).".".$rasm->extension;
                    $rasm->saveAs("photos/".$nomi);
                }
                $model->img = $nomi;
                $vaqt = strtotime($model->hour);
                $model->hour = $vaqt;
                $model->save();
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }
        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Rejalar model.
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
     * Finds the Rejalar model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Rejalar the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Rejalar::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
