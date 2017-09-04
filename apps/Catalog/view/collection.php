<? extract($this->context);?>
<header />
<!-- Portfolio section start -->
<div class="section secondary-section " id="portfolio">
    <div class="triangle"></div>
    <div class="container">
        <div class=" title">
            <h1><?=$collection->title?></h1>
            <p>Эксклюзивная свадебная коллекция нашего бренда TIRA BRIDAL</p>
        </div>

        <!-- Start details for portfolio project 1 -->
        <div id="single-project">

            <!-- End details for portfolio project 9 -->
            <ul id="portfolio-grid" class="thumbnails row">

                <?
                foreach($item as $i){
                    $src = $i->mainphotov->image->uri;
                    $price = $i->price ? $i->price : "Цену уточняйте по телефону";
                    echo "
                        <li class='span4 mix web' style='height: 550px'>
                            <div class='thumbnail' style='background: white'>
                                <a href='/catalog/{$i->uri}'>
                                    <img src='{$src}' alt='project {$i}' style='height: 450px'>
                                </a>
                                <br>
                                <p style='color:black; text-transform: capitalize'>{$i->title}</p>
                                <p style='color:black'>{$price}</p>
                            </div>
                        </li>";
                }
                ?>

            </ul>
        </div>
    </div>
</div>