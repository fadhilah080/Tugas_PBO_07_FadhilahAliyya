

<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-12 margin-tb">
            <h2>Edit Data Mahasiswa</h2>
            <a class="btn btn-primary" href="<?php echo e(route('mahasiswa.index')); ?>">Kembali</a>
    </div>
</div>

<?php if($errors->any()): ?>
<div class="alert alert-danger">
    <strong>Whoops!</strong> Ada Masalah Dengan Inputan Anda <br><br>
    <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</div>

<?php endif; ?>

<form action="<?php echo e(route('mahasiswa.update',$mahasiswa->id)); ?>" method="POST" enctype="multipart/form-data">
<?php echo csrf_field(); ?>
<?php echo method_field('PUT'); ?>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>NIM:</strong>
            <input type="text" name="nim" value="<?php echo e($mahasiswa->nim); ?>" class="form-control" placeholder="NIM">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nama Mahasiswa:</strong>
            <input type="text" name="namamhs" value="<?php echo e($mahasiswa->namamhs); ?>" class="form-control" placeholder="Masukkan Nama Mahasiswa">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Jenis Kelamin:</strong>
            <select id="jk" class="form-control form-select" name="jk" >
                <option value="L" <?php if ($mahasiswa[ 'jk']=="L" ): ?> selected="selected"
                    <?php endif; ?>>L</option>
                <option value="P" <?php if ($mahasiswa[ 'jk']=="P" ): ?> selected="selected"
                    <?php endif; ?>>P</option>
            </select>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Alamat:</strong>
            <input type="text" name="alamat" value="<?php echo e($mahasiswa->alamat); ?>" class="form-control" placeholder="Masukkan Alamat">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Kota:</strong>
            <input type="text" name="kota" value="<?php echo e($mahasiswa->kota); ?>" class="form-control" placeholder="Masukkan Kota">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email:</strong>
            <input type="text" name="email" value="<?php echo e($mahasiswa->email); ?>" class="form-control" placeholder="Masukkan Email">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Foto:</strong>
            <input type="file" name="foto" class="form-control" placeholder="Foto">
            <img src="/image/<?php echo e($mahasiswa->foto); ?>" width="300px">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('mahasiswa.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\example-app\resources\views/mahasiswa/edit.blade.php ENDPATH**/ ?>