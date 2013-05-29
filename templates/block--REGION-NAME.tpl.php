<ul class="nav nav-list">
	<?php print render($title_prefix); ?>
	<?php if ($block->subject): ?>
	  <li><h4<?php print $title_attributes; ?>><?php print $block->subject; ?></h4></li>
	<?php endif; ?>
	<?php print $content; ?>
</ul>
