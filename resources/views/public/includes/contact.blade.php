 <!-- contact section -->
 <section class="contact_section  ">
    <div class="container">
      <div class="row">
        <div class="col-md-7 col-lg-6 ">
          <div class="form_container">
            <div class="heading_container ">
              <h2>
                Contact Us
              </h2>
            </div>
            <form action="{{ route('contactpost') }}" method="POST">
                @csrf
              <div>
                <input type="text" placeholder="Your Name" name="name"/>
              </div>
              <div>
                <input type="text" placeholder="Phone Number" name="phone" />
              </div>
              <div>
                <input type="email" placeholder="Email" name="email" />
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Message" name="message" />
              </div>
              <div class="btn_box">
                <button type="submit">
                  SEND
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-5 col-lg-6">
          <div class="subscribe-box">
            <h3>
              Subscribe To Our Newsletter
            </h3>
            <p>
              Neque, omnis? Maiores consectetur molestiae assumenda earum ea exercitationem velit tempora molestias quae, neque voluptas magnam maxime, repudiandae voluptatum quaerat tempore accusamus.
            </p>
            <form action="{{ route('newsletter') }}" method="POST">
                @csrf
              <input type="email" placeholder="Enter your email" name="email">
              <button type="submit">
                Subscribe
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->
