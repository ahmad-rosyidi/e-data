    @extends('admin.layout')

    @section('title', '| Data Log')

    @section('content')

        <div class="row">
            <div class="col-lg-12">
                <div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                        <h2>Data Log</h2>
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

                        <table class="table table-bordered table-stripped display" id="mydatatables" style="width:100%">
                            <thead>
                                <th>#</th>
                                <th>AKTIFITAS</th>
                                <th>OLEH</th>
                                <th>TANGGAL / JAM</th>
                                <th>AKSI</th>
                            </thead>
                            <tbody>

                                @foreach ($data as $d)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $d->aktifitas }}</td>
                                        <td>{{ $d->oleh }}</td>
                                        <td>{{ date('d-m-Y H:i:s', strtotime($d->created_at)) }}</td>

                                        <td>

                                            <form action="/admin/log/{{ $d->id }}/hapus" method="post"
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
                                    <label for="nama_akhir" class="col-form-label" id="nama_akhir" name="nama_akhir">Nama
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
                    order: ([
                        [3, 'desc'],
                        [0, 'asc'],
                    ]),

                });

                @if ($errors->any())
                    $('#modaladd').modal('show')
                @endif

            });
        </script>



    @endsection
