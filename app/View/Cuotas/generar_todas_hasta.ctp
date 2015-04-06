<div data-ng-controller="CuotasController">
	<?php echo $this->Form->create('Cuota', array('class'=>'form-horizontal', 'role'=>'form')); ?>
		<fieldset>
			<legend>Generar Cuotas</legend>
				<!-- Fecha Final -->
				<div class="form-group">
					<label for="fechaFinal" class="col-sm-2 control-label">Fecha Final</label>
					<div class="col-sm-8">
						<p class="input-group">
							<input type="text" class="form-control" id="fechaFinal" name="data[Cuota][vencimiento]" placeholder="Las cuotas vencen el día 10 de cada mes..."
								datepicker-popup="dd-MM-yyyy" data-ng-model="vencimiento" is-open="popup.vencimiento" min-date="minDate" datepicker-options="dateOptions" data-ng-required="true" clear-text="Limpiar" close-text="Cerrar" />
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
						, 'value' => 101
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
			?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit')); ?>
</div>
