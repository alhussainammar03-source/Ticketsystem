<!DOCTYPE html>
<html lang="de" class="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Helpdesk')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-[#0B0F14] text-gray-200">

    {{-- TOPBAR --}}
    <header
        class="fixed top-0 left-0 right-0 z-50
               h-16 bg-[#181c21]
               border-b border-[#252C36]">

        <div class="h-full flex items-center justify-between px-6">

            <div class="flex items-center gap-10">

                <a
                    href="{{ route('tickets.index') }}"
                    class="text-xl font-bold text-white"
                >
                <!--     Helpdesk -->
                </a>

                <a
                    href="{{ route('tickets.index') }}"
                    class="h-16 flex items-center
                           text-blue-400
                           border-b-2 border-blue-400"
                >
                <!--     Tickets -->
                </a>

            </div>

            <div class="flex items-center gap-4">

                <a
                    href="#"
                    class="text-blue-400 hover:text-blue-300"
                >
                    Min Ticket Project
                </a>

                <span>🔔</span>
                <span>◉</span>

            </div>

        </div>

    </header>


    {{-- SIDEBAR --}}
    <aside
        class="fixed left-0 top-16 bottom-0
               hidden lg:flex
               w-64 flex-col
               border-r border-[#252C36]
               bg-[#101419]
               p-4"
    >

         <div class="mb-6">

            <h2 class="font-semibold text-blue-400">
                Admin Panel
            </h2>

            <p class="text-sm text-gray-400">
                Min Ticketsystem
            </p>

        </div>


        <nav class="flex flex-col gap-2">

            <a
                href="{{ route('tickets.index') }}"
                class="rounded-lg px-3 py-2
                       text-gray-400
                       hover:bg-[#262a30]"
                >
                Home
            </a>

            <a
                href="{{ route('tickets.index') }}"
                class="rounded-lg
                       bg-[#464c55]
                       px-3 py-2
                       text-white"
            >
                🎫 Tickets
            </a>

            

        </nav>


    </aside>


    {{-- CONTENT --}}
    <main class="pt-24 lg:ml-64 px-6 pb-10">

        @if(session('success'))

            <div
                class="mb-6 rounded-lg
                       border border-green-500/30
                       bg-green-500/10
                       px-4 py-3
                       text-green-400"
            >
                {{ session('success') }}
            </div>

        @endif


        @yield('content')

    </main>

</body>
</html>