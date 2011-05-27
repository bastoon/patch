<div class="tmicros view">
<h2><?php  __('Tmicro');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tmicro['Tmicro']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Title'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tmicro['Tmicro']['title']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tmicro['Tmicro']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tmicro['Tmicro']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Tmicro', true), array('action' => 'edit', $tmicro['Tmicro']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Tmicro', true), array('action' => 'delete', $tmicro['Tmicro']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tmicro['Tmicro']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Tmicros', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Tmicro', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Micros', true), array('controller' => 'micros', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Micro', true), array('controller' => 'micros', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Micros');?></h3>
	<?php if (!empty($tmicro['Micro'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Marque Id'); ?></th>
		<th><?php __('Tmicro Id'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Remarque'); ?></th>
		<th><?php __('Usage'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($tmicro['Micro'] as $micro):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $micro['id'];?></td>
			<td><?php echo $micro['user_id'];?></td>
			<td><?php echo $micro['marque_id'];?></td>
			<td><?php echo $micro['tmicro_id'];?></td>
			<td><?php echo $micro['title'];?></td>
			<td><?php echo $micro['remarque'];?></td>
			<td><?php echo $micro['usage'];?></td>
			<td><?php echo $micro['created'];?></td>
			<td><?php echo $micro['modified'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'micros', 'action' => 'view', $micro['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'micros', 'action' => 'edit', $micro['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'micros', 'action' => 'delete', $micro['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $micro['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Micro', true), array('controller' => 'micros', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
