<?php 
	use yii\helpers\Url;
	$this->title="后台-文章分类添加";
 ?>
<form action="<?= Url::to(['article/add-class-save'])?>" method="post" class="form-horizontal">
	<div class="form-group">
	   	<label for="ClassName" class="col-sm-2 control-label">名称</label>
	   	<div class="col-sm-10">
	     	<input type="text" class="form-control" name="classname" id="ClassName" placeholder="ClassName">
	   	</div>
	 </div>
	 <div class="form-group">
	   	<label for="sort" class="col-sm-2 control-label">排序</label>
	   	<div class="col-sm-10">
	     	<input type="text" name="sort" class="form-control" id="sort" placeholder="sort">
	   	</div>
	 </div>
	<input type="hidden" value="<?php echo Yii::$app->request->csrfToken; ?>" name="_csrf-backend" >
	<div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      	<button type="submit" class="btn btn-default">保存</button>
	    </div>
  	</div>
</form>