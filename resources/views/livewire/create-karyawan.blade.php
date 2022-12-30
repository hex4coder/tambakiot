<div class="flex flex-col bg-gray-50 p-4 shadow-lg rounded-md">
    <div class="flex flex-wrap justify-between">

        <div class="flex flex-col">
            <h3 class="text-sm font-bold">Data Karyawan Baru</h3>
            <p class="text-xs text-gray-400">Masukkan data karyawan anda dengan benar !</p>
        </div>

        <div class="flex gap-2">
            <button wire:click='submitForm'
                class="rounded-lg text-sm px-4 py-2 text-white bg-indigo-500 hover:bg-indigo-600">Simpan</button>

        </div>
    </div>

    <hr class="my-5">

    <div class="flex flex-col">
        <div class="mb-3">
            <label for="about" class="block text-sm font-medium text-gray-700">Nama Karyawan :</label>
            <div class="mt-1">
                <input type="text" wire:model='nama'
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                    placeholder="Kaco Jirris" />
            </div>
            @error('nama')
            <span class="text-xs text-red-500">{{$message}}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="about" class="block text-sm font-medium text-gray-700">Kode Alat Timbangan :</label>
            <div class="mt-1">
                <input type="text" wire:model='kode'
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                    placeholder="Contoh : dev001" />
            </div>
            @error('kode')
            <span class="text-xs text-red-500">{{$message}}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="about" class="block text-sm font-medium text-gray-700">WiFi Alat Timbangan :</label>
            <div class="mt-1">
                <input type="text" wire:model='ssid'
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                    placeholder="Contoh : dev001" />
            </div>
            @error('ssid')
            <span class="text-xs text-red-500">{{$message}}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="about" class="block text-sm font-medium text-gray-700">Password Alat Timbangan :</label>
            <div class="mt-1">
                <input type="text" wire:model='password'
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                    placeholder="Contoh : dev001" />
            </div>
            @error('password')
            <span class="text-xs text-red-500">{{$message}}</span>
            @enderror
        </div>

        <div class="mb-3">
            <label for="about" class="block text-sm font-medium text-gray-700">IPAddress Timbangan :</label>
            <div class="mt-1">
                <input type="text" wire:model='ipAddress'
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                    placeholder="Contoh : dev001" />
            </div>
            @error('ipAddress')
            <span class="text-xs text-red-500">{{$message}}</span>
            @enderror
        </div>
    </div>


</div>