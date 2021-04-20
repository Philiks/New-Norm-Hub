<?php require_once("navigation.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</head>
<body style="background-color: #709294;">

    
    <div class="container-fluid">
        <div class="container-fluid">
            <h1 style="text-align: center;">Title of the story</h1>
        </div>
        <div class="container-fluid">
            <img src="source/Level2.jpg" class="img-fluid" style="height: 350px; width: 1020px; border: 2px solid black;" alt="Story Photo">   
        </div>
        <form>
            <label class="form-label" for="customFile" style="float: right; margin-top: 20px; margin-right: 15px;">Upload Photo</label>&nbsp;&nbsp; 
            <input type="file" class="form-control" style="float: right; width: 215px; margin: 5px; margin-top: 13px" id="customFile" /> 
            <!-- ///// disabled file input <label for="formFileDisabled" class="form-label">Disabled file input example</label>
            <input class="form-control" type="file" id="formFileDisabled" disabled /> -->
        </form>
        <div class="container">
            <button type="button" class="btn btn-primary btn-lg btn-block" style="margin: 10px; margin-top: 40px;">Add title/Add Author</button>
        </div>
        <div class="container mt-5 mb-5"></div>
        <form action="">
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Create your story!</label>
                <textarea id="summernote" rows="20">khlkjklsdlk kjasljdkj jklasjdkjk asjkdjka jskdj lkajskl djlaksj kldjalksjdk lajkldj klasjdlk jaklsjdlkasj lkdjal kjlkj lkjsal kdjaklsjd lkajskl djlaksj dkl</textarea>
            </div>
        </form>
        <script src="https://cdn.tiny.cloud/1/255hn1mq0c0kauesd2u4t0yfucajhozuhi4jqweyuw5imt7w/tinymce/5/tinymce.min.js"></script>
        <script>
            tinymce.init({
                selector: 'textarea',
                height: 350,
                plugins: 'print preview paste importcss searchreplace autosave save directionality code visualblocks visualchars fullscreen image media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable charmap emoticons',
                toolbar: 'alignleft aligncenter alignright alignjustify | insertfile image media | outdent indent |  numlist bullist | forecolor backcolor removeformat | bold italic underline strikethrough | fontselect fontsizeselect formatselect | pagebreak | undo redo | charmap emoticons | ltr rtl',
                images_upload_url: 'postAcceptor.php',
                images_dataimg_filter: function(img) {
                    return !img.hasAttribute('internal-blob');  // blocks the upload of <img> elements with the attribute "internal-blob".
                }
                
            });
        </script>
        <button type="button" class="btn btn-primary" style="float: right; margin: 10px; margin-right: 15px;">Create/Done Button</button>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>