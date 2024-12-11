<?php 
function input($name="", $lbl = "",$placeholder="",$r=false, $type="text",$id=null,$class=null){
    $id=$id??$name;
    $cls=$class??'form-control';
    $r=($r)?"required":"";
    $l=($r)?': <span class="text-danger">*</span>':"";
    return <<<HTML
    
    <div class="mb-3">
        <label for="$id">$lbl $l</label>
        <input type="$type" name="$name" placeholder="$placeholder" id="$id" class="$cls" $r >
    </div>
    HTML;
}
function btn($lbl="Save",$class="btn btn-primary",$type="submit"){
    return <<<HTML
    
    <div class="mb-3 text-center">
        <button type="$type" class="$class">$lbl</button>
    </div>

    HTML;
}