    
    <script type="text/javascript"> 
        $(".chzn-select").chosen();
    </script>
	<select data-placeholder="Pilih Nilai Invetasi..." class="chzn-select" style="width:100%;" tabindex="2" name="id_nilai_investasi" id="id_nilai_investasi" required>
	<option></option>
		<?php
			$this->widget('SelectOpNilaiInvestasi',array("id_select"=>""));
		?>
	</select>