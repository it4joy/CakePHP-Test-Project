<h1>Записи:</h1>

<?=$this->element('sidebar');?>

<div class="block-content">
	<table>
		<tr>
			<th>Id</th>
			<th>Название</th>
			<th>Содержание</th>
			<th>Дата создания</th>
			<th>Дата модификации</th>
			<th>Действия</th>
		</tr>
	<?php foreach($posts as $post) : ?>
		<tr>
			<td> <?=$post['Post']['id']?> </td>
			<td> <?=$this->Html->link( h($post['Post']['title']), array('controller' => 'posts', 'action' => 'view', $post['Post']['id']) );?> </td>
			<td> <?=h($post['Post']['body'])?> </td>
			<td> <?=$post['Post']['created']?> </td>
			<td> <?=$post['Post']['modified']?> </td>
			<td> <?=$this->Html->link('Edit', array('controller' => 'posts', 'action' => 'edit', $post['Post']['id']));?> |
			<?=$this->Form->postLink('Del', array('controller' => 'posts', 'action' => 'delete', $post['Post']['id']), array('confirm' => 'Подтвердите удаление'));?> </td>
		</tr>
	<?php endforeach; ?>
	</table>
</div>