@extends('client.dashboard.index')
@section('content')
            <section class="contact" id="section_5">

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f9c10b" fill-opacity="1" d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    
                    <div class="contact-container-wrap">
                        <div class="container">
                            <div class="row">
    
                                <div class="col-lg-6 col-12">
                                    <form class="custom-form contact-form" action="" method="post" role="form">
                                        <small class="small-title">Contact <strong class="text-white">05/05</strong></small>
    
                                        <h2 class="mb-5">Say Hi to us</h2>
    
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-12">                                    
                                                <input type="text" name="name" id="name" class="form-control" placeholder="Your Name" required="">
                                            </div>
    
                                            <div class="col-lg-6 col-md-6 col-12">         
                                                <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="your@company.com" required="">
                                            </div>
    
                                            <div class="col-12">
                                                <textarea class="form-control" rows="7" id="message" name="message" placeholder="Message"></textarea>
    
                                                <button type="submit" class="form-control">Submit</button>
                                            </div>
    
                                        </div>
                                    </form>
                                </div>
    
                                <div class="col-lg-6 col-12">
                                    <div class="contact-thumb">
                                        
                                        <div class="contact-info bg-white shadow-lg">
                                            <h4 class="mb-4">1340 Atwater St, Detroit, MI 48207</h4>
    
                                            <h4 class="mb-2">
                                                <a href="tel: 240-480-9600">
                                                    <i class="bi-telephone contact-icon me-2"></i>
                                                    240-480-9600
                                                </a>
                                            </h4>
    
                                            <h5>
                                                <a href="mailto:info@company.com" class="footer-link">
                                                    <i class="bi-envelope-fill contact-icon me-2"></i>
                                                    info@company.com
                                                </a>
                                            </h5>
                                            
                                            <!-- Copy "embed a map" HTML code from any point on Google Maps -> Share Link  -->
                                            
                                            <iframe class="google-map mt-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4063.103580426464!2d-83.0264337484065!3d42.33402597908653!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x883b2cce05ddf4f1%3A0xcc0559eb3fda00c9!2sDetroit%20Riverwalk%2C%20Detroit%2C%20MI!5e1!3m2!1sen!2sus!4v1657814406289!5m2!1sen!2sus" width="100%" height="300" allowfullscreen="" loading="lazy"></iframe>
                                            
                                        </div>
                                    </div>
                                </div>
    
                            </div>
                        </div>
                    </div>
                </section>

                @endsection