<p><b>Total de pessoas confirmadas:</b> <?php echo $total_confirmed; ?></p>
<p><b>Total de pessoas não confirmadas:</b> <?php echo $total_unconfirmed; ?></p>
<p><b>Total de convidados:</b> <?php echo $total_confirmed+$total_unconfirmed; ?></p>

<br /><br />

<table>

	<tr>
		<th>ID</th>
		<th>Nome</th>
		<th>Sobrenome</th>
		<th>Companhias</th>
		<th>Confirmado?</th>
		<th>Data da confirmação</th>
	</tr>

<?php foreach($guests as $g) { ?>
<tr>
	<td><?php echo $g['Guest']['id']; ?></td>
	<td><?php echo $g['Guest']['first_name']; ?></td>
	<td><?php echo $g['Guest']['last_name']; ?></td>
	<td><?php echo $g['Guest']['companions']; ?></td>
	<td><?php echo $g['Guest']['confirmed'] == 1 ? 'Sim' : 'Não'; ?></td>
	<td><?php echo $g['Guest']['confirmed'] == 1 ? $g['Guest']['dateF'] : '-'; ?></td>
</tr>
<?php } ?>


</table>

