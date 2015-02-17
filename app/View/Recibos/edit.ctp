<div class="recibos form">
<?php echo $this->Form->create('Recibo'); ?>
	<fieldset>
		<legend><?php echo __('Edit Recibo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('importe');
		echo $this->Form->input('emision');
		echo $this->Form->input('imputado');
		echo $this->Form->input('anulado');
		echo $this->Form->input('socio_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Recibo.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Recibo.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Recibos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Socios'), array('controller' => 'socios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Socio'), array('controller' => 'socios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cuotas'), array('controller' => 'cuotas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cuota'), array('controller' => 'cuotas', 'action' => 'add')); ?> </li>
	</ul>
</div>
