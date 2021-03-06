<div class="tmicros index">
<h2><?php __('Tmicros');?></h2>
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
foreach ($tmicros as $tmicro):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $tmicro['Tmicro']['id']; ?>
		</td>
		<td>
			<?php echo $tmicro['Tmicro']['title']; ?>
		</td>
		<td>
			<?php echo $tmicro['Tmicro']['created']; ?>
		</td>
		<td>
			<?php echo $tmicro['Tmicro']['modified']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $tmicro['Tmicro']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $tmicro['Tmicro']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $tmicro['Tmicro']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tmicro['Tmicro']['id'])); ?>
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
		<li><?php echo $html->link(__('New Tmicro', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Micros', true), array('controller' => 'micros', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Micro', true), array('controller' => 'micros', 'action' => 'add')); ?> </li>
	</ul>
</div>
