var id = "";
$(document).ready(function () {
	handleDeleteBtn();
});

function handleDeleteBtn() {
	$('.deleteBtn').click(function () {
		id = $(this).parent().attr('id');
		console.log(base_url);
		Swal.fire({
			title: 'Are you sure?',
			text: "You won't be able to revert this!",
			icon: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#3085d6',
			cancelButtonColor: '#d33',
			confirmButtonText: 'Yes, delete it!'
		}).then((result) => {
			if (result.isConfirmed) {
				Swal.fire(
					'Deleted!',
					'Your file has been deleted.',
					'success'
				);
				axios.delete(`${base_url}/delete/${id}`)
					.then(function (response) {
						console.log(response.data.data);
						location.reload();
					});
			}
		});
	});

}
