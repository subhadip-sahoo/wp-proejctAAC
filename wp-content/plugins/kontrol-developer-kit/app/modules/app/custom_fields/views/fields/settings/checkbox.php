<div class="field-<?=$type?> field-settings">
	<div class="item">
        <div class="label"><?=__('Checkbox Options','kontrolwp')?><span class="req-ast">*</span></div>
        <div>
        	<? if(isset($data['checkbox_options']) && count($data['checkbox_options']) > 0) { 
		           for($i=0; $i < count($data['checkbox_options']); $i++) {
			?>
            <div class="field">
                <input type="text" name="field[<?=$fkey?>][settings][checkbox_options][]" value="<?=$data['checkbox_options'][$i]?>" class="thirty required" />
                <div class="inline duplicate-parent  <?=($i > 0) ? 'delete' : ''?>"></div> 
            </div>
            <? }
             }else{ ?>
              <div class="field">
                <input type="text" name="field[<?=$fkey?>][settings][checkbox_options][]" value="" class="thirty required" />
                <div class="inline duplicate-parent"></div> 
              </div>
               <? } ?>
        </div>
        <div class="desc"><?=__('Checkboxes','kontrolwp')?> <?=__('are entered in the following format - <b>value : label</b>. You can leave out specifying a value by just entering text into the box. The text will become the value and label in this case','kontrolwp')?>.</div>
    </div>
    
    <div class="item">
        <div class="label"><?=__('Maximum Selected Checkboxes Allowed','kontrolwp')?></div>
        <div class="field">
            <input type="text" name="field[<?=$fkey?>][settings][checkbox_max_values]" value="<?=isset($data['checkbox_max_values']) ? $data['checkbox_max_values']:''?>" class="thirty validate-integer" />
        </div>
        <div class="desc"><?=__('Enter a number to limit the number of checkboxes from this group that the user is allowed to check','kontrolwp')?>.</div>
    </div>
    
    <div class="item">
        <div class="label"><?=__('Style','kontrolwp')?><span class="req-ast">*</span></div>
        <div class="field">
            <select name="field[<?=$fkey?>][settings][checkbox_style]" class="sixty">
              <option value="horizontal" <?=isset($data['checkbox_style']) && $data['checkbox_style'] == 'horizontal' ? 'selected="selected"':''?>><?=__('Horizontal','kontrolwp')?></option>
              <option value="vertical" <?=isset($data['checkbox_style']) && $data['checkbox_style'] == 'vertical' ? 'selected="selected"':''?>><?=__('Vertical','kontrolwp')?></option>
            </select>  
        </div>
        <div class="desc"><?=__('Select the style for this group of checkboxes','kontrolwp')?>.</div>
    </div>
    
    
</div>