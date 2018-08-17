<?php

namespace app\controllers;

use app\models\Post;
use yii\data\Pagination;
use yii\web\NotFoundHttpException;

class BlogController extends AppController
{
    public function actionIndex()
    {
        $this->registerSeo('Blog');

        $query = Post::find()->orderBy(['id' => SORT_DESC])->where(['status' => 1]);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 6]);
        $latest_posts = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();

        $params = [
            'latest_posts' => $latest_posts,
            'pages' => $pages
        ];
        return $this->render('index', $params);
    }

    public function actionView()
    {
        if ($post = Post::find()->where(['slug' => \Yii::$app->request->get('slug')])->andWhere(['status' => 1])->one()) {

            $this->registerSeo($post->title, $post->keywords, $post->description);

            return $this->render('view', ['post' => $post]);
        } else
            throw new NotFoundHttpException();
    }

}
