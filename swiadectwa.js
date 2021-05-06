$(document).on("click", "#wyszukaj", function () {
    let rok = $("#dessert").val();
      $.ajax({
          url:"functions/check.php",
        method: "POST",
        data: {
        d:1,
          rok:rok
        },
        success: function () {
            window.location.reload(true);
        },
      });
  });