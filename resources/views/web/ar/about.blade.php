@extends('web.ar.layout')
@section('css')
    <link rel="stylesheet" href="{{asset('web/css/secondery-pages.css')}}">
@endsection

@section('title')
    <title>{{__('front.head.title.name')}} | {{__('front.header.about')}}</title>
@endsection

@section('pre_header_content')
    <div class="header-text">
        <div class="secondery-page-header-ovarlay">
            <h2 class="white-color">عن <span class="green-color">OVAK</span> <span class="header-line"></span></h2>
        </div>
    </div>
@endsection

@section('content')
    @include('web.ar.partials.inner_pages_header')
    <section id="vision" class="about-ovak margin-top-75">
        <div class="container">
            <p class="details-paragraph">
                <span class="gold-color">OVAK </span>وكالة إستشارات عقارية حديثة واعدة، أسست بأيدي مصرية شابة
                برؤية و أفكار مستقبلية و إمكانيات متطورة حتي نواكب التطور اليومي في
                سوق العقارات المصري و نصنع لنا اسما لامعا بين أكبر الأسماء في مجال
                العقارات الضخم. نحن نسعي لنقدم أحدث و أدق المعلومات عن سوق
                العقارات لنسهل عليك عملية البحث و جمع المعلومات التي تلبي متطلباتك
                من خلال واجهة واحده شاملة. <span class="gold-color">OVAK </span>  يفتح لك بسهولة و ببساطة بوابة
                قاعدة بيانات ضخمة لأنجح الأسماء وعمالقة المطورين و شركات البناء،
                حتي تحصل علي الاستشارة العقارية المثالية لك.
            </p>
            <div class="col-md-4 col-sm-8 col-xs-12 no-padding-xs margin-top-50 float-right">
                <h2 class="section-second-header"><span>رؤيتنا</span>  <span class="header-line"></span> </h2>
                <div class="clearfix"></div>
            </div>
            <p class="details-paragraph">
                <span class="gold-color">OVAK </span> ليست كأي شركة سمسرة عقارية جديدة في السوق المصري، نحن لا نسعي ابداً لاضافة عبء علي العميل بتكاليف  مقابل خدماتنا . <span class="gold-color">امتلك المعرفة المتطورة</span> ليس فقط بشعار، و لكن هي فكرة، عقلية، و طريقة تفكير لكل فرد في فريق <span class="gold-color">OVAK </span>.
                رؤيتنا هي ان نوفر المعلومات المتاحة للمستخدم مع تقليل ازعاج المهمات الغير ضرورية خلال عملية البحث. تضييق نطاق  البحث ليست بعملية سهلة، و لكن مع تجميع الخبرات و تحليل الكثير من البيانات، تكون معرفة ما يريده العميل بدقة اسهل ما يكون. المعرفة سلاح ذو حدين و لكن مع <span class="gold-color">OVAK </span> نجعلها في مصلحتنا و نختار منها بعناية كل ما هو متطور لنلبي جميع متطلبات عملائنا.
            </p>
            <div class="col-md-4 col-sm-8 col-xs-12 no-padding-xs margin-top-50 float-right">
                <h2 class="section-second-header"><span>مهمتنا</span> <span class="header-line"></span></h2>
                <div class="clearfix"></div>
            </div>
            <p class="details-paragraph">
                نحن نوجه إهتمامنا الكامل إلي حصول عملائنا و مستخدمينا علي أفضل
                تجربة سوقية و ذلك من خلال ضغطات قليلة فقط، لنوفر لهم الوقت في
                البحث لتجنب إهدار الكثير من الوقت سواء في البحث الشبكي او من
                خلال المعارض الحية. نحن نقدم خلاصة سنوات الخبرة لنوفر لمستخدمينا
                أدق و أشمل المعلومات ليحصلوا علي دخولٍ سهل لعالم العقارات الواسع،
                والتعرف علي أحدث الإختيارات المتاحة في السوق من وحدات و عقارات
                التي تناسب المتطلبات المختلفة .
            </p>
        </div>
    </section>
    <section id="service" class="about-service">
        <div class="service-background">
            <div class="service-details margin-top-75">
                <div class="container">
                    <div class="service-details-header col-xs-12 no-padding-xs hidden-lg hidden-md hidden-sm">
                        <div class="col-md-8 col-sm-10 col-xs-12 no-padding-xs margin-top-50">
                            <h2 class="section-second-header ovak-font"><span class="white-color">خدامتنا</span> <span class="header-line"></span></h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-sm-6 no-padding mobile-margin-top-50">
                        <div class="col-sm-12 no-padding">
                            <div class="hidden-sm hidden-md hidden-lg green-color no-padding"><div class="about-icon-design"><i class="fas fa-comments"></i></div></div>
                            <div class="col-sm-9 col-md-10 col-xs-12 no-padding white-color about-paragraph">
                                <p>خدمة الإستشارات</p>
                                <p>
                                    نقدم لك الأستشارة المناسبة لاختيارك بتوفيرنا لك معرفتنا المتطورة التي تلبي متطلباتك
                                </p>
                            </div>
                            <div class="col-md-2 col-sm-3 hidden-xs green-color no-padding"><div class="about-icon-design"><i class="fas fa-comments"></i></div></div>
                        </div>
                        <div class="col-sm-12 margin-top-75 no-padding">
                            <div class="hidden-sm hidden-md hidden-lg no-padding green-color"><div class="about-icon-design"><i class="fas fa-home"></i></div></div>
                            <div class="col-sm-9 col-md-10 col-xs-12 no-padding white-color about-paragraph">
                                <p>تصفية الوحدات</p>
                                <p>
                                    نسهل لك البحث عن الوحدة التي تحلم بها من بين أكبر مطورين
                                    المشروعات
                                </p>
                            </div>
                            <div class="col-md-2 col-sm-3 hidden-xs no-padding green-color"><div class="about-icon-design"><i class="fas fa-home"></i></div></div>
                        </div>
                        <div class="col-sm-12 margin-top-75 no-padding">
                            <div class="hidden-md hidden-sm hidden-lg no-padding green-color"><div class="about-icon-design"><i class="fas fa-shopping-bag"></i></div></div>
                            <div class="col-sm-9 col-md-10 col-xs-12 no-padding white-color about-paragraph">
                                <p>حسابة الأقساط</p>
                                <p>
                                    من خلال خدمة حسابة الأقساط التي نقدمها، يمكنك بسهوله أن تحسب
                                    الأقساط للوحدة التي تريدها، شهريا او ربع سنويا او سنويا و ستظهر لك
                                    النتائج فورا
                                </p>
                            </div>
                            <div class="col-md-2 col-sm-3 hidden-xs no-padding green-color"><div class="about-icon-design"><i class="fas fa-shopping-bag"></i></div></div>
                        </div>
                        <div class="col-sm-12 margin-top-75 no-padding">
                            <div class="hidden-lg hidden-md hidden-sm margin-top-25 no-padding green-color"><div class="about-icon-design"><i class="fas fa-shopping-bag"></i></div></div>
                            <div class="col-sm-9 col-md-10 col-xs-12 no-padding white-color about-paragraph">
                                <p>خدمة الحجز</p>
                                <p>
                                    نوفر لك إختيار الحجز عن طريق الضغط علي إسأل الآن، و سيقوم أحد
                                    ممثلينا بالتواصل معك في اقرب وقتٍ متاح للإتفاق علي مقابلة مباشرة مع
                                    الشركة المطورة المسؤولة عن الوحدة التي قمت بإختيارها
                                </p>
                            </div>
                            <div class="col-md-2 col-sm-3 hidden-xs no-padding green-color"><div class="about-icon-design"><i class="fas fa-shopping-bag"></i></div></div>
                        </div>
                    </div>
                    <div class="service-details-header col-sm-6 hidden-xs">
                        <div class="col-md-8 col-sm-10 col-xs-12 no-padding-xs margin-top-50">
                            <h2 class="section-second-header ovak-font"><span class="white-color">خدامتنا</span> <span class="header-line"></span></h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </section>
    <section id="contact" class="contact-us">
        <div class="container">
            <div class="col-xs-12 margin-top-50 float-right">
                <h2 class="section-first-header"><span>تواصل</span></h2>
                <div class="clearfix"></div>
                <h2 class="section-second-header"><span>معنا</span> <span class="header-line"></span></h2>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="contact-background">
            <div class="container white-color contact-display">
                <div class="col-sm-6 col-xs-12 margin-top-50 margin-bottom-50">
                    <div class="">
                        <div class="col-sm-8 no-padding">
                            <div><i class="fas fa-2x fa-map-marker-alt"></i></div>
                            <div class="col-sm-10 no-padding margin-top-10 float-right"><p>٦٠١ النرجس ,التجمع الخامس, القاهرة الجديدة ,القاهرة , مصر</p></div>
                        </div>
                        <div class="col-sm-4 no-padding">
                            <div><i class="far fa-2x fa-envelope"></i></div>
                            <div class="col-sm-10 no-padding margin-top-10 float-right"><a class="white-color" href="mailto: info@ovakestate.com">info@ovakestate.com</a></div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="margin-top-75">
                        <div class="col-sm-8 no-padding">
                            <div><i class="far fa-2x fa-clock"></i></div>
                            <div class="col-sm-10 no-padding margin-top-10 float-right"><p>الأحد الي الخميس 9 ص-5 م</p></div>
                        </div>
                        <div class="col-sm-4 no-padding">
                            <div><i class="fas fa-2x fa-phone-alt"></i></div>
                            <div class="col-sm-10 no-padding margin-top-10 float-right"><a class="white-color" href="tel:0201030796861">0201030796861</a></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12 margin-top-50 margin-bottom-50">
                    <div class="contact-form">
                        <form method="post" action="{{route('contact')}}">
                            {{method_field('post')}}
                            {{csrf_field()}}
                            <input type="text" name="name" placeholder="الأسم" required />
                            <input type="email" name="email" placeholder="البريد الألكتروني" required />
                            <input type="tel" name="phone" placeholder="رقم الهاتف" required />
                            <textarea placeholder="الرسالة" name="message"></textarea>
                            <div class="clearfix"></div>
                            <div class="col-sm-4 no-padding float-right"><button type="submit" class="ovak-dark-button">ارسل رسالة</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
