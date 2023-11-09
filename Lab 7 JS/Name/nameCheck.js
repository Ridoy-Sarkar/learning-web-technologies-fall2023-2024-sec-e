function isLetter(char) {
    return char.toLowerCase() != char.toUpperCase();
  }
  
  function nameCheck() {
    let validation = document.getElementById("validation");
    let name = document.getElementById("name").value;
  
    if (name === "") {
      validation.innerHTML = "Error: Empty Name!";
    } else if (name.length < 2) {
      validation.innerHTML = "Error: Less than two words!";
    } else if (!isLetter(name[0])) {
      validation.innerHTML = "Error: Must start with a letter!";
    } else {
      validation.innerHTML = name;
    }
  }