//PAYMENT GATEWAY

const closeOverlayButton = document.querySelector("#myCloseBTN");
const payButton = document.querySelector("#payNow");
openPayGateway = document.querySelector("#openPaymentGateway");

openPayGateway.addEventListener("click", function () {
  document
    .querySelector("#overlay_container")
    .classList.add("activate-overlay");
  document
    .querySelector(".payment-content")
    .classList.add("show-payment-gateway");
});
closeOverlayButton.addEventListener("click", function () {
  document
    .querySelector("#overlay_container")
    .classList.remove("activate-overlay");
  document
    .querySelector(".payment-content")
    .classList.remove("show-payment-gateway");
});
