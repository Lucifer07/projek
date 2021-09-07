<?php

$DataRb = getOutputBoardById('4');
$Button_Rb = null;
if ($DataRb) {
    while ($Baris_Rb = $DataRb->fetch_assoc()) {
        if ($Baris_Rb["state"] == "1"){
            $button_checked = "checked";
        }
        else {
            $button_checked = "";
        }
        $Button_Rb .=  '<a onclick="deleteOutput(this)" href="javascript:void(0);" id="' . '"></a></h4><label class="switch"><input type="checkbox" onchange="updateOutput(this)" id="' . $Baris_Rb["id"] . '" ' . $button_checked . '><span class="slider"></span></label>';
        
    }
}
$DataRb2 = getOutputBoardById('10');
$Button_Rb2 = null;
if ($DataRb2) {
    while ($Baris_Rb2 = $DataRb2->fetch_assoc()) {
        if ($Baris_Rb2["state"] == "1"){
            $button_checked2 = "checked";
        }
        else {
            $button_checked2 = "";
        }
        $Button_Rb2 .=  '<a onclick="deleteOutput(this)" href="javascript:void(0);" id="' . '"></a></h4><label class="switch"><input type="checkbox" onchange="updateOutput(this)" id="' . $Baris_Rb2["id"] . '" ' . $button_checked2 . '><span class="slider"></span></label>';
        
    }
}
$DataRb3 = getOutputBoardById('16');
$Button_Rb3 = null;
if ($DataRb3) {
    while ($Baris_Rb3 = $DataRb3->fetch_assoc()) {
        if ($Baris_Rb3["state"] == "1"){
            $button_checked3 = "checked";
        }
        else {
            $button_checked3 = "";
        }
        $Button_Rb3 .=  '<a onclick="deleteOutput(this)" href="javascript:void(0);" id="' . '"></a></h4><label class="switch"><input type="checkbox" onchange="updateOutput(this)" id="' . $Baris_Rb3["id"] . '" ' . $button_checked3 . '><span class="slider"></span></label>';
        
    }
}
$DataRb4 = getOutputBoardById('22');
$Button_Rb4 = null;
if ($DataRb4) {
    while ($Baris_Rb4 = $DataRb4->fetch_assoc()) {
        if ($Baris_Rb4["state"] == "1"){
            $button_checked4 = "checked";
        }
        else {
            $button_checked4 = "";
        }
        $Button_Rb4 .=  '<a onclick="deleteOutput(this)" href="javascript:void(0);" id="' . '"></a></h4><label class="switch"><input type="checkbox" onchange="updateOutput(this)" id="' . $Baris_Rb4["id"] . '" ' . $button_checked4 . '><span class="slider"></span></label>';
        
    }
}
$DataRb5 = getOutputBoardById('28');
$Button_Rb5 = null;
if ($DataRb5) {
    while ($Baris_Rb5 = $DataRb5->fetch_assoc()) {
        if ($Baris_Rb5["state"] == "1"){
            $button_checked5 = "checked";
        }
        else {
            $button_checked5 = "";
        }
        $Button_Rb5 .=  '<a onclick="deleteOutput(this)" href="javascript:void(0);" id="' . '"></a></h4><label class="switch"><input type="checkbox" onchange="updateOutput(this)" id="' . $Baris_Rb5["id"] . '" ' . $button_checked5 . '><span class="slider"></span></label>';
        
    }
}
$DataRb6 = getOutputBoardById('34');
$Button_Rb6 = null;
if ($DataRb6) {
    while ($Baris_Rb6 = $DataRb6->fetch_assoc()) {
        if ($Baris_Rb6["state"] == "1"){
            $button_checked6 = "checked";
        }
        else {
            $button_checked6 = "";
        }
        $Button_Rb6 .=  '<a onclick="deleteOutput(this)" href="javascript:void(0);" id="' . '"></a></h4><label class="switch"><input type="checkbox" onchange="updateOutput(this)" id="' . $Baris_Rb6["id"] . '" ' . $button_checked6 . '><span class="slider"></span></label>';
        
    }
}
$DataRb7 = getOutputBoardById('40');
$Button_Rb7 = null;
if ($DataRb7) {
    while ($Baris_Rb7 = $DataRb7->fetch_assoc()) {
        if ($Baris_Rb7["state"] == "1"){
            $button_checked7 = "checked";
        }
        else {
            $button_checked7 = "";
        }
        $Button_Rb7 .=  '<a onclick="deleteOutput(this)" href="javascript:void(0);" id="' . '"></a></h4><label class="switch"><input type="checkbox" onchange="updateOutput(this)" id="' . $Baris_Rb7["id"] . '" ' . $button_checked7 . '><span class="slider"></span></label>';
        
    }
}
$DataRb8 = getOutputBoardById('46');
$Button_Rb8 = null;
if ($DataRb8) {
    while ($Baris_Rb8 = $DataRb8->fetch_assoc()) {
        if ($Baris_Rb8["state"] == "1"){
            $button_checked8 = "checked";
        }
        else {
            $button_checked8 = "";
        }
        $Button_Rb8 .=  '<a onclick="deleteOutput(this)" href="javascript:void(0);" id="' . '"></a></h4><label class="switch"><input type="checkbox" onchange="updateOutput(this)" id="' . $Baris_Rb8["id"] . '" ' . $button_checked8 . '><span class="slider"></span></label>';
        
    }
}
$DataRb9 = getOutputBoardById('52');
$Button_Rb9 = null;
if ($DataRb9) {
    while ($Baris_Rb9 = $DataRb9->fetch_assoc()) {
        if ($Baris_Rb9["state"] == "1"){
            $button_checked9 = "checked";
        }
        else {
            $button_checked9 = "";
        }
        $Button_Rb9 .=  '<a onclick="deleteOutput(this)" href="javascript:void(0);" id="' . '"></a></h4><label class="switch"><input type="checkbox" onchange="updateOutput(this)" id="' . $Baris_Rb9["id"] . '" ' . $button_checked9 . '><span class="slider"></span></label>';
        
    }
}
$DataRb10 = getOutputBoardById('58');
$Button_Rb10 = null;
if ($DataRb10) {
    while ($Baris_Rb10 = $DataRb10->fetch_assoc()) {
        if ($Baris_Rb10["state"] == "1"){
            $button_checked10 = "checked";
        }
        else {
            $button_checked10 = "";
        }
        $Button_Rb10 .=  '<a onclick="deleteOutput(this)" href="javascript:void(0);" id="' . '"></a></h4><label class="switch"><input type="checkbox" onchange="updateOutput(this)" id="' . $Baris_Rb10["id"] . '" ' . $button_checked10 . '><span class="slider"></span></label>';
        
    }
}

$DataRb11 = getOutputBoardById('64');
$Button_Rb11 = null;
if ($DataRb11) {
    while ($Baris_Rb11 = $DataRb11->fetch_assoc()) {
        if ($Baris_Rb11["state"] == "1"){
            $button_checked11 = "checked";
        }
        else {
            $button_checked11 = "";
        }
        $Button_Rb11 .=  '<a onclick="deleteOutput(this)" href="javascript:void(0);" id="' . '"></a></h4><label class="switch"><input type="checkbox" onchange="updateOutput(this)" id="' . $Baris_Rb11["id"] . '" ' . $button_checked11 . '><span class="slider"></span></label>';
        
    }
}

?>
