function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("display-content").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "workout.php", true);
  xhttp.send();
}

function loadSearch() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("display-content").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "searchform.html", true);
  xhttp.send();
}

function loadProducts() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("display-content").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "ascosmetics.php", true);
  xhttp.send();
}

function loadUploadProducts() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("display-content").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "upload.php", true);
  xhttp.send();
}


function loadCalculateProduct() {
  
alert(this.id);
 
}


function loadFillDetails() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("display-content").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "fill_fields.php", true);
  xhttp.send();
}



$(document).ready(function(){
 $('form#form_upload').on("submit", function(e){
        var formUpload = $("#form_upload");
        var dataString= formUpload;
        $.ajax ({
            type: "POST",
            url: "add_todb.php",
            data: dataString.serialize(),
            cache: false,
            success: function(data) {
              $("#demo").html(data);
           }
      });
    e.preventDefault();
  });
});

/*
$(document).ready(function(){ 
    $('#myForm').on('submit', function(e){            
        $.ajax({
            url: "process_upload.php",
            type: 'post',
            data: ({ mydata: target }),
                success: function(data) { 
                     $("#loadResponse").html(data);
                }
        });
          e.preventDefault();
    }); 
});     






*/

$(document).ready(function(){
  $(this.button).click(function(){
    alert("hello world");
    $.ajax ({
            type: "POST",
            url: "show_products.php",
            cache: false,
            success: function(data) {
              $("#loadProducts").html(data);
            }
    });
  });
});




$(document).ready(function(){
    $('form#myForm').on("submit", function(e){
        var myForm = $("#myForm");
        var dataString= myForm;
        $.ajax ({
            type: "POST",
            url: "process_upload.php",
            data: dataString.serialize(),
            cache: false,
            success: function(data) {
              $("#loadResponse").html(data);
            }


        });
          e.preventDefault();
  });
});



