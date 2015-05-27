<div class="bg-content" >
<div class="content">
<div class="container">
	<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend style="color:white;">
            <?php echo __('Ingresa con tu nombre de usuario y contraseña'); ?>
        </legend>
        <?php echo $this->Form->input('username');
        echo $this->Form->input('password');
    ?>
    </fieldset>
<?php echo $this->Form->end(array('label' => 'Iniciar',
'class' => 'btn btn-1')); ?>
</div>
<?php echo $this->Session->flash('auth'); ?>
</div>
</div>