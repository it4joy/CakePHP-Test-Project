<h1>Пользователи:</h1>

<?=$this->element('sidebar');?>

<div class="block-content">
	<table>
		<tr>
			<th>Id</th>
			<th>Логин</th>
			<th>Дата создания</th>
			<th>Дата модификации</th>
		</tr>
	<?php foreach($users as $user) : ?>
		<tr>
			<td> <?=$user['User']['id'];?> </td>
			<td> <?=h($user['User']['username']);?> </td>
			<td> <?=$user['User']['created'];?> </td>
			<td> <?=$user['User']['modified'];?> </td>
		</tr>
	<?php endforeach; ?>
	</table>
</div>