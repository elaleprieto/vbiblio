<?php echo $this->Html->css('pages/inicio', array('inline'=>true)) ?>

<div class="full-window">
	<div class="row full-inside">
		<div class="row">
			<div class="col-sm-3 text-center col-sm-offset-3">
				<?php echo $this->Html->link('Nuevo Socio'
					, array('controller' => 'socios', 'action' => 'add')
					, array('class' => "btn btn-primary btn-full btn-inverse btn-xlg"));
				?>
			</div>
			<div class="col-sm-3 text-center">
				<a href="#" class="btn btn-primary btn-full btn-inverse btn-xlg">Buscar Socio</a>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-3 text-center col-sm-offset-3">
				<?php echo $this->Html->link('Cuotas'
					, array('controller' => 'cuotas', 'action' => 'index')
					, array('class' => "btn btn-primary btn-full btn-inverse btn-xlg"));
				?>
			</div>
			<div class="col-sm-3 text-center">
				<?php echo $this->Html->link('Recibos'
					, array('controller' => 'recibos', 'action' => 'index')
					, array('class' => "btn btn-primary btn-full btn-inverse btn-xlg"));
				?>
			</div>
		</div>
	</div>
</div>