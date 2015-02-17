<div class="tipocambios form">
<?php echo $this->Form->create('Tipocambio'); ?>
	<fieldset>
		<legend><?php echo __('Edit Tipocambio'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('abreviatura');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Tipocambio.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Tipocambio.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tipocambios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Socios'), array('controller' => 'socios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Socio'), array('controller' => 'socios', 'action' => 'add')); ?> </li>
	</ul>
</div>
