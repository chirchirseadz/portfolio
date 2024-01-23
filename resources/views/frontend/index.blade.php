@extends('frontend.components.layout')

@section('content')
     <!--
        ===================
           NAVIGATION
        ===================
        -->
        @include('frontend.components.nav')

        <!--
        ===================
           Home
        ===================
        -->
       @include('frontend.home')
        
        <!--
        ===================
           ABOUT
        ===================
        -->
      @include('frontend.about')
        
        <!--
        ===================
           SERVICE
        ===================
        -->
      @include('frontend.services')
        
        <!--
        ===================
          FEATURE PROJECTS
        ===================
        -->
      @include('frontend.projects')
        
        <!--
        ===================
           SKILLS
        ===================
        -->
       @include('frontend.skills')
        <!--
        ===================
           EXPERIENCES
        ===================
        -->
       @include('frontend.experience')    
        
        <!--
        ===================
           PORTFOLIO
        ===================
        -->
      {{-- @include('frontend.portfolio') --}}
        
        <!--
        ===================
           QUATES
        ===================
        -->
       @include('frontend.quates')
        
        
        <!--
        ===================
           BLOG
        ===================
        -->
       {{-- @include('frontend.blog') --}}
        
        <!--
        ===================
           Testimonial
        ===================
        -->
       @include('frontend.testimonials')
        
        <!--
        ===================
           FOOTER 3
        ===================
        -->
      @include('frontend.components.footer')

@endsection