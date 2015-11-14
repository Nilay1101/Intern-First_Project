<html>
    <head>
        <title>Sportz.com</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=yes">
        <?php include 'admin-includeheader.php'; ?>
        <link href="../css/jquery-ui.css" rel="stylesheet">
        <link href="../css/admin/create-academy.css" rel="stylesheet">
        <link media="handheld, only screen and (max-width: 480px), only screen and (max-device-width: 480px)" href="../css/admin/mobile_create-academy.css" type="text/css" rel="stylesheet" />
        <link media="handheld, only screen and (max-width: 480px), only screen and (max-device-width: 480px)" href="../css/mobile_header.css" type="text/css" rel="stylesheet" />
    </head>
    <body>
        <header class="header">
            <?php include 'admin-header.php';?>
        </header>
        <div class="start"></div>
        <div class="container-fluid main-container">
            <h2 class="text-center">Enter the details to create new Academy</h2>
            <form class="form" role="form">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter Name of Academy..">
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="select_city[]" >
                                <option>Pune</option>
                                <option>Mumbai</option>
                                <option>Chennai</option>
                                <option>Hydrabad</option>
                                <option>Benglore</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <select class="form-control" name="select_area[]">
                                <option>According to City</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="address" placeholder="Enter full address"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Nearest Landmark..">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" placeholder="Enter Office number*.." maxlength="10">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" placeholder="Enter Mobile number.." maxlength="10">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <select class="form-control" name="select_game[]">
                                <option selected="selected">Cricket</option>
                                    <option>Swimming</option>
                                    <option>Aqua</option>
                                    <option>Football</option>
                                    <option>Tennis</option>
                                    <option>Gym</option>
                                    <option>Training</option>
                                    <option>Kabaddi</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="number" name="no_of_coach" placeholder="No of Coaches" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="number" name="fees" placeholder="Fees.." class="form-control"> 
                        </div>
                        <div class="">
                            <label>Facility available</label>
                        </div>

                        <div class="form-group form-control">
                            <label><input type="checkbox" name="facility1"> Facility1</label>
                        </div>
                        <div class="form-group form-control">
                            <label><input type="checkbox" name="facility1"> Facility2</label>
                        </div>
                        <div class="form-group form-control">
                            <label><input type="checkbox" name="facility1"> Facility3</label>
                        </div>
                        <div class="form-group form-control">
                            <label><input type="checkbox" name="facility1"> Facility4</label>
                        </div>
                        <div class="form-group form-control">
                            <label><input type="checkbox" name="facility1"> Facility5</label>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label class="">Main Image:</label>
                            <div class="">
                                <input type="file" name="main_image" placeholder="Upload Image" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="">Upload Images:</label>
                            <div class="">
                                <input type="file" name="main_image" placeholder="Upload Image" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class='buttons row'>
                    <div class="col-md-2"></div>
                    <div class="form-group col-md-3">
                        <input type="submit" value="Create Academy" name='submit' class="btn form-control">
                    </div>
                    <div class="form-group col-md-3">
                        <input type="reset" value="Reset" class="btn form-control">
                    </div>
                    <div class="form-group col-md-3">
                        <input type="submit" value="Cancel" name='cancel' class="btn form-control">
                    </div>
                    <div class="col-md-2"></div>
                </div>    
            </form>
        </div>
    </body>
</html>