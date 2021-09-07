$(document).ready(function () {
    $("#search").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#list tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });

    $(".detail").hover(function () {

            var data = jQuery.parseJSON($(this).attr("data"));
            $('#name').html(data.name);
            $('#zip').html(data.zip);
            $('#town').html(data.town);
            $('#street').html(data.street);
            $('#ico').html(data.ico);
            $("#detail").attr("href", "http://www.google.com/")

            $("#myModal").modal('show');

        }
    );


});