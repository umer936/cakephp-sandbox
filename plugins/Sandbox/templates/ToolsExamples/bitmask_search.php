<?php
/**
 * @var \App\View\AppView $this
 * @var \Sandbox\Model\Entity\BitmaskedRecord[] $records
 * @var string|null $type
 * @var array $flags
 */
?>
<h2>Bitmasks</h2>
	<p>Using the BitmaskedBehavior of Tools plugin together with Search plugin.</p>

<p><?php echo $this->Html->link('Single Select', ['?' => ['type' => null]]); ?> | <?php echo $this->Html->link('Multi Select OR', ['?' => ['type' => 'multiOr']]); ?> | <?php echo $this->Html->link('Multi Select AND', ['?' => ['type' => 'multiAnd']]); ?></p>

<div class="page form">
	<?php echo $this->Form->create(null, ['valueSources' => 'query']);?>
	<fieldset>
		<legend><?php echo __('Filter'); ?> <?php echo h(\Cake\Utility\Inflector::humanize(\Cake\Utility\Inflector::underscore($type ?: 'Single Select'))) ?></legend>
		<?php
		if ($type === 'multiOr' || $type === 'multiAnd') {
			echo $this->Form->control('flags', ['type' => 'select', 'multiple' => 'checkbox']);
		} else {
			echo $this->Form->control('flags', ['type' => 'select', 'empty' => ' - no filter - ']);
		}
		?>
	</fieldset>
	<?php echo $this->Form->submit(__('Search'));
	echo $this->Form->end();?>
</div>


<h3>Table</h3>
<p>Some example records stored in DB</p>

<table class="table list">
<tr>
	<th>Id</th>
	<th>Name</th>
	<th>Flags raw (bitmasked)</th>
	<th>Flags (array)</th>
</tr>
<?php foreach ($bitmaskedRecords as $bitmaskedRecord) { ?>
<tr>
	<td><?php echo h($bitmaskedRecord->id); ?></td>
	<td><?php echo h($bitmaskedRecord->name); ?></td>
	<td><?php echo h($bitmaskedRecord->field_required); ?></td>
	<td><ul><?php
		foreach ($bitmaskedRecord->flags as $flag) {
			echo '<li>' . $flag . ' (' . $bitmaskedRecord::flags($flag) . ')</li>';
		} ?></ul>
	</td>
</tr>
<?php } ?>
</table>
