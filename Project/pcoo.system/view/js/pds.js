// letters only
// page 1
var surname = document.getElementById('surname');
surname.addEventListener("keyup", function () {
  lettersOnly(this);
});

var firstName = document.getElementById('firstName');
firstName.addEventListener("keyup", function () {
  lettersOnly(this);
});

var middleName = document.getElementById('middleName');
middleName.addEventListener("keyup", function () {
  lettersOnly(this);
});

var birthDate = document.getElementById('birthDate');
birthDate.addEventListener("keyup", function () {
  lettersOnly(this);
});

var birthPlace = document.getElementById('birthPlace');
birthPlace.addEventListener("keyup", function () {
  lettersOnly(this);
});

var residentialStreet = document.getElementById('residentialStreet');
residentialStreet.addEventListener("keyup", function () {
  lettersOnly(this);
});

var residentialSubdivision = document.getElementById('residentialSubdivision');
residentialSubdivision.addEventListener("keyup", function () {
  lettersOnly(this);
});

var residentialBarangay = document.getElementById('residentialBarangay');
residentialBarangay.addEventListener("keyup", function () {
  lettersOnly(this);
});

var residentialCity = document.getElementById('residentialCity');
residentialCity.addEventListener("keyup", function () {
  lettersOnly();
});

var residentialProvince = document.getElementById('residentialProvince');
residentialProvince.addEventListener("keyup", function () {
  lettersOnly(this);
});


var permanentStreet = document.getElementById('permanentStreet');
permanentStreet.addEventListener("keyup", function () {
  lettersOnly(this);
});

var permanentSubdivision = document.getElementById('permanentSubdivision');
permanentSubdivision.addEventListener("keyup", function () {
  lettersOnly(this);
});

var permanentBarangay = document.getElementById('permanentBarangay');
permanentBarangay.addEventListener("keyup", function () {
  lettersOnly(this);
});

var permanentCity = document.getElementById('permanentCity');
permanentCity.addEventListener("keyup", function () {
  lettersOnly(this);
});

var permanentProvince = document.getElementById('permanentProvince');
permanentProvince.addEventListener("keyup", function () {
  lettersOnly(this);
});

// page 2 
var spouseSurname = document.getElementById('spouseSurname');
spouseSurname.addEventListener("keyup", function () {
  lettersOnly(this);
});

var spouseFirstName = document.getElementById('spouseFirstName');
spouseFirstName.addEventListener("keyup", function () {
  lettersOnly(this);
});

var spouseMiddleName = document.getElementById('spouseMiddleName');
spouseMiddleName.addEventListener("keyup", function () {
  lettersOnly(this);
});

var spouseSuffix = document.getElementById('spouseSuffix');
spouseSuffix.addEventListener("keyup", function () {
  lettersOnly(this);
});

var spouseOccupation = document.getElementById('spouseOccupation');
spouseOccupation.addEventListener("keyup", function () {
  lettersOnly(this);
});

var spouseBusinessName = document.getElementById('spouseBusinessName');
spouseBusinessName.addEventListener("keyup", function () {
  lettersOnly(this);
});

var spouseBusinessAddress = document.getElementById('spouseBusinessAddress');
spouseBusinessAddress.addEventListener("keyup", function () {
  lettersOnly(this);
});

var spouseSuffix = document.getElementById('spouseSuffix');
spouseSuffix.addEventListener("keyup", function () {
  lettersOnly(this);
});

var fatherSurname = document.getElementById('fatherSurname');
fatherSurname.addEventListener("keyup", function () {
  lettersOnly(this);
});

var fatherFirstName = document.getElementById('fatherFirstName');
fatherFirstName.addEventListener("keyup", function () {
  lettersOnly(this);
});

var fatherMiddleName = document.getElementById('fatherMiddleName');
fatherMiddleName.addEventListener("keyup", function () {
  lettersOnly(this);
});

var fatherSuffix = document.getElementById('fatherSuffix');
fatherSuffix.addEventListener("keyup", function () {
  lettersOnly(this);
});

var motherMaidenName = document.getElementById('motherMaidenName');
motherMaidenName.addEventListener("keyup", function () {
  lettersOnly(this);
});

var motherSurname = document.getElementById('motherSurname');
motherSurname.addEventListener("keyup", function () {
  lettersOnly(this);
});

var motherFirstName = document.getElementById('motherFirstName');
motherFirstName.addEventListener("keyup", function () {
  lettersOnly(this);
});

var motherMiddleName = document.getElementById('motherMiddleName');
motherMiddleName.addEventListener("keyup", function () {
  lettersOnly(this);
});

var nameChild = document.getElementById('nameChild');
nameChild.addEventListener("keyup", function () {
  lettersOnly(this);
});


function lettersOnly(input) {
  var regex = /[^A-Za-z\s]+$/;
  input.value = input.value.replace(regex, "");
  input.value = input.value.replace(/\s\s+/g, ' ');
}
// letters only

// VALIDATIONS FOR INPUT
function lengthValidation(object) {
  if (object.value.length > object.maxLength) {
    object.value = object.value.slice(0, object.maxLength);
  }

}
// VALIDATIONS FOR INPUT



// multiple step form
// const steps = Array.from(document.querySelectorAll("form .step"));
// const nextBtn = document.querySelectorAll("form .next-btn");
// const prevBtn = document.querySelectorAll("form .previous-btn");
// const form = document.querySelector("form");



// nextBtn.forEach((button) => {
//   button.addEventListener("click", () => {
//     changeStep("next");

//   });
// });

// prevBtn.forEach((button) => {
//   button.addEventListener("click", () => {

//     changeStep("prev");

//   });
// });

// form.addEventListener("submit", (e) => {

//   const inputs = [];
//   form.querySelectorAll("input").forEach((input) => {
//     const { name, value } = input;
//     inputs.push({ name, value });
//   });
//   console.log(inputs);
//   form.reset();
// });

// function changeStep(btn) {
//   // first page
//   var surname = document.getElementById('surname').value;
//   var firstName = document.getElementById('firstName').value;
//   var middleName = document.getElementById('middleName').value;
//   var birthDate = document.getElementById('birthDate').value;
//   var birthPlace = document.getElementById('birthPlace').value;
//   var sex = document.getElementById('sex');
//   var selectedsex = sex.options[sex.selectedIndex].value;

//   var civilStatus = document.getElementById('civilStatus');
//   var selectedcivilstatus = civilStatus.options[civilStatus.selectedIndex].value;

//   var height = document.getElementById('height').value;
//   var weight = document.getElementById('weight').value;
//   var bloodType = document.getElementById('bloodType').value;
//   var gsisId = document.getElementById('gsisId').value;
//   var pagibigId = document.getElementById('pagibigId').value;
//   var philhealthId = document.getElementById('philhealthId').value;
//   var sssId = document.getElementById('sssId').value;

//   var tinId = document.getElementById('tinId').value;
//   var employeeNumber = document.getElementById('employeeNumber').value;
//   var telephoneNumber = document.getElementById('telephoneNumber').value;
//   var phoneNumber = document.getElementById('phoneNumber').value;
//   var emailAdd = document.getElementById('emailAdd').value;
//   var citizenship = document.getElementById('citizenship');
//   var selectedCitizenship = citizenship.options[citizenship.selectedIndex].value;

//   var residentialHouseNumber = document.getElementById('residentialHouseNumber').value;

//   var residentialStreet = document.getElementById('residentialStreet').value;
//   var residentialSubdivision = document.getElementById('residentialSubdivision').value;
//   var residentialBarangay = document.getElementById('residentialBarangay').value;
//   var residentialCity = document.getElementById('residentialCity').value;
//   var residentialProvince = document.getElementById('residentialProvince').value;
//   var residentialZipCode = document.getElementById('residentialZipCode').value;
//   var permanentHouseNumber = document.getElementById('permanentHouseNumber').value;

//   var permanentStreet = document.getElementById('permanentStreet').value;
//   var permanentSubdivision = document.getElementById('permanentSubdivision').value;
//   var permanentBarangay = document.getElementById('permanentBarangay').value;
//   var permanentCity = document.getElementById('permanentCity').value;
//   var permanentProvince = document.getElementById('permanentProvince').value;
//   var permanentZipCode = document.getElementById('permanentZipCode').value;

//   // second page
//   var spouseSurname = document.getElementById('spouseSurname').value;
//   var fatherSurname = document.getElementById('fatherSurname').value;
//   var fatherFirstName = document.getElementById('fatherFirstName').value;
//   var fatherMiddleName = document.getElementById('fatherMiddleName').value;
//   var motherMaidenName = document.getElementById('motherMaidenName').value;
//   var motherSurname = document.getElementById('motherSurname').value;
//   var motherFirstName = document.getElementById('motherFirstName').value;
//   var motherMiddleName = document.getElementById('motherMiddleName').value;

//   // third page
//   var elementarySchoolName = document.getElementById('elementarySchoolName').value;
//   var elementaryBasicEducation = document.getElementById('elementaryBasicEducation').value;
//   var elementaryPeriodAttendanceFrom = document.getElementById('elementaryPeriodAttendanceFrom').value;
//   var elementaryPeriodAttendanceTo = document.getElementById('elementaryPeriodAttendanceTo').value;
//   var elementaryHighestLevel = document.getElementById('elementaryHighestLevel').value;
//   var elementaryYearGraduated = document.getElementById('elementaryYearGraduated').value;

//   var secondarySchoolName = document.getElementById('secondarySchoolName').value;
//   var secondaryBasicEducation = document.getElementById('secondaryBasicEducation').value;
//   var secondaryPeriodAttendanceFrom = document.getElementById('secondaryPeriodAttendanceFrom').value;
//   var secondaryPeriodAttendanceTo = document.getElementById('secondaryPeriodAttendanceTo').value;
//   var secondaryHighestLevel = document.getElementById('secondaryHighestLevel').value;
//   var secondaryYearGraduated = document.getElementById('secondaryYearGraduated').value;

//   var vocationalSchoolName = document.getElementById('vocationalSchoolName').value;
//   var vocationalBasicEducation = document.getElementById('vocationalBasicEducation').value;
//   var vocationalPeriodAttendanceFrom = document.getElementById('vocationalPeriodAttendanceFrom').value;
//   var vocationalPeriodAttendanceTo = document.getElementById('vocationalPeriodAttendanceTo').value;
//   var vocationalHighestLevel = document.getElementById('vocationalHighestLevel').value;
//   var vocationalYearGraduated = document.getElementById('vocationalYearGraduated').value;


//   var collegeSchoolName = document.getElementById('collegeSchoolName').value;
//   var collegeBasicEducation = document.getElementById('collegeBasicEducation').value;
//   var collegePeriodAttendanceFrom = document.getElementById('collegePeriodAttendanceFrom').value;
//   var collegePeriodAttendanceTo = document.getElementById('collegePeriodAttendanceTo').value;
//   var collegeHighestLevel = document.getElementById('collegeHighestLevel').value;
//   var collegeYearGraduated = document.getElementById('collegeYearGraduated').value;


//   var graduateSchoolName = document.getElementById('graduateSchoolName').value;
//   var graduateBasicEducation = document.getElementById('graduateBasicEducation').value;
//   var graduatePeriodAttendanceFrom = document.getElementById('graduatePeriodAttendanceFrom').value;
//   var graduatePeriodAttendanceTo = document.getElementById('graduatePeriodAttendanceTo').value;
//   var graduateHighestLevel = document.getElementById('graduateHighestLevel').value;
//   var graduateYearGraduated = document.getElementById('graduateYearGraduated').value;

//   const active = document.querySelector(".active");
//   index = steps.indexOf(active);
//   steps[index].classList.remove("active");
//   if (btn === "next") {
//     index++;
//   } else if (btn === "prev") {
//     index--;
//   }
//   if (index == 0) {
//     steps[index].classList.add("active");
//   }
//   // page 1
//   if (index == 1) {
//     if (surname == "") {
//       alert("Please input surname.")
//       steps[index - 1].classList.add("active");
//     }
//     else if (firstName == "") {
//       alert("Please input firstName.")
//       steps[index - 1].classList.add("active");
//     }
//     else if (middleName == "") {
//       alert("Please input middleName.")
//       steps[index - 1].classList.add("active");
//     }
//     else if (birthDate == "") {
//       alert("Please input birthDate.")
//       steps[index - 1].classList.add("active");
//     }
//     else if (birthPlace == "") {
//       alert("Please input birthPlace.")
//       steps[index - 1].classList.add("active");
//     }
//     else if (selectedsex == "selectsex") {
//       alert("Please select sex.")
//       steps[index - 1].classList.add("active");
//     }
//     else if (selectedcivilstatus == "selectcivilstatus") {
//       alert("Please select civil status.")
//       steps[index - 1].classList.add("active");
//     }
//     else if (height == "") {
//       alert("Please input height .")
//       steps[index - 1].classList.add("active");
//     }
//     else if (weight == "") {
//       alert("Please input weight .")
//       steps[index - 1].classList.add("active");
//     }
//     else if (bloodType == "") {
//       alert("Please input bloodType .")
//       steps[index - 1].classList.add("active");
//     }
//     else if (gsisId == "") {
//       alert("Please input gsisId .")
//       steps[index - 1].classList.add("active");
//     }
//     else if (pagibigId == "") {
//       alert("Please input pagibigId .")
//       steps[index - 1].classList.add("active");
//     }
//     else if (philhealthId == "") {
//       alert("Please input philhealthId  .")
//       steps[index - 1].classList.add("active");
//     }
//     else if (sssId == "") {
//       alert("Please input sssId  .")
//       steps[index - 1].classList.add("active");
//     }
//     else if (tinId == "") {
//       alert("Please input tinId  .")
//       steps[index - 1].classList.add("active");
//     }
//     else if (employeeNumber == "") {
//       alert("Please input employeeNumber  .")
//       steps[index - 1].classList.add("active");
//     }
//     else if (telephoneNumber == "") {
//       alert("Please input telephoneNumber  .")
//       steps[index - 1].classList.add("active");
//     }
//     else if (phoneNumber == "") {
//       alert("Please input phoneNumber.")
//       steps[index - 1].classList.add("active");
//     }
//     else if (emailAdd == "") {
//       alert("Please input emailAdd  .")
//       steps[index - 1].classList.add("active");
//     }
//     else if (selectedCitizenship == "selectcitizenship") {
//       alert("Please select citizenship .")
//       steps[index - 1].classList.add("active");
//     }
//     else if (residentialHouseNumber == "") {
//       alert("Please input residentialHouseNumber  .")
//       steps[index - 1].classList.add("active");
//     }
//     else if (residentialStreet == "") {
//       alert("Please input residentialStreet   .")
//       steps[index - 1].classList.add("active");
//     }
//     else if (residentialSubdivision == "") {
//       alert("Please input residentialSubdivision    .")
//       steps[index - 1].classList.add("active");
//     }
//     else if (residentialBarangay == "") {
//       alert("Please input residentialBarangay    .")
//       steps[index - 1].classList.add("active");
//     }
//     else if (residentialCity == "") {
//       alert("Please input residentialCity    .")
//       steps[index - 1].classList.add("active");
//     }
//     else if (residentialProvince == "") {
//       alert("Please input residentialProvince    .")
//       steps[index - 1].classList.add("active");
//     }
//     else if (residentialZipCode == "") {
//       alert("Please input residentialZipCode    .")
//       steps[index - 1].classList.add("active");
//     }
//     else if (permanentHouseNumber == "") {
//       alert("Please input permanentHouseNumber    .")
//       steps[index - 1].classList.add("active");
//     }
//     else if (permanentStreet == "") {
//       alert("Please input permanentStreet     .")
//       steps[index - 1].classList.add("active");
//     }
//     else if (permanentSubdivision == "") {
//       alert("Please input permanentSubdivision     .")
//       steps[index - 1].classList.add("active");
//     }
//     else if (permanentBarangay == "") {
//       alert("Please input permanentBarangay     .")
//       steps[index - 1].classList.add("active");
//     }
//     else if (permanentCity == "") {
//       alert("Please input permanentCity     .")
//       steps[index - 1].classList.add("active");
//     }
//     else if (permanentProvince == "") {
//       alert("Please input permanentProvince     .")
//       steps[index - 1].classList.add("active");
//     }
//     else if (permanentZipCode == "") {
//       alert("Please input permanentZipCode     .")
//       steps[index - 1].classList.add("active");
//     }
//     else {
//       steps[index].classList.add("active");
//     }

//   }
//   // page 1

//   // page 2
//   if (index == 2) {
//     if (fatherSurname.value == "") {
//       alert("Please input fatherSurname .")
//       steps[index - 1].classList.add("active");
//     }
//     else if (fatherFirstName == "") {
//       alert("Please input fatherFirstName      .")
//       steps[index - 1].classList.add("active");
//     }
//     else if (fatherMiddleName == "") {
//       alert("Please input fatherMiddleName .")
//       steps[index - 1].classList.add("active");
//     }
//     else if (motherMaidenName == "") {
//       alert("Please input motherMaidenName       .")
//       steps[index - 1].classList.add("active");
//     }
//     else if (motherSurname == "") {
//       alert("Please input motherSurname       .")
//       steps[index - 1].classList.add("active");
//     }
//     else if (motherFirstName == "") {
//       alert("Please input motherFirstName       .")
//       steps[index - 1].classList.add("active");
//     }
//     else if (motherMiddleName == "") {
//       alert("Please input motherMiddleName        .")
//       steps[index - 1].classList.add("active");
//     }
//     else {
//       steps[index].classList.add("active");
//     }

//   }
//   //page 2

//   // page 3
//   if (index == 3) {
//     if (elementarySchoolName == "") {
//       alert("Please input elementarySchoolName.")
//       steps[index - 1].classList.add("active");

//     }
//     else if (elementaryBasicEducation == "") {
//       alert("Please input elementaryBasicEducation .")
//       steps[index - 1].classList.add("active");
//     }
//     else if (elementaryPeriodAttendanceFrom == "") {
//       alert("Please input elementaryPeriodAttendanceFrom .")
//       steps[index - 1].classList.add("active");
//     }
//     else if (elementaryPeriodAttendanceTo == "") {
//       alert("Please input elementaryPeriodAttendanceTo.")
//       steps[index - 1].classList.add("active");
//     }
//     else if (elementaryHighestLevel == "") {
//       alert("Please input elementaryHighestLevel .")
//       steps[index - 1].classList.add("active");
//     }
//     else if (elementaryYearGraduated == "") {
//       alert("Please input elementaryYearGraduated .")
//       steps[index - 1].classList.add("active");
//     }
//     else if (secondarySchoolName == "") {
//       alert("Please input secondarySchoolName.")
//       steps[index - 1].classList.add("active");
//     }
//     else if (secondaryBasicEducation == "") {
//       alert("Please input secondaryBasicEducation .")
//       steps[index - 1].classList.add("active");
//     }
//     else if (secondaryPeriodAttendanceFrom == "") {
//       alert("Please input secondaryPeriodAttendanceFrom .")
//       steps[index - 1].classList.add("active");
//     }
//     else if (secondaryPeriodAttendanceTo == "") {
//       alert("Please input secondaryPeriodAttendanceTo .")
//       steps[index - 1].classList.add("active");
//     }
//     else if (secondaryHighestLevel == "") {
//       alert("Please input secondaryHighestLevel .")
//       steps[index - 1].classList.add("active");
//     }
//     else if (secondaryYearGraduated == "") {
//       alert("Please input secondaryYearGraduated .")
//       steps[index - 1].classList.add("active");
//     }
//     else if (vocationalSchoolName == "") {
//       alert("Please input vocationalSchoolName .")
//       steps[index - 1].classList.add("active");
//     }
//     else if (vocationalBasicEducation == "") {
//       alert("Please input vocationalBasicEducation .")
//       steps[index - 1].classList.add("active");
//     }
//     else if (vocationalPeriodAttendanceFrom == "") {
//       alert("Please input vocationalPeriodAttendanceFrom .")
//       steps[index - 1].classList.add("active");
//     }
//     else if (vocationalPeriodAttendanceTo == "") {
//       alert("Please input vocationalPeriodAttendanceTo .")
//       steps[index - 1].classList.add("active");
//     }
//     else if (vocationalHighestLevel == "") {
//       alert("Please input vocationalHighestLevel .")
//       steps[index - 1].classList.add("active");
//     }
//     else if (vocationalYearGraduated == "") {
//       alert("Please input vocationalYearGraduated .")
//       steps[index - 1].classList.add("active");
//     }
//     else if (collegeSchoolName == "") {
//       alert("Please input collegeSchoolName .")
//       steps[index - 1].classList.add("active");
//     }
//     else if (collegeBasicEducation == "") {
//       alert("Please input collegeBasicEducation .")
//       steps[index - 1].classList.add("active");
//     }
//     else if (collegePeriodAttendanceFrom == "") {
//       alert("Please input collegePeriodAttendanceFrom .")
//       steps[index - 1].classList.add("active");
//     }
//     else if (collegePeriodAttendanceTo == "") {
//       alert("Please input collegePeriodAttendanceTo .")
//       steps[index - 1].classList.add("active");
//     }
//     else if (collegeHighestLevel == "") {
//       alert("Please input collegeHighestLevel .")
//       steps[index - 1].classList.add("active");
//     }
//     else if (collegeYearGraduated == "") {
//       alert("Please input collegeYearGraduated.")
//       steps[index - 1].classList.add("active");
//     }
//     else if (graduateSchoolName == "") {
//       alert("Please input graduateSchoolName .")
//       steps[index - 1].classList.add("active");
//     }
//     else if (graduateBasicEducation == "") {
//       alert("Please input graduateBasicEducation .")
//       steps[index - 1].classList.add("active");
//     }
//     else if (graduatePeriodAttendanceFrom == "") {
//       alert("Please input graduatePeriodAttendanceFrom.")
//       steps[index - 1].classList.add("active");
//     }
//     else if (graduatePeriodAttendanceTo == "") {
//       alert("Please input graduatePeriodAttendanceTo.")
//       steps[index - 1].classList.add("active");
//     }
//     else if (graduateHighestLevel == "") {
//       alert("Please input graduateHighestLevel .")
//       steps[index - 1].classList.add("active");
//     }
//     else if (graduateYearGraduated == "") {
//       alert("Please input graduateYearGraduated .")
//       steps[index - 1].classList.add("active");
//     }

//     else {
//       steps[index].classList.add("active");
//     }

//   }
//   // page 3

//   // page 4
//   if (index == 4) {
//     if (spouseSurname.value == "") {

//     }
//     else {
//       steps[index].classList.add("active");
//     }

//   }
//   if (index == 5) {
//     if (spouseSurname.value == "") {

//     }
//     else {
//       steps[index].classList.add("active");
//     }

//   }
//   if (index == 6) {
//     if (spouseSurname.value == "") {

//     }
//     else {
//       steps[index].classList.add("active");
//     }

//   }

// }
// multiple step form


// multiple step form RAW ----------------------------
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
// multiple step form RAW ----------------------------

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

// show Question one
function showOneB() {
  document.getElementById('oneTextDivB').style.display = 'block';
}
function hideOneB() {
  document.getElementById('oneTextDivB').style.display = 'none';
  document.getElementById('oneTextB').value = '';
}
// show Question one

// show Question two
function showTwoA() {
  document.getElementById('twoTextDivA').style.display = 'block';
}
function hideTwoA() {
  document.getElementById('twoTextDivA').style.display = 'none';
  document.getElementById('twoTextA').value = '';
}

function showTwoB() {
  document.getElementById('twoTextDivB').style.display = 'block';
}
function hideTwoB() {
  document.getElementById('twoTextDivB').style.display = 'none';
  document.getElementById('twoTextB').value = '';
}
// show Question two

// show Question three
function showThree() {
  document.getElementById('threeTextDiv').style.display = 'block';
}
function hideThree() {
  document.getElementById('threeTextDiv').style.display = 'none';
  document.getElementById('threeText').value = '';
}
// show Question three

// show Question four
function showFour() {
  document.getElementById('fourTextDiv').style.display = 'block';
}
function hideFour() {
  document.getElementById('fourTextDiv').style.display = 'none';
  document.getElementById('fourText').value = '';
}
// show Question four

// show Question five
function showFiveA() {
  document.getElementById('fiveTextDivA').style.display = 'block';
}
function hideFiveA() {
  document.getElementById('fiveTextDivA').style.display = 'none';
  document.getElementById('fiveTextA').value = '';
}

function showFiveB() {
  document.getElementById('fiveTextDivB').style.display = 'block';
}
function hideFiveB() {
  document.getElementById('fiveTextDivB').style.display = 'none';
  document.getElementById('fiveTextB').value = '';
}
// show Question five

// show Question six
function showSix() {
  document.getElementById('sixTextDiv').style.display = 'block';
}
function hideSix() {
  document.getElementById('sixTextDiv').style.display = 'none';
  document.getElementById('sixText').value = '';
}
// show Question six

// show Question seven
function showSevenA() {
  document.getElementById('sevenTextDivA').style.display = 'block';
}
function hideSevenA() {
  document.getElementById('sevenTextDivA').style.display = 'none';
  document.getElementById('sevenextA').value = '';
}

function showSevenB() {
  document.getElementById('sevenTextDivB').style.display = 'block';
}
function hideSevenB() {
  document.getElementById('sevenTextDivB').style.display = 'none';
  document.getElementById('sevenTextB').value = '';
}

function showSevenC() {
  document.getElementById('sevenTextDivC').style.display = 'block';
}
function hideSevenC() {
  document.getElementById('sevenTextDivC').style.display = 'none';
  document.getElementById('sevenTextC').value = '';
}
// show Question seven