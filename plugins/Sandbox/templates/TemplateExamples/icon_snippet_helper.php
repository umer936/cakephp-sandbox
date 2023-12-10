<?php
/**
 * @var \App\View\AppView $this
 */
?>

<nav class="actions col-sm-4 col-12">
	<?php echo $this->element('navigation/template'); ?>
</nav>
<div class="page index col-sm-8 col-12">

	<h2>IconSnippet Helper</h2>

	<h3>Specific Icons</h3>
	<code style="display: block;">
	<?php
	$text = <<<TEXT
	<?php echo \$this->IconSnippet->yesNo(\$boolValue); ?>
	TEXT;
	echo h($text);
	?>
	</code>

	<?php
	echo $this->Format->yesNo(1);
	echo '<br>';
	echo $this->Format->yesNo(0);
	?>

	<br><br>

	<code style="display: block;">
		<?php
		$text = <<<TEXT
	<?php echo \$this->IconSnippet->thumbs(\$boolValue); ?>
	TEXT;
		echo h($text);
		?>
	</code>


	<div style="font-size: 18px;">
	<?php
	echo $this->Format->thumbs(1);
	echo '<br>';
	echo $this->Format->thumbs(0);
	?>
	</div>

</div>
