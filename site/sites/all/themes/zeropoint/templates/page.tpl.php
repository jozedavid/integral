

<header id="header">
	<div class="container-fluid bg-header">
		<div class="container">
			<div class="col-md-3">
				<a href="#"><img class="brand" src="integral_logo.png" alt="..."></a>
			</div><!-- logo -->
			<div class="col-md-9">
				<div class="btn-group language pull-right">
	  			<button class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
					Idiomas
					<span class="caret"></span>
	  			</button>
				  <ul class="dropdown-menu" role="menu">
				    <li>
				    	<a href="#">idioma 1</a>
				    </li>
				    <li>
				    	<a href="#">idioma 2</a>
				    </li>
				  </ul>
				  <!--<div id="user_links"><?php print zeropoint_login() ?></div>-->
				</div>
			</div><!-- language -->	
		</div>
	</div>
	<div class="container-fluid container-bg-menu">
		<div class="container">
      <?php if ($main_menu || $page['dropdown']): ?>
          <div id="" class="<?php print menupos() ?> pull-right">
          <?php if (!empty($page['dropdown'])) { ?><?php print render($page['dropdown']); ?><?php } ?>
          <?php if (empty($page['dropdown'])) { ?>
          <?php print theme('links__system_main_menu', array(
                    'links' => $main_menu,
                    'attributes' => array(
                      'id' => 'menu',
                      'class' => array('links',	 'clearfix'),
                    ),
                    /*'heading' => array(
                      'text' => t('Main menu'),
                      'level' => 'h2',
                      'class' => array('element-invisible'),
                    ),*/)); ?><?php } ?>
          </div>
        <?php endif;  ?>

		</div>
	</div>
</header>

<div id="main-container">
  <?php if ($page['highlighted']): ?><div id="mission"><?php print render ($page['highlighted']); ?></div><?php endif; ?>
  <?php print render($title_prefix); ?>
  <?php if ($title): if ($is_front){ print '<h2 class="title">'. $title .'</h2>'; } else { print '<h1 class="title">'. $title .'</h1>'; } endif; ?>
  <?php print render($title_suffix); ?>
  <div class="tabs"><?php print render($tabs); ?></div>
  <?php print render($page['help']); ?>
  <?php print $messages ?>
  <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
  <?php if ($page['content']) : ?><?php print render ($page['content']); ?><?php endif; ?>
  <?php print $feed_icons; ?>
</div>