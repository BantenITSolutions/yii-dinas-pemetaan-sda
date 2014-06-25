    <script type="text/javascript"> 
        $(".chzn-select").chosen();
    </script>
	<select data-placeholder="Pilih Sumber Dana..." class="chzn-select" style="width:100%;" tabindex="2" name="id_sumber_dana" id="id_sumber_dana" required>
	<option></option>
		<?php
			$this->widget('SelectOpSumberDana',array("id_select"=>""));
		?>
	</select>