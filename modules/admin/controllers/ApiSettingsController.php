<?php

namespace app\modules\admin\controllers;

use app\models\ApiSettings;

class ApiSettingsController extends \yii\web\Controller
{
    public function actionFacebook()
    {
        $model = ApiSettings::find()->one();

        if (\Yii::$app->request->post())
        {
            $model->load(\Yii::$app->request->post());
            $model->save();
        }

        return $this->render('facebook', ['model' => $model]);
    }

    public function actionInstagram()
    {
        $model = ApiSettings::find()->one();

        if (\Yii::$app->request->post())
        {
            $model->load(\Yii::$app->request->post());
            $model->save();
        }

        return $this->render('instagram', ['model' => $model]);
    }

    public function actionYoutube()
    {
        $model = ApiSettings::find()->one();

        if (\Yii::$app->request->post())
        {
            $model->load(\Yii::$app->request->post());
            $model->save();
        }

        return $this->render('youtube', ['model' => $model]);
    }

}
