<?php 
	use yii\helpers\Url;
	$this->title="后台-文章分类修改";
 ?>
<form action="<?= Url::to(['article/class-update-save'])?>" method="post" class="form-horizontal">
	<div class="form-group">
	   	<label for="ClassName" class="col-sm-2 control-label">名称</label>
	   	<div class="col-sm-10">
	     	<input type="text" class="form-control" name="classname" id="ClassName" placeholder="ClassName" value="<?=$info['class']?>">
	   	</div>
	 </div>
	 <div class="form-group">
	   	<label for="sort" class="col-sm-2 control-label">排序</label>
	   	<div class="col-sm-10">
	     	<input type="text" name="sort" class="form-control" id="sort" placeholder="sort" value="<?=$info['sort']?>">
	   	</div>
	 </div>
	<input type="hidden" value="<?php echo Yii::$app->request->csrfToken; ?>" name="_csrf-backend" >
	<input type="hidden" name="id" value="<?= $info['id']?>">
	<div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      	<button type="submit" class="btn btn-default">保存</button>
	    </div>
  	</div>
</form>