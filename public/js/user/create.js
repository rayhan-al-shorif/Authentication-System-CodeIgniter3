$(document).ready(function () {
	getDivision();
	getDistrict();
	getThana();
});

function getDivision() {
	console.log(base_url);
	axios
		.get(`${base_url}/getDivision`)
		.then(function (response) {
			let divisions = response.data;
			let html = `<option value="0" selected disabled>Select division</option>`;
			divisions.map(function (item) {
				html += `<option value="${item.id}">${item.name}</option>`;
			});
			$("#user_division").html(html);
		})
		.catch(function (error) {
			console.log(error);
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
function getThana() {
	$("#user_district").on("change", function () {
		let district_id = $(this).val();
		axios
			.get(`${base_url}/getThana/${district_id}`)
			.then(function (response) {
				let thanas = response.data;
				$("#user_thana").html("");
				let html = `<option value="0" selected disabled>Select thana</option>`;
				thanas = thanas.map(function (item) {
					html += `<option value="${item.id}">${item.name}</option>`;
				});
				$("#user_thana").append(html);
			})
			.catch(function (error) {
				console.log(error);
			});
	});
}
