    <script type="text/javascript"> 
        $(".chzn-select").chosen();
    </script>
	<select data-placeholder="Pilih Sektor..." class="chzn-select" style="width:100%;" tabindex="2" name="id_sektor" id="id_sektor" required>
	<option></option>
		<?php
			$this->widget('SelectOpSektor',array("id_select"=>""));
		?>
	</select>