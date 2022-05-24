<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10">
            <x-panel>
            <h1 class="text-center font-bold text-xl">Register!</h1>
            <form method="POST" action="/register" class="mt-10">
                @csrf

                <x-form.input name="name" />
                <x-form.input name="username" />
                <x-form.input name="email" />

                <x-form.field>
                    <x-form.label name="password"/>

                    <input class="border border-gray-300 p-2 w-full rounded"
                           type="password"
                           name="password"
                           id="password"
                           required
                    >
                    <x-form.error name="password"/>
                </x-form.field>

                <x-form.button>Submit</x-form.button>
            </form>
            </x-panel>
        </main>
    </section>
</x-layout>
