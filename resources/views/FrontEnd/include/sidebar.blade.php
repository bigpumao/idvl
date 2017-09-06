<style>
    div.video > iframe{
        width: 345px !important;
        height: 300px !important;
    }
</style>
<div class="col-md-4 col-sm-6">
    <!-- Latest Sermons -->
    <div class="listing sermons-listing">
        <header class="listing-header">
            <!--            <h3>Útimos Vídeos</h3>-->
        </header>
        <section class="listing-cont">
            <ul>
                
              @if(isset($eventoVideo))

                <li class="item sermon featured-sermon"> <span class="date"></span>
                    <h4><a href="{{url('/')}}/FrontEnd/single-sermon.html"><center>{{$eventoVideo->titulo}}</center></a></h4>
                    <div class="featured-sermon-video video">
                        {!!$eventoVideo->frame!!}<!--Full screen -> allowfullscreen-->
                    </div>
                    <p>{!!$eventoVideo->descricao!!}</p>
<!--                    <p>Este vídeo conta a história da Igreja de Deus (Church of God), com sede em Cleveland, Tennesse, Estados Unidos. A trajetória de uma das maiores igrejas pentecostais do mundo, que fez seu 131º aniversário, no último dia 19 de agosto de 2017. Vale apena assistir esta história vibrante de uma denominação que nasceu de um avivamento na região montanhosa da Carolina do Norte - USA.</p>-->
<!--                    <div class="sermon-actions"> <a href="#" data-placement="top" data-toggle="tooltip" data-original-title="Video"><i class="fa fa-video-camera"></i></a> <a href="#" data-placement="top" data-toggle="tooltip" data-original-title="Audio"><i class="fa fa-headphones"></i></a> <a href="#" data-placement="top" data-toggle="tooltip" data-original-title="Read online"><i class="fa fa-file-text-o"></i></a> <a href="#" data-placement="top" data-toggle="tooltip" data-original-title="Download PDF"><i class="fa fa-book"></i></a> </div>-->
                </li> 

                @else
                
                
                <li class="item sermon featured-sermon"> <span class="date"></span>
                    <h4><a href="{{url('/')}}/FrontEnd/single-sermon.html"><center>Hístória da Igreja de Deus no Brasil</center></a></h4>
                    <div class="featured-sermon-video video">
                        <iframe width="640" height="360" src="https://www.youtube.com/embed/TauvAvH87YI" frameborder="0" allowfullscreen></iframe>
                    </div>

                    <p>Este vídeo conta a história da Igreja de Deus (Church of God), com sede em Cleveland, Tennesse, Estados Unidos. A trajetória de uma das maiores igrejas pentecostais do mundo, que fez seu 131º aniversário, no último dia 19 de agosto de 2017. Vale apena assistir esta história vibrante de uma denominação que nasceu de um avivamento na região montanhosa da Carolina do Norte - USA.</p>
<!--                    <div class="sermon-actions"> <a href="#" data-placement="top" data-toggle="tooltip" data-original-title="Video"><i class="fa fa-video-camera"></i></a> <a href="#" data-placement="top" data-toggle="tooltip" data-original-title="Audio"><i class="fa fa-headphones"></i></a> <a href="#" data-placement="top" data-toggle="tooltip" data-original-title="Read online"><i class="fa fa-file-text-o"></i></a> <a href="#" data-placement="top" data-toggle="tooltip" data-original-title="Download PDF"><i class="fa fa-book"></i></a> </div>-->
                </li>  
               
                @endif
            </ul>
        </section>
    </div>
</div>