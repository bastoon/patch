<div class="teffects index">
<h2><?php __('Teffects');?></h2>
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
foreach ($teffects as $teffect):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $teffect['Teffect']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($teffect['User']['name'], array('controller' => 'users', 'action' => 'view', $teffect['User']['id'])); ?>
		</td>
		<td>
			<?php echo $teffect['Teffect']['public']; ?>
		</td>
		<td>
			<?php echo $teffect['Teffect']['title']; ?>
		</td>
		<td>
			<?php echo $teffect['Teffect']['created']; ?>
		</td>
		<td>
			<?php echo $teffect['Teffect']['modified']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $teffect['Teffect']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $teffect['Teffect']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $teffect['Teffect']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $teffect['Teffect']['id'])); ?>
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
		<li><?php echo $html->link(__('New Teffect', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Tracks', true), array('controller' => 'tracks', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Track', true), array('controller' => 'tracks', 'action' => 'add')); ?> </li>
	</ul>
</div>
