<div class="miclocs index">
<h2><?php __('Miclocs');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('miclochorz_id');?></th>
	<th><?php echo $paginator->sort('miclocvert_id');?></th>
	<th><?php echo $paginator->sort('logo_id');?></th>
	<th><?php echo $paginator->sort('title');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th><?php echo $paginator->sort('modified');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($miclocs as $micloc):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $micloc['Micloc']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($micloc['Miclochorz']['title'], array('controller' => 'miclochorzs', 'action' => 'view', $micloc['Miclochorz']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($micloc['Miclocvert']['title'], array('controller' => 'miclocverts', 'action' => 'view', $micloc['Miclocvert']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($micloc['Logo']['title'], array('controller' => 'logos', 'action' => 'view', $micloc['Logo']['id'])); ?>
		</td>
		<td>
			<?php echo $micloc['Micloc']['title']; ?>
		</td>
		<td>
			<?php echo $micloc['Micloc']['created']; ?>
		</td>
		<td>
			<?php echo $micloc['Micloc']['modified']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $micloc['Micloc']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $micloc['Micloc']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $micloc['Micloc']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $micloc['Micloc']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="actions">
	<ul>
                <li><?php echo $html->link(__('Zone Admin', false), array('controller' => 'users', 'action' => 'bo_action_admin'));?></li>
		<li><?php echo $html->link(__('New Micloc', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Miclochorzs', true), array('controller' => 'miclochorzs', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Miclochorz', true), array('controller' => 'miclochorzs', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Miclocverts', true), array('controller' => 'miclocverts', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Miclocvert', true), array('controller' => 'miclocverts', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Logos', true), array('controller' => 'logos', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Logo', true), array('controller' => 'logos', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Tracks', true), array('controller' => 'tracks', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Track', true), array('controller' => 'tracks', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="paging">
        <?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 |      <?php echo $paginator->numbers();?>
        <?php echo $paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
</div>

