<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <div class="container my-3">
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <div class="mb-3 mt-3">
                <label for="fileToUpload" class="form-label">Select image to upload:</label>
                <input type="file" name="fileToUpload" id="fileToUpload" class="form-control" >
            </div>
            <input type="submit" value="Upload Image" name="submit" class="btn btn-primary">
        </form>
    </div>
    
    
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>