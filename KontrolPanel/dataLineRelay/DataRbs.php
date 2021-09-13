<?php

$DataRbs = getOutputBoardById('5');
$Button_Rbs = null;
if ($DataRbs) {
    while ($Baris_Rbs = $DataRbs->fetch_assoc()) {
        if ($Baris_Rbs["state"] == "1"){
            $button_checked = "checked";
        }
        else {
            $button_checked = "";
        }
        $Button_Rbs .=  '<a onclick="deleteOutput(this)" href="javascript:void(0);" id="' . '"></a></h4><label class="switch"><input type="checkbox" onchange="updateOutput(this)" id="' . $Baris_Rbs["id"] . '" ' . $button_checked . '><span class="slider"></span></label>';
        
    }
}
$DataRbs2 = getOutputBoardById('11');
$Button_Rbs2 = null;
if ($DataRbs2) {
    while ($Baris_Rbs2 = $DataRbs2->fetch_assoc()) {
        if ($Baris_Rbs2["state"] == "1"){
            $button_checked2 = "checked";
        }
        else {
            $button_checked2 = "";
        }
        $Button_Rbs2 .=  '<a onclick="deleteOutput(this)" href="javascript:void(0);" id="' . '"></a></h4><label class="switch"><input type="checkbox" onchange="updateOutput(this)" id="' . $Baris_Rbs2["id"] . '" ' . $button_checked2 . '><span class="slider"></span></label>';
        
    }
}
$DataRbs3 = getOutputBoardById('17');
$Button_Rbs3 = null;
if ($DataRbs3) {
    while ($Baris_Rbs3 = $DataRbs3->fetch_assoc()) {
        if ($Baris_Rbs3["state"] == "1"){
            $button_checked3 = "checked";
        }
        else {
            $button_checked3 = "";
        }
        $Button_Rbs3 .=  '<a onclick="deleteOutput(this)" href="javascript:void(0);" id="' . '"></a></h4><label class="switch"><input type="checkbox" onchange="updateOutput(this)" id="' . $Baris_Rbs3["id"] . '" ' . $button_checked3 . '><span class="slider"></span></label>';
        
    }
}
$DataRbs4 = getOutputBoardById('23');
$Button_Rbs4 = null;
if ($DataRbs4) {
    while ($Baris_Rbs4 = $DataRbs4->fetch_assoc()) {
        if ($Baris_Rbs4["state"] == "1"){
            $button_checked4 = "checked";
        }
        else {
            $button_checked4 = "";
        }
        $Button_Rbs4 .=  '<a onclick="deleteOutput(this)" href="javascript:void(0);" id="' . '"></a></h4><label class="switch"><input type="checkbox" onchange="updateOutput(this)" id="' . $Baris_Rbs4["id"] . '" ' . $button_checked4 . '><span class="slider"></span></label>';
        
    }
}
$DataRbs5 = getOutputBoardById('29');
$Button_Rbs5 = null;
if ($DataRbs5) {
    while ($Baris_Rbs5 = $DataRbs5->fetch_assoc()) {
        if ($Baris_Rbs5["state"] == "1"){
            $button_checked5 = "checked";
        }
        else {
            $button_checked5 = "";
        }
        $Button_Rbs5 .=  '<a onclick="deleteOutput(this)" href="javascript:void(0);" id="' . '"></a></h4><label class="switch"><input type="checkbox" onchange="updateOutput(this)" id="' . $Baris_Rbs5["id"] . '" ' . $button_checked5 . '><span class="slider"></span></label>';
        
    }
}
$DataRbs6 = getOutputBoardById('35');
$Button_Rbs6 = null;
if ($DataRbs6) {
    while ($Baris_Rbs6 = $DataRbs6->fetch_assoc()) {
        if ($Baris_Rbs6["state"] == "1"){
            $button_checked6 = "checked";
        }
        else {
            $button_checked6 = "";
        }
        $Button_Rbs6 .=  '<a onclick="deleteOutput(this)" href="javascript:void(0);" id="' . '"></a></h4><label class="switch"><input type="checkbox" onchange="updateOutput(this)" id="' . $Baris_Rbs6["id"] . '" ' . $button_checked6 . '><span class="slider"></span></label>';
        
    }
}
$DataRbs7 = getOutputBoardById('41');
$Button_Rbs7 = null;
if ($DataRbs7) {
    while ($Baris_Rbs7 = $DataRbs7->fetch_assoc()) {
        if ($Baris_Rbs7["state"] == "1"){
            $button_checked7 = "checked";
        }
        else {
            $button_checked7 = "";
        }
        $Button_Rbs7 .=  '<a onclick="deleteOutput(this)" href="javascript:void(0);" id="' . '"></a></h4><label class="switch"><input type="checkbox" onchange="updateOutput(this)" id="' . $Baris_Rbs7["id"] . '" ' . $button_checked7 . '><span class="slider"></span></label>';
        
    }
}
$DataRbs8 = getOutputBoardById('47');
$Button_Rbs8 = null;
if ($DataRbs8) {
    while ($Baris_Rbs8 = $DataRbs8->fetch_assoc()) {
        if ($Baris_Rbs8["state"] == "1"){
            $button_checked8 = "checked";
        }
        else {
            $button_checked8 = "";
        }
        $Button_Rbs8 .=  '<a onclick="deleteOutput(this)" href="javascript:void(0);" id="' . '"></a></h4><label class="switch"><input type="checkbox" onchange="updateOutput(this)" id="' . $Baris_Rbs8["id"] . '" ' . $button_checked8 . '><span class="slider"></span></label>';
        
    }
}
$DataRbs9 = getOutputBoardById('53');
$Button_Rbs9 = null;
if ($DataRbs9) {
    while ($Baris_Rbs9 = $DataRbs9->fetch_assoc()) {
        if ($Baris_Rbs9["state"] == "1"){
            $button_checked9 = "checked";
        }
        else {
            $button_checked9 = "";
        }
        $Button_Rbs9 .=  '<a onclick="deleteOutput(this)" href="javascript:void(0);" id="' . '"></a></h4><label class="switch"><input type="checkbox" onchange="updateOutput(this)" id="' . $Baris_Rbs9["id"] . '" ' . $button_checked9 . '><span class="slider"></span></label>';
        
    }
}
$DataRbs10 = getOutputBoardById('59');
$Button_Rbs10 = null;
if ($DataRbs10) {
    while ($Baris_Rbs10 = $DataRbs10->fetch_assoc()) {
        if ($Baris_Rbs10["state"] == "1"){
            $button_checked10 = "checked";
        }
        else {
            $button_checked10 = "";
        }
        $Button_Rbs10 .=  '<a onclick="deleteOutput(this)" href="javascript:void(0);" id="' . '"></a></h4><label class="switch"><input type="checkbox" onchange="updateOutput(this)" id="' . $Baris_Rbs10["id"] . '" ' . $button_checked10 . '><span class="slider"></span></label>';
        
    }
}

$DataRbs11 = getOutputBoardById('65');
$Button_Rbs11 = null;
if ($DataRbs11) {
    while ($Baris_Rbs11 = $DataRbs11->fetch_assoc()) {
        if ($Baris_Rbs11["state"] == "1"){
            $button_checked11 = "checked";
        }
        else {
            $button_checked11 = "";
        }
        $Button_Rbs11 .=  '<a onclick="deleteOutput(this)" href="javascript:void(0);" id="' . '"></a></h4><label class="switch"><input type="checkbox" onchange="updateOutput(this)" id="' . $Baris_Rbs11["id"] . '" ' . $button_checked11 . '><span class="slider"></span></label>';
        
    }
}

?>
