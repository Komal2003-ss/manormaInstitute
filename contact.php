<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <title>Manorma Institute- Cultural Programme</title>
    <style type="text/css">
     
    </style>
  </head>
  <body>
<?php include('header.php') ?>



      <section >
      <div class="container">
      
        <div class="row">
      <div class="display-5 head text-danger text-center pt-5">Contact Us</div>
      <div class="bottom_line text-center w-20 m-auto"></div>
    </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section class="contact_sec py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-1"></div>
          <div class="col-md-10 contact_form_box">
             <form >
                <div class="row">
                  <div class="col-md-6 form-group">
                    <input type="text" name="txtname" class="form-control" placeholder="Your Name" required>
                  </div>
                  <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="txtemail" placeholder="Your Email" required>
                  </div>
                </div>
                <div class="form-group mt-3">
                  <input type="tel" class="form-control" name="txtphone" placeholder="Contact No." required>
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control" name="txtmessage" rows="5" placeholder="Message" required></textarea>
                </div>
                
                <div class="text-center"><button type="submit" name="contactfrm" class="btn btn-success mt-3">Send Message</button></div>
              </form>
          <div class="py-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3549.983958106192!2d77.89959667424876!3d27.15679494956082!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397389b6fa39549f%3A0x5815c5fad1b2d4cb!2sManorama%20Institute%20of%20Management%20and%20Technology%2C%20Agra!5e0!3m2!1sen!2sin!4v1687810307118!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          </div>
          
          <div class="col-md-1"></div>
        </div>
      </div>
    </section>

<?php include('footer.php') ?>

   <script src="assets/js/tabs.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 
  </body>
</html>