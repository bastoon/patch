<div class="users view">
<h2><?php  __('User');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Groupe'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $html->link($user['Groupe']['id'], array('controller' => 'groupes', 'action' => 'view', $user['Groupe']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Actif'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['actif']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Published'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['published']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Email'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['email']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Password'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['password']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<ul>
		<li><?php echo $html->link(__('Edit User', true), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $html->link(__('Delete User', true), array('action' => 'delete', $user['User']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['User']['id'])); ?> </li>
		<li><?php echo $html->link(__('List Users', true), array('action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New User', true), array('action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Groupes', true), array('controller' => 'groupes', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Groupe', true), array('controller' => 'groupes', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Contacts', true), array('controller' => 'contacts', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Contact', true), array('controller' => 'contacts', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Instruments', true), array('controller' => 'instruments', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Instrument', true), array('controller' => 'instruments', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Lightpatches', true), array('controller' => 'lightpatches', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Lightpatch', true), array('controller' => 'lightpatches', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Lights', true), array('controller' => 'lights', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Light', true), array('controller' => 'lights', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Marques', true), array('controller' => 'marques', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Marque', true), array('controller' => 'marques', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Micros', true), array('controller' => 'micros', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Micro', true), array('controller' => 'micros', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Soundpatches', true), array('controller' => 'soundpatches', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Soundpatch', true), array('controller' => 'soundpatches', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Stageplans', true), array('controller' => 'stageplans', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Stageplan', true), array('controller' => 'stageplans', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Tcontacts', true), array('controller' => 'tcontacts', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Tcontact', true), array('controller' => 'tcontacts', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Teffects', true), array('controller' => 'teffects', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Teffect', true), array('controller' => 'teffects', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Tinserts', true), array('controller' => 'tinserts', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Tinsert', true), array('controller' => 'tinserts', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Tlightcolors', true), array('controller' => 'tlightcolors', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Tlightcolor', true), array('controller' => 'tlightcolors', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Tlights', true), array('controller' => 'tlights', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Tlight', true), array('controller' => 'tlights', 'action' => 'add')); ?> </li>
		<li><?php echo $html->link(__('List Wedges', true), array('controller' => 'wedges', 'action' => 'index')); ?> </li>
		<li><?php echo $html->link(__('New Wedge', true), array('controller' => 'wedges', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Contacts');?></h3>
	<?php if (!empty($user['Contact'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Tcontact Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Published'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Email'); ?></th>
		<th><?php __('Phone'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Contact'] as $contact):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $contact['id'];?></td>
			<td><?php echo $contact['tcontact_id'];?></td>
			<td><?php echo $contact['user_id'];?></td>
			<td><?php echo $contact['published'];?></td>
			<td><?php echo $contact['name'];?></td>
			<td><?php echo $contact['email'];?></td>
			<td><?php echo $contact['phone'];?></td>
			<td><?php echo $contact['created'];?></td>
			<td><?php echo $contact['modified'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'contacts', 'action' => 'view', $contact['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'contacts', 'action' => 'edit', $contact['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'contacts', 'action' => 'delete', $contact['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $contact['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Contact', true), array('controller' => 'contacts', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Instruments');?></h3>
	<?php if (!empty($user['Instrument'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Public'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Symbol'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Instrument'] as $instrument):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $instrument['id'];?></td>
			<td><?php echo $instrument['user_id'];?></td>
			<td><?php echo $instrument['public'];?></td>
			<td><?php echo $instrument['title'];?></td>
			<td><?php echo $instrument['symbol'];?></td>
			<td><?php echo $instrument['created'];?></td>
			<td><?php echo $instrument['modified'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'instruments', 'action' => 'view', $instrument['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'instruments', 'action' => 'edit', $instrument['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'instruments', 'action' => 'delete', $instrument['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $instrument['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Instrument', true), array('controller' => 'instruments', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Lightpatches');?></h3>
	<?php if (!empty($user['Lightpatch'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Published'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Lightpatch'] as $lightpatch):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $lightpatch['id'];?></td>
			<td><?php echo $lightpatch['user_id'];?></td>
			<td><?php echo $lightpatch['published'];?></td>
			<td><?php echo $lightpatch['title'];?></td>
			<td><?php echo $lightpatch['created'];?></td>
			<td><?php echo $lightpatch['modified'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'lightpatches', 'action' => 'view', $lightpatch['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'lightpatches', 'action' => 'edit', $lightpatch['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'lightpatches', 'action' => 'delete', $lightpatch['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $lightpatch['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Lightpatch', true), array('controller' => 'lightpatches', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Lights');?></h3>
	<?php if (!empty($user['Light'])):?>
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
		foreach ($user['Light'] as $light):
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
<div class="related">
	<h3><?php __('Related Marques');?></h3>
	<?php if (!empty($user['Marque'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Public'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Marque'] as $marque):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $marque['id'];?></td>
			<td><?php echo $marque['user_id'];?></td>
			<td><?php echo $marque['public'];?></td>
			<td><?php echo $marque['title'];?></td>
			<td><?php echo $marque['created'];?></td>
			<td><?php echo $marque['modified'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'marques', 'action' => 'view', $marque['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'marques', 'action' => 'edit', $marque['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'marques', 'action' => 'delete', $marque['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $marque['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Marque', true), array('controller' => 'marques', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Micros');?></h3>
	<?php if (!empty($user['Micro'])):?>
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
		foreach ($user['Micro'] as $micro):
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
<div class="related">
	<h3><?php __('Related Soundpatches');?></h3>
	<?php if (!empty($user['Soundpatch'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Published'); ?></th>
		<th><?php __('Wedge Id'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('Note'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Soundpatch'] as $soundpatch):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $soundpatch['id'];?></td>
			<td><?php echo $soundpatch['user_id'];?></td>
			<td><?php echo $soundpatch['published'];?></td>
			<td><?php echo $soundpatch['wedge_id'];?></td>
			<td><?php echo $soundpatch['title'];?></td>
			<td><?php echo $soundpatch['created'];?></td>
			<td><?php echo $soundpatch['modified'];?></td>
			<td><?php echo $soundpatch['note'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'soundpatches', 'action' => 'view', $soundpatch['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'soundpatches', 'action' => 'edit', $soundpatch['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'soundpatches', 'action' => 'delete', $soundpatch['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $soundpatch['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Soundpatch', true), array('controller' => 'soundpatches', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Stageplans');?></h3>
	<?php if (!empty($user['Stageplan'])):?>
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
		foreach ($user['Stageplan'] as $stageplan):
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
				<?php echo $html->link(__('Delete', true), array('controller' => 'stageplans', 'action' => 'delete', $stageplan['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $stageplan['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Stageplan', true), array('controller' => 'stageplans', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Tcontacts');?></h3>
	<?php if (!empty($user['Tcontact'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Public'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Tcontact'] as $tcontact):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $tcontact['id'];?></td>
			<td><?php echo $tcontact['user_id'];?></td>
			<td><?php echo $tcontact['public'];?></td>
			<td><?php echo $tcontact['title'];?></td>
			<td><?php echo $tcontact['created'];?></td>
			<td><?php echo $tcontact['modified'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'tcontacts', 'action' => 'view', $tcontact['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'tcontacts', 'action' => 'edit', $tcontact['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'tcontacts', 'action' => 'delete', $tcontact['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tcontact['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Tcontact', true), array('controller' => 'tcontacts', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Teffects');?></h3>
	<?php if (!empty($user['Teffect'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Public'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Teffect'] as $teffect):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $teffect['id'];?></td>
			<td><?php echo $teffect['user_id'];?></td>
			<td><?php echo $teffect['public'];?></td>
			<td><?php echo $teffect['title'];?></td>
			<td><?php echo $teffect['created'];?></td>
			<td><?php echo $teffect['modified'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'teffects', 'action' => 'view', $teffect['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'teffects', 'action' => 'edit', $teffect['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'teffects', 'action' => 'delete', $teffect['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $teffect['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Teffect', true), array('controller' => 'teffects', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Tinserts');?></h3>
	<?php if (!empty($user['Tinsert'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Public'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Tinsert'] as $tinsert):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $tinsert['id'];?></td>
			<td><?php echo $tinsert['user_id'];?></td>
			<td><?php echo $tinsert['public'];?></td>
			<td><?php echo $tinsert['title'];?></td>
			<td><?php echo $tinsert['created'];?></td>
			<td><?php echo $tinsert['modified'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'tinserts', 'action' => 'view', $tinsert['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'tinserts', 'action' => 'edit', $tinsert['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'tinserts', 'action' => 'delete', $tinsert['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tinsert['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Tinsert', true), array('controller' => 'tinserts', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Tlightcolors');?></h3>
	<?php if (!empty($user['Tlightcolor'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Public'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Tlightcolor'] as $tlightcolor):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $tlightcolor['id'];?></td>
			<td><?php echo $tlightcolor['user_id'];?></td>
			<td><?php echo $tlightcolor['public'];?></td>
			<td><?php echo $tlightcolor['title'];?></td>
			<td><?php echo $tlightcolor['created'];?></td>
			<td><?php echo $tlightcolor['modified'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'tlightcolors', 'action' => 'view', $tlightcolor['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'tlightcolors', 'action' => 'edit', $tlightcolor['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'tlightcolors', 'action' => 'delete', $tlightcolor['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tlightcolor['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Tlightcolor', true), array('controller' => 'tlightcolors', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Tlights');?></h3>
	<?php if (!empty($user['Tlight'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Public'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Tlight'] as $tlight):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $tlight['id'];?></td>
			<td><?php echo $tlight['user_id'];?></td>
			<td><?php echo $tlight['public'];?></td>
			<td><?php echo $tlight['title'];?></td>
			<td><?php echo $tlight['created'];?></td>
			<td><?php echo $tlight['modified'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller' => 'tlights', 'action' => 'view', $tlight['id'])); ?>
				<?php echo $html->link(__('Edit', true), array('controller' => 'tlights', 'action' => 'edit', $tlight['id'])); ?>
				<?php echo $html->link(__('Delete', true), array('controller' => 'tlights', 'action' => 'delete', $tlight['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tlight['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $html->link(__('New Tlight', true), array('controller' => 'tlights', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Wedges');?></h3>
	<?php if (!empty($user['Wedge'])):?>
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
		foreach ($user['Wedge'] as $wedge):
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
