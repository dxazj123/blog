<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\AdminLoginForm;
use common\models\Article;
use common\models\Type;
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
    public function actionIndex()
    {   
        $page_num=Yii::$app->request->get('page_num')?Yii::$app->request->get('page_num'):1;
        $page_size=10;
        $Article = Article::find();
        $count = $Article->count();
        $totalPage=ceil($count/$page_size);
        $article=$Article->orderBy(array('addtime'=>1))->offset($page_size*($page_num-1))->limit($page_size)->asArray()->all();
        return $this->render('index',['article'=>$article,'totalPage'=>$totalPage,'page_num'=>$page_num]);
    }
    public function actionInsert(){
        $class=Type::find()->select(['id','class'])->asArray()->all();
        return $this->render('insert',['class'=>$class]);
    }
    public function actionInsertSave(){
        $Article= new Article;         
        $Article->title = Yii::$app->request->post('title'); 
        $Article->author = Yii::$app->request->post('author');
        $Article->content = Yii::$app->request->post('content'); 
        $Article->class_id = Yii::$app->request->post('class');
        $Article->addtime = time();  
        if($Article->save()){
            return $this->redirect('index.php?r=article/index');
        }
    }
    public function actionUpdate(){
        $class=Type::find()->select(['id','class'])->asArray()->all();
        $id=Yii::$app->request->get('id');
        $info=Article::find()->where(['id'=>$id])->asArray()->one();
        return $this->render('update',['info'=>$info,'class'=>$class]);
    }
    public function actionUpdateSave(){
        $id=Yii::$app->request->post('id');
        $Article=Article::findOne($id);
        $Article->title=Yii::$app->request->post('title');
        $Article->author=Yii::$app->request->post('author');
        $Article->content=Yii::$app->request->post('content');
        $Article->class_id=Yii::$app->request->post('class');
        $Article->status=Yii::$app->request->post('status');
        $Article->addtime=time();
        if($Article->save()){
            return $this->redirect('index.php?r=article/index');
        } 
    }
    public function actionDelete(){
        $id=Yii::$app->request->get('id');
        $Article=Article::findOne($id);
        if($Article->delete()){
            return $this->redirect('index.php?r=article/index');
        }
    }
    public function actionClass(){
        $type=Type::find()->asArray()->all();
        return $this->render('class',['type'=>$type]);
    }
    public function actionAddClass(){
        return $this->render('addclass');
    }
    public function actionAddClassSave(){
        $Type=new Type;
        $Type->class=Yii::$app->request->post('classname');
        $Type->sort=Yii::$app->request->post('sort');
        $Type->addtime=time();
        if($Type->save()){
             return $this->redirect('index.php?r=article/class');
         }
    }
    public function actionClassUpdate(){
        $id=Yii::$app->request->get('id');
        $info=Type::find()->where(['id'=>$id])->asArray()->one();
        return $this->render('classupdate',['info'=>$info]);
    }
    public function actionClassUpdateSave(){
        $id=Yii::$app->request->post('id');
        $Type=Type::findOne($id);
        $Type->class=Yii::$app->request->post('classname');
        $Type->sort=Yii::$app->request->post('sort');
        if($Type->save()){
            return $this->redirect('index.php?r=article/class');
        }
    }
    public function actionClassDelete(){
        $id=Yii::$app->request->get('id');
        $Type=Type::findOne($id);
        if($Type->delete()){
            return $this->redirect('index.php?r=article/class');
         }
    }
}
