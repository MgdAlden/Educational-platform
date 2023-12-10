let img = document.getElementById("img");

function readURL(input) {
  if (input.files && input.files[0] && input.files !="") {
    var reader = new FileReader();

    reader.onload = function (e) {
      img.setAttribute("src", e.target.result);
    };
    reader.readAsDataURL(input.files[0]);
  }
}
