<div class="content section-inner">
	<div class="posts">
		<div class="post">
		
		<!-- Plugins Post Begin -->
		<?php Theme::plugins('pageBegin') ?>
		
			<div class="content-inner comments-allowed">	
				<div class="post-header">
				
					<?php if($page->coverImage()) {
							echo '<div class="featured-media">';
							echo 	'<img class="attachment-post-image wp-post-image cover-image" src="'.$page->coverImage().'" alt="Cover Image">';
							echo		'<div class="media-caption-container">';
							echo			'<a href="'.$page->permalink().'" rel="bookmark" title="'.$page->title().'">';
							echo				'<p class="media-caption">'.$page->description().'</p>';
							echo			'</a>';
							echo		'</div>';
							echo '</div> <!-- /featured-media -->';
					} ?>
		
					<h2 class="post-title"><a href="<?php echo $page->permalink() ?>" rel="bookmark" title="<?php echo $page->title() ?>"><?php echo $page->title() ?></a></h2>
					
					<div class="post-meta">
					
						<span class="post-date"><a href="<?php echo $page->permalink() ?>" title="<?php echo $page->date() ?>"><?php echo $page->date() ?></a></span>
						<span class="date-sep"> / </span>
						<span class="post-author"><?php
							if( Text::isNotEmpty($page->user('firstName')) || Text::isNotEmpty($page->user('lastName')) ) {
								echo $page->user('firstName').' '.$page->user('lastName');
							}
								else {
								echo $page->user('username');
							}
						?></span>
						
					</div> <!-- /post-meta -->
				</div> <!-- /post-header -->
				
				<div class="post-content">
					<?php echo $page->content() ?>
					
					<div class="post-cat-tags">
						<p class="post-tags">Tags: 
							<?php
								$tags = $page->tags(true);
								
								foreach($tags as $tagKey=>$tagName) {
									echo '<a class="post-category" href="'.HTML_PATH_ROOT.$url->filters('tag').'/'.$tagKey.'">'.$tagName.'</a>';
								}
							?>
						</p>
					</div>
				</div> <!-- /post-content -->
			</div> <!-- /post content-inner -->
			
			<div class="comments">
				<!-- Post plugins -->
				<?php Theme::plugins('pageEnd') ?>
			</div>
			
		</div> <!-- /post -->
		
		<div class="clear"></div>
		
	</div> <!-- /posts -->
</div> <!-- /content section-inner -->
