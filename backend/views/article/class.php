<?php
    use yii\helpers\Url;
    $this->title="后台-文章分类";
?>
<style>
    @-moz-document url-prefix() {
        fieldset { display: table-cell; }
    }
</style>
<a href="<?= Url::to(['article/add-class'])?>" class="btn btn-sm btn-default">添加分类</a>
<p> </p>
<div class="table-responsive">
    <table class="table table-bordered table-hover table-condensed table-responsive">
        <tr>
            <th>ID</th>
            <th>名称</th>
            <th>排序</th>
            <th>添加时间</th>
            <th>操作</th>
        </tr>
    <?php
        
        foreach($type as $value){
            ?>
                <tr>
                    <td><?=$value['id']?></td>
                    <td><?=$value['class']?></td>
                    <td><?=$value['sort']?></td>
                    <td><?= date('Y-m-d H:i:s',$value['addtime'])?></td>
                    <td width=45 align='center' valign='middle'>
                        <a href="<?= Url::to(['article/class-update','id'=>$value['id']])?>"><span class="glyphicon glyphicon-pencil"></span></a>
                        <a href="<?= Url::to(['article/class-delete','id'=>$value['id']])?>"><span class="glyphicon glyphicon-remove"></span></a></td>
                </tr>
            <?php
        }
    ?>
    </table>
</div>