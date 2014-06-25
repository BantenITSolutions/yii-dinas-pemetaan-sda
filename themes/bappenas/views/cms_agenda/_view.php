<tr class="gradeA">
    <td><?php echo CHtml::link(CHtml::encode($data->id_agenda), array('view', 'id'=>$data->id_agenda)); ?></td>
    <td><?php echo CHtml::encode($data->judul); ?></td>
    <td><?php echo CHtml::encode($data->tanggal); ?></td>
    <td><?php echo CHtml::encode($data->tanggal_mulai); ?></td>
    <td><?php echo CHtml::encode($data->tanggal_selesai); ?></td>
</tr>
