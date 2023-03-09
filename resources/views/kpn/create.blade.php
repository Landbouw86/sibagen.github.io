<x-app-layout>
    <x-slot name="header">
        <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
            <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
            <li class="active">{{ __('Agenda Kenaikan Pangkat') }}</li>
            <li class="active">{{ __('Form') }}</li>
        </ul>
        <div class="m-b-md">
            <h3 class="m-b-none">{{ __('Form') }}</h3>
            <small>Tambah Agenda Kenaikan Pangkat</small>
        </div>
    </x-slot>

    <!-- Main content -->
    <section class="panel panel-default portlet-item">
        <!-- /.panel-heading -->
        <div class="panel-body">
            <form action="{{ route('kpn.store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-4 col-xs-6">
                        <div class="form-group">
                            <label for="surat_kategori_id">Pilih Periode KP</label>
                            <select name="kpn_kategori_id" id="kpn_kategori_id" class="form-control">
                                @foreach ($kpnkategori as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xs-6">
                        <div class="form-group">
                            <label for="nama">Nama Pegawai</label>
                            <input type="text" name="nama" class="form-control" placeholder="Masukan nama pegawai"
                                required>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xs-6">
                        <div class="form-group">
                            <label for="nip">N I P</label>
                            <input type="text" name="nip" class="form-control"
                                placeholder="Masukan nomor identitas pegawai (NIP)" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="golruang">Gol.Ruang</label>
                            <input type="text" name="golruang" class="form-control"
                                placeholder="Masukan golongan ruang pegawai" required>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="tmt_terakhir">TMT KP Terakhir</label>
                            <input type="date" name="tmt_terakhir" class="form-control"
                                placeholder="Masukan TMT berdasarkan SK KP terakhir" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="unor_nama">Unit Kerja</label>
                            <textarea name="unor_nama" id="unor_nama" rows="3" class="form-control"
                                placeholder="Masukan Unit Kerja berdasarkan SK KP Terakhir" required></textarea>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="status_berkas">Status Pemberkasan</label>
                            <textarea name="status_berkas" id="status_berkas" rows="3" class="form-control"
                                placeholder="Masukan keterangan pemberkasan sesuai persyaratn terlampir"></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <textarea name="keterangan" id="keterangan" rows="3" class="form-control"
                        placeholder="Masukan keterangan lainnya jika ada!"></textarea>
                </div>
                <button class="btn btn-primary btn-sm" type="submit">
                    <i class="fa fa-save mr-2"></i>
                    <span> Simpan</span>
                </button>
            </form>
        </div>
        <!-- /.panel-body -->
    </section>
</x-app-layout>
