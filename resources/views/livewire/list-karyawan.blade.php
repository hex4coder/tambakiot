<div class="flex flex-col">
    <div class="flex flex-wrap justify-between">

        <div class="flex flex-col">
            <h3 class="text-sm font-bold">Data Karyawan</h3>
            <p class="text-xs text-gray-400">Ini adalah daftar karyawan pada usaha tambak anda.</p>
        </div>

        <button class="rounded-lg text-sm px-4 py-2 text-white bg-indigo-500 hover:bg-indigo-600">Tambah Data</button>
    </div>

    <hr class="block my-5">

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
                    <button class="rounded bg-blue-500 hover:bg-blue-600 text-white p-2">edit</button>
                    <button class="rounded bg-red-500 hover:bg-red-600 text-white p-2">delete</button>
                </td>
            </tr>
        </tbody>
    </table>

</div>