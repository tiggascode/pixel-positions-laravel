<script src="https://cdnjs.cloudflare.com/ajax/libs/react/16.6.3/umd/react.production.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/react-dom/16.6.3/umd/react-dom.production.min.js"></script>
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

<nav
    class="flex justify-between items-center px-2 mb-10 py-4 border-b border-white/10"
>
    <div>
        <a href="/">
            <img src="{{asset('/images/logo.svg')}}"/>
        </a>
    </div>

    <div class="opacity-0 lg:opacity-100">
        @guest
            <div class="space-x-6 font-bold">
                <a href="/register">
                    Sing Up</a>
                <a href="/login">
                    Login</a>
            </div>
        @endguest
        @auth
            <div class="flex justify-between gap-2">

                <div class="flex items-center gap-3 justify-between">

                    <a href="/user/jobs">My Jobs</a>

                    <a href="/jobs/create">Create</a>
                    <form action="/logout" class="  font-bold" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-outline-primary" value="Log Out">
                    </form>

                </div>
            </div>

        @endauth
    </div>

    <div class="max-w-7xl   lg:hidden  lg:px-8">
        <div class="relative flex items-center justify-between h-16">
            <div class="ml-3 relative">

                <div>
                    <button id="toggleprofile"
                            class="flex text-sm gap-3 focus:outline-none "
                    >
                        @auth
                            {{auth()->user()->name}}
                        @endauth
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg"
                             stroke="currentColor">
                            <path
                                d="M4 6h16M4 12h16m-7 6h7"/>
                        </svg>
                    </button>

                    <div id="resultprofile"
                         class="hidden z-40 origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg">
                        <div class="py-1 rounded-md bg-white shadow-xs" role="menu" aria-orientation="vertical"
                             aria-labelledby="user-menu">
                            @guest
                                <a href="/register"
                                   class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"
                                   role="menuitem">Sing Up</a>
                                <a href="/login"
                                   class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"
                                   role="menuitem">Login</a>
                            @endguest
                            @auth
                                <a href="/user/jobs"
                                   class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"
                                   role="menuitem">My Job</a>
                                <a href="/jobs/create"
                                   class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"
                                   role="menuitem">Create Job</a>
                                <form action="/logout" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit"
                                           class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out"
                                           role="menuitem" value="Log Out">
                                </form>
                            @endauth

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</nav>


<script>


    const toggleprofile = document.getElementById("toggleprofile");
    const resultprofile = document.getElementById("resultprofile");
    [...document.querySelectorAll('body')].forEach(el => {
        el.addEventListener('click', event => {
            if (event.target.parentElement.id !== "toggleprofile") {
                console.clear();
                console.log(event.target.parentElement.id)
                resultprofile.classList.add("hidden")
            } else {
                resultprofile.classList.toggle("hidden")
            }
        })
    })
</script>
