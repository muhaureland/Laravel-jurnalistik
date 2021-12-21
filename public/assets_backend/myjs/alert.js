const flashData = $('.flash-data').data('flashdata');
if (flashData) {
    Swal({
        title: 'data berhasil',
        text: 'Berhasil' + flashData,
        type: 'success'
    })
}