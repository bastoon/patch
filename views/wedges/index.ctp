<div class="wedges index">
<h2><?php __('Wedges');?></h2>
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
	<th><?php echo $paginator->sort('wedgeloc_id');?></th>
	<th><?php echo $paginator->sort('title');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th><?php echo $paginator->sort('modified');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($wedges as $wedge):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $wedge['Wedge']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($wedge['User']['name'], array('controller' => 'users', 'action' => 'view', $wedge['User']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($wedge['Wedgeloc']['title'], array('controller' => 'wedgelocs', 'action' => 'view', $wedge['Wedgeloc']['id'])); ?>
		</td>
		<td>
			<?php echo $wedge['Wedge']['title']; ?>
		</td>
		<td>
			<?php echo $wedge['Wedge']['created']; ?>
		</td>
		<td>
			<?php echo $wedge['Wedge']['modified']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $wedge['Wedge']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $wedge['Wedge']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $wedge['Wedge']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $wedge['Wedge']['id'])); ?>
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
		<li><?php echo $html->link(__('New Wedge', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Wedgelocs', true), array('controller' => 'wedgelocs', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Wedgeloc', true), array('controller' => 'wedgelocs', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Soundpatches', true), array('controller' => 'soundpatches', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Soundpatch', true), array('controller' => 'soundpatches', 'action' => 'add')); ?> </li>
	</ul>
</div>
