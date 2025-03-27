document.getElementById('button').addEventListener('click', function () {
    if (confirm('Yakin ingin menghapus?')) {
        event.preventDefault(); // Mencegah form terkirim
        console.log('Data dihapus!');
        // Tambahkan aksi lain, misalnya mengirim request ke server
    } else {
        console.log('Batal menghapus');
    }
});
