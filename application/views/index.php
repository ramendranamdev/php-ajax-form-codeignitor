<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AJAX Form</title>
    
    <script src="<?php echo base_url('assets/js/jquery-3.4.1.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.10.20/b-1.6.1/b-colvis-1.6.1/b-html5-1.6.1/b-print-1.6.1/r-2.2.3/datatables.min.css"/>
 
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script>


</head>
<body>

    <div id="header">
        <div class="container">
            <div class="row">
                <div class="col-6 text-left">
                    <h3>
                        <a href="<?php echo base_url(''); ?>">AJAX FORM</a>
                    </h3>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mt-2">
            <div class="col-6">
                <span><h4>USERS</h4></span>
            </div>
            <div class="col-6 text-right">
                <!-- Button trigger modal -->
                <button type="button" id="userCreateFormButton" class="btn btn-primary" data-toggle="modal" data-target="#userCreateForm">
                    +Create
                </button>
                
                <form action="deleteAll">
                <button type="submit" class="btn btn-danger" >
                    DELETE ALL
                </button>
                </form>

            </div>            
        </div>

        <div class="row mt-1">
            <div class="col-12">
                <table class="table table-striped table-bordered" style="width:100%" id="indexTable" >
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Password</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            foreach($this->main->getData() as $row)  {
                                echo "<tr>";
                                echo "<td>".$row->id."</td>";
                                echo "<td>".$row->name."</td>";
                                echo "<td>".$row->email."</td>";
                                echo "<td>".$row->password."</td>";
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>




<?php include('userCreateForm.html'); ?>

<script>
    $(document).ready(function() {
    $('#indexTable').DataTable();
} );
</script>
</body>
</html>