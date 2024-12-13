    <!DOCTYPE html>
    <html lang="en">

    <head>
        @vite('resources/css/app.css')
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="icon" type="image/svg+xml"
            href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 109.07 122.88'> <rect width='100%' height='100%' fill='white'/><path fill='black'  d='M96.5,69.62V4.47h-92v97.45l8.12,4.32,11.74-9.91,14.74,9.86,8.75-10.06,9.52,6.8A16.17,16.17,0,0,0,56,105.38,14.07,14.07,0,0,0,55.4,107l-6.87-4.91-8.67,10L24.64,101.9l-11.48,9.69L0,104.58V0H101V69.83a16,16,0,0,0-2.68-.28,15.39,15.39,0,0,0-1.79.07Zm-6.23,8a11.16,11.16,0,0,1,15.72.32h0a11.16,11.16,0,0,1-.32,15.72c-9.12,8.75-18.19,17.41-27.31,26.16h0a11.08,11.08,0,0,1-15.64-.32h0A11.1,11.1,0,0,1,63,103.84h0c9.12-8.76,18.1-17.46,27.23-26.23Zm-2,29.22L76.59,94.68l-11.42,11h0a8.45,8.45,0,0,0-.25,11.91h0a8.45,8.45,0,0,0,11.92.24h0l11.42-11Zm-2-93.21a2.23,2.23,0,1,1,0,4.46h-9a2.23,2.23,0,1,1,0-4.46ZM58.77,79.45a2.23,2.23,0,1,1,0,4.46H14.15a2.23,2.23,0,1,1,0-4.46ZM14.15,39V15.2H26.39a17.73,17.73,0,0,1,5.2.59A5.57,5.57,0,0,1,34.49,18a6.59,6.59,0,0,1,1.1,3.87,6.66,6.66,0,0,1-.84,3.41,6.29,6.29,0,0,1-4.6,3.17l4.74,7.87L39,29h8L39.59,40.47l8.09,12.26H39.41l-4.66-7.64-4.7,7.64h-8.2L30,40.34c-1-1.63-5.18-9.82-6.07-10.45a3.09,3.09,0,0,0-1.81-.54h-.64V39Zm7.37-14.11h3.1a11.79,11.79,0,0,0,1.95-.32,2,2,0,0,0,1.19-.75,2.42,2.42,0,0,0-.27-3.15A4.36,4.36,0,0,0,24.75,20H21.52v4.84Zm64.7,9.64a2.24,2.24,0,0,1,0,4.47H64.15a2.24,2.24,0,1,1,0-4.47Zm0,30a2.24,2.24,0,0,1,0,4.47H14.15a2.24,2.24,0,1,1,0-4.47Zm0-15a2.24,2.24,0,0,1,0,4.47H57.62a2.24,2.24,0,1,1,0-4.47Z'/></svg>">
        <title>Form Tiket</title>

    </head>

    <body class="bg-gray-100">
        <!-- Header -->
        <header class="bg-gray-800 py-4 sticky top-0">
            <!-- Tombol aksi -->
            <div style="width: 100%; height:50px;" class="flex gap-5 px-6">
                <div class="w-full">
                    <button
                        class="bg-green-600 hover:bg-green-800 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="button" id="btn-tambah">Tambah Data</button>
                </div>
                <div class="w-full flex justify-end gap-5">
                    <button
                        class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="button" name="cetak-salep" id="btn-ointment">Cetak untuk Salep</button>
                    <button
                        class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="button" name="cetak-obat" id="btn-medicine">Cetak untuk Obat</button>
                </div>
            </div>
        </header>


        {{-- Wrapper --}}
        <div class="flex justify-center items-center flex-col min-h-screen my-10">
            <!-- Container untuk form -->
            <div id="form-container" class="w-full max-w-screen-lg space-y-6">
                <!-- Form utama -->
                <form class="form-data w-full" action="{{ route('handle.tiket') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="bg-white shadow-md rounded-lg p-6">
                            <div class="w-full px-3 mb-6">
                                <label class="block uppercase tracking-wide text-gray-700 text-sm font-bold mb-2"
                                    for="name-input">
                                    Nama Pasien
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white"
                                    name="name_input[]" type="text" placeholder="masukkan nama">
                            </div>
                            <div class="w-full px-3 mb-6">
                                <label class="block uppercase tracking-wide text-gray-700 text-sm font-bold mb-2"
                                    for="medicine-input">
                                    Obat
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white"
                                    name="medicine_input[]" type="text" placeholder="Masukkan nama obat">
                            </div>
                            <div class="w-full px-3 mb-6">
                                <label class="block uppercase tracking-wide text-gray-700 text-sm font-bold mb-2"
                                    for="expdate-input">
                                    Tanggal Kadaluarsa
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white"
                                    name="exp_date_input[]" type="date">
                            </div>
                            <div class="w-full px-3 mb-6">
                                <label class="block uppercase tracking-wide text-gray-700 text-sm font-bold mb-2"
                                    for="daily-dosage">
                                    Dosis
                                </label>
                                <input
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white"
                                    name="daily_dosage_input[]" type="text" placeholder="Masukkan Dosis">
                            </div>
                            <div class="w-full px-3 mb-6">
                                <label class="block uppercase tracking-wide text-gray-700 text-sm font-bold mb-2"
                                    for="medication-type">
                                    Bentuk Obat
                                </label>
                                <select name="medicine_form_input[]"
                                    class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white">
                                    <option value="TABLET">TABLET</option>
                                    <option value="KAPSUL">KAPSUL</option>
                                    <option value="BUNGKUS">BUNGKUS</option>
                                    <option value="ML">ML</option>
                                    <option value="SALEP">SALEP</option>
                                </select>
                            </div>
                            <div class="w-full px-3 mb-6">
                                <label class="block uppercase tracking-wide text-gray-700 text-sm font-bold mb-2"
                                    for="instructions">
                                    Keterangan Lainnya
                                </label>
                                <textarea
                                    class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white"
                                    name="detail_input[]" rows="3" placeholder="Keterangan"></textarea>
                            </div>

                        </div>
                        <div class="bg-black h-3 rounded-sm mt-5 mb-5"></div>
                    </div>
                </form>

            </div>
        </div>

        <script>
            document.addEventListener('keydown', function(event) {
                let activeElement = document.activeElement;
                let focusableElements = Array.from(document.querySelectorAll('input, select, textarea'));
                let currentIndex = focusableElements.indexOf(activeElement);

                if (event.key === 'ArrowDown') {
                    // Cek apakah tombol bawah ditekan, lalu fokus ke input berikutnya
                    if (currentIndex !== -1 && currentIndex < focusableElements.length - 1) {
                        let nextElement = focusableElements[currentIndex + 1];
                        if (nextElement.type !== 'date') {
                            nextElement.focus();
                        } else {
                            nextElement.focus();
                        }
                        event.preventDefault(); // Menghindari scroll halaman
                    }
                } else if (event.key === 'ArrowUp') {
                    // Cek apakah tombol atas ditekan, lalu fokus ke input sebelumnya
                    if (currentIndex !== -1 && currentIndex > 0) {
                        let previousElement = focusableElements[currentIndex - 1];
                        if (previousElement.type !== 'date') {
                            previousElement.focus();
                        } else {
                            previousElement.focus();
                        }
                        event.preventDefault(); // Menghindari scroll halaman
                    }
                }
            });

            // Mendapatkan elemen form container dan tombol tambah
            const formContainer = document.getElementById('form-container');
            const btnTambah = document.getElementById('btn-tambah');

            // Fungsi untuk menduplikasi form
            btnTambah.addEventListener('click', function() {
                var newRow = `
        <div class="row">
            <div class="bg-white shadow-md rounded-lg p-6">
                <div class="w-full px-3 mb-6">
                    <label class="block uppercase tracking-wide text-gray-700 text-sm font-bold mb-2"
                        for="name-input">
                        Nama Pasien
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white"
                        name="name_input[]" type="text" placeholder="masukkan nama">
                </div>
                <div class="w-full px-3 mb-6">
                    <label class="block uppercase tracking-wide text-gray-700 text-sm font-bold mb-2"
                        for="medicine-input">
                        Obat
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white"
                        name="medicine_input[]" type="text" placeholder="Masukkan nama obat">
                </div>
                <div class="w-full px-3 mb-6">
                    <label class="block uppercase tracking-wide text-gray-700 text-sm font-bold mb-2"
                        for="expdate-input">
                        Tanggal Kadaluarsa
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white"
                        name="exp_date_input[]" type="date">
                </div>
                <div class="w-full px-3 mb-6">
                    <label class="block uppercase tracking-wide text-gray-700 text-sm font-bold mb-2"
                        for="daily-dosage">
                        Dosis
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white"
                        name="daily_dosage_input[]" type="text" placeholder="Masukkan Dosis">
                </div>
                <div class="w-full px-3 mb-6">
                    <label class="block uppercase tracking-wide text-gray-700 text-sm font-bold mb-2"
                        for="medication-type">
                        Bentuk Obat
                    </label>
                    <select name="medicine_form_input[]"
                        class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white">
                        <option value="TABLET">TABLET</option>
                        <option value="KAPSUL">KAPSUL</option>
                        <option value="BUNGKUS">BUNGKUS</option>
                        <option value="ML">ML</option>
                        <option value="SALEP">SALEP</option>
                    </select>
                </div>
                <div class="w-full px-3 mb-6">
                    <label class="block uppercase tracking-wide text-gray-700 text-sm font-bold mb-2"
                        for="instructions">
                        Keterangan Lainnya
                    </label>
                    <textarea
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white"
                        name="detail_input[]" rows="3" placeholder="Keterangan"></textarea>
                </div>
                <button class="btn-remove bg-red-500 text-white py-2 px-4 rounded hover:bg-red-700">Hapus</button>
            </div>
            <div class="bg-black h-3 rounded-sm mt-5 mb-5"></div>
        </div>
    `;
                formContainer.querySelector('.form-data').insertAdjacentHTML('beforeend', newRow);
            });

            // Event listener untuk tombol hapus
            document.addEventListener('click', function(event) {
                if (event.target && event.target.classList.contains('btn-remove')) {
                    event.preventDefault();
                    const row = event.target.closest('.row'); // Cari elemen terdekat dengan class "row"
                    if (row) {
                        row.remove(); // Hapus elemen tersebut
                    }
                }
            });



            // Fungsi untuk submit tombol salep
            document.getElementById('btn-ointment').addEventListener('click', function() {
                Swal.fire({
                    title: "Apakah Anda Yakin?",
                    // text: "Tetap Lanjutkan Sebagai PDF?",
                    icon: "question",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yakin",
                    cancelButtonText: "Batal"
                }).then((result) => {
                    if (result.isConfirmed) {
                        const forms = document.querySelectorAll('.form-data'); // Semua form
                            forms.forEach(form => {
                            const input = document.createElement('input');
                            input.type = 'hidden';
                            input.name = 'button';
                            input.value = 'cetak-salep';
                            form.appendChild(input);
                            form.submit();
                        });
                    }
                });

            });

            // Fungsi untuk submit tombol obat
            document.getElementById('btn-medicine').addEventListener('click', function() {
                Swal.fire({
                    title: "Apakah Anda Yakin?",
                    // text: "Tetap Lanjutkan Sebagai PDF?",
                    icon: "question",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Setuju",
                    cancelButtonText: "Batal"
                }).then((result) => {
                    if (result.isConfirmed) {
                const forms = document.querySelectorAll('.form-data'); // Semua form
                forms.forEach(form => {
                    const input = document.createElement('input');
                    input.type = 'hidden';
                    input.name = 'button';
                    input.value = 'cetak-obat';
                    form.appendChild(input);
                    form.submit();
                }); }
                });

            });

        </script>


        {{-- <script src="{{ asset('js/app.js') }}" async defer ></script> --}}
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    </body>

    </html>
