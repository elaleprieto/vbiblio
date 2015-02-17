<div class="socios form">
<?php echo $this->Form->create('Socio'); ?>
	<fieldset>
		<legend><?php echo __('Edit Socio'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('numero_entrada');
		echo $this->Form->input('apellido');
		echo $this->Form->input('nombre');
		echo $this->Form->input('denominacion');
		echo $this->Form->input('docnumber');
		echo $this->Form->input('cuit');
		echo $this->Form->input('calle');
		echo $this->Form->input('numero');
		echo $this->Form->input('piso');
		echo $this->Form->input('localidad_id');
		echo $this->Form->input('ingreso');
		echo $this->Form->input('egreso');
		echo $this->Form->input('causa');
		echo $this->Form->input('cuentas_suscriptas');
		echo $this->Form->input('cuentas_integradas');
		echo $this->Form->input('observaciones');
		echo $this->Form->input('socionum');
		echo $this->Form->input('nacimiento');
		echo $this->Form->input('email');
		echo $this->Form->input('caracteristica');
		echo $this->Form->input('telefono');
		echo $this->Form->input('celular');
		echo $this->Form->input('presentador');
		echo $this->Form->input('profesion');
		echo $this->Form->input('campa_socios');
		echo $this->Form->input('ent_solicitud');
		echo $this->Form->input('ent_dni');
		echo $this->Form->input('ent_servicio');
		echo $this->Form->input('cobranza_domicilio');
		echo $this->Form->input('cobranza_localidad');
		echo $this->Form->input('cobranza_no_print_rbo');
		echo $this->Form->input('cobranza_zona');
		echo $this->Form->input('cobranza_recorrido');
		echo $this->Form->input('foto');
		echo $this->Form->input('carnet_pago');
		echo $this->Form->input('carnet_pedido');
		echo $this->Form->input('categoria_id');
		echo $this->Form->input('cobrador_id');
		echo $this->Form->input('tipocambio_id');
		echo $this->Form->input('tipo_id');
		echo $this->Form->input('tipodoc_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Socio.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Socio.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Socios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Localidades'), array('controller' => 'localidades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Localidad'), array('controller' => 'localidades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categorias'), array('controller' => 'categorias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria'), array('controller' => 'categorias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cobradors'), array('controller' => 'cobradors', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cobrador'), array('controller' => 'cobradors', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipocambios'), array('controller' => 'tipocambios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipocambio'), array('controller' => 'tipocambios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipos'), array('controller' => 'tipos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipo'), array('controller' => 'tipos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tipodocs'), array('controller' => 'tipodocs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tipodoc'), array('controller' => 'tipodocs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cuotas'), array('controller' => 'cuotas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cuota'), array('controller' => 'cuotas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recibos'), array('controller' => 'recibos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recibo'), array('controller' => 'recibos', 'action' => 'add')); ?> </li>
	</ul>
</div>
