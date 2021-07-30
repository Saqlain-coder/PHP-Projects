<?php include 'includes/user_header.php' ?>
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
  <body style="background-color:">
    
	<div class="main-block">
      <form method="post"  style="background-color:#D1D0CE" class="form">
	  <center><img src="images/logo.png" alt="Logo" style="height:130px;"></center>
        <h1 style="color:red;font-weight:bold;text-align:center;margin-top:10px;font-size:30px">Student Course Evaluation<br> Questions</h1>
		<p style="text-align:center;color:black">(To be filled by each Student at the time of Course Completion)</p>
		
        <p></p>
        <hr>
        <div class="personal-details">
         
          <div>
            <label style="width:180px;color:black;font-weight:bold">Department<span class="required">*</span></label>
            <input  class="seminar-title" type="text" name="Department" required/ style="width:200px">
			
			 <label style="width:90px;margin-left:45px;color:black;font-weight:bold;">Course No<span class="required">*</span></label>
            <input  class="seminar-title" type="text" name="Course_No" required/ style="width:200px;margin-left:90px">	
          </div>
		  
		  <div>
            <label style="width:180px;color:black;font-weight:bold">Course Title<span class="required">*</span></label>
            <input  class="seminar-title" type="text" name="Course_Title" required/ style="width:200px;">
			
			 <label style="width:100px;margin-left:45px;color:black;font-weight:bold"> Teacher Name<span class="required">*</span></label>
            <input  class="seminar-title" type="text" name="Teacher_Name" required/ style="width:200px;margin-left:80px">
          </div>
		  
		  <div>
            <label style="width:180px;color:black;font-weight:bold">Year of Study<span class="required">*</span></label>
            <input  class="seminar-title" type="text" name="Year_of_Study" required/ style="width:200px">
			
			 <label style="width:110px;margin-left:45px;color:black;font-weight:bold">Semester/ Term<span class="required">*</span></label>
            <input  class="seminar-title" type="text" name="Semester_Term" required/ style="width:200px;margin-left:70px">
          </div>
        </div>
		
		
      
        <div class="statements-block">
		
          <p style="color:black;text-align:center;font-weight:bold">Please give us your views so that Course quality can be improved. You are encouraged to be frank and constructive in your comments. <span class="required">*</span></p>
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
			<h2 style="color:black;text-align:center">CORE QUESTIONS</h2>
			<p style="color:black;font-weight:bold;font-size:20px">Course Content and Organization</p>
			
              <tr style="color:black">
                <td class="first-col">The course objectives were clear </td>
                <td><input type="radio" value="None" name="useful" /></td>
                <td><input type="radio" value="None" name="useful" /></td>
                <td><input type="radio" value="None" name="useful" /></td>
                <td><input type="radio" value="None" name="useful" /></td>
                <td><input type="radio" value="None" name="useful" /></td>
    </tr>
              <tr style="color:black">
                <td class="first-col">The Course workload was manageable </td>
                <td><input type="radio" value="None" name="speaker" /></td>
                <td><input type="radio" value="None" name="speaker" /></td>
                <td><input type="radio" value="None" name="speaker" /></td>
                <td><input type="radio" value="None" name="speaker" /></td>
                <td><input type="radio" value="None" name="speaker" /></td>
              </tr>
              <tr style="color:black">
                <td class="first-col">The Course was well organized (e.g. timely access to materials. notification of changes, etc.) </td>
                <td><input type="radio" value="None" name="length"/></td>
                <td><input type="radio" value="None" name="length"/></td>
                <td><input type="radio" value="None" name="length"/></td>
                <td><input type="radio" value="None" name="length"/></td>
                <td><input type="radio" value="None" name="length"/></td>
              </tr>
			  
			  
			  
			                <tr style="color:black;font-size:20px">
                <td class="first-col" style="font-weight:bold">Student Contribution</td>
                
              </tr>
              
              <tr style="color:black">
                <td class="first-col" style="font-weight:bold">Approximate level of your own attendance 40% 60% 80% during the whole Course</td>
                
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
                <td class="first-col"></td>
                
              </tr>
			  
			  <tr style="color:black">
                <td class="first-col">I participated actively in the Course</td>
                <td><input type="radio" value="None" name="par"/></td>
                <td><input type="radio" value="None" name="par"/></td>
                <td><input type="radio" value="None" name="par"/></td>
                <td><input type="radio" value="None" name="par"/></td>
                <td><input type="radio" value="None" name="par"/></td>
              </tr style="color:black">
              <tr style="color:black">
                <td class="first-col">I think I have made progress in this Course</td>
                <td><input type="radio" value="None" name="thi" /></td>
                <td><input type="radio" value="None" name="thi" /></td>
                <td><input type="radio" value="None" name="thi" /></td>
                <td><input type="radio" value="None" name="thi" /></td>
                <td><input type="radio" value="None" name="thi" /></td>
              </tr>
              <tr style="color:black;font-size:17px">
                <td class="first-col" style="font-weight:bold">Learning Environment and Teaching Methods</td>
               
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
                <td class="first-col"></td>
                
              </tr>
              <tr style="color:black">
                <td class="first-col">I think the Course was well structured to achieve the learning outcomes ( there was a good balance of 
lectures. Tutorials, practical etc </td>
                <td><input type="radio" value="None" name="cou"/></td>
                <td><input type="radio" value="None" name="cou"/></td>
                <td><input type="radio" value="None" name="cou"/></td>
                <td><input type="radio" value="None" name="cou"/></td>
                <td><input type="radio" value="None" name="cou"/></td>
              </tr>
              <tr style="color:black">
                <td class="first-col"> The learning and teaching methods encouraged Participation.</td>
                <td><input type="radio" value="None" name="tea"/></td>
                <td><input type="radio" value="None" name="tea"/></td>
                <td><input type="radio" value="None" name="tea"/></td>
                <td><input type="radio" value="None" name="tea"/></td>
                <td><input type="radio" value="None" name="tea"/></td>
              </tr>
			  
			  <tr style="color:black">
                <td class="first-col"> The overall environment in the class was conducive to learning</td>
                <td><input type="radio" value="None" name="eni"/></td>
                <td><input type="radio" value="None" name="eni"/></td>
                <td><input type="radio" value="None" name="eni"/></td>
                <td><input type="radio" value="None" name="eni"/></td>
                <td><input type="radio" value="None" name="eni"/></td>
              </tr>
			  
			  <tr style="color:black">
                <td class="first-col">Classrooms were satisfactory</td>
                <td><input type="radio" value="None" name="sat"/></td>
                <td><input type="radio" value="None" name="sat"/></td>
                <td><input type="radio" value="None" name="sat"/></td>
                <td><input type="radio" value="None" name="sat"/></td>
                <td><input type="radio" value="None" name="sat"/></td>
              </tr>
			  
			  <tr style="color:black;font-size:25px;">
                <td class="first-col" style="font-weight:bold"></td>
              </tr>
			  
			    <tr style="color:black;font-size:20px;">
                <td class="first-col" style="font-weight:bold">Learning Resources</td>
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
                <td class="first-col">Learning materials (Lesson Plans. Course Notes etc.) were relevant and useful.</td>
                <td><input type="radio" value="None" name="les"/></td>
                <td><input type="radio" value="None" name="les"/></td>
                <td><input type="radio" value="None" name="les"/></td>
                <td><input type="radio" value="None" name="les"/></td>
                <td><input type="radio" value="None" name="les"/></td>
              </tr>
			  
			                <tr style="color:black">
                <td class="first-col">. Recommended reading Books etc. were relevant and appropriate </td>
                <td><input type="radio" value="None" name="bok" /></td>
                <td><input type="radio" value="None" name="bok" /></td>
                <td><input type="radio" value="None" name="bok" /></td>
                <td><input type="radio" value="None" name="bok" /></td>
                <td><input type="radio" value="None" name="bok" /></td>
              </tr>
              <tr style="color:black">
                <td class="first-col">The provision of learning resources in the library was adequate and appropriate.</td>
                <td><input type="radio" value="None" name="lear" /></td>
                <td><input type="radio" value="None" name="lear" /></td>
                <td><input type="radio" value="None" name="lear" /></td>
                <td><input type="radio" value="None" name="lear" /></td>
                <td><input type="radio" value="None" name="lear" /></td>
              </tr>
              <tr style="color:black">
                <td class="first-col">The provision of learning resources on the Web Was adequate and appropriate ( if relevant )</td>
                <td><input type="radio" value="None" name="pro" /></td>
                <td><input type="radio" value="None" name="pro" /></td>
                <td><input type="radio" value="None" name="pro" /></td>
                <td><input type="radio" value="None" name="pro" /></td>
                <td><input type="radio" value="None" name="pro" /></td>
              </tr>
			  
			  <tr style="color:black">
                <td class="first-col"></td>
                
              </tr>
			  
			  <tr style="color:black;font-size:20px;">
                <td class="first-col" style="font-weight:bold">Quality of Delivery</td>
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
                <td class="first-col">The course stimulated my interest and thought on The subject area</td>
                <td><input type="radio" value="None" name="sti" /></td>
                <td><input type="radio" value="None" name="sti" /></td>
                <td><input type="radio" value="None" name="sti" /></td>
                <td><input type="radio" value="None" name="sti" /></td>
                <td><input type="radio" value="None" name="sti" /></td>
              </tr>
			  
			                <tr style="color:black">
                <td class="first-col">The pace of the Course was appropriate </td>
                <td><input type="radio" value="None" name="pac" /></td>
                <td><input type="radio" value="None" name="pac" /></td>
                <td><input type="radio" value="None" name="pac" /></td>
                <td><input type="radio" value="None" name="pac" /></td>
                <td><input type="radio" value="None" name="pac" /></td>
              </tr>
              <tr style="color:black">
                <td class="first-col">Ideas and concepts were presented clearly</td>
                <td><input type="radio" value="None" name="ide" /></td>
                <td><input type="radio" value="None" name="ide"/></td>
                <td><input type="radio" value="None" name="ide" /></td>
                <td><input type="radio" value="None" name="ide" /></td>
                <td><input type="radio" value="None" name="ide" /></td>
              </tr>
              <tr style="color:black">
                <td class="first-col"></td>
                
              </tr>
			  
			   <tr style="color:black;font-size:20px;">
                <td class="first-col" style="font-weight:bold">Additional Core Questions</td>
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
                <td class="first-col">I understood the lectures </td>
                <td><input type="radio" value="None" name="und" /></td>
                <td><input type="radio" value="None" name="und" /></td>
                <td><input type="radio" value="None" name="und" /></td>
                <td><input type="radio" value="None" name="und" /></td>
                <td><input type="radio" value="None" name="und" /></td>
              </tr>
			  
			                <tr style="color:black">
                <td class="first-col">The material was well organized and presented </td>
                <td><input type="radio" value="None" name="mate" /></td>
                <td><input type="radio" value="None" name="mate" /></td>
                <td><input type="radio" value="None" name="mate" /></td>
                <td><input type="radio" value="None" name="mate" /></td>
                <td><input type="radio" value="None" name="mate" /></td>
              </tr>
              <tr style="color:black">
                <td class="first-col">The instructor was responsive to student need and Problems</td>
                <td><input type="radio" value="None" name="inst" /></td>
                <td><input type="radio" value="None" name="inst" /></td>
                <td><input type="radio" value="None" name="inst" /></td>
                <td><input type="radio" value="None" name="inst" /></td>
                <td><input type="radio" value="None" name="inst" /></td>
              </tr>
			  
			            <tr style="color:black">
                <td class="first-col">Had the instructor been regular throughout the Course? </td>
                <td><input type="radio" value="None" name="ben" /></td>
                <td><input type="radio" value="None" name="ben" /></td>
                <td><input type="radio" value="None" name="ben" /></td>
                <td><input type="radio" value="None" name="ben" /></td>
                <td><input type="radio" value="None" name="ben" /></td>
              </tr>
              <tr style="color:black">
                <td class="first-col"></td>
                
              </tr>
			  
			   <tr style="color:black;font-size:20px;">
                <td class="first-col" style="font-weight:bold">Tutorial</td>
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
                <td class="first-col">The material in the tutorials was useful</td>
                <td><input type="radio" value="None" name="use" /></td>
                <td><input type="radio" value="None" name="use" /></td>
                <td><input type="radio" value="None" name="use" /></td>
                <td><input type="radio" value="None" name="use" /></td>
                <td><input type="radio" value="None" name="use" /></td>
              </tr>
			  
			                <tr style="color:black">
                <td class="first-col">I was happy with amount of work needed for  tutorials</td>
                <td><input type="radio" value="None" name="hap" /></td>
                <td><input type="radio" value="None" name="hap" /></td>
                <td><input type="radio" value="None" name="hap" /></td>
                <td><input type="radio" value="None" name="hap" /></td>
                <td><input type="radio" value="None" name="hap" /></td>
              </tr>
              <tr style="color:black">
                <td class="first-col">The tutor dealt effectively with my problems</td>
                <td><input type="radio" value="None" name="dea" /></td>
                <td><input type="radio" value="None" name="dea" /></td>
                <td><input type="radio" value="None" name="dea" /></td>
                <td><input type="radio" value="None" name="dea" /></td>
                <td><input type="radio" value="None" name="dea" /></td>
              </tr>
			  
			            <tr style="color:black">
                <td class="first-col"></td>
               
              </tr>
			  
			   <tr style="color:black;font-size:20px;">
                <td class="first-col" style="font-weight:bold">Practical</td>
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
                <td class="first-col">The material in the Practicals was useful </td>
                <td><input type="radio" value="None" name="ini" /></td>
                <td><input type="radio" value="None" name="ini" /></td>
                <td><input type="radio" value="None" name="ini" /></td>
                <td><input type="radio" value="None" name="ini" /></td>
                <td><input type="radio" value="None" name="ini" /></td>
              </tr>
			  
			                <tr style="color:black">
                <td class="first-col">The demonstrators dealt effectively with my Problems.</td>
                <td><input type="radio" value="None" name="demo" /></td>
                <td><input type="radio" value="None" name="demo" /></td>
                <td><input type="radio" value="None" name="demo" /></td>
                <td><input type="radio" value="None" name="demo" /></td>
                <td><input type="radio" value="None" name="demo" /></td>
              </tr>
              <tr style="color:black">
                <td class="first-col"></td>
              
              </tr>
			  
			  <tr style="color:black;font-size:20px;">
                <td class="first-col" style="font-weight:bold">Overall Evaluation</td>
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
                <td class="first-col">The best features of the Course were:</td>
                <td><input type="radio" value="None" name="bet" /></td>
                <td><input type="radio" value="None" name="bet" /></td>
                <td><input type="radio" value="None" name="bet" /></td>
                <td><input type="radio" value="None" name="bet" /></td>
                <td><input type="radio" value="None" name="bet" /></td>
              </tr>
			  
			                <tr style="color:black">
                <td class="first-col">The Course could have been improved by:</td>
                <td><input type="radio" value="None" name="cou"/></td>
                <td><input type="radio" value="None" name="cou"/></td>
                <td><input type="radio" value="None" name="cou"/></td>
                <td><input type="radio" value="None" name="cou"/></td>
                <td><input type="radio" value="None" name="cou"/></td>
              </tr>
              <tr style="color:black">
                <td class="first-col"></td>
              
              </tr>
			  
			   <tr style="color:black;font-size:17px;">
                <td class="first-col" style="font-weight:bold">Equal Opportunities Monitoring (Optional)</td>
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
                <td class="first-col">The University does not tolerate discrimination on any irrelevant distinction ( e.g. race, age, gender) and is committed to work with diversity in a wholly positive way. Please indicate below anything in relation to this Course which may run counter to this objective:</td>
                <td><input type="radio" value="None" name="uni" /></td>
                <td><input type="radio" value="None" name="uni" /></td>
                <td><input type="radio" value="None" name="uni" /></td>
                <td><input type="radio" value="None" name="uni" /></td>
                <td><input type="radio" value="None" name="uni" /></td>
              </tr>
			  
			                <tr style="color:black">
                <td class="first-col"></td>
               
              </tr>
			  
			 
			  
			   <tr style="color:black;font-size:20px;">
                <td class="first-col" style="font-weight:bold">Demographic Information: (Optional)</td>
              </tr>
			  
			              <thead>
              <tr>
                <th class="first-col" ></th>
                <th style="color:black;font-weight:bold">Full Time</th>
                <th style="color:black;font-weight:bold">Part Time</th>

              </tr>
            </thead>
			  
			  <tr style="color:black">
                <td class="first-col">Full/ part time study:</td>
                <td><input type="radio" value="None" name="full" /></td>
                <td><input type="radio" value="None" name="full" /></td>

              </tr>
			  
			  
			              <thead>
              <tr>
                <th class="first-col" ></th>
                <th style="color:black;font-weight:bold">Yes</th>
                <th style="color:black;font-weight:bold">No</th>

              </tr>
            </thead>
			                <tr style="color:black">
                <td class="first-col">Do you consider yourself to be disabled:</td>
                <td><input type="radio" value="None" name="yes" /></td>
                <td><input type="radio" value="None" name="yes" /></td>
           
              </tr>
			  
			      <thead>
              <tr>
                <th class="first-col" ></th>
                <th style="color:black;font-weight:bold">Male</th>
                <th style="color:black;font-weight:bold">Female</th>

              </tr>
              <tr style="color:black">
                <td class="first-col">Gender</td>
                <td><input type="radio" value="None" name="gen" /></td>
                <td><input type="radio" value="None" name="gen" /></td>

              </tr>
			  
			  
			  			      <thead>
              <tr>
                <th class="first-col" ></th>
                <th style="color:black;font-weight:bold">less than 22</th>
                <th style="color:black;font-weight:bold">22 - 29</th>
                <th style="color:black;font-weight:bold">over 29</th>

              </tr>
              <tr style="color:black">
                <td class="first-col">Age Group</td>
                <td><input type="radio" value="None" name="age" /></td>
                <td><input type="radio" value="None" name="age" /></td>
                <td><input type="radio" value="None" name="age" /></td>

              </tr>
			  
			  
			  
            </tbody>
			
			
          </table>
        </div>

        <div class="btn-block">
          <input type="submit" value="Submit" name="submit" style="background-color:#800000;font-weight:bold">
        </div>
      </form>
    </div>
  </body>
</html>

<?php 


include 'includes/db_config.php';

if(isset($_POST['submit'])) {

$name = $_SESSION['Name'];
$Department = $_POST['Department'];
$Course_No = $_POST['Course_No'];
$Course_Title = $_POST['Course_Title'];
$Teacher_Name = $_POST['Teacher_Name'];
$Year_of_Study = $_POST['Year_of_Study'];
$Semester_Term = $_POST['Semester_Term'];
$status = 0;

$insert = "INSERT INTO student_evolution ( Name, Department, Course_No, Course_title, Teacher_Name, Year_of_Study, Semester, Status) VALUES ('$name', '$Department', '$Course_No', '$Course_Title', '$Teacher_Name',
                                        '$Year_of_Study', '$Semester_Term', '$status')";
$query = mysqli_query($con, $insert);

if($query) {
    echo "<script>alert('Your form has Successfully Sent')</script>";
}
else {
    echo "<script>alert('Your form has Successfully Sent')</script>";
}
}

?>