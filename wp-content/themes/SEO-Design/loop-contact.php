    <!-- Slider Area Start-->
    <div class="services-area">
      <div class="container">
        <!-- Section-tittle -->
        <div class="row d-flex justify-content-center">
          <div class="col-lg-8">
            <div class="section-tittle text-center">
              <h2>Contactez-nous</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Slider Area End-->

    <!-- ================ contact section start ================= -->
    <section class="contact-section">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2 class="contact-title"></h2>
          </div>
          <div class="col-lg-8">
            <form
              class="form-contact contact_form"
              action="contact_process.php"
              method="post"
              id="contactForm"
              novalidate="novalidate"
            >
              <div class="row">
                <div class="col-12">
                  <div class="form-group">
                    <textarea
                      class="form-control w-100"
                      name="message"
                      id="message"
                      cols="30"
                      rows="9"
                      onfocus="this.placeholder = ''"
                      onblur="this.placeholder = 'Entrer votre message'"
                      placeholder="Entrer votre message"
                    ></textarea>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input
                      class="form-control valid"
                      name="name"
                      id="name"
                      type="text"
                      onfocus="this.placeholder = ''"
                      onblur="this.placeholder = 'Entrer votre nom complet'"
                      placeholder="Entrer votre nom complet"
                    />
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <input
                      class="form-control valid"
                      name="email"
                      id="email"
                      type="email"
                      onfocus="this.placeholder = ''"
                      onblur="this.placeholder = 'Entrer votre mail'"
                      placeholder="Entrer votre mail"
                    />
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-group">
                    <input
                      class="form-control"
                      name="subject"
                      id="subject"
                      type="text"
                      onfocus="this.placeholder = ''"
                      onblur="this.placeholder = 'Sujet de votre message'"
                      placeholder="Sujet de votre message"
                    />
                  </div>
                </div>
              </div>
              <div class="form-group mt-3">
                <button
                  type="submit"
                  class="button button-contactForm boxed-btn"
                >
                  Envoyez
                </button>
              </div>
            </form>
          </div>
          <div class="col-lg-3 offset-lg-1">
            <div class="media contact-info">
              <span class="contact-info__icon"
                ><i class="fab fa-facebook-f"></i
              ></span>
              <div class="media-body">
                <h3>Facebook</h3>
                <p>@seodesign.be</p>
              </div>
            </div>
            <div class="media contact-info">
              <span class="contact-info__icon"
                ><i class="fab fa-instagram"></i
              ></span>
              <div class="media-body">
                <h3>Instagram</h3>
                <p>#seodesign.be</p>
              </div>
            </div>
            <div class="media contact-info">
              <span class="contact-info__icon"><i class="ti-tablet"></i></span>
              <div class="media-body">
                <h3>+(32) 494 86 06 72</h3>
                <p>Lundi à Vendredi : 10h - 18h</p>
              </div>
            </div>
            <div class="media contact-info">
              <span class="contact-info__icon"><i class="ti-email"></i></span>
              <div class="media-body">
                <h3>contact@seodesign.be</h3>
                <p>Support 24/7</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ================ contact section end ================= -->
