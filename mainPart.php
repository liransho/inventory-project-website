
<?php
echo"    
<div class=\"col text-center\">
<td><button type=\"button\" class=\"btn btn-success glyphicon glyphicon-plus\" onclick='insertModal()'></button></td>
<td><button onclick=\"refresh()\" type=\"button\" class=\"btn btn-info glyphicon glyphicon-refresh \" ></button></td>
<input type=\"text\" id=\"myInput\" onkeyup=\"filter()\" placeholder=\"Search for items..\" title=\"Type in a name\">
</div>
<div class=\"container\" >
    <div id=\"all_data\" ></div>
    <!--Insert Modal -------------------------------------------------------------------------------------------------->
    <div class=\"modal fade\" id=\"insert\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"insertModal\"  aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\"  >
            <div class=\"modal-content \">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"insertModal\">Add Pizza </h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <form id=\"insertItem\"   method=\"POST\">
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <label>  Name </label>
                            <input type=\"text\" name=\"name\" id=\"name\" class=\"form-control\" placeholder=\"Enter Name\">
                        </div>
                        <div class=\"form-group\">
                            <label> Description </label>
                            <input type=\"text\" name=\"description\"id=\"description\" class=\"form-control\" placeholder=\"Enter description \">
                        </div>
                        <div class=\"form-group\">
                            <label> Price</label>
                            <input type=\"text\" name=\"price\" id=\"price\" class=\"form-control\" placeholder=\"Enter price\">
                        </div>
                        <div class=\"form-group\">
                            <label> Picture </label>
                            <input type=\"text\" name=\"picture\" id=\"picture\" class=\"form-control\" placeholder=\"Enter picture\">
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                        <button type=\"button\" name=\"insertdata\" id=\"insertdata\" onclick=\"insert()\" class=\"btn btn-primary\">Save Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--Edit Modal -------------------------------------------------------------------------------------------------->
    <div class=\"modal fade\" id=\"editmodal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"editModal\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\"  >
            <div class=\"modal-content \">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"editModal\">Edit Pizza Details </h5>
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">&times;</span>
                    </button>
                </div>
                <form id=\"editItem\" method=\"POST\">
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <label>  Name </label>
                            <input type=\"text\" name=\"name\" id=\"editName\" class=\"form-control editName\" placeholder=\"Enter Name\">
                        </div>
                        <div class=\"form-group\">
                            <label> Description </label>
                            <input type=\"text\" name=\"description\"id=\"editDescription\" class=\"form-control editDescription\" placeholder=\"Enter description \">
                        </div>
                        <div class=\"form-group\">
                            <label> Price</label>
                            <input type=\"text\" name=\"price\" id=\"editPrice\" class=\"form-control editPrice\" placeholder=\"Enter price\">
                        </div>
                        <div class=\"form-group\">
                            <label> Picture </label>
                            <input type=\"text\" name=\"picture\" id=\"editPicture\" class=\"form-control editPicture\" placeholder=\"Enter picture\">
                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
                        <input type=\"button\" name=\"updatedata\" id=\"btn_update\" class=\"btn btn-primary\" value=\"Update data\"></input>
                    </div>
                </form>
            </div>
        </div>
 </div>
";

