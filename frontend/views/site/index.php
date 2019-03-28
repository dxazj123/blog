<?php 
    use yii\helpers\Html;
    use yii\helpers\Url;
    $this->title="文章列表-杜虎龙博客";
 ?>

    <?= Html::jsFile('@web/css/layui/layui.js'); ?>
    <?= Html::cssFile('@web/css/layui/css/layui.css'); ?>

    <div class="col-md-9">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?=Url::to(['site/index'])?>">首页</a></li>
            <li class="breadcrumb-item active">文章列表</li>
        </ol>
        <div class="table-responsive">
            <table class="table table-hover">
                <?php 

                    foreach ($article as $key => $value) {
                        ?>  
                            <tr>
                                <td>
                                    <a href="<?= Url::to(['article/info','id'=>$value['id']])?>"><?php echo $value['title'] ?></a>
                                </td>
                                <td class="text-right">
                                    <span>[ <?= date('Y-m-d',$value['addtime'])?> ]</span>
                                </td>
                            </tr>
                        <?php
                    }
                 ?>
            </table>
        </div>
        
        
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

