<!DOCTYPE html>
<html>
<style>
.d 
{
color:white;
text-align:center;
font-family:comic san ms;
border:20px;
padding:10px;
background-color:white;
font-size:40px;
}
.e{
border:10px;
padding:5px;
background-color:lightslategray;
}

#title
{
	max-width: 2500px;
	max-height: 1000px;

}
#red
{
	margin-left: 120px;
	margin-top:10px;


}
#white
{
	margin-left: 60px;
   
}
#green
{
	font-size: 30px;
	margin-left: 100px;
}

</style>

<body>
<div class="d">
<div class="e">
<h1>Registration Form</h1>
 <form action="second.php" method="post" id="nameform">
  <table>
    <tr>
       <td>
          Name:
            </td>
     <td>
     <div id="white">
     <input type="text" name="task1" placeholder="give name" style="width: 300px;  height: 20px;"/>
     </div>
     </td>
     </tr>
     <tr>
        <td>
          Password:
            </td>
    <td>
    <div id="white">
    <input type="text" name="task2" placeholder="give password" style="width: 300px; height: 20px;"/>
    </div>
    </td>
        </tr>
    <tr>
        <td>
          Gender:
             </td>
    <td>
    <div id="green">
    <input type="radio" name="task3">Male
    <input type="radio" name="task3">Female
    <input type="radio" name="task3">Others
    </div>
    </td>
    </tr>
    <tr>
        <td>
          Email:
             </td>
    <td>
    <div id="white">
<input type="text" name="task4" placeholder="give email" style="width: 300px; height: 20px;"/>
   
    </div>
    </td>
    </tr>
    <tr>
    <td>
     Phone:
     </td>
     <td>
     <select>

         <option>+91</option>
         <option>+7</option>
         <option>+61</option>
         <option>+62</option>
         <option>+49</option>
         <option>+20</option>
         <input type="text" name="task5" placeholder="give number" style="width: 300px; height: 20px;"/>
         
          
      </select>
     </td>
     </tr>
     <tr>
       <td>
          Address:
            </td>
     <td>
     <div id="red">
     <textarea rows="5" cols="50" name="task6"></textarea>
      </td>
     </tr>
     </div>
     </table>
     </form>
     <input type="Submit" form="nameform" value="Submit" name="Submit">
     <input type="Reset" form="nameform" value="Reset" name="Reset">
     </div>
     </div>
     
</body>
  </html>