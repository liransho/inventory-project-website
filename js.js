$(document).ready(function () {
    fetch_data();
    date();
    hideBtn();
});

function filter() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[1];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}

function insert() {
    var name=$("#name").val();
    var description=$("#description").val();
    var price=$("#price").val();
    var picture=$("#picture").val();
    var dataString = "name="+ name + "&description="+ description + "&price=" + price + "&picture=" + picture;
    var check=checkData(name,description,price,picture);
    if (check==true){
    $.ajax({
        type: "post",
        url: "insert.php",
        data: dataString,
        success: function (s) {
            alert("data has been insert");
        },
        Error: function (s) {
            alert("failed insert data");
        }
    });
        $('#insert').modal('hide');
    }
}

function fetch_data() {
    var operation = "fetching_the_data";
    $.ajax({
        type: "get",
        url: "getData.php",
        data: {operation: operation},
        success: function (s) {
            $("#all_data").html(s);
        },
        Error: function (s) {
            alert("failed insert data");
        }
    });
}


function deleteItem(id1) {
    var id=id1;
    var dataString = "id=" +id;
    $.ajax({
        type: "post",
        url: "delete.php",
        data: dataString,
        success: function (s) {
            alert("Item has been delete");
        },
        Error: function (s) {
            alert("failed delete item");
        }
    });
}

function edit(id1){
    $('#editmodal').modal('show');
    $.ajax({
        url: 'ajaxfile.php',
        type: 'get',
        dataType: 'JSON',
        success: function (response) {
            var len = response.length;
            for (var i = 0; i < len; i++) {
                var id = response[i].id;
                var name = response[i].name;
                var description = response[i].description;
                var price = response[i].price;
                var picture = response[i].picture;
                if (response[i].id==id1){
                    $('#editName').val(name);
                    $('#editDescription').val(description);
                    $('#editPrice').val(price);
                    $('#editPicture').val(picture);
                }
            }
        }
    });

    $('#btn_update').click(function () {
        update(id1);
    });
}

function update(id1) {

    var id= id1;
    var name=$("#editmodal #editName").val().trim();
    var description= $("#editmodal #editDescription").val().trim();
    var price= $("#editmodal #editPrice").val().trim();
    var picture= $("#editmodal #editPicture").val().trim();
    var dataString = "id="+ id +"&name="+ name + "&description="+ description + "&price=" + price + "&picture=" + picture;
    var check = checkData(name,description,price,picture);

    if (check == true){
        $.ajax({
            type: "post",
            url: "edit.php",
            data: dataString,
            success: function (s) {
                alert("data has been edited");
            },
            Error: function (s) {
                alert("failed insert data");
            }
        });
        $('#editmodal').modal('hide');
    }
}

function refresh() {
    window.location.reload(false);
}

function insertModal(){
    $('#insert').modal('show');
}

function checkData(name,description,price,picture){
    var letters = /[^a-zA-Z\s-]/;

    if (name == "")
    {
        alert("Name must be filled out");
        return false;
    }

    if (letters.test(name))
    {
        alert("Name can only contain alphanumeric characters");
        return false;
    }

    if (price=="")
    {
        alert("Price must be filled out");
        return false;
    }

    if((/\D/.test(price))) {
        alert("Price can only contain numbers");
        return false;
    }

    if (description == ""){
        alert("Description must be filled out");
        return false;
    }

    if (letters.test(description))
    {
        alert("Description can only contain alphanumeric characters");
        return false;
    }
    if (picture == ""){
        alert("Picture must be filled out");
        return false;
    }

    var pattern = new RegExp('^(https?:\\/\\/)?'+ // protocol
        '((([a-z\\d]([a-z\\d-]*[a-z\\d])*)\\.)+[a-z]{2,}|'+ // domain name
        '((\\d{1,3}\\.){3}\\d{1,3}))'+ // OR ip (v4) address
        '(\\:\\d+)?(\\/[-a-z\\d%_.~+]*)*'+ // port and path
        '(\\?[;&a-z\\d%_.~+=-]*)?'+ // query string
        '(\\#[-a-z\\d_]*)?$','i'); // fragment locator
     var ext = picture.substring(picture.lastIndexOf('.') + 1);
        if (ext == "jpeg" || ext == "jpg" || ext == "bmp" || ext == "gif" || ext == "png"){
            return true
        }
        else if(!!pattern.test(picture)){
            return true;
        }
        else{
            alert("Photo only allows file types of GIF, PNG, JPG, JPEG and BMP. Or valid URL");
            return false;
        }

    return true;
}

function date(){
    var d = new Date();
    document.getElementById("demo").innerHTML = d;
}

function hideBtn(){
    $("#hidebtn").on('click',function() {
        $(this).hide();
        $("#hidden-div").show();
    });
}
