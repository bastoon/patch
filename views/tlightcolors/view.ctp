<div class="tlightcolors view">
<h2><?php  __('Tlightcolor');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tlightcolor['Tlightcolor']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($tlightcolor['User']['name'], array('controller' => 'users', 'action' => 'view', $tlightcolor['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Public'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tlightcolor['Tlightcolor']['public']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Title'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tlightcolor['Tlightcolor']['title']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tlightcolor['Tlightcolor']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tlightcolor['Tlightcolor']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Tlightcolor', true), array('action' => 'edit', $tlightcolor['Tlightcolor']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Tlightcolor', true), array('action' => 'delete', $tlightcolor['Tlightcolor']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tlightcolor['Tlightcolor']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Tlightcolors', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Tlightcolor', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Lightcolors', true), array('controller' => 'lightcolors', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Lightcolor', true), array('controller' => 'lightcolors', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Lightcolors');?></h3>
	<?php if (!empty($tlightcolor['Lightcolor'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Tlightcolor Id'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($tlightcolor['Lightcolor'] as $lightcolor):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $lightcolor['id'];?></td>
			<td><?php echo $lightcolor['tlightcolor_id'];?></td>
			<td><?php echo $lightcolor['title'];?></td>
			<td><?php echo $lightcolor['created'];?></td>
			<td><?php echo $lightcolor['modified'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'lightcolors', 'action' => 'view', $lightcolor['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'lightcolors', 'action' => 'edit', $lightcolor['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'lightcolors', 'action' => 'delete', $lightcolor['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $lightcolor['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Lightcolor', true), array('controller' => 'lightcolors', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
