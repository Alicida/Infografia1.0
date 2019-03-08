<div class="row">
  <div class="col-sm-5 times">
    <h3>Horarios de conexión</h3>
    <!--<canvas id="schedulesChart"></canvas>-->
    <div class="row">
      <div class="col-sm-4 vertical">
        <div id="morning">{{ $times->morning }}%</div>
        <div class="image"><img src="{{ App::$base_path }}/dist/img/manana.png" alt=""></div>
      </div>
      <div class="col-sm-4 vertical">
        <div id="afternoon">{{ $times->afternoon }}%</div>
        <div class="image"><img src="{{ App::$base_path }}/dist/img/tarde.png" alt=""></div>
      </div>
      <div class="col-sm-4 vertical">
        <div id="night">{{ $times->night }}%</div>
        <div class="image"><img src="{{ App::$base_path }}/dist/img/noche.png" alt=""></div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4">Conexión en la mañana</div>
      <div class="col-sm-4">Conexión en la tarde</div>
      <div class="col-sm-4">Conexión en la noche</div>
    </div>
  </div>
  <div class="col-sm-7 providers">
    <h3>Usuarios con experiencia <br>en internet</h3>
    <!--<canvas id="usersChart"></canvas>-->
    <div class="row">
      <div class="col-sm-6">
        <div class="bilateral bilateral_left">
          <div id="telmex">{{ $providers->telmex }}%</div><div class="text_left">TELMEX&nbsp&nbsp&nbsp&nbsp&nbsp</div>
        </div>
        <div class="bilateral"></div>
        <div class="bilateral bilateral_left">
          <div id="izzi">{{ $providers->izzi }}%</div><div class="text_left">Izzi / Cablevisión&nbsp&nbsp&nbsp&nbsp&nbsp</div>
        </div>
        <div class="bilateral"></div>
        <div class="bilateral bilateral_left">
          <div id="dontremember">{{ $providers->dontremember }}%</div><div class="text_left">No recuerda&nbsp&nbsp&nbsp&nbsp&nbsp</div>
        </div>
        <div class="bilateral"></div>
        <div class="bilateral bilateral_left">
          <div id="dish">{{ $providers->dish }}%</div><div class="text_left">Dish&nbsp&nbsp&nbsp&nbsp&nbsp</div>
        </div>
        <div class="bilateral"></div>
      </div>
      <div class="col-sm-6">
        <div class="bilateral"></div>
        <div class="bilateral bilateral_right">
          <div id="others">{{ $providers->others }}%</div><div class="text_right">&nbsp&nbsp&nbsp&nbsp&nbspOtro</div>
        </div>
        <div class="bilateral"></div>
        <div class="bilateral bilateral_right">
          <div id="megacable">{{ $providers->megacable }}%</div><div class="text_right">&nbsp&nbsp&nbsp&nbsp&nbspMegacable</div>
        </div>
        <div class="bilateral"></div>
        <div class="bilateral bilateral_right">
          <div id="total">{{ $providers->total }}%</div><div class="text_right">&nbsp&nbsp&nbsp&nbsp&nbspTotal Play</div>
        </div>
        <div class="bilateral"></div>
        <div class="bilateral bilateral_right">
          <div id="sky">{{ $providers->sky }}%</div><div class="text_right">&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSky</div>
        </div>
      </div>
    </div>
    <div class="row">
      <div id="inforUsers" class="col-sm-8">
        <p>El {{ $experience }}% de los clientes encuestados menciona haber tenido anteriormente un servicio de internet. El {{ $providers->others }}% de otros se refiere a Axtel, Maxforn y mencionan Telcel.</p>
      </div>
      <div class="col-sm-4"></div>
    </div>
    <div >

    </div>
  </div>
</div>
