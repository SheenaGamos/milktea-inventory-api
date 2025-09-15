<?php
// Simple PHP script to test Product API endpoints

function sendRequest($method, $url, $data = null) {
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);

    if ($data) {
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
        ]);
    }

    $response = curl_exec($ch);
    $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    curl_close($ch);

    return ['code' => $httpcode, 'body' => $response];
}

$baseUrl = 'http://localhost:8000/api/products';

// Test create product
echo "Creating product...\n";
$createData = ['name' => 'Test Product', 'price' => 9.99, 'description' => 'Test description'];
$createResp = sendRequest('POST', $baseUrl, $createData);
echo "Response code: {$createResp['code']}\n";
echo "Response body: {$createResp['body']}\n";

$product = json_decode($createResp['body'], true);
if (!$product || !isset($product['id'])) {
    echo "Failed to create product. Aborting tests.\n";
    exit(1);
}

$productId = $product['id'];

// Test get product
echo "Getting product...\n";
$getResp = sendRequest('GET', "$baseUrl/$productId");
echo "Response code: {$getResp['code']}\n";
echo "Response body: {$getResp['body']}\n";

// Test update product
echo "Updating product...\n";
$updateData = ['price' => 19.99];
$updateResp = sendRequest('PUT', "$baseUrl/$productId", $updateData);
echo "Response code: {$updateResp['code']}\n";
echo "Response body: {$updateResp['body']}\n";

// Test delete product
echo "Deleting product...\n";
$deleteResp = sendRequest('DELETE', "$baseUrl/$productId");
echo "Response code: {$deleteResp['code']}\n";
echo "Response body: {$deleteResp['body']}\n";

echo "API tests completed.\n";
?>
