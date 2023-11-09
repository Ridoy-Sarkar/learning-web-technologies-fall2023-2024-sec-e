function bloodGroupCheck() {
    let validation = document.getElementById("validation");
    let bloodGroup = document.querySelector("#bloodGroup").value;
  
    if (bloodGroup === "") {
      validation.innerHTML = "Error: No blood group selected!";
    } else {
      validation.innerHTML = bloodGroup;
    }
  }