<x-layout>
    <section class="mt-6">
        @foreach ($events as $event)
        <x-event-card image="{{ $event->image }}" title="{{ $event->title }}" address="{{ $event->address }}" date="{{ $event->date }}" modalidad="{{ $event->modalidad }}" subtitle="{{ $event->subtitle }}" />
    @endforeach
    </section>
</x-layout>
