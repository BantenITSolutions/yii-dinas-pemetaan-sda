    
    <script type="text/javascript"> 
        $(".chzn-select").chosen();
    </script>
	<select data-placeholder="Pilih Nama Proyek..." class="chzn-select" style="width:100%;" tabindex="2" name="id_nama_proyek" id="id_nama_proyek" required>
	<option></option>
		<?php
			$this->widget('SelectOpNamaProyek',array("id_select"=>""));
		?>
	</select>