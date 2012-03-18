<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $event['Event']['name']; ?> - Faltam <?php echo $event['Event']['days']; ?> dias!
	</title>
	<?php
		echo $this->Html->css('style');

		echo $scripts_for_layout;

                ?>

    <link href='http://fonts.googleapis.com/css?family=Rouge+Script' rel='stylesheet' type='text/css'></link>
</head>
<body>
<div id="container_all">
	<div id="content_box">
		<div class="tWidth">
			<div id="header">
				<div class="left">
					<h1><a href="/"><img alt="logotype" src="/img/logotype.png" /><?php echo $event['Event']['name']; ?></a></h1>
				</div>
				<!--<div class="menu">
					<ul>
						<li><a class="active" href="index.html">home</a></li>
						<li><a href="index-1.html">about</a></li>
						<li><a href="index-2.html">photo services</a></li>
					</ul>
				</div>-->
				<div class="clear"></div>
			</div>
			<div id="content"><div class="indent">

				<?php echo $this->Session->flash(); ?>

                                <?php echo $content_for_layout; ?>
			</div></div>
		</div>
	</div>
	<div id="footer">
		<div class="tWidth">
		</div>
  </div>
</div>
<script type="text/javascript">
addHeight = function(){
	needHeight = document.getElementById('container_all').offsetHeight - document.getElementById('footer').offsetHeight;
	if ( document.getElementById('content_box').offsetHeight < needHeight){ document.getElementById('content_box').style.height = needHeight+'px'; }
}
window.onresize = function() {
	document.getElementById('content_box').style.height = 'auto';
	addHeight();
}
addHeight();
</script>

<?php echo $this->element('sql_dump'); ?>

</body>
</html>