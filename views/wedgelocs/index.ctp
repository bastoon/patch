<div class="wedgelocs index">
<h2><?php __('Wedgelocs');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('wedgelochorz_id');?></th>
	<th><?php echo $paginator->sort('wedgelocvert_id');?></th>
	<th><?php echo $paginator->sort('wedgelocrotation_id');?></th>
	<th><?php echo $paginator->sort('title');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th><?php echo $paginator->sort('modified');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($wedgelocs as $wedgeloc):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $wedgeloc['Wedgeloc']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($wedgeloc['Wedgelochorz']['title'], array('controller' => 'wedgelochorzs', 'action' => 'view', $wedgeloc['Wedgelochorz']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($wedgeloc['Wedgelocvert']['title'], array('controller' => 'wedgelocverts', 'action' => 'view', $wedgeloc['Wedgelocvert']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($wedgeloc['Wedgelocrotation']['title'], array('controller' => 'wedgelocrotations', 'action' => 'view', $wedgeloc['Wedgelocrotation']['id'])); ?>
		</td>
		<td>
			<?php echo $wedgeloc['Wedgeloc']['title']; ?>
		</td>
		<td>
			<?php echo $wedgeloc['Wedgeloc']['created']; ?>
		</td>
		<td>
			<?php echo $wedgeloc['Wedgeloc']['modified']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $wedgeloc['Wedgeloc']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $wedgeloc['Wedgeloc']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $wedgeloc['Wedgeloc']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $wedgeloc['Wedgeloc']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="actions">
	<ul>
                <li><?php echo $html->link(__('Zone Admin', false), array('controller' => 'users', 'action' => 'bo_action_admin'));?></li>
		<li><?php echo $html->link(__('New Wedgeloc', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Wedgelochorzs', true), array('controller' => 'wedgelochorzs', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Wedgelochorz', true), array('controller' => 'wedgelochorzs', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Wedgelocverts', true), array('controller' => 'wedgelocverts', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Wedgelocvert', true), array('controller' => 'wedgelocverts', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Wedgelocrotations', true), array('controller' => 'wedgelocrotations', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Wedgelocrotation', true), array('controller' => 'wedgelocrotations', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Wedges', true), array('controller' => 'wedges', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Wedge', true), array('controller' => 'wedges', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="paging">
        <?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 |      <?php echo $paginator->numbers();?>
        <?php echo $paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
</div>

