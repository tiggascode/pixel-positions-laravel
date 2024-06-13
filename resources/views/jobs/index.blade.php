<x-layout>
    <x-search/>
    <div class="grid lg:grid-cols-3 gap-8 mt-9">

        @foreach($jobs as $job)
            <x-job-card :$job/>
        @endforeach
    </div>
    <div class=" mt-10 mb-10">
        {{$jobs->links()}}
    </div>
</x-layout>
