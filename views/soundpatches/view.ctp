<div class="soundpatches view">
	<h2><?php  __('Fiche techique');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php //if ($i % 2 == 0) echo $class;?>><?php //__('Id'); ?></dt>
		<dd<?php //if ($i++ % 2 == 0) echo $class;?>>
			<?php //echo $soundpatch['Soundpatch']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($soundpatch['User']['name'], array('controller' => 'users', 'action' => 'view', $soundpatch['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php //if ($i % 2 == 0) echo $class;?>><?php //__('Published'); ?></dt>
		<dd<?php //if ($i++ % 2 == 0) echo $class;?>>
			<?php //echo $soundpatch['Soundpatch']['published']; ?>
			&nbsp;
		</dd>
		<dt<?php //if ($i % 2 == 0) echo $class;?>><?//php __('Wedge'); ?></dt>
		<dd<?php //if ($i++ % 2 == 0) echo $class;?>>
			<?php //echo $html->link($soundpatch['Wedge']['title'], array('controller' => 'wedges', 'action' => 'view', $soundpatch['Wedge']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Title'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soundpatch['Soundpatch']['title']; ?>
			&nbsp;
		</dd>
		<dt<?php //if ($i % 2 == 0) echo $class;?>><?php //__('Created'); ?></dt>
		<dd<?php //if ($i++ % 2 == 0) echo $class;?>>
			<?php //echo $soundpatch['Soundpatch']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php //if ($i % 2 == 0) echo $class;?>><?php //__('Modified'); ?></dt>
		<dd<?php //if ($i++ % 2 == 0) echo $class;?>>
			<?php //echo $soundpatch['Soundpatch']['modified']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Note'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $soundpatch['Soundpatch']['note']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>

                <li><?php echo $html->link(__('Acceuil', true), array('controller' => 'users', 'action' => 'bo_accueil')); ?> </li>
                <li><?php echo $html->link(__('Contact', true), array('controller' => 'contacts', 'action' => 'index')); ?> </li>
		<li><BR></li>
		<li><?php echo $html->link(__('Modifier la F. technique', true), array('action' => 'edit', $soundpatch['Soundpatch']['id'])); ?> </li>
		<li><?php //echo $html->link(__('Delete Soundpatch', true), array('action' => 'delete', $soundpatch['Soundpatch']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $soundpatch['Soundpatch']['id'])); ?> </li>
		<li><?php //echo $html->link(__('List Soundpatches', true), array('action' => 'index')); ?> </li>
		<li><?php //echo $html->link(__('New Soundpatch', true), array('action' => 'add')); ?> </li>
		<li><?php //echo $html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php //echo $html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php //echo $html->link(__('List Wedges', true), array('controller' => 'wedges', 'action' => 'index')); ?> </li>
		<li><?php //echo $html->link(__('New Wedge', true), array('controller' => 'wedges', 'action' => 'add')); ?> </li>
		<li><?php //echo $html->link(__('List Stageplans', true), array('controller' => 'stageplans', 'action' => 'index')); ?> </li>
		<li><?php //echo $html->link(__('New Stageplan', true), array('controller' => 'stageplans', 'action' => 'add')); ?> </li>
		<li><?php //echo $html->link(__('List Tracks', true), array('controller' => 'tracks', 'action' => 'index')); ?> </li>
		<li><?php //echo $html->link(__('New Track', true), array('controller' => 'tracks', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php // __('Related Stageplans');?></h3>
	<?php if (!empty($soundpatch['Stageplan'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Soundpatch Id'); ?></th>
		<th><?php __('Published'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($soundpatch['Stageplan'] as $stageplan):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $stageplan['id'];?></td>
			<td><?php echo $stageplan['user_id'];?></td>
			<td><?php echo $stageplan['soundpatch_id'];?></td>
			<td><?php echo $stageplan['published'];?></td>
			<td><?php echo $stageplan['title'];?></td>
			<td><?php echo $stageplan['created'];?></td>
			<td><?php echo $stageplan['modified'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'stageplans', 'action' => 'view', $stageplan['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'stageplans', 'action' => 'edit', $stageplan['id'])); ?>
				<?php //echo $html->link(__('Delete', true), array('controller' => 'stageplans', 'action' => 'delete', $stageplan['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $stageplan['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php //echo $html->link(__('New Stageplan', true), array('controller' => 'stageplans', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<?php 

function subval_sort($a,$subkey) {
	foreach($a as $k=>$v) {
		$b[$k] = strtolower($v[$subkey]);
	}
	asort($b);
	foreach($b as $key=>$val) {
		$c[] = $a[$key];
	}
	return $c;
}

$soundpatch['Track'] = subval_sort($soundpatch['Track'], 'rank');

?>
<div class="related">
	<h3><?php __('Related Tracks');?></h3>
	<?php if (!empty($soundpatch['Track'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php //__('Id'); ?></th>
		<th><?php __('Piste'); ?></th>
		<th><?php __('Musicien'); ?></th>
		<th><?php //__('Soundpatch Id'); ?></th>
		<th><?php __('Instrument'); ?></th>
		<th><?php __('Micro'); ?></th>
		<th><?php __('Insert'); ?></th>
		<th><?php __('Effet'); ?></th>
		<th><?php __('Pied de micro'); ?></th>
		<th><?php //__('Micloc'); ?></th>
		<th><?php //__('Note'); ?></th>
		<th><?php //__('Created'); ?></th>
		<th><?php //__('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($soundpatch['Track'] as $track):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php //echo $track['id'];?></td>
			<td><?php echo $track['rank'];?></td>
			<td><?php echo $track['Contact']['name'];?></td>
			<td><?php //echo $track['soundpatch_id'];?></td>
			<td><?php echo $track['Instrument']['title'];?></td>
			<td><?php echo $track['Micro']['title'];?></td>
			<td><?php echo $track['Tinsert']['title'];?></td>
			<td><?php echo $track['Teffect']['title'];?></td>
			<td><?php echo $track['Stand']['title'];?></td>
			<td><?php //echo $track['micloc_id'];?></td>
			<td><?php //echo $track['note'];?></td>
			<td><?php //echo $track['created'];?></td>
			<td><?php //echo $track['modified'];?></td>
			<td class="actions">
				<?php //echo $html->link(__('View', true), array('controller' => 'tracks', 'action' => 'view', $track['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'tracks', 'action' => 'edit', $track['id'])); ?>
				<?php //echo $html->link(__('Delete', true), array('controller' => 'tracks', 'action' => 'delete', $track['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $track['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php //echo $html->link(__('New Track', true), array('controller' => 'tracks', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
