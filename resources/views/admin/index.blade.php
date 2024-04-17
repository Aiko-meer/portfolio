<!DOCTYPE html>
<html lang="en">
@include('admin.components.header')
<body >
    @include('admin.components.sidebar')
    <main class="main">
    <!--===== Home =====-->
    @include('admin.sections.home')
    <!--===== About =====-->
    @include('admin.sections.about')

    <!--===== Qualification =====-->
    @include('admin.sections.qualification')
    <!--===== Skills =====-->
    @include('admin.sections.skill')
    <!--===== Work =====-->
    @include('admin.sections.work')
    <!--===== Services =====-->
    @include('admin.sections.service')
    <!--===== Testimonials =====-->
    @include('admin.sections.client')
    <!--===== Contact =====-->
    @include('admin.sections.contact')
    <!--===== FOOTER =====-->
    @include('admin.components.footer')
</main>
</body>
</html>