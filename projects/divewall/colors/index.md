---
layout: projects/project
title: DiVEwall Color Preset Demo
description: Use this page to generate and view DiVEwall note color presets.
---

<style>
:root {
    --note-color-1: #DE1010;
    --note-color-2: #18ADFF;
    --note-color-3: #1FD317;
    --note-color-4: #FF9A00;
    --note-color-5: #FF35EF;
    --note-color-6: #FFE443;
    --note-color-7: #9B8B00;
    --note-color-1001: #FF4B00;
    --note-color-1002: #FFF100;
    --note-color-1003: #35A16B;
    --note-color-1004: #0041FF;
    --note-color-1005: #66CCFF;
    --note-color-1006: #C8C8CB;
}

div.color-preview {
    display: inline-block;
    width: 100px;
    height: 19px;
    /* bro i hate css, what the hell */
    transform: translate(0px, 5px);
}

.color-picker {
    margin-bottom: 2px;
}

.color-picker label {
    display: inline-block;
    width: 95px;
}
</style>

<label for="color-preset">Preset:</label>
<input type="text" id="color-preset" onchange="onPresetChange()"
       value="4312567" maxlength="7" pattern="[0-9a-fA-F]{7}"/>

{% include divewall/color-picker.html name="Touch Note" id="touch" %}
{% include divewall/color-picker.html name="Chain Note" id="chain" %}
{% include divewall/color-picker.html name="Left Slide" id="leftSlide" %}
{% include divewall/color-picker.html name="Right Slide" id="rightSlide" %}
{% include divewall/color-picker.html name="Up Snap" id="upSnap" %}
{% include divewall/color-picker.html name="Down Snap" id="downSnap" %}
{% include divewall/color-picker.html name="Hold Note" id="hold" %}

<script>
function onChangeColor(ele) {
    let sel = document.getElementById("color-"+ele);
    let colorId = sel.value;
    
    setColor(ele, colorId);
    getPreset();
}

function onPresetChange() {
    let pre = document.getElementById("color-preset");
    if(pre.checkValidity() && pre.value !== "") {
        loadPreset(pre.value);
    } else {
        pre.reportValidity();
    }
}

function setColor(key, color) {
    document.getElementById("color-preview-"+key).style.backgroundColor = "var(--note-color-" + color + ")";
}

function parseColorPreset(preset) {
    let colors = preset.split('').map(c => {
        c = parseInt(c, 16);
        if (c > 0 && c < 8) return c;
        if (c > 9) return c + 991
    });

    if(colors.length !== 7) throw RangeError('Preset must be 7 characters long');

    return {
        leftSlide: colors[0],
        rightSlide: colors[1],
        upSnap: colors[2],
        downSnap: colors[3],
        touch: colors[4],
        chain: colors[5],
        hold: colors[6]
    }
}

function getColorPresetString(colors) {
    let ids = [
        colors.leftSlide,
        colors.rightSlide,
        colors.upSnap,
        colors.downSnap,
        colors.touch,
        colors.chain,
        colors.hold
    ];

    return ids.map(id => {
        if (id > 991) id -= 991;
        return id.toString(16);
    }).join('')
}

let currentPreset = {};

function loadPreset(preset) {
    let newPreset = parseColorPreset(preset);
    for (const key in newPreset) {
        setColor(key, newPreset[key]);
        document.getElementById("color-"+key).value = newPreset[key];
    }
}

function getPreset() {
    let colors = {};

    ["leftSlide", "rightSlide", "upSnap", "downSnap", "touch", "chain", "hold"].forEach(key => {
        colors[key] = parseInt(document.getElementById("color-"+key).value, 10);
    });

    document.getElementById("color-preset").value = getColorPresetString(colors);
}

loadPreset('4312567');
</script>