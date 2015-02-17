<div class="cuotasmensuals index">
	<h2><?php echo __('Cuotasmensuals'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('importe'); ?></th>
			<th><?php echo $this->Paginator->sort('observaciones'); ?></th>
			<th><?php echo $this->Paginator->sort('vencimiento'); ?></th>
			<th><?php echo $this->Paginator->sort('pagada'); ?></th>
			<th><?php echo $this->Paginator->sort('emitido'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('recibo_id'); ?></th>
			<th><?php echo $this->Paginator->sort('socio_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($cuotasmensuals as $cuotasmensual): ?>
	<tr>
		<td><?php echo h($cuotasmensual['Cuotasmensual']['id']); ?>&nbsp;</td>
		<td><?php echo h($cuotasmensual['Cuotasmensual']['importe']); ?>&nbsp;</td>
		<td><?php echo h($cuotasmensual['Cuotasmensual']['observaciones']); ?>&nbsp;</td>
		<td><?php echo h($cuotasmensual['Cuotasmensual']['vencimiento']); ?>&nbsp;</td>
		<td><?php echo h($cuotasmensual['Cuotasmensual']['pagada']); ?>&nbsp;</td>
		<td><?php echo h($cuotasmensual['Cuotasmensual']['emitido']); ?>&nbsp;</td>
		<td><?php echo h($cuotasmensual['Cuotasmensual']['created']); ?>&nbsp;</td>
		<td><?php echo h($cuotasmensual['Cuotasmensual']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($cuotasmensual['Recibo']['id'], array('controller' => 'recibos', 'action' => 'view', $cuotasmensual['Recibo']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($cuotasmensual['Socio']['id'], array('controller' => 'socios', 'action' => 'view', $cuotasmensual['Socio']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $cuotasmensual['Cuotasmensual']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cuotasmensual['Cuotasmensual']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cuotasmensual['Cuotasmensual']['id']), array(), __('Are you sure you want to delete # %s?', $cuotasmensual['Cuotasmensual']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Cuotasmensual'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Recibos'), array('controller' => 'recibos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recibo'), array('controller' => 'recibos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Socios'), array('controller' => 'socios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Socio'), array('controller' => 'socios', 'action' => 'add')); ?> </li>
	</ul>
</div>
