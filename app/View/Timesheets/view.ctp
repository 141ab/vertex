<div class="timesheets view">
<h2><?php  echo __('Timesheet'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($timesheet['Timesheet']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Project'); ?></dt>
		<dd>
			<?php echo $this->Html->link($timesheet['Project']['tittle'], array('controller' => 'projects', 'action' => 'view', $timesheet['Project']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Time'); ?></dt>
		<dd>
			<?php echo h($timesheet['Timesheet']['start_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Time'); ?></dt>
		<dd>
			<?php echo h($timesheet['Timesheet']['end_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Working Hour'); ?></dt>
		<dd>
			<?php echo h($timesheet['Timesheet']['working_hour']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Is Invoiced'); ?></dt>
		<dd>
			<?php echo h($timesheet['Timesheet']['is_invoiced']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Invoice Date'); ?></dt>
		<dd>
			<?php echo h($timesheet['Timesheet']['invoice_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($timesheet['Timesheet']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($timesheet['Timesheet']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Timesheet'), array('action' => 'edit', $timesheet['Timesheet']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Timesheet'), array('action' => 'delete', $timesheet['Timesheet']['id']), null, __('Are you sure you want to delete # %s?', $timesheet['Timesheet']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Timesheets'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Timesheet'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Invoices'), array('controller' => 'invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoice'), array('controller' => 'invoices', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Invoices'); ?></h3>
	<?php if (!empty($timesheet['Invoice'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Invoice Number'); ?></th>
		<th><?php echo __('Client Id'); ?></th>
		<th><?php echo __('Project Id'); ?></th>
		<th><?php echo __('Timesheet Id'); ?></th>
		<th><?php echo __('Total Amount'); ?></th>
		<th><?php echo __('Total Hour'); ?></th>
		<th><?php echo __('Rate'); ?></th>
		<th><?php echo __('Comment'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($timesheet['Invoice'] as $invoice): ?>
		<tr>
			<td><?php echo $invoice['id']; ?></td>
			<td><?php echo $invoice['invoice_number']; ?></td>
			<td><?php echo $invoice['client_id']; ?></td>
			<td><?php echo $invoice['project_id']; ?></td>
			<td><?php echo $invoice['timesheet_id']; ?></td>
			<td><?php echo $invoice['total_amount']; ?></td>
			<td><?php echo $invoice['total_hour']; ?></td>
			<td><?php echo $invoice['rate']; ?></td>
			<td><?php echo $invoice['comment']; ?></td>
			<td><?php echo $invoice['created']; ?></td>
			<td><?php echo $invoice['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'invoices', 'action' => 'view', $invoice['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'invoices', 'action' => 'edit', $invoice['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'invoices', 'action' => 'delete', $invoice['id']), null, __('Are you sure you want to delete # %s?', $invoice['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Invoice'), array('controller' => 'invoices', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
