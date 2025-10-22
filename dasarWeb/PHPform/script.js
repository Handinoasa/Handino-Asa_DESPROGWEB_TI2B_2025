$(document).ready(function() {
    function formatRupiah(angka) {
        return 'Rp. ' + parseInt(angka).toLocaleString('id-ID');
    }

    function hitungTotal() {
        const pkb = parseInt($('#pkb').val()) || 0;
        const swdkllj = parseInt($('#swdkllj').val()) || 0;
        const denda = parseInt($('#denda').val()) || 0;
        const total = pkb + swdkllj + denda;

        $('#totalBayar').text(formatRupiah(total));
    }

    // Hitung total saat halaman dimuat (jika ada nilai sebelumnya)
    hitungTotal();

    // Event handler untuk menghitung total secara dinamis
    $('#pkb, #swdkllj, #denda').on('input', function() {
        hitungTotal();
    });

    // Batasi input Nomor HP hanya angka
    $('#nohp').on('input', function() {
        this.value = this.value.replace(/[^0-9]/g, '');
    });

    // Ubah Nomor Polisi, Nomor Rangka, dan Nomor Mesin menjadi huruf kapital
    $('#nopol, #norangka, #nomesin').on('input', function() {
        this.value = this.value.toUpperCase();
    });

    // Validasi form saat submit (Client-side validation)
    $('#pajakForm').on('submit', function(e) {
        let error = '';

        // Validasi field yang wajib diisi (kecuali jenis dan denda)
        const requiredFields = ['nopol', 'nama', 'nik', 'alamat', 'norangka', 'nomesin', 'merk', 'tahun', 'warna', 'nohp', 'tahunpajak', 'pkb', 'swdkllj'];
        
        for (let i = 0; i < requiredFields.length; i++) {
            const fieldName = requiredFields[i];
            const value = $('#' + fieldName).val().trim();
            if (value === '') {
                error = 'Mohon lengkapi semua field yang bertanda *';
                break;
            }
        }

        const nohp = $('#nohp').val().trim();
        if (!error && (nohp.length < 10 || !/^[0-9]+$/.test(nohp))) {
            error = 'Nomor HP tidak valid (minimal 10 digit)';
        }

        const tahun = parseInt($('#tahun').val());
        if (!error && (tahun < 1900 || tahun > 2025)) {
            error = 'Tahun pembuatan tidak valid (1900-2025)';
        }

        if (error) {
            alert(error);
            e.preventDefault(); // Mencegah submit form jika ada error
        }
    });
});