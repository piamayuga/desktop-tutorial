// Login - show password
function showPass() {
  var sp = document.getElementById("password");
  if (sp.type === "password") {
    sp.type = "text";
  } else {
    sp.type = "password";
  }
}
// Login - show password

// sidebar
let sidebar = document.querySelector(".sidebar");
let closeBtn = document.querySelector("#btn");
// let searchBtn = document.querySelector(".bx-search");
closeBtn.addEventListener("click", () => {
  sidebar.classList.toggle("open");
  menuBtnChange();//calling the function(optional)
});

// searchBtn.addEventListener("click", () => { // Sidebar open when you click on the search iocn
//   sidebar.classList.toggle("open");
//   menuBtnChange(); //calling the function(optional)
// });

// following are the code to change sidebar button(optional)
function menuBtnChange() {
  if (sidebar.classList.contains("open")) {
    closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
  } else {
    closeBtn.classList.replace("bx-menu-alt-right", "bx-menu");//replacing the iocns class
  }
}
//sidebar

// request type dropdown -- tab4
var dropdown = document.getElementById("select_request");
var idReqDiv = document.getElementById("id_request_div");
var perReqDiv = document.getElementById("personnel_request_div");
var otherReqDiv = document.getElementById("other_request_div");


function request_type() {
  if (dropdown.value == "ID Request Form") {
    idReqDiv.style.display = "block";
    perReqDiv.style.display = "none";
    otherReqDiv.style.display = "none";
  }
  else if (dropdown.value == "Personnel Request Form") {
    perReqDiv.style.display = "block";
    idReqDiv.style.display = "none";
    otherReqDiv.style.display = "none";
  }
  else if (dropdown.value == "Other Request") {
    otherReqDiv.style.display = "block";
    perReqDiv.style.display = "none";
    idReqDiv.style.display = "none";
  }
}
// request type dropdown -- tab4

// request date of separation -- tab4
function showDateSep() {
  document.getElementById('reqPer_dateSeparated').style.display = "block"
}
function hideDateSep() {
  document.getElementById('reqPer_dateSeparated').style.display = "none"
  document.getElementById('reqPer_dateSeparated').value = ""
}

function showOptionsCTC() {
  if (document.getElementById('reqPer_ctc').checked == true) {
    document.getElementById('reqPer_apptPaper').disabled = '';
    document.getElementById('reqPer_oath').disabled = '';
  }
}
function hideOptionsCTC() {
  if (document.getElementById('reqPer_ctc').checked != true) {
    document.getElementById('reqPer_apptPaper').disabled = true;
    document.getElementById('reqPer_oath').disabled = true;
    document.getElementById('reqPer_apptPaper').checked = false
    document.getElementById('reqPer_oath').checked = false
  }
}
// request date of separation -- tab4

// preview image settings
const upload = document.getElementById("upload");
const previewContainer = document.getElementById("imagePreview");
const previewImage = document.querySelector(".image-preview__image");
const previewText = previewContainer.querySelector(".image-preview__default");

upload.addEventListener("change", function () {
  const file = this.files[0];

  if (file) {
    const reader = new FileReader();

    previewText.style.display = "none";
    previewImage.style.display = "block";

    reader.addEventListener("load", function () {
      previewImage.setAttribute("src", this.result);
    })

    reader.readAsDataURL(file)
  } else {
    previewText.style.display = null;
    previewImage.style.display = null;
    previewImage.setAttribute("src", "");
  }
});
// preview image settings