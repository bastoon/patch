<div class="miclochorzs view">
<h2><?php  __('Miclochorz');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $miclochorz['Miclochorz']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Title'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $miclochorz['Miclochorz']['title']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $miclochorz['Miclochorz']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $miclochorz['Miclochorz']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Miclochorz', true), array('action' => 'edit', $miclochorz['Miclochorz']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Miclochorz', true), array('action' => 'delete', $miclochorz['Miclochorz']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $miclochorz['Miclochorz']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Miclochorzs', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Miclochorz', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Miclocs', true), array('controller' => 'miclocs', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Micloc', true), array('controller' => 'miclocs', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Miclocs');?></h3>
	<?php if (!empty($miclochorz['Micloc'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Miclochorz Id'); ?></th>
		<th><?php __('Miclocvert Id'); ?></th>
		<th><?php __('Logo Id'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($miclochorz['Micloc'] as $micloc):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $micloc['id'];?></td>
			<td><?php echo $micloc['miclochorz_id'];?></td>
			<td><?php echo $micloc['miclocvert_id'];?></td>
			<td><?php echo $micloc['logo_id'];?></td>
			<td><?php echo $micloc['title'];?></td>
			<td><?php echo $micloc['created'];?></td>
			<td><?php echo $micloc['modified'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'miclocs', 'action' => 'view', $micloc['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'miclocs', 'action' => 'edit', $micloc['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'miclocs', 'action' => 'delete', $micloc['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $micloc['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Micloc', true), array('controller' => 'miclocs', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
