<x-layout>
    <section class="text-center pt-6 mt-10">
        <h1 class="font-bold text-4xl">Create Job</h1>

        <form action="/jobs" method="post"
              class="mt-6 max-w-2xl mx-auto space-y-6"
        >
            @csrf
            <input
                class="rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full"
                name="title"
                placeholder="title"
                type="text"
            />

            <input
                class="rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full"
                name="salary"
                placeholder="salary"
                type="text"
            />

            <input
                class="rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full"
                name="location"
                placeholder="location"
                type="text"
            />

            <div class="bg-white/10 my-10 h-px w-full"></div>

            <input
                class="rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full"
                name="url"
                placeholder="url"
                type="text"
            />

            <input
                class="rounded-xl bg-white/10 border border-white/10 px-5 py-4 w-full"
                name="schedule"
                placeholder="schedule"
                type="text"
            />

            <button type="submit" class="bg-blue-800 rounded py-2 px-6 font-bold">
                Create
            </button>
        </form>
    </section>

</x-layout>
