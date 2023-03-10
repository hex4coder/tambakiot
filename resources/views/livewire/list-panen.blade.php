<div class="flex flex-col transition-all ">
    <div class="flex flex-wrap justify-between">
        @livewire('data-title', [
            'title' => 'Data Panen',
            'description' => 'Ini adalah daftar panen yang dipost karyawan
                                anda.',
        ])
        <a href="/" target="_blank"
            class="bg-indigo-500 hover:bg-indigo-400 text-white rounded-lg text-sm px-4 py-2">Lihat Semua Panen</a>
    </div>
    <hr class="block my-5">

    @if ($data->isEmpty())
        @livewire('no-data')
    @else
        <table class="table-auto">
            <thead>
                <tr class="text-left">
                    <th>Foto</th>
                    <th>Nama Karyawan</th>
                    <th>Tanggal Posting</th>
                    <th>Jumlah</th>
                    <th>Harga</th>
                    <th>Keterangan</th>
                    <th>Total</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $k)
                    <tr>
                        <td>
                            <img src="{{ $k->url_foto }}" alt="ini foto tambak" class="w-56 rounded-lg">
                        </td>
                        <td>{{ $k->karyawan->nama }}</td>
                        <td>{{ $k->updated_at->diffForHumans() }}</td>
                        <td>{{ $k->jumlah_kg }} Kg</td>
                        <td>Rp. {{ $k->harga_per_kg }}, - / Kg</td>
                        <td>{{ $k->ipAddress }}</td>
                        <td class="flex flex-wrap gap-2">
                            <button wire:click='toggleEditForm({{ $k->id }})'
                                class="rounded text-blue-500 hover:text-blue-600 hover:bg-indigo-50 p-2"><i
                                    class="fa fa-edit"></i></button>
                            <button wire:click='deletepanen({{ $k->id }})'
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
        {{ $data->links() }}
    @endif


</div>
