<div class="provincias form">
<?php echo $this->Form->create('Provincia'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Provincia'); ?></legend>
	<?php
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Provincias'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Localidads'), array('controller' => 'localidads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Localidad'), array('controller' => 'localidads', 'action' => 'add')); ?> </li>
	</ul>
</div>
