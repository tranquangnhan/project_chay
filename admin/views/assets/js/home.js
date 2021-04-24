function checkDelete(link) {
    Swal.fire({
        title: 'Xoá?',
        text: "Bạn có chắc xoá nó không!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Xoá!',
        cancelButtonText: 'Huỷ',
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = link;
        }
    })
}

function checkStatus(iddh) {
    Swal.fire({
        title: 'Cập nhật?',
        text: "Bạn có đã xử lí xong?",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Xong!',
        cancelButtonText: 'Chưa',
    }).then(async(result) => {
        if (result.isConfirmed) {
            let checkStatus = new FormData();

            checkStatus.append('iddh', iddh); //gửi lên user và pass để kiểm tra
            // checkStatus.append('Remember', remember);
            checkStatus.append('Action', 'updateStatus');
            await $.ajax({
                type: 'POST',
                url: 'controllers/ajax/order.php',
                dataType: 'JSON',
                cache: false,
                contentType: false,
                processData: false,
                data: checkStatus,
                success: async function(response) {
                    if (response.StatusCode == 0) {
                        await Swal.fire({
                            timer: 2000,
                            type: 'success',
                            title: 'Thành công',
                            showConfirmButton: false,
                            showCancelButton: false,
                            icon: "success"
                        });
                        window.location.href = "?ctrl=order"
                    } else if (response.StatusCode === 1) {
                        Swal.fire({
                            type: 'error',
                            title: 'Lỗi.',
                            showConfirmButton: true,
                            showCancelButton: false,
                            icon: "error"
                        });

                    }
                }
            });
        }

    })

}