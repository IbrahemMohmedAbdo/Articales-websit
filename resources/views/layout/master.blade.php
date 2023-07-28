<!DOCTYPE html>
<html lang="en">
@include('layout.head')


  <body>


    <!-- Header -->
    @include('layout.header')

    <!-- Page Content -->
    <!-- Banner Starts Here -->

    <!-- Banner Ends Here -->

   @yield('content')



    @include('layout.footer')
    @include('layout.script')



  </body>
