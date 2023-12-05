    

    <?php $__env->startSection('title', '| Data Log'); ?>

    <?php $__env->startSection('content'); ?>

        <div class="row">
            <div class="col-lg-12">
                <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                        <h2>Data Log</h2>
                    </div>

                    <div class="card-body">

                        <div class="row text-center">
                            <div class="col-md-12">
                                <?php if(session()->has('success')): ?>
                                    <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                                        <strong><?php echo e(session('success')); ?></strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                <?php endif; ?>

                                <?php if(session()->has('error')): ?>
                                    <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                        <strong><?php echo e(session('error')); ?></strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>

                        <table class="table table-bordered table-stripped display" id="mydatatables" style="width:100%">
                            <thead>
                                <th>#</th>
                                <th>AKTIFITAS</th>
                                <th>OLEH</th>
                                <th>TANGGAL / JAM</th>
                                <th>AKSI</th>
                            </thead>
                            <tbody>

                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($d->aktifitas); ?></td>
                                        <td><?php echo e($d->oleh); ?></td>
                                        <td><?php echo e(date('d-m-Y H:i:s', strtotime($d->created_at))); ?></td>

                                        <td>

                                            <form action="/admin/log/<?php echo e($d->id); ?>/hapus" method="post"
                                                class="d-inline">
                                                <?php echo csrf_field(); ?>
                                                <button type="submit" class="badge badge-sm rounded-pill text-bg-danger"
                                                    onclick="return confirm('Data ini akan dihapus dan tidak dapat dikembalikan! Apakah anda yakin?')"
                                                    title="Hapus Data">Hapus</button>
                                            </form>

                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Tambah Data -->
        <div class="modal fade" id="modaladd" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="modaladdLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="modaladdLabel">Tambah Data</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <form action="<?php echo e(route('admin.siswa.simpan')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="modal-body">
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
unset($__errorArgs, $__bag); ?>"
                                        id="nama_awal" name="nama_awal" value="<?php echo e(old('nama_awal')); ?>"
                                        placeholder="Masukkan Nama Awal Siswa">

                                    <?php $__errorArgs = ['nama_awal'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback">
                                            <?php echo e($message); ?>

                                        </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                </div>
                            </div>

                            <div class="row">
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
unset($__errorArgs, $__bag); ?>"
                                        id="nama_akhir" name="nama_akhir" value="<?php echo e(old('nama_akhir')); ?>"
                                        placeholder="Masukkan Nama Akhir Siswa">

                                    <?php $__errorArgs = ['nama_akhir'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback">
                                            <?php echo e($message); ?>

                                        </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <label for="email" class="col-form-label">Email Siswa</label>
                                    <input type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        id="email" name="email" value="<?php echo e(old('email')); ?>"
                                        placeholder="Masukkan Email Siswa">

                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback">
                                            <?php echo e($message); ?>

                                        </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <label for="password" class="col-form-label">Kata Sandi</label>
                                    <input type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        id="password" name="password" value="<?php echo e(old('password')); ?>"
                                        placeholder="Masukkan Kata Sandi Siswa">

                                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="invalid-feedback">
                                            <?php echo e($message); ?>

                                        </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">

                                    <label for="status" class="col-form-label" id="status"
                                        name="status">Status</label>
                                    <select class="form-control form-select <?php $__errorArgs = ['status'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid  <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                                        id="status" name="status">

                                        <option value="">-- Piih --</option>
                                        <option value="1" <?php if (old('status') == '1') {
                                            echo 'selected';
                                        } ?>>Aktif</option>

                                        <option value="0" <?php if (old('status') == '0') {
                                            echo 'selected';
                                        } ?>>Tidak Aktif</option>

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

                        <div class="modal-footer">
                            <button type="button" class="btn btn-pill btn-secondary"
                                data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-pill btn-primary btnsave">Save</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>

        <script>
            $(document).ready(function() {

                $('#mydatatables').DataTable({
                    responsive: true,
                    order: ([
                        [3, 'desc'],
                        [0, 'asc'],
                    ]),

                });

                <?php if($errors->any()): ?>
                    $('#modaladd').modal('show')
                <?php endif; ?>

            });
        </script>



    <?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\e-data\resources\views/admin/log/index.blade.php ENDPATH**/ ?>