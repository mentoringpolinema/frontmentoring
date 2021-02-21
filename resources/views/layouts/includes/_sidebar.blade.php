
            <div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
                <div class="nk-sidebar-element nk-sidebar-head">
                    <div class="nk-sidebar-brand">
                        <a href="#" class="logo-link nk-sidebar-logo">
                            {{-- <img class="logo-light logo-img" src="{{asset('template/dashboard/images/logoBig.png')}}" srcset="{{asset('template/dashboard/images/logoBig.png')}}" alt="logo')}}"> --}}
                            {{-- <img class="logo-small logo-img logo-img-small" src="{{asset('template/dashboard/images/logoBig.png')}}" srcset="{{asset('template/dashboard/images/logoBig.png')}}" alt="logo-small"> --}}
                            <img class="logo-light logo-img" src="{{asset('template/dashboard/images/LogoBig.png')}}" alt="logo">
                            <img class="logo-dark logo-img" src="{{asset('template/dashboard/images/logoBig.png')}}" alt="logo-dark">
                        </a>
                    </div>
                    <div class="nk-menu-trigger mr-n2">
                        <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
                        <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                    </div>
                </div><!-- .nk-sidebar-element -->

                <!-- Role : Panitia -->
                @if(auth()->user()->role == 'Panitia')                 
                <div class="nk-sidebar-element">
                    <div class="nk-sidebar-content">
                        <div class="nk-sidebar-menu" data-simplebar>
                            <ul class="nk-menu">
                                <br>
                                <li class="nk-menu-heading">
                                    <h6 class="overline-title text-primary-alt">Menu Utama</h6>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="/admin" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-dashboard-fill"></em></span>
                                        <span class="nk-menu-text">Dashboard</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-heading">
                                    <h6 class="overline-title text-primary-alt">Kelola Mentoring</h6>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="/admin/mentor" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-user-fill"></em></span>
                                        <span class="nk-menu-text">Mentor</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="/admin/mentee" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                                        <span class="nk-menu-text">Mentee</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="/admin/materi" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-todo-fill"></em></span>
                                        <span class="nk-menu-text">Materi</span>
                                    </a>
                                </li><!-- .nk-menu-item -->                                
                                <li class="nk-menu-item">
                                    <a href="/admin/kelompok" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-view-col3"></em></span>
                                        <span class="nk-menu-text">Kelompok</span>
                                    </a>
                                </li><!-- .nk-menu-item -->                                
                                <li class="nk-menu-item">
                                    <a href="#" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-chat-fill"></em></span>
                                        <span class="nk-menu-text">Keluhan</span>
                                    </a>
                                </li><!-- .nk-menu-item -->                                
                                <li class="nk-menu-item">
                                    <a href="/admin/kegiatan" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-alarm-alt"></em></span>
                                        <span class="nk-menu-text">Kegiatan</span>
                                    </a>
                                </li><!-- .nk-menu-item -->                                
                                <li class="nk-menu-heading">
                                    <h6 class="overline-title text-primary-alt">Kelola Website</h6>
                                </li><!-- .nk-menu-heading -->
                                <li class="nk-menu-item">
                                    <a href="#" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-signal"></em></span>
                                        <span class="nk-menu-text">Pengumuman</span>
                                    </a>
                                </li>
                                <li class="nk-menu-heading">
                                    <h6 class="overline-title text-primary-alt">Kelola Sistem</h6>
                                </li><!-- .nk-menu-heading -->
                                <li class="nk-menu-item">
                                    <a href="/admin/data" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-tile-thumb-fill"></em></span>
                                        <span class="nk-menu-text">Data</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                {{-- <li class="nk-menu-item has-sub">
                                    <a href="#" class="nk-menu-link nk-menu-toggle">
                                        <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
                                        <span class="nk-menu-text">User Manage</span>
                                    </a>
                                    <ul class="nk-menu-sub">
                                        <li class="nk-menu-item">
                                            <a href="#" class="nk-menu-link"><span class="nk-menu-text">Panitia</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="#" class="nk-menu-link"><span class="nk-menu-text">Mentor</span></a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="#" class="nk-menu-link"><span class="nk-menu-text">Super Admin</span></a>
                                        </li>                                        
                                    </ul><!-- .nk-menu-sub -->
                                </li><!-- .nk-menu-item -->                                --}}
                                <li class="nk-menu-item">
                                    <a href="/admin/user" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
                                        <span class="nk-menu-text">User Management</span>
                                    </a>
                                </li>
                            </ul><!-- .nk-menu -->
                        </div><!-- .nk-sidebar-menu -->
                    </div><!-- .nk-sidebar-content -->
                </div><!-- .nk-sidebar-element -->
                @endif

                <!-- Role : Mentor-->
                @if(auth()->user()->role == 'Mentor') 
                <div class="nk-sidebar-element">
                    <div class="nk-sidebar-content">
                        <div class="nk-sidebar-menu" data-simplebar>
                            <ul class="nk-menu">
                                <br>
                                <li class="nk-menu-heading">
                                    <h6 class="overline-title text-primary-alt">Menu Utama</h6>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="/mentor" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-dashboard-fill"></em></span>
                                        <span class="nk-menu-text">Dashboard</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-heading">
                                    <h6 class="overline-title text-primary-alt">Menu Mentor</h6>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="/mentor/materi" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-todo-fill"></em></span>
                                        <span class="nk-menu-text">Materi</span>
                                    </a>
                                </li><!-- .nk-menu-item -->                                
                                <li class="nk-menu-item">
                                    <a href="#" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-view-col3"></em></span>
                                        <span class="nk-menu-text">Kelompok</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                 <li class="nk-menu-heading">
                                    <h6 class="overline-title text-primary-alt">Menu Lainnya</h6>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="/mentor/profile" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-user-alt"></em></span>
                                        <span class="nk-menu-text">Profile</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                            </ul><!-- .nk-menu -->
                        </div><!-- .nk-sidebar-menu -->
                    </div><!-- .nk-sidebar-content -->
                </div><!-- .nk-sidebar-element -->
                @endif

                <!-- Role : Mentee-->
                @if(auth()->user()->role == 'Mentee') 
                <div class="nk-sidebar-element">
                    <div class="nk-sidebar-content">
                        <div class="nk-sidebar-menu" data-simplebar>
                            <ul class="nk-menu">
                                <br>
                                <li class="nk-menu-heading">
                                    <h6 class="overline-title text-primary-alt">Menu Utama</h6>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="/mentee" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-dashboard-fill"></em></span>
                                        <span class="nk-menu-text">Dashboard</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="/mentee/materi" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-todo"></em></span>
                                        <span class="nk-menu-text">Materi</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="/mentee/tugas" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-todo-fill"></em></span>
                                        <span class="nk-menu-text">Tugas</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                 <li class="nk-menu-heading">
                                    <h6 class="overline-title text-primary-alt">Menu Pengganti</h6>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="/mentee/profile" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-puzzle-fill"></em></span>
                                        <span class="nk-menu-text">Pengganti</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                                 <li class="nk-menu-heading">
                                    <h6 class="overline-title text-primary-alt">Menu Lainnya</h6>
                                </li><!-- .nk-menu-item -->
                                <li class="nk-menu-item">
                                    <a href="/mentee/profile" class="nk-menu-link">
                                        <span class="nk-menu-icon"><em class="icon ni ni-user-alt"></em></span>
                                        <span class="nk-menu-text">Profile</span>
                                    </a>
                                </li><!-- .nk-menu-item -->
                            </ul><!-- .nk-menu -->
                        </div><!-- .nk-sidebar-menu -->
                    </div><!-- .nk-sidebar-content -->
                </div><!-- .nk-sidebar-element -->
                @endif

            </div>
            <!-- sidebar @e -->