<?php 
defined('C5_EXECUTE') or die(_("Access Denied."));
$replaceOnUnload = 1;
$bt->inc('editor_init.php');
?>

<div style="text-align: center" id="ccm-editor-pane">
<textarea id="ccm-content-<?php echo $b->getBlockID()?>-<?php echo $a->getAreaID()?>" class="advancedEditor" name="content"><?php echo $controller->getContentEditMode()?></textarea>
</div>