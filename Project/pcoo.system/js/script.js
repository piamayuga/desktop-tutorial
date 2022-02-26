// sidebar
let sidebar = document.querySelector(".sidebar");
let closeBtn = document.querySelector("#btn");
let searchBtn = document.querySelector(".bx-search");
closeBtn.addEventListener("click", () => {
  sidebar.classList.toggle("open");
  menuBtnChange();//calling the function(optional)
});

searchBtn.addEventListener("click", () => { // Sidebar open when you click on the search iocn
  sidebar.classList.toggle("open");
  menuBtnChange(); //calling the function(optional)
});
// following are the code to change sidebar button(optional)
function menuBtnChange() {
  if (sidebar.classList.contains("open")) {
    closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
  } else {
    closeBtn.classList.replace("bx-menu-alt-right", "bx-menu");//replacing the iocns class
  }
}
//sidebar

// multiple step form
const steps = Array.from(document.querySelectorAll("form .step"));
const nextBtn = document.querySelectorAll("form .next-btn");
const prevBtn = document.querySelectorAll("form .previous-btn");
const form = document.querySelector("form");

nextBtn.forEach((button) => {
  button.addEventListener("click", () => {
    changeStep("next");
  });
});

prevBtn.forEach((button) => {
  button.addEventListener("click", () => {
    changeStep("prev");
  });
});

form.addEventListener("submit", (e) => {
  e.preventDefault();
  const inputs = [];
  form.querySelectorAll("input").forEach((input) => {
    const { name, value } = input;
    inputs.push({ name, value });
  });
  console.log(inputs);
  form.reset();
});

function changeStep(btn) {
  let index = 0;
  const active = document.querySelector(".active");
  index = steps.indexOf(active);
  steps[index].classList.remove("active");
  if (btn === "next") {
    index++;
  } else if (btn === "prev") {
    index--;
  }
  steps[index].classList.add("active");
}
// multiple step form

// enable/disable input
var ctz = document.getElementById("citizenship");
var immigrant = document.getElementById("immigrant");
var country = document.getElementById("country");
var text = document.getElementById("text_country");
if (ctz.value !== "dual") {
  immigrant.style.opacity = "0.4";
  country.style.opacity = "0.4";
  text.style.opacity = "0.4";
}

ctz.onchange = function () {
  immigrant.disabled = (ctz.value !== "dual");
  country.disabled = (ctz.value !== "dual");

  if (ctz.value == "dual") {
    immigrant.style.opacity = "1";
    country.style.opacity = "1";
    text.style.opacity = "1";
  } else {
    immigrant.style.opacity = "0.4";
    country.style.opacity = "0.4";
    text.style.opacity = "0.4";
    immigrant.value = "";
    country.value = "";
  }
};
// enable/disable input

// Add field child
var bata = 1;
function addChild() {
  bata++;
  var newChildDiv = document.createElement('div');
  newChildDiv.id = bata;
  // link to delete extended form elements
  var deleteChildDiv = '<div class="d-flex justify-content-start"><a class="btn mt-2 btn-sm btn-danger" href="javascript:deleteDiv(' + bata + ')">Delete</a></div>';
  newChildDiv.innerHTML = document.getElementById('childTemp').innerHTML + deleteChildDiv;
  document.getElementById('originChildDiv').appendChild(newChildDiv);
}
// function to delete the newly added set of elements
function deleteDiv(eleId) {
  d = document;
  var ele = d.getElementById(eleId);
  var parentEle = d.getElementById('originChildDiv');
  parentEle.removeChild(ele);
}
// Add field child


// Add field license
var license = 1;
function addLicense() {
  license++;
  var newLicenseDiv = document.createElement('div');
  newLicenseDiv.id = license;

  var deleteLicenseDiv = '<div class="d-flex justify-content-start"><a class="btn mt-2 btn-sm btn-danger" href="javascript:deleteLicenseDiv(' + license + ')">Delete</a></div>';
  newLicenseDiv.innerHTML = document.getElementById('licenseTemp').innerHTML + deleteLicenseDiv;
  document.getElementById('originLicenseDiv').appendChild(newLicenseDiv);
}

function deleteLicenseDiv(eleId) {
  docu = document;
  var elem = docu.getElementById(eleId);
  var parentElem = docu.getElementById('originLicenseDiv');
  parentElem.removeChild(elem);
}
// Add field license


// Add field work
var work = 1;
function addWork() {
  work++;
  var newWorkDiv = document.createElement('div');
  newWorkDiv.id = work;

  var deleteWorkDiv = '<div class="d-flex justify-content-start"><a class="btn mt-2 btn-sm btn-danger" href="javascript:deleteWorkDiv(' + work + ')">Delete</a></div>';
  newWorkDiv.innerHTML = document.getElementById('workTemp').innerHTML + deleteWorkDiv;
  document.getElementById('originWorkDiv').appendChild(newWorkDiv);
}

function deleteWorkDiv(eleId) {
  docu = document;
  var elem = docu.getElementById(eleId);
  var parentElem = docu.getElementById('originWorkDiv');
  parentElem.removeChild(elem);
}
// Add field work

// Add field org
var org = 1;
function addOrg() {
  org++;
  var newOrgDiv = document.createElement('div');
  newOrgDiv.id = org;

  var deleteOrgDiv = '<div class="d-flex justify-content-start"><a class="btn mt-2 btn-sm btn-danger" href="javascript:deleteOrgDiv(' + org + ')">Delete</a></div>';
  newOrgDiv.innerHTML = document.getElementById('orgTemp').innerHTML + deleteOrgDiv;
  document.getElementById('originOrgDiv').appendChild(newOrgDiv);
}

function deleteOrgDiv(eleId) {
  docu = document;
  var elem = docu.getElementById(eleId);
  var parentElem = docu.getElementById('originOrgDiv');
  parentElem.removeChild(elem);
}
// Add field org

// Add field prog
var prog = 1;
function addProg() {
  prog++;
  var newProgDiv = document.createElement('div');
  newProgDiv.id = prog;

  var deleteProgDiv = '<div class="d-flex justify-content-start"><a class="btn mt-2 btn-sm btn-danger" href="javascript:deleteProgDiv(' + prog + ')">Delete</a></div>';
  newProgDiv.innerHTML = document.getElementById('progTemp').innerHTML + deleteProgDiv;
  document.getElementById('originProgDiv').appendChild(newProgDiv);
}

function deleteProgDiv(eleId) {
  docu = document;
  var elem = docu.getElementById(eleId);
  var parentElem = docu.getElementById('originProgDiv');
  parentElem.removeChild(elem);
}
// Add field prog

// Add field skills and hobbies
var field = 1;
function addField() {
  field++;
  var newFieldDiv = document.createElement('div');
  newFieldDiv.id = field;

  var deleteFieldDiv = '<div class="d-flex justify-content-start"><a class="btn mt-2 btn-sm btn-danger" href="javascript:deleteFieldDiv(' + field + ')">Delete</a></div>';
  newFieldDiv.innerHTML = document.getElementById('fieldTemp').innerHTML + deleteFieldDiv;
  document.getElementById('originFieldDiv').appendChild(newFieldDiv);
}

function deleteFieldDiv(eleId) {
  docu = document;
  var elem = docu.getElementById(eleId);
  var parentElem = docu.getElementById('originFieldDiv');
  parentElem.removeChild(elem);
}
// Add field skills and hobbies