<div class="lights index">
<h2><?php __('Lights');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('tlight_id');?></th>
	<th><?php echo $paginator->sort('user_id');?></th>
	<th><?php echo $paginator->sort('public');?></th>
	<th><?php echo $paginator->sort('lightloc_id');?></th>
	<th><?php echo $paginator->sort('lightcolor_id');?></th>
	<th><?php echo $paginator->sort('title');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th><?php echo $paginator->sort('modified');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($lights as $light):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $light['Light']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($light['Tlight']['title'], array('controller' => 'tlights', 'action' => 'view', $light['Tlight']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($light['User']['name'], array('controller' => 'users', 'action' => 'view', $light['User']['id'])); ?>
		</td>
		<td>
			<?php echo $light['Light']['public']; ?>
		</td>
		<td>
			<?php echo $html->link($light['Lightloc']['title'], array('controller' => 'lightlocs', 'action' => 'view', $light['Lightloc']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($light['Lightcolor']['title'], array('controller' => 'lightcolors', 'action' => 'view', $light['Lightcolor']['id'])); ?>
		</td>
		<td>
			<?php echo $light['Light']['title']; ?>
		</td>
		<td>
			<?php echo $light['Light']['created']; ?>
		</td>
		<td>
			<?php echo $light['Light']['modified']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $light['Light']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $light['Light']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $light['Light']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $light['Light']['id'])); ?>
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
		<li><?php echo $html->link(__('New Light', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Tlights', true), array('controller' => 'tlights', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Tlight', true), array('controller' => 'tlights', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Lightlocs', true), array('controller' => 'lightlocs', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Lightloc', true), array('controller' => 'lightlocs', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Lightcolors', true), array('controller' => 'lightcolors', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Lightcolor', true), array('controller' => 'lightcolors', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Channels', true), array('controller' => 'channels', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Channel', true), array('controller' => 'channels', 'action' => 'add')); ?> </li>
	</ul>
</div>
