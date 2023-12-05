    @extends('admin.layout')

    @section('title', '| Data Siswa')

    @section('content')

        <div class="row">
            <div class="col-lg-12">
                <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                        <h2>Data Siswa</h2>
                    </div>

                    <div class="card-body">

                        <div class="row text-center">
                            <div class="col-md-12">
                                @if (session()->has('success'))
                                    <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                                        <strong>{{ session('success') }}</strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @endif

                                @if (session()->has('error'))
                                    <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                                        <strong>{{ session('error') }}</strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="row g-2">
                                <div class="col-auto">
                                    <button type="button" class="btn btn-sm btn-primary btn-add" data-bs-toggle="modal"
                                        data-bs-target="#modaladd">Tambah Data</button>
                                </div>
                            </div>
                        </div>

                        <table class="table table-bordered table-stripped display" id="mydatatables" style="width:100%">
                            <thead>
                                <th>#</th>
                                <th>NAMA AWAL</th>
                                <th>NAMA AKHIR</th>
                                <th>NAMA LENGKAP</th>
                                <th>EMAIL SISWA</th>
                                <th>KATA SANDI SISWA</th>
                                <th>STATUS</th>
                                <th>AKSI</th>
                            </thead>
                            <tbody>

                                @foreach ($data as $d)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $d->nama_awal }}</td>
                                        <td>{{ $d->nama_akhir }}</td>
                                        <td>{{ $d->nama_awal }} {{ $d->nama_akhir }}</td>
                                        <td>{{ $d->email }}</td>
                                        <td>{{ $d->password }}</td>

                                        <td>
                                            <?php if ($d->status == '1') {
                                                echo "<form action='/admin/siswa/$d->id/status_tidak_aktif' method='get' class='d-inline'><button class='badge badge-sm rounded-pill text-bg-success' onclick=\"return confirm('Data siswa ini akan di non-aktikfan! Apakah anda yakin?')\" title='Aktif'>Aktif</button></form>";
                                            } else {
                                                echo "<form action='/admin/siswa/$d->id/status_aktif' method='get' class='d-inline'><button class='badge badge-sm rounded-pill text-bg-danger' onclick=\"return confirm('Data siswa ini akan di aktikfan! Apakah anda yakin?')\" title='Tidak Aktif'>Tidak Aktif</button></form>";
                                            }
                                            ?>

                                        </td>

                                        <td>

                                            <button href='#' data-id='{{ $d->id }}'
                                                class='badge badge-sm rounded-pill btn-warning btn-edit'
                                                title='Ubah'>Ubah</button>

                                            <form action="/admin/siswa/{{ $d->id }}/hapus" method="post"
                                                class="d-inline">
                                                @csrf
                                                <button type="submit" class="badge badge-sm rounded-pill text-bg-danger"
                                                    onclick="return confirm('Data ini akan dihapus dan tidak dapat dikembalikan! Apakah anda yakin?')"
                                                    title="Hapus Data">Hapus</button>
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach


                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>

        <!-- Modal Ubah Data -->
        <div class="modal fade" id="modal-edit" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="modal-editLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="modal-editLabel">Ubah Data</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <form action="#" method="patch" id="form-edit">
                        @csrf
                        <div class="modal-body">
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-pill btn-secondary"
                                data-bs-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-pill btn-primary btn-update">Save</button>
                        </div>

                    </form>
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

                    <form action="{{ route('admin.siswa.simpan') }}" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="nama_awal" class="col-form-label" id="nama_awal" name="nama_awal">Nama
                                        Awal Siswa</label>
                                    <input type="text" class="form-control @error('nama_awal') is-invalid  @enderror"
                                        id="nama_awal" name="nama_awal" value="{{ old('nama_awal') }}"
                                        placeholder="Masukkan Nama Awal Siswa">

                                    @error('nama_awal')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <label for="nama_akhir" class="col-form-label" id="nama_akhir"
                                        name="nama_akhir">Nama
                                        Akhir Siswa</label>
                                    <input type="text" class="form-control @error('nama_akhir') is-invalid  @enderror"
                                        id="nama_akhir" name="nama_akhir" value="{{ old('nama_akhir') }}"
                                        placeholder="Masukkan Nama Akhir Siswa">

                                    @error('nama_akhir')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <label for="email" class="col-form-label">Email Siswa</label>
                                    <input type="email" class="form-control @error('email') is-invalid  @enderror"
                                        id="email" name="email" value="{{ old('email') }}"
                                        placeholder="Masukkan Email Siswa">

                                    @error('email')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <label for="password" class="col-form-label">Kata Sandi</label>
                                    <input type="password" class="form-control @error('password') is-invalid  @enderror"
                                        id="password" name="password" value="{{ old('password') }}"
                                        placeholder="Masukkan Kata Sandi Siswa">

                                    @error('password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">

                                    <label for="status" class="col-form-label" id="status"
                                        name="status">Status</label>
                                    <select class="form-control form-select @error('status') is-invalid  @enderror"
                                        id="status" name="status">

                                        <option value="">-- Piih --</option>
                                        <option value="1" <?php if (old('status') == '1') {
                                            echo 'selected';
                                        } ?>>Aktif</option>

                                        <option value="0" <?php if (old('status') == '0') {
                                            echo 'selected';
                                        } ?>>Tidak Aktif</option>

                                    </select>

                                    <span for="status" @error('status') class="invalid-feedback" @enderror>
                                        @error('status')
                                            {{ $message }}
                                        @enderror
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

                });

                @if ($errors->any())
                    $('#modaladd').modal('show')
                @endif

                @if ($errors->any())
                    $('#modal-edit').modal('show')
                @endif

                $('.btn-edit').on('click', function() {
                    let id = $(this).data('id')
                    $.ajax({
                        url: `/admin/siswa/${id}/ubah`,
                        method: "GET",
                        success: function(data) {
                            // console.log('succes', data)
                            $('#modal-edit').find('.modal-body').html(data)
                            $('#modal-edit').modal('show')
                        },
                    })
                });

                $('.btn-update').on('click', function() {
                    let id = $('#form-edit').find('#id_data').val()
                    let formData = $('#form-edit').serialize()
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: `/admin/siswa/${id}/perbarui`,
                        method: "POST",
                        data: formData,
                        success: function(data) {
                            $('#modal-edit').modal('hide')
                            window.location.assign('/admin/siswa')
                        },
                        error: function(error) {
                            let err_log = error.responseJSON.errors;
                            if (error.status == 422) {
                                if (typeof(err_log.nama_awal) !== 'undefined') {
                                    $('#modal-edit').find('[name="nama_awal"]').addClass(
                                        'is-invalid').next().html(
                                        '<span style="color:red">' + err_log.nama_awal[0] +
                                        '</span>').trigger('focus')
                                } else {
                                    $('#modal-edit').find('[name="nama_awal"]').removeClass(
                                        'is-invalid').next().html(
                                        '<span style="color:red"></span>')
                                }

                                if (typeof(err_log.nama_akhir) !== 'undefined') {
                                    $('#modal-edit').find('[name="nama_akhir"]').addClass(
                                        'is-invalid').next().html(
                                        '<span style="color:red">' + err_log.nama_akhir[0] +
                                        '</span>').trigger('focus')
                                } else {
                                    $('#modal-edit').find('[name="nama_akhir"]').removeClass(
                                        'is-invalid').next().html(
                                        '<span style="color:red"></span>')
                                }

                                if (typeof(err_log.email) !== 'undefined') {
                                    $('#modal-edit').find('[name="email"]').addClass(
                                        'is-invalid').next().html(
                                        '<span style="color:red">' + err_log.email[0] +
                                        '</span>').trigger('focus')
                                } else {
                                    $('#modal-edit').find('[name="email"]').removeClass(
                                        'is-invalid').next().html(
                                        '<span style="color:red"></span>')
                                }

                            }
                        }
                    })
                });

            });
        </script>



    @endsection
