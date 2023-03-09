<x-app-layout>
    <x-slot name="header">
        <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
            <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
            <li class="active">{{ __('Dashboard') }}</li>
        </ul>
        <div class="m-b-md">
            <h3 class="m-b-none">{{ __('Dashboard') }}</h3>
            <small>Welcome back, Noteman</small>
        </div>
    </x-slot>

    <section class="panel panel-default portlet-item">
        <div class="row m-l-none m-r-none bg-light lter">
            @foreach ($categories as $agenda)
                @if ($agenda->surat->count())
                    <div class="col-sm-6 col-md-4 padder-v b-r b-light">
                        <span class="fa-stack fa-2x pull-left m-r-sm">
                            <i class="fa fa-circle fa-stack-2x text-info"></i>
                            <i class="fa fa-book fa-stack-1x text-white"></i>
                        </span>
                        <a class="clear" href="#">
                            <span class="h3 block m-t-xs"><strong>{{ $agenda->surat->count() }}</strong></span>
                            <small class="text-muted text-uc">{{ $agenda->name }}</small>
                        </a>
                    </div>
                @endif
            @endforeach
            @foreach ($categories as $agenda)
                @if ($agenda->kpn->count())
                    <div class="col-sm-6 col-md-4 padder-v b-r b-light">
                        <span class="fa-stack fa-2x pull-left m-r-sm">
                            <i class="fa fa-circle fa-stack-2x text-info"></i>
                            <i class="fa fa-book fa-stack-1x text-white"></i>
                        </span>
                        <a class="clear" href="#">
                            <span class="h3 block m-t-xs"><strong>{{ $agenda->kpn->count() }}</strong></span>
                            <small class="text-muted text-uc">{{ $agenda->name }}</small>
                        </a>
                    </div>
                @endif
            @endforeach
            @foreach ($categories as $agenda)
                @if ($agenda->kgb->count())
                    <div class="col-sm-6 col-md-4 padder-v b-r b-light">
                        <span class="fa-stack fa-2x pull-left m-r-sm">
                            <i class="fa fa-circle fa-stack-2x text-info"></i>
                            <i class="fa fa-book fa-stack-1x text-white"></i>
                        </span>
                        <a class="clear" href="#">
                            <span class="h3 block m-t-xs"><strong>{{ $agenda->kgb->count() }}</strong></span>
                            <small class="text-muted text-uc">{{ $agenda->name }}</small>
                        </a>
                    </div>
                @endif
            @endforeach
        </div>
    </section>

    <section class="panel panel-success portlet-item">
        <div class="panel-heading">
            Agenda Surat
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="agendasurat">
                    <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>Perihal</th>
                            <th>Lampiran</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($surat as $item)
                            <tr>
                                <td>{{ $item->nomor }}</td>
                                <td>{{ $item->perihal }}</td>
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
    <section class="panel panel-success portlet-item">
        <div class="panel-heading">
            Agenda Kenaikan Pangkat
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="agendakpn">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>N I P</th>
                            <th>Unit Kerja</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kpn as $kp)
                            <tr>
                                <td>{{ $kp->nama }}</td>
                                <td>{{ $kp->nip }}</td>
                                <td>{{ $kp->unor_nama }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.table-responsive -->
        </div>
        <!-- /.panel-body -->
    </section>
    <section class="panel panel-success portlet-item">
        <div class="panel-heading">
            Agenda Kenaikan Gaji Berkala
        </div>
        <!-- /.panel-heading -->
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover" id="agendakgb">
                    <thead>
                        <tr>
                            <th>N a m a</th>
                            <th>N I P</th>
                            <th>Unit Kerja</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kgb as $item)
                            <tr>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->nip }}</td>
                                <td>{{ $item->unor_nama }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.table-responsive -->
        </div>
        <!-- /.panel-body -->
    </section>
</x-app-layout>
