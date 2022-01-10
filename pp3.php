<!-- html -->
<html>
 <body>
     <h2>
        Application Name: AAST_BIS class Registration</h2>
         <p>
             <font color=red>*Required field.</font>
         </P>

        <!-- form registration -->

         <form action="<?php $_PHP_SELF ?>" method="GET">

             Name: <input type="text" name="name"  required />
             <font color=red>*</font>
             <BR><BR>
            E-mail: <input type="text" name="E_mail" Email is required />
             <font color=red>*</font>
             <BR><BR>
             Group #: <input type="text" name="Group" />
             <br>
             class details :<textarea rows="5" cols="30" name="class_details"></textarea>
             <br>
             Gender:<input type="radio" id="gender" name="gender" value="Female" />Female
             <input type="radio" id="gender" name="gender" value="Male"  required />Male <font color=red>*</font>
             <br>
                 
             <!-- select -->

             Select Courses:<select name="courses[]" multiple="multiple">
                 <option value="select disabled selected ">----select-----</option>
                 <option value="java script">Java Script </option>
                 <option value="PHP">PHP</option>
                 <option value="my sql">My Sql</option>
                 <option value="html">HTML</option>
             </select>
             <br>
             Agree: <input type="checkbox" Value="">
             <font color=red>*</font>
             <br>
             <input type="submit" value="">
     <h2>
         Your given values are as:
     </h2>
     </form>
 </body>
 </html>
 <?php
    
    // php
      
      define("siteName", "http://localhost:80/php_pro/pp3.php");
       echo siteName . "" . "<br>";


    if (!empty($_GET["name"]) && !empty($_GET["E_mail"])) {

        echo "<br>";
        echo "Name: " . $_GET['name'] . "<br />";
        echo "E_mail:" . $_GET['E_mail'];
        echo "<br>";
        echo "Group#:" . $_GET['Group'];
        echo "<br>";
        echo "class_details:" . $_GET['class_details'];
        echo "<br>";
        echo "Gender:" . $_GET['gender'];
        echo "<br>";
        if($_GET['courses']){
            echo "your courses are ";
            foreach($_GET['courses'] as $course){
                echo $course." ";
            }
        }  
    }
    ?>
