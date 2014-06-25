    
    <script type="text/javascript"> 
        $(".chzn-select").chosen();
    </script>
	<select data-placeholder="Pilih KPI..." class="chzn-select" style="width:100%;" tabindex="2" name="id_kawasan" id="id_kawasan" required>
	<option></option>
		<?php
			$this->widget('SelectOpKawasan',array("id_select"=>""));
		?>
	</select>