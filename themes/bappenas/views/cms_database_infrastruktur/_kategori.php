    
    <script type="text/javascript"> 
        $(".chzn-select").chosen();
    </script>
	<select data-placeholder="Pilih Kategori..." class="chzn-select" style="width:100%;" tabindex="2" name="id_kategori" id="id_kategori" required>
	<option></option>
		<?php
			$this->widget('SelectOpKategori',array("id_select"=>""));
		?>
	</select>