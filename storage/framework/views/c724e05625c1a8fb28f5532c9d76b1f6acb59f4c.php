

<?php $__env->startSection('content'); ?>
    <div class="container">

        <h3>Tambah Data Golongan</h3>
        <form action="<?php echo e(url('/golongan')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="mb-3">
                <label>KODE</label>
                <input type="text" class="form-control" name="gol_kode">
            </div>
            <div class="mb-3">
                <label>NAMA GOLONGAN</label>
                <input type="text" class="form-control" name="gol_nama">
            </div>
            <div class="mb-3">
                <input type="submit" value="SIMPAN">
            </div>
        </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\imam-quiz\resources\views/golongan/create.blade.php ENDPATH**/ ?>