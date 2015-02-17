<div class="tipodocs view">
<h2><?php echo __('Tipodoc'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tipodoc['Tipodoc']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Abreviatura'); ?></dt>
		<dd>
			<?php echo h($tipodoc['Tipodoc']['abreviatura']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($tipodoc['Tipodoc']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tipodoc'), array('action' => 'edit', $tipodoc['Tipodoc']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tipodoc'), array('action' => 'delete', $tipodoc['Tipodoc']['id']), array(), __('Are you sure you want to delete # %s?', $tipodoc['Tipodoc']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipodocs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipodoc'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Socios'), array('controller' => 'socios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Socio'), array('controller' => 'socios', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Socios'); ?></h3>
	<?php if (!empty($tipodoc['Socio'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Numero Entrada'); ?></th>
		<th><?php echo __('Apellido'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Denominacion'); ?></th>
		<th><?php echo __('Docnumber'); ?></th>
		<th><?php echo __('Cuit'); ?></th>
		<th><?php echo __('Calle'); ?></th>
		<th><?php echo __('Numero'); ?></th>
		<th><?php echo __('Piso'); ?></th>
		<th><?php echo __('Localidad Id'); ?></th>
		<th><?php echo __('Ingreso'); ?></th>
		<th><?php echo __('Egreso'); ?></th>
		<th><?php echo __('Causa'); ?></th>
		<th><?php echo __('Cuentas Suscriptas'); ?></th>
		<th><?php echo __('Cuentas Integradas'); ?></th>
		<th><?php echo __('Observaciones'); ?></th>
		<th><?php echo __('Socionum'); ?></th>
		<th><?php echo __('Nacimiento'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Caracteristica'); ?></th>
		<th><?php echo __('Telefono'); ?></th>
		<th><?php echo __('Celular'); ?></th>
		<th><?php echo __('Presentador'); ?></th>
		<th><?php echo __('Profesion'); ?></th>
		<th><?php echo __('Campa Socios'); ?></th>
		<th><?php echo __('Ent Solicitud'); ?></th>
		<th><?php echo __('Ent Dni'); ?></th>
		<th><?php echo __('Ent Servicio'); ?></th>
		<th><?php echo __('Cobranza Domicilio'); ?></th>
		<th><?php echo __('Cobranza Localidad'); ?></th>
		<th><?php echo __('Cobranza No Print Rbo'); ?></th>
		<th><?php echo __('Cobranza Zona'); ?></th>
		<th><?php echo __('Cobranza Recorrido'); ?></th>
		<th><?php echo __('Foto'); ?></th>
		<th><?php echo __('Carnet Pago'); ?></th>
		<th><?php echo __('Carnet Pedido'); ?></th>
		<th><?php echo __('Categoria Id'); ?></th>
		<th><?php echo __('Cobrador Id'); ?></th>
		<th><?php echo __('Tipocambio Id'); ?></th>
		<th><?php echo __('Tipo Id'); ?></th>
		<th><?php echo __('Tipodoc Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($tipodoc['Socio'] as $socio): ?>
		<tr>
			<td><?php echo $socio['id']; ?></td>
			<td><?php echo $socio['numero_entrada']; ?></td>
			<td><?php echo $socio['apellido']; ?></td>
			<td><?php echo $socio['nombre']; ?></td>
			<td><?php echo $socio['denominacion']; ?></td>
			<td><?php echo $socio['docnumber']; ?></td>
			<td><?php echo $socio['cuit']; ?></td>
			<td><?php echo $socio['calle']; ?></td>
			<td><?php echo $socio['numero']; ?></td>
			<td><?php echo $socio['piso']; ?></td>
			<td><?php echo $socio['localidad_id']; ?></td>
			<td><?php echo $socio['ingreso']; ?></td>
			<td><?php echo $socio['egreso']; ?></td>
			<td><?php echo $socio['causa']; ?></td>
			<td><?php echo $socio['cuentas_suscriptas']; ?></td>
			<td><?php echo $socio['cuentas_integradas']; ?></td>
			<td><?php echo $socio['observaciones']; ?></td>
			<td><?php echo $socio['socionum']; ?></td>
			<td><?php echo $socio['nacimiento']; ?></td>
			<td><?php echo $socio['email']; ?></td>
			<td><?php echo $socio['caracteristica']; ?></td>
			<td><?php echo $socio['telefono']; ?></td>
			<td><?php echo $socio['celular']; ?></td>
			<td><?php echo $socio['presentador']; ?></td>
			<td><?php echo $socio['profesion']; ?></td>
			<td><?php echo $socio['campa_socios']; ?></td>
			<td><?php echo $socio['ent_solicitud']; ?></td>
			<td><?php echo $socio['ent_dni']; ?></td>
			<td><?php echo $socio['ent_servicio']; ?></td>
			<td><?php echo $socio['cobranza_domicilio']; ?></td>
			<td><?php echo $socio['cobranza_localidad']; ?></td>
			<td><?php echo $socio['cobranza_no_print_rbo']; ?></td>
			<td><?php echo $socio['cobranza_zona']; ?></td>
			<td><?php echo $socio['cobranza_recorrido']; ?></td>
			<td><?php echo $socio['foto']; ?></td>
			<td><?php echo $socio['carnet_pago']; ?></td>
			<td><?php echo $socio['carnet_pedido']; ?></td>
			<td><?php echo $socio['categoria_id']; ?></td>
			<td><?php echo $socio['cobrador_id']; ?></td>
			<td><?php echo $socio['tipocambio_id']; ?></td>
			<td><?php echo $socio['tipo_id']; ?></td>
			<td><?php echo $socio['tipodoc_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'socios', 'action' => 'view', $socio['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'socios', 'action' => 'edit', $socio['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'socios', 'action' => 'delete', $socio['id']), array(), __('Are you sure you want to delete # %s?', $socio['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Socio'), array('controller' => 'socios', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
