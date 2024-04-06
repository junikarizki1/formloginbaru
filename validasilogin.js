function validation() {
    if (document.Formfill.userlogin.value == "") {
      document.getElementById("result").innerHTML = "Masukkan Email atau Username dulu *";
      return false;
    } else if (document.Formfill.password.value == "") {
      document.getElementById("result").innerHTML = "Masukkan Password dulu*";
      return false;
    }
      
  }
  function closeSlide() {
    popup.classList.remove('open-slide')}