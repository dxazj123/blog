<?php 
    use yii\helpers\Html;
    use yii\helpers\Url;
    $this->title="文章详情-杜虎龙博客";
 ?>
    <style>
        .title{
            font-size: 18px;
            margin-bottom: 10px;
            font-weight: bold;
        }
        .content{
             font-size: 16px;
             line-height:24px;;
        }
    </style>
    <?= Html::jsFile('@web/css/layui/layui.js'); ?>
    <?= Html::cssFile('@web/css/layui/css/layui.css'); ?>

    <div class="col-md-9">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?=Url::to(['site/index'])?>">首页</a></li>
            <li class="breadcrumb-item active">文章详情</li>
        </ol>
        <p class="text-center title"><?= $info['title']?></p>
        <div class="content">
            <?= $info['content']?>
        </div>
    </div>