@extends('layouts.app')


@section('content')

	<main class="page-content">
    <section class="page-heading bg-image section section-sm bg-dark bg-fixed" style="background-image: url(images/bg-01-1920x690.jpg)">
      <div class="shell text-center">
        <h2 class="page-heading-title">Contact</h2>
        <hr class="divider veil reveal-sm-block">
      </div>
    </section>
    <section>
      <div class="shell">
        <ul class="breadcrumbs">
          <li> <a href="/">Home</a> </li>
          <li class="active">Contact</li>
        </ul>
      </div>
      <hr class="hr">
    </section>
    <section class="section section-md bg-white">
      <div class="shell">
        <div class="range range-80">
          <div class="cell-sm-7 cell-md-8">
            <h3>Contact Me</h3>
            <form data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php" class="rd-mailform rd-mailform-label-outside text-left offset-top-15">
              <div class="range range-30">
                <div class="cell-md-4-9">
                  <div class="form-group">
                    <label for="contact-name" class="form-label-outside">Your Name</label>
                    <input id="contact-name" name="name" data-constraints="@Required" class="form-input form-input-impressed" type="text">
                  </div>
                  <div class="form-group">
                    <label for="contact-email" class="form-label-outside">Your Email</label>
                    <input id="contact-email" name="email" data-constraints="@Required @Email" class="form-input form-input-impressed" type="email">
                  </div>
                  <div class="form-group">
                    <label for="contact-phone" class="form-label-outside">Phone</label>
                    <input id="contact-phone" name="phone" data-constraints="@Required @Numeric" class="form-input form-input-impressed" type="text">
                  </div>
                </div>
                <div class="cell-md-5-9">
                  <div class="form-group">
                    <label for="contact-message" class="form-label-outside">Your Message</label>
                    <textarea id="contact-message" name="message" data-constraints="@Required" class="form-input form-input-impressed"></textarea>
                  </div>
                </div>
              </div>
              <button type="submit" class="button button-sm button-primary-filled">Submit</button>
            </form>
          </div>
          <div class="cell-sm-5 cell-md-4">
            <div class="inset-md-left-30 inset-md-right-30 inset-lg-left-70">
              <h3>Contact Details</h3>
              <ul class="terms-list">
                <li>
                  <dl>
                    <dt class="h5">Address</dt>
                    <dd>Vedas Academy, Canada Corner, Nashik</dd>
                  </dl>
                </li>
                <li>
                  <dl>
                    <dt class="h5">We Are Open</dt>
                    <dd>Open hours: 9.00-8.00 Mon-Sun</dd>
                  </dl>
                </li>
                <li>
                  <dl>
                    <dt class="h5">Phone</dt>
                    <dd> <a href="callto:(+91)9422757888">(+91) 9422757888</a>&nbsp;</dd>
                  </dl>
                </li>
                <li>
                  <dl>
                    <dt class="h5">Email</dt>
                    <dd> <a href="mailto:vedastraininghub@gmail.com">vedastraininghub@gmail.com</a> </dd>
                  </dl>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

@endsection