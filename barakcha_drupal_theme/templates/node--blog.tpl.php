

<script type="text/javascript" src="<?php print base_path() . path_to_theme()?>/js/jquery.bpopup-0.7.0.min.js"></script>


    <script type="text/javascript"> 
 
    // $ is assigned to jQuery
    ;(function($) {

         // DOM Ready
        $(function() {

            // Binding a click event
            // From jQuery v.1.7.0 use .on() instead of .bind()
            $('#my-button').bind('click', function(e) {

                // Prevents the default action to be triggered. 
                e.preventDefault();

                // Triggering bPopup when click event is fired
                $('#element_to_pop_up').bPopup();

            });

        });

    })(jQuery); </script>


<div> <!-- div wrapper starts -->
     
<?php if($page == 0) 
{
?>


   <div> <!-- div  title starts-->
      <a href="<?php print $node_url?>">
         <?php print render($node->title); ?>
      </a>
   </div><!-- div  title ends-->
   
   <div><!-- div  teaser image starts-->
      <a href="<?php print $node_url?>">
         <img src="<?php print image_style_url('medium', $node->field_blog_image[$node->language][0]['filename']) ?>"/>
      </a>
   </div><!-- div teaser image ends -->


 

<?php 
} 
else 
{ 
?>
<div><!-- div links starts -->

<?php print render($content['links']); ?>

</div><!-- div links finishes -->

<div><!-- div  body starts-->
   <?php 
   print render ($node->body[$node->language][0]['safe_value']);
   ?>
</div><!-- div  body ends-->

<div><!-- div  body image starts-->
   <?php
   print render($content['field_blog_image']);
   ?>
</div><!-- div  body image ends -->

<div><!-- div ekspert rating starts -->
   <span>Експерт</span>
   <?php
  
   if (arg(0) == 'node' && is_numeric(arg(1)) && ($node = node_load(arg(1)))) 
   {
   print rate_embed($node, 'ekspert');
   }
   ?>
</div><!-- div ekspert rating ends -->
<span>Vote field 1</span>
<?php
print render(field_view_field('node', $node, 'field_ekspert_vote','basic'));
?>
<div><!-- div mudrets rating starts -->
<span>Vote field 2</span>
  <?php
print render(field_view_field('node', $node, 'field_star_rating','basic'));
?>
</div><!-- div mudrets rating ends -->


<div><!-- div znatok rating starts -->
  
</div><!-- div znatok rating ends -->

<div><!-- div novichok rating starts -->
   
</div><!-- div novichok rating ends -->


<div><!-- div flag_follow starts -->
   <?php print flag_create_link('ekspert_1', $node->nid); ?>
</div><!-- div flag_follw ends -->

<div>
<?php 
print $node->toclist;
print $node->toccontent;
?>
</div>


   <!-- Button that triggers the popup -->
            <button id="my-button">Add comment</button>
            <!-- Element to pop up -->
            <div id="element_to_pop_up">
            <?php 
          print $comments_block;

             ?>
            <span class="bClose">X</span>
            </div>



         
<?php
}
?>

 <?php print render($content['comments']); ?>

</div><!-- div wrapper ends -->



