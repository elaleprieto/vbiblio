<div class="socios view">
<h2><?php echo __('Socio'); ?></h2>
	<dl>
		<!-- <dt><?php //echo __('Id'); ?></dt>
		<dd>
			<?php //echo h($socio['Socio']['id']); ?>
			&nbsp;
		</dd> -->
		<dt><?php echo __('Numero Entrada'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['numero_entrada']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apellido'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['apellido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Denominacion'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['denominacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Docnumber'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['docnumber']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cuit'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['cuit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Calle'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['calle']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['numero']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Piso'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['piso']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Localidad'); ?></dt>
		<dd>
			<?php echo h($socio['Localidad']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ingreso'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['ingreso']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Egreso'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['egreso']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Causa'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['causa']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cuentas Suscriptas'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['cuentas_suscriptas']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cuentas Integradas'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['cuentas_integradas']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observaciones'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['observaciones']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Socionum'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['socionum']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nacimiento'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['nacimiento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Caracteristica'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['caracteristica']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['telefono']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Celular'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['celular']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Presentador'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['presentador']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Profesion'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['profesion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Campa Socios'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['campa_socios']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ent Solicitud'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['ent_solicitud']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ent Dni'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['ent_dni']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ent Servicio'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['ent_servicio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cobranza Domicilio'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['cobranza_domicilio']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cobranza Localidad'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['cobranza_localidad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cobranza No Print Rbo'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['cobranza_no_print_rbo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cobranza Zona'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['cobranza_zona']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cobranza Recorrido'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['cobranza_recorrido']); ?>
			&nbsp;
		</dd>
		<!-- <dt><?php echo __('Foto'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['foto']); ?>
			&nbsp;
		</dd> -->
		<dt><?php echo __('Carnet Pago'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['carnet_pago']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Carnet Pedido'); ?></dt>
		<dd>
			<?php echo h($socio['Socio']['carnet_pedido']); ?>
			&nbsp;
		</dd>
		<!-- <dt><?php echo __('Categoria'); ?></dt>
		<dd>
			<?php echo $this->Html->link($socio['Categoria']['id'], array('controller' => 'categorias', 'action' => 'view', $socio['Categoria']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cobrador'); ?></dt>
		<dd>
			<?php echo $this->Html->link($socio['Cobrador']['name'], array('controller' => 'cobradores', 'action' => 'view', $socio['Cobrador']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipocambio'); ?></dt>
		<dd>
			<?php echo $this->Html->link($socio['Tipocambio']['name'], array('controller' => 'tipocambios', 'action' => 'view', $socio['Tipocambio']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
			<?php echo $this->Html->link($socio['Tipo']['name'], array('controller' => 'tipos', 'action' => 'view', $socio['Tipo']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipodoc'); ?></dt>
		<dd>
			<?php echo $this->Html->link($socio['Tipodoc']['name'], array('controller' => 'tipodocs', 'action' => 'view', $socio['Tipodoc']['id'])); ?>
			&nbsp;
		</dd> -->
	</dl>
</div>
<!-- <div class="actions">
	<h3><?php //echo __('Actions'); ?></h3>
	<ul>
		<li><?php //echo $this->Html->link(__('Edit Socio'), array('action' => 'edit', $socio['Socio']['id'])); ?> </li>
		<li><?php //echo $this->Form->postLink(__('Delete Socio'), array('action' => 'delete', $socio['Socio']['id']), array(), __('Are you sure you want to delete # %s?', $socio['Socio']['id'])); ?> </li>
		<li><?php //echo $this->Html->link(__('List Socios'), array('action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Socio'), array('action' => 'add')); ?> </li>
		<li><?php //echo $this->Html->link(__('List Localidades'), array('controller' => 'localidades', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Localidad'), array('controller' => 'localidades', 'action' => 'add')); ?> </li>
		<li><?php //echo $this->Html->link(__('List Categorias'), array('controller' => 'categorias', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Categoria'), array('controller' => 'categorias', 'action' => 'add')); ?> </li>
		<li><?php //echo $this->Html->link(__('List Cobradores'), array('controller' => 'cobradores', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Cobrador'), array('controller' => 'cobradores', 'action' => 'add')); ?> </li>
		<li><?php //echo $this->Html->link(__('List Tipocambios'), array('controller' => 'tipocambios', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Tipocambio'), array('controller' => 'tipocambios', 'action' => 'add')); ?> </li>
		<li><?php //echo $this->Html->link(__('List Tipos'), array('controller' => 'tipos', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Tipo'), array('controller' => 'tipos', 'action' => 'add')); ?> </li>
		<li><?php //echo $this->Html->link(__('List Tipodocs'), array('controller' => 'tipodocs', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Tipodoc'), array('controller' => 'tipodocs', 'action' => 'add')); ?> </li>
		<li><?php //echo $this->Html->link(__('List Cuotas'), array('controller' => 'cuotas', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Cuota'), array('controller' => 'cuotas', 'action' => 'add')); ?> </li>
		<li><?php //echo $this->Html->link(__('List Recibos'), array('controller' => 'recibos', 'action' => 'index')); ?> </li>
		<li><?php //echo $this->Html->link(__('New Recibo'), array('controller' => 'recibos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php //echo __('Related Cuotas'); ?></h3>
	<?php if (!empty($socio['Cuota'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php //echo __('Id'); ?></th>
		<th><?php //echo __('Importe'); ?></th>
		<th><?php //echo __('Observaciones'); ?></th>
		<th><?php //echo __('Vencimiento'); ?></th>
		<th><?php //echo __('Pagada'); ?></th>
		<th><?php //echo __('Emitido'); ?></th>
		<th><?php //echo __('Created'); ?></th>
		<th><?php //echo __('Modified'); ?></th>
		<th><?php //echo __('Recibo Id'); ?></th>
		<th><?php //echo __('Socio Id'); ?></th>
		<th class="actions"><?php //echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($socio['Cuota'] as $cuota): ?>
		<tr>
			<td><?php //echo $cuota['id']; ?></td>
			<td><?php //echo $cuota['importe']; ?></td>
			<td><?php //echo $cuota['observaciones']; ?></td>
			<td><?php //echo $cuota['vencimiento']; ?></td>
			<td><?php //echo $cuota['pagada']; ?></td>
			<td><?php //echo $cuota['emitido']; ?></td>
			<td><?php //echo $cuota['created']; ?></td>
			<td><?php //echo $cuota['modified']; ?></td>
			<td><?php //echo $cuota['recibo_id']; ?></td>
			<td><?php //echo $cuota['socio_id']; ?></td>
			<td class="actions">
				<?php //echo $this->Html->link(__('View'), array('controller' => 'cuotas', 'action' => 'view', $cuota['id'])); ?>
				<?php //echo $this->Html->link(__('Edit'), array('controller' => 'cuotas', 'action' => 'edit', $cuota['id'])); ?>
				<?php //echo $this->Form->postLink(__('Delete'), array('controller' => 'cuotas', 'action' => 'delete', $cuota['id']), array(), __('Are you sure you want to delete # %s?', $cuota['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php //echo $this->Html->link(__('New Cuota'), array('controller' => 'cuotas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php //echo __('Related Recibos'); ?></h3>
	<?php if (!empty($socio['Recibo'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php //echo __('Id'); ?></th>
		<th><?php //echo __('Importe'); ?></th>
		<th><?php //echo __('Emision'); ?></th>
		<th><?php //echo __('Imputado'); ?></th>
		<th><?php //echo __('Anulado'); ?></th>
		<th><?php //echo __('Created'); ?></th>
		<th><?php //echo __('Modified'); ?></th>
		<th><?php //echo __('Socio Id'); ?></th>
		<th class="actions"><?php //echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($socio['Recibo'] as $recibo): ?>
		<tr>
			<td><?php //echo $recibo['id']; ?></td>
			<td><?php //echo $recibo['importe']; ?></td>
			<td><?php //echo $recibo['emision']; ?></td>
			<td><?php //echo $recibo['imputado']; ?></td>
			<td><?php //echo $recibo['anulado']; ?></td>
			<td><?php //echo $recibo['created']; ?></td>
			<td><?php //echo $recibo['modified']; ?></td>
			<td><?php //echo $recibo['socio_id']; ?></td>
			<td class="actions">
				<?php //echo $this->Html->link(__('View'), array('controller' => 'recibos', 'action' => 'view', $recibo['id'])); ?>
				<?php //echo $this->Html->link(__('Edit'), array('controller' => 'recibos', 'action' => 'edit', $recibo['id'])); ?>
				<?php //echo $this->Form->postLink(__('Delete'), array('controller' => 'recibos', 'action' => 'delete', $recibo['id']), array(), __('Are you sure you want to delete # %s?', $recibo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php //echo $this->Html->link(__('New Recibo'), array('controller' => 'recibos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
 -->