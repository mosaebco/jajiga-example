<x-lays>
    {{-- Hero section --}}
    <div class="bg-primary-100">
        <div class="flex justify-around container mx-auto">
            <div class="flex flex-col justify-center p-16">
                <div class="font-title text-7xl text-accent-600">welcome to our website</div>
                <div class="mt-4 text-2xl text-secondary-600">travel everywhere, don't worry for the place.</div>

                <div class="mt-20">
                    <a href="#" class="px-10 py-5 text-2xl font-semibold rounded-xl bg-brown-300 text-brown-800 hover:bg-brown-400 hover:text-brown-900">Create My Blog</a>
                </div>
            </div>

            <div>
                <x-home.hero-illustration class="w-[20rem] h-[20rem] -mb-32"/>
            </div>
        </div>
    </div>
    {{-- End Hero section --}}


    <x-slot name="footer">
        All Rights Reserved &copy; {{ now()->year }}
    </x-slot>
</x-lays>