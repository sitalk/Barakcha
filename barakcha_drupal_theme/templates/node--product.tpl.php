



<?if($page == 0) 
{
?>
<div class="product">
<a href="<?=$node_url?>" class="item" alt="<?=$title?>" title="<?=$title?>">	
	<center><img src="<?=image_style_url('uc_category', $node->field_image[$node->language][0]['filename']) ?>" alt="<?=$title?>" /></center>
	<center><span class="item-name"><?=$title?></span></center> 
	<span class="prices"><?=render($node->field_product_price['und'][0]['value']); ?>  </span>  
</a>
<div class="clearfix"></div>
<form method="post" action="http://drupalstore.shop.kg/content/formorder">
   <input type="hidden" value="<?=$title;?>" name="product-name">
   <input type="hidden" value="<?=$node->field_product_price['und'][0]['value']?>" name="product-price">
   <input class="order-button-small" type="submit" value="Заказать">
</form>	

</div>
<? 
} 

else { 

?>
<div class="product_name_div">
<span>
<?=$title;?>
</span>
</div>


<div class="product_price_tag" >
<span>
<?php 
echo "Цена:"
?>
</span>
</div>

<div class="product_price_div">
<span>
<?=render($node->field_product_price['und'][0]['value']); ?>
</span>
</div>


<form method="post" action="http://drupalstore.shop.kg/content/formorder">
   <input type="hidden" value="<?=$title;?>" name="product-name">
   <input type="hidden" value="<?=$node->field_product_price['und'][0]['value']?>" name="product-price">
   <input class="order-button" type="submit" value="Заказать">
</form>



<div id="holder" style="background:url(http://www.drupalstore.shop.kg/sites/default/files/<?php print $node->field_image[$node->language][0]['filename'] ?>); background-size:400px 400px; background-repeat:no-repeat; background-position: 21px 25px;"> <!-- begin holder-->
           
          
           
          
            <div id="scrollbox"><!-- begin scrollbox-->
              <div id="thumbs"> <!-- begin thumbs-->
              
              <a class="gallery slidea" style="background:url(http://www.drupalstore.shop.kg/sites/default/files/styles/uc_thumbnail/public/<?php print $node->field_image[$node->language][0]['filename'] ?>); background-position:center; background-size:56px; background-repeat:no-repeat; margin-left:16px; margin-top:10px;" href="#nogo"
                  title="product image 1" tabindex="1">
                  <span>
                  <img class="large_images" src="http://www.drupalstore.shop.kg/sites/default/files/<?php print $node->field_image[$node->language][0]['filename'] ?>" alt="product image 1"
                      title="product image 1"><br>
                   
                    </span>
                    </a> 

               <a class="gallery slideb" style="background:url(http://www.drupalstore.shop.kg/sites/default/files/styles/uc_thumbnail/public/<?php print $node->field_image[$node->language][1]['filename']?>); background-position:center;  background-size:56px; background-repeat:no-repeat; margin-left:16px; margin-top:10px;" href="#nogo" title="product image 2"
                  tabindex="1">
                  <span>
                  <img class="large_images" src="http://www.drupalstore.shop.kg/sites/default/files/<?php print $node->field_image[$node->language][1]['filename'] ?>" alt="product image 2"
                      title="product image 2"><br>
                   
                    </span>
                    </a> 
                    
                    <a class="gallery slidec" style="background:url(http://www.drupalstore.shop.kg/sites/default/files/styles/uc_thumbnail/public/<?php print $node->field_image[$node->language][2]['filename'] ?>); background-position:center;  background-size:56px; background-repeat:no-repeat;  margin-left:16px; margin-top:10px;" href="#nogo" title="product image 3"
                  tabindex="1">
                  <span>
                  <img class="large_images" src="http://www.drupalstore.shop.kg/sites/default/files/<?php print $node->field_image[$node->language][2]['filename'] ?>" alt="product image 3"
                      title="product image 3"><br>
                    
                    </span>
                    </a> 
                    
                    <a class="gallery slided" style="background:url(http://www.drupalstore.shop.kg/sites/default/files/styles/uc_thumbnail/public/<?php print $node->field_image[$node->language][3]['filename'] ?>); background-position:center;  background-size:56px; background-repeat:no-repeat;  margin-left:16px; margin-top:10px;" href="#nogo" title="product image 4"
                  tabindex="1">
                  <span>
                  <img class="large_images" src="http://www.drupalstore.shop.kg/sites/default/files/<?php print $node->field_image[$node->language][3]['filename'] ?>" alt="product image 4"
                      title="product image 4"><br>
                   
                    </span>
                    </a>
                    </div> <!-- end thumbs-->
            </div> <!-- end scrollbox-->
          </div>  <!-- end holder -->
          
 <div id="product_description_div">   

<?php 
print render($node->body[$node->language][0]['value']);
?>

<p> 
Внимание! 
<br>
Данные изображения приведены для ознакомления. Фирма - производитель оставляет за собой право на внесение изменений в конструкцию, дизайн, комплектацию приборов и технические характеристики без предварительного уведомления. Помните, что в разных странах характеристики могут различаться. Изображения товара, включая цвет, могут отличаться от реального внешнего вида. Информация о технических характеристиках, комплекте поставки и внешнем виде основывается на последней доступной на момент публикации информации и может быть изменена без предварительного уведомления производителем.
<br>
Перед покупкой уточняйте технические характеристики, комплектацию и наличие товара в магазине у продавца.</p>
</div>

<? 

} ?>


