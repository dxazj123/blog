<?php 
	use yii\helpers\Url;
	$this->title="后台-文章修改";
 ?>
<form action="<?= Url::to(['article/update-save'])?>" method="post" class="form-horizontal">
	<div class="form-group">
		<label for="class" class="col-sm-2 control-label">分类：</label>
	   	<div class="col-sm-10">
	     	<select class="form-control" name="class">
	     	  	<?php 
	     	  		
	     	  		foreach ($class as $key => $value) {
	     	  			if($value['id']==$info['class_id']){
						
	     	  			?>
							<option value="<?=$value['id']?>" selected="selected"><?=$value['class']?></option>
	     	  			<?php
	     	  			}else{
     	  				?>
							<option value="<?=$value['id']?>"><?=$value['class']?></option>
     	  				<?php
	     	  			}
	     	  		}
	     	  	 ?>
	     	</select>
	   	</div>
	</div>
	<div class="form-group">
		<label for="title" class="col-sm-2 control-label">标题：</label>
	   	<div class="col-sm-10">
	     	<input type="text" class="form-control" id="title" placeholder="title" name="title" value="<?php echo $info['title'] ?>">
	   	</div>
	</div>
	<div class="form-group">
		<label for="author" class="col-sm-2 control-label">作者：</label>
	   	<div class="col-sm-10">
	     	<input type="text" class="form-control" id="author" placeholder="author" name="author" value="<?php echo $info['author'] ?>">
	   	</div>
	</div>
	<div class="form-group">
		<label for="author" class="col-sm-2 control-label">状态：</label>
	   	<div class="col-sm-10">
	     	<select class="form-control" name="status">

	     		<?php 
	     			if($info['status']==1){
	     				?>
						<option value="1" selected="selected">已发布</option>
	     				<option value="0">未发布</option>
	     				<?php
	     			}else{
	     				?>
						<option value="1" >已发布</option>
	     				<option value="0" selected="selected">未发布</option>
	     				<?php
	     			}
	     		 ?>
	     		
	     	</select>
	   	</div>
	</div>
	<div class="form-group">
		<label for="content" class="col-sm-2 control-label">内容：</label>
		<div class="col-sm-10">
			内容：<?= \yii\redactor\widgets\Redactor::widget(['model' => 'jay' ,'name'=>'content','value'=>$info['content']]) ?>
		</div>
	</div>
	
	<input type="hidden" value="<?php echo Yii::$app->request->csrfToken; ?>" name="_csrf-backend" >
	<input type="hidden" name="id" value="<?= $info['id'] ?>">
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
      		<button type="submit" class="btn btn-default">保存</button>
    	</div>
	</div>
</form>