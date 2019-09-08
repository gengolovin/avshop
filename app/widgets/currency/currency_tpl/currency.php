<option value="" class="label"><?=$this->currency['code'];?></option>
<?php foreach ($this->currencies as $k => $v): ?>
    <?php if ($k != $this->currency['code']): ?>
        <option value="<?=$k;?>" class="label"><?=$k;?></option>
    <?php endif;?>
<?php endforeach;?>




