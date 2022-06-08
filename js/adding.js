document.querySelector("#upload-button").addEventListener("click", () => {
    //clicks on the file input
    document.querySelector("#hidden-upload").click();
  });
  
  //adds event listener on the hidden file input to listen for any changes
  document.querySelector("#hidden-upload").addEventListener("change", (event) => {
    //gets the file name
    document.querySelector("#upload-name").value = event.target.files[0].name;
  });