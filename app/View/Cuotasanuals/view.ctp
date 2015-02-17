<div class="cuotasanuals view">
<h2><?php echo __('Cuotasanual'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cuotasanual['Cuotasanual']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($cuotasanual['Cuotasanual']['fecha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Importe'); ?></dt>
		<dd>
			<?php echo h($cuotasanual['Cuotasanual']['importe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($cuotasanual['Cuotasanual']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($cuotasanual['Cuotasanual']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Categorias'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cuotasanual['Categorias']['id'], array('controller' => 'categorias', 'action' => 'view', $cuotasanual['Categorias']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cuotasanual'), array('action' => 'edit', $cuotasanual['Cuotasanual']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cuotasanual'), array('action' => 'delete', $cuotasanual['Cuotasanual']['id']), array(), __('Are you sure you want to delete # %s?', $cuotasanual['Cuotasanual']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cuotasanuals'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cuotasanual'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categorias'), array('controller' => 'categorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categorias'), array('controller' => 'categorias', 'action' => 'add')); ?> </li>
	</ul>
</div>
