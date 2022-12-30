<div class="flex flex-col transition-all ">
    <div class="flex flex-wrap justify-between">

        <div class="flex flex-col">
            <h3 class="text-sm font-bold">Data Karyawan</h3>
            <p class="text-xs text-gray-400">Ini adalah daftar karyawan pada usaha tambak anda.</p>
        </div>

        <button wire:click='toggleAddForm'
            class="{{ $showAddForm ? 'border-2 border-amber-400 text-amber-500 hover:text-amber-400 hover:border-amber-200' : 'bg-indigo-500 hover:bg-indigo-400 text-white' }} rounded-lg text-sm px-4 py-2">{{
            $showAddForm ? 'Batal' : 'Tambah
            Data Karyawan'}}</button>
    </div>

    <hr class="block my-5">

    @if ($showAddForm)
    @livewire('create-karyawan')
    <hr class="block my-9">
    @endif

    <table class="table-auto">
        <thead>
            <tr class="text-left">
                <th>Nama</th>
                <th>Kode Alat</th>
                <th>WiFi Alat</th>
                <th>Password Alat</th>
                <th>IP Address Alat</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Kaco Jirris</td>
                <td>dev001</td>
                <td>SmartScaller.Net</td>
                <td>12345678</td>
                <td>192.168.4.1</td>
                <td class="flex flex-wrap gap-2">
                    <button class="rounded text-blue-500 hover:text-blue-600 hover:bg-indigo-50 p-2">edit</button>
                    <button class="rounded text-red-500 hover:text-red-600 hover:bg-indigo-50 p-2">delete</button>
                </td>
            </tr>
        </tbody>
    </table>

</div>