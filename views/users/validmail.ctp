<div class="users form">
<?php echo $form->create('User');?>
        <fieldset>
                <legend><?php __('Validez votre adresse mail');?></legend>
        <?php
                echo $form->input('email');
                echo $form->input('token');
        ?>
        </fieldset>
<?php echo $form->end('Valider');?>
</div>





<div class="actions">
	<ul>
                <li><?php echo $html->link(__('Login', true), array('action' => 'login'));?></li>
                <li><?php echo $html->link(__('Inscription', true), array('action' => 'add'));?></li>

	</ul>
</div>
