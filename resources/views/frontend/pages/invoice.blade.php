<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Invoice</title>
  <!-- Font Awesome Icon -->
  <script src="https://kit.fontawesome.com/b868f71921.js" crossorigin="anonymous"></script>
  <!-- Bootstrap Css link -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <style>
    @font-face {
      font-family: "five-dots-bold";
      src: url(font/ArbFONTS-Luxury-1.0.otf);
    }
  </style>

</head>

<body>
  <header>
    <div class="container">
      <!-- Company Logo -->
      <nav class="text-center">
        <a class="navbar-brand" href="../index.html"><span class="logo">Five
            Dots</span></a>
      </nav>

      <div class="bg-secondary p-2 mt-3 text-center rounded">
        <h3 class="text-white text-uppercase">Invoice</h3>
      </div>
    </div>
  </header>
  <main>
    <section class="container mt-3">
      <div class="row">
        <div class="col-6">
          <div class="invoice-to">
            <h3>Invoice to:</h3>
            <h5>Rasel Ahmmed</h5>
            <small>Phone: 572890762</small>
            <br>
            <small>Dammam, Khubar</small>
            <address>
              <small>123, King Abdulaziz Road.</small>
            </address>
          </div>
        </div>
        <div class="col-6 text-end">
          <h3>Invoice No: </h3>
          <strong>23411</strong>
          <br>
          <small>Date: 12th December, 2022</small>
          <br>
          <small>Payment Status: Paid</small>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="product-item-tb">
              <table class="table ">
                <thead class="table-dark">
                  <th>#</th>
                  <th>Product Name</th>
                  <th>Size</th>
                  <th>Color</th>
                  <th>Unit Price</th>
                  <th>Quantity</th>
                  <th width="120">Total</th>
                </thead>
                <tbody class="table-light">
                  <tr>
                    <td>1</td>
                    <td>Mens Black T-shirt Casual</td>
                    <td>sm</td>
                    <td>Red</td>
                    <td>50</td>
                    <td>2</td>
                    <td>100</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td>women's T-shirt Casual</td>
                    <td>md</td>
                    <td>Green</td>
                    <td>120</td>
                    <td>1</td>
                    <td>120</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td>women's Toper Coat Casual</td>
                    <td>md</td>
                    <td>Black</td>
                    <td>250</td>
                    <td>1</td>
                    <td>250</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td>Mens Casual Print Shart</td>
                    <td>lg</td>
                    <td>Navi-blue</td>
                    <td>150</td>
                    <td>2</td>
                    <td>300</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>Kids Toys Car</td>
                    <td>null</td>
                    <td>null</td>
                    <td>50</td>
                    <td>1</td>
                    <td>50</td>
                  </tr>
                </tbody>
              </table>

              <div class="row">
                <div class="col-4 ms-auto">
                  <div class="row my-2">
                    <div class="col-8 text-end">
                      Subtotal
                    </div>
                    <div class="col-4">
                      <span>SAR 2,250</span>
                    </div>
                  </div>

                  <div class="row my-2">
                    <div class="col-8 text-end">
                      Shipping Cost
                    </div>
                    <div class="col-4">
                      <span>SAR 25</span>
                    </div>
                  </div>

                  <div class="row my-2">
                    <div class="col-8 text-end">
                      Tax (10%)
                    </div>
                    <div class="col-4">
                      <span>SAR 25</span>
                    </div>
                  </div>

                  <div class="row my-2 align-items-center bgc-primary-l3 p-2">
                    <div class="col-8 text-end">
                      Total Amount
                    </div>
                    <div class="col-4">
                      <span>SAR 2,475</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

</body>

</html>