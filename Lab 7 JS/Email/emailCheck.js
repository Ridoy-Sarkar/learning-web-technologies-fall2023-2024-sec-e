function emailCheck() {
    let validation = document.getElementById("validation");
    let email = document.getElementById("email").value;
  
    if (email === "") {
      validation.innerHTML = "Error: Empty email!";
    } else if (email.indexOf("@") === -1) {
      validation.innerHTML = "Error: Invalid email!";
    } else {
      validation.innerHTML = email;
    }
  }