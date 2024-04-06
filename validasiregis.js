function validation() {
  if (document.Formfill.username.value == "") {
    document.getElementById("result").innerHTML = "Buat Username dulu*";
    return false;
  } else if (document.Formfill.username.value.length < 6) {
    document.getElementById("result").innerHTML =
      "Buat Username Minimal 6 Karakter*";
    return false;
  } else if (document.Formfill.email.value == "") {
    document.getElementById("result").innerHTML = "Masukkan Email dulu *";
    return false;
  } else if (document.Formfill.password.value == "") {
    document.getElementById("result").innerHTML = "Buat Password dulu*";
    return false;
  } else if (document.Formfill.password.value.length < 8) {
    document.getElementById("result").innerHTML =
      "Buatlah Password Minimal 8 Karakter*";
    return false;
  } else if (document.Formfill.cpassword.value == "") {
    document.getElementById("result").innerHTML = "Konfirmasi Password Anda*";
    return false;
  } else if (
    document.Formfill.cpassword.value !== document.Formfill.password.value
  ) {
    document.getElementById("result").innerHTML = "Password Tidak Sesuai*";
    return false;
  } else if (
    document.Formfill.cpassword.value == document.Formfill.password.value
  ) {
    popup.classList.add("open-slide");
    return false;
  } else {
    var popup = document.getElementById("popup");
  }
}

function closeSlide() {
  popup.classList.remove('open-slide')
}
