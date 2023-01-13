<div>
    <div class="flex flex-col rounded-lg overflow-hidden bg-white shadow-lg">
        <img src="{{$item->url_foto}}" alt="kamu nanya?">
        <div class="flex flex-col p-7">
            <span class="text-sm text-indigo-600">{{$item->karyawan->nama}}</span>
            <span class="text-xs text-gray-400">{{$item->updated_at->diffForHumans()}}</span>
            <hr class="my-3">
            <span class="text-base font-bold">Rp. {{$item->harga_per_kg}}, - / Kg</span>
            <span class="text-sm font-medium"><span class="text-xs">Sisa</span> {{$item->jumlah_kg}} Kg.</span>
            <hr class="my-3">
            <span class="text-xs text-gray-600 text-justify">
                {{$item->keterangan}}
            </span>
        </div>
    </div>
</div>
