<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Image Cropper</title>
  <link rel="stylesheet" href="https://unpkg.com/cropperjs/dist/cropper.css">
  <style>
    #image {
      max-width: 100%; /* This ensures the image fits in the container */
    }
    .crop-container {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-top: 20px;
    }
    #downloadButton {
      display: none; /* Initially hidden */
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <input type="file" id="inputImage">
  <div class="crop-container">
    <img id="image" src="" alt="Image to crop">
  </div>
  <button id="cropButton">Crop</button>
  <canvas id="result" style="display: none;"></canvas>
  <a id="downloadButton" download="cropped-image.png">Download Cropped Image</a>

  <script src="https://unpkg.com/cropperjs"></script>
  <script src="js/recadrer_image.js"></script>
</body>
</html>
