<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Usuários do Sistema') }}
        </h2>
    </x-slot>
    <div class="py-10">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-10">
            {{-- @dd($users); --}}

            @foreach ($users as $user)
                <div style="margin: 5%; border: solid 1px white">
                    <div style="margin: 2%;">
                        <div class="text-white">
                            <label for="">NOME:</label> <span>{{ $user['name'] }}</span>
                        </div>
                        <div class="text-white">
                            <label for="">EMAIL:</label> <span>{{ $user['email'] }}</span>
                        </div>
                        <div class="text-white">
                            <label for="">TIPO:</label> <span>{{ $user['tipo'] }}</span>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

</x-app-layout>
