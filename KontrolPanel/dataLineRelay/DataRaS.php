<?php

$DataRas = getOutputBoardById('2');
$Button_Ras = null;
if ($DataRas) {
    while ($Baris_Ras = $DataRas->fetch_assoc()) {
        if ($Baris_Ras["state"] == "1"){
            $button_checked = "checked";
        }
        else {
            $button_checked = "";
        }
        $Button_Ras .=  '<a onclick="deleteOutput(this)" href="javascript:void(0);" id="' . '"></a></h4><label class="switch"><input type="checkbox" onchange="updateOutput(this)" id="' . $Baris_Ras["id"] . '" ' . $button_checked . '><span class="slider"></span></label>';
        
    }
}
$DataRas2 = getOutputBoardById('8');
$Button_Ras2 = null;
if ($DataRas2) {
    while ($Baris_Ras2 = $DataRas2->fetch_assoc()) {
        if ($Baris_Ras2["state"] == "1"){
            $button_checked2 = "checked";
        }
        else {
            $button_checked2 = "";
        }
        $Button_Ras2 .=  '<a onclick="deleteOutput(this)" href="javascript:void(0);" id="' . '"></a></h4><label class="switch"><input type="checkbox" onchange="updateOutput(this)" id="' . $Baris_Ras2["id"] . '" ' . $button_checked2 . '><span class="slider"></span></label>';
        
    }
}
$DataRas3 = getOutputBoardById('14');
$Button_Ras3 = null;
if ($DataRas3) {
    while ($Baris_Ras3 = $DataRas3->fetch_assoc()) {
        if ($Baris_Ras3["state"] == "1"){
            $button_checked3 = "checked";
        }
        else {
            $button_checked3 = "";
        }
        $Button_Ras3 .=  '<a onclick="deleteOutput(this)" href="javascript:void(0);" id="' . '"></a></h4><label class="switch"><input type="checkbox" onchange="updateOutput(this)" id="' . $Baris_Ras3["id"] . '" ' . $button_checked3 . '><span class="slider"></span></label>';
        
    }
}
$DataRas4 = getOutputBoardById('20');
$Button_Ras4 = null;
if ($DataRas4) {
    while ($Baris_Ras4 = $DataRas4->fetch_assoc()) {
        if ($Baris_Ras4["state"] == "1"){
            $button_checked4 = "checked";
        }
        else {
            $button_checked4 = "";
        }
        $Button_Ras4 .=  '<a onclick="deleteOutput(this)" href="javascript:void(0);" id="' . '"></a></h4><label class="switch"><input type="checkbox" onchange="updateOutput(this)" id="' . $Baris_Ras4["id"] . '" ' . $button_checked4 . '><span class="slider"></span></label>';
        
    }
}
$DataRas5 = getOutputBoardById('26');
$Button_Ras5 = null;
if ($DataRas5) {
    while ($Baris_Ras5 = $DataRas5->fetch_assoc()) {
        if ($Baris_Ras5["state"] == "1"){
            $button_checked5 = "checked";
        }
        else {
            $button_checked5 = "";
        }
        $Button_Ras5 .=  '<a onclick="deleteOutput(this)" href="javascript:void(0);" id="' . '"></a></h4><label class="switch"><input type="checkbox" onchange="updateOutput(this)" id="' . $Baris_Ras5["id"] . '" ' . $button_checked5 . '><span class="slider"></span></label>';
        
    }
}
$DataRas6 = getOutputBoardById('32');
$Button_Ras6 = null;
if ($DataRas6) {
    while ($Baris_Ras6 = $DataRas6->fetch_assoc()) {
        if ($Baris_Ras6["state"] == "1"){
            $button_checked6 = "checked";
        }
        else {
            $button_checked6 = "";
        }
        $Button_Ras6 .=  '<a onclick="deleteOutput(this)" href="javascript:void(0);" id="' . '"></a></h4><label class="switch"><input type="checkbox" onchange="updateOutput(this)" id="' . $Baris_Ras6["id"] . '" ' . $button_checked6 . '><span class="slider"></span></label>';
        
    }
}
$DataRas7 = getOutputBoardById('38');
$Button_Ras7 = null;
if ($DataRas7) {
    while ($Baris_Ras7 = $DataRas7->fetch_assoc()) {
        if ($Baris_Ras7["state"] == "1"){
            $button_checked7 = "checked";
        }
        else {
            $button_checked7 = "";
        }
        $Button_Ras7 .=  '<a onclick="deleteOutput(this)" href="javascript:void(0);" id="' . '"></a></h4><label class="switch"><input type="checkbox" onchange="updateOutput(this)" id="' . $Baris_Ras7["id"] . '" ' . $button_checked7 . '><span class="slider"></span></label>';
        
    }
}
$DataRas8 = getOutputBoardById('44');
$Button_Ras8 = null;
if ($DataRas8) {
    while ($Baris_Ras8 = $DataRas8->fetch_assoc()) {
        if ($Baris_Ras8["state"] == "1"){
            $button_checked8 = "checked";
        }
        else {
            $button_checked8 = "";
        }
        $Button_Ras8 .=  '<a onclick="deleteOutput(this)" href="javascript:void(0);" id="' . '"></a></h4><label class="switch"><input type="checkbox" onchange="updateOutput(this)" id="' . $Baris_Ras8["id"] . '" ' . $button_checked8 . '><span class="slider"></span></label>';
        
    }
}
$DataRas9 = getOutputBoardById('50');
$Button_Ras9 = null;
if ($DataRas9) {
    while ($Baris_Ras9 = $DataRas9->fetch_assoc()) {
        if ($Baris_Ras9["state"] == "1"){
            $button_checked9 = "checked";
        }
        else {
            $button_checked9 = "";
        }
        $Button_Ras9 .=  '<a onclick="deleteOutput(this)" href="javascript:void(0);" id="' . '"></a></h4><label class="switch"><input type="checkbox" onchange="updateOutput(this)" id="' . $Baris_Ras9["id"] . '" ' . $button_checked9 . '><span class="slider"></span></label>';
        
    }
}
$DataRas10 = getOutputBoardById('56');
$Button_Ras10 = null;
if ($DataRas10) {
    while ($Baris_Ras10 = $DataRas10->fetch_assoc()) {
        if ($Baris_Ras10["state"] == "1"){
            $button_checked10 = "checked";
        }
        else {
            $button_checked10 = "";
        }
        $Button_Ras10 .=  '<a onclick="deleteOutput(this)" href="javascript:void(0);" id="' . '"></a></h4><label class="switch"><input type="checkbox" onchange="updateOutput(this)" id="' . $Baris_Ras10["id"] . '" ' . $button_checked10 . '><span class="slider"></span></label>';
        
    }
}
$DataRas11 = getOutputBoardById('62');
$Button_Ras11 = null;
if ($DataRas11) {
    while ($Baris_Ras11 = $DataRas11->fetch_assoc()) {
        if ($Baris_Ras11["state"] == "1"){
            $button_checked11 = "checked";
        }
        else {
            $button_checked11 = "";
        }
        $Button_Ras11 .=  '<a onclick="deleteOutput(this)" href="javascript:void(0);" id="' . '"></a></h4><label class="switch"><input type="checkbox" onchange="updateOutput(this)" id="' . $Baris_Ras11["id"] . '" ' . $button_checked11 . '><span class="slider"></span></label>';
        
    }
}
?>
