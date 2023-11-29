function showList() {
    let data = document.getElementById("data");
  
    let xhttp = new XMLHttpRequest();
    xhttp.open("GET", "../models/donerModel.php", true);
    xhttp.send();
    xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        list = JSON.parse(this.responseText);
  
        let output = `
        <tr>
            <th width="5%">ID</th>
            <th width="12%">First Name</th>
            <th width="12%">Last Name</th>
            <th width="11%">Email</th>
            <th width="10%">Phone</th>  
            <th width="15%">Address</th>
        </tr>`;
  
        let i = 0;
        for (let result of list) {
          output += `
              <tr>
                  <td>${list[i].id}</td>
                  <td>${list[i].fname}</td>
                  <td>${list[i].lname}</td>
                  <td>${list[i].email}</td>
                  <td>${list[i].phone}</td>
                  <td>${list[i].address}</td>
              </tr>
          `;
          i++;
        }
  
        result.innerHTML = output;
      }
    };
  }
  
  