<?php
echo $this->Html->css('login', '', array('inline'=>FALSE));
?>

<div class="row">
	<div class="col-sm-12">
		<?php echo $this->Form->create('User', array('class' => 'form-horizontal', 'role' => 'form')) ?>

			<!-- Usuario -->
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-4 control-label"><?php echo __('Nombre de Usuario'); ?></label>
				<div class="col-sm-4">
					<?php	echo $this->Form->input('username', array(
						'class' => 'form-control',
						'label' => false,
						'placeholder' => __('Nombre de Usuario'),
						'required' => 'required',
						'type' => 'text'
					));
			 		?>
				</div>
			</div>

			<!-- Contraseña -->
			<div class="form-group">
				<label for="inputPassword3" class="col-sm-4 control-label"><?php echo __('Contraseña'); ?></label>
				<div class="col-sm-4">
					<?php echo $this->Form->input('password', array(
						'class' => 'form-control',
						'label' => false,
						'placeholder' => __('Contraseña'),
						'required' => 'required',
						'type' => 'password'
					));
					?>
				</div>
			</div>

			<!-- Botones -->
			<div class="form-group">
				<div class="col-sm-12">
					<button type="submit" class="btn btn-default col-sm-2 col-sm-offset-5">Entrar</button>
				</div>
			</div>
		<?php echo $this->Form->end() ?>
	</div>
</div>
