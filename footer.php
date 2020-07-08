<footer>
    <div class="d-flex flex-row">
        <div style="margin-right: 60px;">
            <img src="<?php echo get_template_directory_uri() . '/img/brand.png'; ?>" alt="Brand" height="50"
                width="180" srcset="">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis libero rem repellat odio incidunt
                rerum iste distinctio, aperiam ea iure! <br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam provident quaerat ipsam
                laudantium itaque pariatur atque reiciendis tenetur rem ullam.<br>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores rem magnam repellendus.
            </p>
        </div>
        <div>
            <h4 style="padding-left: 1rem;">Company Links</h4>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="#">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Partners</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Terms of Use</a>
                </li>
            </ul>
        </div>
        <div>
            <div>
                <h4>Newsletter</h4>
                <div class="input-group mb-3 newsletter">
                    <input type="text" class="form-control" placeholder="Enter your email address"
                        aria-label="Enter your email address" aria-describedby="button-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button" id="button-addon2">Subscribe</button>
                    </div>
                </div>
            </div>
            <div>
                <h4>Follow Us</h4>
                <nav class="nav follow">
                    <a class="nav-link" href="#"><i class="fa fa-facebook-square"></i></a>
                    <a class="nav-link" href="#"><i class="fa fa-twitter-square"></i></a>
                    <a class="nav-link" href="#"><i class="fa fa-linkedin"></i></a>
                    <a class="nav-link" href="#"><i class="fa fa-github-square"></i></a>
                    <a class="nav-link" href="#"><i class="fa fa-google-plus-square"></i></a>
                </nav>
            </div>
        </div>
    </div>
    <div class="last">Copyright&copy; 2020 Company. All rights reserved.</div>
</footer>
<?php wp_footer();?>
<script>
var navBar = document.querySelector('.navbar');

function scrollManage() {
    if (window.pageYOffset > 240) {
        navBar.classList.remove("navbar-gen")
        navBar.classList.add("navbar-st")
    } else {
        navBar.classList.remove("navbar-st")
        navBar.classList.add("navbar-gen")
    }
}
window.addEventListener('scroll', scrollManage, true)
</script>
</body>

</html>