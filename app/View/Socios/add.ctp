<div data-ng-controller="SociosController">
	<?php echo $this->Form->create('Socio', array('class'=>'form-horizontal', 'role'=>'form')); ?>
	<fieldset>
		<legend>Nuevo Socio</legend>
		<?php
		echo $this->Form->input('numero_entrada'
							, array('class'=>'form-control'
								, 'div'=>'form-group'
								, 'label' => array('class' => 'col-sm-2 control-label')
								, 'between' => '<div class="col-sm-8">'
								, 'after' => '</div>'
							)
						);
		echo $this->Form->input('apellido'
							, array('class'=>'form-control'
								, 'div'=>'form-group'
								, 'label' => array('class' => 'col-sm-2 control-label')
								, 'between' => '<div class="col-sm-8">'
								, 'after' => '</div>'
							)
						);
		echo $this->Form->input('nombre'
							, array('class'=>'form-control'
								, 'div'=>'form-group'
								, 'label' => array('class' => 'col-sm-2 control-label')
								, 'between' => '<div class="col-sm-8">'
								, 'after' => '</div>'
							)
						);
		echo $this->Form->input('denominacion'
							, array('class'=>'form-control'
								, 'div'=>'form-group'
								, 'label' => array('class' => 'col-sm-2 control-label')
								, 'between' => '<div class="col-sm-8">'
								, 'after' => '</div>'
							)
						);
		echo $this->Form->input('docnumber'
							, array('class'=>'form-control'
								, 'div'=>'form-group'
								, 'label' => array('class' => 'col-sm-2 control-label', 'text'=>'DNI')
								, 'between' => '<div class="col-sm-8">'
								, 'after' => '</div>'
							)
						);
		echo $this->Form->input('cuit'
							, array('class'=>'form-control'
								, 'div'=>'form-group'
								, 'label' => array('class' => 'col-sm-2 control-label')
								, 'between' => '<div class="col-sm-8">'
								, 'after' => '</div>'
							)
						);
		echo $this->Form->input('calle'
							, array('class'=>'form-control'
								, 'div'=>'form-group'
								, 'label' => array('class' => 'col-sm-2 control-label')
								, 'between' => '<div class="col-sm-8">'
								, 'after' => '</div>'
							)
						);
		echo $this->Form->input('numero'
							, array('class'=>'form-control'
								, 'div'=>'form-group'
								, 'label' => array('class' => 'col-sm-2 control-label')
								, 'between' => '<div class="col-sm-8">'
								, 'after' => '</div>'
							)
						);
		echo $this->Form->input('piso'
							, array('class'=>'form-control'
								, 'div'=>'form-group'
								, 'label' => array('class' => 'col-sm-2 control-label')
								, 'between' => '<div class="col-sm-8">'
								, 'after' => '</div>'
							)
						);
		echo $this->Form->input('localidad_id'
							, array('class'=>'form-control'
								, 'div'=>'form-group'
								, 'label' => array('class' => 'col-sm-2 control-label')
								, 'between' => '<div class="col-sm-8">'
								, 'after' => '</div>'
							)
						);
		?>
		<!-- Ingreso -->
		<div class="form-group">
			<label for="SocioIngreso" class="col-sm-2 control-label">Ingreso</label>
			<div class="col-sm-8">
				<p class="input-group">
					<input type="text" class="form-control" id="SocioIngreso" name="data[Socio][ingreso]"
						datepicker-popup="dd-MM-yyyy" data-ng-model="ingreso" is-open="popup.ingreso" min-date="minDate" datepicker-options="dateOptions" data-ng-required="true" current-text="Hoy" clear-text="Limpiar" close-text="Cerrar" />
					<span class="input-group-btn">
						<button type="button" class="btn btn-default" ng-click="open($event, 'ingreso')"><i class="glyphicon glyphicon-calendar"></i></button>
					</span>
				</p>
			</div>
		</div>
		<!-- Egreso -->
		<div class="form-group">
			<label for="SocioEgreso" class="col-sm-2 control-label">Egreso</label>
			<div class="col-sm-8">
				<p class="input-group">
					<input type="text" class="form-control" id="SocioEgreso" name="data[Socio][egreso]"
						datepicker-popup="dd-MM-yyyy" data-ng-model="egreso" is-open="popup.egreso" min-date="minDate" datepicker-options="dateOptions" data-ng-required="false" current-text="Hoy" clear-text="Limpiar" close-text="Cerrar" />
					<span class="input-group-btn">
						<button type="button" class="btn btn-default" ng-click="open($event, 'egreso')"><i class="glyphicon glyphicon-calendar"></i></button>
					</span>
				</p>
			</div>
		</div>
		<?php
		echo $this->Form->input('causa'
							, array('class'=>'form-control'
								, 'div'=>'form-group'
								, 'label' => array('class' => 'col-sm-2 control-label')
								, 'between' => '<div class="col-sm-8">'
								, 'after' => '</div>'
							)
						);
		echo $this->Form->input('cuentas_suscriptas'
							, array('class'=>'form-control'
								, 'div'=>'form-group'
								, 'label' => array('class' => 'col-sm-2 control-label')
								, 'between' => '<div class="col-sm-8">'
								, 'after' => '</div>'
							)
						);
		echo $this->Form->input('cuentas_integradas'
							, array('class'=>'form-control'
								, 'div'=>'form-group'
								, 'label' => array('class' => 'col-sm-2 control-label')
								, 'between' => '<div class="col-sm-8">'
								, 'after' => '</div>'
							)
						);
		echo $this->Form->input('observaciones'
							, array('class'=>'form-control'
								, 'div'=>'form-group'
								, 'label' => array('class' => 'col-sm-2 control-label')
								, 'between' => '<div class="col-sm-8">'
								, 'after' => '</div>'
							)
						);
		echo $this->Form->input('socionum'
							, array('class'=>'form-control'
								, 'div'=>'form-group'
								, 'label' => array('class' => 'col-sm-2 control-label')
								, 'between' => '<div class="col-sm-8">'
								, 'after' => '</div>'
							)
						);
		?>
		<!-- Nacimiento -->
		<div class="form-group">
			<label for="SocioNacimiento" class="col-sm-2 control-label">Nacimiento</label>
			<div class="col-sm-8">
				<p class="input-group">
					<input type="text" class="form-control" id="SocioNacimiento" name="data[Socio][nacimiento]"
						datepicker-popup="dd-MM-yyyy" data-ng-model="nacimiento" is-open="popup.nacimiento" min-date="minDate" datepicker-options="dateOptions" data-ng-required="true" current-text="Hoy" clear-text="Limpiar" close-text="Cerrar" />
					<span class="input-group-btn">
						<button type="button" class="btn btn-default" ng-click="open($event, 'nacimiento')"><i class="glyphicon glyphicon-calendar"></i></button>
					</span>
				</p>
			</div>
		</div>
		<?php
		echo $this->Form->input('email'
							, array('class'=>'form-control'
								, 'div'=>'form-group'
								, 'label' => array('class' => 'col-sm-2 control-label')
								, 'between' => '<div class="col-sm-8">'
								, 'after' => '</div>'
							)
						);
		echo $this->Form->input('caracteristica'
							, array('class'=>'form-control'
								, 'div'=>'form-group'
								, 'label' => array('class' => 'col-sm-2 control-label')
								, 'between' => '<div class="col-sm-8">'
								, 'after' => '</div>'
							)
						);
		echo $this->Form->input('telefono'
							, array('class'=>'form-control'
								, 'div'=>'form-group'
								, 'label' => array('class' => 'col-sm-2 control-label')
								, 'between' => '<div class="col-sm-8">'
								, 'after' => '</div>'
							)
						);
		echo $this->Form->input('celular'
							, array('class'=>'form-control'
								, 'div'=>'form-group'
								, 'label' => array('class' => 'col-sm-2 control-label')
								, 'between' => '<div class="col-sm-8">'
								, 'after' => '</div>'
							)
						);
		echo $this->Form->input('presentador'
							, array('class'=>'form-control'
								, 'div'=>'form-group'
								, 'label' => array('class' => 'col-sm-2 control-label')
								, 'between' => '<div class="col-sm-8">'
								, 'after' => '</div>'
							)
						);
		echo $this->Form->input('profesion'
							, array('class'=>'form-control'
								, 'div'=>'form-group'
								, 'label' => array('class' => 'col-sm-2 control-label')
								, 'between' => '<div class="col-sm-8">'
								, 'after' => '</div>'
							)
						);
		echo $this->Form->input('campa_socios'
							, array('class'=>'form-control'
								, 'div'=>'form-group'
								, 'label' => array('class' => 'col-sm-2 control-label')
								, 'between' => '<div class="col-sm-8">'
								, 'after' => '</div>'
							)
						);
		echo $this->Form->input('ent_solicitud'
							, array('class'=>'form-control'
								, 'div'=>'form-group'
								, 'label' => array('class' => 'col-sm-2 control-label')
								, 'between' => '<div class="col-sm-8">'
								, 'after' => '</div>'
							)
						);
		echo $this->Form->input('ent_dni'
							, array('class'=>'form-control'
								, 'div'=>'form-group'
								, 'label' => array('class' => 'col-sm-2 control-label')
								, 'between' => '<div class="col-sm-8">'
								, 'after' => '</div>'
							)
						);
		echo $this->Form->input('ent_servicio'
							, array('class'=>'form-control'
								, 'div'=>'form-group'
								, 'label' => array('class' => 'col-sm-2 control-label')
								, 'between' => '<div class="col-sm-8">'
								, 'after' => '</div>'
							)
						);
		echo $this->Form->input('cobranza_domicilio'
							, array('class'=>'form-control'
								, 'div'=>'form-group'
								, 'label' => array('class' => 'col-sm-2 control-label')
								, 'between' => '<div class="col-sm-8">'
								, 'after' => '</div>'
							)
						);
		echo $this->Form->input('cobranza_localidad'
							, array('class'=>'form-control'
								, 'div'=>'form-group'
								, 'label' => array('class' => 'col-sm-2 control-label')
								, 'between' => '<div class="col-sm-8">'
								, 'after' => '</div>'
							)
						);
		echo $this->Form->input('cobranza_no_print_rbo'
							, array('class'=>'form-control'
								, 'div'=>'form-group'
								, 'label' => array('class' => 'col-sm-2 control-label')
								, 'between' => '<div class="col-sm-8">'
								, 'after' => '</div>'
							)
						);
		echo $this->Form->input('cobranza_zona'
							, array('class'=>'form-control'
								, 'div'=>'form-group'
								, 'label' => array('class' => 'col-sm-2 control-label')
								, 'between' => '<div class="col-sm-8">'
								, 'after' => '</div>'
							)
						);
		echo $this->Form->input('cobranza_recorrido'
							, array('class'=>'form-control'
								, 'div'=>'form-group'
								, 'label' => array('class' => 'col-sm-2 control-label')
								, 'between' => '<div class="col-sm-8">'
								, 'after' => '</div>'
							)
						);
		echo $this->Form->input('foto'
							, array('class'=>'form-control'
								, 'div'=>'form-group'
								, 'label' => array('class' => 'col-sm-2 control-label')
								, 'between' => '<div class="col-sm-8">'
								, 'after' => '</div>'
							)
						);
		echo $this->Form->input('carnet_pago'
							, array('class'=>'form-control'
								, 'div'=>'form-group'
								, 'label' => array('class' => 'col-sm-2 control-label')
								, 'between' => '<div class="col-sm-8">'
								, 'after' => '</div>'
							)
						);
		echo $this->Form->input('carnet_pedido'
							, array('class'=>'form-control'
								, 'div'=>'form-group'
								, 'label' => array('class' => 'col-sm-2 control-label')
								, 'between' => '<div class="col-sm-8">'
								, 'after' => '</div>'
							)
						);
		echo $this->Form->input('categoria_id'
							, array('class'=>'form-control'
								, 'div'=>'form-group'
								, 'label' => array('class' => 'col-sm-2 control-label')
								, 'between' => '<div class="col-sm-8">'
								, 'after' => '</div>'
							)
						);
		echo $this->Form->input('cobrador_id'
							, array('class'=>'form-control'
								, 'div'=>'form-group'
								, 'label' => array('class' => 'col-sm-2 control-label')
								, 'between' => '<div class="col-sm-8">'
								, 'after' => '</div>'
							)
						);
		echo $this->Form->input('tipocambio_id'
							, array('class'=>'form-control'
								, 'div'=>'form-group'
								, 'label' => array('class' => 'col-sm-2 control-label')
								, 'between' => '<div class="col-sm-8">'
								, 'after' => '</div>'
							)
						);
		echo $this->Form->input('tipo_id'
							, array('class'=>'form-control'
								, 'div'=>'form-group'
								, 'label' => array('class' => 'col-sm-2 control-label')
								, 'between' => '<div class="col-sm-8">'
								, 'after' => '</div>'
							)
						);
		echo $this->Form->input('tipodoc_id'
							, array('class'=>'form-control'
								, 'div'=>'form-group'
								, 'label' => array('class' => 'col-sm-2 control-label')
								, 'between' => '<div class="col-sm-8">'
								, 'after' => '</div>'
							)
						);
		?>
	</fieldset>
	<?php echo $this->Form->end(__('Submit')); ?>
</div>
<!-- <div class="actions">
	<h3><?php //echo __('Actions'); ?></h3>
	<ul>

		<li><?php //echo $this->Html->link(__('List Socios'), array('action' => 'index')); ?></li>
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
</div> -->
