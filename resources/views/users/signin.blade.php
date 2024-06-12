<x-layout>
<div>
    <h1 class="font-bold text-4xl m-8 text-center">Log in</h1>
    <form class="flex justify-center items-center " action="/login" method="POST">
        @csrf
        <div class="w-96 p-6">
        <div>
           <x-input name="email" type="text">Email</x-input>
        </div>
        <div>
            <x-input name="password" type="password">Password</x-input>
        </div>
        <x-button>Log in</x-button>
        </div>

    </form>
</div>
</x-layout>
