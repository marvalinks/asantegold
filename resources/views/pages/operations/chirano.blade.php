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
    <h1 data-anim-child="slide-up delay-1" class="pageHeader__title is-in-view">Chirano</h1>
  </div>
</section>

<section class="layout-pt-lg pj">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <p>
          The Project is managed and operated by Asante Gold Chirano Limited, a wholly-owned Ghanaian subsidiary of Asante Gold Corporation. Asante is listed on the Canadian 
          Securities Exchange (CSE: ASE); the Ghana Stock Exchange (GSE: ASG); the Frankfurt Stock Exchange (FSE: 1A9) and the United States (OTC: ASGOF) with headquarters at 
          615-800 West Pender Street, Vancouver, British Columbia.
        </p>
        <p>
          All concessions carry a 10% free carried interest in favour of the Ghanaian government under Section 8 of the Ghanaian Mining Act.
        </p>
        <p>
          The Chirano Gold Mine comprises a granted mining lease in the Western North Region of Ghana encompassing a multi-deposit complex, within which fourteen gold deposits 
          have been identified, quantified, and reserves estimated.
        </p>
        <p>
          Identified mineralised deposits have been historically mined from both open pit and underground operations over a long period of time. The EPA permit has been granted and formal permission 
          to mine is in place. The Mine is located at 697,000N, 568,000E (UTM, WGS84, Zone 30N). AGCL also holds approximately 600km² of Prospecting Licenses approved and in process of approval. These are detailed in Item 4.
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
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.6378331155192!2d-2.384866024936092!3d6.311217925593668!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdcaea9de402359%3A0x34e898cef3b9ecc9!2sCHIRANO%20GOLD%20MINES%20LIMITED!5e0!3m2!1sen!2sgh!4v1719775522903!5m2!1sen!2sgh" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
              <th>Activity</th>
            </thead>
            <tbody>
              <tr>
                <td>1930’s</td>
                <td>Two concessions held by Gold Coast Selection and  Anglo-African Goldfields Limited</td>
                <td>No reports of work</td>
              </tr>
              <tr>
                <td>1980’s</td>
                <td>Billiton International Metals BV</td>
                <td>Regional reconnaissance</td>
              </tr>
              <tr>
                <td>1990’s</td>
                <td>Johnsons Limited (Private Ghanaian businessman) and Chirano Goldfields Company Limited </td>
                <td>Current phase of exploration initiated</td>
              </tr>
              <tr>
                <td>1993</td>
                <td>Agreement with Placer Outokumpu Exploration (POE) Limited </td>
                <td>Several phases of exploration</td>
              </tr>
              <tr>
                <td>1997</td>
                <td>Reunion Mining Company</td>
                <td>Continues exploration after Government imposed moratorium on exploration </td>
              </tr>
              <tr>
                <td>1998</td>
                <td>Red Back Mining formed Chirano Gold Mines Limited </td>
                <td>Extensive exploration and drill programmes for open pit development. BFS completed in 2003. </td>
              </tr>
              <tr>
                <td>2004</td>
                <td>Red Back Mining</td>
                <td>Decision to develop Chirano Mine. First gold pour in October 2005. 2009 plant expanded to 3.5Mtpa. First underground deposit mined in 2008 </td>
              </tr>
              <tr>
                <td>2010</td>
                <td>Kinross</td>
                <td>Buys out Red Back Mining for ownership of CGML</td>
              </tr>
              <tr>
                <td>2022</td>
                <td>Asante Gold Corporation</td>
                <td>August 2022, Asante acquires Kinross’ 90% interest in Chirano Gold Mine and CGML becomes a wholly owned subsidiary of Asante. </td>
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
        <h3><a href="https://drive.google.com/file/d/1H8z9hsVB0fPnMozDRq8DCbKuXx5JCkdZ/view?usp=drive_link" target="_blank" class="dwnld">Download Chirano Technical Report</a></h3>
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
              <h4>2.088</h4>
              <p>Gold Koz</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <p><strong>Inferred Gold Resources</strong></p>
              <h4>1.031</h4>
              <p>Gold Koz</p>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <p><strong>Proven and Probable</strong></p>
              <h4>1.059</h4>
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