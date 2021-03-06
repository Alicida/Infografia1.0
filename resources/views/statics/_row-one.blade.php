<div class="row">
  <div class="col-sm-6 genders">
    <h3>Género de <br>los titulares</h3>
    <div id="men" class="row spaceblank">
      <div class="col-sm-6">
        <img src="{{ App::$base_path }}/dist/img/hombre.png" alt="Silueta de un hombre">
      </div>
      <div class="col-sm-6">
        <p class="porcents"><span id="menCount">{{ $genders->male }}</span>%</p>
        <p>de los titulares son hombres</p>
      </div>
    </div>
    <div id="women" class="row spaceblank">
      <div class="col-sm-6">
        <img src="{{ App::$base_path }}/dist/img/mujer.png" alt="Silueta de una mujer">
      </div>
      <div class="col-sm-6">
        <p class="porcents"><span id="womenCount">{{ $genders->female }}</span>%</p>
        <p>de los titulares son mujeres</p>
      </div>
    </div>
  </div>
  <div class="col-sm-6 type">
    <h3>¿Para qué usan <br>el internet?</h3>
    <div id="house" class="row spaceblank">
      <div class="col-sm-6 ageAndWhy">
        <img src="{{ App::$base_path }}/dist/img/casa.png" alt="casa">
      </div>
      <div class="col-sm-6 ageAndWhy">
        <p class="porcents"><span id="houseCount">{{ $types->home }}</span>%</p>
        <p>de los consumidores usan el internet para su hogar</p>
      </div>
    </div>
    <div id="work" class="row spaceblank">
      <div class="col-sm-6 ageAndWhy">
        <img src="{{ App::$base_path }}/dist/img/oficina.png" alt="oficina">
      </div>
      <div class="col-sm-6 ageAndWhy">
        <p class="porcents"><span id="workCount">{{ $types->office }}</span>%</p>
        <p>de los consumidores usan el internet para su negocio y oficina</p>
      </div>
    </div>
  </div>
</div>
