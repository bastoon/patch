<div class="wedges view">
<h2><?php  __('Wedge');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $wedge['Wedge']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($wedge['User']['name'], array('controller' => 'users', 'action' => 'view', $wedge['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Wedgeloc'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($wedge['Wedgeloc']['title'], array('controller' => 'wedgelocs', 'action' => 'view', $wedge['Wedgeloc']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Title'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $wedge['Wedge']['title']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $wedge['Wedge']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $wedge['Wedge']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Wedge', true), array('action' => 'edit', $wedge['Wedge']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Wedge', true), array('action' => 'delete', $wedge['Wedge']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $wedge['Wedge']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Wedges', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Wedge', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Wedgelocs', true), array('controller' => 'wedgelocs', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Wedgeloc', true), array('controller' => 'wedgelocs', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Soundpatches', true), array('controller' => 'soundpatches', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Soundpatch', true), array('controller' => 'soundpatches', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Soundpatches');?></h3>
	<?php if (!empty($wedge['Soundpatch'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Published'); ?></th>
		<th><?php __('Wedge Id'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('Note'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($wedge['Soundpatch'] as $soundpatch):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $soundpatch['id'];?></td>
			<td><?php echo $soundpatch['user_id'];?></td>
			<td><?php echo $soundpatch['published'];?></td>
			<td><?php echo $soundpatch['wedge_id'];?></td>
			<td><?php echo $soundpatch['title'];?></td>
			<td><?php echo $soundpatch['created'];?></td>
			<td><?php echo $soundpatch['modified'];?></td>
			<td><?php echo $soundpatch['note'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'soundpatches', 'action' => 'view', $soundpatch['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'soundpatches', 'action' => 'edit', $soundpatch['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'soundpatches', 'action' => 'delete', $soundpatch['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $soundpatch['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Soundpatch', true), array('controller' => 'soundpatches', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
