<?php
$engines = array(
	'DomPdf' => 'dom',
	'WkHtmlToPdf' => 'wk',
	'Tcpdf' => 'tc',
	//'Mpdf' => 'm'
);
?>

<h2>Pdf Tests</h2>
For details on how to use it see <a href="http://www.dereuromark.de/2014/04/08/generating-pdfs-with-cakephp/">generating-pdfs-with-cakephp</a> or the <a href="https://github.com/ceeram/CakePdf">CakePDF plugin</a> directly.

<ul>
<?php foreach ($engines as $engine => $action) { ?>
	<li><b><?php echo $this->Html->link($engine, array('action' => 'pdf_test', $action, 'ext' => 'pdf')); ?></b> | <?php echo $this->Html->link('Custom Download Filename', array('action' => 'pdf_test', $action, 'foo-bar', 'ext' => 'pdf')); ?> | <?php echo $this->Html->link('Force Download', array('action' => 'pdf_test', $action, 'ext' => 'pdf', '?' => array('download' => 1))); ?></li>
<?php } ?>
	<li>Mpdf has been removed as it was quite buggy</li>
</ul>

<p>For me DomPdf was the one working out of the box on all systems. Even though slower than WkHtmlToPdf that usually suffices for background PDF tasks.
<br />DomPdf also seems to support some more advanced CSS features like floating etc. But with the custom binary path you can make WkHtmlToPdf work both on linux and windows without problems.</p>

<p>
Note that it's best to use PNG images, as GIF don't seem to work with most PDF engines.
</p>
<p>
Also note the <i>Custom Download Filename trick</i> when displaying PDFs that you want the user to manually download.
</p>

