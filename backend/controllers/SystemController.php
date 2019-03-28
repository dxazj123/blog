<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\AdminLoginForm;

/**
 * Site controller
 */
class SystemController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actionSave(){
        $filepath="../../common/config/params.php";
        $str='<?php'.PHP_EOL;
        $str.="return[";
        foreach (Yii::$app->params as $key => $value) {
            $str.="'".$key."'".'=>'."'".$value."'".',';
        }
        $email=Yii::$app->request->post('email')?Yii::$app->request->post('email'):'';
        $keywords=Yii::$app->request->post('keywords')?Yii::$app->request->post('keywords'):'';
        $description=Yii::$app->request->post('description')?Yii::$app->request->post('description'):'';
        $totalScript=Yii::$app->request->post('totalScript')?Yii::$app->request->post('totalScript'):'';
        $str.="'".'email'."'".'=>'."'".$email."'".',';
        $str.="'".'keywords'."'".'=>'."'".$keywords."'".',';
        $str.="'".'description'."'".'=>'."'".$description."'".',';
        $str.="'".'totalScript'."'".'=>'."'".htmlspecialchars($totalScript)."'".',';
        $str.="];";
        if(file_put_contents($filepath,$str,LOCK_EX)){
             return $this->redirect('index.php?r=system/index');
        }

    }
}
