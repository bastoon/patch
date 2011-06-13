<div class="tcontacts index">
<h2><?php __('Tcontacts');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('user_id');?></th>
	<th><?php echo $paginator->sort('public');?></th>
	<th><?php echo $paginator->sort('title');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th><?php echo $paginator->sort('modified');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($tcontacts as $tcontact):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $tcontact['Tcontact']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($tcontact['User']['name'], array('controller' => 'users', 'action' => 'view', $tcontact['User']['id'])); ?>
		</td>
		<td>
			<?php echo $tcontact['Tcontact']['public']; ?>
		</td>
		<td>
			<?php echo $tcontact['Tcontact']['title']; ?>
		</td>
		<td>
			<?php echo $tcontact['Tcontact']['created']; ?>
		</td>
		<td>
			<?php echo $tcontact['Tcontact']['modified']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $tcontact['Tcontact']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $tcontact['Tcontact']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $tcontact['Tcontact']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tcontact['Tcontact']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Zone Admin', false), array('controller' => 'users', 'action' => 'bo_action_admin'));?></li>		<li><?php echo $html->link(__('New Tcontact', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Contacts', true), array('controller' => 'contacts', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Contact', true), array('controller' => 'contacts', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
</div>