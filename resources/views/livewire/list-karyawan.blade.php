<div class="flex flex-col transition-all ">
    <div class="flex flex-wrap justify-between">


        @livewire('data-title', ['title' => 'Data Karyawan', 'description' => 'Ini adalah daftar karyawan pada usaha
        tambak anda.'])

        @if ($showEditForm)
        {{-- edit form --}}
        <button wire:click='toggleEditForm({{-1}})'
            class="border-2 border-amber-400 text-amber-500 hover:text-amber-400 hover:border-amber-200 rounded-lg text-sm px-4 py-2">Batal</button>
        @else
        {{-- no edit form --}}
        <button wire:click='toggleAddForm'
            class="{{ $showAddForm ? 'border-2 border-amber-400 text-amber-500 hover:text-amber-400 hover:border-amber-200' : 'bg-indigo-500 hover:bg-indigo-400 text-white' }} rounded-lg text-sm px-4 py-2">{{
            $showAddForm ? 'Batal' : 'Tambah
            Data Karyawan'}}</button>
        @endif
    </div>

    <hr class="block my-5">

    @if ($showAddForm)
    @livewire('create-karyawan')
    <hr class="block my-9">
    @endif

    @if ($showEditForm)
    @livewire('edit-karyawan', ['idKaryawan' => $idToEdit])
    <hr class="block my-9">
    @endif

    @if ($data->isEmpty())
        @livewire('no-data')
    @else
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
                        <button wire:click='toggleEditForm({{$k->id}})'
                            class="rounded text-blue-500 hover:text-blue-600 hover:bg-indigo-50 p-2"><i
                                class="fa fa-edit"></i></button>
                        <button wire:click='deleteKaryawan({{$k->id}})'
                            class="rounded text-red-500 hover:text-red-600 hover:bg-indigo-50 p-2"><i
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
    @endif


</div>