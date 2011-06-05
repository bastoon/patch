<div class="lightpatches index">
<h2><?php __('Lightpatches');?></h2>
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
	<th><?php echo $paginator->sort('published');?></th>
	<th><?php echo $paginator->sort('title');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th><?php echo $paginator->sort('modified');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($lightpatches as $lightpatch):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $lightpatch['Lightpatch']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($lightpatch['User']['name'], array('controller' => 'users', 'action' => 'view', $lightpatch['User']['id'])); ?>
		</td>
		<td>
			<?php echo $lightpatch['Lightpatch']['published']; ?>
		</td>
		<td>
			<?php echo $lightpatch['Lightpatch']['title']; ?>
		</td>
		<td>
			<?php echo $lightpatch['Lightpatch']['created']; ?>
		</td>
		<td>
			<?php echo $lightpatch['Lightpatch']['modified']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $lightpatch['Lightpatch']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $lightpatch['Lightpatch']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $lightpatch['Lightpatch']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $lightpatch['Lightpatch']['id'])); ?>
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
		<li><?php echo $html->link(__('New Lightpatch', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Channels', true), array('controller' => 'channels', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Channel', true), array('controller' => 'channels', 'action' => 'add')); ?> </li>
	</ul>
</div>
