<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}

#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

input {
  height: 25px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

input.invalid {
  background-color: #ffdddd;
}

.tab {
  display: none;
}

button {
  height: 25px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

.step.finish {
  background-color: #04AA6D;
}
</style>
<body>

<form id="regForm" action="/frmse" method="post">
{{csrf_field()}}
<input type="reset" value="New" width="50px">&nbsp
<button name="vi" disabled>Virtual Invoice</button>&nbsp
<button name="pi">Print Invoice</button>&nbsp
<button name="exit">Exit</button><br>
  <!-- One "tab" for each step in the form: -->
  <div class="tab"><br>
  <b>General</b> &nbsp&nbsp    Customer Details &nbsp&nbsp    Bank Details &nbsp&nbsp    Invoice Details<br><br>
    Invoice No <input oninput="this.className = ''" value="{{$inno}}" name="inno"><br>
    Invoice Date <input type="date" oninput="this.className = ''" value="{{$indate}}" name="indate"><br><br>
    PL No<input oninput="this.className = ''" name="plno"><input type="submit" value="..."><br>
    Consignee<input oninput="this.className = ''" name="cons"><br>
    A.W.B.No<input oninput="this.className = ''" name="awb"><br>
    Flight No<input oninput="this.className = ''" name="flno"><br>
    Flight Date<input oninput="this.className = ''" name="fldate"><br>
    Shipment No<input oninput="this.className = ''" name="shno"><br>
    Designation<input oninput="this.className = ''" name="desg"><br><br>
    Cus PO No<input oninput="this.className = ''" name="cuspo"><br>
    Order No<input oninput="this.className = ''" name="oderno"><br>
    WS No<input oninput="this.className = ''" name="wsno"><br>
    Batch No(s)<input oninput="this.className = ''" name="batchno"><br>
    GRN No(s)<input oninput="this.className = ''" name="grnno"><br>
  </div>
  <div class="tab">
  General &nbsp&nbsp    <b>Customer Details</b> &nbsp&nbsp    Bank Details &nbsp&nbsp    Invoice Details<br><br>
    Sales Contact <input oninput="this.className = ''" name="inno">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    Payment Date <input type="date" oninput="this.className = ''" name="indate"><br><br>
    Consignee <input oninput="this.className = ''" name="indate"><br><br>
    Address 1<input oninput="this.className = ''" name="plno"><button>...</button><br>
    Address 2<input oninput="this.className = ''" name="cons"><br>
    Address 3<input oninput="this.className = ''" name="awb"><br>
    Address 4<input oninput="this.className = ''" name="flno"><br>
    Address 5<input oninput="this.className = ''" name="fldate"><br><br><br><br>
    NOTIFY ADDRESS<input oninput="this.className = ''" name="shno"><br>
    Address 1<input oninput="this.className = ''" name="desg"><br><br>
    Address 2<input oninput="this.className = ''" name="cuspo"><br>
    Address 3<input oninput="this.className = ''" name="oderno"><br>
    Address 4<input oninput="this.className = ''" name="wsno"><br>
  </div>
  <div class="tab">
  General &nbsp&nbsp    Customer Details &nbsp&nbsp    <b>Bank Details</b> &nbsp&nbsp    Invoice Details<br><br><br>
  &nbsp&nbsp&nbsp&nbsp<input type="checkbox" oninput="this.className = ''" name="inno">Empty Bank DTL<br>
  Bank Name
  <select name="bankname">
  <option value="THE MAURITUS COMMERCIAL BANK">THE MAURITUS COMMERCIAL BANK</option>
  <option value=""></option>
  <option value=""></option>
  <option value=""></option>
  </select><br>
  Branch Name
  <select name="brname">
  <option value="MALE BRANCH">MALE BRANCH</option>
  <option value=""></option>
  <option value=""></option>
  <option value=""></option>
  </select><br>
    Account Name<input oninput="this.className = ''" name="cons"><br>
    Account No<input oninput="this.className = ''" name="awb"><br>
    Swift Code<input oninput="this.className = ''" name="flno"><br>
    Corresponding Bank<input oninput="this.className = ''" name="fldate"><br><br>
    Comment <textarea name="comment" id="" cols="5" rows="4"></textarea>
  </div>
  <div class="tab">Login Info:
  General &nbsp&nbsp    Customer Details &nbsp&nbsp    Bank Details &nbsp&nbsp    <b>Invoice Details</b><br><br><br>
  <table>
      <tr align="left">
        <th>Product Name</th>
        <th>Boxes</th>
        <th>Net Weigth(KG)</th>
        <th>Rate</th>
        <th>Unit Value</th>
      </tr>
      <tr align="left">
          <td><input oninput="this.className = ''" name="prname"></td>
          <td><input oninput="this.className = ''" name="boxes"></td>
          <td><input oninput="this.className = ''" name="nwei"></td>
          <td><input oninput="this.className = ''" name="rate"></td>
          <td><input oninput="this.className = ''" name="uval"></td>
      </tr>
  </table><br><br>
  <table>
      <tr align="left">
        <th>Product Name</th>
        <th>Boxes</th>
        <th>Net Weigth(KG)</th>
        <th>Rate</th>
        <th>Unit Value</th>
      </tr>
      <tr>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
      </tr>
  </table>

  <table>
      <tr>
          <th>USD</th>
          <td>GROSS TOTAL.</td>
          <td><input oninput="this.className = ''" name="grtotal"></td>
          <td>NET TOTAL</td>
          <td><input oninput="this.className = ''" name="nettotal"></td>
          <td></td>
          <td><input oninput="this.className = ''" name=""></td>
      </tr>
      <tr>
          <td></td>
          <td></td>
          <td><input type="checkbox" oninput="this.className = ''" name="frongrto">Freight on Gross Total</td>
          <td>FRAEIGHT</td>
          <td><input oninput="this.className = ''" name="frae"></td>
          <td></td>
          <td><input oninput="this.className = ''" name=""></td>
      </tr>
      <tr>
        <th>FOB</th>
        <td></td>
        <td></td>
        <td>DISCOUNT</td>
        <td><input oninput="this.className = ''" name="disc"></td>
        <td>%</td>
        <td><input oninput="this.className = ''" name=""></td>
      </tr>
      <tr>
        <th></th>
        <td></td>
        <td colspan="3"><input oninput="this.className = ''" name="" value="C & F MXP TOTAL USD"></td>
        <td></td>
        <td><input oninput="this.className = ''" name=""></td>
      </tr>
      <tr>
          <th>KG</th>
      </tr>
  </table>
  </div>
  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false*************************************************************
      valid = true;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>

</body>
</html>
