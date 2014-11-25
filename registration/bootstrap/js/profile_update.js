$.fn.editable.defaults.mode = 'inline';
$('#full_name').editable({
	  type: 'text',
    title: 'Enter Full Name'
    });
$('#date_of_birth').editable({
	  type: 'text',
    title: 'Enter Date Of Birth'
    });
$('#email').editable({
	  type: 'text',
    title: 'Enter Email'
    });
$('#phone').editable({
	  type: 'text',
    title: 'Enter Phone Number'
    });
$('#gender').editable({
	  type: 'select',
     value: 2,
source: [
{value: "Male", text: 'Male'},
{value: "Female", text: 'Female'},
{value: "Others", text: 'Others'}
]
});
    
$('#last_degree').editable({
	  type: 'select',
    value: "",
source: [

{value: "Doctoral", text: 'Doctoral'},
{value: "Masters", text: 'Masters'},
{value: "Bachelors/Honours", text: 'Bachelors/Honours'},
{value: "Diploma", text: 'Diploma'},
{value: "Secondary/A Level", text: 'Secondary/A Level'},
{value: "Female", text: 'Female'},
{value: "Primary/O Level", text: 'Primary/O Level'}
]
});
$('#institution').editable({
	  type: 'text',
    title: 'Enter Your Institution Name'
    });
$('#major_field').editable({
	  type: 'text',
    title: 'Enter Your Major Field'
    });
$('#specialization').editable({
	  type: 'text',
    title: 'Enter Your Specialization'
    });
$('#second_major_field').editable({
	  type: 'text',
    title: 'Enter Your Second Major Field'
    });
$('#second_specialization').editable({
	  type: 'text',
    title: 'Enter Your Second Major Field'
    });	
$('#total_length_of_service').editable({
	  type: 'text',
    title: 'Enter Total Length Of Service'
    });
$('#current_orginization').editable({
	  type: 'text',
    title: 'Enter Your Current Organization Name'
    });
$('#type_of_orginaization').editable({
	  type: 'text',
    title: 'Enter Type Of Organization'
    });
$('#current_designation').editable({
	  type: 'text',
    title: 'Enter Your Current Designation'
    });
$('#duration').editable({
	  type: 'text',
    title: 'Enter Duartion'
    });
$('#current_salary').editable({
	  type: 'text',
    title: 'Enter Your Current Salary'
    });
$('#expected_salary').editable({
	  type: 'text',
    title: 'Enter Your Expected Salary'
    });
	