<div class="recibos index">
	<h2><?php echo __('Recibos'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="table table-striped">
		<thead>
			<tr>
				<!-- <th><?php //echo $this->Paginator->sort('id'); ?></th> -->
				<th><?php echo $this->Paginator->sort('socio_id'); ?></th>
				<th><?php echo $this->Paginator->sort('importe'); ?></th>
				<th><?php echo $this->Paginator->sort('emision'); ?></th>
				<th class="text-center"><?php echo $this->Paginator->sort('imputado'); ?></th>
				<th class="text-center"><?php echo $this->Paginator->sort('anulado'); ?></th>
				<!-- <th><?php //echo $this->Paginator->sort('created'); ?></th> -->
				<!-- <th><?php //echo $this->Paginator->sort('modified'); ?></th> -->
				<th class="actions"><?php echo __('Actions'); ?></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($recibos as $recibo): ?>
				<tr>
					<!-- <td><?php //echo h($recibo['Recibo']['id']); ?>&nbsp;</td> -->
					<td>
						<?php echo $this->Html->link($recibo['Socio']['name'], array('controller' => 'socios', 'action' => 'view', $recibo['Socio']['id'])); ?>
					</td>
					<td>
						<?php echo $this->Number->format($recibo['Recibo']['importe'], array(
						    'places' => 2,
						    'before' => '$ ',
						    'escape' => false,
						    'decimals' => ',',
						    'thousands' => '.'
						)); ?>&nbsp;
					</td>
					<td><?php echo $this->Time->format($recibo['Recibo']['emision'], '%d-%m-%Y'); ?>&nbsp;</td>
					<td class="text-center">
						<?php if($recibo['Recibo']['imputado']): ?>
							<i class="fa fa-check"></i>
						<?php else: ?>
							&nbsp;
						<?php endif; ?>
					</td>


					<!-- <td><?php echo h($recibo['Recibo']['anulado']); ?>&nbsp;</td> -->
					<td class="text-center">
						<?php if($recibo['Recibo']['anulado']): ?>
							<i class="fa fa-check"></i>
						<?php else: ?>
							&nbsp;
						<?php endif; ?>
					</td>
					<!-- <td><?php //echo h($recibo['Recibo']['created']); ?>&nbsp;</td> -->
					<!-- <td><?php //echo h($recibo['Recibo']['modified']); ?>&nbsp;</td> -->
					<td class="actions">
						<?php echo $this->Html->link(__('View'), array('action' => 'view', $recibo['Recibo']['id'])); ?>
						<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $recibo['Recibo']['id'])); ?>
						<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $recibo['Recibo']['id']), array(), __('Are you sure you want to delete # %s?', $recibo['Recibo']['id'])); ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<p class="text-center">
		<?php
		echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
		));
		?>
	</p>
	<div class="paging">
		<?php
			echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
			echo $this->Paginator->numbers(array('separator' => ''));
			echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
		?>
	</div>
</div>
<!-- <div class="actions">
	<h3><?php //echo __('Actions'); ?></h3>
	<ul>
		<li><?php //echo $this->Html->link(__('New Recibo'), array('action' => 'add')); ?></li>
		<li><?php //echo $this->Html->link(__('List Socios'), array('controller' => 'socios', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Socio'), array('controller' => 'socios', 'action' => 'add')); ?> </li>
		<li><?php //echo $this->Html->link(__('List Cuotas'), array('controller' => 'cuotas', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Cuota'), array('controller' => 'cuotas', 'action' => 'add')); ?> </li>
	</ul>
</div>
 -->