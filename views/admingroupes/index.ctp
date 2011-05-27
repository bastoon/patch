<div class="groupes index">
<h2><?php __('Groupes');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('admin');?></th>
	<th><?php echo $paginator->sort('description');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th><?php echo $paginator->sort('modified');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($groupes as $groupe):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $groupe['Admingroupe']['id']; ?>
		</td>
		<td>
			<?php echo $groupe['Admingroupe']['admin']; ?>
		</td>
		<td>
			<?php echo $groupe['Admingroupe']['description']; ?>
		</td>
		<td>
			<?php echo $groupe['Admingroupe']['created']; ?>
		</td>
		<td>
			<?php echo $groupe['Admingroupe']['modified']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $groupe['Admingroupe']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $groupe['Admingroupe']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $groupe['Admingroupe']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $groupe['Admingroupe']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('New Groupe', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Rights', true), array('controller' => 'rights', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Right', true), array('controller' => 'rights', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
