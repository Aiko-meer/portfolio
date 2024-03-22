<!DOCTYPE html>
<html lang="en">
@include('landingpage.components.header')
<body>
    @include('landingpage.components.sidebar')
    <main class="main">
    <!--===== Home =====-->
    @include('landingpage.sections.home')
    <!--===== About =====-->
    @include('landingpage.sections.about')

    <!--===== Qualification =====-->
    @include('landingpage.sections.qualification')
    <!--===== Skills =====-->
    @include('landingpage.sections.skill')
    <!--===== Work =====-->
    @include('landingpage.sections.work')
    <!--===== Services =====-->
    @include('landingpage.sections.service')
    <!--===== Testimonials =====-->
    @include('landingpage.sections.client')
    <!--===== Contact =====-->
    @include('landingpage.sections.contact')
    <!--===== FOOTER =====-->
    @include('landingpage.components.footer')
</main>
</body>
</html>