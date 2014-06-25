    
    <script type="text/javascript"> 
        $(".chzn-select").chosen();
    </script>
	<select data-placeholder="Pilih Pelaksana..." class="chzn-select" style="width:100%;" tabindex="2" name="id_pelaksana" id="id_pelaksana" required>
	<option></option>
		<?php
			$this->widget('SelectOpPelaksana',array("id_select"=>""));
		?>
	</select>