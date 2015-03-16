<div class="cobradores form">
<?php echo $this->Form->create('Cobrador', array('class'=>'form-horizontal', 'role'=>'form')); ?>
	<fieldset>
		<legend>Nuevo Cobrador</legend>
	<?php
		echo $this->Form->input('name', array('class'=>'form-control'
				, 'div'=>'form-group'
				, 'label' => array('class' => 'col-sm-2 control-label')
				, 'between' => '<div class="col-sm-8">'
				, 'after' => '</div>'
			)
		);
		echo $this->Form->input('direccion', array('class'=>'form-control'
				, 'div'=>'form-group'
				, 'label' => array('class' => 'col-sm-2 control-label')
				, 'between' => '<div class="col-sm-8">'
				, 'after' => '</div>'
			)
		);
		echo $this->Form->input('telefono', array('class'=>'form-control'
				, 'div'=>'form-group'
				, 'label' => array('class' => 'col-sm-2 control-label')
				, 'between' => '<div class="col-sm-8">'
				, 'after' => '</div>'
			)
		);
		echo $this->Form->input('dni', array('class'=>'form-control'
				, 'div'=>'form-group'
				, 'label' => array('class' => 'col-sm-2 control-label')
				, 'between' => '<div class="col-sm-8">'
				, 'after' => '</div>'
			)
		);
		echo $this->Form->input('observaciones', array('class'=>'form-control'
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

		<li><?php echo $this->Html->link(__('List Cobradores'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Socios'), array('controller' => 'socios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Socio'), array('controller' => 'socios', 'action' => 'add')); ?> </li>
	</ul>
</div> -->
