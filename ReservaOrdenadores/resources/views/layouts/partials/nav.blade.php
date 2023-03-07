<nav class="bg-blue-800 py-6 relative ">
    <div class="container mx-auto flex px-8 xl:px-0">
        <div class="flex flex-grow">
            <img src="{{asset('assets/imagenes/logo.jfif')}}" alt="logo miguel">
        </div>
        <div id="menu" class="hidden flex-grow  w-full justify-between items-center absolute top-40 left-0 bg-green-800 py-14 px-8 lg:flex lg:relative lg:top-0  lg:py-0 lg:px-0 sm:px-14">
            <div class="flex flex-col text-center lg:flex-row">
                @if(Auth::check())
                <a href="{{route('logout')}}" class="bblanco mb-1 lg:mr-4 lg:mb-0" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Cerrar Sesion</a>
                <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none">
                    @csrf
                </form>
                @else
                <a href="{{route('login')}}" class="bblanco mb-1 lg:mr-4 lg:mb-0">Iniciar Sesion</a>
                @endif
                @if(Auth::check())
                <p class="text-white mt-3">Bienvenido, {{auth()->user()->name}}</p>
                @else
                <a href="{{route('register')}}" class="bazul">Regístrate</a>
                @endif
            </div>
        </div>
    </div>
</nav>
<script>
    function openMenu(){
        let menu=document.getElementById('menu');
        if (menu.classList.contains('hidden')){
            menu.classList.remove('hidden');
        } else{
            menu.classList.add('hidden');
        }
    }
</script>
