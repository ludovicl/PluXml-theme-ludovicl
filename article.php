<?php include(dirname(__FILE__).'/header.php'); ?>
<section>
   <div id="container">
      <div class="full-width">
         <article role="article" id="post-<?php echo $plxShow->artId(); ?>">
            <header>
               <center>
                  <h1>
                     <?php $plxShow->artTitle(''); ?>
                  </h1>
                     <?php $plxShow->lang('WRITTEN_BY') ?> <?php $plxShow->artAuthor(); ?> /
                     <?php $plxShow->artDate('#num_day #month #num_year(4)'); ?>
               </center>
            </header>
            <section>
			<p align=justify>
               <?php $plxShow->artContent(); ?>
		   </p>
            </section>
            <footer>
               <p>
                  <?php $plxShow->lang('TAGS') ?> : <?php $plxShow->artTags(); ?>
               </p>
            </footer>
         </article>
         <?php $plxShow->artAuthorInfos('<div class="author-infos">#art_authorinfos</div>'); ?>
      </div>
   </div>
</section>
<?php include(dirname(__FILE__).'/footer.php'); ?>