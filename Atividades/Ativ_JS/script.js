var IdBox = 0;
var ContentName = [];
var ContentAge = [];
var ContentProfession = [];

var SelectBox ;
	
$("#Cad").click(function(){
	
  IdBox++;
	
  console.log(IdBox);
  
	ContentName [IdBox] = $("#NameInput").val();
 	ContentAge [IdBox] = $("#AgeInput").val();
	ContentProfession [IdBox] = $("#ProfessionInput").val();
  
  $("#NameInput").val(null);
  $("#AgeInput").val(null);
  $("#ProfessionInput").val(null);
  
  console.log(ContentName [IdBox]);
  console.log(ContentAge [IdBox]);
  console.log(ContentProfession [IdBox]);
  
  $("#GroupBox").append(" <div id='Box"+IdBox+"' class= 'box container'></div>");
  $("#Box"+IdBox).append("<p id='Name"+IdBox+"'></p>");
  $("#Box"+IdBox).append("<p id='Age"+IdBox+"'></p>");
  $("#Box"+IdBox).append("<p id='Profession"+IdBox+"'></p>");

	$("#Name"+IdBox).text("");
  $("#Name"+IdBox).text(ContentName[IdBox]);

	$("#Age"+IdBox).text("");
  $("#Age"+IdBox).text(ContentAge[IdBox]);
  
	$("#Profession"+IdBox).text("");
  $("#Profession"+IdBox).text(ContentProfession[IdBox]);
})

$(document).on("click",".container",function() {
	

  var Id = $(this).attr('id');
  var CheckSelect = $('.box-select').attr('id');
  
  SelectBox = Id.split("Box")
  SelectBox = SelectBox[1];
  
  
  var NameBox = "";
	var AgeBox = "";
	var ProfessionBox = "";
  
  NameBox = $("#Name"+SelectBox).text()
  AgeBox = $("#Age"+SelectBox).text()
  ProfessionBox = $("#Profession"+SelectBox).text()
  
  
  $("#InputsBox").html(" ")
  $("#InputsBox").append("<input id='NameBox' type='text' placeholder='Digite o nome' class='validate' value= " + NameBox + ">")
  $("#InputsBox").append("<input id='AgeBox' type='text' placeholder='Digite a idade' class='validate' value= " + AgeBox + ">")
  $("#InputsBox").append("<input id='ProfessionBox' type='text' placeholder='Digite a profissão' class='validate' value= " + ProfessionBox + ">")
  
  $("#ButtonBox").html(" ")
  $("#ButtonBox").append("<button id='MudCad' class='waves-effect waves-light btn cad'>Mudar Cadrastro</button>")
  
  

  if (Id != CheckSelect) {
    document.getElementById(Id).className = 'box-select container';
    document.getElementById(CheckSelect).className = 'box container';
    
  } else {
    document.getElementById(CheckSelect).className = 'box container';
  }
  
})

$(document).on("click","#MudCad",function(){

	ContentName[SelectBox] = $("#NameBox").val();
  ContentAge[SelectBox] = $("#AgeBox").val();
  ContentProfession[SelectBox] = $("#ProfessionBox").val();
  
  $("#Name"+SelectBox).text("");
  $("#Name"+SelectBox).text(ContentName[SelectBox]);
  
  $("#Age"+SelectBox).text("");
  $("#Age"+SelectBox).text(ContentAge[SelectBox]);
  
  $("#Profession"+SelectBox).text("");
  $("#Profession"+SelectBox).text(ContentProfession[SelectBox]);
  
})