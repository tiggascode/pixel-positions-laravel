@props(['job'])
<div
    class="p-4 bg-white/5 rounded-xl border border-transparent hover:border-blue-800
     group transition-colors duration-300 flex flex-col text-center"
>
    <div class="self-start text-sm">{{ $job->name }}</div>

    <div class="py-8">
        <h3
            class="font-bold group-hover:text-blue-800 text-xl transition-colors duration-300"
        >
            <a href="/jobs/{{$job->id}}" target="_blank"
            >{{ $job->title }}
            </a>
        </h3>
        <p class="text-sm mt-4">{{ $job->salary }}</p>
    </div>

    <div class="flex justify-between items-center mt-auto">
        <div>
            <p class="text-sm mt-4"> {{ $job->employer->name}}</p>
        </div>
        @auth
            @if($job->employer->name === auth()->user()->employer->name)
                <form action="/jobs/{{$job->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit"
                           class="  px-4 py-2 text-sm  text-red-700   hover:rounded hover:bg-black  focus:outline-none"
                           role="menuitem" value="Delete">
                </form>
            @endif
        @endauth
        <div><img src="{{asset('/storage/app/'.$job->employer->logo)}}" width="45px"></div>
    </div>
</div>
