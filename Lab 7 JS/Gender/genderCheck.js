function genderCheck() {
    let validation = document.getElementById("validation");
    let gender = document.querySelector("input[name='gender']:checked").value;
    if (gender != null) {
      validation.innerHTML = gender;
    } else {
      validation.innerHTML = "Error: No gender selected!";
    }
  }