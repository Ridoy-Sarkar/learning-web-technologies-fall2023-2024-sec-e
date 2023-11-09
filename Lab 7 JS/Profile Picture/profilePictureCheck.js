function proPicCheck() {
    let validation = document.getElementById("validation");
    let userId = document.getElementById("user-id").value;
    let proPic = document.getElementById("profile-picture").value;
  
    if (userId === "" || userId < 1) {
      validation.innerHTML = "Error: Wrong user id!";
    } else if (proPic === "") {
      validation.innerHTML = "Error: Please upload a profile picture!";
    } else {
      validation.innerHTML = "Success!";
    }
  }