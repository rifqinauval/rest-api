// let mahasiswa = {
// 	"nama" : "Nurul",
// 	"umur" : 20,
// 	"nrp" : "173040092"
// }

// console.log(mahasiswa);


// let xhr = new XMLHttpRequest();
// xhr.onreadystatechange = function () {
// 	if (xhr.readysState == 4 && xhr.status == 200) {
// 		let mahasiswa = this.responseText;
// 		console.log(mahasiswa);
// 	}
// }

// xhr.open('GET', 'coba.json', true);
// xhr.send();

$.getJSON('coba.json', function(data) {
	console.log(data);
});