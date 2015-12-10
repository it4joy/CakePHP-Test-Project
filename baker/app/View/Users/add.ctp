<h1>Добавление пользователя</h1>

<?=$this->element('sidebar');?>

<div class="block-content">
	<?php
	echo $this->Form->create('User');
	echo $this->Form->input('username', array('label' => 'Логин'));
	echo $this->Form->input('password', array('label' => 'Пароль'));
	echo $this->Form->end('Регистрация');
	?>
</div>
