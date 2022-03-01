const clickedYes = document.getElementById("clicked-yes");
const activeClass = document.querySelector(".active-yes");
const clickedNo1 = document.getElementsByClassName("clicked-no-1");

// console.log(clickedYes1);

// clickedYes1.addEventListener("click", () => {
//   console.log("Hello!");
//   activeClass.classList.remove("active-yes");
// });
// console.log(clickedYes);
clickedYes.addEventListener("click", () => {
  console.log("hello");
  activeClass.classList.remove("active-yes");
});

clickedNo1.addEventListener("click", () => {
  activeClass.classList.add("active-yes");
});

var imgUpload = document.getElementById("upload_imgs"),
  imgPreview = document.getElementById("img_preview"),
  imgUploadForm = document.getElementById("img-upload-form"),
  totalFiles,
  previewTitle,
  previewTitleText,
  img;

imgUpload.addEventListener("change", previewImgs, false);
imgUploadForm.addEventListener(
  "submit",
  function (e) {
    e.preventDefault();
    alert(
      "Images Uploaded! (not really, but it would if this was on your website)"
    );
  },
  false
);

function previewImgs(event) {
  totalFiles = imgUpload.files.length;

  if (!!totalFiles) {
    imgPreview.classList.remove("quote-imgs-thumbs--hidden");
    previewTitle = document.createElement("p");
    previewTitle.style.fontWeight = "bold";
    previewTitleText = document.createTextNode(
      totalFiles + " Total Images Selected"
    );
    previewTitle.appendChild(previewTitleText);
    imgPreview.appendChild(previewTitle);
  }

  for (var i = 0; i < totalFiles; i++) {
    img = document.createElement("img");
    img.src = URL.createObjectURL(event.target.files[i]);
    img.classList.add("img-preview-thumb");
    imgPreview.appendChild(img);
  }
}
