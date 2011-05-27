<div class="tinserts view">
<h2><?php  __('Tinsert');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tinsert['Tinsert']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($tinsert['User']['name'], array('controller' => 'users', 'action' => 'view', $tinsert['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Public'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tinsert['Tinsert']['public']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Title'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tinsert['Tinsert']['title']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tinsert['Tinsert']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tinsert['Tinsert']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Tinsert', true), array('action' => 'edit', $tinsert['Tinsert']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Tinsert', true), array('action' => 'delete', $tinsert['Tinsert']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tinsert['Tinsert']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Tinserts', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Tinsert', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Tracks', true), array('controller' => 'tracks', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Track', true), array('controller' => 'tracks', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Tracks');?></h3>
	<?php if (!empty($tinsert['Track'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Rank'); ?></th>
		<th><?php __('Contact Id'); ?></th>
		<th><?php __('Soundpatch Id'); ?></th>
		<th><?php __('Instrument Id'); ?></th>
		<th><?php __('Micro Id'); ?></th>
		<th><?php __('Tinsert Id'); ?></th>
		<th><?php __('Teffect Id'); ?></th>
		<th><?php __('Stand Id'); ?></th>
		<th><?php __('Micloc Id'); ?></th>
		<th><?php __('Note'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($tinsert['Track'] as $track):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $track['id'];?></td>
			<td><?php echo $track['rank'];?></td>
			<td><?php echo $track['contact_id'];?></td>
			<td><?php echo $track['soundpatch_id'];?></td>
			<td><?php echo $track['instrument_id'];?></td>
			<td><?php echo $track['micro_id'];?></td>
			<td><?php echo $track['tinsert_id'];?></td>
			<td><?php echo $track['teffect_id'];?></td>
			<td><?php echo $track['stand_id'];?></td>
			<td><?php echo $track['micloc_id'];?></td>
			<td><?php echo $track['note'];?></td>
			<td><?php echo $track['created'];?></td>
			<td><?php echo $track['modified'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'tracks', 'action' => 'view', $track['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'tracks', 'action' => 'edit', $track['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'tracks', 'action' => 'delete', $track['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $track['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Track', true), array('controller' => 'tracks', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
