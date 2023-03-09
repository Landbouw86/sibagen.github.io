<x-app-layout>
    <x-slot name="header">
        <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
            <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
            <li class="active">{{ __('Agenda Surat') }}</li>
        </ul>
        <div class="m-b-md">
            <h3 class="m-b-none">{{ __('Agenda Surat') }}</h3>
            <small>Monitoring Surat Masuk & Surat Keluar</small>
        </div>
    </x-slot>

    <!-- Main content -->
    <section class="panel panel-default portlet-item">
        <div class="panel-heading">
            <a href="{{ route('surat.create') }}" class="btn btn-default btn-sm"><i class="fa fa-plus-circle"></i> Tambah
                Agenda</a>
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Nomor</th>
                            <th>Perihal</th>
                            <th>Lampiran</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($surat as $item)
                            <tr>
                                <td>{{ $item->tanggal }}</td>
                                <td>{{ $item->nomor }}</td>
                                <td>{{ $item->perihal }}</td>
                                <td>{{ $item->lampiran }}</td>
                                <td>{{ $item->keterangan }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.table-responsive -->
        </div>
        <!-- /.panel-body -->
    </section>
    <!-- /.panel -->
</x-app-layout>
