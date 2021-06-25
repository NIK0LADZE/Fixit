<?php
$menu = [
    ["name" => "კონტაქტი", "link" => "#contact-section", "id" => "menu-contact", "underline-id" => "contact-underline"],
    ["name" => "შესახებ", "link" => "#about-section", "id" => "menu-about", "underline-id" => "about-underline"],
    ["name" => "გამოცდილება", "link" => "#exp-section", "id" => "menu-exp", "underline-id" => "exp-underline"],
    ["name" => "პროფესიონალი", "link" => "#prof-section", "id" => "menu-prof", "underline-id" => "prof-underline"],
    ["name" => "მთავარი", "link" => "#home-section", "id" => "menu-home", "underline-id" => "home-underline"]
]; ?>
<nav class="navbar">
    <ul>
    <?php foreach ($menu as $item) { ?>
    <li id="<?php echo $item['id'];?>"><a href="<?php echo $item['link'];?>" onmousedown="mouseDown('<?php echo $item['underline-id'];?>')" onmouseup="setTimeout(mouseUp, 1000)" onmouseover="removeId()" onmouseout="setId()"><?php echo $item['name'];?></a></li>
    <?php } ?>
    <div class="underline"></div>
    </ul>
</nav>
<?php require_once("nav-js.php");
?>
