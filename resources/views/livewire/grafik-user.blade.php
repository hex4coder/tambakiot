<div>
    <div class="flex flex-col gap-4 rounded-lg shadow-lg p-5 bg-white w-[500px]">
        <h3 class="text-base mb-2">Grafik Data Pengguna</h3>
        <canvas class="w-1" id="chartUser"></canvas>
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
