
function subscribe() {
  var email = document.getElementById("email").value;

  if (email.includes("@")) {
    // Display success message
    alert("Subscription successful! Thank you for subscribing.");
  } else {
    // Display error message
    alert("Please enter a valid email address.");
  }
}

/*let popup = document.getElementById("popup");

function openPopup(){
  popup.classList.add("open-popup");  
}

function closePopup(){
  popup.classList.remove("open-popup");
}
