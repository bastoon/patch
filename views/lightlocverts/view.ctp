<div class="lightlocverts view">
<h2><?php  __('Lightlocvert');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $lightlocvert['Lightlocvert']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Title'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $lightlocvert['Lightlocvert']['title']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $lightlocvert['Lightlocvert']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $lightlocvert['Lightlocvert']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Lightlocvert', true), array('action' => 'edit', $lightlocvert['Lightlocvert']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Lightlocvert', true), array('action' => 'delete', $lightlocvert['Lightlocvert']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $lightlocvert['Lightlocvert']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Lightlocverts', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Lightlocvert', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Lightlocs', true), array('controller' => 'lightlocs', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Lightloc', true), array('controller' => 'lightlocs', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Lightlocs');?></h3>
	<?php if (!empty($lightlocvert['Lightloc'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Lightlochorz Id'); ?></th>
		<th><?php __('Lightlocvert Id'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($lightlocvert['Lightloc'] as $lightloc):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $lightloc['id'];?></td>
			<td><?php echo $lightloc['lightlochorz_id'];?></td>
			<td><?php echo $lightloc['lightlocvert_id'];?></td>
			<td><?php echo $lightloc['title'];?></td>
			<td><?php echo $lightloc['created'];?></td>
			<td><?php echo $lightloc['modified'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'lightlocs', 'action' => 'view', $lightloc['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'lightlocs', 'action' => 'edit', $lightloc['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'lightlocs', 'action' => 'delete', $lightloc['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $lightloc['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Lightloc', true), array('controller' => 'lightlocs', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
