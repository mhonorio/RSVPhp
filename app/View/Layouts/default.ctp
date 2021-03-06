<!DOCTYPE html>
<html lang="pt-br">
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
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-4103396-3']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body>
<div id="container_all">
	<div id="content_box">
		<div class="tWidth">
			<div id="header">
				<div class="left">
					<h1><a href="/"><img alt="logotype" src="/img/logotype.png" /><?php echo $event['Event']['name']; ?></a></h1>
				</div>
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
			Agradecimento especial ao meu amigo <a href="http://marcioseiji.com/blog/" target="_blank" style="text-decoration: underline;">Marcio Seiji</a> por ter ajudado no desenvolvimento desse site :-)
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
