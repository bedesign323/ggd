
<div id="header-container">
	<div id="header">
		<div id="logo"><a href="/">Gregory Graham Dalton</a></div>
		
		<div id="main-nav">
			<div class="menu-toggle">menu</div>

			<div id="menu">
				<?php print render($page['nav_main']); ?>
				<div class="social-icons">
					<a href="http://instagram.com/gregorygrahamdalton" class="icon-instagram" target="_blank"></a>
					<a href="http://vimeo.com/user5473154" class="icon-vimeo" target="_blank"></a>
					<a href="https://www.facebook.com/gregorygrahamdalton" class="icon-facebook" target="_blank"></a>
				</div>
			</div>
		</div> 

		
	</div>
	<div id="bg"></div>
</div>

<div id="main-container">
	<div class="main">
		<?php if(isset($messages)): ?>
			<div id="messages"><?php echo $messages; ?></div>
		<?php endif; ?>

		
		<div id="content">
			<?php print render($page['content']); ?>
		</div>
	</div>
</div>

<div id="bg-images"></div>