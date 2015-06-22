<?php
$footer = new TemplatePower('tpl/footer.tpl');
$footer->prepare();

$header->printToScreen();
$content->printToScreen();
$footer->printToScreen();