<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<style type="text/css">
	label.error { float: none; color: red; padding-left: .5em; vertical-align: top; }
</style>
<script type="text/javascript">
	$(document).ready(function() {
		$("#EventSearchForm").validate();
	});
 </script>

<?php
if($event['Event']['days'] < 0) {
?>
	<h2>O Casamento foi ANIMAL! Obrigado a todos que compareceram.</h2>
<?php
} else if ($event['Event']['days'] == 0) {
?>
	<h2>Hoje é o dia, se preparem para o melhor casamento das suas vidas!</h2>
<?php
} else {
?>
	<h2>Faltam <?php echo $event['Event']['days']; ?> dias!</h2>
<?php
}
?>

<br /><br />

<h3>Para confirmar sua presença em nosso casamento, digite os dados abaixo.</h3>

<br /><br /><br />
<?php

echo $this->Form->create('Event', array(
	'action' => 'search'
));

echo $this->Form->input('first_name', array(
	'label' => 'Primeiro nome',
	'class' => 'required',
	'minlength' => 3
));

echo $this->Form->input('last_name', array(
	'label' => 'Último nome',
	'class' => 'required',
	'minlength' => 3
));

echo $this->Form->end('Próximo');
?>
<!--
<br /><br />
<h2>Sugestões de presentes:</h2>
<br />
<a href="http://www.pontofrio.com.br/Site/ListaGerenciadaLandingPage.aspx?idListaCompra=181763" target="_Blank"><img src="/img/ponto_frio.png" /></a>

<a href="http://www.precolandia.com.br/giftlistview.aspx?idgiftlist=9EY290K729" target="_Blank"><img src="/img/precolandia.gif" /></a>
-->
<script type="text/javascript">
	$("#EventFirstName").focus();
</script>
