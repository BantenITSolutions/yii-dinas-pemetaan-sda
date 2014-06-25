<?php
class UploadForm extends CFormModel {
    public $gambar;
    public function rules() {
        return array(
            array('gambar', 'file',
                    'allowEmpty' => false,
                    'types' => 'jpg,jpeg,gif',
                 ),
        );
    }

    public function attributeLabels() {
        return array(
            'gambar' => 'Upload File',
        );
    }
}
?>