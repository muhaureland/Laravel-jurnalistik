function submitForm(form) 
{
    Swal.fire({
        title: 'Apa Anda Yakin?',
        text: "Anda tidak akan dapat mengembalikan ini!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                    Swal.fire({
                    icon: 'success',
                    title: 'Data Anda telah dihapus',
                    showConfirmButton: false,
                    timer: 4500
                    })
                    form.submit();
                }
            });
    return false;
}