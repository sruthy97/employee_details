


$( document ).ready(function() {

 $("div#p2").hide();
 $("div#p3").hide();
 $("div#p4").hide();
 $("div#p5").hide();
$("mapping").hide();
var select = document.getElementById("selectNumber");
var select2 = document.getElementById("selectNumber2");
var select3 = document.getElementById("selectNumber3");
var select4 = document.getElementById("selectNumber4");
var select5 = document.getElementById("selectNumber5");
var options = ["column1", "column2", "column3", "column4", "column5"];
addValue(options,select);
addValue(options,select2);
addValue(options,select3);
addValue(options,select4);
addValue(options,select5);

function addValue(options,select){
for(var i = 0; i < options.length; i++) {
    var opt = options[i];
    var el = document.createElement("option");

    el.textContent = opt;
    el.value = opt;
    select.appendChild(el);
    
}

}

$( '#selectNumber' ) .change(function () {    
  
  var selectedText = $(this).find("option:selected").text();
            var selectedValue = $(this).val();
          var index = options.indexOf(selectedValue);
          options.splice(index, 1);
  $('#selectNumber').empty().append(`<option value="${selectedText}">
                                       ${selectedText}
                                  </option>`);
  $('#selectNumber2').empty().append('<option>Choose a Column</option>');
   $("div#p2").show();
addValue(options,select2);


}); 
$( '#selectNumber2' ) .change(function () {    
  
  var selectedText = $(this).find("option:selected").text();
            var selectedValue = $(this).val();
          var index = options.indexOf(selectedValue);
          options.splice(index, 1);
  $('#selectNumber2').empty().append(`<option value="${selectedText}">
                                       ${selectedText}
                                  </option>`);
  $('#selectNumber3').empty().append('<option>Choose a Column</option>');
   $("div#p3").show();
addValue(options,select3);


});   

$( '#selectNumber3' ) .change(function () {    
  
  var selectedText = $(this).find("option:selected").text();
            var selectedValue = $(this).val();
          var index = options.indexOf(selectedValue);
          options.splice(index, 1);
  $('#selectNumber3').empty().append(`<option value="${selectedText}">
                                       ${selectedText}
                                  </option>`);
  $('#selectNumber4').empty().append('<option>Choose a Column</option>');
   $("div#p4").show();
addValue(options,select4);


});  

$( '#selectNumber4' ) .change(function () {    
  
  var selectedText = $(this).find("option:selected").text();
            var selectedValue = $(this).val();
          var index = options.indexOf(selectedValue);
          options.splice(index, 1);
  $('#selectNumber4').empty().append(`<option value="${selectedText}">
                                       ${selectedText}
                                  </option>`);
  $('#selectNumber5').empty().append('<option>Choose a Column</option>');
   $("div#p5").show();
addValue(options,select5);


});




});

