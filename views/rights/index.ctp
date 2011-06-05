<div class="rights index">
<h2><?php __('Rights');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('admingroupe_id');?></th>
	<th><?php echo $paginator->sort('controller');?></th>
	<th><?php echo $paginator->sort('action');?></th>
	<th><?php echo $paginator->sort('autorise');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th><?php echo $paginator->sort('modified');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($rights as $right):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $right['Right']['id']; ?>
		</td>
		<td>
			<?php echo $right['Right']['admingroupe_id']; ?>
		</td>
		<td>
			<?php echo $right['Right']['controller']; ?>
		</td>
		<td>
			<?php echo $right['Right']['action']; ?>
		</td>
		<td>
			<?php echo $right['Right']['autorise']; ?>
		</td>
		<td>
			<?php echo $right['Right']['created']; ?>
		</td>
		<td>
			<?php echo $right['Right']['modified']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $right['Right']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $right['Right']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $right['Right']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $right['Right']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="actions">
	<ul>
                <li><?php echo $html->link(__('Zone Admin', false), array('controller' => 'users', 'action' => 'bo_action_admin'));?></li>
		<li><?php echo $html->link(__('List Groupes', true), array('controller' => 'admingroupes', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Groupe', true), array('controller' => 'admingroupes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="paging">
        <?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 |      <?php echo $paginator->numbers();?>
        <?php echo $paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
</div>

