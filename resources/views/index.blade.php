

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Antrinių žaliavų kokybės sistema</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">


</head>
<body>


  <div class="header">
      <img src="img/somlita-uab.png" alt="" />
      <!-- <h1>Polietileno plėvelės perdirbimas ir gamyba</h1> -->
    </div>
    
    <hr />
    <h2>LDPE/LLDPE calculator of discount</h2>
    <p class="first">
      Recycler accepts it in the following way by the contract: 5.1.
      Contamination up to 2% - weight is taken according to the weighing ticket;
      5.2. Contamination up to 5% - is accepted according to the formula:
      accepted quantity = weighing check weight - actual contamination %
      difference from the permissible 2% to 5%. 5.3. If the 5% contamination is
      exceeded, the cost of 100 Euro / ton utilization is calculated
      additionally .
    </p>

    <h2 class="first">Please fill accepted weight</h2>
    <form id="myForm">
      <input id="weight" type="number" placeholder="weight (ton)" min="0" />
      <input
        id="impurities"
        type="number"
        min="2"
        placeholder="percent of impurities"
      />

      <input id="price" type="number" placeholder="price of purchasing" />
      <button id="button">Ok</button>
      <input
        id="percentOfDiscount"
        type="number"
        min="0"
        placeholder="percent of discount"
        disabled
      />
      <h2>The final price(Eur/t):</h2>
      <input id="finalPrice" type="number" placeholder="Final price" disabled />
    </form>
    <p class="reference">Shipment reference:</p>
    <p><a href="https://somlita.lt/">Somlitas webpage</a></p>
    <script src="{{asset('js/script.js')}}" ></script>

</body>
</html>
