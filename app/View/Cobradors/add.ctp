<div class="cobradors form">
<?php echo $this->Form->create('Cobrador'); ?>
	<fieldset>
		<legend><?php echo __('Add Cobrador'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('direccion');
		echo $this->Form->input('telefono');
		echo $this->Form->input('dni');
		echo $this->Form->input('observaciones');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Cobradors'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Socios'), array('controller' => 'socios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Socio'), array('controller' => 'socios', 'action' => 'add')); ?> </li>
	</ul>
</div>
