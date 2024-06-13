<x-layout>
    <section class="text-center pt-6 mt-10">
        <h1 class="font-bold text-4xl">Login</h1>

        <form
            action="/login"
            class="mt-6 max-w-2xl mx-auto space-y-6"
            method="POST"
        >
            @csrf
            <input
                class="rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full"
                name="email"
                placeholder="Email"
                type="email"
            />
            @error('email')
            <span class="text-danger">{{$message}}</span>
            @enderror
            <input
                class="rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full"
                name="password"
                placeholder="Password"
                type="password"
            />


            <button class="bg-blue-800 rounded py-2 px-6 font-bold">
                Login
            </button>
        </form>
    </section>
</x-layout>
