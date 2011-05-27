<div class="groupes view">
<h2><?php  __('Groupe');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $groupe['Groupe']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Admin'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $groupe['Groupe']['admin']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $groupe['Groupe']['description']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $groupe['Groupe']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $groupe['Groupe']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Groupe', true), array('action' => 'edit', $groupe['Groupe']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Groupe', true), array('action' => 'delete', $groupe['Groupe']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $groupe['Groupe']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Groupes', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Groupe', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Rights', true), array('controller' => 'rights', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Right', true), array('controller' => 'rights', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Rights');?></h3>
	<?php if (!empty($groupe['Right'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Groupe Id'); ?></th>
		<th><?php __('Controller'); ?></th>
		<th><?php __('Action'); ?></th>
		<th><?php __('Autorise'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($groupe['Right'] as $right):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $right['id'];?></td>
			<td><?php echo $right['groupe_id'];?></td>
			<td><?php echo $right['controller'];?></td>
			<td><?php echo $right['action'];?></td>
			<td><?php echo $right['autorise'];?></td>
			<td><?php echo $right['created'];?></td>
			<td><?php echo $right['modified'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'rights', 'action' => 'view', $right['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'rights', 'action' => 'edit', $right['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'rights', 'action' => 'delete', $right['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $right['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Right', true), array('controller' => 'rights', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Users');?></h3>
	<?php if (!empty($groupe['User'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Groupe Id'); ?></th>
		<th><?php __('Actif'); ?></th>
		<th><?php __('Published'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Email'); ?></th>
		<th><?php __('Password'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($groupe['User'] as $user):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $user['id'];?></td>
			<td><?php echo $user['groupe_id'];?></td>
			<td><?php echo $user['actif'];?></td>
			<td><?php echo $user['published'];?></td>
			<td><?php echo $user['name'];?></td>
			<td><?php echo $user['email'];?></td>
			<td><?php echo $user['password'];?></td>
			<td><?php echo $user['created'];?></td>
			<td><?php echo $user['modified'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'users', 'action' => 'delete', $user['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New User', true), array('controller' => 'users', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
