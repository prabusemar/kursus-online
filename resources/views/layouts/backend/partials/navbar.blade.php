<nav class="main-header navbar navbar-expand navbar-dark bg-[#252422]">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link text-[#FFFCF2]" data-widget="pushmenu" href="#" role="button">
                <i class="fas fa-bars"></i>
            </a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link text-[#FFFCF2]" data-toggle="dropdown" href="#">
                <i class="far fa-bell"></i>
                <span class="badge badge-warning navbar-badge">
                    {{ Auth::user()->unreadNotifications->count() }}
                </span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right bg-[#403d39]">
                <span class="dropdown-item dropdown-header text-[#FFFCF2]">
                    {{ Auth::user()->unreadNotifications->count() }} Notifications
                </span>
                <div class="dropdown-divider"></div>
                @foreach (Auth::user()->notifications as $notification)
                    @if ($notification->read_at == null)
                        <form action="{{ route('admin.markNotification', $notification->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item bg-[#252422] text-[#FFFCF2]">
                                <i class="fas fa-info-circle mr-2"></i>{{ $notification->data['message'] }}
                                <span
                                    class="float-right text-muted text-sm">{{ $notification->created_at->diffForHumans() }}</span>
                            </button>
                        </form>
                    @endif
                    @if ($loop->last)
                        <div class="dropdown-divider"></div>
                        <form action="{{ route('admin.markAllRead') }}" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item dropdown-footer text-[#EB5E28]">Mark as
                                Read</button>
                        </form>
                    @endif
                @endforeach
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link text-[#FFFCF2]" data-widget="fullscreen" href="#" role="button">
                <i class="fas fa-expand-arrows-alt"></i>
            </a>
        </li>
    </ul>
</nav>

<!-- Custom CSS -->
<style>
    .navbar-dark .navbar-nav .nav-link {
        color: #FFFCF2;
    }

    .navbar-dark .navbar-nav .nav-link:hover {
        color: #EB5E28;
    }

    .dropdown-menu {
        background-color: #403d39;
    }

    .navbar-badge {
        background-color: #EB5E28;
    }

    .dropdown-item {
        background-color: #252422;
        color: #FFFCF2;
    }

    .dropdown-item:hover {
        background-color: #403d39;
    }
</style>
