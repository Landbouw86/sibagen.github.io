<x-app-layout>
    <x-slot name="header">
        <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
            <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
            <li class="active">{{ __('Form Kategori') }}</li>
        </ul>
        <div class="m-b-md">
            <h3 class="m-b-none">{{ __('Form Kategori') }}</h3>
            <small>Welcome back, Noteman</small>
        </div>
    </x-slot>

    <div class="row">
        <div class="col-sm-6">
            <section class="panel panel-default">
                <div class="panel-body">
                    <form action="{{ route('suratkategori.store') }}" method="POST">
                        @csrf
                        <p class="text-muted">Please fill the information to continue</p>
                        <div class="form-group">
                            <label>Nama Kategori Surat</label>
                            <input type="text" id="name" name="name" class="form-control"
                                data-required="true">
                        </div>
                        <div class="form-group">
                            <label>Deskripsi</label>
                            <input type="text" id="description" name="description" class="form-control"
                                data-required="true">
                        </div>
                        <div class="form-group">
                            <select name="category_id" id="category_id">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success btn-s-xs">Submit</button>

                    </form>
            </section>
        </div>
    </div>
</x-app-layout>
