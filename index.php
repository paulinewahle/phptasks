<?php
require_once "connection.php";

$sql = "SELECT * FROM tasks";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css" type="text/css"/>
    <script src="script.js"></script>
    <title>To-Do</title>
    
</head>
<body>
<svg  id="mouseFollow1" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev/svgjs" viewBox="0 0 600 600"><path d="M286.5269470214844,517.3652954101562C245.5089848836263,530.3892466227213,192.96407572428384,503.5928192138672,161.67665100097656,476.94610595703125C130.38922627766928,450.2993927001953,96.1077880859375,401.1975911458333,98.80239868164062,357.4850158691406C101.49700927734375,313.77244059244794,142.0658721923828,242.9640655517578,177.8443145751953,214.670654296875C213.6227569580078,186.3772430419922,275.44909922281903,184.5808359781901,313.4730529785156,187.72454833984375C351.4970067342122,190.8682607014974,390.26947530110675,198.35328674316406,405.988037109375,233.53292846679688C421.70659891764325,268.7125701904297,427.6946055094401,351.49700419108075,407.784423828125,398.8023986816406C387.8742421468099,446.1077931722005,327.54490915934247,504.3413441975911,286.5269470214844,517.3652954101562C245.5089848836263,530.3892466227213,192.96407572428384,503.5928192138672,161.67665100097656,476.94610595703125" fill="url(&quot;#SvgjsRadialGradient1000&quot;)" fill-opacity="1" stroke-width="0" stroke="hsl(340, 45%, 30%)"></path><defs><radialGradient id="SvgjsRadialGradient1000" r="0.5"><stop stop-color="hsl(17, 94%, 52%)" offset="0"></stop><stop stop-color="#e9a949" offset="1"></stop></radialGradient></defs></svg>
<svg  id="mouseFollow2" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev/svgjs" viewBox="0 0 600 600"><path d="M299.101806640625,460.7784423828125C261.0778528849284,433.5329335530599,196.85628255208334,429.34132130940753,165.2694549560547,393.4131774902344C133.68262736002603,357.4850336710612,92.21556854248047,292.3652687072754,109.58084106445312,245.20957946777344C126.94611358642578,198.05389022827148,213.17366536458334,121.85628763834636,269.4610900878906,110.47904205322266C325.74851481119794,99.10179646809895,414.2215576171875,117.51497014363608,447.3053894042969,176.94610595703125C480.38922119140625,236.37724177042642,476.9461161295573,403.7425028483073,467.9640808105469,467.06585693359375C458.98204549153644,530.3892110188802,421.556889851888,557.9341328938802,393.4131774902344,556.88623046875C365.26946512858075,555.8383280436198,337.1257603963216,488.0239512125651,299.101806640625,460.7784423828125C261.0778528849284,433.5329335530599,196.85628255208334,429.34132130940753,165.2694549560547,393.4131774902344" fill="url(&quot;#SvgjsRadialGradient1001&quot;)" transform="matrix(1,0,0,1,10.205703735351562,-32.10472869873047)"></path><defs><radialGradient id="SvgjsRadialGradient1001"><stop stop-color="#b56a33" offset="0"></stop><stop stop-color="#deb76f" offset="1"></stop></radialGradient></defs></svg>
<svg id="mouseFollow3" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev/svgjs" viewBox="0 0 600 600"><path d="M134.28143310546875,383.5329284667969C107.18562316894531,329.19160715738934,102.2455062866211,235.47904332478842,107.3353271484375,191.31736755371094C112.4251480102539,147.15569178263345,112.57484944661459,119.46107737223308,164.8203582763672,118.56287384033203C217.06586710611978,117.66467030843098,368.86227162679035,126.79640833536783,420.8083801269531,185.9281463623047C472.7544886271159,245.05988438924155,501.64670817057294,418.11377716064453,476.49700927734375,473.3533020019531C451.34731038411456,528.5928268432617,326.9461161295573,532.3353576660156,269.9101867675781,517.3652954101562C212.87425740559897,502.3952331542969,161.3772430419922,437.8742497762044,134.28143310546875,383.5329284667969C107.18562316894531,329.19160715738934,102.2455062866211,235.47904332478842,107.3353271484375,191.31736755371094" fill="url(&quot;#SvgjsLinearGradient1002&quot;)"></path><defs><linearGradient id="SvgjsLinearGradient1002"><stop stop-color="#ef9b80" offset="0"></stop><stop stop-color="#5a7069" offset="1"></stop></linearGradient></defs></svg>
<svg  id="mouseFollow4" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev/svgjs" viewBox="0 0 600 600"><path d="M333.6826477050781,495.8083801269531C299.101811726888,464.670654296875,253.29341634114584,432.4850438435872,227.69461059570312,389.82037353515625C202.0958048502604,347.1557032267253,172.30538431803384,291.3173662821452,180.08981323242188,239.8203582763672C187.8742421468099,188.3233502705892,228.1436971028646,107.33533096313477,274.40118408203125,80.83832550048828C320.65867106119794,54.3413200378418,414.2215576171875,63.32335535685222,457.6347351074219,80.83832550048828C501.04791259765625,98.35329564412434,520.0598907470703,129.3413200378418,534.8802490234375,185.9281463623047C549.7006072998047,242.51497268676758,563.1736551920573,355.2395197550456,546.556884765625,420.3592834472656C529.9401143391927,485.47904713948566,470.6586659749349,564.0718790690104,435.17962646484375,576.646728515625C399.7005869547526,589.2215779622396,368.26348368326825,526.9461059570312,333.6826477050781,495.8083801269531C299.101811726888,464.670654296875,253.29341634114584,432.4850438435872,227.69461059570312,389.82037353515625" fill="url(&quot;#SvgjsRadialGradient1002&quot;)" transform="matrix(1,0,0,1,-66.51991271972656,-21.232879638671875)"></path><defs><radialGradient id="SvgjsRadialGradient1002" r="0.7"><stop stop-color="#e2733c" offset="0"></stop><stop stop-color="#e9a949" offset="1"></stop></radialGradient></defs></svg>
    <div class="container">
        <h1>ToDo</h1> 
        <ul>
        <!-- <script>
        window.onload = function() {
            if (  == 1){
                document.querySelector(".round-checkbox").style.border: "2px solid red";
            }
            else{
                document.querySelector(".round-checkbox").style.border: "2px solid blue";
            }
        }
    </script> -->
        <?php
        //!
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              $checked = false;
              if ($row["status"]=="1"){
                $checked = true;
              }
              
              echo "<a href='edit-task.php?id={$row["id"]}'> 
              <li class='edit-task-li'> 
                <div class='round-checkbox'> <div class='tick'> &#10004 </div> </div> 
                {$row ["title"]} {$row ["status"]}
                <div class='li-arrow'> &#10137 </div>
              </li> </a>"; 
            }
          } 
        ?>
        </ul>
        <button id="new-task"> 
            <div class="plus" onclick="revealNewTask()"></div> 
        </button>
    </div>
    <div class="subcontainer" id="new-task-container">
          <div class="tab new-task-tab"> <div class="close" onclick="hideNewTask()"></div> <h2>New Note</h2> </div>
          <?php
          include "new-task.php"
          ?>
    </div>
    <!-- <div class="subcontainer" id="edit-task-container">
          <div class="tab new-task-tab"> <div class="close" onclick="hideEditTask()"></div> <h2>Edit Note</h2> </div>
          <?php
          //include "create-task.php"
          ?>
    </div> -->
    <!-- <div class="subcontainer" id="edit-task-container">
          <div class="tab new-task-tab"> <div class="close"></div> <h2>Edit Note</h2> </div>
          <?php
          require "edit-task.php"
          ?>
    </div>  -->
   
</body>
</html>
<script>
// var checked = "<?php echo json_encode($checked); ?>";
// console.log("here" <?= $checked?>)

console.log(checked)

if (checked == false){
  document.querySelector('.round-checkbox').style.border= "1px solid red";
  console.log(checked)
}

</script>