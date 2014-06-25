    
    <script type="text/javascript"> 
        $(".chzn-select").chosen();
    </script>
	<select data-placeholder="Pilih Tempat Agenda..." class="chzn-select" style="width:100%;" tabindex="2" name="id_tempat" id="id_tempat" required>
	<option></option>
		<?php
			$this->widget('SelectOpTempat',array("id_select"=>""));
		?>
	</select>

