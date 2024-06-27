document.getElementById('inputImage').addEventListener('change', function (event) {
    const file = event.target.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = function (e) {
        const image = document.getElementById('image');
        image.src = e.target.result;
        const cropper = new Cropper(image, {
          aspectRatio: 4 / 3,
          viewMode: 1,
        });
        console.log(image.src);
  
        document.getElementById('cropButton').addEventListener('click', function () {
          const canvas = cropper.getCroppedCanvas({
            width: 400,
            height: 300,
          });
          const resultCanvas = document.getElementById('result');
          resultCanvas.style.display = 'block';
          const context = resultCanvas.getContext('2d');
          resultCanvas.width = 400;
          resultCanvas.height = 300;
          context.drawImage(canvas, 0, 0);

          /* console.log(canvas); */
          /* console.log(canvas.toDataURL('image/png')); */
  
          // Create a downloadable link for the cropped image
          const downloadButton = document.getElementById('downloadButton');
          downloadButton.style.display = 'block';
          downloadButton.href = canvas.toDataURL('image/png');
        });
      };
      reader.readAsDataURL(file);
    }
  });
  