<div class="recibos view">
<h2><?php echo __('Recibo'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($recibo['Recibo']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Importe'); ?></dt>
		<dd>
			<?php echo h($recibo['Recibo']['importe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Emision'); ?></dt>
		<dd>
			<?php echo h($recibo['Recibo']['emision']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Imputado'); ?></dt>
		<dd>
			<?php echo h($recibo['Recibo']['imputado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Anulado'); ?></dt>
		<dd>
			<?php echo h($recibo['Recibo']['anulado']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($recibo['Recibo']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($recibo['Recibo']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Socio'); ?></dt>
		<dd>
			<?php echo $this->Html->link($recibo['Socio']['id'], array('controller' => 'socios', 'action' => 'view', $recibo['Socio']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Recibo'), array('action' => 'edit', $recibo['Recibo']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Recibo'), array('action' => 'delete', $recibo['Recibo']['id']), array(), __('Are you sure you want to delete # %s?', $recibo['Recibo']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Recibos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recibo'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Socios'), array('controller' => 'socios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Socio'), array('controller' => 'socios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cuotas'), array('controller' => 'cuotas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cuota'), array('controller' => 'cuotas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Cuotas'); ?></h3>
	<?php if (!empty($recibo['Cuota'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Importe'); ?></th>
		<th><?php echo __('Observaciones'); ?></th>
		<th><?php echo __('Vencimiento'); ?></th>
		<th><?php echo __('Pagada'); ?></th>
		<th><?php echo __('Emitido'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Recibo Id'); ?></th>
		<th><?php echo __('Socio Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($recibo['Cuota'] as $cuota): ?>
		<tr>
			<td><?php echo $cuota['id']; ?></td>
			<td><?php echo $cuota['importe']; ?></td>
			<td><?php echo $cuota['observaciones']; ?></td>
			<td><?php echo $cuota['vencimiento']; ?></td>
			<td><?php echo $cuota['pagada']; ?></td>
			<td><?php echo $cuota['emitido']; ?></td>
			<td><?php echo $cuota['created']; ?></td>
			<td><?php echo $cuota['modified']; ?></td>
			<td><?php echo $cuota['recibo_id']; ?></td>
			<td><?php echo $cuota['socio_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'cuotas', 'action' => 'view', $cuota['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'cuotas', 'action' => 'edit', $cuota['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'cuotas', 'action' => 'delete', $cuota['id']), array(), __('Are you sure you want to delete # %s?', $cuota['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Cuota'), array('controller' => 'cuotas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
