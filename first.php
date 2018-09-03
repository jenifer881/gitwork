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
font-size:50px;
}
.e{
border:10px;
padding:5px;
background-color:black;
}

#title
{
	max-width: 2500px;
	max-height: 1000px;

}
#blue
{
	margin-left: 60px;
	margin-top:10px;

}
#white
{
	margin-left: 60px;

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
     <textarea rows="1" cols="50" name="task1"></textarea>
     </div>
     </td>
     </tr>
     <tr>
        <td>
          Password:
            </td>
    <td>
    <div id="white">
    <textarea rows="1" cols="50" name="task2"></textarea>
    </div>
    </td>
        </tr>
    <tr>
        <td>
          Gender:
             </td>
    <td>
    <div id="blue">
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

    <textarea rows="1" cols="50" name="task4"></textarea>
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
         <textarea rows="1" cols="40" name="task5"></textarea>
          
      </select>
     </td>
     </tr>
     <tr>
       <td>
          Address:
            </td>
     <td>
     <div id="blue">
     <textarea rows="5" cols="50" name="task6"></textarea>
      </td>
     </tr>
     </div>
     </table>
     </form>
     <input type="Submit" form="nameform" value="Submit" name="Submit">
     </div>
     </div>
     
</body>
  </html>