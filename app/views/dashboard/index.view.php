<h1>Index Dashboard</h1>
<?php
if ($data){
   foreach ($data as $key=>$val){
       echo $key . ': ' .$val . '<br>';
   }
}
?>

