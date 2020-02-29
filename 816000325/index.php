<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script> src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        <title>NIB Calcs</title>
    </head>
    <body class="p-3">
        <form action="index.php" method="post">
            <div class="form-group form-inline">
                <label class="p-3" for="nisNum"><B>NIS Number</B></label>
                <input type="number" class="form-control" id="nisNum" name="nisNum" placeholder="Enter Number">
            </div>

            <div class="form-group">
                <label class="p-3" for="nisNum"><b>Salary</b></label>
                <div class="row p-3">
                    <div class="col-xx">
                        <label for="week1">Week 1</label>
                        <input type="number" min="0.00" step="0.01" value="0.00" class="form-control" placeholder="salary 1" name="sal1">
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <?php
        if(isset($_POST['nisNum'])){
            $nisNum = $_POST['nisNum'];
            $sal1 = $_POST['sal1'];
            echo $nisNum;
            echo $sal1;
        }
        else echo "Please fill out form.";


        ?>
    </body>
</html>