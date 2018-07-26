<?php

namespace app\controllers;

use app\models\auth\Login;
use app\models\ContactForm;
use app\models\LoginForm;
use app\models\User;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\web\Controller;
use yii\web\Response;


class SiteController extends Controller
{

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }


    public function actionLogin($message = '')
    {
        $login_model = new Login();

        if (Yii::$app->request->post('Login')) {
            if ($login_model->load(Yii::$app->request->post()) && $login_model->validate()) {
                \Yii::$app->user->login($login_model->getUser());
                return $this->redirect(['user/index']);
            } else {
                $this->redirect(['login', 'message' => 'You have entered wrong login or password. Please, try again!']);
            }
        }

        return $this->render('login', [
            'model' => $login_model,
            'message' => $message
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();
        return $this->redirect(['site/login']);
    }


}
