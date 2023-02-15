var id = "";
$(document).ready(function () {
	handleEditBtn();
	getDistrict();
});

function handleEditBtn() {
	$('.editBtn').click(function () {
		id = $(this).parent().attr('id');
		$(".editForm").attr('action', `${base_url}/update/${id}`)
		axios.get(`${base_url}/edit/${id}`)
			.then(function (response) {
				let user  = response.data.user[0];
				console.log(user);

				$("#user_name").val(user.name);
				$("#full_name").val(user.full_name);

				$("#user_division").val(user.division_id);
				$("#user_district").val(user.district_id);
				$("#user_thana").val(user.thana_id);
				$("#user_type").val(user.role_id);
				
			});
	});
}

function getDistrict() {
	$("#user_division").on("change", function () {
		let division_id = $(this).val();
		axios
			.get(`${base_url}/getDistrict/${division_id}`)
			.then(function (response) {
				let districts = response.data;
				$("#user_district").html("");
				let html = `<option value="0" selected disabled>Select district</option>`;
				districts = districts.map(function (item) {
					html += `<option value="${item.id}">${item.name}</option>`;
				});
				$("#user_district").append(html);
			})
			.catch(function (error) {
				console.log(error);
			});
	});
}
