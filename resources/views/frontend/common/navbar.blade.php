<!-- navbar -->
<div class="navbar">
    <div class="container">
        <div class="row">
            <div class="col s6">
                <div class="content-left">
                    <a href="#slide-out" data-activates="slide-out" class="sidebar"><i class="fa fa-bars"></i></a>
                    <a href="#"><img src="frontend/images/logo/brzl.jpg" style="width: 50px;" alt=""></a>
                </div>
            </div>
            <div class="col s6">
                <div class="content-right">
                    @if (Route::has('login'))
                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Login </a>
    
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500"> Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end navbar -->