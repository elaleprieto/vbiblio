<div class="provincias view">
<h2><?php echo __('Provincia'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($provincia['Provincia']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($provincia['Provincia']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Provincia'), array('action' => 'edit', $provincia['Provincia']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Provincia'), array('action' => 'delete', $provincia['Provincia']['id']), array(), __('Are you sure you want to delete # %s?', $provincia['Provincia']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Provincias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Provincia'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Localidads'), array('controller' => 'localidads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Localidad'), array('controller' => 'localidads', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Localidads'); ?></h3>
	<?php if (!empty($provincia['Localidad'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Postal'); ?></th>
		<th><?php echo __('Provincia Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($provincia['Localidad'] as $localidad): ?>
		<tr>
			<td><?php echo $localidad['id']; ?></td>
			<td><?php echo $localidad['name']; ?></td>
			<td><?php echo $localidad['postal']; ?></td>
			<td><?php echo $localidad['provincia_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'localidads', 'action' => 'view', $localidad['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'localidads', 'action' => 'edit', $localidad['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'localidads', 'action' => 'delete', $localidad['id']), array(), __('Are you sure you want to delete # %s?', $localidad['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Localidad'), array('controller' => 'localidads', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
