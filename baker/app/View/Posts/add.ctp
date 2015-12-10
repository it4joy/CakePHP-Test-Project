<h1>Добавление записи</h1>

<?=$this->element('sidebar');?>

<div class="block-content">
	<?php
	echo $this->Form->create('Post');
	echo $this->Form->input('title', array('label' => 'Заголовок'));
	echo $this->Form->input('body', array('rows' => '3', 'label' => 'Текст'));
	echo $this->Form->end('Сохранить');
	?>
</div>
