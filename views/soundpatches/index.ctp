<div class="soundpatches index">
<h2><?php __('Fiches techniques');?></h2>
<p>
<?php
//echo $paginator->counter(array(
//'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
//));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
    <th class="actions"><?php __('Actions');?></th>
	<th><?php //echo $paginator->sort('id');?></th>
	<th><?php //echo $paginator->sort('wedge_id');?></th>
	<th><?php echo $paginator->sort('title');?></th>
	<th><?php //echo $paginator->sort('created');?></th>
	<th><?php //echo $paginator->sort('modified');?></th>
	<th><?php echo $paginator->sort('note');?></th>
</tr>
<?php
$i = 0;
foreach ($soundpatches as $soundpatch):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
                <td class="actions" align="left">
                        <?php echo $html->link(__('View', true), array('action' => 'view', $soundpatch['Soundpatch']['id'])); ?>
                        	<?php echo $html->link(
							    $html->image('/img/pdf.png', array('alt' => 'PDF', 'title'=>'PDF')),
						    	array('action'=>'viewpdf', $soundpatch['Soundpatch']['id']), array('escape' => false));
						    ?>
                        <?php //echo $html->link(__('Edit', true), array('action' => 'edit', $soundpatch['Soundpatch']['id'])); ?>
                        <?php //echo $html->link(__('Delete', true), array('action' => 'delete', $soundpatch['Soundpatch']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $soundpatch['Soundpatch']['id'])); ?>
                </td>
		<td>
			<?php //echo $soundpatch['Soundpatch']['published']; ?>
		</td>
		<td>
			<?php //echo $html->link($soundpatch['Wedge']['title'], array('controller' => 'wedges', 'action' => 'view', $soundpatch['Wedge']['id'])); ?>
		</td>
		<td>
			<?php echo $soundpatch['Soundpatch']['title']; ?>
		</td>
		<td>
			<?php //echo $soundpatch['Soundpatch']['created']; ?>
		</td>
		<td>
			<?php //echo $soundpatch['Soundpatch']['modified']; ?>
		</td>
		<td>
			<?php echo $soundpatch['Soundpatch']['note']; ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="actions">
	<ul>
                <li><?php echo $html->link(__('Acceuil', true), array('controller' => 'users', 'action' => 'bo_accueil')); ?> </li>
                <li><?php echo $html->link(__('Contact', true), array('controller' => 'contacts', 'action' => 'index')); ?> </li>

		<li><?php //echo $html->link(__('New Soundpatch', true), array('action' => 'add')); ?></li>
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
