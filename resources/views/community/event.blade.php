<x-layout>
    <div class="mx-56 mt-12 mb-10">
        <h1 class="text-3xl text-center m-4 font-black text-dark-green border py-3 bg-light-brown">Eventos</h1>
    </div>
    <div class="mt-6 mx-12 grid grid-cols-2 gap-6">
        @foreach ($events as $event)
            <x-event-card image="{{ $event->image }}" title="{{ $event->title }}" address="{{ $event->address }}" date="{{ $event->date }}" modalidad="{{ $event->modalidad }}" subtitle="{{ $event->subtitle }}" />
        @endforeach
    </div>
</x-layout>
