@extends('layouts.app')

@section('scripts')
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // Get all elements with class 'elementor-button'
        const buttons = document.querySelectorAll('.nhk');

        // Loop through each button element
        buttons.forEach(button => {
            // Add additional class to the button element
            button.classList.add('col-12');
        });
    });

  </script>
@endsection

@section('styles')
  <style>
    table th{
      width: 210px;
      border: 1px solid #ccc;
      padding-left: 30px;
    }
    table{
      border: 1px solid #ccc;
      width: 95% !important;
      margin: auto;
    }
    table tr{
      border: 1px solid #ccc;
      padding-left: 30px;
    }
    table td{
      padding-left: 30px;
      border: 1px solid #ccc;
      padding-top: 10px;
      padding-bottom: 10px;
    }
    .dwnld{
      cursor: pointer;
      color: #1173ac;
    }
    .card{
      background: white;
      padding: 30px;
      box-shadow: 2px 2px 8px 3px #ccc;
      min-height: 210px;
    }
    .card p {
      font-size: 16px;
      line-height: 18px;
      color: #656565;
      margin-bottom: 10px;
    }
    .card h4{
      font-size: 42px;
      line-height: 48px;
      color: #00557E;
      margin-bottom: 10px;
    }
  </style>
@endsection

@section('content')
<section data-anim-wrap="" class="pageHeader -type-1 animated">
  <div data-anim-child="fade delay-1" class="pageHeader__image is-in-view">
    <img src="/assets/images/Bibiani.JPG" alt="image">
  </div>

  <div class="container">
    <h1 data-anim-child="slide-up delay-1" class="pageHeader__title is-in-view">Bibiani</h1>
  </div>
</section>
{{-- <section>
  <div class="row gl-2" style="justify-content: end;">
      <a href="https://drive.google.com/file/d/1MASrTvrDY0ilgsF8VSlOdRFzYgV6t70y/view?usp=sharing" target="_blank" class="button -md -dark-1 bg-accent-1 text-white col-md-4 col-xs-12">Download Bibiani Technical Report</a>
  </div>
</section> --}}

<section class="layout-pt-lg pj">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <p>
          The Project is managed and operated by Asante Gold Bibiani Limited (AGBL), a wholly owned Ghanaian subsidiary of Asante Gold Corporation. Asante is listed on the Canadian 
          Securities Exchange (CSE: ASE); the Ghana Stock Exchange (GSE: ASG): the Frankfurt Stock Exchange (FSE: 1A9) and the United States (OTC: ASGOF) with headquarters at 
          615-800 West Pender Street, Vancouver, British Columbia. The Ghanaian Government carries a 10% non-equity free carry in the Bibiani Mine.
        </p>
        <p>
          All mining leases carry a 10% free carried interest in favour of the Ghanaian government under Section 43(1) of the Minerals and Mining Act, 2006.
        </p>
        <p>
          AGBL holds one Mining Lease, as well as two Prospecting Licences, which collectively make up the AGBL tenements and span 30km strike length hosted in the Kumasi-Afema 
          Basin sediments adjacent to the Sefwi Belt volcanic and volcaniclastic assemblage. The Mining Lease concessions cover an area of approximately 49.82 km2.
        </p>
      </div>
      <div class="col-md-4">
        <h3>Follow Us</h3>
        <div class="footer__list">
          {{-- <a target="_blank" href="https://web.facebook.com/corpasantegold/">Facebook</a><br>
          <a target="_blank" href="https://twitter.com/corpasantegold">Twitter</a><br>
          <a target="_blank" href="https://www.instagram.com/corpasantegold/">Instagram</a><br>
          <a target="_blank" href="https://www.linkedin.com/company/corpasantegold">Linkedin</a><br>
          <a target="_blank" href="https://www.youtube.com/channel/UCxRIWKBllJmU2cd__w1lFUg">YouTube</a><br> --}}

          <ul>
            <li><a target="_blank" href="https://web.facebook.com/corpasantegold/">Facebook</a></li>
            <li><a target="_blank" href="https://twitter.com/corpasantegold">Twitter</a></li>
            <li><a target="_blank" href="https://www.instagram.com/corpasantegold/">Instagram</a></li>
            <li><a target="_blank" href="https://www.linkedin.com/company/corpasantegold">Linkedin</a></li>
            <li><a target="_blank" href="https://www.youtube.com/channel/UCxRIWKBllJmU2cd__w1lFUg">YouTube</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="row">
      {{-- <img src="/assets/images/bb.png" alt=""> --}}
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.476996114794!2d-2.319807324935449!3d6.461091023885285!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdb575c5c90f721%3A0x54ff3fbd8a735199!2sBibiani%20Gold%20Mine!5e0!3m2!1sen!2sgh!4v1719768600397!5m2!1sen!2sgh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <br><br>
    <div class="row">
      <h2 style="padding-left: 35px;" class="text-accent-1">History</h2>
      <br><br>
      <div class="container">
        <div class="row">
          <table>
            <thead>
              <th>Date</th>
              <th>Interested Party</th>
            </thead>
            <tbody>
              <tr>
                <td>1892 – 1913</td>
                <td>Exploitation of the shallow oxide mineralisation</td>
              </tr>
              <tr>
                <td>1927 – 1958</td>
                <td>Mining activities continued and was developed and operated by foreign investors until it was nationalised in 1958.</td>
              </tr>
              <tr>
                <td>1958 – 1973</td>
                <td>Underground mining by the State Gold Mining Company.</td>
              </tr>
              <tr>
                <td>1973 - 1995</td>
                <td>GLAMC and IGR carried out tailings reclamation and surface exploration yielding positive results for open pit mining around the historic underground Bibiani Mine.</td>
              </tr>
              <tr>
                <td>1995 – 2008</td>
                <td>Ashanti Goldfields/AngloGold Ashanti (AGA) – redeveloped the mine as an open pit operation with a modern processing plant.</td>
              </tr>
              <tr>
                <td>2008 – 2013</td>
                <td>Central African Gold (CAG)/Noble Mineral Resources.</td>
              </tr>
              <tr>
                <td>2014 – 2021</td>
                <td>Mine owned and operated by Mensin Gold Bibiani, a subsidiary of Resolute Mining Limited, which conducted significant exploration on the Project during this period.</td>
              </tr>
              <tr>
                <td>2021 – Present</td>
                <td>August 2021 Asante finalises purchase the Bibiani Gold Mine. The Mine is owned by AGBL (RGD No. CS506392014 incorporated in Ghana), a wholly owned subsidiary of Asante Gold Corporation. Open pit mining and processing has been ongoing since February 2022.</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <br><br>
    <div class="row new-section">
      <div class="col-md-6">
        <h2 style="padding-left: 35px;" class="text-accent-1">News</h2>
        <hr>
        <ul class="">
          @foreach($posts as $post)
            <li>
                <h4>{{\Carbon\Carbon::parse($post['date_gmt'])->toFormattedDateString()}}</h4>
                <a href="{{route('news.releases.details', [$post['slug']])}}">
                    <h3> {{$post['title']['rendered']}}</h3>
                </a>
            </li>
          @endforeach
        </ui>
          <a href="{{route('news.releases')}}" class="button -md -dark-1 bg-accent-1 text-white col-12">
              View All News
          </a>
      </div>
      <div class="col-md-6">
        <h2 style="padding-left: 35px;" class="text-accent-1">Downloads</h2>
        <hr>
        <h3><a href="https://drive.google.com/file/d/1MASrTvrDY0ilgsF8VSlOdRFzYgV6t70y/view?usp=sharing" target="_blank" class="dwnld">Download Bibiani Technical Report</a></h3>
      </div>
    </div>
    <br><br>
    <div class="row">
      <h2 style="padding-left: 35px;" class="text-accent-1">2023 Performance</h2>
      <hr>
      <div class="row">
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <p><strong>Gold Produced in 2023</strong></p>
              <h4>138</h4>
              <p>Koz</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br><br>
    <div class="row">
      <h2 style="padding-left: 35px;" class="text-accent-1">Reserves & Resources </h2>
      <hr>
      <div class="row">
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <p><strong>Measured and Indicated Gold Resources</strong></p>
              <h4>2.0490</h4>
              <p>Gold Koz</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <p><strong>Inferred Gold Resources</strong></p>
              <h4>1.152</h4>
              <p>Gold Koz</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <p><strong>Proven and Probable</strong></p>
              <h4>1.950</h4>
              <p>Gold Koz</p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>
<br><br>

@endsection