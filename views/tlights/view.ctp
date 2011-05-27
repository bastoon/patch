<div class="tlights view">
<h2><?php  __('Tlight');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tlight['Tlight']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($tlight['User']['name'], array('controller' => 'users', 'action' => 'view', $tlight['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Public'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tlight['Tlight']['public']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Title'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tlight['Tlight']['title']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tlight['Tlight']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tlight['Tlight']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Tlight', true), array('action' => 'edit', $tlight['Tlight']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Tlight', true), array('action' => 'delete', $tlight['Tlight']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tlight['Tlight']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Tlights', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Tlight', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Lights', true), array('controller' => 'lights', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Light', true), array('controller' => 'lights', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Lights');?></h3>
	<?php if (!empty($tlight['Light'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Tlight Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Public'); ?></th>
		<th><?php __('Lightloc Id'); ?></th>
		<th><?php __('Lightcolor Id'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($tlight['Light'] as $light):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $light['id'];?></td>
			<td><?php echo $light['tlight_id'];?></td>
			<td><?php echo $light['user_id'];?></td>
			<td><?php echo $light['public'];?></td>
			<td><?php echo $light['lightloc_id'];?></td>
			<td><?php echo $light['lightcolor_id'];?></td>
			<td><?php echo $light['title'];?></td>
			<td><?php echo $light['created'];?></td>
			<td><?php echo $light['modified'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'lights', 'action' => 'view', $light['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'lights', 'action' => 'edit', $light['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'lights', 'action' => 'delete', $light['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $light['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Light', true), array('controller' => 'lights', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
