<nav x-data="{ open: false }" class="nav-primary hidden-xs">
    <ul class="nav">
        <li>
            <a href="#layout">
                <i class="fa fa-home icon">
                    <b class="bg-danger"></b>
                </i>
                <span class="pull-right">
                    <i class="fa fa-angle-down text"></i>
                    <i class="fa fa-angle-up text-active"></i>
                </span>
                <span>Home</span>
            </a>
            <ul class="nav lt">
                <li class="{{ Request::routeIs('dashboard') ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}">
                        <i class="fa fa-angle-double-right icon">
                            <b class="bg-primary"></b>
                        </i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="{{ Request::routeIs('surat.count') ? 'active' : '' }}">
                    <a href="{{ route('surat.count') }}">
                        <i class="fa fa-angle-double-right icon">
                            <b class="bg-primary"></b>
                        </i>
                        <span>Surat Masuk & Keluar</span>
                    </a>
                </li>
                <li class="{{ Request::routeIs('kpn.count') ? 'active' : '' }}">
                    <a href="{{ route('kpn.count') }}">
                        <i class="fa fa-angle-double-right icon">
                            <b class="bg-primary"></b>
                        </i>
                        <span>Kenaikan Pangkat</span>
                    </a>
                </li>
                <li class="{{ Request::routeIs('kgb.count') ? 'active' : '' }}">
                    <a href="{{ route('kgb.count') }}">
                        <i class="fa fa-angle-double-right icon">
                            <b class="bg-primary"></b>
                        </i>
                        <span>Kenaikan Gaji Berkala</span>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#layout">
                <i class="fa fa-edit icon">
                    <b class="bg-danger"></b>
                </i>
                <span class="pull-right">
                    <i class="fa fa-angle-down text"></i>
                    <i class="fa fa-angle-up text-active"></i>
                </span>
                <span>Form</span>
            </a>
            <ul class="nav lt">
                <li class="{{ Request::routeIs('surat.create') ? 'active' : '' }}">
                    <a href="{{ route('surat.create') }}">
                        <i class="fa fa-edit icon">
                            <b class="bg-info"></b>
                        </i>
                        <span>Surat</span>
                    </a>
                </li>
                <li class="{{ Request::routeIs('kpn.create') ? 'active' : '' }}">
                    <a href="{{ route('kpn.create') }}">
                        <i class="fa fa-edit icon">
                            <b class="bg-info"></b>
                        </i>
                        <span>Kenaikan Pangkat</span>
                    </a>
                </li>
                <li class="{{ Request::routeIs('kgb.create') ? 'active' : '' }}">
                    <a href="{{ route('kgb.create') }}">
                        <i class="fa fa-edit icon">
                            <b class="bg-info"></b>
                        </i>
                        <span>Kenaikan Gaji Berkala</span>
                    </a>
                </li>
                <li class="{{ Request::routeIs('form.kategori') ? 'active' : '' }}">
                    <a href="{{ route('form.kategori') }}">
                        <i class="fa fa-edit icon">
                            <b class="bg-info"></b>
                        </i>
                        <span>Kategori Agenda</span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
