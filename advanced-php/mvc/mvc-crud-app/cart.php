

<div class="container my-5">
  <h2 class="mb-4">Shopping Cart</h2>

  <table class="table table-bordered text-center">
    <thead class="table-dark">
      <tr>
        <th>Product</th>
        <th>Price</th>
        <th>Qty</th>
        <th>Total</th>
        <th>Remove</th>
      </tr>
    </thead>

    <tbody>
      <tr>
        <td>Product 1</td>
        <td>$20</td>
        <td><input type="number" value="1" class="form-control w-50 mx-auto"></td>
        <td>$20</td>
        <td><button class="btn btn-danger btn-sm">X</button></td>
      </tr>

      <tr>
        <td>Product 2</td>
        <td>$30</td>
        <td><input type="number" value="2" class="form-control w-50 mx-auto"></td>
        <td>$60</td>
        <td><button class="btn btn-danger btn-sm">X</button></td>
      </tr>
    </tbody>
  </table>

  <div class="text-end">
    <h4>Total: $80</h4>
    <a href="<?php echo $mainurl;?>checkout" class="btn btn-success">Proceed to Checkout</a>
  </div>
</div>
