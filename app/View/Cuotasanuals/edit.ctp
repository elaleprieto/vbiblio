<div class="cuotasanuals form">
<?php echo $this->Form->create('Cuotasanual'); ?>
	<fieldset>
		<legend><?php echo __('Edit Cuotasanual'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('fecha');
		echo $this->Form->input('importe');
		echo $this->Form->input('categorias_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Cuotasanual.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Cuotasanual.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Cuotasanuals'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Categorias'), array('controller' => 'categorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categorias'), array('controller' => 'categorias', 'action' => 'add')); ?> </li>
	</ul>
</div>
