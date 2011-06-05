<div class="lightpatches view">
<h2><?php  __('Lightpatch');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $lightpatch['Lightpatch']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($lightpatch['User']['name'], array('controller' => 'users', 'action' => 'view', $lightpatch['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Published'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $lightpatch['Lightpatch']['published']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Title'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $lightpatch['Lightpatch']['title']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $lightpatch['Lightpatch']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $lightpatch['Lightpatch']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Lightpatch', true), array('action' => 'edit', $lightpatch['Lightpatch']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Lightpatch', true), array('action' => 'delete', $lightpatch['Lightpatch']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $lightpatch['Lightpatch']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Lightpatches', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Lightpatch', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Channels', true), array('controller' => 'channels', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Channel', true), array('controller' => 'channels', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Channels');?></h3>
	<?php if (!empty($lightpatch['Channel'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Rank'); ?></th>
		<th><?php __('Light Id'); ?></th>
		<th><?php __('Lightpatch Id'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($lightpatch['Channel'] as $channel):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $channel['id'];?></td>
			<td><?php echo $channel['rank'];?></td>
			<td><?php echo $channel['light_id'];?></td>
			<td><?php echo $channel['lightpatch_id'];?></td>
			<td><?php echo $channel['title'];?></td>
			<td><?php echo $channel['created'];?></td>
			<td><?php echo $channel['modified'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'channels', 'action' => 'view', $channel['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'channels', 'action' => 'edit', $channel['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'channels', 'action' => 'delete', $channel['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $channel['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Channel', true), array('controller' => 'channels', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
