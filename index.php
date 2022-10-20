<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="player/playerjs.js" type="text/javascript"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <img src="img/logo.png" class="img-fluid" id="logo">
                <form method="post" class="mt-5">
                    <label for="url" class="form-label">Videoni yuklash uchun link kiriting</label>
                    <div class="mb-3" style="display: flex;">
                        <input type="url" class="form-control" id="url">
                        <button type="submit" class="btn btn-primary">Go</button>
                    </div>
                </form>
            </div>

            <!--Start content-->
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Yangi Url havolasi
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="mb-3 flex">
                            <input type="text" id="disabledTextInput" class="form-control" value="https://example.com/" disabled>
                            <button type="button" id="copy" class="btn btn-primary">Nusxalash</button>
                          </div>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      iframe HTML uchun
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="mb-3">
                            <textarea class="form-control" id="exampleFormControlTextarea1" disabled rows="5"></textarea>
                            <!-- <iframe src="" style="border:0px #ffffff none;" name="myiFrame" scrolling="no" frameborder="1" marginheight="0px" marginwidth="0px" height="400px" width="600px" allowfullscreen></iframe> -->
                          </div>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Videoni ko'rish
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div id="player"></div>
                            <script>
                            let  player = new Playerjs({id:"player", file:"https://www.sample-videos.com/video123/mp4/720/big_buck_bunny_720p_5mb.mp4"});
                            </script> 
                    </div>
                  </div>
                </div>
              </div>

            <!--end content-->
        </div>
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>

</body>
</html>