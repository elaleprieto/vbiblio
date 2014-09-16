<div class="subscriptions index">
	<h2><?php echo __('Subscriptions'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('state'); ?></th>
			<th><?php echo $this->Paginator->sort('period'); ?></th>
			<th><?php echo $this->Paginator->sort('price'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('member_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($subscriptions as $subscription): ?>
	<tr>
		<td><?php echo h($subscription['Subscription']['id']); ?>&nbsp;</td>
		<td><?php echo h($subscription['Subscription']['title']); ?>&nbsp;</td>
		<td><?php echo h($subscription['Subscription']['description']); ?>&nbsp;</td>
		<td><?php echo h($subscription['Subscription']['state']); ?>&nbsp;</td>
		<td><?php echo h($subscription['Subscription']['period']); ?>&nbsp;</td>
		<td><?php echo h($subscription['Subscription']['price']); ?>&nbsp;</td>
		<td><?php echo h($subscription['Subscription']['created']); ?>&nbsp;</td>
		<td><?php echo h($subscription['Subscription']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($subscription['Member']['name'], array('controller' => 'members', 'action' => 'view', $subscription['Member']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $subscription['Subscription']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $subscription['Subscription']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $subscription['Subscription']['id']), array(), __('Are you sure you want to delete # %s?', $subscription['Subscription']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Subscription'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?> </li>
	</ul>
</div>
