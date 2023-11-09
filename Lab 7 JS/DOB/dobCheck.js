function dobCheck() {
    let validation = document.getElementById("validation");
    let dob = document.querySelector("#dob").value;
  
    if (dob.value === undefined) {
      validation.innerHTML = "Error: No DOB selected!";
    } else {
      validation.innerHTML = dob;
    }
  }