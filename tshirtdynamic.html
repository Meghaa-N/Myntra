<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Dynamic and Resizable Tee Designer</title>
    <link rel="stylesheet" href="styles.css" />
  </head>

  <body>
    <!-- Create the container of the tool -->
    <div class="tshirt-container">
      <div class="tshirt-image-container">
        <div id="tshirt-div">
          <!-- 
                Initially, the image will have the background tshirt that has transparency
                So we can simply update the color with CSS or JavaScript dinamically
            -->
          <img id="tshirt-backgroundpicture" src="./background_tshirt.png" />

          <div id="drawingArea" class="drawing-area">
            <div class="canvas-container">
              <canvas id="tshirt-canvas" width="200" height="400"></canvas>
            </div>
          </div>
        </div>
      </div>

      <div class="tshirt-form">
        <!-- The select that will allow the user to pick one of the static designs -->
        <div class="tshirt-form-label">
          <label for="tshirt-design">T-Shirt Design</label>
        </div>
        <select id="tshirt-design">
          <option value="">Select one of our designs ...</option>
          <option value="batman.png">Batman</option>
        </select>

        <!-- The Select that allows the user to change the color of the T-Shirt -->
        <br /><br />
        <div class="tshirt-form-label">
          <label for="tshirt-color">T-Shirt Color</label>
        </div>
        <select id="tshirt-color">
          <!-- You can add any color with a new option and definings its hex code -->
          <option value="#fff">White</option>
          <option value="#000">Black</option>
          <option value="#f00">Red</option>
          <option value="#008000">Green</option>
          <option value="#ff0">Yellow</option>
        </select>

        <br /><br />
        <div class="tshirt-form-label">
          <label for="tshirt-custompicture">Upload your own design</label>
          <label class="custom-file-upload-btn">
            <input type="file" id="tshirt-custompicture" /> Choose file
          </label>
        </div>

        <br /><br />
        <div class="tshirt-form-label">
          <label for="text-color">Text Color</label>
        </div>
        <select id="text-color">
          <!-- You can add any color with a new option and definings its hex code -->
          <option value="#fff">White</option>
          <option value="#000">Black</option>
          <option value="#f00">Red</option>
          <option value="#008000">Green</option>
          <option value="#ff0">Yellow</option>
        </select>

        <br /><br />
        <div class="tshirt-form-label">
          <label for="tshirt-text">Upload your text</label>
        </div>
        <div>
          <input type="text" id="tshirt-text" />
          <!--button to submit-->
          <!-- <button onclick="myFunction()">Click me</button> -->
          <input type="button" id="btn" value="Create" />
        </div>
        <div class="sizes-row">
          <div class="size">
            <label for="size-no-1">XS</label>
            <input type="number" id="size-no-1" min="0" />
          </div>
          <div class="size">
            <label for="size-no-2">S</label>
            <input type="number" id="size-no-2" min="0" />
          </div>
          <div class="size">
            <label for="size-no-3">M</label>
            <input type="number" id="size-no-3" min="0" />
          </div>
          <div class="size">
            <label for="size-no-4">L</label>
            <input type="number" id="size-no-4" min="0" />
          </div>
          <div class="size">
            <label for="size-no-5">XL</label>
            <input type="number" id="size-no-5" min="0" />
          </div>
          <div class="size">
            <label for="size-no-6">XXL</label>
            <input type="number" id="size-no-6" min="0" />
          </div>
        </div>
        <div class="form-footer">
          <p>
            To remove a loaded picture on the T-Shirt select it and press the
            <kbd>DEL</kbd> key.
          </p>
        </div>
      </div>
    </div>

    <!-- Include Fabric.js in the page -->
    <script src="fabric.js-4.3.1/dist/fabric.min.js"></script>
    <script src="dom-to-image/dist/dom-to-image.min.js"></script>

    <script>
      //window.alert(domtoimage);
      let canvas = new fabric.Canvas("tshirt-canvas");

      // var text = new fabric.Text('hello world', { left: 100, top: 100 });
      // canvas.add(text);

      function updateTshirtImage(imageURL) {
        fabric.Image.fromURL(imageURL, function (img) {
          img.scaleToHeight(300);
          img.scaleToWidth(300);
          canvas.centerObject(img);
          canvas.add(img);
          canvas.renderAll();
        });
      }

      // Update the TShirt color according to the selected color by the user
      document.getElementById("tshirt-color").addEventListener(
        "change",
        function () {
          document.getElementById(
            "tshirt-div"
          ).style.backgroundColor = this.value;
        },
        false
      );

      //submit button
      document.getElementById("tshirt-color").addEventListener(
        "change",
        function () {
          document.getElementById(
            "tshirt-div"
          ).style.backgroundColor = this.value;
        },
        false
      );

      // Update the TShirt color according to the selected color by the user
      document.getElementById("tshirt-design").addEventListener(
        "change",
        function () {
          // Call the updateTshirtImage method providing as first argument the URL
          // of the image provided by the select
          updateTshirtImage(this.value);
        },
        false
      );

      // When the user clicks on upload a custom picture
      document.getElementById("tshirt-custompicture").addEventListener(
        "change",
        function (e) {
          var reader = new FileReader();

          reader.onload = function (event) {
            var imgObj = new Image();
            imgObj.src = event.target.result;

            // When the picture loads, create the image in Fabric.js
            imgObj.onload = function () {
              var img = new fabric.Image(imgObj);

              img.scaleToHeight(300);
              img.scaleToWidth(300);
              canvas.centerObject(img);
              canvas.add(img);
              canvas.renderAll();
            };
          };

          // If the user selected a picture, load it
          if (e.target.files[0]) {
            reader.readAsDataURL(e.target.files[0]);
          }
        },
        false
      );

      //to add custom text in the tshirt
      document.getElementById("tshirt-text").addEventListener(
        "change",
        function (e) {
          var text = new fabric.Text(
            document.getElementById("tshirt-text").value,
            {
              left: 100,
              top: 100,
              fill: document.getElementById("text-color").value,
            }
          );
          canvas.add(text);
        },
        false
      );

      //to set text to '' when color of text is changed
      document.getElementById("text-color").addEventListener(
        "change",
        function (e) {
          document.getElementById("tshirt-text").value = "";
        },
        false
      );

      // When the user selects a picture that has been added and press the DEL key
      // The object will be removed !
      document.addEventListener(
        "keydown",
        function (e) {
          var keyCode = e.keyCode;

          if (keyCode == 46) {
            console.log(
              "Removing selected element on Fabric.js on DELETE key !"
            );
            canvas.remove(canvas.getActiveObject());
          }
        },
        false
      );
    </script>
  </body>
</html>
