<h1>Редактирование записи: <?=$post['Post']['title'];?> </h1>

<?=$this->element('sidebar');?>

<div class="block-content">
	<?php
	echo $this->Form->create('Post');
	echo $this->Form->input('title', array('label' => 'Заголовок'));
	echo $this->Form->input('body', array('rows' => '3', 'label' => 'Текст'));
	echo $this->Form->hidden('id');
	echo $this->Form->end('Изменить');
	?>
</div>
