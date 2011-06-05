<div class="lightlocverts index">
<h2><?php __('Lightlocverts');?></h2>
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
foreach ($lightlocverts as $lightlocvert):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $lightlocvert['Lightlocvert']['id']; ?>
		</td>
		<td>
			<?php echo $lightlocvert['Lightlocvert']['title']; ?>
		</td>
		<td>
			<?php echo $lightlocvert['Lightlocvert']['created']; ?>
		</td>
		<td>
			<?php echo $lightlocvert['Lightlocvert']['modified']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $lightlocvert['Lightlocvert']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $lightlocvert['Lightlocvert']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $lightlocvert['Lightlocvert']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $lightlocvert['Lightlocvert']['id'])); ?>
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
		<li><?php echo $html->link(__('New Lightlocvert', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Lightlocs', true), array('controller' => 'lightlocs', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Lightloc', true), array('controller' => 'lightlocs', 'action' => 'add')); ?> </li>
	</ul>
</div>
