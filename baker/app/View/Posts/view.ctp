<?=$this->element('sidebar');?>

<div class="block-content">
	<h1> <?=h($post['Post']['title']);?> </h1>
	<p>Дата создания: <?=$post['Post']['created'];?></p>
	<p> <?=h($post['Post']['body']);?> </p>
</div>