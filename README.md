## Digital Artisans - PHP Json Test

## Company Employee Viewer
This project parses company and employee JSON data and displays employee information grouped by company.

### Data
The project uses two JSON data files:

- [companies.json](https://www.digitalartisans.com/assets/test/companies.json)  - Contains a list of companies
- [company_employees.json](https://www.digitalartisans.com/assets/test/company_employees.json) - Contains a list of employees and their details, associated with a company ID

### Features
- Parses JSON data from files into PHP arrays
- Loops through companies
- For each company, loops through employee list and filters for active employees matching that company
- Outputs company name and displays active employee details

### Sample Output
```shell

<h1>Lycos</h1>

<ul>
<li>Bobby Sanders</li>
<li>bobby_sanders@email.com</li>
<li>+1 (842) 123-5951</li>
<li>446 ItsaLane Lane, Dorchester, MA 02566</li>
<li>Dev</li>
</ul>

```

### Requirements
To run this project, ensure that you have PHP installed on your system.

### Usage
1. Clone the repository or download the project files.
2. Run php index.php
3. Company and employee data will be displayed in browser in bare HTML.

### Author
Done by Ashime!
