<?php
include "connection.php";

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

<svg  id="mouseFollow1" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev/svgjs" viewBox="0 0 600 600"><path d="M298.6526794433594,431.1377258300781C243.41315587361655,409.7305399576823,129.94011688232422,309.2814305623372,122.60478973388672,249.70059204101562C115.26946258544922,190.119753519694,192.51496760050455,90.56886037190755,254.64071655273438,73.65269470214844C316.7664655049642,56.73652903238933,462.12574768066406,97.45509592692056,495.3592834472656,148.20359802246094C528.5928192138672,198.9521001180013,486.8263651529948,330.9880193074544,454.04193115234375,378.1437072753906C421.2574971516927,425.29939524332684,353.89220301310223,452.54491170247394,298.6526794433594,431.1377258300781C243.41315587361655,409.7305399576823,129.94011688232422,309.2814305623372,122.60478973388672,249.70059204101562" fill="url(&quot;#SvgjsLinearGradient1000&quot;)" fill-opacity="1"></path><defs><linearGradient id="SvgjsLinearGradient1000"><stop stop-color="#aabbbb" offset="0"></stop><stop stop-color="#ebdfd8" offset="1"></stop></linearGradient></defs></svg>
<svg id="mouseFollow2" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev/svgjs" viewBox="0 0 600 600"><path d="M143.2634735107422,392.5149841308594C120.05988311767578,356.73653920491535,109.58083852132162,286.82634862263996,148.65269470214844,237.12574768066406C187.72455088297525,187.42514673868814,322.9041926066081,83.23353576660156,377.6946105957031,94.3113784790039C432.48502858479816,105.38922119140625,492.3652648925781,244.01196416219076,477.39520263671875,303.5928039550781C462.4251403808594,363.1736437479655,343.56285858154297,436.97605387369794,287.8742370605469,451.7964172363281C232.18561553955078,466.6167805989583,166.4670639038086,428.2934290568034,143.2634735107422,392.5149841308594C120.05988311767578,356.73653920491535,109.58083852132162,286.82634862263996,148.65269470214844,237.12574768066406" fill="url(&quot;#SvgjsLinearGradient1001&quot;)" transform="matrix(1,0,0,1,-1.14697265625,25.720199584960938)"></path><defs><linearGradient id="SvgjsLinearGradient1001"><stop stop-color="#5a7069" offset="0"></stop><stop stop-color="#aabbbb" offset="1"></stop></linearGradient></defs></svg>
<svg id="mouseFollow3" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev/svgjs" viewBox="0 0 600 600"><path d="M134.28143310546875,383.5329284667969C107.18562316894531,329.19160715738934,102.2455062866211,235.47904332478842,107.3353271484375,191.31736755371094C112.4251480102539,147.15569178263345,112.57484944661459,119.46107737223308,164.8203582763672,118.56287384033203C217.06586710611978,117.66467030843098,368.86227162679035,126.79640833536783,420.8083801269531,185.9281463623047C472.7544886271159,245.05988438924155,501.64670817057294,418.11377716064453,476.49700927734375,473.3533020019531C451.34731038411456,528.5928268432617,326.9461161295573,532.3353576660156,269.9101867675781,517.3652954101562C212.87425740559897,502.3952331542969,161.3772430419922,437.8742497762044,134.28143310546875,383.5329284667969C107.18562316894531,329.19160715738934,102.2455062866211,235.47904332478842,107.3353271484375,191.31736755371094" fill="url(&quot;#SvgjsLinearGradient1002&quot;)"></path><defs><linearGradient id="SvgjsLinearGradient1002"><stop stop-color="#ef9b80" offset="0"></stop><stop stop-color="#5a7069" offset="1"></stop></linearGradient></defs></svg>
<svg  id="mouseFollow4" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev/svgjs" viewBox="0 0 600 600"><path d="M323.8023986816406,464.3712463378906C280.98802185058594,435.02992757161456,256.43712361653644,338.3233413696289,270.8083801269531,290.1197509765625C285.1796366373698,241.9161605834961,363.32334899902344,165.26946512858072,410.0299377441406,175.1497039794922C456.7365264892578,185.02994283040366,531.4371287027994,300.89819081624347,551.0479125976562,349.40118408203125C570.6586964925131,397.90417734781903,565.5688934326172,447.0059865315755,527.6946411132812,466.16766357421875C489.8203887939453,485.329340616862,366.6167755126953,493.7125651041667,323.8023986816406,464.3712463378906C280.98802185058594,435.02992757161456,256.43712361653644,338.3233413696289,270.8083801269531,290.1197509765625" fill="url(&quot;#SvgjsLinearGradient1003&quot;)" transform="matrix(1,0,0,1,-114.47564697265625,-28.910858154296875)"></path><defs><linearGradient id="SvgjsLinearGradient1003"><stop stop-color="#ebdfd8" offset="0"></stop><stop stop-color="#ef9b80" offset="1"></stop></linearGradient></defs></svg>
    <div class="container">
        <h1>ToDo</h1> 
        <ul>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
              $checked = false;
              if ($row["status"]=="1"){
                $checked = true;
              }
              echo "<a href='edit-task.php?id={$row["id"]}'> 
              <li class='edit-task-li'> 
                <div class='round-checkbox'> <div class='tick'> </div> </div> 
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
    <div class="subcontainer" id="edit-task-container">
          <div class="tab new-task-tab"> <div class="close"></div> <h2>Edit Note</h2> </div>
          <?php
          require "edit-task.php"
          ?>
    </div> 
   
</body>
</html>
<script>
var checked = "<?php echo json_encode($checked); ?>";

console.log(checked)

if (checked == false){
  document.querySelector('.round-checkbox').style.border= "1px solid red";
  console.log(checked)
}

</script>