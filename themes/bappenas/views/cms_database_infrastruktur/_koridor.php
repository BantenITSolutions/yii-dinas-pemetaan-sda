    
    <script type="text/javascript"> 
        $(".chzn-select").chosen();
    </script>
	<select data-placeholder="Pilih Koridor..." class="chzn-select" style="width:100%;" tabindex="2" name="id_koridor" id="id_koridor" required>
	<option></option>
		<?php
			$this->widget('SelectOpKoridor',array("id_select"=>""));
		?>
	</select>

