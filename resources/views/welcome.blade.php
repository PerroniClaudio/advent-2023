<x-layout>
    <ul>
        @for ($i = 1; $i <= 25; $i++)
            <li>
                <a href="{{ route('day', ['day' => $i]) }}">Day {{ $i }}</a>
            </li>
        @endfor
    </ul>
</x-layout>
