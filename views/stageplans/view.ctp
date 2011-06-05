<div class="stageplans view">
<h2><?php  __('Stageplan');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $stageplan['Stageplan']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($stageplan['User']['name'], array('controller' => 'users', 'action' => 'view', $stageplan['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Soundpatch'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($stageplan['Soundpatch']['title'], array('controller' => 'soundpatches', 'action' => 'view', $stageplan['Soundpatch']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Published'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $stageplan['Stageplan']['published']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Title'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $stageplan['Stageplan']['title']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $stageplan['Stageplan']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $stageplan['Stageplan']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit Stageplan', true), array('action' => 'edit', $stageplan['Stageplan']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete Stageplan', true), array('action' => 'delete', $stageplan['Stageplan']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $stageplan['Stageplan']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Stageplans', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Stageplan', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Soundpatches', true), array('controller' => 'soundpatches', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Soundpatch', true), array('controller' => 'soundpatches', 'action' => 'add')); ?> </li>
	</ul>
</div>
