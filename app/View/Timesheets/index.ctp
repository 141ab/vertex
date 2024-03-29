<div class="timesheets index">
	<h2><?php echo __('Timesheets'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('project_id'); ?></th>
			<th><?php echo $this->Paginator->sort('start_time'); ?></th>
			<th><?php echo $this->Paginator->sort('end_time'); ?></th>
			<th><?php echo $this->Paginator->sort('working_hour'); ?></th>
			<th><?php echo $this->Paginator->sort('is_invoiced'); ?></th>
			<th><?php echo $this->Paginator->sort('invoice_date'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($timesheets as $timesheet): ?>
	<tr>
		<td><?php echo h($timesheet['Timesheet']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($timesheet['Project']['tittle'], array('controller' => 'projects', 'action' => 'view', $timesheet['Project']['id'])); ?>
		</td>
		<td><?php echo h($timesheet['Timesheet']['start_time']); ?>&nbsp;</td>
		<td><?php echo h($timesheet['Timesheet']['end_time']); ?>&nbsp;</td>
		<td><?php echo h($timesheet['Timesheet']['working_hour']); ?>&nbsp;</td>
		<td><?php echo h($timesheet['Timesheet']['is_invoiced']); ?>&nbsp;</td>
		<td><?php echo h($timesheet['Timesheet']['invoice_date']); ?>&nbsp;</td>
		<td><?php echo h($timesheet['Timesheet']['created']); ?>&nbsp;</td>
		<td><?php echo h($timesheet['Timesheet']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $timesheet['Timesheet']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $timesheet['Timesheet']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $timesheet['Timesheet']['id']), null, __('Are you sure you want to delete # %s?', $timesheet['Timesheet']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Timesheet'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Invoices'), array('controller' => 'invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoice'), array('controller' => 'invoices', 'action' => 'add')); ?> </li>
	</ul>
</div>
