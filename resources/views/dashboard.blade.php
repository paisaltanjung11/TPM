<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}" />
  </head>
  <body>

  <audio id="Background-music" src="/audio/register login admin dashboard bg music.mp3" autoplay loop></audio>
  
    <div class="dashboard-container">
      <div class="navbar">
        <div class="navBar-logo">
          <img src="/Image/login image/logo.png" alt="">
        </div>
        <div class="navLinks">
          <a href="#dashboard">Dashboard</a>
          <a href="#timeline-container">Timeline</a>
          <a href="/">Logout</a>
        </div>
      </div>

      <div class="dashboard-content" id="dashboard">
        <div class="dashboard-text">
          <div class="title">
            <div class="first-line">
              <h1>WELCOME!</h1>
            </div>
            <div class="second-line">
              <h3>{{ $team->name }}</h3>
            </div>
          </div>
    
          <div class="data-container">
            <div class="data-title">
              <h2>Data Leader</h2>
            </div>
            <div class="data-details">
              <p>Nama: {{ $team->leader_name }}</p>
              <p>Email:  {{ $team->email_leader }}</p>
              <p>Whatsapp: {{ $team->whatsapp_leader }}</p>
              <p>LINE ID: {{ $team->line}}</p>
              <p>GitHub/Gitlab ID: {{ $team->github}}</p>
              <p>Tempat Lahir: {{ $team->birthplace}}</p>
              <p>Tanggal Lahir: {{ $team->birthdate}}</p>
            </div>
            <div class="data-redirect">
              <a href="{{ Storage::url('public/cv/' . $team->cv) }}" target="_blank">View CV</a>
              <a href="{{ Storage::url('public/id_card/' . $team->id_card) }}">View Flazz Card / ID Card</a>
            </div>
          </div>
          <div class="ctc-person">
            <p>Contact Person: 08xx xxxx xxxx (nama)</p>
          </div>
        </div>
        
  
        <div class="robot">
          <img src="/Image/login image/Mascot .png" alt="">
        </div>
      </div>
      


      <!-- TIMELINE -->
      <div class="timeline-container" id="timeline-container">
        <div class="timeline-text">
          <h2 class="timeline-text1">TIMELINE</h2>
          <h2 class="timeline-text2">TIMELINE</h2>
          <h2 class="timeline-date">July 2024</h2>
        </div>
        <div class="circles">
          <img id="circle" src="/image/Timeline/circles.png" alt="">
        </div>
        
        <div class="dot-container-1" id="dot1-container">
          <div id="dot-1-action">Open Registration</div>
          <div class="dot-1" id="dot-1">8</div>
        </div>
        
        <div class="dot-container-2" id="dot2-container">
          <div id="dot-2-action">Close Registration</div>
          <div class="dot-2" id="dot-2">23</div>
        </div>
  
        <div class="dot-container-3" id="dot3-container">
          <div id="dot-3-action">Technical Meeting</div>
          <div class="dot-3" id="dot-3">26</div>
        </div>
  
        <div class="dot-container-4" id="dot4-container">
          <div id="dot-4-action">Hackathon D-1</div>
          <div class="dot-4" id="dot-4">28</div>
        </div>
  
        <div class="dot-container-5" id="dot5-container">
          <div id="dot-5-action">Hackathon D-2</div>
          <div class="dot-5" id="dot-5">29</div>
        </div>
  
        <div class="dot-container-6" id="dot6-container">
          <div id="dot-6-action">Hackathon D-3</div>
          <div class="dot-6" id="dot-6">30</div>
        </div>
      </div>
      <!-- href LOGOUT -->
    </div>
    </div>
    

    <script src="{{ asset('js/dashboard.js') }}"></script>
  </body>
</html>
