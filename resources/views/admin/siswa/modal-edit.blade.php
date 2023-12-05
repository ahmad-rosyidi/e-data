<input type="hidden" value="{{ $data->id }}" id="id_data" name="id" />

<div class="row">

    <div class="col-md-12">

        <label for="nama_awal" class="col-form-label" id="nama_awal" name="nama_awal">Nama
            Awal Siswa</label>
        <input type="text" class="form-control @error('nama_awal') is-invalid  @enderror" id="nama_awal"
            name="nama_awal" value="{{ old('nama_awal', $data->nama_awal) }}" placeholder="Masukkan Nama Awal Siswa">

        <span for="nama_awal" @error('nama_awal') class="invalid-feedback" @enderror>
            @error('nama_awal')
                {{ $message }}
            @enderror
        </span>


    </div>

    <div class="col-md-12">

        <label for="nama_akhir" class="col-form-label" id="nama_akhir" name="nama_akhir">Nama
            Akhir Siswa</label>
        <input type="text" class="form-control @error('nama_akhir') is-invalid  @enderror" id="nama_akhir"
            name="nama_akhir" value="{{ old('nama_akhir', $data->nama_akhir) }}"
            placeholder="Masukkan Nama Akhir Siswa">

        <span for="nama_akhir" @error('nama_akhir') class="invalid-feedback" @enderror>
            @error('nama_akhir')
                {{ $message }}
            @enderror
        </span>

    </div>

    <div class="col-md-12">

        <label for="email" class="col-form-label" id="email" name="email">Email</label>
        <input type="email" class="form-control" id="email" name="email"
            value="{{ old('nama_akhir', $data->email) }}" />

        <span for="email" @error('email') class="invalid-feedback" @enderror>
            @error('email')
                {{ $message }}
            @enderror
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

        <span for="status" @error('status') class="invalid-feedback" @enderror>
            @error('status')
                {{ $message }}
            @enderror
        </span>

    </div>

</div>

</div>
