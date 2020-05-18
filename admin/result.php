<?php
$result = $_REQUEST["result"];

switch($result){
    case 'done': ?>
        <div class="result-container">
            <p>Added successfully!</p>
            <br>
            <form>
	            <input type="button" class="backbutton" value="Back" onClick="javascript:history.go(-1)"/>
            </form>
        </div>
    <?php
    break;
    default: include('pages/home.php');
  };
//header("Location:".$base_url."?page=new-admin&result=done");