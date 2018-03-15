function searchHouse(){
    $("#searchHouse").click(function(e) {

        var existingHouseName = $('#existingHouseName').val();
        var existingHousePass = $('#existingHousePass').val();

        $.ajax({
            type: 'POST',
            datatype: 'json',
            url: '../controller/searchHouse.php',
            data: {
                existingHousePass: existingHousePass,
                existingHouseName: existingHouseName,
            },
            success: function(data) {
                console.log(data);
                if (data.status == 'houseFound') {
                    document.getElementById("houseSearch").style.display = "block";
                    document.getElementById("searchHouse").style.display = "none";
                    document.getElementById("next").style.display = "block";
                    document.getElementById("regoError").style.display = "none";
                }
                if (data.status == 'error') {
                    document.getElementById("regoError").style.display = "block";
                    document.getElementById("houseSearch").style.display = "none";
                }
            },
            error: function() {
                console.log("House not found");
                if (data.status == 'error') {

                }
            }
        });

    });
}

 $(document).ready(function() {
    searchHouse();
    submit();
  });