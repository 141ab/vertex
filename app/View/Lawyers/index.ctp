<div class="lawyers index">
	<h2><?php echo __('Lawyers'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('client_id'); ?></th>
			<th><?php echo $this->Paginator->sort('first_name'); ?></th>
			<th><?php echo $this->Paginator->sort('last_name'); ?></th>
			<th><?php echo $this->Paginator->sort('qualification'); ?></th>
			<th><?php echo $this->Paginator->sort('designation'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('city'); ?></th>
			<th><?php echo $this->Paginator->sort('country'); ?></th>
			<th><?php echo $this->Paginator->sort('telephone'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($lawyers as $lawyer): ?>
	<tr>
		<td><?php echo h($lawyer['Lawyer']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($lawyer['Client']['id'], array('controller' => 'clients', 'action' => 'view', $lawyer['Client']['id'])); ?>
		</td>
		<td><?php echo h($lawyer['Lawyer']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($lawyer['Lawyer']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($lawyer['Lawyer']['qualification']); ?>&nbsp;</td>
		<td><?php echo h($lawyer['Lawyer']['designation']); ?>&nbsp;</td>
		<td><?php echo h($lawyer['Lawyer']['address']); ?>&nbsp;</td>
		<td><?php echo h($lawyer['Lawyer']['city']); ?>&nbsp;</td>
		<td><?php echo h($lawyer['Lawyer']['country']); ?>&nbsp;</td>
		<td><?php echo h($lawyer['Lawyer']['telephone']); ?>&nbsp;</td>
		<td><?php echo h($lawyer['Lawyer']['created']); ?>&nbsp;</td>
		<td><?php echo h($lawyer['Lawyer']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $lawyer['Lawyer']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $lawyer['Lawyer']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $lawyer['Lawyer']['id']), null, __('Are you sure you want to delete # %s?', $lawyer['Lawyer']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Lawyer'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Clients'), array('controller' => 'clients', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Client'), array('controller' => 'clients', 'action' => 'add')); ?> </li>
	</ul>
</div>
