<?php if(!defined('PLX_ROOT')) exit; ?>
<aside role="complementary">
   <h3>
      <?php $plxShow->lang('TAGS'); ?>
   </h3>
   <ul>
      <?php $plxShow->tagList('<li class="tag #tag_size"><a class="#tag_status" href="#tag_url" title="#tag_name">#tag_name</a></li>', 20); ?>
   </ul>
</aside>