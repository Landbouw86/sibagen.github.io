<x-app-layout>
    <x-slot name="header">
        <ul class="breadcrumb no-border no-radius b-b b-light pull-in">
            <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
            <li class="active"> {{ __('Profile') }}</li>
        </ul>
        <div class="m-b-md">
            <h3 class="m-b-none"> {{ __('Profile') }}</h3>
        </div>
    </x-slot>

    <section class="hbox stretch">
        <aside class="aside-lg bg-light lter b-r">
            <section class="vbox">
                <section class="scrollable">
                    <div class="wrapper">
                        <div class="clearfix m-b">
                            <a href="#" class="pull-left thumb m-r">
                                <img src="images/User.png" class="img-circle">
                            </a>
                            <div class="clear">
                                <div class="h5 m-t-xs m-b-xs">{{ Auth::user()->name }}</div>
                                <small class="text-muted"><i class="fa fa-map-marker"></i> Burmeso MR</small>
                            </div>
                        </div>
                        <div>
                            <small class="text-uc text-xs text-muted">about me</small>
                            <p>Administrator</p>
                            <small class="text-uc text-xs text-muted">info</small>
                            <p>Admin Pengelola Web Sistem Informasi Buku Agenda SIBAGEN</p>
                            <div class="line"></div>
                        </div>
                    </div>
                </section>
            </section>
        </aside>
        <aside class="bg-white">
            <section class="vbox">
                <header class="header bg-light bg-gradient">
                    <ul class="nav nav-tabs nav-white">
                        <li class="active"><a href="#activity" data-toggle="tab">Profile Information</a></li>
                        <li class=""><a href="#events" data-toggle="tab">Password Account</a></li>
                        <li class=""><a href="#interaction" data-toggle="tab">Deleted Account</a></li>
                    </ul>
                </header>
                <section class="scrollable">
                    <div class="tab-content">
                        <div class="tab-pane active" id="activity">
                            <ul class="list-group no-radius m-b-none m-t-n-xxs list-group-lg no-border">
                                <li class="list-group-item">
                                    @include('profile.partials.update-profile-information-form')
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane" id="events">
                            <div class="text-center wrapper">
                                @include('profile.partials.update-password-form')
                            </div>
                        </div>
                        <div class="tab-pane" id="interaction">
                            <div class="text-center wrapper">
                                @include('profile.partials.delete-user-form')
                            </div>
                        </div>
                    </div>
                </section>
            </section>
        </aside>
    </section>

    {{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div> --}}
</x-app-layout>
