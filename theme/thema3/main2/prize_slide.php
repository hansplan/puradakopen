
<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<section id="" class="prize">
     <div class="container">
        <div class="row">
            <article class="col-xs-12 text-center">
				<h2><img src="<?=G5_THEME_URL?>/img/new/8/prize_title.png" title="AWARD HISTORY"/></h2>
			</article>

            <div class="col-xs-12 swiper" >
                <div class="swiper-wrapper">
                    <div class="swiper-slide" scrollbar-hide="true">
                        <img src='<?=G5_THEME_URL?>/img/new/8/prize_1.png'/>
                    </div>
                    <div class="swiper-slide">
                        <img src='<?=G5_THEME_URL?>/img/new/8/prize_2.png'/>
                    </div>
                    <div class="swiper-slide">
                        <img src='<?=G5_THEME_URL?>/img/new/8/prize_3.png'/>
                    </div>
                    <div class="swiper-slide">
                        <img src='<?=G5_THEME_URL?>/img/new/8/prize_4.png'/>
                    </div>

                    <div class="swiper-slide">
                        <img src='<?=G5_THEME_URL?>/img/new/8/prize_5.png'/>
                    </div>

                    <div class="swiper-slide">
                        <img src='<?=G5_THEME_URL?>/img/new/8/prize_6.png'/>
                    </div>

                    <div class="swiper-slide">
                        <img src='<?=G5_THEME_URL?>/img/new/8/prize_7.png'/>
                    </div>

                    <div class="swiper-slide">
                        <img src='<?=G5_THEME_URL?>/img/new/8/prize_8.png'/>
                    </div>

                    <div class="swiper-slide">
                        <img src='<?=G5_THEME_URL?>/img/new/8/prize_9.png'/>
                    </div>
                </div>
                
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <!-- <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div> -->

                <!-- If we need scrollbar -->
                <!-- <div class="swiper-scrollbar"></div>
                </div> -->
                
            </div>
        </div>
     </div>
</section>


<style>
    .prize{background:#eee}
    .prize .container{padding:40px 0;}
    .swiper{width:100%;height:300px;margin-left:10px;}
    .swiper .swiper-pagination{margin:30px 0;}
    .swiper img{text-align:center;margin:0 auto;display:block}
    .swiper .swiper-pagination-bullet-active{background:#dda246;width:12px;height:12px;vertical-align:middle}
</style>

<script>
const swiper = new Swiper('.swiper', {
      
      direction: 'horizontal',
      slidesPerView : 2,
      spaceBetween : 0, 
      loop: false,
      loopAdditionalSlides : 4,
      
     /*  autoplay : { 
        delay : 3000,
        disableOnInteraction : false,
     }, */
     autoHeight : true, 
     scrollbar: false,
     slideToClickedSlide : false,
     slidesPerGroup :2,
      pagination: {
        el: '.swiper-pagination',
        clickable : true, 
        type : 'bullets', 
        /* renderBullet : function (index, className) {
            return '<a href="#" class="' + className + ' ">' + (index + 1) + '</a>'
        }, */
      },


      // Navigation arrows
      /* navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      }, */

      // And if we need scrollbar
      scrollbar: {
        el: '.swiper-scrollbar',
      },

      onSlideChangeEnd: function (swiper) {
        console.log(swiper.activeIndex);
        // var slidesLen = swiper.slides.length;
     },

      

      breakpoints: {

            768 : {

            slidesPerView : 3,
            slidesPerGroup :3,

            },

            1200 : {

            slidesPerView : 4,
            slidesPerGroup :4,
            },
        }

    });
</script>

