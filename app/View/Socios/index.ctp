<?php echo $this->Html->css('socios/index', array('inline'=>true)) ?>

<div data-ng-controller="SociosController">
	<div class="row">
		<div class="col-sm-12">
			<h2>Socios</h2>
			<form class="searchInput text-right" data-ng-submit="search()">
				<input type="text" id="search" class="form-control" data-ng-model="query" placeholder="Buscar Usuario">
				<button type="submit" class="btn btn-default">Buscar</button>
				<button type="button" class="btn btn-default" data-ng-click="searchReset('search')">Limpiar</button>
			</form>
		</div>
	</div>

	<!-- Resultado de la Búsqueda -->
	<div data-ng-show="sociosBuscados.length > 0" data-ng-cloak>
		<table cellpadding="0" cellspacing="0" class="table table-striped">
			<thead>
				<tr>
					<th>Numero de Entrada</th>
					<th>Apellido</th>
					<th>Nombre</th>
					<th>DNI</th>
					<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
			</thead>
			<tbody>
				<tr data-ng-repeat="s in sociosBuscados">
					<td data-ng-bind="s.Socio.numero_entrada">&nbsp;</td>
					<td data-ng-bind="s.Socio.apellido">&nbsp;</td>
					<td data-ng-bind="s.Socio.nombre">&nbsp;</td>
					<td data-ng-bind="s.Socio.docnumber">&nbsp;</td>
					<td class="actions">
						<?php echo $this->Html->link(__('View'), array('action' => 'view/{{s.Socio.id}}')); ?>
						<?php echo $this->Html->link(__('Edit'), array('action' => 'edit/{{s.Socio.id}}')); ?>
						<?php //echo $this->Form->link(__('Delete'), null, array('action' => 'delete/{{s.Socio.id}}'), array(), __('Are you sure you want to delete # {{s.Socio.id}}?')); ?>
						<?php echo $this->Html->link(__('Delete'), 'delete/{{s.Socio.id}}', null, sprintf(__('Are you sure you want to delete # %s?'), '{{s.Socio.id}}')); ?>
					</td>
				</tr>
			</tbody>
		</table>
	</div>

	<!-- Tabla común -->
	<div data-ng-hide="sociosBuscados.length > 0">
		<table cellpadding="0" cellspacing="0" class="table table-striped">
			<thead>
				<tr>
					<!-- <th><?php echo $this->Paginator->sort('id'); ?></th> -->
					<th><?php echo $this->Paginator->sort('numero_entrada'); ?></th>
					<th><?php echo $this->Paginator->sort('apellido'); ?></th>
					<th><?php echo $this->Paginator->sort('nombre'); ?></th>
					<!-- <th><?php echo $this->Paginator->sort('denominacion'); ?></th> -->
					<th><?php echo $this->Paginator->sort('docnumber', 'DNI'); ?></th>
					<!-- <th><?php echo $this->Paginator->sort('cuit'); ?></th>
					<th><?php echo $this->Paginator->sort('calle'); ?></th>
					<th><?php echo $this->Paginator->sort('numero'); ?></th>
					<th><?php echo $this->Paginator->sort('piso'); ?></th>
					<th><?php echo $this->Paginator->sort('localidad_id'); ?></th>
					<th><?php echo $this->Paginator->sort('ingreso'); ?></th>
					<th><?php echo $this->Paginator->sort('egreso'); ?></th>
					<th><?php echo $this->Paginator->sort('causa'); ?></th>
					<th><?php echo $this->Paginator->sort('cuentas_suscriptas'); ?></th>
					<th><?php echo $this->Paginator->sort('cuentas_integradas'); ?></th>
					<th><?php echo $this->Paginator->sort('observaciones'); ?></th>
					<th><?php echo $this->Paginator->sort('socionum'); ?></th>
					<th><?php echo $this->Paginator->sort('nacimiento'); ?></th>
					<th><?php echo $this->Paginator->sort('email'); ?></th>
					<th><?php echo $this->Paginator->sort('caracteristica'); ?></th>
					<th><?php echo $this->Paginator->sort('telefono'); ?></th>
					<th><?php echo $this->Paginator->sort('celular'); ?></th>
					<th><?php echo $this->Paginator->sort('presentador'); ?></th>
					<th><?php echo $this->Paginator->sort('profesion'); ?></th>
					<th><?php echo $this->Paginator->sort('campa_socios'); ?></th>
					<th><?php echo $this->Paginator->sort('ent_solicitud'); ?></th>
					<th><?php echo $this->Paginator->sort('ent_dni'); ?></th>
					<th><?php echo $this->Paginator->sort('ent_servicio'); ?></th>
					<th><?php echo $this->Paginator->sort('cobranza_domicilio'); ?></th>
					<th><?php echo $this->Paginator->sort('cobranza_localidad'); ?></th>
					<th><?php echo $this->Paginator->sort('cobranza_no_print_rbo'); ?></th>
					<th><?php echo $this->Paginator->sort('cobranza_zona'); ?></th>
					<th><?php echo $this->Paginator->sort('cobranza_recorrido'); ?></th> -->
					<!-- <th><?php echo $this->Paginator->sort('foto'); ?></th> -->
					<!-- <th><?php echo $this->Paginator->sort('carnet_pago'); ?></th>
					<th><?php echo $this->Paginator->sort('carnet_pedido'); ?></th>
					<th><?php echo $this->Paginator->sort('categoria_id'); ?></th>
					<th><?php echo $this->Paginator->sort('cobrador_id'); ?></th>
					<th><?php echo $this->Paginator->sort('tipocambio_id'); ?></th>
					<th><?php echo $this->Paginator->sort('tipo_id'); ?></th>
					<th><?php echo $this->Paginator->sort('tipodoc_id'); ?></th> -->
					<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($socios as $socio): ?>
					<tr>
						<!-- <td><?php echo h($socio['Socio']['id']); ?>&nbsp;</td> -->
						<td><?php echo h($socio['Socio']['numero_entrada']); ?>&nbsp;</td>
						<td><?php echo h($socio['Socio']['apellido']); ?>&nbsp;</td>
						<td><?php echo h($socio['Socio']['nombre']); ?>&nbsp;</td>
						<!-- <td><?php echo h($socio['Socio']['denominacion']); ?>&nbsp;</td> -->
						<td><?php echo h($socio['Socio']['docnumber']); ?>&nbsp;</td>
						<!-- <td><?php echo h($socio['Socio']['cuit']); ?>&nbsp;</td>
						<td><?php echo h($socio['Socio']['calle']); ?>&nbsp;</td>
						<td><?php echo h($socio['Socio']['numero']); ?>&nbsp;</td>
						<td><?php echo h($socio['Socio']['piso']); ?>&nbsp;</td>
						<td>
							<?php echo $this->Html->link($socio['Localidad']['name'], array('controller' => 'localidades', 'action' => 'view', $socio['Localidad']['id'])); ?>
						</td>
						<td><?php echo h($socio['Socio']['ingreso']); ?>&nbsp;</td>
						<td><?php echo h($socio['Socio']['egreso']); ?>&nbsp;</td>
						<td><?php echo h($socio['Socio']['causa']); ?>&nbsp;</td>
						<td><?php echo h($socio['Socio']['cuentas_suscriptas']); ?>&nbsp;</td>
						<td><?php echo h($socio['Socio']['cuentas_integradas']); ?>&nbsp;</td>
						<td><?php echo h($socio['Socio']['observaciones']); ?>&nbsp;</td>
						<td><?php echo h($socio['Socio']['socionum']); ?>&nbsp;</td>
						<td><?php echo h($socio['Socio']['nacimiento']); ?>&nbsp;</td>
						<td><?php echo h($socio['Socio']['email']); ?>&nbsp;</td>
						<td><?php echo h($socio['Socio']['caracteristica']); ?>&nbsp;</td>
						<td><?php echo h($socio['Socio']['telefono']); ?>&nbsp;</td>
						<td><?php echo h($socio['Socio']['celular']); ?>&nbsp;</td>
						<td><?php echo h($socio['Socio']['presentador']); ?>&nbsp;</td>
						<td><?php echo h($socio['Socio']['profesion']); ?>&nbsp;</td>
						<td><?php echo h($socio['Socio']['campa_socios']); ?>&nbsp;</td>
						<td><?php echo h($socio['Socio']['ent_solicitud']); ?>&nbsp;</td>
						<td><?php echo h($socio['Socio']['ent_dni']); ?>&nbsp;</td>
						<td><?php echo h($socio['Socio']['ent_servicio']); ?>&nbsp;</td>
						<td><?php echo h($socio['Socio']['cobranza_domicilio']); ?>&nbsp;</td>
						<td><?php echo h($socio['Socio']['cobranza_localidad']); ?>&nbsp;</td>
						<td><?php echo h($socio['Socio']['cobranza_no_print_rbo']); ?>&nbsp;</td>
						<td><?php echo h($socio['Socio']['cobranza_zona']); ?>&nbsp;</td>
						<td><?php echo h($socio['Socio']['cobranza_recorrido']); ?>&nbsp;</td>
						<td><?php echo h($socio['Socio']['foto']); ?>&nbsp;</td>
						<td><?php echo h($socio['Socio']['carnet_pago']); ?>&nbsp;</td>
						<td><?php echo h($socio['Socio']['carnet_pedido']); ?>&nbsp;</td>
						<td>
							<?php echo $this->Html->link($socio['Categoria']['id'], array('controller' => 'categorias', 'action' => 'view', $socio['Categoria']['id'])); ?>
						</td>
						<td>
							<?php echo $this->Html->link($socio['Cobrador']['name'], array('controller' => 'cobradores', 'action' => 'view', $socio['Cobrador']['id'])); ?>
						</td>
						<td>
							<?php echo $this->Html->link($socio['Tipocambio']['name'], array('controller' => 'tipocambios', 'action' => 'view', $socio['Tipocambio']['id'])); ?>
						</td>
						<td>
							<?php echo $this->Html->link($socio['Tipo']['name'], array('controller' => 'tipos', 'action' => 'view', $socio['Tipo']['id'])); ?>
						</td>
						<td>
							<?php echo $this->Html->link($socio['Tipodoc']['name'], array('controller' => 'tipodocs', 'action' => 'view', $socio['Tipodoc']['id'])); ?>
						</td> -->
						<td class="actions">
							<?php echo $this->Html->link(__('View'), array('action' => 'view', $socio['Socio']['id'])); ?>
							<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $socio['Socio']['id'])); ?>
							<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $socio['Socio']['id']), array(), __('Are you sure you want to delete # %s?', $socio['Socio']['id'])); ?>
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
			<li><?php //echo $this->Html->link(__('New Socio'), array('action' => 'add')); ?></li>
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
</div>