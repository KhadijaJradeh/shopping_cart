<?php
include "include/header.php";

$category = 0;
if (isset($_GET['category_id']) && is_numeric($_GET['category_id'])) {
    $category = $_GET['category_id'];
}
$items = getProducts($category);
?>

    <div id="index-main">
        <?php
        foreach ($items as $item) {
            ?>
            <div class="item">
                <div class='item-name'><?php echo $item['name'] ?> (code:<?php echo $item['code'] ?> )</div>
                <img class='item-img' src='img/<?php echo $item['image'] ?>'/>
                <div class='item-description'><?php echo $item['description'] ?></div>
                <div class="item-control">
                    <div class='item-price'><?php echo $item['price'] ?></div>
                    <div>
                        <form method="post" action="manage.php?id=<?php echo $item['id'] ?>">
                            <input type="text" name="quantity" value="1" size="2"/>
                            <input type="submit" class="btn green" name="add" value="ADD "/>
                        </form>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>

<?php
include "include/footer.php";
?>