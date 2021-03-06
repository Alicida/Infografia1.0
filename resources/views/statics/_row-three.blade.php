<div class="row">
  <div class="col-sm-7 people">
    <h4>Cuántas personas se conectan a la red. PP {{ $pp }}% <br>el {{ $people->one + $people->more}}% restante es entre 1 persona {{ $people->one }}% <br>y más de 5 personas {{ $people->more }}%</h4>
    <div class="row">
      <div class="col-sm-6">
        <img src="{{ App::$base_path }}/dist/img/2p.png" alt="Dos personas">
        <p><span>{{ $people->two }}%</span></p>
        <p>2 Personas</p>
      </div>
      <div class="col-sm-6">
        <img src="{{ App::$base_path }}/dist/img/3p.png" alt="Tres personas">
        <p><span>{{ $people->three }}%</span></p>
        <p>3 Personas</p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <img src="{{ App::$base_path }}/dist/img/4p.png" alt="Cuatro personas">
        <p><span>{{ $people->four }}%</span></p>
        <p>4 Personas</p>
      </div>
      <div class="col-sm-6">
        <img src="{{ App::$base_path }}/dist/img/5p.png" alt="Cinco personas">
        <p><span>{{ $people->five }}%</span></p>
        <p>5 Personas</p>
      </div>
    </div>
  </div>
  <div class="col-sm-5 ages">
    <h3 id="blackText">Edad aproximada de los  <br> usuarios de internet</h3>
    <!--<canvas id="ageChart"></canvas>-->
    <!--<div id="piechart" style="width: 900px; height: 500px;"></div>-->
    <div id="list">
      <ul>
        <li id="beforeteen">Menos de 10 años</li>
        <li id="teen">De 10 a 15 años</li>
        <li id="fiveteen">De 15 a 20 años</li>
        <li id="aftertwenty">Más de 21 años</li>
      </ul>
    </div>
    <div id="piechart" class="chart"></div>
  </div>
</div>
