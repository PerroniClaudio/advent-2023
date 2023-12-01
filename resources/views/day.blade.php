<x-layout>

    <a href="{{ url()->previous() }}" class="btn btn-secondary max-w-xs">Indietro</a>

    <div class="my-16">

        <h1 class="font-semibold text-4xl">Risposta per il giorno {{ $day }}</h1>

        <div class="flex justify-center items-center  my-8">
            {{ $output }}
        </div>

    </div>

</x-layout>
