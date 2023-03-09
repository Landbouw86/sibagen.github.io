<x-app-layout>
    <x-slot name="header">
        <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
            <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
            <li class="active">{{ __('Agenda KGB') }}</li>
        </ul>
        <div class="m-b-md">
            <h3 class="m-b-none">{{ __('Agenda KGB') }}</h3>
            <small>Welcome back, Noteman</small>
        </div>
    </x-slot>

    <section class="panel panel-default">
        <div class="row m-l-none m-r-none bg-light lter">
            @foreach ($kgbkategori as $item)
                <div class="col-sm-6 col-md-6 padder-v b-r b-light">
                    <span class="fa-stack fa-2x pull-left m-r-sm">
                        <i class="fa fa-circle fa-stack-2x text-info"></i>
                        <i class="fa fa-book fa-stack-1x text-white"></i>
                    </span>
                    <a class="clear" href="#">
                        <span class="h3 block m-t-xs"><strong>{{ $item->kgb->count() }}</strong></span>
                        <small class="text-muted text-uc">{{ $item->name }}</small>
                    </a>
                </div>
            @endforeach
        </div>
    </section>
    <section class="panel panel-default">
        <div class="panel-heading">
            Daftar Kenaikan Gaji Berkala
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="agendakgb">
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>N a m a</th>
                            <th>N I P</th>
                            <th>Gol. RUang</th>
                            <th colspan="2">TMT KP/KGB</th>
                            <th colspan="2">MKG</th>
                            <th>Unit Kerja</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kgb as $item)
                            <tr>
                                <td>{{ $item->tanggal }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->nip }}</td>
                                <td>{{ $item->golruang }}</td>
                                <td>{{ $item->tmt_terakhir }}</td>
                                <td>{{ $item->tmt_berikutnya }}</td>
                                <td>{{ $item->mkg_lama }}</td>
                                <td>{{ $item->mkg_baru }}</td>
                                <td>{{ $item->unor_nama }}</td>
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
