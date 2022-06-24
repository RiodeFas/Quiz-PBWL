
<?php $__env->startSection('content'); ?>

<div class="container">

<h3>Daftar Pelanggan</h3>
<a class="btn btn-primary btn-sm float-end" href="<?php echo e(url('pelanggan/create')); ?>">
        Tambah Data</a>

        <table class="table table-bordered">
<tr>
<td>ID Pelanggan</td>
<td>No Pelanggan</td>
<td>Nama Pelanggan</td>
    <td>Alamat Pelanggan</td>
    <td>No HP Pelanggan</td>
    <td>KTP Pelanggan</td>
    <td>Meteran Pelanggan</td>
    <td>EDIT</td>
</tr>
<?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<tr>
<td><?php echo e($row->pel_id); ?></td>
<td><?php echo e($row->pel_no); ?></td>
<td><?php echo e($row->pel_nama); ?></td>
<td><?php echo e($row->pel_alamat); ?></td>
<td><?php echo e($row->pel_hp); ?></td>
<td><?php echo e($row->pel_ktp); ?></td>
<td><?php echo e($row->pel_meteran); ?></td>
<td><a href="<?php echo e(url('pelanggan/' . $row->pel_id . '/edit')); ?>">Edit</a></td>
<td>
    
<form action="<?php echo e(url('pelanggan/' . $row->pel_id)); ?>"method="POST">
<?php echo method_field('DELETE'); ?>
<?php echo csrf_field(); ?>
<button>Hapus</button>

</form>
<td>
</tr>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
</div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\quiz-ariefmarzuki\resources\views/pelanggan/index.blade.php ENDPATH**/ ?>