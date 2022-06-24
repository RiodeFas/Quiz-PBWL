

<?php $__env->startSection('content'); ?>

<div class="container">

    <h3>Daftar Golongan</h3>
    <a class="btn btn-primary btn-sm float-end" href="<?php echo e(url('golongan/create')); ?>">
        Tambah Data</a>
    <table class="table table-bordered">
        <tr>
            <td>KODE</td>
            <td>NAMA GOLONGAN</td>
            <td>EDIT</td>
            <td>DELETE</td>
        </tr>
        <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($row->gol_kode); ?></td>
            <td><?php echo e($row->gol_nama); ?></td>
            <td><a href="<?php echo e(url('golongan/' . $row->gol_kode . '/edit')); ?>">Edit</a></td>
            <td>
                <form action="<?php echo e(url('golongan/' . $row->gol_id)); ?>" method="POST">
                    <?php echo method_field('DELETE'); ?>
                    <?php echo csrf_field(); ?>
                    <button>Hapus</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\imam-quiz\resources\views/golongan/index.blade.php ENDPATH**/ ?>