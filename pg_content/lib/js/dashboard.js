// function loadDataSource( dataSource ){
// 	var d = (new Date).getTime();
// 	switch( dataSource ){
// 		case "HARVEST_SHEET_FORUM":
// 			$.get( '/son/pg_content/src/f/dsF.php', function(data){ $('#pg_Container').html(data); });
// 			break;
// 		case "EFFORT_SHEET_FORUM":
// 			$.get( '/son/pg_content/src/f/esF.php', function(data){ $('#pg_Container').html(data); });
// 			break;
// 		case "SETTINGS":
// 			$.get( '/son/pg_content/src/f/sts.php', function(data){ $('#pg_Container').html(data); });
// 			break;
// 		default:
// 			break;
// 	}

// }

function addNewRow(esfTable) {
  var tableID = esfTable;
  var table = document.getElementById(tableID);
  var rowCount = table.rows.length;
  var row = table.insertRow(rowCount);
  var colCount = table.rows[0].cells.length;
  for(var i=0; i<colCount; i++) {
    var newcell = row.insertCell(i);
    newcell.innerHTML = table.rows[0].cells[i].innerHTML;
  //alert(newcell.childNodes);
    switch(newcell.childNodes[0].type) {
      case "text":
        newcell.childNodes[0].value = "";
      break;
      case "checkbox":
        newcell.childNodes[0].checked = false;
      break;
      case "number":
        newcell.childNodes[0].value = "";
      break;
      case "select-one":
        newcell.childNodes[0].selectedIndex = 0;
      break;
    }
  }
}



function tableMaker(){
  var nameArray    = new Array();
    nameArray[0] = 'sampleNumber';
    nameArray[2] = 'indivCode';
    nameArray[3] = 'Length Total - [mm]';
    nameArray[4] = 'Length Fork - [mm]';
    nameArray[5] = 'Round Weigth -[kg]';
    nameArray[6] = 'Dressed Weigth -[kg';
    nameArray[7] = 'Sex - [M/F]';

  var placeHolderArray = new Array();
    placeHolderArray[0] = 'Sample #';
    placeHolderArray[1] = 'Indiv. Code';
    placeHolderArray[2] = 'Indiv. Code';
    placeHolderArray[3] = 'Indiv. Code';
    placeHolderArray[4] = 'Indiv. Code';
    placeHolderArray[5] = 'Indiv. Code';
    placeHolderArray[6] = 'Indiv. Code';
    placeHolderArray[7] = 'Indiv. Code';

  var idArray = new Array();
    idArray[0] = 'myonoffswitch';


  var inputFrame6 = 'inputFrame-6';
  var textFrame6 = 'textFrame-6';
  var wid_input6 = 'wid_input-6'; 
      
    
  var myTable = '<table>';

  // for( var i = 1; i < 17; i++ ){
  //   myTable+='<tr>';
  //     myTable+='<div class="inputFrame clearfix grpelem">';
  //       myTable+='<span class="textFrame clearfix grpelem">';
  //         myTable+='<input class="wrapped-input wid_input" type="text" name="' + nameArray[1] + '" placeholder="' + placeHolderArray[0] + '" disabled="true"/>';
  //       myTable+='</span>';
  //     myTable+='</div>';
  //   myTable+='</tr>'; 

    // for( var k = 1; k < 11; k++ ){

    //   myTable+='<tr><td>';

    //     myTable+='<div class="inputFrame inputFrame-6 clearfix grpelem">';
    //       myTable+='<span class="textFrame textFrame-6 clearfix grpelem">';
    //         myTable+='<input class="wrapped-input wid_input wid_input-6" type="text" name="' + nameArray[k] + k + '" placeholder="' + [k] + '" />';
    //       myTable+='</span>';
    //     myTable+='</div>';
    //   myTable+='</td></tr>'; 


    // }
  // }

  myTable+="</table>";
  $('#tableBuilder').html( myTable );
}



function draw_RowNumbers(){

  var inputName = 'colNumber';
  var inputID = 'colNumber';
  var inputType = 'text';
  var myTable = '<div class="number_Container">';
  var k = 0;
  for(var i = 1; i < 11; i++){
    myTable += '<div class="inputFrame inputFrame-6 clearfix grpelem"><span class="textFrame textFrame-6 clearfix grpelem">';
    myTable += '<input class="wrapped-input wid_input wid_input-6" type="' + inputType +  '" id="' + inputID + i + '" name="' + inputName + i + '" placeholder="' + i + '" readonly=true"/></span></div>';
      //tabindex="' + ( parseInt(i) + parseInt(1) + parseInt(k) ) + '
    k += 14;
  } 
  myTable += '</div>';
  $('.row_Numbers').html( myTable );

}


function draw_CheckBoxes(){

  var inputID = 'myonoffswitch';
  var myTable = '<div class="checkbox_Container">';
  for( var i = 2; i < 11; i++ ){
    myTable += '<div class="inputFrame clearfix grpelem onoffswitch">';
    myTable += '<input type="checkbox" name="onoffswitch[]" value="checkBoxTwo" class="onoffswitch-checkbox" id="myonoffswitch' + i + '" onclick="myStatus("myonoffswitch' + i + '");" />';
    myTable += '<label class="onoffswitch-label" for="myonoffswitch' + i + '">';
    myTable += '<span class="onoffswitch-inner"></span><span class="onoffswitch-switch"></span></label></div>';
  }
  myTable += '</div>';
  $('.checkboxContainer').html( myTable );

}

function draw_IndivCode(){

  var inputName = 'indivCode';
  var inputID = 'colNumber';
  var inputType = 'number';
  var myTable = '<div class="indivCode_Container">';
  var k = 0;
  for(var i = 1; i < 11; i++){
    myTable += '<div class="inputFrame inputFrame-6 clearfix grpelem"><span class="textFrame textFrame-6 clearfix grpelem">';
    myTable += '<input class="wrapped-input wid_input wid_input-6" type="' + inputType + '" id="' + inputID + i + '" name="' + inputName + i + '" tabindex="' + ( parseInt(i) + parseInt(k) ) + '"/></span></div>';
    k += 14;
  } 
  myTable += '</div>';
  $('.select_IndivCode').html( myTable );

}

function draw_LengthTotal(){

  var inputName = 'lengthTotal';
  var inputID = 'colNumber';
  var inputType = 'text';
  var myTable = '<div class="lengthTotal_Container">';
  var k = 1;
  for(var i = 1; i < 11; i++){
    myTable += '<div class="inputFrame inputFrame-6 clearfix grpelem">';
    myTable += '<span class="textFrame textFrame-6 clearfix grpelem">';
    myTable += '<input class="wrapped-input wid_input wid_input-6" type="' + inputType +  '" id="' + inputID + i + '" name="' + inputName + i + '" required="true" tabindex="' + ( parseInt(i) + parseInt(k) ) + '"/></span></div>';
    k += 14;
  } 
  myTable += '</div>';
  $('.select_LengthTotal').html( myTable );  

}

function draw_LengthFork(){

  var inputName = 'lengthFork';
  var inputID = 'colNumber';
  var inputType = 'text';
  var myTable = '<div class="lengthFork_Container">';
  var k = 2;
  for(var i = 1; i < 11; i++){
    myTable += '<div class="inputFrame inputFrame-6 clearfix grpelem"><span class="textFrame textFrame-6 clearfix grpelem">';
    myTable += '<input class="wrapped-input wid_input wid_input-6" type="' + inputType +  '" id="' + inputID + i + '" name="' + inputName + i + '" required="true" tabindex="' + ( parseInt(i) + parseInt(k) ) + '"/></span></div>';
      //tabindex="' + ( parseInt(i) + parseInt(1) + parseInt(k) ) + '
    k += 14;
  } 
  myTable += '</div>';
  $('.select_LengthFork').html( myTable );  

}

function draw_RoundWeigth(){

  var inputName = 'roundWeight';
  var inputID = 'colNumber';
  var inputType = 'text';
  var myTable = '<div class="roundWeight_Container">';
  var k = 3;
  for(var i = 1; i < 11; i++){
    myTable += '<div class="inputFrame inputFrame-6 clearfix grpelem"><span class="textFrame textFrame-6 clearfix grpelem">';
    myTable += '<input class="wrapped-input wid_input wid_input-6" type="' + inputType +  '" id="' + inputID + i + '" name="' + inputName + i + '" tabindex="' + ( parseInt(i) + parseInt(k) ) + '"/></span></div>';
    k += 14;
  } 
  myTable += '</div>';
  $('.select_RoundWeigth').html( myTable );  

}

function draw_DressedWeigth(){

  var inputName = 'dressedWeight';
  var inputID = 'colNumber';
  var inputType = 'text';
  var myTable = '<div class="dressedWeight_Container">';
  var k = 4;
  for(var i = 1; i < 11; i++){
    myTable += '<div class="inputFrame inputFrame-6 clearfix grpelem"><span class="textFrame textFrame-6 clearfix grpelem">';
    myTable += '<input class="wrapped-input wid_input wid_input-6" type="' + inputType + '" id="' + inputID + i + '" name="' + inputName + i + '" tabindex="' + ( parseInt(i) + parseInt(k) ) + '"/></span></div>';
    k += 14;
  } 
  myTable += '</div>';
  $('.select_DressedWeigth').html( myTable );  

}


function draw_Sex(){

  var inputName = 'sex';
  var inputID = 'colNumber';
  var inputType = 'text';
  var myTable = '<div class="sex_Container">';
  var k = 5;
  for(var i = 1; i < 11; i++){
    myTable += '<div class="inputFrame inputFrame-6 clearfix grpelem styled-select">';
    myTable += '<span class="textFrame textFrame-6 clearfix grpelem">';
    myTable += '<select class="wrapped-input wid_input wid_input-6" id="' + inputID + i + '" name="' + inputName + i + '" tabindex="' + ( parseInt(i) + parseInt(k) ) + '">';
    myTable += '<option value="-1" selected="selected">SEX</option>';
    myTable += '<option value="-1">-----</option>';
    myTable += '<option value="Male">M</option>';
    myTable += '<option value="Female">F</option>';
    myTable += '</select></span></div>';
    k += 14;
  } 
  myTable += '</div>';
  $('.select_Sex').html( myTable ); 

}


function draw_ScarsWounds(){

  var inputName = 'scarsWounds';
  var inputID = 'colNumber';
  var inputType = 'text';
  var myTable = '<div class="scarsWounds_Container">';
  var k = 6;
  for(var i = 1; i < 11; i++){
    myTable += '<div class="inputFrame inputFrame-6 clearfix grpelem styled-select">';
    myTable += '<span class="textFrame textFrame-6 clearfix grpelem">';
    myTable += '<select class="wrapped-input wid_input wid_input-6" id="' + inputID + i + '" name="' + inputName + i + '" tabindex="' + ( parseInt(i) + parseInt(k) ) + '">';
    myTable += '<option value="-1" selected="selected">SC/WO</option>';
    myTable += '<option value="-1">-----</option>';
    myTable += '<option value="Scars">S</option>';
    myTable += '<option value="Wounds">W</option>';
    myTable += '</select></span></div>';
    k += 14;
  } 
  myTable += '</div>';
  $('.select_ScarsWounds').html( myTable ); 

}


function draw_FinClips(){

  var inputName = 'finClips';
  var inputID = 'colNumber';
  var inputType = 'text';
  var myTable = '<div class="finClips_Container">';
  var k = 7;
  for(var i = 1; i < 11; i++){
    myTable += '<div class="inputFrame inputFrame-6 clearfix grpelem styled-select">';
    myTable += '<span class="textFrame textFrame-6 clearfix grpelem">';
    myTable += '<select class="wrapped-input wid_input wid_input-6" id="' + inputID + i + '" name="' + inputName + i + '" tabindex="' + ( parseInt(i) + parseInt(k) ) + '">';
    myTable += '<option value="-1" selected="selected">FIN</option>';
    myTable += '<option value="-1">-----</option>';
    myTable += '<option value="RV">RV</option>';
    myTable += '<option value="LV">LV</option>';
    myTable += '<option value="RP">RP</option>';
    myTable += '<option value="LP">LP</option>';
    myTable += '<option value="AD">AD</option>';
    myTable += '</select></span></div>';
    k += 14;
  } 
  myTable += '</div>';
  $('.select_FinClips').html( myTable ); 

}

function draw_FishSCode(){

  var inputName = 'fishScode';
  var inputID = 'colNumber';
  var inputType = 'text';
  var myTable = '<div class="fishScode_Container">';
  var k = 8;
  for(var i = 1; i < 11; i++){
    myTable += '<div class="inputFrame inputFrame-6 clearfix grpelem"><span class="textFrame textFrame-6 clearfix grpelem">';
    myTable += '<input class="wrapped-input wid_input wid_input-6" type="' + inputType + '" id="' + inputID + i + '" name="' + inputName + i + '" required="true" tabindex="' + ( parseInt(i) + parseInt(k) ) + '"/></span></div>';
    k += 14;
  } 
  myTable += '</div>';
  $('.select_FishScode').html( myTable );  

}


function draw_Lamprey(){

  var inputName = 'lamprey';
  var inputID = 'colNumber';
  var inputType = 'text';
  var myTable = '<div class="lamprey_Container">';
  var k = 9;
  for(var i = 1; i < 11; i++){
    myTable += '<div class="inputFrame inputFrame-6 clearfix grpelem"><span class="textFrame textFrame-6 clearfix grpelem">';
    myTable += '<input class="wrapped-input wid_input wid_input-6" type="' + inputType + '" id="' + inputID + i + '" name="' + inputName + i + '" tabindex="' + ( parseInt(i) + parseInt(k) ) + '"/></span></div>';
    k += 14;
  } 
  myTable += '</div>';
  $('.select_Lamprey').html( myTable );  

}


function draw_Scales(){

  var inputName = 'scales';
  var inputID = 'colNumber';
  var inputType = 'text';
  var myTable = '<div class="scales_Container">';
  var k = 10;
  for(var i = 1; i < 11; i++){
    myTable += '<div class="inputFrame inputFrame-6 clearfix grpelem"><span class="textFrame textFrame-6 clearfix grpelem">';
    myTable += '<input class="wrapped-input wid_input wid_input-6" type="' + inputType + '" id="' + inputID + i + '" name="' + inputName + i + '" required="true" tabindex="' + ( parseInt(i) + parseInt(k) ) + '"/></span></div>';
    k += 14;
  } 
  myTable += '</div>';
  $('.select_Scales').html( myTable );  

}


function draw_Otoliths(){

  var inputName = 'otoliths';
  var inputID = 'colNumber';
  var inputType = 'text';
  var myTable = '<div class="otoliths_Container">';
  var k = 11;
  for(var i = 1; i < 11; i++){
    myTable += '<div class="inputFrame inputFrame-6 clearfix grpelem styled-select">';
    myTable += '<span class="textFrame textFrame-6 clearfix grpelem">';
    myTable += '<select class="wrapped-input wid_input wid_input-6" id="' + inputID + i + '" name="' + inputName + i + '" tabindex="' + ( parseInt(i) + parseInt(k) ) + '">';
    myTable += '<option value="-1" selected="selected">OTO</option>';
    myTable += '<option value="-1">-----</option>';
    myTable += '<option value="One">1</option>';
    myTable += '<option value="Two">2</option>';
    myTable += '<option value="No">NO</option>';
    myTable += '</select></span></div>';
    k += 14;
  } 
  myTable += '</div>';
  $('.select_Otoliths').html( myTable ); 

}

function draw_OvariesGonads(){

  var inputName = 'ovariesGonads';
  var inputID = 'colNumber';
  var inputType = 'text';
  var myTable = '<div class="ovariesGonads_Container">';
  var k = 12;
  for(var i = 1; i < 11; i++){
    myTable += '<div class="inputFrame inputFrame-6 clearfix grpelem styled-select">';
    myTable += '<span class="textFrame textFrame-6 clearfix grpelem">';
    myTable += '<select class="wrapped-input wid_input wid_input-6" id="' + inputID + i + '" name="' + inputName + i + '" tabindex="' + ( parseInt(i) + parseInt(k) ) + '">';
    myTable += '<option value="-1" selected="selected">OV/GO</option>';
    myTable += '<option value="-1">-----</option>';
    myTable += '<option value="Ovaries">OVA</option>';
    myTable += '<option value="Gonads">GON</option>';
    myTable += '</select></span></div>';
    k += 14;
  } 
  myTable += '</div>';
  $('.select_OvariesGonads').html( myTable ); 

}


function draw_Stomach(){

  var inputName = 'stomach';
  var inputID = 'colNumber';
  var inputType = 'text';
  var myTable = '<div class="stomach_Container">';
  var k = 13;
  for(var i = 1; i < 11; i++){
    myTable += '<div class="inputFrame inputFrame-6 clearfix grpelem"><span class="textFrame textFrame-6 clearfix grpelem">';
    myTable += '<input class="wrapped-input wid_input wid_input-6" type="' + inputType + '" id="' + inputID + i + '" name="' + inputName + i + '" tabindex="' + ( parseInt(i) + parseInt(k) ) + '"/></span></div>';
    k += 14;
  } 
  myTable += '</div>';
  $('.select_Stomach').html( myTable );  

}


function draw_Comment(){

  var inputName = 'comment';
  var inputID = 'colNumber';
  var inputType = 'text';
  var myTable = '<div class="comment_Container">';
  var k = 14;
  for(var i = 1; i < 11; i++){
    myTable += '<div class="inputFrame inputFrame-6 clearfix grpelem"><span class="textFrame textFrame-6 clearfix grpelem">';
    myTable += '<input class="wrapped-input wid_input wid_input-6" style="text-align:left;" type="' + inputType + '" id="' + inputID + i + '" name="' + inputName + i + '" maxlength="150" tabindex="' + ( parseInt(i) + parseInt(k) ) + '"/></span></div>';
    k += 14;
  } 
  myTable += '</div>';
  $('.select_Comment').html( myTable );  

}

function disableMe(){

  var inputID = 'colNumber';
  for( var i = 3; i < 11; i++ ){
    for( var k = 0; k < 16; k++ ){
      $('#colNumber' + i ).attr('disabled', 'disabled');
    }
  }

}


$(document).ready(function () {

	var dataSource, random, myID, esfTable;
	random = Math.ceil(Math.random() * 4);
	if( random == 1 ){ $('#pwBG').addClass('page_wrapperTok');}
	if( random == 2 ){ $('#pwBG').addClass('page_wrapperTokC');}
	if( random == 3 ){ $('#pwBG').addClass('page_wrapperTur');}
	if( random == 4 ){ $('#pwBG').addClass('page_wrapperTurC');}

  $('#datepicker').datepicker({ dateFormat: 'yy-mm-dd' }).val();

  $(function(){ $(".chosen-select").chosen(); });



  draw_RowNumbers();
  draw_CheckBoxes();
  draw_IndivCode();
  draw_LengthTotal();
  draw_LengthFork();
  draw_RoundWeigth();
  draw_DressedWeigth();
  draw_Sex();
  draw_ScarsWounds();
  draw_FinClips();
  draw_FishSCode();
  draw_Lamprey();
  draw_Scales();
  draw_Otoliths();
  draw_OvariesGonads();
  draw_Stomach();
  draw_Comment();

  disableMe();






  // $('#myonoffswitch1').on('click', function(){
  //   addNewRow( esfTable );
  // });
  // tableMaker();

});

