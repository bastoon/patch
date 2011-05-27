<div class="stageplans index">
<h2><?php __('Stageplans');?></h2>
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
	<th><?php echo $paginator->sort('soundpatch_id');?></th>
	<th><?php echo $paginator->sort('published');?></th>
	<th><?php echo $paginator->sort('title');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th><?php echo $paginator->sort('modified');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($stageplans as $stageplan):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $stageplan['Stageplan']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($stageplan['User']['name'], array('controller' => 'users', 'action' => 'view', $stageplan['User']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($stageplan['Soundpatch']['title'], array('controller' => 'soundpatches', 'action' => 'view', $stageplan['Soundpatch']['id'])); ?>
		</td>
		<td>
			<?php echo $stageplan['Stageplan']['published']; ?>
		</td>
		<td>
			<?php echo $stageplan['Stageplan']['title']; ?>
		</td>
		<td>
			<?php echo $stageplan['Stageplan']['created']; ?>
		</td>
		<td>
			<?php echo $stageplan['Stageplan']['modified']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $stageplan['Stageplan']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $stageplan['Stageplan']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $stageplan['Stageplan']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $stageplan['Stageplan']['id'])); ?>
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
		<li><?php echo $html->link(__('New Stageplan', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Soundpatches', true), array('controller' => 'soundpatches', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Soundpatch', true), array('controller' => 'soundpatches', 'action' => 'add')); ?> </li>
	</ul>
</div>
