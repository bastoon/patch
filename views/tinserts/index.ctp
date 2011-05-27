<div class="tinserts index">
<h2><?php __('Tinserts');?></h2>
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
foreach ($tinserts as $tinsert):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $tinsert['Tinsert']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($tinsert['User']['name'], array('controller' => 'users', 'action' => 'view', $tinsert['User']['id'])); ?>
		</td>
		<td>
			<?php echo $tinsert['Tinsert']['public']; ?>
		</td>
		<td>
			<?php echo $tinsert['Tinsert']['title']; ?>
		</td>
		<td>
			<?php echo $tinsert['Tinsert']['created']; ?>
		</td>
		<td>
			<?php echo $tinsert['Tinsert']['modified']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $tinsert['Tinsert']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $tinsert['Tinsert']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $tinsert['Tinsert']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tinsert['Tinsert']['id'])); ?>
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
		<li><?php echo $html->link(__('New Tinsert', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Tracks', true), array('controller' => 'tracks', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Track', true), array('controller' => 'tracks', 'action' => 'add')); ?> </li>
	</ul>
</div>
