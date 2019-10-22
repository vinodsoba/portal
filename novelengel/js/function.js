/*function loadDoc() {
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
*/

function loadDoc(){
  $.ajax ({
      type: "POST",
      url: "workout.php",
      cache: false,
      success: function(data) {
        $("#display-content").html(data);
     }
   });

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
  xhttp.open("GET", "ne.php", true);
  xhttp.send();
}

/*function showPerfumes() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("display-content").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "ne.php", true);
  xhttp.send();
}

function showSkinCare() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("display-content").innerHTML =
      this.responseText;
    }
  };
  xhttp.open("GET", "ne_skincare.php", true);
  xhttp.send();
}*/

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

$(document).ready(function(){
  $("form#workoutForm").on('change',function(){

    var a = $('input[name=buyingprice]').val();
    var b = a / 1.1;
    var c= b.toFixed(2);
    var myForm1 =$('input[name=our_price]').val(c);
    var dataString = myForm1;
    var id = $('input[name=item_id]').val();
    $.ajax({
      type: "POST",
      url: "test.php",
      data: { item_id:id },
      cache: false,
      success: function(data) {
        $('input[name=description]').val(id);
        $('input[name=name]').val('input[name=buyingprice]');
        $("#loadRespone").html(data);
      }

    });
  });
});


// function calculate our price

/*$(document).ready(function(){
  $("form#workoutForm").on('change',function(){

    var a = $('input[name=buyingprice]').val();
    var b = a / 1.1;
    var c= b.toFixed(2);
    var myForm1 =$('input[name=our_price]').val(c);
    var dataString = myForm1;
    var id = $('input[name=item_id]').val();
    $.ajax({
      type: "POST",
      url: "test.php",
      data: { item_id: id },
      cache: false,
      success: function(data) {
        $("#loadRespone").html(data);
      }

    });
  });
});*/
