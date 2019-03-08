<div class="row titleTasks">
  <h3>Principales tareas <br>que realizan al conectarse</h3>
</div>
<div class="row">
  <div class="col-sm-3 tasks">
        <p>Navegar en internet <img src="{{ App::$base_path }}/dist/img/internet.png" alt="Internet"></p>
        <p>Tareas Escolares <img src="{{ App::$base_path }}/dist/img/wiki.png" alt="Wikipedia"></p>
        <p>Revisar las Redes Sociales <img src="{{ App::$base_path }}/dist/img/redes.png" alt="Redes Sociales"></p>
        <p>Ver Videos/Películas <img src="{{ App::$base_path }}/dist/img/netflix.png" alt="Netflix"></p>
        <p>Escuchar música <img src="{{ App::$base_path }}/dist/img/spotify.png" alt="Spotify"></p>
  </div>
  <div class="col-sm-8 tasks">

    <!--<div id="barchart_values" class="chart"></div>-->
    <!--<canvas id="tasksChart"></canvas>-->
    <div class="bargraph">

      <div class="blank">
        <div class="navigate">{{ $tasks->browser }}%</div>
      </div>


      <div class="blank">
        <div class="homework"> {{ $tasks->homework }}%</div>
      </div>
      <div class="blank">
        <div class="socialNetwork"> {{ $tasks->social }}%</div>
      </div>
      <div class="blank">
        <div class="videosMovies"> {{ $tasks->movies }}%</div>
      </div>
      <div class="blank">
        <div class="music"> {{ $tasks->music }}%</div>
      </div>
    </div>
  </div>
  <div class="col-sm-1 tasks">
  </div>
</div>
