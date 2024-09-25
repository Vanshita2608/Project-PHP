<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            color: #333;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .total-row {
            font-weight: bold;
        }
        .subtotal, .tax, .total {
            text-align: right;
        }
        #return-btn {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: blue;
            color: #fff;
            text-align: center;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 150px;
            transition: background-color 0.3s;
        }
        #return-btn:hover {
            background-color: #ff8000;
        }
    </style>
    <script>
    function btnClick(){
    alert("Mail Sent Successfully");}</script>
</head>
<body>

<h1 style="text-align: center;"> Checked Out! </h1>
<h2 style="text-align: center;">Bill</h2>

<table>
  <tr>
    <th>Item</th>
    <th>Quantity</th>
    <th>Unit Price</th>
    <th>Total</th>
  </tr>
  <tr>
    <td>Freshh Chicken Veggies</td>
    <td>1</td>
    <td>Rs. 499</td>
    <td>Rs. 499</td>
  </tr>
  <tr>
    <td>Paneer Noodles</td>
    <td>2</td>
    <td>Rs. 149</td>
    <td>Rs. 149</td>
  </tr>
  <tr>
    <td>Chicken Noodles</td>
    <td>2</td>
    <td>Rs. 379</td>
    <td>Rs. 379</td>
  </tr>
  <tr class="total-row">
    <td colspan="3">Subtotal</td>
    <td class="subtotal">Rs. 1027</td>
  </tr>
  <tr class="total-row">
    <td colspan="3">Discount (5%)</td>
    <td class="tax">Rs. 51</td>
  </tr>
  <tr class="total-row">
    <td colspan="3">Total</td>
    <td class="total">Rs. 976</td>
  </tr>
  <tr class="total-row">
    <td colspan="3">Current Wallet Amount</td>
    <td class="total">Rs. 1024</td>
  </tr>
</table>

<table style="border: none;">
    <tr>
        <td style="border: none;"> <a id="return-btn" href="index.html">Return to Home</a></td>
        <td style="border: none;">   <a id="return-btn" onclick="btnClick()">Send Receipt</a></td>
    </tr>
</table>

<!--<a id="return-btn">Send Reciept</a>
-->

</body>
</html>
