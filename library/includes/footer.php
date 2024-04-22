
<footer class="footer">
    <div class="contennt">
        <div class="company-info">
            <h3><b>About Tamwilcom Library</b></h3>
            <p>Tamwilcom Library is your gateway to access a vast collection of books from all over the world. Located in Rabat, Hay Riad, Morocco, our mission is to provide unparalleled access to knowledge and literature. Explore our comprehensive library to enrich your reading experience.</p>
        </div>
        <div class="contact-info">
            <h3><b>Contact Information</b></h3>
            <p><strong>Address:</strong> Rabat, Hay Riad, Morocco</p>
            <p><strong>Phone:</strong> 0674169922</p>
            <p><strong>Email:</strong> LibraryTech@tamwilcom.ma</p>
            <p><strong>Website:</strong> <a href="http://www.tamwilcom.ma">www.tamwilcom.ma</a></p>
        </div>
        <div class="follow-us">
            <h3><b>Follow Us</b></h3>
            <ul>
            <li><a href="#" class="fa fa-twitter"></a></li>
                <li><a href="#" class="fa fa-linkedin"></a></li>
                <li><a href="#" class="fa fa-facebook"></a></li>
            </ul>
        </div>
        <div class="button-up">
        <button onclick="topFunction()" id="myBtn" title="Go to top">
        <i class="fas fa-arrow-up"></i>
        </button>
        </div>
    </div>
</footer>
<script>

var mybutton = document.getElementById("myBtn");
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
function topFunction() {
  document.body.scrollTop = 0; 
  document.documentElement.scrollTop = 0; }
</script>
