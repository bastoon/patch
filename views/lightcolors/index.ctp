<div class="lightcolors index">
<h2><?php __('Lightcolors');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('tlightcolor_id');?></th>
	<th><?php echo $paginator->sort('title');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th><?php echo $paginator->sort('modified');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($lightcolors as $lightcolor):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $lightcolor['Lightcolor']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($lightcolor['Tlightcolor']['title'], array('controller' => 'tlightcolors', 'action' => 'view', $lightcolor['Tlightcolor']['id'])); ?>
		</td>
		<td>
			<?php echo $lightcolor['Lightcolor']['title']; ?>
		</td>
		<td>
			<?php echo $lightcolor['Lightcolor']['created']; ?>
		</td>
		<td>
			<?php echo $lightcolor['Lightcolor']['modified']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $lightcolor['Lightcolor']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $lightcolor['Lightcolor']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $lightcolor['Lightcolor']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $lightcolor['Lightcolor']['id'])); ?>
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
		<li><?php echo $html->link(__('New Lightcolor', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Tlightcolors', true), array('controller' => 'tlightcolors', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Tlightcolor', true), array('controller' => 'tlightcolors', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Lights', true), array('controller' => 'lights', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Light', true), array('controller' => 'lights', 'action' => 'add')); ?> </li>
	</ul>
</div>
