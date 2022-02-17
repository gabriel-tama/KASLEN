let jenisTransaksi = document.getElementById("jenis");
let jumlahDana = document.getElementById("jumlah");
let deskripsiForm = document.getElementById("deskripsi");
let adminForm = document.getElementById("userInfo");

function gantiSelect() {
	// console.log(jenisTransaksi.selectedIndex);
	if (jenisTransaksi.selectedIndex === 0) {
		jumlahDana.readOnly = true;
		deskripsiForm.readOnly = true;
	} else if (jenisTransaksi.selectedIndex === 1) {
		jumlahDana.value = 10000;
		jumlahDana.readOnly = true;
		deskripsiForm.value = "Setor";
		deskripsiForm.readOnly = true;
	} else {
		jumlahDana.readOnly = false;
		jumlahDana.value = "";
		deskripsiForm.readOnly = false;
		deskripsiForm.value = "";
	}
}
let inputNama = document.getElementById("nama");

function cekUsername() {
	if (inputNama.value === "Username tidak ditemukan !") {
		// console.log(inputNama.value);
		// inputNama.placeholder = "HAHAHHA";
		inputNama.style.color = "red";
	}
}

let xhr = new XMLHttpRequest();
function searchNama() {
	let keyword = document.getElementById("username").value;
	// console.log(document.getElementById("tanggal").value);
	let check = document.getElementById("check");
	xhr.onreadystatechange = function () {
		if (xhr.readyState == 4 && xhr.status == 200) {
			if (xhr.responseText.trim() !== "error") {
				inputNama.value = xhr.responseText;
				check.classList.remove("fa-times");
				check.classList.add("fa-check");
				check.style.color = "#00ff44";
			} else {
				inputNama.value = "Username tidak ada !";
				check.classList.remove("fa-check");
				check.classList.add("fa-times");
				check.style.color = "red";
			}
			// console.log(xhr.responseText.trim());
		}
	};
	xhr.open("GET", `search.php?keyword=${keyword}`, true);
	xhr.send();
}

function getKey() {
	console.log(keyword);
}
