<?php

$result = getOutputBoardById('1');
$html_buttons = null;
if ($result) {
    while ($row = $result->fetch_assoc()) {
        if ($row["state"] == "1"){
            $button_checked = "checked";
        }
        else {
            $button_checked = "";
        }
        $html_buttons .=  '</h4><label class="switch"><input type="checkbox" onchange="updateOutput(this)" id="' . $row["id"] . '" ' . $button_checked . '><span class="slider"></span></label>';
        
    }
}
$result2 = getOutputBoardById('7');
$html_buttons2 = null;
if ($result2) {
    while ($row2 = $result2->fetch_assoc()) {
        if ($row2["state"] == "1"){
            $button_checked2 = "checked";
        }
        else {
            $button_checked2 = "";
        }
        $html_buttons2 .= '<a onclick="deleteOutput(this)" href="javascript:void(0);" id="' . '"></a></h4><label class="switch"><input type="checkbox" onchange="updateOutput(this)" id="' . $row2["id"] . '" ' . $button_checked2 . '><span class="slider"></span></label>';
        
    }
}
$result3 = getOutputBoardById('13');
$html_buttons3 = null;
if ($result3) {
    while ($row3 = $result3->fetch_assoc()) {
        if ($row3["state"] == "1"){
            $button_checked3 = "checked";
        }
        else {
            $button_checked3 = "";
        }
        $html_buttons3 .= '<a onclick="deleteOutput(this)" href="javascript:void(0);" id="' . '"></a></h4><label class="switch"><input type="checkbox" onchange="updateOutput(this)" id="' . $row3["id"] . '" ' . $button_checked3 . '><span class="slider"></span></label><br>';
        
    }
}
$result4 = getOutputBoardById('19');
$html_buttons4 = null;
if ($result4) {
    while ($row4 = $result4->fetch_assoc()) {
        if ($row4["state"] == "1"){
            $button_checked4 = "checked";
        }
        else {
            $button_checked4 = "";
        }
        $html_buttons4 .= '<a onclick="deleteOutput(this)" href="javascript:void(0);" id="' . '"></a></h4><label class="switch"><input type="checkbox" onchange="updateOutput(this)" id="' . $row4["id"] . '" ' . $button_checked4 . '><span class="slider"></span></label><br>';
        
    }
}
$result5 = getOutputBoardById('25');
$html_buttons5 = null;
if ($result5) {
    while ($row5 = $result5->fetch_assoc()) {
        if ($row5["state"] == "1"){
            $button_checked5 = "checked";
        }
        else {
            $button_checked5 = "";
        }
        $html_buttons5 .=  '<a onclick="deleteOutput(this)" href="javascript:void(0);" id="' . '"></a></h4><label class="switch"><input type="checkbox" onchange="updateOutput(this)" id="' . $row5["id"] . '" ' . $button_checked5 . '><span class="slider"></span></label><br>';
        
    }
}
$result6 = getOutputBoardById('31');
$html_buttons6= null;
if ($result6) {
    while ($row6 = $result6->fetch_assoc()) {
        if ($row6["state"] == "1"){
            $button_checked6 = "checked";
        }
        else {
            $button_checked6 = "";
        }
        $html_buttons6 .=  '<a onclick="deleteOutput(this)" href="javascript:void(0);" id="' . '"></a></h4><label class="switch"><input type="checkbox" onchange="updateOutput(this)" id="' . $row6["id"] . '" ' . $button_checked6 . '><span class="slider"></span></label><br>';
        
    }
}
$result7 = getOutputBoardById('37');
$html_buttons7 = null;
if ($result7) {
    while ($row7 = $result7->fetch_assoc()) {
        if ($row7["state"] == "1"){
            $button_checked7 = "checked";
        }
        else {
            $button_checked7 = "";
        }
        $html_buttons7 .=  '<a onclick="deleteOutput(this)" href="javascript:void(0);" id="' . '"></a></h4><label class="switch"><input type="checkbox" onchange="updateOutput(this)" id="' . $row7["id"] . '" ' . $button_checked7 . '><span class="slider"></span></label><br>';
        
    }
}
$result8 = getOutputBoardById('43');
$html_buttons8 = null;
if ($result8) {
    while ($row8 = $result8->fetch_assoc()) {
        if ($row8["state"] == "1"){
            $button_checked8 = "checked";
        }
        else {
            $button_checked8 = "";
        }
        $html_buttons8 .=  '<a onclick="deleteOutput(this)" href="javascript:void(0);" id="' . '"></a></h4><label class="switch"><input type="checkbox" onchange="updateOutput(this)" id="' . $row8["id"] . '" ' . $button_checked8 . '><span class="slider"></span></label><br>';
        
    }
}
$result9 = getOutputBoardById('49');
$html_buttons9 = null;
if ($result9) {
    while ($row9 = $result9->fetch_assoc()) {
        if ($row9["state"] == "1"){
            $button_checked9 = "checked";
        }
        else {
            $button_checked9 = "";
        }
        $html_buttons9 .=  '<a onclick="deleteOutput(this)" href="javascript:void(0);" id="' . '"></a></h4><label class="switch"><input type="checkbox" onchange="updateOutput(this)" id="' . $row9["id"] . '" ' . $button_checked9 . '><span class="slider"></span></label><br>';
        
    }
}
$result10 = getOutputBoardById('55');
$html_buttons10 = null;
if ($result10) {
    while ($row10 = $result10->fetch_assoc()) {
        if ($row10["state"] == "1"){
            $button_checked10 = "checked";
        }
        else {
            $button_checked10 = "";
        }
        $html_buttons10 .=  '<a onclick="deleteOutput(this)" href="javascript:void(0);" id="' . '"></a></h4><label class="switch"><input type="checkbox" onchange="updateOutput(this)" id="' . $row10["id"] . '" ' . $button_checked10 . '><span class="slider"></span></label><br>';
        
    }
}
$result11 = getOutputBoardById('61');
$html_buttons11 = null;
if ($result11) {
    while ($row11 = $result11->fetch_assoc()) {
        if ($row11["state"] == "1"){
            $button_checked11 = "checked";
        }
        else {
            $button_checked11 = "";
        }
        $html_buttons11 .=  '<a onclick="deleteOutput(this)" href="javascript:void(0);" id="' . '"></a></h4><label class="switch"><input type="checkbox" onchange="updateOutput(this)" id="' . $row11["id"] . '" ' . $button_checked11 . '><span class="slider"></span></label><br>';
        
    }
}
?>
