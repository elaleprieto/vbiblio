<div class="cobradores view">
<h2><?php echo __('Cobrador'); ?></h2>
	<dl>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($cobrador['Cobrador']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion'); ?></dt>
		<dd>
			<?php echo h($cobrador['Cobrador']['direccion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($cobrador['Cobrador']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dni'); ?></dt>
		<dd>
			<?php echo h($cobrador['Cobrador']['dni']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observaciones'); ?></dt>
		<dd>
			<?php echo h($cobrador['Cobrador']['observaciones']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="related">
	<h3>Socios Relacionados</h3>
	<?php if (!empty($cobrador['Socio'])): ?>
		<table cellpadding = "0" cellspacing = "0" class="table table-striped">
			<thead>
				<tr>
					<th><?php echo __('Numero Entrada'); ?></th>
					<th><?php echo __('Apellido'); ?></th>
					<th><?php echo __('Nombre'); ?></th>
					<th><?php echo __('Docnumber'); ?></th>
					<th><?php echo __('Cuit'); ?></th>
					<th><?php echo __('Calle'); ?></th>
					<th><?php echo __('Numero'); ?></th>
					<th><?php echo __('Piso'); ?></th>
					<th><?php echo __('Localidad Name'); ?></th>
					<th><?php echo __('Email'); ?></th>
					<th><?php echo __('Telefono'); ?></th>
					<th><?php echo __('Celular'); ?></th>
					<th><?php echo __('Cobranza Domicilio'); ?></th>
					<th><?php echo __('Cobranza Localidad'); ?></th>
					<th><?php echo __('Cobranza No Print Rbo'); ?></th>
					<th><?php echo __('Cobranza Zona'); ?></th>
					<th><?php echo __('Cobranza Recorrido'); ?></th>
					<th><?php echo __('Carnet Pago'); ?></th>
					<th><?php echo __('Carnet Pedido'); ?></th>
					<th><?php echo __('Categoria Id'); ?></th>
					<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($cobrador['Socio'] as $socio): ?>
					<tr>
						<td><?php echo $socio['numero_entrada']; ?></td>
						<td><?php echo $socio['apellido']; ?></td>
						<td><?php echo $socio['nombre']; ?></td>
						<td><?php echo $socio['docnumber']; ?></td>
						<td><?php echo $socio['cuit']; ?></td>
						<td><?php echo $socio['calle']; ?></td>
						<td><?php echo $socio['numero']; ?></td>
						<td><?php echo $socio['piso']; ?></td>
						<td><?php echo $socio['localidad_name']; ?></td>
						<td><?php echo $socio['email']; ?></td>
						<td><?php echo $socio['telefono']; ?></td>
						<td><?php echo $socio['celular']; ?></td>
						<td><?php echo $socio['cobranza_domicilio']; ?></td>
						<td><?php echo $socio['cobranza_localidad']; ?></td>
						<td><?php echo $socio['cobranza_no_print_rbo']; ?></td>
						<td><?php echo $socio['cobranza_zona']; ?></td>
						<td><?php echo $socio['cobranza_recorrido']; ?></td>
						<td><?php echo $socio['carnet_pago']; ?></td>
						<td><?php echo $socio['carnet_pedido']; ?></td>
						<td><?php echo $socio['categoria_id']; ?></td>
						<td class="actions">
							<?php echo $this->Html->link(__('View'), array('controller' => 'socios', 'action' => 'view', $socio['id'])); ?>
							<?php echo $this->Html->link(__('Edit'), array('controller' => 'socios', 'action' => 'edit', $socio['id'])); ?>
							<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'socios', 'action' => 'delete', $socio['id']), array(), __('Are you sure you want to delete # %s?', $socio['id'])); ?>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	<?php endif; ?>
</div>
