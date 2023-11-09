function degreeCheck() {
    let validation = document.getElementById("validation");
    let degree = [];
    let flag = false;
    let checkboxes = document.getElementsByName("degree[]");
  
    for (let i = 0; i < checkboxes.length; i++) {
      if (checkboxes[i].checked) {
        flag = true;
        degree.push(checkboxes[i].value);
      }
    }
  
    if (flag === false) {
      validation.innerHTML = "Error: No degree selected!";
    }
  }