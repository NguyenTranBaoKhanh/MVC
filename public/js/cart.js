//Onload => Get the number of categories to show in cart icon
window.addEventListener("load", refreshNumInCart(-1));

function addToCart(userId, cakeId) {
  var documentRoot = document.getElementById("documentRoot").innerHTML;
  if (userId == 0) {
    launch_toast("Please login!!!");
    return;
  }
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      // document.getElementById("demo").innerHTML = this.responseText;
      console.log(this.responseText);

      var response = JSON.parse(this.response);

      if (response.isSuccess == true) {
        document.getElementById("cartAmountId").innerText = response.amount;
        launch_toast("Add to cart successful");
      } else {
        launch_toast("Add to cart failed");
      }
    }
  };
  xhttp.open(
    "GET",
    `${documentRoot}/cart/addtocart?userId=${userId}&cakeId=${cakeId}`,
    true
  );
  xhttp.send();
}

//Update the number of categories in cart icon
function refreshNumInCart(num) {
  if (num == -1) {
    //Onload => param = -1
    var documentRoot = document.getElementById("documentRoot").innerText;
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        //Get result = result of function amountIncart() in CartController
        document.getElementById("cartAmountId").innerText = this.responseText;
      }
    };
    //Call function amountInCart() in CartController
    xhttp.open("GET", `${documentRoot}/cart/amountInCart`, true);
    xhttp.send();
  } else {
    //Add to cart => new result = param 'num'
    document.getElementById("cartAmountId").innerText = 0;
  }
}

function launch_toast(message) {
  var x = document.getElementById("toast");
  document.getElementById("desc").innerText = message;
  x.className = "show";
  setTimeout(function () {
    x.className = x.className.replace("show", "");
  }, 5000);
}
