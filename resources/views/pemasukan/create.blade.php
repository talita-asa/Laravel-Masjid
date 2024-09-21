<x-landing-layout>
    <div class="p-4 bg-white flex flex-col gap-12 items-center min-h-screen">
        <h2 class="text-xl pt-12 font-bold">Input Pemasukan</h2>

        <form action="{{route('pemasukan.store')}}" method="POST" class="w-96 flex flex-col gap-6" enctype="multipart/form-data">
            @csrf

            <div>
                <x-input-label :value="('Nama')"/>
                <x-text-input class="block mt-1 w-full" type="text" name="nama" required/>
            </div>

            <div>
                <x-input-label :value="('Instansi')"/>
                <x-text-input class="block mt-1 w-full" type="text" name="instansi" required/>
            </div>

            <div>
                <x-input-label :value="('Nominal')"/>
                <x-text-input class="block mt-1 w-full" type="number" name="nominal" required/>
            </div>

            <div>
                <x-input-label :value="('Bukti Bayar')"/>
                <x-text-input class="block mt-1 w-full" type="file" name="bukti_bayar" required/>
            </div>

            <div>
                <x-primary-button class="text-lg bg-blue-500">
                    {{ __('Submit') }}
            </x-primary-button>
            </div>

        </form>     
    </div>
</x-landing-layout>