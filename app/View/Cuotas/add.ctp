<div class="cuotas form">
	<?php echo $this->Form->create('Cuota', array('class'=>'form-horizontal', 'role'=>'form')); ?>
		<fieldset>
			<legend>Nueva Cuota</legend>
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
				echo $this->Form->input('vencimiento'
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
				echo $this->Form->input('socio_id'
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
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Cuotas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Recibos'), array('controller' => 'recibos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recibo'), array('controller' => 'recibos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Socios'), array('controller' => 'socios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Socio'), array('controller' => 'socios', 'action' => 'add')); ?> </li>
	</ul>
</div> -->
