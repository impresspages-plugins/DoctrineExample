<a class="ipsAddRandomProduct btn btn-primary">Add random product</a>
<hr>
<table class="productTable">
    <tr>
        <th>Id</th>
        <th>Title</th>
        <th></th>
    </tr>
    <?php foreach($products as $product){ ?>
        <tr>
            <td><?php echo esc($product->getId()) ?></td>
            <td><?php echo esc($product->getTitle()) ?></td>
            <td><a data-id="<?php echo esc($product->getId()) ?>" class="ipsDeleteProduct btn btn-default">Delete</a></td>
        </tr>
    <?php } ?>
</table>
