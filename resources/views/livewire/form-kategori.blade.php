<x-app-layout>
    <x-slot name="header">
        <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
            <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
            <li class="active">{{ __('Form Kategori') }}</li>
        </ul>
        <div class="m-b-md">
            <h3 class="m-b-none">{{ __('Form Kategori') }}</h3>
        </div>
    </x-slot>
    <div class="row">
        <div class="col-sm-3">
            <section class="panel panel-info">
                <header class="panel-heading">
                    <a href="{{ route('categories.create') }}" class="btn btn-success btn-xs pull-right"><i
                            class="fa fa-plus-circle"></i> </a>
                    Daftar Kategori Agenda
                </header>
                <table class="table table-striped m-b-none">
                    <thead>
                        <tr>
                            <th>Nama Kategori</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->name }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </section>
        </div>
        <div class="col-sm-3">
            <section class="panel panel-info">
                <header class="panel-heading">
                    <a href="{{ route('suratkategori.create') }}" class="btn btn-success btn-xs pull-right"><i
                            class="fa fa-plus-circle"></i> </a>
                    Daftar Kategori Surat
                </header>
                <table class="table table-striped m-b-none">
                    <thead>
                        <tr>
                            <th>Nama Kategori</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($suratkategoris as $suratkategori)
                            <tr>
                                <td>{{ $suratkategori->name }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </section>
        </div>
        <div class="col-sm-3">
            <section class="panel panel-info">
                <header class="panel-heading">
                    <a href="{{ route('kpnkategori.create') }}" class="btn btn-success btn-xs pull-right"><i
                            class="fa fa-plus-circle"></i> </a>
                    Daftar Kategori Kenaikan Pangkat
                </header>
                <table class="table table-striped m-b-none">
                    <thead>
                        <tr>
                            <th>Nama Kategori</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kpnkategoris as $kpnkategori)
                            <tr>
                                <td>{{ $kpnkategori->name }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </section>
        </div>
        <div class="col-sm-3">
            <section class="panel panel-info">
                <header class="panel-heading">
                    <a href="{{ route('kgbkategori.create') }}" class="btn btn-success btn-xs pull-right"><i
                            class="fa fa-plus-circle"></i> </a>
                    Daftar Kategori Kenaikan Gaji Berkala
                </header>
                <table class="table table-striped m-b-none">
                    <thead>
                        <tr>
                            <th>Nama Kategori</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kgbkategoris as $kgbkategori)
                            <tr>
                                <td>{{ $kgbkategori->name }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </section>
        </div>
    </div>
</x-app-layout>
