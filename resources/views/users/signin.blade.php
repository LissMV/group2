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
        <button class=" m-8 border-double border-neutral-950 border rounded-xl px-4 py-1.5  hover:bg-indigo-500 "
        type="submit">Log in</button>
        </div>

    </form>
</div>
</x-layout>
