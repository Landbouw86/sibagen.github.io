<x-app-layout>
    <x-slot name="header">
        <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
            <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
            <li class="active">{{ __('Agenda KP') }}</li>
        </ul>
        <div class="m-b-md">
            <h3 class="m-b-none">{{ __('Agenda KP') }}</h3>
        </div>
    </x-slot>

    <section class="panel panel-default">
        <div class="row m-l-none m-r-none bg-light lter">
            @foreach ($kpnkategori as $kp)
                <div class="col-sm-6 col-md-6 padder-v b-r b-light">
                    <span class="fa-stack fa-2x pull-left m-r-sm">
                        <i class="fa fa-circle fa-stack-2x text-info"></i>
                        <i class="fa fa-book fa-stack-1x text-white"></i>
                    </span>
                    <a class="clear" href="#">
                        <span class="h3 block m-t-xs"><strong>{{ $kp->kpn->count() }}</strong></span>
                        <small class="text-muted text-uc">{{ $kp->name }}</small>
                    </a>
                </div>
            @endforeach
        </div>
    </section>
    <section class="panel panel-default">
        <div class="panel-heading">
            Daftar Kenaikan Pangkat Periode April & Oktober
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="agendakpn">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>N I P</th>
                            <th>Gol. Ruang</th>
                            <th>TMT KP Terakhir</th>
                            <th>Unit Kerja</th>
                            <th>Status Pemberkasan</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kpn as $kp)
                            <tr>
                                <td>{{ $kp->nama }}</td>
                                <td>{{ $kp->nip }}</td>
                                <td>{{ $kp->golruang }}</td>
                                <td>{{ $kp->tmt_terakhir }}</td>
                                <td>{{ $kp->unor_nama }}</td>
                                <td>{{ $kp->status_berkas }}</td>
                                <td>{{ $kp->keterangan }}</td>
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
