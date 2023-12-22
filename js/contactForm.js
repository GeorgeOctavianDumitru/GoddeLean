const Name = document.getElementById('txtName');

Name.addEventListener('focusout', validateName);
function validateName() {
  // Get the input element by its ID
  //var Name = document.getElementById("Name");

  if (Name.value.trim() === "") {
    alert("Name is mandatory");
  } else {
    var inputValue = Name.value;
    var capitalizedText =
      inputValue.charAt(0).toUpperCase() + inputValue.slice(1);
    Name.value = capitalizedText;
  }
}

$('#contactUs_Form').submit(function(event){
  
  event.preventDefault();

  var endpoint = your_ajax_object.ajaxurl;

  var form = $('#contactUs_Form').serialize();

  var formdata = new FormData;
  formdata.append('action','enquiry');
  formdata.append('enquiry', form);

  $.ajax(endpoint,{
    type:'POST',
    data:formdata,
    processData:false,
    contentType:false,

    success:function(res){
      //$("#contactUs_Form").fadeOut(200);
      $("#encouragementSlogan").css("display", "none"); // Hide #encouragementSlogan
      $("#successMessage").css("display", "flex"); // Show #successMessage as flex container
      $("#contactUs_Form").trigger("reset");
      //$("#contactUs_Form").fadeIn(500);
      setTimeout(function () {
        $("#encouragementSlogan").css("display", "flex"); // Show #encouragementSlogan
        $("#successMessage").css("display", "none"); // Hide #successMessage
      }, 5000); // 1000 milliseconds = 1 second
    },
    error:function(err){

    }
  })
});

