<div class="contacts view">
<h2><?php __('Login');?></h2>
<table cellpadding="0" cellspacing="0">
    <tr>
	<?php echo $form->create('User',array('url' => '/users/login')); ?>
        <td><?php echo __('Email',true); ?></td>
        <td><?php echo $form->input('email',array('label' =>false));?></td>
    </tr>
    <tr>
        <td><?php echo __('Mot de passe',true); ?></td>
        <td><?php echo $form->input('password',array('label' =>false)); ?></td>
    </tr>
    <tr>
        <td>&nbsp</td>
        <td>
            <?php
            echo $form->submit(__('Connexion',true));
            echo $form->end();
            ?>
        </td>
    </tr>
</table>
</div>

<div class="actions">
        <ul>
                <li><?php //echo $html->link(__('Accueil', true), array('action' => 'home'));?></li> 
                <li><?php echo $html->link(__('Login', true), array('action' => 'login'));?></li>
                <li><?php echo $html->link(__('Inscription', true), array('action' => 'add'));?></li>

        </ul>
</div> 
<div>
    	<?php echo $session->flash('auth');?>
    	<?php echo $this->Session->flash();?>
        <?php echo $this->Session->flash('auth');?>
</div>


