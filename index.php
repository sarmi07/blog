<!DOCTYPE html>
<html lang="en">
<head>
  <title>HTML & CSS Test</title>
  <style>
    body{
      margin-left : 20%; 
      margin-right : 20%;
    }
  </style>
</head>
<body>
  <form action="certificate.php" method="post">
    <center>
      <h1>Online HTML & CSS Test</h1>
      <br>
      Name: <input type="text" name="name" required="required"/>
      <hr>
      <hr>
      <table>
        <tr>
          <td colspan="2">
          <h3>Q 1: Which is most important heading</h3>
          </td>
        </tr>
        <tr>
          <td>
            <input type="radio" name="q1" value="1"/> h1
          </td>
          <td>
            <input type="radio" name="q1" value="2"/> h6
          </td>
        </tr>
        <tr>
          <td>
            <input type="radio" name="q1" value="3"/> heading
          </td>
          <td>
            <input type="radio" name="q1" value="4"/> header
          </td>
        </tr>
        <tr>
          <td colspan="2">
          <h3>Q 2: CSS stands for:</h3>
          </td>
        </tr>
        <tr>
          <td>
            <input type="radio" name="q2" value="1"/> Casding Strict Set            
          </td>
          <td>
            <input type="radio" name="q2" value="2"/> Case Style Sheet
          </td>
        </tr>
        <tr>
          <td>
            <input type="radio" name="q2" value="3"/> Cascading Style Sheet
          </td>
          <td>
            <input type="radio" name="q2" value="4"/> None
          </td>
        </tr>
        <tr>
          <td colspan="2">
          <h3>Q 3: How many list types are there in html:</h3>
          </td>
        </tr>
        <tr>
          <td>
            <input type="radio" name="q3" value="1"/> 4            
          </td>
          <td>
            <input type="radio" name="q3" value="2"/> 3
          </td>
        </tr>
        <tr>
          <td>
            <input type="radio" name="q3" value="3"/> 2
          </td>
          <td>
            <input type="radio" name="q3" value="4"/> None
          </td>
        </tr>
        <tr>
          <td colspan="2">
          <h3>Q 4: How many ways are there to use CSS with HTML:</h3>
          </td>
        </tr>
        <tr>
          <td>
            <input type="radio" name="q4" value="1"/> 2            
          </td>
          <td>
            <input type="radio" name="q4" value="2"/> 1
          </td>
        </tr>
        <tr>
          <td>
            <input type="radio" name="q4" value="3"/> 3
          </td>
          <td>
            <input type="radio" name="q4" value="1"/> None
          </td>
        </tr>
        <tr>
          <td colspan="2">
          <h3>Q 5: Correct syntex of CSS rule:</h3>
          </td>
        </tr>
        <tr>
          <td>
            <input type="radio" name="q5" value="1"/> 
            selector_name {
              proterty_name; 
            }          
          </td>
          <td>
            <input type="radio" name="q5" value="2"/>
            selector_name {
              proterty_name : property_value;
            }
          </td>
        </tr>
        <tr>
          <td>
            <input type="radio" name="q5" value="3"/> 
            selector_name {
              proterty_value; 
            }
          </td>
          <td>
            <input type="radio" name="q5" value="4"/> None
          </td>
        </tr>
        <tr>
          <td colspan="2">
            <hr>
            <hr>
          </td>
        </tr>
        <tr>
          <td>
            <input type="submit" name="submit" value="Done">
            <input type="reset" value="Reset">
            
          </td>
        </tr>
      </table>
    </center>
  </form>
</body>
</html>