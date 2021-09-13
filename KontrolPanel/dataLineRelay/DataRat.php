<?php

$DataRat = getOutputBoardById('3');
$Button_Rat = null;
if ($DataRat) {
    while ($Baris_Rat = $DataRat->fetch_assoc()) {
        if ($Baris_Rat["state"] == "1"){
            $button_checked = "checked";
        }
        else {
            $button_checked = "";
        }
        $Button_Rat .=  '<a onclick="deleteOutput(this)" href="javascript:void(0);" id="' . '"></a></h4><label class="switch"><input type="checkbox" onchange="updateOutput(this)" id="' . $Baris_Rat["id"] . '" ' . $button_checked . '><span class="slider"></span></label>';
        
    }
}
$DataRat2 = getOutputBoardById('9');
$Button_Rat2 = null;
if ($DataRat2) {
    while ($Baris_Rat2 = $DataRat2->fetch_assoc()) {
        if ($Baris_Rat2["state"] == "1"){
            $button_checked2 = "checked";
        }
        else {
            $button_checked2 = "";
        }
        $Button_Rat2 .=  '<a onclick="deleteOutput(this)" href="javascript:void(0);" id="' . '"></a></h4><label class="switch"><input type="checkbox" onchange="updateOutput(this)" id="' . $Baris_Rat2["id"] . '" ' . $button_checked2 . '><span class="slider"></span></label>';
        
    }
}
$DataRat3 = getOutputBoardById('15');
$Button_Rat3 = null;
if ($DataRat3) {
    while ($Baris_Rat3 = $DataRat3->fetch_assoc()) {
        if ($Baris_Rat3["state"] == "1"){
            $button_checked3 = "checked";
        }
        else {
            $button_checked3 = "";
        }
        $Button_Rat3 .=  '<a onclick="deleteOutput(this)" href="javascript:void(0);" id="' . '"></a></h4><label class="switch"><input type="checkbox" onchange="updateOutput(this)" id="' . $Baris_Rat3["id"] . '" ' . $button_checked3 . '><span class="slider"></span></label>';
        
    }
}
$DataRat4 = getOutputBoardById('21');
$Button_Rat4 = null;
if ($DataRat4) {
    while ($Baris_Rat4 = $DataRat4->fetch_assoc()) {
        if ($Baris_Rat4["state"] == "1"){
            $button_checked4 = "checked";
        }
        else {
            $button_checked4 = "";
        }
        $Button_Rat4 .=  '<a onclick="deleteOutput(this)" href="javascript:void(0);" id="' . '"></a></h4><label class="switch"><input type="checkbox" onchange="updateOutput(this)" id="' . $Baris_Rat4["id"] . '" ' . $button_checked4 . '><span class="slider"></span></label>';
        
    }
}
$DataRat5 = getOutputBoardById('27');
$Button_Rat5 = null;
if ($DataRat5) {
    while ($Baris_Rat5 = $DataRat5->fetch_assoc()) {
        if ($Baris_Rat5["state"] == "1"){
            $button_checked5 = "checked";
        }
        else {
            $button_checked5 = "";
        }
        $Button_Rat5 .=  '<a onclick="deleteOutput(this)" href="javascript:void(0);" id="' . '"></a></h4><label class="switch"><input type="checkbox" onchange="updateOutput(this)" id="' . $Baris_Rat5["id"] . '" ' . $button_checked5 . '><span class="slider"></span></label>';
        
    }
}
$DataRat6 = getOutputBoardById('33');
$Button_Rat6 = null;
if ($DataRat6) {
    while ($Baris_Rat6 = $DataRat6->fetch_assoc()) {
        if ($Baris_Rat6["state"] == "1"){
            $button_checked6 = "checked";
        }
        else {
            $button_checked6 = "";
        }
        $Button_Rat6 .=  '<a onclick="deleteOutput(this)" href="javascript:void(0);" id="' . '"></a></h4><label class="switch"><input type="checkbox" onchange="updateOutput(this)" id="' . $Baris_Rat6["id"] . '" ' . $button_checked6 . '><span class="slider"></span></label>';
        
    }
}
$DataRat7 = getOutputBoardById('39');
$Button_Rat7 = null;
if ($DataRat7) {
    while ($Baris_Rat7 = $DataRat7->fetch_assoc()) {
        if ($Baris_Rat7["state"] == "1"){
            $button_checked7 = "checked";
        }
        else {
            $button_checked7 = "";
        }
        $Button_Rat7 .=  '<a onclick="deleteOutput(this)" href="javascript:void(0);" id="' . '"></a></h4><label class="switch"><input type="checkbox" onchange="updateOutput(this)" id="' . $Baris_Rat7["id"] . '" ' . $button_checked7 . '><span class="slider"></span></label>';
        
    }
}
$DataRat8 = getOutputBoardById('45');
$Button_Rat8 = null;
if ($DataRat8) {
    while ($Baris_Rat8 = $DataRat8->fetch_assoc()) {
        if ($Baris_Rat8["state"] == "1"){
            $button_checked8 = "checked";
        }
        else {
            $button_checked8 = "";
        }
        $Button_Rat8 .=  '<a onclick="deleteOutput(this)" href="javascript:void(0);" id="' . '"></a></h4><label class="switch"><input type="checkbox" onchange="updateOutput(this)" id="' . $Baris_Rat8["id"] . '" ' . $button_checked8 . '><span class="slider"></span></label>';
        
    }
}
$DataRat9 = getOutputBoardById('51');
$Button_Rat9 = null;
if ($DataRat9) {
    while ($Baris_Rat9 = $DataRat9->fetch_assoc()) {
        if ($Baris_Rat9["state"] == "1"){
            $button_checked9 = "checked";
        }
        else {
            $button_checked9 = "";
        }
        $Button_Rat9 .=  '<a onclick="deleteOutput(this)" href="javascript:void(0);" id="' . '"></a></h4><label class="switch"><input type="checkbox" onchange="updateOutput(this)" id="' . $Baris_Rat9["id"] . '" ' . $button_checked9 . '><span class="slider"></span></label>';
        
    }
}
$DataRat10 = getOutputBoardById('57');
$Button_Rat10 = null;
if ($DataRat10) {
    while ($Baris_Rat10 = $DataRat10->fetch_assoc()) {
        if ($Baris_Rat10["state"] == "1"){
            $button_checked10 = "checked";
        }
        else {
            $button_checked10 = "";
        }
        $Button_Rat10 .=  '<a onclick="deleteOutput(this)" href="javascript:void(0);" id="' . '"></a></h4><label class="switch"><input type="checkbox" onchange="updateOutput(this)" id="' . $Baris_Rat10["id"] . '" ' . $button_checked10 . '><span class="slider"></span></label>';
        
    }
}
$DataRat11 = getOutputBoardById('63');
$Button_Rat11 = null;
if ($DataRat11) {
    while ($Baris_Rat11 = $DataRat11->fetch_assoc()) {
        if ($Baris_Rat11["state"] == "1"){
            $button_checked11 = "checked";
        }
        else {
            $button_checked11 = "";
        }
        $Button_Rat11 .=  '<a onclick="deleteOutput(this)" href="javascript:void(0);" id="' . '"></a></h4><label class="switch"><input type="checkbox" onchange="updateOutput(this)" id="' . $Baris_Rat11["id"] . '" ' . $button_checked11. '><span class="slider"></span></label>';
        
    }
}
?>
