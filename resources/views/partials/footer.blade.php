<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    <style type="text/css">
    #popup{
        display: none;
    }
    </style>
  
  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">
        <div class="col-lg-2 col-md-6 footer-links"> 
            <h4>About the TVET College Times website</h4>
          @foreach ($footerElement as $key )
              @if($key->title!="Copyright notice" && $key->title!="Disclaimer notice")
                
                  <ul>                
                      <li><i class="bx bx-chevron-right"></i> <a class="test">{{ $key->title }}</a></li>
                    
                        <div id="popup" title="{{ $key->title }}" class="bx bx-chevron-right">
                            {!! $key->value !!}
                        </div>
                      </ul>
              @endif
            @endforeach
        </div>


          <div class="col-lg-2 col-md-6 footer-links"> 
            <h4>Site Map</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="/">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="abouttvet">About TVET</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="examinations">Examinations</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="resources">Resources</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="viewNews">News</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="tvetcollegetimes">TVET College Times</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="contactus">Contact US</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Terms and conditions</h4>
              @foreach ($footerElement as $key )
                  @if($key->title=="Copyright notice")
                    <ul>
                      <li><i class="bx bx-chevron-right"></i> <a class="test">{{ $key->title }}</a></li>
                      <div id="popup" title="{{ $key->title }}" class="bx bx-chevron-right">
                        
                          {!! $key->value !!}
                       
                      </div>
                    </ul>
                  @endif
             
                  @if($key->title=="Disclaimer notice")
                    <ul>
                      <li><i class="bx bx-chevron-right"></i> <a class="test">{{ $key->title }}</a></li>
                      <div id="popup" title="{{ $key->title }}" class="bx bx-chevron-right">
                        
                        {!! $key->value !!}
                        
                      </div>
                    </ul>
                  @endif
            @endforeach
            </div>
        </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Intranet</h4>
            
            <p> <a href="home">Login as administrator</a></p>
            
            
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>

    <script type="text/javascript">
    $(".test").click(function(){
        $( "#popup" ).dialog();
    });
</script>
    
  </footer><!-- End Footer -->