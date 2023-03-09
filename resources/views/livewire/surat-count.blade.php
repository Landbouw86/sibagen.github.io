<x-app-layout>
    <x-slot name="header">
        <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
            <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
            <li class="active">{{ __('Agenda Surat') }}</li>
        </ul>
        <div class="m-b-md">
            <h3 class="m-b-none">{{ __('Agenda Surat') }}</h3>
            {{-- <small>Welcome back, Noteman</small> --}}
        </div>
    </x-slot>

    <section class="panel panel-default">
        <div class="row m-l-none m-r-none bg-light lter">
            @foreach ($suratkategori as $sk)
                <div class="col-sm-6 col-md-6 padder-v b-r b-light">
                    <span class="fa-stack fa-2x pull-left m-r-sm">
                        <i class="fa fa-circle fa-stack-2x text-info"></i>
                        <i class="fa fa-envelope fa-stack-1x text-white"></i>
                    </span>
                    <a class="clear" href="#">
                        <span class="h3 block m-t-xs"><strong>{{ $sk->surat->count() }}</strong></span>
                        <small class="text-muted text-uc">{{ $sk->name }}</small>
                    </a>
                </div>
            @endforeach
        </div>
    </section>
    <section class="panel panel-default">
        <div class="panel-heading">
            <h5>Daftar Agenda Surat Masuk & Surat Keluar</h5>
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="agendasurat">
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
