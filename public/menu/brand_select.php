<?php $id_brand = \avshop\App::$app->getProperty('id_brand'); ?>
<option value="<?=$id;?>"<?php if($id == $id_brand) echo ' selected'; ?><?php if(isset($_GET['id']) && $id == $_GET['id']) echo ' disabled'; ?>>
    <?=$brand['title'];?>
</option>