<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link href="css/select2.min.css" rel="stylesheet" />
    <title>Document</title>
</head>
<body>

<div class="container">

    <div class="row">

        <div class="col-sm-6 col-md-offset-3">

            <div class="panel panel-info">

                <div class="panel-heading text-center">
                    <h3>Ajax form submit</h3>
                </div>
                <div class="panel-body" style="margin: 5px">

                    <form class="form-horizontal" id="submit_form" >

                        <div class="form-group">

                            <label for="name">Name</label>
                            <input type="text" id="name" class="form-control" required>

                        </div>

                        <div class="form-group">
                            <label for="Tags">Tags</label>
                            <select class="form-control js-example-basic-multiple" name="tags[]" multiple="multiple">
                                <option>abhi</option>
                                <option>Nirjhor</option>
                                <option>fahim</option>
                                <option>biplob</option>
                            </select>
                        </div>
                        <div class="form-group">

                            <label for="phone">Phone</label>
                            <input type="text" id="phone" class="form-control" required>

                        </div>

                        <div class="form-group">

                            <button type="submit" class="btn btn-success">Insert</button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

     </div>

</div>


<script src="jQuery/jquery-3.3.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>


<!--<script>-->
<!---->
<!--   $(document).ready(function () {-->
<!---->
<!--       $("#submit_form").on('submit',function (event) {-->
<!---->
<!--          event.preventDefault();-->
<!--       })-->
<!---->
<!--   })-->
<!--</script>-->
<script src="js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.js-example-basic-multiple').select2();
    });
</script>

</body>
</html>