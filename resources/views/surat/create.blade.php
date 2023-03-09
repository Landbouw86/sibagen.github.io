<x-app-layout>
    <x-slot name="header">
        <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
            <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
            <li class="active">{{ __('Agenda Surat') }}</li>
            <li class="active">{{ __('Form') }}</li>
        </ul>
        <div class="m-b-md">
            <h3 class="m-b-none">{{ __('Form') }}</h3>
            <small>Tambah Agenda Surat</small>
        </div>
    </x-slot>

    <!-- Main content -->
    <section class="panel panel-default portlet-item">
        <!-- /.panel-heading -->
        <div class="panel-body">
            <form action="{{ route('surat.store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-4 col-xs-6">
                        <div class="form-group">
                            <label for="surat_kategori_id">Pilih Kategori Surat</label>
                            <select name="surat_kategori_id" id="surat_kategori_id" class="form-control">
                                @foreach ($suratkategori as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xs-6">
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" name="tanggal" class="form-control"
                                placeholder="Masukan tanggal surat" required>
                        </div>
                    </div>
                    <div class="col-lg-4 col-xs-6">
                        <div class="form-group">
                            <label for="nomor">Nomor</label>
                            <input type="text" name="nomor" class="form-control" placeholder="Masukan nomor surat"
                                required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="pengirim">Instansi/Unit Kerja </label>
                            <textarea name="" id="" rows="3" class="form-control"
                                placeholder="Masukan nama unit kerja pengirim surat" required></textarea>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="perihal">Perihal</label>
                            <textarea name="perihal" id="perihal" rows="3" class="form-control" placeholder="Masukan perihal surat"
                                required></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="lampiran">Lampiran</label>
                            <textarea name="lampiran" id="lampiran" rows="3" class="form-control"
                                placeholder="Masukan lampiran surat bila teralmpir" required></textarea>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <textarea name="keterangan" id="keterangan" rows="3" class="form-control" placeholder="Masukan keterangan surat"></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="penerima">Tujuan</label>
                    <input type="text" name="penerima" class="form-control" placeholder="Masukan tujuan surat "
                        required>
                </div>
                <div class="btn-group">
                    <button class="btn btn-primary btn-sm" type="submit">
                        <i class="fa fa-save mr-2"></i>
                        <span> Simpan</span>
                    </button>
                </div>
            </form>
        </div>
        <!-- /.panel-body -->
    </section>
</x-app-layout>
