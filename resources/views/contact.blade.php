@extends ('layouts.master')

@section('content')

<section style="background-color: #141432;" >
        <div class="mx-auto d-flex flex-lg-row flex-column hero-header-2-3" >
            <div class="row">
                <div class="col" >
                    <h2 style="color: #FFFFFF; text-align: left; font-family: 'poppins'; margin-bottom: 30px;">Maps</h2>
                    <div class="mapouter"><div class="gmap_canvas"><iframe width="810" height="570" id="gmap_canvas" src="https://maps.google.com/maps?q=oqury%20studio&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://embedgooglemap.net/maps/95"></a><br><style>.mapouter{position:relative;text-align:right;height:590px;width:810px;}</style><a href="https://www.embedgooglemap.net"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:590px;width:810px;}</style></div></div>                </div>

                <div class="col">
                    <h2 style="color: #FFFFFF; text-align: left; font-family: 'poppins'; margin-bottom: 30px; ">Get in contact</h2>
                    <a href="https://wasap.at/nuoGFZ" target="_blank">
                        <button style="background: #243F65; color: #FFFFFF; border-radius: 12px; padding: 30px 90px;"><img src="img/contact/wa.png" alt="" style="width: 35px; height: 35px;">WhatsApp oqurystudio</button>
                    </a><br><br>

                    <a href="https://www.instagram.com/oqurystudio/"  target="_blank">
                        <button style="background: #243F65; color: #FFFFFF; border-radius: 12px; padding: 30px 91px;"><img src="img/contact/ig.png" alt="" style="width: 35px; height: 35px;">Instagram oqurystudio</button>
                    </a><br><br>

                    <a href="https://www.tiktok.com/@oqurystudio?lang=id-ID"  target="_blank">
                        <button style="background: #243F65; color: #FFFFFF; border-radius: 12px; padding: 30px 105px;"><img src="img/contact/tiktok.png" alt="" style="width: 35px; height: 35px;">Tiktok oqurystudio</button>
                    </a><br><br>

                    <a href="https://www.youtube.com/channel/UCGCRctiSHswfzp1f3XPIdmg"  target="_blank">
                        <button style="background: #243F65; color: #FFFFFF; border-radius: 12px; padding: 30px 100px;"><img src="img/contact/yt.png" alt="" style="width: 30px; height: 30px;">Youtube oqurystudio</button>
                    </a><br><br>

                    <a href="#"  target="_blank">
                        <button style="background: #243F65; color: #FFFFFF; border-radius: 12px; padding: 30px 100px;"><img src="img/contact/gmail.png" alt="" style="width: 45px; height: 25px;"> Email oqurystudio</button>
                    </a><br><br>

                </div>
            </div>
        </div>
    </section>

@endsection