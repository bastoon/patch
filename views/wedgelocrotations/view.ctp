<div class="wedgelocrotations view">
<h2><?php  __('Wedgelocrotation');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $wedgelocrotation['Wedgelocrotation']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Title'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $wedgelocrotation['Wedgelocrotation']['title']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $wedgelocrotation['Wedgelocrotation']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $wedgelocrotation['Wedgelocrotation']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Wedgelocrotation', true), array('action' => 'edit', $wedgelocrotation['Wedgelocrotation']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Wedgelocrotation', true), array('action' => 'delete', $wedgelocrotation['Wedgelocrotation']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $wedgelocrotation['Wedgelocrotation']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Wedgelocrotations', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Wedgelocrotation', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Wedgelocs', true), array('controller' => 'wedgelocs', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Wedgeloc', true), array('controller' => 'wedgelocs', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Wedgelocs');?></h3>
	<?php if (!empty($wedgelocrotation['Wedgeloc'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Wedgelochorz Id'); ?></th>
		<th><?php __('Wedgelocvert Id'); ?></th>
		<th><?php __('Wedgelocrotation Id'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($wedgelocrotation['Wedgeloc'] as $wedgeloc):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $wedgeloc['id'];?></td>
			<td><?php echo $wedgeloc['wedgelochorz_id'];?></td>
			<td><?php echo $wedgeloc['wedgelocvert_id'];?></td>
			<td><?php echo $wedgeloc['wedgelocrotation_id'];?></td>
			<td><?php echo $wedgeloc['title'];?></td>
			<td><?php echo $wedgeloc['created'];?></td>
			<td><?php echo $wedgeloc['modified'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'wedgelocs', 'action' => 'view', $wedgeloc['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'wedgelocs', 'action' => 'edit', $wedgeloc['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'wedgelocs', 'action' => 'delete', $wedgeloc['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $wedgeloc['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Wedgeloc', true), array('controller' => 'wedgelocs', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
