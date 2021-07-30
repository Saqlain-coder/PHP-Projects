<!DOCTYPE html>
<html>
  <head>
    <title>Teacher Evaluation Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
	<link rel="shortcut icon" type="images/png" href="images/logo.png"/>
    <style>
      html, body {
      min-height: 100%;
      }
      body, p { 
      padding: 0;
      margin: 0;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      line-height: 24px;
      color: #666;
      }
      .main-block {
      display: flex;
      justify-content: center;
      align-items: center;
      }
      .form {
      width: 100%;
      padding: 20px;
      background: #fff;
      box-shadow: 0 2px 5px #ccc; 
      }
      h1 {
      font-weight: 400;
      line-height: 28px;
      }
      hr {
      margin: 20px 0;
      }
      span.required {
      color: red;
      }
      .personal-details, .question-block, .statements-block {
      padding-bottom: 20px;
      }
      .personal-details >div {
      display: flex;
      flex-direction: column;
      }
      input {
      padding: 8px 5px;
      margin-bottom: 10px;
      border-radius: 3px;
      border: 1px solid #ccc;
      outline: none;
      vertical-align: middle;
      }
      input:hover, textarea:hover {
      outline: none;
      border: 1px solid #095484;
      }
      .question, .answer, table, textarea {
      width: 100%;
      }
      .answer input, table input {
      width: auto;
      }
      th, td {
      width: 14%;
      padding: 10px 0;
      border-bottom: 1px solid #ccc;
      text-align: center;
      vertical-align: unset;
      line-height: 18px;
      font-weight: 400;
      word-break: break-all;
      }
      .first-col {
      width: 30%;
      text-align: left;
      }
      small {
      display: block;
      line-height: 18px;
      opacity: 0.5;
      }
      .btn-block {
      text-align: center;
      }
      button {
      width: 150px;
      padding: 10px;
      border-radius: 5px; 
      border: none;
      background: #095484; 
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      button:hover {
      background: #0666a3;
      }
      @media (min-width: 568px) {
      .personal-details >div {
      flex-direction: row;
      align-items: center;
      }
      label {
      width: 95px;
      }
      input {
      width: calc((100% - 130px)/2);
      }
      input.first-name, input.seminar-title {
      margin: 0 5px 10px;
      }
      .question-block {
      display: flex;
      justify-content: space-between;
      }
      .question, .answer {
      width: 50%;
      }
      th, td {
      word-break: keep-all;
      }
      }
    </style>
  </head>
  <?php include 'includes/user_header.php'?>    
	<div class="main-block">
      <form style="background-color:#D1D0CE" method="post" class="form">
	  <center><img src="images/logo.png" alt="Logo" style="height:130px;"></center>
        <h1 style="color:red;font-weight:bold;text-align:center;margin-top:10px;font-size:40px">Teacher Evaluation Form</h1>
		<p style="text-align:center;color:black">(To be filled by the student)</p>
		
        <p></p>
        <hr>
        <div class="personal-details">
          <div>
            <label style="width:180px;color:black;font-weight:bold;">Course Title and Number<span class="required">*</span></label>
            <input  class="first-name" type="text" name="Course_Title" placeholder="" required style="width:550px">

			
          </div>
          <div>
            <label style="width:180px;color:black;font-weight:bold">Name of Instructor<span class="required">*</span></label>
            <input  class="seminar-title" type="text" name="Name_of_Instructor" required style="width:200px">
			
			 <label style="width:80px;margin-left:45px;color:black;font-weight:bold">Semester<span class="required">*</span></label>
            <input  class="seminar-title" type="text" name="Semester" required style="width:200px">
          </div>
		  
		  <div>
            <label style="width:180px;color:black;font-weight:bold">Department<span class="required">*</span></label>
            <input  class="seminar-title" type="text" name="Department" required style="width:200px">
			
			 <label style="width:80px;margin-left:45px;color:black;font-weight:bold">Degree<span class="required">*</span></label>
            <input  class="seminar-title" type="text" name="Degree" required style="width:200px">
          </div>
        </div>
      
        <div class="statements-block">
		
          <p style="color:black;text-align:center;font-weight:bold">Use the scale to answer the following questions below and make comments <span class="required">*</span></p>
          <table>
            <thead>
              <tr>
                <th class="first-col" ></th>
                <th style="color:black;font-weight:bold">Strongly Agree</th>
                <th style="color:black;font-weight:bold">Agree</th>
                <th style="color:black;font-weight:bold">Uncertain </th>
                <th style="color:black;font-weight:bold">Disagree</th>
                <th style="color:black;font-weight:bold">Strongly Disagree</th>
              </tr>
            </thead>
            <tbody>
			<h2 style="color:black">Instructor</h2>
              <tr style="color:black">
                <td class="first-col">The Instructor is prepared for each class </td>
                <td><input type="radio" value="None" name="useful" /></td>
                <td><input type="radio" value="None" name="useful" /></td>
                <td><input type="radio" value="None" name="useful" /></td>
                <td><input type="radio" value="None" name="useful" /></td>
                <td><input type="radio" value="None" name="useful" /></td>
              </tr>
              <tr style="color:black">
                <td class="first-col">The Instructor demonstrates knowledge of the subject </td>
                <td><input type="radio" value="None" name="speaker"/></td>
                <td><input type="radio" value="None" name="speaker"/></td>
                <td><input type="radio" value="None" name="speaker"/></td>
                <td><input type="radio" value="None" name="speaker"/></td>
                <td><input type="radio" value="None" name="speaker"/></td>
              </tr>
              <tr style="color:black">
                <td class="first-col">The Instructor has completed the whole course </td>
                <td><input type="radio" value="None" name="length"/></td>
                <td><input type="radio" value="None" name="length"/></td>
                <td><input type="radio" value="None" name="length"/></td>
                <td><input type="radio" value="None" name="length"/></td>
                <td><input type="radio" value="None" name="length"/></td>
              </tr>
			  
			                <tr style="color:black">
                <td class="first-col'">The Instructor provides additional material apart from the textbook </td>
                <td><input type="radio" value="None" name="use" /></td>
                <td><input type="radio" value="None" name="use" /></td>
                <td><input type="radio" value="None" name="use" /></td>
                <td><input type="radio" value="None" name="use" /></td>
                <td><input type="radio" value="None" name="use" /></td>
              </tr>
              <tr style="color:black">
                <td class="first-col">The Instructor gives citations regarding current situations with reference to Pakistani context. </td>
                <td><input type="radio" value="None" name="fai" /></td>
                <td><input type="radio" value="None" name="fai" /></td>
                <td><input type="radio" value="None" name="fai" /></td>
                <td><input type="radio" value="None" name="fai" /></td>
                <td><input type="radio" value="None" name="fai" /></td>
              </tr>
              <tr style="color:black">
                <td class="first-col">The Instructor communicates the subject matter effectively  </td>
                <td><input type="radio" value="None" name="al"/></td>
                <td><input type="radio" value="None" name="al"/></td>
                <td><input type="radio" value="None" name="al"/></td>
                <td><input type="radio" value="None" name="al"/></td>
                <td><input type="radio" value="None" name="al"/></td>
              </tr>
			  
			  <tr style="color:black">
                <td class="first-col">The Instructor shows respect towards students and encourages class participation  </td>
                <td><input type="radio" value="None" name="the" /></td>
                <td><input type="radio" value="None" name="the" /></td>
                <td><input type="radio" value="None" name="the" /></td>
                <td><input type="radio" value="None" name="the" /></td>
                <td><input type="radio" value="None" name="the" /></td>
              </tr style="color:black">
              <tr style="color:black">
                <td class="first-col">The Instructor maintains an environment that is conducive to learning  </td>
                <td><input type="radio" value="None" name="ins"/></td>
                <td><input type="radio" value="None" name="ins"/></td>
                <td><input type="radio" value="None" name="ins"/></td>
                <td><input type="radio" value="None" name="ins"/></td>
                <td><input type="radio" value="None" name="ins"/></td>
              </tr>
              <tr style="color:black">
                <td class="first-col">The Instructor arrives on time </td>
                <td><input type="radio" value="None" name="arr"/></td>
                <td><input type="radio" value="None" name="arr"/></td>
                <td><input type="radio" value="None" name="arr"/></td>
                <td><input type="radio" value="None" name="arr"/></td>
                <td><input type="radio" value="None" name="arr"/></td>
              </tr>
			  
			                <tr style="color:black">
                <td class="first-col">The Instructor leaves on time  </td>
                <td><input type="radio" value="None" name="ali" /></td>
                <td><input type="radio" value="None" name="ali" /></td>
                <td><input type="radio" value="None" name="ali" /></td>
                <td><input type="radio" value="None" name="ali" /></td>
                <td><input type="radio" value="None" name="ali" /></td>
              </tr>
              <tr style="color:black">
                <td class="first-col">The Instructor is fair in examination  </td>
                <td><input type="radio" value="None" name="fair" /></td>
                <td><input type="radio" value="None" name="fair" /></td>
                <td><input type="radio" value="None" name="fair" /></td>
                <td><input type="radio" value="None" name="fair" /></td>
                <td><input type="radio" value="None" name="fair" /></td>
              </tr>
              <tr style="color:black">
                <td class="first-col">The Instructor returns the graded scripts etc, in a reasonable amount of time  </td>
                <td><input type="radio" value="None" name="ret" /></td>
                <td><input type="radio" value="None" name="ret" /></td>
                <td><input type="radio" value="None" name="ret" /></td>
                <td><input type="radio" value="None" name="ret" /></td>
                <td><input type="radio" value="None" name="ret" /></td>
              </tr>
			  
			  <tr style="color:black">
                <td class="first-col">The Instructor was available during the specified office hours and for after class consultations   </td>
                <td><input type="radio" value="None" name="was" /></td>
                <td><input type="radio" value="None" name="was" /></td>
                <td><input type="radio" value="None" name="was" /></td>
                <td><input type="radio" value="None" name="was" /></td>
                <td><input type="radio" value="None" name="was" /></td>
              </tr>
			  
			  <tr style="color:black;font-size:25px;">
                <td class="first-col" style="font-weight:bold"></td>
              </tr>
			  
			    <tr style="color:black;font-size:25px;">
                <td class="first-col" style="font-weight:bold">Course</td>
              </tr>
			  
			   <thead>
              <tr>
                <th class="first-col" ></th>
                <th style="color:black;font-weight:bold">Strongly Agree</th>
                <th style="color:black;font-weight:bold">Agree</th>
                <th style="color:black;font-weight:bold">Uncertain </th>
                <th style="color:black;font-weight:bold">Disagree</th>
                <th style="color:black;font-weight:bold">Strongly Disagree</th>
              </tr>
            </thead>
			  
			  <tr style="color:black">
                <td class="first-col">The Subject matter presented in the course has increased your knowledge of the subject </td>
                <td><input type="radio" value="None" name="mat"/></td>
                <td><input type="radio" value="None" name="mat"/></td>
                <td><input type="radio" value="None" name="mat"/></td>
                <td><input type="radio" value="None" name="mat"/></td>
                <td><input type="radio" value="None" name="mat"/></td>
              </tr>
			  
			                <tr style="color:black">
                <td class="first-col">The syllabus clearly states course objectives requirements, procedures and grading criteria  </td>
                <td><input type="radio" value="None" name="ale" /></td>
                <td><input type="radio" value="None" name="ale" /></td>
                <td><input type="radio" value="None" name="ale" /></td>
                <td><input type="radio" value="None" name="ale" /></td>
                <td><input type="radio" value="None" name="ale" /></td>
              </tr>
              <tr style="color:black">
                <td class="first-col">The course integrates theoretical course concepts with real-world applications</td>
                <td><input type="radio" value="None" name="speaker"/></td>
                <td><input type="radio" value="None" name="speaker"/></td>
                <td><input type="radio" value="None" name="speaker"/></td>
                <td><input type="radio" value="None" name="speaker"/></td>
                <td><input type="radio" value="None" name="speaker"/></td>
              </tr>
              <tr style="color:black">
                <td class="first-col">The assignments and exams covered the materials presented in the course </td>
                <td><input type="radio" value="None" name="exa"/></td>
                <td><input type="radio" value="None" name="exa"/></td>
                <td><input type="radio" value="None" name="exa"/></td>
                <td><input type="radio" value="None" name="exa"/></td>
                <td><input type="radio" value="None" name="exa"/></td>
              </tr>
			  
			  <tr style="color:black">
                <td class="first-col">The course material is modern and updated</td>
                <td><input type="radio" value="None" name="mate" /></td>
                <td><input type="radio" value="None" name="mate" /></td>
                <td><input type="radio" value="None" name="mate" /></td>
                <td><input type="radio" value="None" name="mate" /></td>
                <td><input type="radio" value="None" name="mate" /></td>
                <td><input type="radio" value="None" name="mate" /></td>
              </tr>
			  
			  
			  
			  
            </tbody>
			
			
          </table>
        </div>
        
		
		 
        <div class="btn-block">
          <input type="submit" name="submit" value="Submit" style="background-color:#800000;font-weight:bold">
        </div>
      </form>
    </div>
  </body>
</html>

<?php 


include 'includes/db_config.php';

if(isset($_POST['submit'])) {

$name = $_SESSION['Name'];
$Course_Title = $_POST['Course_Title'];
$Semester = $_POST['Semester'];
$Name_of_Instructor = $_POST['Name_of_Instructor'];
$Department = $_POST['Department'];
$Degree = $_POST['Degree'];
$status = 0;

$insert = "INSERT INTO teacher_evolution (Name, Course_title, Name_of_Instructor, Semester, Department, Degree, Status) VALUES ('$name', '$Course_Title', '$Name_of_Instructor', '$Semester', '$Department', '$Degree',
                                        '$status')";
$query = mysqli_query($con, $insert);
var_dump($insert);
if($query) {
    echo "<script>alert('Your form has Successfully Sent')</script>";
}
else {
    echo "<script>alert('Sorry')</script>";
}
}

?>