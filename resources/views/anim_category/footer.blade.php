<!-- Footer Section Begin -->
<footer class="footer">
    <div class="page-up">
        <a href="{{ url("#") }}" id="scrollToTopButton"><span class="arrow_carrot-up"></span></a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="footer__logo">
                    <a href="{{ url("./index.html") }}"><img src="{{ asset("/anime/img/logo.png") }}" alt=""></a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="footer__nav">
                    <ul>
                        <li class="active"><a href="{{ route("home") }}">Homepage</a></li>
                        <li><a href="{{ url("./categories.html") }}">Categories</a></li>
                        <li><a href="{{ url("./blog.html") }}">Our Blog</a></li>
                        <li><a href="{{ url("#") }}">Contacts</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">AnimKU</a>
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>

              </div>
          </div>
      </div>
  </footer>

  <!-- lihat lebih banyak -->
  <script src="https://cdn.jsdelivr.net/gh/tomik23/show-more@master/docs/showMore.min.js"></script>
  <script type="text/javascript">
    //      const revealButtons = document.querySelectorAll(".reveal")
    // const revealButtonsArray = Array.from(revealButtons)
    // const revealButtonSibling = revealButtonsArray[0].previousElementSibling

    // revealButtonsArray.forEach( () => {
    //   revealButtonsArray[0].addEventListener("click", () => {
    //     if(revealButtonSibling.classList.contains("clamp-two")) {
    //       revealButtonSibling.classList.remove("clamp-two");
    //       revealButtonsArray.textContent = "Show less"
    //     } else {
    //       revealButtonSibling.classList.add("clamp-two");
    //       revealButtonsArray.textContent = "Show more"
    //     }
    //   })
    // })

    new ShowMore('.text');
</script>

<!-- Js Plugins -->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/player.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/jquery.slicknav.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
  <!-- Footer Section End -->