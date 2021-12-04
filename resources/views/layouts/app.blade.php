<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.head')
        @include('partials.jsfiles')
        @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])

    </head>
    <body class="font-sans antialiased">
        
        @if (Session::has('missing_equipment'))
        <script type="text/javascript">  
            swal({
                icon: 'warning',
                title:'equipo lleno',
                text:"{{Session::get('missing_equipment')}}",
                type:'success'
            }).then((value) => {
                location.reload();
            }).catch(swal.noop);
        </script>
        @endif
        
        @if (Session::has('squad'))
        <script type="text/javascript">  
            swal({
                icon: 'warning',
                title:'equipo lleno',
                text:"{{Session::get('squad')}}",
                type:'success'
            }).then((value) => {
                location.reload();
            }).catch(swal.noop);
        </script>
        @endif

        @if (Session::has('player_store'))
        <script type="text/javascript">  
            swal({
                icon: 'success',
                title:'jugador creado',
                text:"{{Session::get('player_store')}}",
                type:'success'
            }).then((value) => {
            }).catch(swal.noop);
        </script>
        @endif

        @if (Session::has('tournament_store'))
        <script type="text/javascript">  
            swal({
                icon: 'success',
                title:'torneo creado',
                text:"{{Session::get('tournament_store')}}",
                type:'success'
            }).then((value) => {
                location.reload();
            }).catch(swal.noop);
        </script>
        @endif
        @if (Session::has('player_created'))
        <script type="text/javascript">  
            swal({
                icon: 'success',
                title:'maiesgei',
                text:"{{Session::get('player_created')}}",
                type:'success'
            }).then((value) => {
                location.reload();
            }).catch(swal.noop);
        </script>
        @endif
        
        @if (Session::has('Equipment_store'))
        <script type="text/javascript">  
            swal({
                icon: 'success',
                title:'maiesgei',
                text:"{{Session::get('Equipment_store')}}",
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
