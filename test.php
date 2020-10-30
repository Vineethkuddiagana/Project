<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!-- Latest compiled and minified CSS -->
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous"> -->

<!-- Optional theme -->
<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous"> -->

<!-- Latest compiled and minified JavaScript -->
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script> -->

    </head>

<body>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
  Organize Event
</button>

    <!--Card-->
    <div class="container py-5">
        <div class="row">
                           <?php
                           $connection = mysqli_connect("localhost","root","","itp");
                            //$id= $_POST['EventID'];
                            $query= "SELECT * FROM events";
                            $query_out= mysqli_query($connection,$query);
                            while($row= mysqli_fetch_assoc($query_out))
                            {?>
            <div class="col-md-3">
                <div class="card">
                    <img src="images/<?php echo isset($row['Image'])?$row['Image']:"";?>" class="card-img-top" alt="img">
                        <div class="card-body">
                                <h5><span class="card-title"><?php echo $row['EventName'];?></span></h5>
                                <p class="card-text"><?php echo $row['EventDescription'];?></p>
                                <p class="card-text"><?php echo $row['StartDateTime'];?></p>
                                <p class="card-text"><?php echo $row['EndDateTime'];?></p>

                                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                <button type="submit" class="btn btn-primary" style="float:left">Register</button>
                                <button type="submit" class="btn btn-primary" style="float:right">Volunteer</button>
                        </div>
                </div>
            </div>
            <?php
            }?>
        </div>
    </div>
    <?php
        
        /*$connection = mysqli_connect("localhost","root","","itp");
        $query= "SELECT * FROM events";
        $query_out= mysqli_query($connection,$query);
        while($row= mysqli_fetch_array($query_out))
        {
        
            echo $row['EventName'];
            echo $row['EventDescription'];
            echo $row['StartDateTime'];
            echo $row['EndDateTime'];
        }*/
    ?>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Enter Event Details</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    
                </div>
                <form action="addevent.php" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">

                        <div class="form-group">
                            <label>Event Name</label>
                            <input type="text" name="EventName" class="form-control" placeholder="Enter event name">

                        </div>
                        <div class="form-group">
                            <label>Event Description</label>
                            <input type="text" name="EventDescription" class="form-control" placeholder="Enter event description">
                        </div>
                        <div class="form-group">
                            <label>Event Start Date and Time</label>
                            <input type="datetime-local" name="StartDateTime" class="form-control" data-toggle="datepicker">
                        </div>
                        <div class="form-group">
                            <label>Event End Date and Time</label>
                            <input type="datetime-local" name="EndDateTime" class="form-control" data-toggle="datepicker">
                        </div>
                        <div class="form-group">
                            <label>Choose Event Image</label>
                            <input type="file" name="image" class="form-control-file">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" name="addevent" class="btn btn-primary">Add event</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</html>
