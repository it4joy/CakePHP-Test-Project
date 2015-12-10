<div class="actions">
	<?php if ($logged_user): ?>
		<p>Добрый день, <?=$logged_user['username'];?></p>
		<?=$this->Html->link('Выход', array('controller' => 'users', 'action' => 'logout'));?>
	<?php else: ?>
		<?=$this->Html->link('Вход', array('controller' => 'users', 'action' => 'login'));?>
	<?php endif; ?>

	<ul>
		<li><a href="/baker/">Главная</a></li>
		<li> <?=$this->Html->link('Добавить запись', array('controller' => 'posts', 'action' => 'add')); // =$this->Html->link('Add', '/posts/add'); // alternative variant;?> </li>
		<li> <?=$this->Html->link('Список пользователей', array('controller' => 'users', 'action' => 'index'));?> </li>
		<li> <?=$this->Html->link('Добавить нового пользователя', array('controller' => 'users', 'action' => 'add'));?> </li>
	</ul>
</div>