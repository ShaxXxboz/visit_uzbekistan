<?php

namespace app\modules\admin\controllers;

use Yii;
use app\models\Settings;
use app\models\SettingsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SettingsController implements the CRUD actions for Settings model.
 */
class SettingsController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
        ];
    }


    /**
     * Updates an existing Settings model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate()
    {
        $model = Settings::find()->one();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            if ($model->faviconUpload()) {
                return $this->redirect(['update']);
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

}
