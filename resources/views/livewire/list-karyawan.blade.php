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
            @foreach ($data as $k)
            <tr>
                <td>{{$k->nama}}</td>
                <td>{{$k->kode}}</td>
                <td>{{$k->ssid}}</td>
                <td>{{$k->password}}</td>
                <td>{{$k->ipAddress}}</td>
                <td class="flex flex-wrap gap-2">
                    <button class="rounded text-blue-500 hover:text-blue-600 hover:bg-indigo-50 p-2"><i
                            class="fa fa-edit"></i></button>
                    <button class="rounded text-red-500 hover:text-red-600 hover:bg-indigo-50 p-2"><i
                            class="fa fa-trash"></i></button>
                </td>
            </tr>
            @endforeach

        </tbody>
        <tfoot>

        </tfoot>
    </table>
    <hr class="my-5">
    {{$data->links()}}

</div>