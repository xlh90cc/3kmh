	<div class="breadCrumbOuter">
		<div class="breadCrumbInner row">
			<!-- パンくず -->
			<div class="breadCrumb large-12 columns">
				<?php if (class_exists('WP_SiteManager_bread_crumb')) { WP_SiteManager_bread_crumb::bread_crumb('type=string&home_label=TOP'); } ?>
			</div>
			<!-- パンくず -->
		</div>
	</div>