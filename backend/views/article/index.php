<?php
    use yii\helpers\Url;
    $this->title="后台-文章列表";
?>
<style>
    @-moz-document url-prefix() {
        fieldset { display: table-cell; }
    }
</style>
<a href="<?= Url::to(['article/insert'])?>" class="btn btn-sm btn-default">添加文章</a>
<p> </p>
<div class="table-responsive">
    <table class="table table-bordered table-hover table-condensed table-responsive">
        <tr>
            <th>ID</th>
            <th>标题</th>
            <th>作者</th>
            <th>内容</th>
            <th>状态</th>
            <th>所属分类</th>
            <th width=150>添加时间</th>
            <th>操作</th>
        </tr>
    <?php
        
        foreach($article as $value){
            ?>
                <tr>
                    <td><?=$value['id']?></td>
                    <td><?=$value['title']?></td>
                    <td><?=$value['author']?></td>
                    <td><?=mb_substr(strip_tags($value['content']),0,100,'utf-8')?></td>
                    <td>
                        <?php 
                            if($value['status']==1){
                                echo "已发布";
                            }else{
                                 echo "未发布";
                            }
                         ?>
                    </td>
                    <td><?= $value['class_id']?></td>
                    <td><?= date('Y-m-d H:i:s',$value['addtime'])?></td>

                    <td width=45 align='center' valign='middle'>
                        <a href="<?= Url::to(['article/update','id'=>$value['id']])?>"><span class="glyphicon glyphicon-pencil"></span></a>
                        <a href="<?= Url::to(['article/delete','id'=>$value['id']])?>"><span class="glyphicon glyphicon-remove"></span></a></td>
                </tr>
            <?php
        }
    ?>
    </table>
    <nav aria-label="Page navigation">
      <ul class="pagination pagination-sm">
        <?php 
            if($page_num!=1){
                ?>
                <li>
                    <a href="<?= Url::to(['article/index','page_num'=>$page_num-1])?>" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <?php
            }
         ?>
        
        <?php 
            if ($totalPage>1) {
                for($i=1;$i<=$totalPage;$i++){
                    if($page_num==$i){
                    ?>
                        <li class="active"><a href="javascript:;"><?= $i?></a></li>
                    <?php
                    }else{
                        ?>
                        <li><a href="<?= Url::to(['article/index','page_num'=>$i])?>"><?= $i?></a></li>  
                        <?php
                    }
                }
            }
         ?>
         <?php 
            if($page_num!=$totalPage){
                ?>
                <li>
                    <a href="<?= Url::to(['article/index','page_num'=>$page_num+1])?>" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
                <?php
            }
          ?>
        
      </ul>
    </nav>
</div>