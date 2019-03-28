<?php 
    use yii\helpers\Html;
    use yii\helpers\Url;
    $this->title="文章列表-杜虎龙博客";
 ?>

    <?= Html::jsFile('@web/css/layui/layui.js'); ?>
    <?= Html::cssFile('@web/css/layui/css/layui.css'); ?>
    <style>
        a{text-decoration:none;}
        .panel-body a{font-size:15px;}
        a:link{text-decoration:none;}
        a:hover{color:none}
    </style>
    <div class="col-md-9">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?=Url::to(['site/index'])?>">首页</a></li>
            <li class="breadcrumb-item active">文章列表</li>
        </ol>
        <!-- <div class="table-responsive"> -->
            <!-- <table class="table table-hover"> -->
                <?php 

                    foreach ($article as $key => $value) {
                        ?>  
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title"><a href="<?= Url::to(['article/info','id'=>$value['id']])?>"><?php echo $value['title'] ?></a></h3>
                                </div>
                                <div class="panel-body">
                                <a href="<?= Url::to(['article/info','id'=>$value['id']])?>"><?php echo mb_substr(strip_tags($value['content']),0,200,'utf-8')?>……</a>
                                </div>
                                <div class="panel-footer text-right" style="background:#fff"><?php echo date('Y-m-d H:i:s',$value['addtime'])?></div>
                            </div>

                           
                        <?php
                    }
                 ?>
            <!-- </table> -->
        <!-- </div> -->
        
        
        <nav aria-label="Page navigation">
          <ul class="pagination pagination-sm">
            <?php 
                if($page_num!=1){
                    ?>
                    <li>
                        <a href="<?= Url::to(['site/index','page_num'=>$page_num-1])?>" aria-label="Previous">
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
                            <li><a href="<?= Url::to(['site/index','page_num'=>$i])?>"><?= $i?></a></li>  
                            <?php
                        }
                    }
                }
             ?>
             <?php 
                if($page_num!=$totalPage){
                    ?>
                    <li>
                        <a href="<?= Url::to(['site/index','page_num'=>$page_num+1])?>" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                    <?php
                }
              ?>
            
          </ul>
        </nav>
    </div>

