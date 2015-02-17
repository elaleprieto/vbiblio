<div class="cuotasanuals form">
<?php echo $this->Form->create('Cuotasanual'); ?>
	<fieldset>
		<legend><?php echo __('Add Cuotasanual'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Cuotasanuals'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Categorias'), array('controller' => 'categorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categorias'), array('controller' => 'categorias', 'action' => 'add')); ?> </li>
	</ul>
</div>
