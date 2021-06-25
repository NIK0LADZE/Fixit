<script type="text/javascript">
var menu = <?php echo json_encode($menu); ?>;
function scrollSet() {
    let homeSection = document.querySelector('#home-section');
    let profSection = document.querySelector('#prof-section');
    let expSection = document.querySelector('#exp-section');
    let aboutSection = document.querySelector('#about-section');
    let contactSection = document.querySelector('#contact-section');
    var scrollPosition = window.pageYOffset;
    const offsets = {
        "home-underline": homeSection.offsetTop,
        "prof-underline": profSection.offsetTop,
        "exp-underline": expSection.offsetTop,
        "about-underline": aboutSection.offsetTop,
        "contact-underline": contactSection.offsetTop
    };
    Object.keys(offsets).forEach(val => {
        if (offsets[val] <= scrollPosition) {
            idVal = val;
            document.querySelector('.underline').removeAttribute('id');
            document.querySelector('.underline').setAttribute('id', idVal);
        }
    });
}

function setId() {
    document.querySelector('.underline').setAttribute('id', idVal);
}

function removeId() {
    document.querySelector('.underline').removeAttribute('id');
}

function mouseDown(x) {
    idVal = x;
    document.getElementById('scroll').removeAttribute('onscroll');
    document.querySelector('.underline').removeAttribute('id');
    document.querySelector('.underline').setAttribute('id', idVal);
}

function mouseUp() {
    document.querySelector(".reset").setAttribute("onscroll", "scrollSet()");
}

function getMenuWidths(menu) {
    let stylesheet = document.styleSheets[0];
    var screenWidth = screen.availWidth;
    if (screenWidth <= 1920) {
        var itemOffset = 170;
    } else if (screenWidth <= 2200) {
        var itemOffset = 220;
    } else {
        var itemOffset = 320;
    }
    var counter = 1;
    stylesheet.insertRule(".navbar ul li:nth-of-type(" + counter + ") {margin-right: " + itemOffset + "px;}", 0)
    menu.forEach(element => {
        var item = document.getElementById(element["id"]);
        var itemWidth = (item.clientWidth);
        stylesheet.insertRule(".navbar ul li:nth-of-type(" + counter + "):hover ~ .underline, #" + element["underline-id"] + " {width: " + itemWidth + "px; right: " + itemOffset + "px;}", counter);
        itemOffset += itemWidth;
        counter += 1;
    });
}

getMenuWidths(menu);
</script>
