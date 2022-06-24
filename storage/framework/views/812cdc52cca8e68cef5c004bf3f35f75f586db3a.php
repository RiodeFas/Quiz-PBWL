

<?php $__env->startSection('content'); ?>
<div class="container">

<h3>Edit Data Mahasiswa</h3>

<form action="<?php echo e(url('/pelanggan/' . $row->pel_id)); ?>" method="POST">

<?php echo method_field('PATCH'); ?>
<?php echo csrf_field(); ?>
<div class="mb-3">
<label>ID Pelanggan</label>
<input type="text" class="form-control"name="pel_id" value="<?php echo e($row->pel_id); ?>"></>
</div>
<div class="mb-3">
<label>No Pelanggan</label>
<input type="text" class="form-control"name="pel_no" value="<?php echo e($row->pel_no); ?>"></>
</div>
<div class="mb-3">
<label>Nama Pelanggan</label>
<input type="text" class="form-control"name="pel_nama"value="<?php echo e($row->pel_nama); ?>"></>
</div>
<div class="mb-3">
<label>Alamat Pelanggan</label>
<input type="text" class="form-control"name="pel_alamat"value="<?php echo e($row->pel_alamat); ?>"></>
</div>
<div class="mb-3">
<label>No HP Pelanggan</label>
<input type="text" class="form-control"name="pel_hp"value="<?php echo e($row->pel_hp); ?>"></>
</div>
<div class="mb-3">
<label>KTP Pelanggan</label>
<input type="text" class="form-control"name="pel_ktp"value="<?php echo e($row->pel_ktp); ?>"></>
</div>
<div class="mb-3">
<label>Meteran Pelanggan</label>
<input type="text" class="form-control"name="pel_meteran"value="<?php echo e($row->pel_meteran); ?>"></>
</div>

<div class="mb-3">
<input type="submit" value="UPDATE">
</div>
</form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\quiz-ariefmarzuki\resources\views/pelanggan/edit.blade.php ENDPATH**/ ?>