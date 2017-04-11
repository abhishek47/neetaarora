@extends('layouts.app')

@section('content')

<main class="page-content">
    <section class="page-heading bg-image section section-sm bg-dark bg-fixed" style="background-image: url(images/bg-01-1920x690.jpg)">
      <div class="shell text-center">
        <h2 class="page-heading-title">Courses</h2>
        <hr class="divider">
      </div>
    </section>
    <section>
      <div class="shell">
        <ul class="breadcrumbs">
          <li> <a href="/">Home</a> </li>
          <li class="active">Courses</li>
        </ul>
      </div>
      <hr class="hr">
    </section>
    <section class="section section-md bg-white">
      <div class="shell">
        <div class="range range-80">
          <div class="cell-md-12 cell-lg-12">
            <div class="range range-xs-center range-50 range-sm-around text-center">


              <div class="cell-xs-10 cell-sm-5 cell-lg-4">
                <div class="profile-preview">
                  <figure class="profile-preview-image"> <img src="images/art.jpg" alt="" width="270" height="179"> </figure>
                  <div class="profile-preview-header">
                    <h4 class="text-bold"> <a href="team-member-profile.html">Successfull Parenting</a> </h4>
                    <p class="text-medium">Bringing Up Your Child</p>
                    <hr class="hr">
                  </div>
                  <div class="profile-preview-body">
                    <p>Secrets of succesful Parenting is an experimental workshop that guides parents, on how to bring up children.... 
                     right from the stage of conception to 10 years. It deals with the, over all development of the child covering the Physical, Mental, Social, Emotional and Spiritual areas.</p>
                  </div>
                 
        
                </div>
              </div>
              
              <div class="cell-xs-10 cell-sm-5 cell-lg-4">
                <div class="profile-preview">
                  <figure class="profile-preview-image"> <img src="images/garbhsanskar.jpg" alt="" width="270" height="179"> </figure>
                  <div class="profile-preview-header">
                    <h4 class="text-bold"> <a href="team-member-profile.html">Garbh Sanskar</a> </h4>
                    <p class="text-medium">Pregnancy Tips</p>
                    <hr class="hr">
                  </div>
                  <div class="profile-preview-body">
                    <p>Bringing up children is an Effortless process when you follow these tips from the beginning...</p>
                  </div>
                  
                </div>
              </div>
              <div class="cell-xs-10 cell-sm-5 cell-lg-4">
                <div class="profile-preview">
                  <figure class="profile-preview-image"> <img src="images/family.jpg" alt="" width="270" height="179"> </figure>
                  <div class="profile-preview-header">
                    <h4 class="text-bold"> <a href="team-member-profile.html">Advanced Parenting</a> </h4>
                    <p class="text-medium">Parenting To The Next Level</p>
                    <hr class="hr">
                  </div>
                  <div class="profile-preview-body">
                    <p>Habits decide Destiny 90% habits are made in the childhood till the age of 12 years. Hence, foundation...</p>
                  </div>
                 
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </section>
    
  </main>


@endsection