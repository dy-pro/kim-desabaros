document.addEventListener("DOMContentLoaded", function() {
    const formScript2 = document.getElementById("formScript2");
    const namaCPW = document.getElementById("namaCPW");
    const namaCPP = document.getElementById("namaCPP");
    const namaAlbum = document.getElementById("namaAlbum");
    const alamat = document.getElementById("alamat");
    const nomorHp = document.getElementById("nomorHp");
    const emailScript2 = document.getElementById("emailScript2");
    const instagramCPW = document.getElementById("instagramCPW");
    const instagramCPP = document.getElementById("instagramCPP");
    const paket = document.getElementById("paket");
    const tanggalPrewedding = document.getElementById("tanggalPrewedding");
    const tanggalPengajianSiraman = document.getElementById("tanggalPengajianSiraman");
    const alamatLokasiPengajian = document.getElementById("alamatLokasiPengajian");
    const waktuPengajianSiraman = document.getElementById("waktuPengajianSiraman");
    const tanggalAkadResepsi = document.getElementById("tanggalAkadResepsi");
    const tempatAkadResepsi = document.getElementById("tempatAkadResepsi");
    const alamatTempatAkadResepsi = document.getElementById("alamatTempatAkadResepsi");
    const keteranganTambahan = document.getElementById("keteranganTambahan");

    function sendEmail() {
        const bodyMessage = `
            Nama CPW: ${namaCPW.value}<br>
            Nama CPP: ${namaCPP.value}<br>
            Nama untuk di Album: ${namaAlbum.value}<br>
            Alamat: ${alamat.value}<br>
            Nomor Hp: ${nomorHp.value}<br>
            Email: ${emailScript2.value}<br>
            Instagram CPW: ${instagramCPW.value}<br>
            Instagram CPP: ${instagramCPP.value}<br>
            Paket: ${paket.value}<br>
            Tanggal Prewedding: ${tanggalPrewedding.value}<br>
            Tanggal Pengajian Siraman: ${tanggalPengajianSiraman.value}<br>
            Alamat Lokasi Pengajian: ${alamatLokasiPengajian.value}<br>
            Waktu Pengajian Siraman: ${waktuPengajianSiraman.value}<br>
            Tanggal Akad & Resepsi: ${tanggalAkadResepsi.value}<br>
            Tempat Akad & Resepsi: ${tempatAkadResepsi.value}<br>
            Alamat Tempat Akad & Resepsi: ${alamatTempatAkadResepsi.value}<br>
            Keterangan Tambahan: ${keteranganTambahan.value}`;

        // Updated Email Configuration
        Email.send({
            Host: "smtp.elasticemail.com",
            Username: "nesphoria02@gmail.com",
            Password: "5066CC2388B410E438ED09778694AA17B18A",
            To: 'nesphoria02@gmail.com',
            From: "nesphoria02@gmail.com",
            Subject: "Order",
            Body: bodyMessage
        })
            .then((message) => {
                if (message === "OK") {
                    Swal.fire({
                        title: "Success!",
                        text: "Message sent successfully!",
                        icon: "success"
                    });
                }
            })
            .catch((error) => {
                console.error('Error:', error);
                Swal.fire({
                    title: "Error!",
                    text: "An error occurred while sending the message.",
                    icon: "error"
                });
            });
    }

    function checkInputs() {
        const items = document.querySelectorAll(".item");

        for (const item of items) {
            if (item.value == "") {
                item.classList.add("error");
                item.parentElement.classList.add("error");
            }

            if (items[1].value != "") {
                checkEmail();
            }

            items[1].addEventListener("keyup", () => {
                checkEmail();
            });

            item.addEventListener("keyup", () => {
                if (item.value != "") {
                    item.classList.remove("error");
                    item.parentElement.classList.remove("error");
                } else {
                    item.classList.add("error");
                    item.parentElement.classList.add("error");
                }
            });
        }
    }

    function checkEmail() {
        const emailRegex = /^[^@]+@[^@]+.[a-z]{2,}$/i;
        const errorTxtEmail = document.querySelector(".error-txt.emailScript2");

        if (!emailScript2.value.match(emailRegex)) {
            emailScript2.classList.add("error");
            emailScript2.parentElement.classList.add("error");

            if (emailScript2.value != "") {
                errorTxtEmail.innerText = "Enter a valid email address";
            } else {
                errorTxtEmail.innerText = "Email Address can't be blank";
            }
        } else {
            emailScript2.classList.remove("error");
            emailScript2.parentElement.classList.remove("error");
        }
    }

    formScript2.addEventListener("submit", (e) => {
        e.preventDefault();
        checkInputs();

        if (!namaCPW.classList.contains("error") &&
            !namaCPP.classList.contains("error") &&
            !namaAlbum.classList.contains("error") &&
            !alamat.classList.contains("error") &&
            !nomorHp.classList.contains("error") &&
            !emailScript2.classList.contains("error") &&
            !instagramCPW.classList.contains("error") &&
            !instagramCPP.classList.contains("error") &&
            !paket.classList.contains("error") &&
            !tanggalPrewedding.classList.contains("error") &&
            !tanggalPengajianSiraman.classList.contains("error") &&
            !alamatLokasiPengajian.classList.contains("error") &&
            !waktuPengajianSiraman.classList.contains("error") &&
            !tanggalAkadResepsi.classList.contains("error") &&
            !tempatAkadResepsi.classList.contains("error") &&
            !alamatTempatAkadResepsi.classList.contains("error") &&
            !keteranganTambahan.classList.contains("error")
        ) {
            sendEmail();
        }
    });
});
