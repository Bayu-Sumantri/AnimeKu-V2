        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="{{ url('/') }}" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user me-2"></i>AnimeKu</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        @if (auth()->user()->Profile)
                            <img class="rounded-circle"
                                src="{{ \Illuminate\Support\Facades\Storage::url(auth()->user()->Profile) }}"
                                alt="" style="width: 40px; height: 40px;">
                        @else
                            <img class="rounded-circle" src="{{ asset('/admin/img/user.jpg') }}" alt=""
                                style="width: 40px; height: 40px;">
                        @endif
                        <div
                            class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                        </div>
                    </div>
                    <div class="ms-3">
                        @auth
                            <h6 class="mb-0">{{ auth()->user()->name }}</h6>
                            <span>{{ auth()->user()->level }}</span>
                        @endauth
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="{{ route('dashboard') }}" class="nav-item nav-link active"><i
                            class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="{{ url('#') }}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                class="fa fa-laptop me-2"></i>Admin Master</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            @if (auth()->user()->level == 'Admin')
                                <a href="{{ route('Users.index') }}" class="dropdown-item">User's</a>
                            @endif
                            <a href="{{ route('AnimeKu.index') }}" class="dropdown-item">AnimeKu</a>
                            <a href="{{ route('list_anime') }}" class="dropdown-item">List AnimeKu</a>
                            <a href="{{ route('list_blog_anime') }}" class="dropdown-item">List Blog Anim (Admin)</a>
                            <a href="{{ route('wishlist_alluser') }}" class="dropdown-item">wishlist (user)</a>
                        </div>
                    </div>

                    <div class="nav-item dropdown">
                        <a href="{{ url('#') }}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i
                                class="fa fa-laptop me-2"></i>Report</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            @if (auth()->user()->level == 'Admin')
                                <a href="{{ route('cetak.index') }}" class="dropdown-item">Cetak User's</a>
                                <a href="{{ route('cetak_animeku') }}" class="dropdown-item">Cetak animeku</a>
                            @endif
                        </div>
                    </div>

                </div>
        </div>
        </nav>
        </div>
        <!-- Sidebar End -->
