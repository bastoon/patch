<div class="lightlocs view">
<h2><?php  __('Lightloc');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $lightloc['Lightloc']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Lightlochorz'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($lightloc['Lightlochorz']['title'], array('controller' => 'lightlochorzs', 'action' => 'view', $lightloc['Lightlochorz']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Lightlocvert'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($lightloc['Lightlocvert']['title'], array('controller' => 'lightlocverts', 'action' => 'view', $lightloc['Lightlocvert']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Title'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $lightloc['Lightloc']['title']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $lightloc['Lightloc']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $lightloc['Lightloc']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Lightloc', true), array('action' => 'edit', $lightloc['Lightloc']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Lightloc', true), array('action' => 'delete', $lightloc['Lightloc']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $lightloc['Lightloc']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Lightlocs', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Lightloc', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Lightlochorzs', true), array('controller' => 'lightlochorzs', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Lightlochorz', true), array('controller' => 'lightlochorzs', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Lightlocverts', true), array('controller' => 'lightlocverts', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Lightlocvert', true), array('controller' => 'lightlocverts', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Lights', true), array('controller' => 'lights', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Light', true), array('controller' => 'lights', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Lights');?></h3>
	<?php if (!empty($lightloc['Light'])):?>
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
		foreach ($lightloc['Light'] as $light):
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
