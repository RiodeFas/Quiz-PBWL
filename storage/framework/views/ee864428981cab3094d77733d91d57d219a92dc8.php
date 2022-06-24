

<?php $__env->startSection('content'); ?>
<div class="container">

<h3>Tambah Data Pelanggan</h3>
<form action="<?php echo e(url('/pelanggan')); ?>" method="POST">
<?php echo csrf_field(); ?>
<div class="mb-3">
<label>ID Pelanggan</label>
<input type="text" class="form-control"name="pel_id">
</div>
<div class="mb-3">
<label>No Pelanggan</label>
<input type="text" class="form-control"name="pel_no">
</div>
<div class="mb-3">
<label>Nama Pelanggan</label>
<input type="text" class="form-control"name="pel_nama">
</div>
<div class="mb-3">
<label>Alamat Pelanggan</label>
<textarea class="form-control"name="pel_alamat"></textarea>
</div>
<div class="mb-3">
<label>No HP Pelanggan</label>
<textarea class="form-control"name="pel_hp"></textarea>
</div>
<div class="mb-3">
<label>KTP Pelanggan</label>
<textarea class="form-control"name="pel_ktp"></textarea>
</div>
<div class="mb-3">
<label>Meteran Pelanggan</label>
<textarea class="form-control"name="pel_meteran"></textarea>
</div>
<div class="mb-3">
<input type="submit" value="SIMPAN">
</div>
</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\imam-quiz\resources\views/pelanggan/create.blade.php ENDPATH**/ ?>