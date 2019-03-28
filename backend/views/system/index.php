<?php
    use yii\helpers\Url;
    $this->title="后台-文章列表";
?>
<form action="<?=Url::to(['system/save'])?>" class="form-horizontal" method="post">
    <div class="form-group">
        <label for="Email" class="col-sm-2 control-label">管理邮箱</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="Email" placeholder="管理邮箱" name="email" value="<?= Yii::$app->params['email']?Yii::$app->params['email']:''?>">
        </div>
    </div>
    <div class="form-group">
        <label for="keywords" class="col-sm-2 control-label">网站关键字</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="keywords" placeholder="网站关键字" name="keywords" value="<?= Yii::$app->params['keywords']?Yii::$app->params['keywords']:''?>">
        </div>
    </div>
    <div class="form-group">
        <label for="description" class="col-sm-2 control-label">网站描述</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="description" placeholder="网站描述" name="description" value="<?= Yii::$app->params['description']?Yii::$app->params['description']:''?>">
        </div>
    </div>
    <div class="form-group">
        <label for="totalScript" class="col-sm-2 control-label">统计代码</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="totalScript" placeholder="统计代码" name="totalScript" value="<?= Yii::$app->params['totalScript']?Yii::$app->params['totalScript']:''?>">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">保存</button>
        </div>
  </div>
  <input type="hidden" value="<?php echo Yii::$app->request->csrfToken; ?>" name="_csrf-backend" >
</form>