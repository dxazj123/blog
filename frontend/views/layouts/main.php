<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use common\models\Article;
use common\models\Type;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" Content="<?=Yii::$app->params['keywords']?>">
    <meta name="description" Content="<?=Yii::$app->params['description']?>">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<?php 
    $class=Type::find()->orderBy(['sort'=>SORT_DESC])->offset(0)->limit(10)->asArray()->all();
    $menuItems = [];
    foreach ($class as $key => $value) {
        $menuItems[]=['label' =>$value['class'], 'url' => ['/site/index','class_id'=>$value['id']]];
    }

 ?>
<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => '杜虎龙播客',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    
    if (Yii::$app->user->isGuest) {
        // $menuItems[] = ['label' => '注册', 'url' => ['/site/signup']];
        // $menuItems[] = ['label' => '登陆', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link logout']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>

    <div class="container" style="padding-left:0px;">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <div class="col-md-3">
            <ul class="list-group">
                <li class="list-group-item">
                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span> 查找文章
                </li>
                <li class="list-group-item">
                    <form class="form-inline" action="<?= Url::to(['site/index'])?>" id="w0" method="get">
                          <div class="form-group">
                            <input type="text" class="form-control" name="keywords" id="w0input" placeholder="按标题">
                          </div>
                          <button type="submit" class="btn btn-default">搜索</button>
                    </form>
                </li>
            </ul>
            <ul class="list-group">
                <li class="list-group-item">
                    <?php 
                        //取到 年  月  日
                        $time = getdate();
                        $mday = $time["mday"];
                        $mon = $time["mon"];
                        $year = $time["year"];
                        //判断一下一年中各个月份有几天的情况
                        if($mon==4||$mon==6||$mon==9||$mon==11){
                            $day = 30;
                        }elseif($mon==2){
                            if(($year%4==0&&$year%100!=0)||$year%400==0){
                                $day = 29;
                            }else{
                                $day = 28;
                            }
                        }else{
                            $day = 31;
                        }
                        //取到这个月的1号是第几天，
                        $w = getdate(mktime(0,0,0,$mon,1,$year))["wday"];
                        //制作日历的大框架。用for遍历数组，打印出一个日历的格式。
                        $date = function($day,$w,$mday){
                            $sj=date('Y');
                            $Nsj=date('H:i:s');
                            echo "<p style='padding-bottom:10px;'><span style='font-size:18px;'>$sj</span>&nbsp;&nbsp;<span>$Nsj</span></p>";
                            echo "<table class='table'>";
                            echo "<tr><th>日</th><th>一</th><th>二</th><th>三</th><th>四</th><th>五</th><th>六</th></tr>";
                            $arr = array();
                            for($i=1;$i<=$day;$i++){
                                array_push($arr,$i);
                            }
                            if($w>=1&&$w<=6){
                                for($m=1;$m<=$w;$m++){
                                    array_unshift($arr,"");
                                }
                            }
                            $n=0;
                            for($j=1;$j<=count($arr);$j++){
                                
                                $n++;
                                if($n==1) echo "<tr>";
                                
                                
                                if($mday==$arr[$j-1]){

                                //把今天的这一天加一个颜色
                                    echo "<td width='80px' style='background-color: greenyellow;'>".$arr[$j-1]."</td>";
                                }else{
                                    echo "<td width='80px'>".$arr[$j-1]."</td>";
                                }

                                if($n==7){
                                    echo "</tr>";
                                    $n=0;
                                }
                            }
                            if($n!=7)echo "</tr>";

                            echo "</table>";
                        };
                        $date($day,$w,$mday);
                     ?>
                </li>
            </ul>
            <ul class="list-group">
                <li class="list-group-item">
                    <span class="glyphicon glyphicon-fire" aria-hidden="true"></span> 热门文章
                </li>
                <?php 
                    $Article=Article::find()->orderBy(['hit'=>SORT_DESC])->offset(0)->limit(10)->asArray()->all();
                    foreach ($Article as $key => $value) {
                        ?>
                            <li class="list-group-item"><a href="<?= Url::to(['article/info','id'=>$value['id']])?>"><?= $value['title']?></a></li>
                        <?php
                    }
                 ?>
            </ul>
        </div>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="text-center">Copyright © <?= date('Y')?> 杜虎龙博客 | 邮箱：<a href="mailto:<?= Yii::$app->params['email']?>"><?= Yii::$app->params['email']?></a></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
