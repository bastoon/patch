<div class="micros index">
<h2><?php __('Micros');?></h2>
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
	<th><?php echo $paginator->sort('marque_id');?></th>
	<th><?php echo $paginator->sort('tmicro_id');?></th>
	<th><?php echo $paginator->sort('title');?></th>
	<th><?php echo $paginator->sort('remarque');?></th>
	<th><?php echo $paginator->sort('usage');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th><?php echo $paginator->sort('modified');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($micros as $micro):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $micro['Micro']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($micro['User']['name'], array('controller' => 'users', 'action' => 'view', $micro['User']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($micro['Marque']['title'], array('controller' => 'marques', 'action' => 'view', $micro['Marque']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($micro['Tmicro']['title'], array('controller' => 'tmicros', 'action' => 'view', $micro['Tmicro']['id'])); ?>
		</td>
		<td>
			<?php echo $micro['Micro']['title']; ?>
		</td>
		<td>
			<?php echo $micro['Micro']['remarque']; ?>
		</td>
		<td>
			<?php echo $micro['Micro']['usage']; ?>
		</td>
		<td>
			<?php echo $micro['Micro']['created']; ?>
		</td>
		<td>
			<?php echo $micro['Micro']['modified']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $micro['Micro']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $micro['Micro']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $micro['Micro']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $micro['Micro']['id'])); ?>
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
		<li><?php echo $html->link(__('New Micro', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Marques', true), array('controller' => 'marques', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Marque', true), array('controller' => 'marques', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Tmicros', true), array('controller' => 'tmicros', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Tmicro', true), array('controller' => 'tmicros', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Tracks', true), array('controller' => 'tracks', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Track', true), array('controller' => 'tracks', 'action' => 'add')); ?> </li>
	</ul>
</div>
