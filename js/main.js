$(".box-parent").slick({
  dots: true,
  arrows: false,
  infinite: false,
  slidesToShow: 2,
  slidesToScroll: 2,
  customPaging: function (slider, i) {
    return $(slider.$slides[i]).attr("title") + "</a>";
  },
});
