<div class="tracks index">
<h2><?php __('Tracks');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('rank');?></th>
	<th><?php echo $paginator->sort('contact_id');?></th>
	<th><?php echo $paginator->sort('soundpatch_id');?></th>
	<th><?php echo $paginator->sort('instrument_id');?></th>
	<th><?php echo $paginator->sort('micro_id');?></th>
	<th><?php echo $paginator->sort('tinsert_id');?></th>
	<th><?php echo $paginator->sort('teffect_id');?></th>
	<th><?php echo $paginator->sort('stand_id');?></th>
	<th><?php echo $paginator->sort('micloc_id');?></th>
	<th><?php echo $paginator->sort('note');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th><?php echo $paginator->sort('modified');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($tracks as $track):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $track['Track']['id']; ?>
		</td>
		<td>
			<?php echo $track['Track']['rank']; ?>
		</td>
		<td>
			<?php echo $html->link($track['Contact']['name'], array('controller' => 'contacts', 'action' => 'view', $track['Contact']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($track['Soundpatch']['title'], array('controller' => 'soundpatches', 'action' => 'view', $track['Soundpatch']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($track['Instrument']['title'], array('controller' => 'instruments', 'action' => 'view', $track['Instrument']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($track['Micro']['title'], array('controller' => 'micros', 'action' => 'view', $track['Micro']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($track['Tinsert']['title'], array('controller' => 'tinserts', 'action' => 'view', $track['Tinsert']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($track['Teffect']['title'], array('controller' => 'teffects', 'action' => 'view', $track['Teffect']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($track['Stand']['title'], array('controller' => 'stands', 'action' => 'view', $track['Stand']['id'])); ?>
		</td>
		<td>
			<?php echo $html->link($track['Micloc']['title'], array('controller' => 'miclocs', 'action' => 'view', $track['Micloc']['id'])); ?>
		</td>
		<td>
			<?php echo $track['Track']['note']; ?>
		</td>
		<td>
			<?php echo $track['Track']['created']; ?>
		</td>
		<td>
			<?php echo $track['Track']['modified']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action' => 'view', $track['Track']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $track['Track']['id'])); ?>
			<?php echo $html->link(__('Delete', true), array('action' => 'delete', $track['Track']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $track['Track']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="actions">
	<ul>
                <li><?php echo $html->link(__('Zone Admin', false), array('controller' => 'users', 'action' => 'bo_action_admin'));?></li>
		<li><?php echo $html->link(__('New Track', true), array('action' => 'add')); ?></li>
		<li><?php echo $html->link(__('List Contacts', true), array('controller' => 'contacts', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Contact', true), array('controller' => 'contacts', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Soundpatches', true), array('controller' => 'soundpatches', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Soundpatch', true), array('controller' => 'soundpatches', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Instruments', true), array('controller' => 'instruments', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Instrument', true), array('controller' => 'instruments', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Micros', true), array('controller' => 'micros', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Micro', true), array('controller' => 'micros', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Tinserts', true), array('controller' => 'tinserts', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Tinsert', true), array('controller' => 'tinserts', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Teffects', true), array('controller' => 'teffects', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Teffect', true), array('controller' => 'teffects', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Stands', true), array('controller' => 'stands', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Stand', true), array('controller' => 'stands', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Miclocs', true), array('controller' => 'miclocs', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Micloc', true), array('controller' => 'miclocs', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="paging">
        <?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 |      <?php echo $paginator->numbers();?>
        <?php echo $paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
</div>

