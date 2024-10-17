<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unggah FIle Dokumen</title>
</head>
<body>
    <form action="upload_ajax.php" method="post" enctyp="multipart/form-data" id="upload-form">
        <input type="file" name="file" id="file">
        <input type="submit" value="unggah">
    </form>

    <div id="status"></div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="upload.js"></script>
</body>
</html>