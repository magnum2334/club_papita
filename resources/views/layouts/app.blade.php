<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.head')
        @include('partials.jsfiles')
    </head>
    <body class="font-sans antialiased">
        @if (Session::has('tournament_store'))
        <script type="text/javascript">  
            swal({
                icon: 'success',
                title:'mai es gei',
                text:"{{Session::get('tournament_store')}}",
                type:'success'
            }).then((value) => {
                location.reload();
            }).catch(swal.noop);
        </script>
        @endif
        
        
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{-- $header --}}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{-- $slot --}}
                @yield('content')
            </main>
        </div>
    </body>
</html>
