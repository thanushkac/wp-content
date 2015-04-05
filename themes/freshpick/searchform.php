<form id="quick-search" action="<?php bloginfo('url'); ?>/" method="get" >
					<p>
					<label for="qsearch">Search:</label>
					<input class="tbox" id="qsearch" type="text" name="s" value="type and hit enter..." onfocus="if (this.value == 'type and hit enter...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'type and hit enter...';}" title="Start typing and hit ENTER" />
					<input class="btn" alt="Search" type="image" title="Search" src="<?php bloginfo('template_url'); ?>/images/search.gif" />
					</p>
				</form>