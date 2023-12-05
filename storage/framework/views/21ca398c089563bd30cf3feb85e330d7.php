<input type="hidden" value="<?php echo e($data->id); ?>" id="id_data" name="id" />

<div class="row">

    <div class="col-md-12">

        <label for="nama_awal" class="col-form-label" id="nama_awal" name="nama_awal">Nama
            Awal Siswa</label>
        <input type="text" class="form-control <?php $__errorArgs = ['nama_awal'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="nama_awal"
            name="nama_awal" value="<?php echo e(old('nama_awal', $data->nama_awal)); ?>" placeholder="Masukkan Nama Awal Siswa">

        <span for="nama_awal" <?php $__errorArgs = ['nama_awal'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> class="invalid-feedback" <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>>
            <?php $__errorArgs = ['nama_awal'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <?php echo e($message); ?>

            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </span>


    </div>

    <div class="col-md-12">

        <label for="nama_akhir" class="col-form-label" id="nama_akhir" name="nama_akhir">Nama
            Akhir Siswa</label>
        <input type="text" class="form-control <?php $__errorArgs = ['nama_akhir'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="nama_akhir"
            name="nama_akhir" value="<?php echo e(old('nama_akhir', $data->nama_akhir)); ?>"
            placeholder="Masukkan Nama Akhir Siswa">

        <span for="nama_akhir" <?php $__errorArgs = ['nama_akhir'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> class="invalid-feedback" <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>>
            <?php $__errorArgs = ['nama_akhir'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <?php echo e($message); ?>

            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </span>

    </div>

    <div class="col-md-12">

        <label for="email" class="col-form-label" id="email" name="email">Email</label>
        <input type="email" class="form-control" id="email" name="email"
            value="<?php echo e(old('nama_akhir', $data->email)); ?>" />

        <span for="email" <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> class="invalid-feedback" <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>>
            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <?php echo e($message); ?>

            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </span>

    </div>


    <div class="col-md-12">
        <label for="status" class="col-form-label" id="status" name="status">Status</label>
        <select class="form-control form-select form5 text-muted" id="status" name="status">

            <option value="1" <?php if ($data->status == '1') {
                echo 'selected';
            } ?>>Active</option>

            <option value="0" <?php if ($data->status == '0') {
                echo 'selected';
            } ?>>Inactive</option>

        </select>

        <span for="status" <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> class="invalid-feedback" <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>>
            <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <?php echo e($message); ?>

            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </span>

    </div>

</div>

</div>
<?php /**PATH C:\laragon\www\e-data\resources\views/admin/siswa/modal-edit.blade.php ENDPATH**/ ?>