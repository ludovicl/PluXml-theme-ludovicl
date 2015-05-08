<?php include(dirname(__FILE__).'/header.php'); ?>
<section>
   <div id="container">
      <div class="full-width">
         <?php while($plxShow->plxMotor->plxRecord_arts->loop()): ?>
         <article role="article" id="post-<?php echo $plxShow->artId(); ?>">
            <header>
               <h1>
                  <?php $plxShow->artTitle('link'); ?>
               </h1>
               <h4>
                  <?php $plxShow->lang('WRITTEN_BY'); ?> <?php $plxShow->artAuthor() ?> /
                  <?php $plxShow->artDate('#num_day #month #num_year(4)'); ?> 
               </h4>
               <!-- / -->
               <!-- <?php $plxShow->artNbCom(); ?> -->                        
            </header>
            <section>
               <?php $plxShow->artChapo(); ?>
            </section>
            <footer>
               <p>
                  <!-- <?php $plxShow->lang('CLASSIFIED_IN') ?> : <?php $plxShow->artCat(); ?> / -->
                  <?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags(); ?> 
               </p>
            </footer>
         </article>
         <hr>
         <?php endwhile; ?>
         <div id="pagination">
            <?php $plxShow->pagination(); ?>
         </div>
         <h4>
            <?php $plxShow->lang('TAGS'); ?>
         </h4>
         <center>
            <ul>
               <?php $plxShow->tagList('<li class="tag #tag_size"><a class="#tag_status" href="#tag_url" title="#tag_name">#tag_name</a></li>', 20); ?>
            </ul>
         </center>
      </div>
   </div>
</section>
<?php include(dirname(__FILE__).'/footer.php'); ?>