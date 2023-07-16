<?php

// Load company data
$companyData = json_decode(file_get_contents('https://www.digitalartisans.com/assets/test/companies.json'), true);

// Load employee data 
$employeeData = json_decode(file_get_contents('https://www.digitalartisans.com/assets/test/company_employees.json'), true);

//Get company information from the loaded data
$companyData = $companyData["companies"];

//Get employee information from the loaded data
$employeeData = $employeeData["employees"];

// Loop through each company
foreach($companyData as $company) {

  echo "<h1>".$company["company_name"]."</h1>";
  
  // Loop through employees for this company
  foreach($employeeData as $employee) {

    //Filter all active employees
    if($employee["company_id"] == $company["company_id"] && $employee["isActive"]) {
      
      echo "<ul>";
      //Get the first and last name information from the employee_name sub-array.
      echo "<li>".$employee['employee_name'][0]['first_name']." ".$employee['employee_name'][0]['last_name']."</li>";
      echo "<li>".$employee['email']."</li>";
      echo "<li>".$employee['phone']."</li>";
      echo "<li>".$employee['address']."</li>";
      //Get the department name information from the department sub-array.
      echo "<li>".$employee['department'][0]["name"]."</li>";
      echo "</ul>";
      
    }
  }
  
}

?>