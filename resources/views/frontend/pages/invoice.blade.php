<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Invoice</title>

  <style>
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      margin: 0;
    }

    ul,
    ol,
    ul li,
    p {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .container {
      width: 1220px;
      margin: 0 auto;
    }

    .hedaer {
      padding: 15px 0px;
      background-color: rgb(108, 108, 108);
      border-radius: 10px;
    }

    .hedaer h3 {
      text-align: center;
      color: #fff;
      font-size: 20px;
      text-transform: uppercase;
    }

    .row {
      display: flex;
      justify-content: space-between;
      margin-top: 30px;
    }

    .invoice-to ul li {
      padding: 2px 0;
    }

    .invoce-no ul li {
      padding: 2px 0;
      text-align: right;
    }

    .table-dark {
      background-color: black;
      color: #fff;

    }

    .col-12,
    table {
      width: 100%;
      overflow-x: scroll;
    }

    table th {
      padding: 15px 10px;

    }

    .table-light {
      background: rgb(232, 232, 232);
      margin-top: 20px;
    }

    .table-light tr td {
      padding: 10px;
      text-align: center;
    }

    .calculation {
      width: 100%;
      display: flex;
      justify-content: flex-end;
    }

    .calculation tr td {
      padding: 5px;
      text-align: right;
    }
  </style>

</head>

<body>
  <header>
    <div class="container">
      <div class="hedaer">
        <h3>Invoice</h3>
      </div>
    </div>
  </header>
  <main>
    <section class="container">
      {{ $order }}
      <div class="row">
        <div class="invoice-to">
          <ul>
            <li>
              <h3>Invoce To:</h3>
            </li>
            <li>
              <p>Alex Roy</p>
            </li>
            <li>
              <p>93483759543</p>
            </li>

            <li>
              <p>Dammam, Khubar</p>
            </li>

            <li>
              <p>123, King Abdulaziz Road.</p>
            </li>
          </ul>
        </div>
        <div class="invoce-no">
          <ul>
            <li>
              <h3>Invoce No:</h3>
            </li>
            <li>
              <p>23411</p>
            </li>
            <li>
              <p>93483759543</p>
            </li>

            <li>
              <p>12th December, 2022</p>
            </li>

            <li>
              <p>Payment Status: Paid</p>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <table class="table">
              <thead class="table-dark">
                <th>#</th>
                <th style="text-align: left;">Product Name</th>
                <th style="text-align: center;">Size</th>
                <th style="text-align: center;">Color</th>
                <th style="text-align: center;">Unit Price</th>
                <th style="text-align: center;">Quantity</th>
                <th style="text-align: center;">Total</th>
              </thead>
              <tbody class="table-light">
                <tr>
                  <td>1</td>
                  <td style="text-align: left;">Mens Black T-shirt Casual</td>
                  <td>sm</td>
                  <td>Red</td>
                  <td>50</td>
                  <td>2</td>
                  <td>100</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td style="text-align: left;">women's T-shirt Casual</td>
                  <td>md</td>
                  <td>Green</td>
                  <td>120</td>
                  <td>1</td>
                  <td>120</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td style="text-align: left;">women's Toper Coat Casual</td>
                  <td>md</td>
                  <td>Black</td>
                  <td>250</td>
                  <td>1</td>
                  <td>250</td>
                </tr>
                <tr>
                  <td>4</td>
                  <td style="text-align: left;">Mens Casual Print Shart</td>
                  <td>lg</td>
                  <td>Navi-blue</td>
                  <td>150</td>
                  <td>2</td>
                  <td>300</td>
                </tr>
                <tr>
                  <td>5</td>
                  <td style="text-align: left;">Kids Toys Car</td>
                  <td>null</td>
                  <td>null</td>
                  <td>50</td>
                  <td>1</td>
                  <td>50</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="row">
          <table class="calculation">
            <tr>
              <td style="width:180px; text-align: left;">
                <h4>Subtotal</h4>
              </td>
              <td>
                <h4>SAR 2,250</h4>
              </td>
            </tr>
            <tr>
              <td style="width:180px; text-align: left;">Shippign Cost</td>
              <td><span>SAR 30</span></td>
            </tr>
            <tr>
              <td style="width:180px; text-align: left;">Discount Amount</td>
              <td><span>SAR 250</span></td>
            </tr>

            <tr>
              <td style="width:180px; text-align: left;">Tex</td>
              <td><span>15%</span></td>
            </tr>
            <tr>
              <td style="width:180px; text-align: left;">
                <h3>Total</h3>
              </td>
              <td>
                <h3>SAR 2,250</h3>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </section>
  </main>

</body>

</html>