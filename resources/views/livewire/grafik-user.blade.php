<div>
    <div class="flex flex-col gap-4 rounded-lg shadow-lg p-5 bg-white items-center w-[400px]">
        <h3 class="text-base mb-2">Grafik Data Pengguna</h3>
        <div class="w-90 h-90 p-7">
            <canvas id="chartUser"></canvas>
        </div>
        <div class="p-7 bg-white rounded-md shadow-lg">
            <table class="table-auto w-[300px]">
                <thead >
                    <tr>
                        <th class="text-left">Data</th>
                        <th class="text-right">Jumlah</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Karyawan</td>
                        <td class="text-right">{{$jumlah_karyawan}} orang.</td>
                    </tr>
                    <tr>
                        <td>Panen Bulan Ini</td>
                        <td class="text-right">{{$jumlah_panen}} kali.</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    
    <script>
        // TODO: Buat grafik pengguna pada dashboard pimpinan
       
        const data = {
            labels: ['Jumlah Karyawan', 'Hasil Panen Bulan Ini'],
            datasets: [{
                label: 'Data Statistik Usaha Saya',
                data: [{{$jumlah_karyawan}},{{$jumlah_panen}}],
                
            }]
        };
        const ctx = document.getElementById('chartUser');

        new Chart(ctx, {
            type: 'pie',
            data: data,
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        dislay: true,
                        text: 'Chart.js Pie Chart'
                    }
                }
            }
        });
    </script>
</div>
