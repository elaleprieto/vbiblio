<div class="localidads form">
<?php echo $this->Form->create('Localidad'); ?>
	<fieldset>
		<legend><?php echo __('Add Localidad'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('postal');
		echo $this->Form->input('provincia_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Localidads'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Provincias'), array('controller' => 'provincias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Provincia'), array('controller' => 'provincias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Socios'), array('controller' => 'socios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Socio'), array('controller' => 'socios', 'action' => 'add')); ?> </li>
	</ul>
</div>
