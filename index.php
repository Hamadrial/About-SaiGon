<?php
  // __DIR__ = localhost/Projects/SaiGon/
  require __DIR__ . '/inc/bootstrap.php';
  require_once __DIR__ . '/inc/header.php';
  require_once __DIR__ . '/inc/mySaigon.php';
?>

<!-- STORY TELLING SECTION -->
<div class="story-telling section-divider">
  <div class="container">
    <h1>STORY TELLINGS</h1>

    <!-- Display messages -->
    <?php echo display_success(); ?>
    <?php echo display_errors(); ?>

    <p>
      Ho Chi Minh City (Vietnamese: Thành phố Hồ Chí Minh), formerly named and still often known as Saigon (Vietnamese: Sài Gòn), is the largest city in Vietnam by population.
      It was once known as Prey Nokor prior to annexation by the Vietnamese in the 17th century.
      Under the name Saigon, it was the capital of the French colony of Cochinchina and later of the independent republic of South Vietnam 1955–75.
      On 2 July 1976, Saigon merged with the surrounding Gia Định Province and was officially renamed Ho Chi Minh City after revolutionary leader Hồ Chí Minh (although the name Sài Gòn is still widely used)
    </p>
    <p>
      The metropolitan area, which consists of the Ho Chi Minh City metropolitan area, Thủ Dầu Một, Biên Hòa, Vũng Tàu, Dĩ An, Thuận An and surrounding towns, is populated by more than 10 million people, making it the most populous metropolitan area in Vietnam.
      The city's population is expected to grow to 13.9 million by 2025.
    </p>
    <p>
      The Ho Chi Minh City Metropolitan Area, a metropolitan area covering most parts of the south-east region plus Tiền Giang Province and Long An Province under planning, will have an area of 30,000 square kilometres (12,000 sq mi) with a population of 20 million inhabitants by 2020.
    </p>
  </div> <!-- /container -->
</div> <!-- /story telling -->

<!-- HUMAN OF SAIGON SECTION -->
<div class="humanofsaigon">
  <div class="container-fluid">
    <img src="img/center.jpg"/ />
  </div> <!-- /container-fluid -->

  <div class="container">
    <div class="section-divider">
      <h1>HUMAN OF SAIGON</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        Aliquam neque purus, mollis ut mauris non, tempus semper turpis.
        In hac habitasse platea dictumst. Integer sit amet maximus libero, sit amet congue nisi.
        Nam malesuada volutpat felis et elementum. Donec at risus vitae tellus faucibus mollis. Aliquam in nisl nisi. Maecenas vulputate sem ac rutrum scelerisque.
      </p>
      <p>
        Nam sit amet turpis sem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed at ornare orci.
        Ut fringilla justo non odio ullamcorper posuere.
        Nunc faucibus volutpat arcu eget pellentesque.
        Mauris vel lectus ipsum. Integer lacinia mollis libero, id scelerisque justo sagittis eget.
      </p>
      <p>
        Integer ac augue ipsum. Ut tempus tellus vitae ligula condimentum, et volutpat tellus pretium.
        Donec risus risus, dictum a metus at, iaculis venenatis enim. Quisque eu purus quis massa euismod lobortis. Integer quis nulla tincidunt, dictum leo a, fermentum ante. Fusce tellus lectus, tempus sit amet gravida vitae, molestie at justo.
        Curabitur sed varius libero, id ultrices sem.
      </p>
    </div>
  </div> <!-- /container -->
</div> <!-- /my-Saigon -->

<!-- CAROUSEL SECTION -->
<div class="carousel section-divider">
  <div class="container-fluid">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active carousel-img-custom">
          <img src="img/museum.jpg" alt="War museum" width="100%" height="500px">
        </div>

        <div class="item carousel-img-custom">
          <img src="img/pagoda.jpg" alt="Jade pagoda" width="100%" height="500px">
        </div>

        <div class="item carousel-img-custom">
          <img src="img/skydeck.jpg" alt="Rooftop bar" width="100%" height="500px">
        </div>

        <div class="item carousel-img-custom">
          <img src="img/palace.jpg" alt="Flower" width="100%" height="500px">
        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div> <!-- /myCarousel -->
  </div> <!-- /container-fluid -->
</div> <!-- /carousel -->

<div class="destination section-divider">
  <div class="container-fluid">
    <h1>DESTINATIONS</h1>
    <div class="row">
      <div class="col-md-3">
        <h3>War Remnants Museum</h3>
        <p>
          This is a sobering and unforgettable museum which details the effects of the 30 year long war between America and Vietnam.
          There are immaculately preserved tanks, planes and other war machines in the outside grounds, but the really hard-hitting information is found inside.
          Photographs, exhibits and written documentation show the horrific lengths that the American Army lowered themselves to in order to try and defeat the North Vietnamese Army.
        </p>
        <p>
          All of these weapons were used by American troops against the Vietnamese at some point during the infamous war that lasted from 1945 until 1975.
        </p>
      </div> <!-- /col -->

      <hr class="visible-sm visible-xs" />

      <div class="col-md-3">
        <h3>Jade Emperor Pagoda</h3>
        <p>
          Jade Emperor Pagoda is one of the most revered temples in Ho Chi Minh.
          Originally built in 1909 by Chinese immigrants this Taoist temple now welcomes Buddhist worshipping and is incredibly atmospheric with incense smoke hanging heavy in the air.
          Intricate architecture, carvings, statues of Gods and Goddesses and Chinese characters create an exotic and timeless ambiance.
        </p>
      </div> <!-- /col -->

      <hr class="visible-sm visible-xs" />

      <div class="col-md-3">
        <h3>Bitexco Tower and Sky Deck</h3>
        <p>
          Bitexco Tower is an ultra modern office tower in Ho Chi Minh, with a characteristic oval extension which acts as a helicopter landing pad. Standing at 262 metres tall, this 68 storey building is the highest in all of Vietnam with a sky deck offering 360 degree views of the city and surrounding area as well as a fantastic sky bar called Alto where you can see all of Ho Chi Minh while enjoying a cocktail and some tapas style international dishes. Head up here for sunset and don’t forget your camera!
        </p>
      </div> <!-- /col -->

      <hr class="visible-sm visible-xs" />

      <div class="col-md-3">
        <h3>Reunification Palace</h3>
        <p>
          The centre of the allied command and the place where the North Vietnamese claimed victory in the American War, Reunification Palace has played its part in some incredible scenes. This ageing palace has essentially been frozen in time since a North Vietnamese Army tank smashed through its gates in 1975. Visitors will get to discover secret rooms, grand reception halls and the command bunker where General Ngo Dinh Diem conducted his war strategies.
        </p>
      </div> <!-- /col -->

      <hr class="visible-sm visible-xs" />
    </div> <!-- /row -->
  </div> <!-- /container-fluid -->
</div> <!-- /destination -->

<?php require_once __DIR__ . '/inc/footer.php'; ?>
