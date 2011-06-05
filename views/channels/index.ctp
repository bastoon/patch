<div class="channels index">
<h2><?php __('Channels');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('rank');?></th>
	<th><?php echo $paginator->sort('light_id');?></th>
	<th><?php echo $paginator->sort('lightpatch_id');?></th>
	<th><?php echo $paginator->sort('title');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th><?php echo $paginator->sort('modified');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($channels as $channel):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $channel['Channel']['id']; ?>
		</td>
		<td>
			<?php echo $channel['Channel']['rank']; ?>
		</td>
		<td>
			<?php echo $html->link($channel['Light']['title'], array('controller' => 'lights', 'action' => 'view', $channel['Light']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($channel['Lightpatch']['title'], array('controller' => 'lightpatches', 'action' => 'view', $channel['Lightpatch']['id'])); ?>
		</td>
		<td>
			<?php echo $channel['Channel']['title']; ?>
		</td>
		<td>
			<?php echo $channel['Channel']['created']; ?>
		</td>
		<td>
			<?php echo $channel['Channel']['modified']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $channel['Channel']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $channel['Channel']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $channel['Channel']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $channel['Channel']['id'])); ?>
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
		<li><?php echo $html->link(__('New Channel', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Lights', true), array('controller' => 'lights', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Light', true), array('controller' => 'lights', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Lightpatches', true), array('controller' => 'lightpatches', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Lightpatch', true), array('controller' => 'lightpatches', 'action' => 'add')); ?> </li>
	</ul>
</div>
