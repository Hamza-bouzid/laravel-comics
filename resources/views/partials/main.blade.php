<main>
  <div class="jumbo"></div>
  <div class="comics">
    <div class="hb-container hb-container_comics">
      <button class="current">Current series</button>
      <!--Comic-->
      @foreach ($comics as $comic)
      <div class="comic">
        <div class="comic-img">
          <img src="{{$comic['thumb']}}" />
        </div>
        <span>{{$comic['series']}}</span>
      </div>
      @endforeach
      
      <!--Load More-->
      <button class="load-more">Load More</button>
    </div>
  </div>
</main>
