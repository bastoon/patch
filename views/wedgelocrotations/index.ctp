<div class="wedgelocrotations index">
<h2><?php __('Wedgelocrotations');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('title');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th><?php echo $paginator->sort('modified');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($wedgelocrotations as $wedgelocrotation):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $wedgelocrotation['Wedgelocrotation']['id']; ?>
		</td>
		<td>
			<?php echo $wedgelocrotation['Wedgelocrotation']['title']; ?>
		</td>
		<td>
			<?php echo $wedgelocrotation['Wedgelocrotation']['created']; ?>
		</td>
		<td>
			<?php echo $wedgelocrotation['Wedgelocrotation']['modified']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $wedgelocrotation['Wedgelocrotation']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $wedgelocrotation['Wedgelocrotation']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $wedgelocrotation['Wedgelocrotation']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $wedgelocrotation['Wedgelocrotation']['id'])); ?>
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
		<li><?php echo $html->link(__('New Wedgelocrotation', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Wedgelocs', true), array('controller' => 'wedgelocs', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Wedgeloc', true), array('controller' => 'wedgelocs', 'action' => 'add')); ?> </li>
	</ul>
</div>
