<?php
/**
 * 版本v1.0
 * 官网zyyo.net查看更新
 * @package ZYYO
 * @author ZYYO
 * @version 1.0
 * @link https://zyyo.net
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
?>
<?php
$this->need('include/header.php');
?>
<!--主页开始-->


    <div  class="index">
             
        <div class="index-head">
            <div style="background-image: url(<?=Func::banner() ?>);"class="banner">    
    <div  class="header-bar">
                    <div onclick="right()" class="icon1"><svg t="1701521863751" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="1383" width="24px" height="24px"><path d="M512 116.363636A395.636364 395.636364 0 1 1 116.363636 512 395.636364 395.636364 0 0 1 512 116.363636m0-69.818181a465.454545 465.454545 0 1 0 465.454545 465.454545A465.454545 465.454545 0 0 0 512 46.545455z" fill="#ffffff" p-id="1384"></path><path d="M648.843636 375.156364l-51.432727 205.265454a23.272727 23.272727 0 0 1-16.989091 16.989091l-205.265454 51.432727 51.432727-205.265454a23.272727 23.272727 0 0 1 16.989091-16.989091l205.265454-51.432727m64-87.272728h-5.818181l-279.272728 69.818182a93.090909 93.090909 0 0 0-67.723636 67.723637l-69.818182 280.436363a23.272727 23.272727 0 0 0 23.272727 29.090909h5.818182l280.436364-69.818182a93.090909 93.090909 0 0 0 67.723636-67.723636l69.818182-280.436364a23.272727 23.272727 0 0 0-23.272727-29.090909z" fill="#ffffff" p-id="1385"></path><path d="M512 477.090909a34.909091 34.909091 0 1 0 34.909091 34.909091 34.909091 34.909091 0 0 0-34.909091-34.909091z" fill="#ffffff" p-id="1386"></path></svg></div>
                    <div onclick="fixed()" class="icon2"><svg t="1701521706494" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="1244" width="24px" height="24px"><path d="M896 232.727273h-744.727273a34.909091 34.909091 0 0 1 0-69.818182h744.727273a34.909091 34.909091 0 0 1 0 69.818182zM896 884.363636h-744.727273a34.909091 34.909091 0 0 1 0-69.818181h744.727273a34.909091 34.909091 0 0 1 0 69.818181zM709.818182 558.545455h-558.545455a34.909091 34.909091 0 0 1 0-69.818182h558.545455a34.909091 34.909091 0 0 1 0 69.818182z" fill="#ffffff" p-id="1245"></path></svg></div>           

                    
                    
<a href="<?= Func::url() ?>"><img class="ico" src="<?=Func::ico() ?>"  ></a>
                    
                    
                       </div>
         

            </div>
<div class="author-bar">
        <div class="author-logo" style="background-image:url(<?=Func::AuthorLogo() ?>);"></div>
                    <div class="author-title"><?=Func::AuthorTitle() ?></div>
    <div class="author-yiyan"><?=Func::YiYan() ?></div>

            </div>
            
        </div>
        
        
                       
     <div class="tab">
            <a href="<?php $this->options ->siteUrl(); ?>"> 
<div class="option">全部</div></a>
            <?php $this->widget('Widget_Metas_Category_List')
               ->parse('<a href="{permalink}"> <div class="option">{name}</div></a>'); ?>
        </div>

 
 
 
 

<div class="article-list">
   

 <div class="article-list-a">

<?php
while ($this->next()):
    // 输出文章内容
EchoList($this);
endwhile;
?>   
           
           
           
           
           
    </div></div>



    <?php $this->pageLink('<div class="page-link"><span class="page-link-text">加载更多</span></div>','next'); ?>


        

     
    <?php
$this->need('include/footer.php');


?>
