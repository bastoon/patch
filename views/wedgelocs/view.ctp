<div class="wedgelocs view">
<h2><?php  __('Wedgeloc');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $wedgeloc['Wedgeloc']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Wedgelochorz'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($wedgeloc['Wedgelochorz']['title'], array('controller' => 'wedgelochorzs', 'action' => 'view', $wedgeloc['Wedgelochorz']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Wedgelocvert'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($wedgeloc['Wedgelocvert']['title'], array('controller' => 'wedgelocverts', 'action' => 'view', $wedgeloc['Wedgelocvert']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Wedgelocrotation'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($wedgeloc['Wedgelocrotation']['title'], array('controller' => 'wedgelocrotations', 'action' => 'view', $wedgeloc['Wedgelocrotation']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Title'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $wedgeloc['Wedgeloc']['title']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $wedgeloc['Wedgeloc']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $wedgeloc['Wedgeloc']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Wedgeloc', true), array('action' => 'edit', $wedgeloc['Wedgeloc']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Wedgeloc', true), array('action' => 'delete', $wedgeloc['Wedgeloc']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $wedgeloc['Wedgeloc']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Wedgelocs', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Wedgeloc', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Wedgelochorzs', true), array('controller' => 'wedgelochorzs', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Wedgelochorz', true), array('controller' => 'wedgelochorzs', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Wedgelocverts', true), array('controller' => 'wedgelocverts', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Wedgelocvert', true), array('controller' => 'wedgelocverts', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Wedgelocrotations', true), array('controller' => 'wedgelocrotations', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Wedgelocrotation', true), array('controller' => 'wedgelocrotations', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Wedges', true), array('controller' => 'wedges', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Wedge', true), array('controller' => 'wedges', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Wedges');?></h3>
	<?php if (!empty($wedgeloc['Wedge'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Wedgeloc Id'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($wedgeloc['Wedge'] as $wedge):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $wedge['id'];?></td>
			<td><?php echo $wedge['user_id'];?></td>
			<td><?php echo $wedge['wedgeloc_id'];?></td>
			<td><?php echo $wedge['title'];?></td>
			<td><?php echo $wedge['created'];?></td>
			<td><?php echo $wedge['modified'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'wedges', 'action' => 'view', $wedge['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'wedges', 'action' => 'edit', $wedge['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'wedges', 'action' => 'delete', $wedge['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $wedge['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Wedge', true), array('controller' => 'wedges', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
