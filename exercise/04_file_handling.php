<?php

$products = array(
    array(
        'id' => 1,
        'name' => 'Product 1',
        'description' => 'Description of product 1',
        'price' => 10.99,
        'category' => 'Category 1'
    ),
    array(
        'id' => 2,
        'name' => 'Product 2',
        'description' => 'Description of product 2',
        'price' => 24.99,
        'category' => 'Category 2'
    ),
    array(
        'id' => 3,
        'name' => 'Product 3',
        'description' => 'Description of product 3',
        'price' => 15.99,
        'category' => 'Category 1'
    )
);

function exportCsv($fileName, $products)
{
    $delimeter = ',';

    // create filename if not exit
    $file = fopen($fileName, "w");
    $csvHeader = array('product_id', 'product_name', 'category', 'price');
    fputcsv($file, $csvHeader, $delimeter);

    foreach ($products as $product) {
        $data = array(
            $product['id'], $product['name'],
            $product['category'], $product['price']
        );
        fputcsv($file, $data, $delimeter);
        // Move back to beginning of file
        fseek($file, 0);
    }

    // fpassthru($file);

    fclose($file);
}

exportCsv('export_product.csv', $products);
?>