<section id="r_slider">

    <div class="tp-banner-container">
        <div class="tp-banner" id="cit-home-banner">
            <ul>
            @foreach($show_slider as $slider)
                <li data-transition="slotfade-hor" data-slotamount="15" data-masterspeed="500" >
                    <img src="{{ asset('slider-images/'.$slider->image) }}" alt="" data-bgposition="center center" data-bgrepeat="no-repeat">
                </li>
            @endforeach
            </ul>
        </div>
    </div>

</section>
