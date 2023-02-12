
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Antrinių žaliavų kokybės sistema</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="{{ URL::asset('css/style.css') }}" rel="stylesheet">


</head>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
                   

                    <!-- Right Side Of Navbar -->
                    <ul style="list-style-type:none" >
                        <!-- Authentication Links -->
                        Hello,  @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
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
    
    <!-- <p><a href="https://somlita.lt/">Somlitas webpage</a></p> -->
    <button type="button" onclick="logIn()">Link</button>
    <script src="{{asset('js/script.js')}}" ></script>

<script>
 
 let guest = "{{ Auth::user()->name }}";

function logIn() {
    if (guest === "Lukas") {
        window.location = "https://somlita-my.sharepoint.com/:f:/g/personal/lukas_somlita_lt/EoqtW77kiMdOgJ2sYAznrl8B3oXvgxwhtKnG2aA1r26esg?e=ZzbumE";
    } else if (guest === "Jonas") {
        window.location = "https://www.delfi.lt/";
    }
    else if (guest === "Beatričė Šlyžiūtė") {
        window.location = "https://somlita-my.sharepoint.com/:f:/g/personal/lukas_somlita_lt/EqtjVuh-gJdCkf57L7p1o-YBiI_Aa3YtOg-51Uj4s3W8Ag?e=c4vWNR";}

        else if (guest === "Aividas") {
        window.location = "https://somlita-my.sharepoint.com/:f:/g/personal/lukas_somlita_lt/Elm4t582PbdGhHiCAY5fJCsBbdffQ9_omCFBY9eDw3f3aw?e=r44yCU";}

        else{
          window.location = "https://somlita.lt/";
        }
        logIn();
}
// console.log(guest);


</script>


</body>
</html>
