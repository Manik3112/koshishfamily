$(document).ready(function () {
  $(".menu-hamburger").click(function () {
    $(".menu-hamburger").toggleClass("active");
    $(".menu").toggleClass("active");
  });
});

$(".counting").each(function () {
  var $this = $(this),
    countTo = $this.attr("data-count");

  $({ countNum: $this.text() }).animate(
    {
      countNum: countTo,
    },

    {
      duration: 3000,
      easing: "linear",
      step: function () {
        $this.text(Math.floor(this.countNum));
      },
      complete: function () {
        $this.text(this.countNum);
        //alert('finished');
      },
    }
  );
});
/*popup function*/
window.addEventListener("load", function () {
  setTimeout(function open(event) {
    const popup = $(".popup");
    popup.css({
      display: "flex",
      "align-items": "center",
      "justify-content": "center",
    });
  }, 1000);
});

document.querySelector("#close").addEventListener("click", function () {
  document.querySelector(".popup").style.display = "none";
});
