<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="assets/CSS/loan.css" />
  </head>
  <body>
    <div class="background">
    <div class="loan-calculator">
      <div class="top">
        <h2>Loan Calculator</h2>

        <form action="#">
          <div class="group">
            <div class="title">Amount</div>
            <input type="text"  class="loan-amount" />
          </div>

          <div class="group">
            <div class="title">Interest Rate</div>
            <input type="text"  class="interest-rate" />
          </div>

          <div class="group">
            <div class="title">Tenure (in months)</div>
            <input type="text" class="loan-tenure" />
          </div>
        </form>
      </div>

      <div class="result">
        <div class="left">
          <div class="loan-emi">
            <h3>Loan EMI</h3>
            <div class="value"></div>
          </div>

          <div class="total-interest">
            <h3>Total Interest Payable</h3>
            <div class="value"></div>
          </div>

          <div class="total-amount">
            <h3>Total Amount</h3>
            <div class="value"></div>
          </div>

          <button class="calculate-btn">Calculate</button>
        </div>

        <div class="right">
          <canvas id="myChart" width="400" height="400"></canvas>
        </div>
      </div>
    </div>
    </div>
    </p>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.2/dist/chart.min.js"></script>
    <script src="assets/js/loan.js"></script>
  </body>
</html>