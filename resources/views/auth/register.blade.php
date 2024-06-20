<x-layout>
    <section class="text-center pt-6 mt-10">
        <h1 class="font-bold text-4xl">Register</h1>

        <form
            action="/register"
            class="mt-6 max-w-2xl mx-auto space-y-6"
            method="POST"
            enctype="multipart/form-data"
        >
            @csrf
            <input
                class="rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full"
                name="name"
                placeholder="Name"
                type="text"
            />

            <input
                class="rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full"
                name="email"
                placeholder="Email"
                type="email"
            />

            <input
                class="rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full"
                name="password"
                placeholder="Password"
                type="password"
            />

            <input
                class="rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full"
                name="password_confirmation"
                placeholder="Password confirmation"
                type="password"
            />
            <div class="bg-white/10 my-10 h-px w-full"></div>

            <input
                class="rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full"
                name="employer"
                placeholder="Employer"
                type="text"
            />

            <input
                class="rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full"
                name="logo"
                placeholder="Logo"
                type="file"
            />
            <button class="bg-blue-800 rounded py-2 px-6 font-bold">
                Register
            </button>
        </form>
    </section>
</x-layout>
