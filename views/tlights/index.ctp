<div class="tlights index">
<h2><?php __('Tlights');?></h2>
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
foreach ($tlights as $tlight):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $tlight['Tlight']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($tlight['User']['name'], array('controller' => 'users', 'action' => 'view', $tlight['User']['id'])); ?>
		</td>
		<td>
			<?php echo $tlight['Tlight']['public']; ?>
		</td>
		<td>
			<?php echo $tlight['Tlight']['title']; ?>
		</td>
		<td>
			<?php echo $tlight['Tlight']['created']; ?>
		</td>
		<td>
			<?php echo $tlight['Tlight']['modified']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $tlight['Tlight']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $tlight['Tlight']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $tlight['Tlight']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tlight['Tlight']['id'])); ?>
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
		<li><?php echo $html->link(__('New Tlight', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Lights', true), array('controller' => 'lights', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Light', true), array('controller' => 'lights', 'action' => 'add')); ?> </li>
	</ul>
</div>
