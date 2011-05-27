<div class="lightlocs index">
<h2><?php __('Lightlocs');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('lightlochorz_id');?></th>
	<th><?php echo $paginator->sort('lightlocvert_id');?></th>
	<th><?php echo $paginator->sort('title');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th><?php echo $paginator->sort('modified');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($lightlocs as $lightloc):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $lightloc['Lightloc']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($lightloc['Lightlochorz']['title'], array('controller' => 'lightlochorzs', 'action' => 'view', $lightloc['Lightlochorz']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($lightloc['Lightlocvert']['title'], array('controller' => 'lightlocverts', 'action' => 'view', $lightloc['Lightlocvert']['id'])); ?>
		</td>
		<td>
			<?php echo $lightloc['Lightloc']['title']; ?>
		</td>
		<td>
			<?php echo $lightloc['Lightloc']['created']; ?>
		</td>
		<td>
			<?php echo $lightloc['Lightloc']['modified']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $lightloc['Lightloc']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $lightloc['Lightloc']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $lightloc['Lightloc']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $lightloc['Lightloc']['id'])); ?>
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
		<li><?php echo $html->link(__('New Lightloc', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Lightlochorzs', true), array('controller' => 'lightlochorzs', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Lightlochorz', true), array('controller' => 'lightlochorzs', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Lightlocverts', true), array('controller' => 'lightlocverts', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Lightlocvert', true), array('controller' => 'lightlocverts', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Lights', true), array('controller' => 'lights', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Light', true), array('controller' => 'lights', 'action' => 'add')); ?> </li>
	</ul>
</div>
