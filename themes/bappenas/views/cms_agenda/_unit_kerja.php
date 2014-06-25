    
    <script type="text/javascript"> 
        $(".chzn-select").chosen();
    </script>
	<select data-placeholder="Pilih Unit Kerja..." class="chzn-select" style="width:100%;" tabindex="2" name="id_unit_kerja" id="id_unit_kerja" required>
	<option></option>
		<?php
			$this->widget('SelectOpUnitKerja',array("id_select"=>""));
		?>
	</select>

