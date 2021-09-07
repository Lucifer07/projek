<?php

$DataRbt = getOutputBoardById('6');
$Button_Rbt = null;
if ($DataRbt) {
    while ($Baris_Rbt = $DataRbt->fetch_assoc()) {
        if ($Baris_Rbt["state"] == "1"){
            $button_checked = "checked";
        }
        else {
            $button_checked = "";
        }
        $Button_Rbt .=  '<a onclick="deleteOutput(this)" href="javascript:void(0);" id="' . '"></a></h4><label class="switch"><input type="checkbox" onchange="updateOutput(this)" id="' . $Baris_Rbt["id"] . '" ' . $button_checked . '><span class="slider"></span></label>';
        
    }
}
$DataRbt2 = getOutputBoardById('12');
$Button_Rbt2 = null;
if ($DataRbt2) {
    while ($Baris_Rbt2 = $DataRbt2->fetch_assoc()) {
        if ($Baris_Rbt2["state"] == "1"){
            $button_checked2 = "checked";
        }
        else {
            $button_checked2 = "";
        }
        $Button_Rbt2 .=  '<a onclick="deleteOutput(this)" href="javascript:void(0);" id="' . '"></a></h4><label class="switch"><input type="checkbox" onchange="updateOutput(this)" id="' . $Baris_Rbt2["id"] . '" ' . $button_checked2 . '><span class="slider"></span></label>';
        
    }
}
$DataRbt3 = getOutputBoardById('18');
$Button_Rbt3 = null;
if ($DataRbt3) {
    while ($Baris_Rbt3 = $DataRbt3->fetch_assoc()) {
        if ($Baris_Rbt3["state"] == "1"){
            $button_checked3 = "checked";
        }
        else {
            $button_checked3 = "";
        }
        $Button_Rbt3 .=  '<a onclick="deleteOutput(this)" href="javascript:void(0);" id="' . '"></a></h4><label class="switch"><input type="checkbox" onchange="updateOutput(this)" id="' . $Baris_Rbt3["id"] . '" ' . $button_checked3 . '><span class="slider"></span></label>';
        
    }
}
$DataRbt4 = getOutputBoardById('24');
$Button_Rbt4 = null;
if ($DataRbt4) {
    while ($Baris_Rbt4 = $DataRbt4->fetch_assoc()) {
        if ($Baris_Rbt4["state"] == "1"){
            $button_checked4 = "checked";
        }
        else {
            $button_checked4 = "";
        }
        $Button_Rbt4 .=  '<a onclick="deleteOutput(this)" href="javascript:void(0);" id="' . '"></a></h4><label class="switch"><input type="checkbox" onchange="updateOutput(this)" id="' . $Baris_Rbt4["id"] . '" ' . $button_checked4 . '><span class="slider"></span></label>';
        
    }
}
$DataRbt5 = getOutputBoardById('30');
$Button_Rbt5 = null;
if ($DataRbt5) {
    while ($Baris_Rbt5 = $DataRbt5->fetch_assoc()) {
        if ($Baris_Rbt5["state"] == "1"){
            $button_checked5 = "checked";
        }
        else {
            $button_checked5 = "";
        }
        $Button_Rbt5 .=  '<a onclick="deleteOutput(this)" href="javascript:void(0);" id="' . '"></a></h4><label class="switch"><input type="checkbox" onchange="updateOutput(this)" id="' . $Baris_Rbt5["id"] . '" ' . $button_checked5 . '><span class="slider"></span></label>';
        
    }
}
$DataRbt6 = getOutputBoardById('36');
$Button_Rbt6 = null;
if ($DataRbt6) {
    while ($Baris_Rbt6 = $DataRbt6->fetch_assoc()) {
        if ($Baris_Rbt6["state"] == "1"){
            $button_checked6 = "checked";
        }
        else {
            $button_checked6 = "";
        }
        $Button_Rbt6 .=  '<a onclick="deleteOutput(this)" href="javascript:void(0);" id="' . '"></a></h4><label class="switch"><input type="checkbox" onchange="updateOutput(this)" id="' . $Baris_Rbt6["id"] . '" ' . $button_checked6 . '><span class="slider"></span></label>';
        
    }
}
$DataRbt7 = getOutputBoardById('42');
$Button_Rbt7 = null;
if ($DataRbt7) {
    while ($Baris_Rbt7 = $DataRbt7->fetch_assoc()) {
        if ($Baris_Rbt7["state"] == "1"){
            $button_checked7 = "checked";
        }
        else {
            $button_checked7 = "";
        }
        $Button_Rbt7 .=  '<a onclick="deleteOutput(this)" href="javascript:void(0);" id="' . '"></a></h4><label class="switch"><input type="checkbox" onchange="updateOutput(this)" id="' . $Baris_Rbt7["id"] . '" ' . $button_checked7 . '><span class="slider"></span></label>';
        
    }
}
$DataRbt8 = getOutputBoardById('48');
$Button_Rbt8 = null;
if ($DataRbt8) {
    while ($Baris_Rbt8 = $DataRbt8->fetch_assoc()) {
        if ($Baris_Rbt8["state"] == "1"){
            $button_checked8 = "checked";
        }
        else {
            $button_checked8 = "";
        }
        $Button_Rbt8 .=  '<a onclick="deleteOutput(this)" href="javascript:void(0);" id="' . '"></a></h4><label class="switch"><input type="checkbox" onchange="updateOutput(this)" id="' . $Baris_Rbt8["id"] . '" ' . $button_checked8 . '><span class="slider"></span></label>';
        
    }
}
$DataRbt9 = getOutputBoardById('54');
$Button_Rbt9 = null;
if ($DataRbt9) {
    while ($Baris_Rbt9 = $DataRbt9->fetch_assoc()) {
        if ($Baris_Rbt9["state"] == "1"){
            $button_checked9 = "checked";
        }
        else {
            $button_checked9 = "";
        }
        $Button_Rbt9 .=  '<a onclick="deleteOutput(this)" href="javascript:void(0);" id="' . '"></a></h4><label class="switch"><input type="checkbox" onchange="updateOutput(this)" id="' . $Baris_Rbt9["id"] . '" ' . $button_checked9 . '><span class="slider"></span></label>';
        
    }
}
$DataRbt10 = getOutputBoardById('60');
$Button_Rbt10 = null;
if ($DataRbt10) {
    while ($Baris_Rbt10 = $DataRbt10->fetch_assoc()) {
        if ($Baris_Rbt10["state"] == "1"){
            $button_checked10 = "checked";
        }
        else {
            $button_checked10 = "";
        }
        $Button_Rbt10 .=  '<a onclick="deleteOutput(this)" href="javascript:void(0);" id="' . '"></a></h4><label class="switch"><input type="checkbox" onchange="updateOutput(this)" id="' . $Baris_Rbt10["id"] . '" ' . $button_checked10 . '><span class="slider"></span></label>';
        
    }
}

$DataRbt11 = getOutputBoardById('66');
$Button_Rbt11 = null;
if ($DataRbt11) {
    while ($Baris_Rbt11 = $DataRbt11->fetch_assoc()) {
        if ($Baris_Rbt11["state"] == "1"){
            $button_checked11 = "checked";
        }
        else {
            $button_checked11 = "";
        }
        $Button_Rbt11 .=  '<a onclick="deleteOutput(this)" href="javascript:void(0);" id="' . '"></a></h4><label class="switch"><input type="checkbox" onchange="updateOutput(this)" id="' . $Baris_Rbt11["id"] . '" ' . $button_checked11 . '><span class="slider"></span></label>';
        
    }
}

?>
