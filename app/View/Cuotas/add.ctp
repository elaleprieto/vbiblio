<div data-ng-controller="CuotasController">
	<?php echo $this->Form->create('Cuota', array('class'=>'form-horizontal', 'role'=>'form')); ?>
		<fieldset>
			<legend>Nueva Cuota</legend>
			<?php
				echo $this->Form->input('socio_id'
					, array('class'=>'form-control'
						, 'div'=>'form-group'
						, 'label' => array('class' => 'col-sm-2 control-label')
						, 'between' => '<div class="col-sm-8">'
						, 'after' => '</div>'
					)
				);
				?>
				<!-- Vencimiento -->
				<div class="form-group">
					<label for="CuotaVencimiento" class="col-sm-2 control-label">Vencimiento</label>
					<div class="col-sm-8">
						<p class="input-group">
							<input type="text" class="form-control" id="CuotaVencimiento" name="data[Cuota][vencimiento]"
								datepicker-popup="dd-MM-yyyy" data-ng-model="vencimiento" is-open="popup.vencimiento" min-date="minDate" datepicker-options="dateOptions" data-ng-required="true" current-text="Hoy" clear-text="Limpiar" close-text="Cerrar" />
							<span class="input-group-btn">
								<button type="button" class="btn btn-default" ng-click="open($event, 'vencimiento')"><i class="glyphicon glyphicon-calendar"></i></button>
							</span>
						</p>
					</div>
				</div>
				<?php
				echo $this->Form->input('importe'
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
				echo $this->Form->input('pagada'
					, array('class'=>'form-control'
						, 'div'=>'form-group'
						, 'label' => array('class' => 'col-sm-2 control-label')
						, 'between' => '<div class="col-sm-8">'
						, 'after' => '</div>'
					)
				);
				echo $this->Form->input('emitido'
					, array('class'=>'form-control'
						, 'div'=>'form-group'
						, 'label' => array('class' => 'col-sm-2 control-label')
						, 'between' => '<div class="col-sm-8">'
						, 'after' => '</div>'
					)
				);
				// echo $this->Form->input('recibo_id'
				// 			, array('class'=>'form-control'
				// 				, 'div'=>'form-group'
				// 				, 'label' => array('class' => 'col-sm-2 control-label')
				// 				, 'between' => '<div class="col-sm-8">'
				// 				, 'after' => '</div>'
				// 			)
				// 		);
				
			?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit')); ?>
</div>
<!-- <div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Cuotas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Recibos'), array('controller' => 'recibos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recibo'), array('controller' => 'recibos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Socios'), array('controller' => 'socios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Socio'), array('controller' => 'socios', 'action' => 'add')); ?> </li>
	</ul>
</div> -->
