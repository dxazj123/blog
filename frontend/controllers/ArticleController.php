<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\AdminLoginForm;
use common\models\Article;
/**
 * Site controller
 */
class ArticleController extends Controller
{
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }
    public function actionInfo()
    {   
        $id=Yii::$app->request->get('id');
        $info=Article::find()->where(['id'=>$id])->asArray()->one();
        $Article=Article::findOne($id);
        $Article->hit=$Article->hit+1;
        $Article->save();
        return $this->render('info',['info'=>$info]);
    }
}
