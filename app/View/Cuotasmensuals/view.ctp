<div class="cuotasmensuals view">
<h2><?php echo __('Cuotasmensual'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cuotasmensual['Cuotasmensual']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Importe'); ?></dt>
		<dd>
			<?php echo h($cuotasmensual['Cuotasmensual']['importe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observaciones'); ?></dt>
		<dd>
			<?php echo h($cuotasmensual['Cuotasmensual']['observaciones']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vencimiento'); ?></dt>
		<dd>
			<?php echo h($cuotasmensual['Cuotasmensual']['vencimiento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pagada'); ?></dt>
		<dd>
			<?php echo h($cuotasmensual['Cuotasmensual']['pagada']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Emitido'); ?></dt>
		<dd>
			<?php echo h($cuotasmensual['Cuotasmensual']['emitido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($cuotasmensual['Cuotasmensual']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($cuotasmensual['Cuotasmensual']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Recibo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cuotasmensual['Recibo']['id'], array('controller' => 'recibos', 'action' => 'view', $cuotasmensual['Recibo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Socio'); ?></dt>
		<dd>
			<?php echo $this->Html->link($cuotasmensual['Socio']['id'], array('controller' => 'socios', 'action' => 'view', $cuotasmensual['Socio']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Cuotasmensual'), array('action' => 'edit', $cuotasmensual['Cuotasmensual']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cuotasmensual'), array('action' => 'delete', $cuotasmensual['Cuotasmensual']['id']), array(), __('Are you sure you want to delete # %s?', $cuotasmensual['Cuotasmensual']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Cuotasmensuals'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cuotasmensual'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recibos'), array('controller' => 'recibos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recibo'), array('controller' => 'recibos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Socios'), array('controller' => 'socios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Socio'), array('controller' => 'socios', 'action' => 'add')); ?> </li>
	</ul>
</div>
