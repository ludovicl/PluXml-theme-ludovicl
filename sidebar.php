<?php if(!defined('PLX_ROOT')) exit; ?>

	<aside role="complementary">

		<!-- <h3>
			<?php $plxShow->lang('CATEGORIES'); ?>
		</h3>

		<ul>
			<?php $plxShow->catList('','<li id="#cat_id"><a class="#cat_status" href="#cat_url" title="#cat_name">#cat_name</a> (#art_nb)</li>'); ?>
		</ul>

		<h3>
			<?php $plxShow->lang('LATEST_ARTICLES'); ?>
		</h3>

		<ul>
			<?php $plxShow->lastArtList('<li><a class="#art_status" href="#art_url" title="#art_title">#art_title</a></li>'); ?>
		</ul> -->

		<h3>
			<?php $plxShow->lang('TAGS'); ?>
		</h3>

		<ul>
			<?php $plxShow->tagList('<li class="tag #tag_size"><a class="#tag_status" href="#tag_url" title="#tag_name">#tag_name</a></li>', 20); ?>
		</ul>

		<!-- <h3>
			<?php $plxShow->lang('LATEST_COMMENTS'); ?>
		</h3>

		<ul>
			<?php $plxShow->lastComList('<li><a href="#com_url">#com_author '.$plxShow->getLang('SAID').' : #com_content(34)</a></li>'); ?>
		</ul>

		<h3>
			<?php $plxShow->lang('ARCHIVES'); ?>
		</h3> -->

		

	</aside>
