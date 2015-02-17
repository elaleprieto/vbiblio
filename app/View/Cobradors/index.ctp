<div class="cobradors index">
	<h2><?php echo __('Cobradors'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('direccion'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono'); ?></th>
			<th><?php echo $this->Paginator->sort('dni'); ?></th>
			<th><?php echo $this->Paginator->sort('observaciones'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($cobradors as $cobrador): ?>
	<tr>
		<td><?php echo h($cobrador['Cobrador']['id']); ?>&nbsp;</td>
		<td><?php echo h($cobrador['Cobrador']['name']); ?>&nbsp;</td>
		<td><?php echo h($cobrador['Cobrador']['direccion']); ?>&nbsp;</td>
		<td><?php echo h($cobrador['Cobrador']['telefono']); ?>&nbsp;</td>
		<td><?php echo h($cobrador['Cobrador']['dni']); ?>&nbsp;</td>
		<td><?php echo h($cobrador['Cobrador']['observaciones']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $cobrador['Cobrador']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cobrador['Cobrador']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cobrador['Cobrador']['id']), array(), __('Are you sure you want to delete # %s?', $cobrador['Cobrador']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Cobrador'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Socios'), array('controller' => 'socios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Socio'), array('controller' => 'socios', 'action' => 'add')); ?> </li>
	</ul>
</div>
