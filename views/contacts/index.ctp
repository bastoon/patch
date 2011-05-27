<div class="contacts index">
<h2><?php __('Contacts');?></h2>
<p>
<?php
// echo $paginator->counter(array(
// 'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
// ));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php //echo $paginator->sort('tcontact_id');?></th>
	<th><?php //echo $paginator->sort('user_id');?></th>
	<th><?php echo $paginator->sort('name');?></th>
        <th><?php echo $paginator->sort('tcontact_id');?></th>
	<th><?php echo $paginator->sort('email');?></th>
	<th><?php echo $paginator->sort('phone');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($contacts as $contact):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php //echo $contact['Tcontact']['title']; ?>
		</td>
		<td>
			<?php //echo $html->link($contact['User']['name'], array('controller' => 'users', 'action' => 'view', $contact['User']['id'])); ?>
		</td>
		<td>
			<?php echo $contact['Contact']['name']; ?>
		</td>
                <td>
                        <?php echo $contact['Tcontact']['title']; ?>
                </td>
		<td>
			<?php echo $contact['Contact']['email']; ?>
		</td>
		<td>
			<?php echo $contact['Contact']['phone']; ?>
		</td>
		<td class="actions">
			<?php //echo $html->link(__('View', true), array('action' => 'view', $contact['Contact']['id'])); ?>
			<?php echo $html->link(__('Edit', true), array('action' => 'edit', $contact['Contact']['id'])); ?>
			<?php //echo $html->link(__('Delete', true), array('action' => 'delete', $contact['Contact']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $contact['Contact']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>


<div class="actions">
	<ul>
                <li><?php echo $html->link(__('Acceuil', true), array('controller' => 'users', 'action' => 'bo_accueil')); ?> </li>		
		<li><?php echo $html->link(__('Fiche technique', true), array('controller' => 'soundpatches', 'action' => 'index')); ?> </li>
	</ul>
</div>
