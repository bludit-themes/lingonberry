<div class="footer section">
	<div class="footer-inner section-inner">
		<div class="footer-a widgets">
			<div class="widget widget_recent_entries">
				<div class="widget-content">
					<h3 class="widget-title">Recent Posts</h3>
						<ul>
							<?php
							$onlyPublished = true;
							$pageNumber = 1;
							$numberOfItems = 5;
							$publishedPages = $pages->getList($pageNumber, $numberOfItems, $onlyPublished);

							foreach ($publishedPages as $pageKey) {
								try {
									$page = new Page($pageKey);
									echo'<li><a href="' . $page->permalink() . '">' . $page->title() . '</a></li>';
								} catch (Exception $e) {
								// Continue
								}
							}
							?>
						</ul>
				</div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
		</div>

		<div class="footer-b widgets">
			<div class="widget widget_recent_entries">
				<div class="widget-content">
					<h3 class="widget-title">Tags</h3>
						<ul>
							<?php

								foreach($tags->db as $key=>$fields) {
									echo '<li><a href="'.DOMAIN_TAGS.$key.'">'.$fields['name'].'</a></li>';
								}
							?>
						</ul>
				</div>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
		</div>

		<div class="footer-c widgets">
			<div class="widget-content">
					<h3 class="widget-title">Feed</h3>
						<ul>
							<?php if (Theme::sitemapUrl()): ?>
							<li><a href="<?php echo Theme::sitemapUrl() ?>">Sitemap</a></li>
							<?php endif; ?>

							<?php if (Theme::rssUrl()): ?>
							<li><a href="<?php echo Theme::rssUrl()?>">RSS Feed</a></li>
							<?php endif; ?>
						</ul>
				</div>
			<div class="clear"></div>
		</div>

		<div class="clear"></div>
	</div> <!-- /footer-inner -->
</div> <!-- /footer -->
