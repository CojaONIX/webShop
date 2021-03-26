<?php
    require_once "components/head.php";
    include "components/nav.php";

    $_SESSION['back_page'] = basename($_SERVER['PHP_SELF']);
    if(!isset($_SESSION['user_id'])) {
        header("Location: login.php");
    }
?>

    <hr>
    <h2 class="text-center">Upload Avatar</h2>
    <hr>
    <img src="profile/avatars/<?php echo $_SESSION['user_name']; ?>.jpg" onerror="this.onerror=null; this.src='profile/avatars/noImage.png'">
    <form action="profile/upload.php" method="post" enctype="multipart/form-data">
        <h4>Select image to upload:</h4>
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload Image" name="submit">
    </form>


    <script>
        $(document).ready(function () {

            $("#fileToUpload").change(function () {
                var formData = new FormData();
                var filesNew = $("#fileToUpload").get(0).files; //Izabrani fajlovi
                //alert(filesNew[0].name);
 
                $.ajax({
                    type: "POST",
                    url: 'profile/upload.php',
                    data: formData,
                    dataType: 'json',
                    contentType: false,
                    processData: false,
                    success: function (result, status, xhr) {
                        //alert('sfsd');
                    },
                    error: function (xhr, status, error) {
                        //alert(xhr.status + ": " + xhr.statusText);
                    }
                });
            });


        });

    </script>
</body>
</html>