<h1>Meus Posts</h1>
<table width="300">
<?php foreach($lista as $item): ?>
	<tr>
		<td><?php echo $item['id']; ?></td>
		<td><?php echo $item['titulo']; ?></td>
	</tr>
<?php endforeach; ?>
</table>

<?php for($q=1;$q<=$paginas;$q++): ?>
	<!--Identificando a pagina atual-->
	<?php if($paginaAtual == $q):  ?>
		<a href="<?php echo BASE_URL; ?>?p=<?php echo $q; ?>"><strong><?php echo $q; ?></strong></a>
	<?php else: ?>
		<a href="<?php echo BASE_URL; ?>?p=<?php echo $q; ?>"><?php echo $q; ?></a>
	<?php endif; ?>
<?php endfor; ?>