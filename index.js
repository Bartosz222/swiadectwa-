var modal = document.getElementById("myModal");

var btn = document.getElementById("myBtn");

var span = document.getElementsByClassName("close")[0];

btn.onclick = function() {
  modal.style.display = "block";
  $('.title').html('Dodaj ucznia');
}

span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
$(document).on("click", "#addBtn", function () {
  $("#mainBtn").removeClass("editBtn");
  $("#mainBtn").addClass("add");
  $('#modal').show();
  $('.title').html('Dodaj auto');
$(document).on("click", "#mainBtn", function () {
  let imiona_nazwisko = $("#imiona_nazwisko").val();
  let data_urodzenia = $("#data_urodzenia").val();
  let miejsce_urodzenia = $("#miejsce_urodzenia").val();
  let numer_pesel= $("#numer_pesel").val();
    $.ajax({
      url: "functions/addRecord.php",
      method: "POST",
      data: {
        imiona_nazwisko: imiona_nazwisko,
        data_urodzenia: data_urodzenia,
        miejsce_urodzenia: miejsce_urodzenia,
        numer_pesel: numer_pesel,
      },
      success: function () {
        window.location.reload(true);
      },
    });
});
});
const editBtn = document.getElementById('edit-btn');

editBtn.onclick = function() {
  modal.style.display = "block";
  $('.title').html('Edytuj auto');
}

$(document).on('click', '.delete-btn', function(){
  let id = $(this).attr('data-id');
    $.ajax({
      url: 'functions/delRecord.php',
      type: 'POST',
      data: {id:id},
      success: function(){
        window.location.reload(true);
    }
  });
});

$(document).on('click', '#edit-btn', function(){
  $('.title').html('Edytuj dane');
  let id = $(this).attr('data-id');
  $("#mainBtn").removeClass("add");
  $("#mainBtn").addClass("editBtn");

  
  $.ajax({
    url: 'functions/editRecord.php',
    type: 'POST',
    data: {id:id},
    dataType: "json",
    success: function(data){
      console.log(data);
      $("#myModal").show();
      $("#id").val(data.id);
      $("#imiona_nazwisko").val(data.imiona_nazwisko);
      $("#data_urodzenia").val(data.data_urodzenia);
      $("#miejsce_urodzenia").val(data.miejsce_urodzenia);
      $("#numer_pesel").val(data.pesel);
    },
  });
});

$(document).on('click', '.editBtn', function(){

  let id = $("#id").val();
  let Name = $("#imiona_nazwisko").val();
  let Date = $("#data_urodzenia").val();
  let Place = $("#miejsce_urodzenia").val();
  let Pesel = $("#numer_pesel").val();

$.ajax({

  url: 'functions/update.php',
  type: 'POST',
  data: {
    id:id,
    imiona_nazwisko: Name,
    data_urodzenia: Date,
    miejsce_urodzenia: Place,
    numer_pesel: Pesel,

  },
  success:function(){
    window.location.reload(true);
  }
});



});