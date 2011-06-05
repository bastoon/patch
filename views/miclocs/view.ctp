<div class="miclocs view">
<h2><?php  __('Micloc');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $micloc['Micloc']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Miclochorz'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($micloc['Miclochorz']['title'], array('controller' => 'miclochorzs', 'action' => 'view', $micloc['Miclochorz']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Miclocvert'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($micloc['Miclocvert']['title'], array('controller' => 'miclocverts', 'action' => 'view', $micloc['Miclocvert']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Logo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($micloc['Logo']['title'], array('controller' => 'logos', 'action' => 'view', $micloc['Logo']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Title'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $micloc['Micloc']['title']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $micloc['Micloc']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $micloc['Micloc']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Micloc', true), array('action' => 'edit', $micloc['Micloc']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Micloc', true), array('action' => 'delete', $micloc['Micloc']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $micloc['Micloc']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Miclocs', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Micloc', true), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php __('Related Tracks');?></h3>
	<?php if (!empty($micloc['Track'])):?>
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
		foreach ($micloc['Track'] as $track):
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
