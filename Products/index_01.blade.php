@extends('frontend.alayouts.main')
@include('frontend.service.partials.schema-ld-json')
@section('main-section')
     <!-- MAIN CONTENT SECTION (This section contains all the page content wrapped inside) -->
     @include('frontend.service.partials.sidebar')
                 <!-- Main Content Column (col-lg-7) -->
                 <div class="col-lg-7 main-content">
                     @php
                         // Get the current module object from the collection (or from a separate query)
                         $currentModuleObj = $allModules->firstWhere('slug', $currentModuleSlug);
                         
                         // Get module number (order_position)
                         $moduleNumber = $currentModuleObj->order_position ?? 1;
                         $moduleNumberFormatted = str_pad($moduleNumber, 2, '0', STR_PAD_LEFT);
                          
                         // Get module title
                         $moduleTitle = $currentModuleObj->title ?? 'Module Not Found';
                     @endphp
                     <h1 class="section-heading">{{ $currentModuleObj->title ?? 'Android App Development' }}</h1>
                     <!-- Create by user name and created_at date time -->
                     @include('frontend.service.partials.create-by-user-name')
                     <hr style="border: 0; border-top: 2px dashed #bbb;">
                     <hr style="border: 0; border-top: 2px dashed #bbb;">
                     <!-- Hero Image Section – Responsive SEO Introduction Image (16:9 Ratio) -->
                     <div class="seo-hero mb-4">
                         <div class="ratio ratio-16x9 px-3 px-md-4">
                             <img src="{{ asset('public/frontend/img/service/app-development/android-app-development/android-development-intro.webp') }}"
                                 alt="Networking Fundamentals for Beginners – Complete Guide from Beginner to Expert"
                                 class="img-fluid responsive-image rounded shadow-sm"
                                 loading="lazy"
                                 width="1920"
                                 height="1080"
                                 decoding="async"
                                 fetchpriority="high"
                                 style="object-fit: cover;">
                         </div>
                     </div>
                     <!-- ============================================================ -->
                     <!-- Complete Android App Development Module                      -->
                     <!-- ============================================================ -->
                     <!-- ===================================================== -->
                     <!-- SECTION 1: Introduction to Android App Development    -->
                     <!-- ===================================================== -->
                     <div class="section">
                         <div class="card mb-4 border">
                             <div class="card-header bg-white py-3">
                                 <h2 class="mb-0">Introduction to Android App Development</h2>
                             </div>
                             <div class="card-body p-4">
                                 <div class="alert alert-light border mb-4">
                                     <strong>What is Android App Development?</strong> Android app development is the process of creating software applications that run on the Android operating system. It involves designing, building, testing, and deploying applications using languages like Kotlin or Java, and tools like Android Studio.
                                 </div>
                                 <h3 class="fw-semibold mt-3">Understanding Android Ecosystem</h3>
                                 <p>Android is an open-source mobile operating system developed by Google. It powers billions of devices worldwide, including smartphones, tablets, smartwatches, TVs, and automotive systems. Understanding the Android ecosystem is crucial for successful app development.</p>
                                 <div class="row g-4 mt-3">
                                     <div class="col-md-4">
                                         <div class="card text-center h-100 border-primary">
                                             <div class="card-body">
                                                 <h4>📱 Android OS</h4>
                                                 <p class="small">The core operating system built on the Linux kernel. Provides hardware abstraction, memory management, and core system services.</p>
                                                 <span class="badge bg-primary">Core</span>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-4">
                                         <div class="card text-center h-100 border-success">
                                             <div class="card-body">
                                                 <h4>🛠️ Android SDK</h4>
                                                 <p class="small">Software Development Kit containing tools, libraries, and APIs for building Android applications. Includes compilers, debuggers, and emulators.</p>
                                                 <span class="badge bg-success">Tools</span>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-4">
                                         <div class="card text-center h-100 border-info">
                                             <div class="card-body">
                                                 <h4>📦 Google Play Store</h4>
                                                 <p class="small">Official app distribution platform for Android. Handles app publishing, updates, and monetization. Reaches millions of users worldwide.</p>
                                                 <span class="badge bg-info">Distribution</span>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <h3 class="fw-semibold mt-4">Android Version History</h3>
                                 <div class="table-responsive">
                                     <table class="table table-bordered">
                                         <thead class="table-dark">
                                             <tr>
                                                 <th>Version</th>
                                                 <th>Code Name</th>
                                                 <th>Release Year</th>
                                                 <th>Key Features</th>
                                                 <th>API Level</th>
                                             </tr>
                                         </thead>
                                         <tbody>
                                             <tr>
                                                 <td><strong>1.0</strong></td>
                                                 <td>Android 1.0</td>
                                                 <td>2008</td>
                                                 <td>Initial release, Gmail, Google Maps, YouTube, Android Market</td>
                                                 <td>API 1</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>1.1</strong></td>
                                                 <td>Android 1.1</td>
                                                 <td>2009</td>
                                                 <td>Fixed bugs, added alarm clock, voice search</td>
                                                 <td>API 2</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>1.5</strong></td>
                                                 <td>Cupcake</td>
                                                 <td>2009</td>
                                                 <td>On-screen keyboard, video recording, widgets, Bluetooth</td>
                                                 <td>API 3</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>1.6</strong></td>
                                                 <td>Donut</td>
                                                 <td>2009</td>
                                                 <td>CDMA support, gesture typing, improved camera</td>
                                                 <td>API 4</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>2.0-2.1</strong></td>
                                                 <td>Eclair</td>
                                                 <td>2009</td>
                                                 <td>Live wallpapers, Bluetooth 2.1, improved keyboard, HTML5 support</td>
                                                 <td>API 5-7</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>2.2</strong></td>
                                                 <td>Froyo</td>
                                                 <td>2010</td>
                                                 <td>Flash support, USB tethering, mobile hotspot, improved performance</td>
                                                 <td>API 8</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>2.3</strong></td>
                                                 <td>Gingerbread</td>
                                                 <td>2010</td>
                                                 <td>NFC support, improved keyboard, better power management</td>
                                                 <td>API 9</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>3.0-3.2</strong></td>
                                                 <td>Honeycomb</td>
                                                 <td>2011</td>
                                                 <td>Tablet-optimized UI, holographic design, action bar</td>
                                                 <td>API 11-13</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>4.0</strong></td>
                                                 <td>Ice Cream Sandwich</td>
                                                 <td>2011</td>
                                                 <td>Unified phone and tablet UI, face unlock, Android Beam</td>
                                                 <td>API 14</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>4.1-4.3</strong></td>
                                                 <td>Jelly Bean</td>
                                                 <td>2012</td>
                                                 <td>Google Now, expandable notifications, improved keyboard</td>
                                                 <td>API 16-18</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>4.4</strong></td>
                                                 <td>KitKat</td>
                                                 <td>2013</td>
                                                 <td>Immersive mode, printing support, Google Now Launcher</td>
                                                 <td>API 19</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>5.0-5.1</strong></td>
                                                 <td>Lollipop</td>
                                                 <td>2014</td>
                                                 <td>Material Design, ART runtime, multiple user accounts</td>
                                                 <td>API 21-22</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>6.0</strong></td>
                                                 <td>Marshmallow</td>
                                                 <td>2015</td>
                                                 <td>Runtime permissions, Doze mode, Google Now on Tap</td>
                                                 <td>API 23</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>7.0-7.1</strong></td>
                                                 <td>Nougat</td>
                                                 <td>2016</td>
                                                 <td>Split-screen mode, Data Saver, JIT compiler</td>
                                                 <td>API 24-25</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>8.0-8.1</strong></td>
                                                 <td>Oreo</td>
                                                 <td>2017</td>
                                                 <td>Picture-in-picture, notification channels, Autofill</td>
                                                 <td>API 26-27</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>9</strong></td>
                                                 <td>Pie</td>
                                                 <td>2018</td>
                                                 <td>Gesture navigation, Adaptive Battery, Adaptive Brightness</td>
                                                 <td>API 28</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>10</strong></td>
                                                 <td>Android 10</td>
                                                 <td>2019</td>
                                                 <td>Dark theme, Privacy improvements, Gesture navigation</td>
                                                 <td>API 29</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>11</strong></td>
                                                 <td>Android 11</td>
                                                 <td>2020</td>
                                                 <td>Conversation notifications, Device controls, One-time permissions</td>
                                                 <td>API 30</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>12</strong></td>
                                                 <td>Android 12</td>
                                                 <td>2021</td>
                                                 <td>Material You, Privacy dashboard, Camera and mic indicators</td>
                                                 <td>API 31</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>12L</strong></td>
                                                 <td>Android 12L</td>
                                                 <td>2022</td>
                                                 <td>Optimized for large screens, improved taskbar</td>
                                                 <td>API 32</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>13</strong></td>
                                                 <td>Android 13</td>
                                                 <td>2022</td>
                                                 <td>Photo picker, Themed icons, Per-app language preferences</td>
                                                 <td>API 33</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>14</strong></td>
                                                 <td>Android 14</td>
                                                 <td>2023</td>
                                                 <td>Lock screen customization, Battery health, Enhanced privacy</td>
                                                 <td>API 34</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>15</strong></td>
                                                 <td>Android 15</td>
                                                 <td>2024</td>
                                                 <td>AI features, Privacy enhancements, Performance improvements</td>
                                                 <td>API 35</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>16</strong></td>
                                                 <td>Android 16</td>
                                                 <td>2026</td>
                                                 <td>Advanced AI integration, Enhanced privacy, Improved multitasking</td>
                                                 <td>API 36</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>17</strong></td>
                                                 <td>Android 17</td>
                                                 <td>2026</td>
                                                 <td>Next-generation AI capabilities, Advanced security features, Seamless ecosystem integration</td>
                                                 <td>API 37</td>
                                             </tr>
                                         </tbody>
                                     </table>
                                 </div>
                                 <h3 class="fw-semibold mt-4">Android Market Share & Statistics 2026</h3>
                                 <div class="alert alert-info border">
                                     <strong>Key Statistics:</strong>
                                     <ul>
                                         <li>🌍 Global Market Share: ~70% of smartphones run Android</li>
                                         <li>📱 Active Devices: 3+ billion active Android devices worldwide</li>
                                         <li>📦 App Downloads: 100+ billion apps downloaded annually</li>
                                         <li>👨‍💻 Developers: 2+ million Android developers globally</li>
                                         <li>💰 Revenue: $50+ billion in app revenue annually</li>
                                     </ul>
                                 </div>
                                 <h4 class="fw-semibold mt-4">Android vs iOS Comparison</h4>
                                 <div class="table-responsive">
                                     <table class="table table-bordered">
                                         <thead class="table-dark">
                                             <tr>
                                                 <th>Feature</th>
                                                 <th>Android</th>
                                                 <th>iOS</th>
                                             </tr>
                                         </thead>
                                         <tbody>
                                             <tr>
                                                 <td><strong>Market Share</strong></td>
                                                 <td>~70%</td>
                                                 <td>~25%</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>Open Source</strong></td>
                                                 <td>Yes (AOSP)</td>
                                                 <td>No (Closed)</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>Development Language</strong></td>
                                                 <td>Kotlin, Java</td>
                                                 <td>Swift, Objective-C</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>IDE</strong></td>
                                                 <td>Android Studio</td>
                                                 <td>Xcode</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>App Distribution</strong></td>
                                                 <td>Google Play Store</td>
                                                 <td>Apple App Store</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>Development Cost</strong></td>
                                                 <td>One-time $25</td>
                                                 <td>$99/year</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>Customization</strong></td>
                                                 <td>High</td>
                                                 <td>Limited</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>Device Diversity</strong></td>
                                                 <td>High</td>
                                                 <td>Low</td>
                                             </tr>
                                         </tbody>
                                     </table>
                                 </div>
                                 <h3 class="fw-semibold mt-4">Android App Categories & Use Cases</h3>
                                 <div class="row g-3">
                                     <div class="col-md-4">
                                         <div class="card h-100 border-0 shadow-sm">
                                             <div class="card-body">
                                                 <h4>📱 Communication</h4>
                                                 <ul>
                                                     <li>Messaging apps (WhatsApp, Telegram)</li>
                                                     <li>Voice & Video calls (Zoom, Google Meet)</li>
                                                     <li>Email clients (Gmail, Outlook)</li>
                                                     <li>Social media (Facebook, Instagram)</li>
                                                 </ul>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-4">
                                         <div class="card h-100 border-0 shadow-sm">
                                             <div class="card-body">
                                                 <h4>🎮 Gaming</h4>
                                                 <ul>
                                                     <li>Casual games (Candy Crush, Subway Surfers)</li>
                                                     <li>Multiplayer games (PUBG, Call of Duty)</li>
                                                     <li>Strategy games (Clash of Clans)</li>
                                                     <li>Arcade games (Temple Run, Angry Birds)</li>
                                                 </ul>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-4">
                                         <div class="card h-100 border-0 shadow-sm">
                                             <div class="card-body">
                                                 <h4>💰 Finance</h4>
                                                 <ul>
                                                     <li>Banking apps (Chase, Wells Fargo)</li>
                                                     <li>Payment apps (PayPal, Venmo)</li>
                                                     <li>Investment apps (Robinhood, Coinbase)</li>
                                                     <li>Budgeting apps (Mint, YNAB)</li>
                                                 </ul>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-4">
                                         <div class="card h-100 border-0 shadow-sm">
                                             <div class="card-body">
                                                 <h4>🏥 Health & Fitness</h4>
                                                 <ul>
                                                     <li>Activity trackers (Google Fit, Fitbit)</li>
                                                     <li>Diet & nutrition (MyFitnessPal)</li>
                                                     <li>Meditation apps (Headspace, Calm)</li>
                                                     <li>Medical apps (Symptom checker)</li>
                                                 </ul>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-4">
                                         <div class="card h-100 border-0 shadow-sm">
                                             <div class="card-body">
                                                 <h4>🛍️ E-commerce</45>
                                                 <ul>
                                                     <li>Shopping apps (Amazon, eBay)</li>
                                                     <li>Food delivery (UberEats, DoorDash)</li>
                                                     <li>Travel apps (Expedia, Airbnb)</li>
                                                     <li>Retail apps (Walmart, Target)</li>
                                                 </ul>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-4">
                                         <div class="card h-100 border-0 shadow-sm">
                                             <div class="card-body">
                                                 <h4>🎓 Education</h4>
                                                 <ul>
                                                     <li>Learning apps (Duolingo, Khan Academy)</li>
                                                     <li>Reference apps (Wikipedia)</li>
                                                     <li>E-books (Kindle, Google Books)</li>
                                                     <li>Online courses (Coursera, Udemy)</li>
                                                 </ul>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="accordion mt-4" id="introAccordion">
                                     <div class="accordion-item">
                                         <h4 class="accordion-header">
                                             <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#introCareer">
                                                 💼 Android Developer Career Path & Job Roles
                                             </button>
                                         </h4>
                                         <div id="introCareer" class="accordion-collapse collapse" data-bs-parent="#introAccordion">
                                             <div class="accordion-body">
                                                 <h5 class="fw-semibold">Career Progression</h5>
                                                 <div class="table-responsive">
                                                     <table class="table table-bordered">
                                                         <thead class="table-dark">
                                                             <tr>
                                                                 <th>Level</th>
                                                                 <th>Experience</th>
                                                                 <th>Skills Required</th>
                                                                 <th>Average Salary</th>
                                                             </tr>
                                                         </thead>
                                                         <tbody>
                                                             <tr>
                                                                 <td><strong>Junior Developer</strong></td>
                                                                 <td>0-2 years</td>
                                                                 <td>Kotlin/Java, Android Studio basics, UI development</td>
                                                                 <td>$70,000 - $90,000</td>
                                                             </tr>
                                                             <tr>
                                                                 <td><strong>Mid-Level Developer</strong></td>
                                                                 <td>2-5 years</td>
                                                                 <td>Jetpack Compose, MVVM, Coroutines, Firebase</td>
                                                                 <td>$90,000 - $120,000</td>
                                                             </tr>
                                                             <tr>
                                                                 <td><strong>Senior Developer</strong></td>
                                                                 <td>5-8 years</td>
                                                                 <td>Architecture patterns, CI/CD, Performance optimization</td>
                                                                 <td>$120,000 - $160,000</td>
                                                             </tr>
                                                             <tr>
                                                                 <td><strong>Lead/Architect</strong></td>
                                                                 <td>8+ years</td>
                                                                 <td>System design, Team leadership, Technical strategy</td>
                                                                 <td>$160,000 - $200,000+</td>
                                                             </tr>
                                                         </tbody>
                                                     </table>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="accordion-item">
                                         <h4 class="accordion-header">
                                             <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#introSkills">
                                                 🛠️ Essential Developer Skills & Technologies
                                             </button>
                                         </h4>
                                         <div id="introSkills" class="accordion-collapse collapse" data-bs-parent="#introAccordion">
                                             <div class="accordion-body">
                                                 <h5 class="fw-semibold">Core Skills</h5>
                                                 <ul>
                                                     <li><strong>Programming Languages:</strong> Kotlin, Java, XML</li>
                                                     <li><strong>Development Tools:</strong> Android Studio, Gradle, Git</li>
                                                     <li><strong>UI/UX:</strong> XML layouts, Jetpack Compose, Material Design</li>
                                                     <li><strong>Architecture:</strong> MVVM, MVI, Clean Architecture</li>
                                                     <li><strong>Database:</strong> Room, SQLite, Firebase</li>
                                                     <li><strong>Networking:</strong> Retrofit, OkHttp, JSON/XML parsing</li>
                                                     <li><strong>Testing:</strong> JUnit, Espresso, Mockito</li>
                                                     <li><strong>DevOps:</strong> CI/CD, GitHub Actions, Fastlane</li>
                                                 </ul>
                                                 <h6 class="fw-semibold mt-3">Emerging Technologies (2026)</h6>
                                                 <ul>
                                                     <li>🤖 AI Integration (Gemini API, OpenAI)</li>
                                                     <li>🚀 Jetpack Compose</li>
                                                     <li>🔐 Play Integrity API</li>
                                                     <li>📱 Kotlin Multiplatform</li>
                                                     <li>☁️ Firebase & Cloud Services</li>
                                                 </ul>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="accordion-item">
                                         <h4 class="accordion-header">
                                             <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#introTrends">
                                                 🚀 Emerging Trends: AI, Gemini, and Beyond
                                             </button>
                                         </h4>
                                         <div id="introTrends" class="accordion-collapse collapse" data-bs-parent="#introAccordion">
                                             <div class="accordion-body">
                                                 <h5 class="fw-semibold">AI Integration in Android</h5>
                                                 <ul>
                                                     <li><strong>Gemini API:</strong> Google's AI model for Android apps</li>
                                                     <li><strong>OpenAI Integration:</strong> ChatGPT and DALL-E integration</li>
                                                     <li><strong>ML Kit:</strong> On-device machine learning</li>
                                                     <li><strong>TensorFlow Lite:</strong> Local AI model execution</li>
                                                     <li><strong>Voice Assistant:</strong> Custom voice assistants</li>
                                                 </ul>
                                                 <h6 class="fw-semibold mt-3">Future of Android Development</h6>
                                                 <ul>
                                                     <li>Wear OS and smartwatch apps</li>
                                                     <li>Android Automotive OS</li>
                                                     <li>AR/VR with ARCore</li>
                                                     <li>Foldable device optimization</li>
                                                     <li>AI-powered development tools</li>
                                                 </ul>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="alert alert-warning mt-3">
                                     <strong>Security Consideration:</strong> Android app development requires strong security practices:
                                     <ul>
                                         <li>Encrypt sensitive data at rest and in transit</li>
                                         <li>Implement proper authentication and authorization</li>
                                         <li>Use secure coding practices (OWASP Mobile Top 10)</li>
                                         <li>Implement SSL/TLS pinning for network communication</li>
                                         <li>Regular security testing and vulnerability assessment</li>
                                     </ul>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <!-- ===================================================== -->
                     <!-- SECTION 2: Setting Up Android Development Environment -->
                     <!-- ===================================================== -->
                     <div class="section">
                         <div class="card mb-4 border">
                             <div class="card-header bg-white py-3">
                                 <h2 class="mb-0">Setting Up Android Development Environment</h2>
                             </div>
                             <div class="card-body p-4">
                                 <p>Setting up a proper development environment is the first step in Android app development. This section covers everything you need to install and configure for Android development.</p>
                                 <h3 class="fw-semibold mt-3">System Requirements</h3>
                                 <div class="alert alert-light border mb-4">
                                     <strong>Minimum Requirements:</strong>
                                     <ul>
                                         <li><strong>Operating System:</strong> Windows 10/11, macOS 13+, Ubuntu 20.04+</li>
                                         <li><strong>RAM:</strong> 8GB minimum, 16GB recommended</li>
                                         <li><strong>Storage:</strong> 50GB free space (100GB recommended)</li>
                                         <li><strong>CPU:</strong> 4-core processor (8-core recommended)</li>
                                         <li><strong>Display:</strong> 1080p resolution minimum</li>
                                     </ul>
                                 </div>
                                 <h4 class="fw-semibold">Hardware Requirements</h4>
                                 <div class="table-responsive">
                                     <table class="table table-bordered">
                                         <thead class="table-dark">
                                             <tr>
                                                 <th>Component</th>
                                                 <th>Minimum</th>
                                                 <th>Recommended</th>
                                                 <th>Purpose</th>
                                             </tr>
                                         </thead>
                                         <tbody>
                                             <tr>
                                                 <td><strong>RAM</strong></td>
                                                 <td>8GB</td>
                                                 <td>16GB-32GB</td>
                                                 <td>Running Android Studio, emulator, and multiple apps</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>CPU</strong></td>
                                                 <td>4-core</td>
                                                 <td>8-core (Intel i7/i9 or AMD Ryzen 7/9)</td>
                                                 <td>Faster build times and emulator performance</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>Storage</strong></td>
                                                 <td>50GB SSD</td>
                                                 <td>100GB+ SSD</td>
                                                 <td>Android Studio, SDK, emulators, projects</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>GPU</strong></td>
                                                 <td>Integrated</td>
                                                 <td>Dedicated GPU</td>
                                                 <td>Better emulator graphics performance</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>Display</strong></td>
                                                 <td>1080p</td>
                                                 <td>1440p or 4K</td>
                                                 <td>Better visibility of UI and layout tools</td>
                                             </tr>
                                         </tbody>
                                     </table>
                                 </div>
                                 <h3 class="fw-semibold mt-4">Installing Android Studio</h3>
                                 <div class="accordion" id="installAccordion">
                                     <div class="accordion-item">
                                         <h4 class="accordion-header">
                                             <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#installWindows">
                                                 🪟 Windows Installation
                                             </button>
                                         </h4>
                                         <div id="installWindows" class="accordion-collapse collapse" data-bs-parent="#installAccordion">
                                             <div class="accordion-body">
                                                 <h5 class="fw-semibold">Step-by-Step Installation</h5>
                                                 <ol>
                                                     <li><strong>Download:</strong> Download Android Studio from developer.android.com/studio</li>
                                                     <li><strong>Run Installer:</strong> Double-click the .exe file</li>
                                                     <li><strong>Setup Wizard:</strong> Follow the installation wizard prompts</li>
                                                     <li><strong>Choose Components:</strong> Select Android Studio and Android Virtual Device</li>
                                                     <li><strong>Install Location:</strong> Choose installation directory (default recommended)</li>
                                                     <li><strong>Start Menu:</strong> Choose Start Menu folder</li>
                                                     <li><strong>Installation:</strong> Wait for installation to complete</li>
                                                     <li><strong>Launch:</strong> Launch Android Studio and complete first-time setup</li>
                                                 </ol>
                                                 <div class="alert alert-info">
                                                     <strong>Tip:</strong> Enable "Import settings" to keep existing configurations
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="accordion-item">
                                         <h4 class="accordion-header">
                                             <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#installMac">
                                                 🍎 macOS Installation
                                             </button>
                                         </h4>
                                         <div id="installMac" class="accordion-collapse collapse" data-bs-parent="#installAccordion">
                                             <div class="accordion-body">
                                                 <h5 class="fw-semibold">Step-by-Step Installation</h5>
                                                 <ol>
                                                     <li><strong>Download:</strong> Download Android Studio .dmg file</li>
                                                     <li><strong>Open .dmg:</strong> Double-click the downloaded .dmg file</li>
                                                     <li><strong>Drag to Applications:</strong> Drag Android Studio to the Applications folder</li>
                                                     <li><strong>Launch:</strong> Open Android Studio from Applications</li>
                                                     <li><strong>Trust:</strong> Click "Open" if prompted about security</li>
                                                     <li><strong>Setup:</strong> Complete first-time setup wizard</li>
                                                 </ol>
                                                 <div class="alert alert-info">
                                                     <strong>Tip:</strong> For M1/M2/M3 Macs, ensure you download the ARM version
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="accordion-item">
                                         <h4 class="accordion-header">
                                             <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#installLinux">
                                                 🐧 Linux Installation
                                             </button>
                                         </h4>
                                         <div id="installLinux" class="accordion-collapse collapse" data-bs-parent="#installAccordion">
                                             <div class="accordion-body">
                                                 <h5 class="fw-semibold">Ubuntu/Debian Installation</h5>
                                                 @verbatim
                                                 <pre><code class="language-bash">
 # Download Android Studio
 wget https://dl.google.com/dl/android/studio/ide-latest/android-studio-ide-linux.tar.gz
 
 # Extract the archive
 sudo tar -xvzf android-studio-ide-linux.tar.gz -C /opt/
 
 # Launch Android Studio
 cd /opt/android-studio/bin
 ./studio.sh
 
 # Create desktop shortcut
 # Use "Create Desktop Entry" from Tools menu
                                                 </code></pre>
                                                 @endverbatim
                                                 <div class="alert alert-info">
                                                     <strong>Tip:</strong> Install necessary libraries: <code>sudo apt install libc6-dev libncurses5-dev</code>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <h3 class="fw-semibold mt-4">Java Development Kit (JDK) Installation</h3>
                                 <div class="alert alert-info border">
                                     <strong>JDK 17 or 21:</strong> Android Studio requires JDK 17 or 21. While Android Studio includes a bundled JDK, installing a separate JDK is recommended for development.
                                 </div>
                                 <h4 class="fw-semibold">Setting JAVA_HOME & PATH</h4>
                                 <div class="accordion" id="jdkAccordion">
                                     <div class="accordion-item">
                                         <h5 class="accordion-header">
                                             <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#jdkWindows">
                                                 🪟 Windows
                                             </button>
                                         </h5>
                                         <div id="jdkWindows" class="accordion-collapse collapse" data-bs-parent="#jdkAccordion">
                                             <div class="accordion-body">
                                                 @verbatim
                                                 <pre><code class="language-powershell">
 # Set JAVA_HOME
 [Environment]::SetEnvironmentVariable("JAVA_HOME", "C:\Program Files\Java\jdk-17", "User")
 
 # Add to PATH
 $env:Path += ";%JAVA_HOME%\bin"
 
 # Verify installation
 java -version
 javac -version
                                                 </code></pre>
                                                 @endverbatim
                                             </div>
                                         </div>
                                     </div>
                                     <div class="accordion-item">
                                         <h5 class="accordion-header">
                                             <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#jdkMac">
                                                 🍎 macOS
                                             </button>
                                         </h5>
                                         <div id="jdkMac" class="accordion-collapse collapse" data-bs-parent="#jdkAccordion">
                                             <div class="accordion-body">
                                                 @verbatim
                                                 <pre><code class="language-bash">
 # Add to ~/.zshrc or ~/.bash_profile
 export JAVA_HOME=/Library/Java/JavaVirtualMachines/jdk-17.jdk/Contents/Home
 export PATH=$JAVA_HOME/bin:$PATH
 
 # Apply changes
 source ~/.zshrc
 
 # Verify installation
 java -version
 javac -version
                                                 </code></pre>
                                                 @endverbatim
                                             </div>
                                         </div>
                                     </div>
                                     <div class="accordion-item">
                                         <h5 class="accordion-header">
                                             <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#jdkLinux">
                                                 🐧 Linux
                                             </button>
                                         </h5>
                                         <div id="jdkLinux" class="accordion-collapse collapse" data-bs-parent="#jdkAccordion">
                                             <div class="accordion-body">
                                                 @verbatim
                                                 <pre><code class="language-bash">
 # Install OpenJDK 17
 sudo apt update
 sudo apt install openjdk-17-jdk
 
 # Set JAVA_HOME (add to ~/.bashrc)
 export JAVA_HOME=/usr/lib/jvm/java-17-openjdk-amd64
 export PATH=$JAVA_HOME/bin:$PATH
 
 # Apply changes
 source ~/.bashrc
 
 # Verify installation
 java -version
 javac -version
                                                 </code></pre>
                                                 @endverbatim
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <h3 class="fw-semibold mt-4">Android SDK Configuration</h3>
                                 <div class="alert alert-light border">
                                     <strong>SDK Setup:</strong> The Android SDK provides tools and libraries for Android development. Configure it properly for optimal development experience.
                                 </div>
                                 <h4 class="fw-semibold">SDK Manager Configuration</h4>
                                 <ul>
                                     <li><strong>SDK Platforms:</strong> Install target Android API levels</li>
                                     <li><strong>SDK Tools:</strong> Install build tools, platform tools, and emulator</li>
                                     <li><strong>SDK Updates:</strong> Keep SDK components updated</li>
                                 </ul>
                                 <h5 class="fw-semibold mt-3">Setting ANDROID_HOME</h5>
                                 <div class="alert alert-light border">
                                     @verbatim
                                     <pre><code class="language-bash">
 # Windows
 ANDROID_HOME=C:\Users\%USERNAME%\AppData\Local\Android\Sdk
 
 # macOS
 ANDROID_HOME=$HOME/Library/Android/sdk
 
 # Linux
 ANDROID_HOME=$HOME/Android/Sdk
 
 # Add to PATH (all OS)
 export PATH=$PATH:$ANDROID_HOME/emulator
 export PATH=$PATH:$ANDROID_HOME/platform-tools
 export PATH=$PATH:$ANDROID_HOME/tools
 export PATH=$PATH:$ANDROID_HOME/tools/bin
                                     </code></pre>
                                     @endverbatim
                                 </div>
                                 <h3 class="fw-semibold mt-4">Android Virtual Devices (AVD)</h3>
                                 <div class="alert alert-info border">
                                     <strong>AVD Setup:</strong> AVDs allow you to test your apps on virtual devices with different configurations.
                                 </div>
                                 <h4 class="fw-semibold">Creating AVDs</h4>
                                 <ol>
                                     <li><strong>Open AVD Manager:</strong> Tools → AVD Manager</li>
                                     <li><strong>Create Virtual Device:</strong> Click "Create Virtual Device"</li>
                                     <li><strong>Select Hardware:</strong> Choose device definition (Pixel, Nexus, etc.)</li>
                                     <li><strong>System Image:</strong> Select Android version and API level</li>
                                     <li><strong>Configure:</strong> Set AVD name, orientation, and RAM</li>
                                     <li><strong>Finish:</strong> Click Finish to create the AVD</li>
                                 </ol>
                                 <h5 class="fw-semibold mt-3">Hardware Acceleration</h5>
                                 <div class="table-responsive">
                                     <table class="table table-bordered">
                                         <thead class="table-dark">
                                             <tr>
                                                 <th>Platform</th>
                                                 <th>Technology</th>
                                                 <th>Command</th>
                                             </tr>
                                         </thead>
                                         <tbody>
                                             <tr>
                                                 <td><strong>Windows</strong></td>
                                                 <td>HAXM (Intel) / WHPX (AMD)</td>
                                                 <td>Install from SDK Manager</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>macOS</strong></td>
                                                 <td>Hypervisor.framework</td>
                                                 <td>Enabled by default on M1/M2/M3</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>Linux</strong></td>
                                                 <td>KVM</td>
                                                 <td><code>sudo apt install qemu-kvm</code></td>
                                             </tr>
                                         </tbody>
                                     </table>
                                 </div>
                                 <h4 class="fw-semibold mt-4">USB Debugging & Developer Options</h4>
                                 <ul>
                                     <li><strong>Enable Developer Options:</strong> Settings → About Phone → Tap Build Number 7 times</li>
                                     <li><strong>Enable USB Debugging:</strong> Settings → Developer Options → USB Debugging</li>
                                     <li><strong>Enable Wireless Debugging:</strong> For ADB over Wi-Fi (Android 11+)</li>
                                     <li><strong>Install USB Drivers:</strong> OEM USB drivers for your device</li>
                                 </ul>
                                 <h5 class="fw-semibold mt-3">ADB (Android Debug Bridge)</h5>
                                 <div class="alert alert-light border">
                                     @verbatim
                                     <pre><code class="language-bash">
 # Check connected devices
 adb devices
 
 # Install app
 adb install app-debug.apk
 
 # Install with reinstall flag
 adb install -r app-debug.apk
 
 # Uninstall app
 adb uninstall com.example.app
 
 # Logcat
 adb logcat
 
 # Filter logcat
 adb logcat -s TAG
 
 # Push file to device
 adb push file.txt /sdcard/
 
 # Pull file from device
 adb pull /sdcard/file.txt
 
 # Shell access
 adb shell
 
 # Take screenshot
 adb shell screencap /sdcard/screenshot.png
 adb pull /sdcard/screenshot.png
                                     </code></pre>
                                     @endverbatim
                                 </div>
                                 <h3 class="fw-semibold mt-4">Android Studio IDE Features</h3>
                                 <div class="row g-3">
                                     <div class="col-md-6">
                                         <div class="card h-100 border-0 shadow-sm">
                                             <div class="card-body">
                                                 <h4>⌨️ Keyboard Shortcuts</h4>
                                                 <ul>
                                                     <li><strong>Ctrl+Shift+A:</strong> Find Action</li>
                                                     <li><strong>Alt+Enter:</strong> Quick Fix</li>
                                                     <li><strong>Ctrl+Space:</strong> Code Completion</li>
                                                     <li><strong>Ctrl+Shift+F:</strong> Find in Files</li>
                                                     <li><strong>Ctrl+E:</strong> Recent Files</li>
                                                     <li><strong>Ctrl+Shift+E:</strong> Recent Locations</li>
                                                 </ul>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-6">
                                         <div class="card h-100 border-0 shadow-sm">
                                             <div class="card-body">
                                                 <h4>🛠️ Useful Plugins</45>
                                                 <ul>
                                                     <li><strong>ADB Idea:</strong> ADB commands from IDE</li>
                                                     <li><strong>GsonFormat:</strong> Generate Gson classes</li>
                                                     <li><strong>Rainbow Brackets:</strong> Color-coded brackets</li>
                                                     <li><strong>SonarLint:</strong> Code quality</li>
                                                     <li><strong>Flutter:</strong> Flutter development</li>
                                                     <li><strong>Kotlin Fill Class:</strong> Generate Kotlin classes</li>
                                                 </ul>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="alert alert-warning mt-4">
                                     <strong>Security Consideration:</strong> 
                                     <ul>
                                         <li>Never share ADB debugging keys</li>
                                         <li>Disable USB debugging when not needed</li>
                                         <li>Use secure connection for wireless debugging</li>
                                         <li>Revoke USB debugging authorizations when suspicious</li>
                                     </ul>
                                 </div>
                             </div>
                         </div>
                     </div>
                      <!--===================================================== -->
                      <!--SECTION 3: Kotlin Fundamentals for Android            -->
                      <!--===================================================== -->
                     <div class="section">
                         <div class="card mb-4 border">
                             <div class="card-header bg-white py-3">
                                 <h2 class="mb-0">Kotlin Fundamentals for Android</h2>
                             </div>
                             <div class="card-body p-4">
                                 <p>Kotlin is the preferred language for Android development. This section covers Kotlin fundamentals needed for building Android applications.</p>
                     
                                 <h3 class="fw-semibold mt-3">Introduction to Kotlin</h3>
                                 <div class="alert alert-light border mb-4">
                                     <strong>What is Kotlin?</strong> Kotlin is a modern, statically typed programming language that runs on the Java Virtual Machine (JVM). It is concise, safe, and interoperable with Java, making it the preferred language for Android development.
                                 </div>
                                 <h4 class="fw-semibold">Kotlin Basics</h4>
                                 <div class="alert alert-light border">
                                     @verbatim
                                     <pre><code class="language-kotlin">
 // Variable Declaration
 var mutableVariable = "Hello"  // Mutable
 val immutableVariable = "World" // Immutable (read-only)
 
 // Data Types
 val intVar: Int = 10
 val longVar: Long = 100L
 val doubleVar: Double = 3.14
 val floatVar: Float = 3.14f
 val booleanVar: Boolean = true
 val stringVar: String = "Hello Kotlin"
 val charVar: Char = 'A'
 
 // Type Inference
 val inferredInt = 42  // Kotlin infers Int
 
 // Null Safety
 var nullableString: String? = null  // Nullable
 var nonNullString: String = "Hello"  // Non-nullable
 
 // Safe Call Operator
 val length = nullableString?.length ?: 0
 
 // Elvis Operator
 val result = nullableString ?: "Default Value"
 
 // Functions
 fun add(a: Int, b: Int): Int {
     return a + b
 }
 
 // Single Expression Function
 fun multiply(a: Int, b: Int) = a * b
 
 // Default Arguments
 fun greet(name: String = "Guest") {
     println("Hello, $name")
 }
 
 // Named Arguments
 greet(name = "Kotlin")
                                     </code></pre>
                                     @endverbatim
                                 </div>
                                 <h4 class="fw-semibold mt-4">Control Flow</h4>
                                 <div class="alert alert-light border">
                                     @verbatim
                                     <pre><code class="language-kotlin">
 // If Expression
 val max = if (a > b) a else b
 
 // When Expression (Switch Replacement)
 when (value) {
     1 -> println("One")
     2 -> println("Two")
     in 3..5 -> println("Three to Five")
     else -> println("Other")
 }
 
 // For Loop
 for (i in 1..10) {
     print(i)
 }
 
 // While Loop
 var i = 0
 while (i < 10) {
     i++
 }
 
 // Do-While Loop
 do {
     i++
 } while (i < 10)
 
 // For Each (Collections)
 val list = listOf("A", "B", "C")
 list.forEach { print(it) }
 
 // With Index
 list.forEachIndexed { index, value ->
     println("$index: $value")
 }
                                     </code></pre>
                                     @endverbatim
                                 </div>
                                 <h4 class="fw-semibold mt-4">Classes & Objects</h4>
                                 <div class="alert alert-light border">
                                     @verbatim
                                     <pre><code class="language-kotlin">
 // Class Definition
 class Person(val name: String, var age: Int) {
     // Secondary Constructor
     constructor(name: String) : this(name, 0)
     
     // Member Function
     fun speak() {
         println("Hello, my name is $name")
     }
     
     // Property with Getter/Setter
     var isAdult: Boolean
         get() = age >= 18
         set(value) {
             if (value && age < 18) age = 18
         }
 }
 
 // Inheritance
 open class Animal(val name: String) {
     open fun makeSound() {
         println("Animal sound")
     }
 }
 
 class Dog(name: String) : Animal(name) {
     override fun makeSound() {
         println("Bark!")
     }
 }
 
 // Data Class (Auto-generates equals, hashCode, toString)
 data class User(val id: Int, val name: String, val email: String)
 
 // Use Data Class
 val user1 = User(1, "John", "john@email.com")
 val user2 = User(1, "John", "john@email.com")
 val areEqual = user1 == user2  // true
 
 // Data Class Destructuring
 val (id, name, email) = user1
 
 // Singleton (Object)
 object AppConfig {
     const val API_URL = "https://api.example.com"
     const val TIMEOUT = 30
 }
 
 // Companion Object (Class-level Singleton)
 class MyClass {
     companion object {
         const val CONSTANT = "Value"
         fun create(): MyClass = MyClass()
     }
 }
                                     </code></pre>
                                     @endverbatim
                                 </div>
                                 <h4 class="fw-semibold mt-4">Collection Framework</h4>
                                 <div class="alert alert-light border">
                                     @verbatim
                                     <pre><code class="language-kotlin">
 // List - Immutable
 val numbers = listOf(1, 2, 3, 4, 5)
 
 // List - Mutable
 val mutableNumbers = mutableListOf(1, 2, 3)
 mutableNumbers.add(4)
 
 // Set - No duplicates
 val set = setOf(1, 2, 3, 3)  // {1, 2, 3}
 
 // Map - Key-Value pairs
 val map = mapOf("one" to 1, "two" to 2, "three" to 3)
 
 // Collection Operations
 val evenNumbers = numbers.filter { it % 2 == 0 }
 val squared = numbers.map { it * it }
 val sum = numbers.reduce { acc, i -> acc + i }
 val found = numbers.find { it > 3 }
 val exists = numbers.any { it > 4 }
 val all = numbers.all { it > 0 }
 
 // Sequence (Lazy Evaluation)
 val sequence = numbers.asSequence()
     .filter { it % 2 == 0 }
     .map { it * it }
     .toList()
                                     </code></pre>
                                     @endverbatim
                                 </div>
                                 <h4 class="fw-semibold mt-4">Extension Functions & Properties</h4>
                                 <div class="alert alert-light border">
                                     @verbatim
                                     <pre><code class="language-kotlin">
 // Extension Function
 fun String.reverse(): String {
     return this.reversed()
 }
 
 // Extension Property
 val String.isEmail: Boolean
     get() = contains("@")
 
 // Usage
 val text = "Hello"
 println(text.reverse())  // "olleH"
 println(text.isEmail)    // false
 
 // Extension Function with Receiver
 infix fun String.multiply(count: Int): String {
     return this.repeat(count)
 }
 
 // Usage
 println("Hi" multiply 3)  // "HiHiHi"
 
 // Extension Function for Any Type
 fun <T> T.print(): T {
     println(this)
     return this
 }
 
 // Usage
 "Hello".print()
 10.print()
 listOf(1, 2, 3).print()
                                     </code></pre>
                                     @endverbatim
                                 </div>
                                 <h4 class="fw-semibold mt-4">Lambda Expressions & Higher-Order Functions</h4>
                                 <div class="alert alert-light border">
                                     @verbatim
                                     <pre><code class="language-kotlin">
 // Lambda Expression
 val sum = { a: Int, b: Int -> a + b }
 
 // Higher-Order Function
 fun operate(a: Int, b: Int, operation: (Int, Int) -> Int): Int {
     return operation(a, b)
 }
 
 // Using Higher-Order Function
 val result1 = operate(5, 3, sum)
 val result2 = operate(5, 3) { a, b -> a * b }
 
 // Function Type
 val operation: (Int, Int) -> Int = { a, b -> a + b }
 
 // Returning Function
 fun getOperation(type: String): (Int, Int) -> Int {
     return when (type) {
         "add" -> { a, b -> a + b }
         "multiply" -> { a, b -> a * b }
         else -> { a, b -> a - b }
     }
 }
 
 // Inline Functions
 inline fun measureTime(block: () -> Unit): Long {
     val start = System.currentTimeMillis()
     block()
     return System.currentTimeMillis() - start
 }
 
 // Noinline and Crossinline
 inline fun performOperation(
     crossinline onSuccess: () -> Unit,
     noinline onError: (Throwable) -> Unit
 ) {
     try {
         onSuccess()
     } catch (e: Exception) {
         onError(e)
     }
 }
                                     </code></pre>
                                     @endverbatim
                                 </div>
                                 <h4 class="fw-semibold mt-4">Coroutines Fundamentals</h4>
                                 <div class="alert alert-light border">
                                     @verbatim
                                     <pre><code class="language-kotlin">
 // Coroutine Setup (build.gradle.kts)
 // dependencies {
 //     implementation("org.jetbrains.kotlinx:kotlinx-coroutines-android:1.7.3")
 // }
 
 // Launch Coroutine
 import kotlinx.coroutines.*
 
 fun main() {
     runBlocking {
         launch {
             delay(1000L)
             println("World!")
         }
         println("Hello,")
         delay(2000L)
     }
 }
 
 // Coroutine Scopes
 val scope = CoroutineScope(Dispatchers.IO)
 scope.launch {
     // Background work
 }
 
 // Dispatchers
 // - Dispatchers.Main: UI thread
 // - Dispatchers.IO: Network, database, file operations
 // - Dispatchers.Default: CPU-intensive work
 // - Dispatchers.Unconfined: Not confined to any thread
 
 // Suspend Function
 suspend fun fetchData(): String {
     delay(1000L) // Simulate network call
     return "Data"
 }
 
 // Using Suspend Function
 lifecycleScope.launch {
     val data = fetchData()
     updateUI(data)
 }
 
 // Coroutine with Context
 launch(Dispatchers.IO) {
     val result = heavyComputation()
     withContext(Dispatchers.Main) {
         updateUI(result)
     }
 }
 
 // Job Management
 val job = launch {
     while (isActive) {
         // Do work
     }
 }
 job.cancel()
 
 // Coroutine with Timeout
 try {
     withTimeout(5000L) {
         longRunningOperation()
     }
 } catch (e: TimeoutCancellationException) {
     // Handle timeout
 }
 
 // Asynchronous with async/await
 val deferred = async { fetchData() }
 val result = deferred.await()
                                     </code></pre>
                                     @endverbatim
                                 </div>
                                 <h4 class="fw-semibold mt-4">Flow API</h4>
                                 <div class="alert alert-light border">
                                     @verbatim
                                     <pre><code class="language-kotlin">
 // Creating Flow
 fun getNumberFlow(): Flow<Int> = flow {
     for (i in 1..10) {
         emit(i)
         delay(100L)
     }
 }
 
 // Collecting Flow
 lifecycleScope.launch {
     getNumberFlow().collect { value ->
         println(value)
     }
 }
 
 // Flow Operators
 getNumberFlow()
     .filter { it % 2 == 0 }
     .map { it * it }
     .take(3)
     .collect { println(it) }
 
 // StateFlow (State Holder)
 val state = MutableStateFlow(0)
 state.value = 1  // Update state
 
 // SharedFlow (Shared Events)
 val events = MutableSharedFlow<String>()
 events.emit("Event")
 
 // Flow with Error Handling
 flow {
     emit(1)
     throw Exception("Error")
 }.catch { e ->
     emit(-1)
 }.collect { value ->
     println(value)
 }
 
 // Flow with Retry
 flow {
     emit(fetchData())
 }.retry(3) { cause ->
     cause is IOException  // Retry only on IO exceptions
 }
                                     </code></pre>
                                     @endverbatim
                                 </div>
                                 <div class="alert alert-warning mt-3">
                                     <strong>Best Practices:</strong>
                                     <ul>
                                         <li>Use `val` instead of `var` when possible</li>
                                         <li>Prefer Kotlin's null safety over Java's null</li>
                                         <li>Use data classes for model objects</li>
                                         <li>Use coroutines for asynchronous operations</li>
                                         <li>Use Flow for reactive programming</li>
                                         <li>Write extension functions for utility methods</li>
                                     </ul>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <!--// =====================================================-->
                     <!--// SECTION 4: Java Fundamentals for Android-->
                     <!--// =====================================================-->
                     <div class="section">
                         <div class="card mb-4 border">
                             <div class="card-header bg-white py-3">
                                 <h2 class="mb-0">Java Fundamentals for Android</h2>
                             </div>
                             <div class="card-body p-4">
                                 <p>Java is the traditional language for Android development. This section covers Java fundamentals needed for Android applications.</p>
                                 <h3 class="fw-semibold mt-3">Java Basics</h3>
                                 <div class="alert alert-light border">
                                     @verbatim
                                     <pre><code class="language-java">
 // Variable Declaration
 int intVar = 10;
 long longVar = 100L;
 double doubleVar = 3.14;
 float floatVar = 3.14f;
 boolean booleanVar = true;
 String stringVar = "Hello Java";
 char charVar = 'A';
 
 // Constants (final)
 final String API_URL = "https://api.example.com";
 
 // Functions (Methods)
 public int add(int a, int b) {
     return a + b;
 }
 
 // Method Overloading
 public int add(int a, int b, int c) {
     return a + b + c;
 }
 
 // Static Method
 public static void print(String message) {
     System.out.println(message);
 }
 
 // Class Definition
 public class Person {
     private String name;
     private int age;
     
     // Constructor
     public Person(String name, int age) {
         this.name = name;
         this.age = age;
     }
     
     // Getter/Setter
     public String getName() {
         return name;
     }
     
     public void setName(String name) {
         this.name = name;
     }
     
     // Method
     public void speak() {
         System.out.println("Hello, my name is " + name);
     }
 }
 
 // Inheritance
 public class Animal {
     protected String name;
     
     public Animal(String name) {
         this.name = name;
     }
     
     public void makeSound() {
         System.out.println("Animal sound");
     }
 }
 
 public class Dog extends Animal {
     public Dog(String name) {
         super(name);
     }
     
     @Override
     public void makeSound() {
         System.out.println("Bark!");
     }
 }
 
 // Interface
 public interface Drawable {
     void draw();
 }
 
 // Implementing Interface
 public class Circle implements Drawable {
     @Override
     public void draw() {
         System.out.println("Drawing Circle");
     }
 }
 
 // Anonymous Class
 Drawable drawable = new Drawable() {
     @Override
     public void draw() {
         System.out.println("Anonymous Drawing");
     }
 };
                                     </code></pre>
                                     @endverbatim
                                 </div>
                                 <h4 class="fw-semibold mt-4">Java Collections Framework</h4>
                                 <div class="alert alert-light border">
                                     @verbatim
                                     <pre><code class="language-java">
 // ArrayList
 List<String> list = new ArrayList<>();
 list.add("A");
 list.add("B");
 list.add("C");
 String first = list.get(0);
 
 // LinkedList
 List<String> linkedList = new LinkedList<>();
 linkedList.add("A");
 linkedList.addFirst("B");
 linkedList.addLast("C");
 
 // HashSet
 Set<String> set = new HashSet<>();
 set.add("A");
 set.add("B");
 set.add("C");
 boolean contains = set.contains("A");
 
 // HashMap
 Map<String, Integer> map = new HashMap<>();
 map.put("one", 1);
 map.put("two", 2);
 int value = map.get("one");
 
 // Iteration
 for (String item : list) {
     System.out.println(item);
 }
 
 // Iterator
 Iterator<String> iterator = list.iterator();
 while (iterator.hasNext()) {
     String item = iterator.next();
     System.out.println(item);
 }
 
 // Stream API (Java 8+)
 list.stream()
     .filter(s -> s.startsWith("A"))
     .map(String::toLowerCase)
     .forEach(System.out::println);
                                     </code></pre>
                                     @endverbatim
                                 </div>
                                 <h4 class="fw-semibold mt-4">Exception Handling</h4>
                                 <div class="alert alert-light border">
                                     @verbatim
                                     <pre><code class="language-java">
 // Try-Catch-Finally
 try {
     int result = 10 / 0;
 } catch (ArithmeticException e) {
     System.out.println("Cannot divide by zero");
 } finally {
     System.out.println("Always executed");
 }
 
 // Multiple Catch
 try {
     // Code that may throw exceptions
 } catch (NullPointerException e) {
     System.out.println("Null pointer: " + e.getMessage());
 } catch (IOException e) {
     System.out.println("IO error: " + e.getMessage());
 } catch (Exception e) {
     System.out.println("General error: " + e.getMessage());
 }
 
 // Try-with-Resources (Java 7+)
 try (FileInputStream fis = new FileInputStream("file.txt")) {
     // Use fis
 } catch (IOException e) {
     System.out.println("Error: " + e.getMessage());
 }
 
 // Custom Exception
 public class InvalidAgeException extends Exception {
     public InvalidAgeException(String message) {
         super(message);
     }
 }
 
 // Throwing Custom Exception
 public void setAge(int age) throws InvalidAgeException {
     if (age < 0) {
         throw new InvalidAgeException("Age cannot be negative");
     }
     this.age = age;
 }
 
 // Handling Custom Exception
 try {
     setAge(-5);
 } catch (InvalidAgeException e) {
     System.out.println(e.getMessage());
 }
                                     </code></pre>
                                     @endverbatim
                                 </div>
                                 <h4 class="fw-semibold mt-4">Lambda Expressions (Java 8+)</h4>
                                 <div class="alert alert-light border">
                                     @verbatim
                                     <pre><code class="language-java">
 // Functional Interface
 @FunctionalInterface
 interface Calculator {
     int calculate(int a, int b);
 }
 
 // Lambda Expression
 Calculator add = (a, b) -> a + b;
 Calculator multiply = (a, b) -> a * b;
 
 // Using Lambda
 int result = add.calculate(5, 3);  // 8
 
 // Method Reference
 List<String> names = Arrays.asList("John", "Jane", "Jack");
 names.forEach(System.out::println);  // Method Reference
 
 // Stream with Lambda
 List<Integer> numbers = Arrays.asList(1, 2, 3, 4, 5);
 List<Integer> evenSquares = numbers.stream()
     .filter(n -> n % 2 == 0)
     .map(n -> n * n)
     .collect(Collectors.toList());
 
 // Sorting with Comparator
 List<String> words = Arrays.asList("apple", "banana", "cherry");
 words.sort((a, b) -> a.length() - b.length());
                                     </code></pre>
                                     @endverbatim
                                 </div>
                                 <div class="alert alert-warning mt-3">
                                     <strong>Java vs Kotlin Comparison:</strong>
                                     <ul>
                                         <li>Kotlin is more concise (less boilerplate)</li>
                                         <li>Kotlin has null safety built-in</li>
                                         <li>Kotlin supports coroutines</li>
                                         <li>Kotlin has extension functions</li>
                                         <li>Java has wider library support</li>
                                         <li>Both can be used in the same project</li>
                                     </ul>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <!--// =====================================================-->
                     <!--// SECTION 5: Android Project Structure & Gradle-->
                     <!--// =====================================================-->
                     <div class="section">
                         <div class="card mb-4 border">
                             <div class="card-header bg-white py-3">
                                 <h2 class="mb-0">Android Project Structure & Gradle Build System</h2>
                             </div>
                             <div class="card-body p-4">
                                 <p>Understanding the Android project structure and Gradle build system is essential for efficient development and deployment.</p>
                                 <h3 class="fw-semibold mt-3">Android Project Directory Structure</h3>
                                 <div class="alert alert-light border">
                                     @verbatim
                                     <pre><code class="language-bash">
 app/
 ├── src/
 │   ├── main/
 │   │   ├── java/          # Java/Kotlin source files
 │   │   │   └── com/example/app/
 │   │   │       ├── MainActivity.java
 │   │   │       ├── data/      # Data layer
 │   │   │       ├── domain/    # Domain layer
 │   │   │       └── presentation/ # Presentation layer
 │   │   ├── res/          # Resources
 │   │   │   ├── drawable/   # Images and drawable resources
 │   │   │   ├── layout/     # XML layouts
 │   │   │   ├── values/     # Strings, colors, dimensions
 │   │   │   ├── menu/       # Menu resources
 │   │   │   ├── mipmap/     # App icons
 │   │   │   └── raw/        # Raw resources (audio, video)
 │   │   ├── assets/       # Arbitrary files
 │   │   └── AndroidManifest.xml
 │   ├── androidTest/      # Instrumentation tests
 │   └── test/            # Unit tests
 ├── build.gradle          # Module-level build file
 └── proguard-rules.pro   # ProGuard rules
 
 gradle/
 ├── libs.versions.toml    # Version catalog (Gradle 7+)
 └── wrapper/
     ├── gradle-wrapper.jar
     └── gradle-wrapper.properties
 
 build.gradle              # Project-level build file
 settings.gradle           # Project settings
 gradle.properties         # Gradle properties
 gradlew                   # Gradle wrapper (Unix)
 gradlew.bat              # Gradle wrapper (Windows)
                                     </code></pre>
                                     @endverbatim
                                 </div>
                                 <h4 class="fw-semibold mt-4">Resources & Drawable Folders</h4>
                                 <div class="table-responsive">
                                     <table class="table table-bordered">
                                         <thead class="table-dark">
                                             <tr>
                                                 <th>Folder</th>
                                                 <th>Description</th>
                                                 <th>Usage</th>
                                             </tr>
                                         </thead>
                                         <tbody>
                                             <tr>
                                                 <td><strong>drawable</strong></td>
                                                 <td>Drawable resources (images, shapes)</td>
                                                 <td>Icons, backgrounds, shapes</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>drawable-hdpi</strong></td>
                                                 <td>High-DPI drawables</td>
                                                 <td>~240 DPI screens</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>drawable-xhdpi</strong></td>
                                                 <td>Extra High-DPI drawables</td>
                                                 <td>~320 DPI screens</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>drawable-xxhdpi</strong></td>
                                                 <td>Extra Extra High-DPI drawables</td>
                                                 <td>~480 DPI screens</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>drawable-xxxhdpi</strong></td>
                                                 <td>Extra Extra Extra High-DPI</td>
                                                 <td>~640 DPI screens</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>mipmap</strong></td>
                                                 <td>App icons</td>
                                                 <td>Launcher icons</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>values</strong></td>
                                                 <td>Resource values</td>
                                                 <td>Strings, colors, dimensions</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>values-night</strong></td>
                                                 <td>Dark theme values</td>
                                                 <td>Dark mode resources</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>layout</strong></td>
                                                 <td>XML layouts</td>
                                                 <td>UI layouts</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>layout-land</strong></td>
                                                 <td>Landscape layouts</td>
                                                 <td>Landscape orientation</td>
                                             </tr>
                                         </tbody>
                                     </table>
                                 </div>
                                 <h3 class="fw-semibold mt-4">AndroidManifest.xml</h3>
                                 <div class="alert alert-light border">
                                     @verbatim
                                     <pre><code class="language-xml">
 &lt;?xml version="1.0" encoding="utf-8"?&gt;
 &lt;manifest xmlns:android="http://schemas.android.com/apk/res/android"
     xmlns:tools="http://schemas.android.com/tools"
     package="com.example.androidapp"&gt;
 
     &lt;!-- Permissions --&gt;
     &lt;uses-permission android:name="android.permission.INTERNET" /&gt;
     &lt;uses-permission android:name="android.permission.ACCESS_NETWORK_STATE" /&gt;
     &lt;uses-permission android:name="android.permission.CAMERA" /&gt;
     &lt;uses-permission android:name="android.permission.READ_EXTERNAL_STORAGE" /&gt;
     &lt;uses-permission android:name="android.permission.WRITE_EXTERNAL_STORAGE" /&gt;
 
     &lt;application
         android:allowBackup="true"
         android:icon="@mipmap/ic_launcher"
         android:label="@string/app_name"
         android:roundIcon="@mipmap/ic_launcher_round"
         android:supportsRtl="true"
         android:theme="@style/Theme.AndroidApp"
         android:name=".MyApplication"
         tools:targetApi="31"&gt;
 
         &lt;!-- Main Activity --&gt;
         &lt;activity
             android:name=".MainActivity"
             android:exported="true"&gt;
             &lt;intent-filter&gt;
                 &lt;action android:name="android.intent.action.MAIN" /&gt;
                 &lt;category android:name="android.intent.category.LAUNCHER" /&gt;
             &lt;/intent-filter&gt;
         &lt;/activity&gt;
 
         &lt;!-- Second Activity --&gt;
         &lt;activity
             android:name=".SecondActivity"
             android:parentActivityName=".MainActivity" /&gt;
 
         &lt;!-- Service --&gt;
         &lt;service
             android:name=".MyService"
             android:exported="false" /&gt;
 
         &lt;!-- Broadcast Receiver --&gt;
         &lt;receiver
             android:name=".MyReceiver"
             android:exported="true"&gt;
             &lt;intent-filter&gt;
                 &lt;action android:name="android.intent.action.BOOT_COMPLETED" /&gt;
             &lt;/intent-filter&gt;
         &lt;/receiver&gt;
 
         &lt;!-- Content Provider --&gt;
         &lt;provider
             android:name=".MyProvider"
             android:authorities="com.example.androidapp.provider"
             android:exported="false" /&gt;
 
         &lt;!-- Meta-data --&gt;
         &lt;meta-data
             android:name="com.google.android.geo.API_KEY"
             android:value="@string/google_maps_key" /&gt;
 
     &lt;/application&gt;
 
 &lt;/manifest&gt;
                                     </code></pre>
                                     @endverbatim
                                 </div>
                                 <h3 class="fw-semibold mt-4">Gradle Build System</h3>
                                 <div class="accordion" id="gradleAccordion">
                                     <div class="accordion-item">
                                         <h4 class="accordion-header">
                                             <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#gradleProject">
                                                 📁 Project-level build.gradle
                                             </button>
                                         </h4>
                                         <div id="gradleProject" class="accordion-collapse collapse" data-bs-parent="#gradleAccordion">
                                             <div class="accordion-body">
                                                 @verbatim
                                                 <pre><code class="language-groovy">
 // Project-level build.gradle
 buildscript {
     repositories {
         google()
         mavenCentral()
     }
     dependencies {
         classpath 'com.android.tools.build:gradle:8.2.0'
         classpath 'org.jetbrains.kotlin:kotlin-gradle-plugin:1.9.0'
         classpath 'com.google.gms:google-services:4.4.0'
         classpath 'com.google.dagger:hilt-android-gradle-plugin:2.48'
     }
 }
 
 allprojects {
     repositories {
         google()
         mavenCentral()
         maven { url 'https://jitpack.io' }
     }
 }
 
 tasks.register('clean', Delete) {
     delete rootProject.buildDir
 }
                                                 </code></pre>
                                                 @endverbatim
                                             </div>
                                         </div>
                                     </div>
                                     <div class="accordion-item">
                                         <h4 class="accordion-header">
                                             <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#gradleModule">
                                                 📦 Module-level build.gradle
                                             </button>
                                         </h4>
                                         <div id="gradleModule" class="accordion-collapse collapse" data-bs-parent="#gradleAccordion">
                                             <div class="accordion-body">
                                                 @verbatim
                                                 <pre><code class="language-groovy">
 // Module-level build.gradle (app)
 plugins {
     id 'com.android.application'
     id 'org.jetbrains.kotlin.android'
     id 'kotlin-kapt'
     id 'com.google.dagger.hilt.android'
     id 'com.google.gms.google-services'
 }
 
 android {
     namespace 'com.example.androidapp'
     compileSdk 34
 
     defaultConfig {
         applicationId "com.example.androidapp"
         minSdk 24
         targetSdk 34
         versionCode 1
         versionName "1.0"
 
         testInstrumentationRunner "androidx.test.runner.AndroidJUnitRunner"
     }
 
     buildTypes {
         release {
             minifyEnabled true
             proguardFiles getDefaultProguardFile('proguard-android-optimize.txt'), 'proguard-rules.pro'
         }
         debug {
             minifyEnabled false
             debuggable true
         }
     }
 
     compileOptions {
         sourceCompatibility JavaVersion.VERSION_17
         targetCompatibility JavaVersion.VERSION_17
     }
 
     kotlinOptions {
         jvmTarget = '17'
     }
 
     buildFeatures {
         viewBinding true
         dataBinding true
         compose true
     }
 
     composeOptions {
         kotlinCompilerExtensionVersion '1.5.4'
     }
 
     flavorDimensions "environment"
     productFlavors {
         production {
             dimension "environment"
             buildConfigField "String", "API_URL", '"https://api.example.com"'
         }
         staging {
             dimension "environment"
             buildConfigField "String", "API_URL", '"https://staging.example.com"'
         }
     }
 }
 
 dependencies {
     // Core Android
     implementation 'androidx.core:core-ktx:1.12.0'
     implementation 'androidx.appcompat:appcompat:1.6.1'
     implementation 'com.google.android.material:material:1.11.0'
     implementation 'androidx.constraintlayout:constraintlayout:2.1.4'
 
     // Jetpack Compose
     implementation platform('androidx.compose:compose-bom:2024.02.00')
     implementation 'androidx.compose.ui:ui'
     implementation 'androidx.compose.ui:ui-graphics'
     implementation 'androidx.compose.ui:ui-tooling-preview'
     implementation 'androidx.compose.material3:material3'
     implementation 'androidx.activity:activity-compose:1.8.2'
 
     // ViewModel & LiveData
     implementation 'androidx.lifecycle:lifecycle-viewmodel-ktx:2.7.0'
     implementation 'androidx.lifecycle:lifecycle-livedata-ktx:2.7.0'
     implementation 'androidx.lifecycle:lifecycle-runtime-ktx:2.7.0'
 
     // Navigation
     implementation 'androidx.navigation:navigation-fragment-ktx:2.7.6'
     implementation 'androidx.navigation:navigation-ui-ktx:2.7.6'
 
     // Room Database
     implementation 'androidx.room:room-runtime:2.6.1'
     implementation 'androidx.room:room-ktx:2.6.1'
     kapt 'androidx.room:room-compiler:2.6.1'
 
     // Network
     implementation 'com.squareup.retrofit2:retrofit:2.9.0'
     implementation 'com.squareup.retrofit2:converter-gson:2.9.0'
     implementation 'com.squareup.okhttp3:okhttp:4.12.0'
     implementation 'com.squareup.okhttp3:logging-interceptor:4.12.0'
 
     // Dependency Injection
     implementation 'com.google.dagger:hilt-android:2.48'
     kapt 'com.google.dagger:hilt-compiler:2.48'
 
     // Firebase
     implementation platform('com.google.firebase:firebase-bom:32.7.0')
     implementation 'com.google.firebase:firebase-auth-ktx'
     implementation 'com.google.firebase:firebase-firestore-ktx'
     implementation 'com.google.firebase:firebase-storage-ktx'
     implementation 'com.google.firebase:firebase-messaging-ktx'
     implementation 'com.google.firebase:firebase-analytics-ktx'
 
     // Coroutines
     implementation 'org.jetbrains.kotlinx:kotlinx-coroutines-android:1.7.3'
 
     // Image Loading
     implementation 'com.github.bumptech.glide:glide:4.16.0'
     kapt 'com.github.bumptech.glide:compiler:4.16.0'
 
     // Testing
     testImplementation 'junit:junit:4.13.2'
     testImplementation 'org.mockito:mockito-core:5.6.0'
     testImplementation 'org.mockito.kotlin:mockito-kotlin:5.0.0'
     testImplementation 'androidx.arch.core:core-testing:2.2.0'
     androidTestImplementation 'androidx.test.ext:junit:1.1.5'
     androidTestImplementation 'androidx.test.espresso:espresso-core:3.5.1'
     androidTestImplementation 'androidx.compose.ui:ui-test-junit4'
 }
                                                 </code></pre>
                                                 @endverbatim
                                             </div>
                                         </div>
                                     </div>
                                     <div class="accordion-item">
                                         <h4 class="accordion-header">
                                             <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#gradleProperties">
                                                 ⚙️ Gradle Properties
                                             </button>
                                         </h4>
                                         <div id="gradleProperties" class="accordion-collapse collapse" data-bs-parent="#gradleAccordion">
                                             <div class="accordion-body">
                                                 @verbatim
                                                 <pre><code class="language-properties">
 # gradle.properties
 org.gradle.jvmargs=-Xmx2048m -Dfile.encoding=UTF-8
 org.gradle.parallel=true
 org.gradle.caching=true
 org.gradle.daemon=true
 
 android.useAndroidX=true
 android.enableJetifier=true
 kotlin.code.style=official
 android.nonTransitiveRClass=true
 android.enableR8=true
 android.enableDexingArtifactTransform=true
 android.experimental.lint=warning
                                                 </code></pre>
                                                 @endverbatim
                                             </div>
                                         </div>
                                     </div>
                                     <div class="accordion-item">
                                         <h4 class="accordion-header">
                                             <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#gradleVersions">
                                                 📚 Version Catalog (libs.versions.toml)
                                             </button>
                                         </h4>
                                         <div id="gradleVersions" class="accordion-collapse collapse" data-bs-parent="#gradleAccordion">
                                             <div class="accordion-body">
                                                 @verbatim
                                                 <pre><code class="language-toml">
 # gradle/libs.versions.toml
 [versions]
 agp = "8.2.0"
 kotlin = "1.9.0"
 coreKtx = "1.12.0"
 composeBom = "2024.02.00"
 lifecycle = "2.7.0"
 room = "2.6.1"
 retrofit = "2.9.0"
 hilt = "2.48"
 
 [libraries]
 androidx-core-ktx = { group = "androidx.core", name = "core-ktx", version.ref = "coreKtx" }
 androidx-appcompat = { group = "androidx.appcompat", name = "appcompat", version = "1.6.1" }
 androidx-lifecycle-viewmodel = { group = "androidx.lifecycle", name = "lifecycle-viewmodel-ktx", version.ref = "lifecycle" }
 androidx-lifecycle-livedata = { group = "androidx.lifecycle", name = "lifecycle-livedata-ktx", version.ref = "lifecycle" }
 
 compose-bom = { group = "androidx.compose", name = "compose-bom", version.ref = "composeBom" }
 compose-ui = { group = "androidx.compose.ui", name = "ui" }
 compose-material3 = { group = "androidx.compose.material3", name = "material3" }
 
 room-runtime = { group = "androidx.room", name = "room-runtime", version.ref = "room" }
 room-compiler = { group = "androidx.room", name = "room-compiler", version.ref = "room" }
 
 retrofit = { group = "com.squareup.retrofit2", name = "retrofit", version.ref = "retrofit" }
 retrofit-gson = { group = "com.squareup.retrofit2", name = "converter-gson", version.ref = "retrofit" }
 
 hilt = { group = "com.google.dagger", name = "hilt-android", version.ref = "hilt" }
 hilt-compiler = { group = "com.google.dagger", name = "hilt-compiler", version.ref = "hilt" }
 
 [plugins]
 android-application = { id = "com.android.application", version.ref = "agp" }
 kotlin-android = { id = "org.jetbrains.kotlin.android", version.ref = "kotlin" }
 hilt = { id = "com.google.dagger.hilt.android", version.ref = "hilt" }
                                                 </code></pre>
                                                 @endverbatim
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <h3 class="fw-semibold mt-4">Build Variants & Signing</h3>
                                 <div class="alert alert-info border">
                                     <strong>Build Variants:</strong> Build variants combine build types and product flavors to create different versions of your app.
                                 </div>
                                 <div class="table-responsive">
                                     <table class="table table-bordered">
                                         <thead class="table-dark">
                                             <tr>
                                                 <th>Variant</th>
                                                 <th>Description</th>
                                                 <th>Use Case</th>
                                             </tr>
                                         </thead>
                                         <tbody>
                                             <tr>
                                                 <td><strong>productionRelease</strong></td>
                                                 <td>Production build with release settings</td>
                                                 <td>Play Store deployment</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>productionDebug</strong></td>
                                                 <td>Production build with debug settings</td>
                                                 <td>Testing on production environment</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>stagingRelease</strong></td>
                                                 <td>Staging build with release settings</td>
                                                 <td>Testing before production</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>stagingDebug</strong></td>
                                                 <td>Staging build with debug settings</td>
                                                 <td>Development on staging environment</td>
                                             </tr>
                                         </tbody>
                                     </table>
                                 </div>
                                 <h4 class="fw-semibold mt-4">APK Signing Configuration</h4>
                                 <div class="alert alert-light border">
                                     @verbatim
                                     <pre><code class="language-groovy">
 // signing.gradle
 android {
     signingConfigs {
         release {
             storeFile file(project.properties["keystore.file"] ?: "debug.keystore")
             storePassword project.properties["keystore.password"] ?: "android"
             keyAlias project.properties["keystore.alias"] ?: "androiddebugkey"
             keyPassword project.properties["keystore.alias.password"] ?: "android"
         }
     }
     buildTypes {
         release {
             signingConfig signingConfigs.release
             minifyEnabled true
             proguardFiles getDefaultProguardFile('proguard-android-optimize.txt'), 'proguard-rules.pro'
         }
     }
 }
                                     </code></pre>
                                     @endverbatim
                                 </div>
                                 <h4 class="fw-semibold mt-4">ProGuard & R8 Configuration</h4>
                                 <div class="alert alert-light border">
                                     @verbatim
                                     <pre><code class="language-properties">
 # proguard-rules.pro
 # Keep all classes for a library
 -keep class com.example.library.** { *; }
 
 # Keep specific class
 -keep public class com.example.app.MyClass {
     public void myMethod();
 }
 
 # Keep all classes that implement an interface
 -keep class * implements com.example.app.MyInterface {
     public *;
 }
 
 # Remove debug logging
 -assumenosideeffects class android.util.Log {
     public static *** d(...);
     public static *** v(...);
 }
 
 # Keep Parcelable classes
 -keep class * implements android.os.Parcelable {
     public static final android.os.Parcelable$Creator *;
 }
 
 # Keep R8 optimization
 -keepattributes *Annotation*
 -keepattributes SourceFile,LineNumberTable
                                     </code></pre>
                                     @endverbatim
                                 </div>
                                 <div class="alert alert-warning mt-3">
                                     <strong>Best Practices:</strong>
                                     <ul>
                                         <li>Use version catalog for dependency management</li>
                                         <li>Enable ProGuard/R8 for release builds</li>
                                         <li>Use build variants for different environments</li>
                                         <li>Store signing credentials securely</li>
                                         <li>Use view binding for type-safe UI access</li>
                                         <li>Enable caching for faster builds</li>
                                     </ul>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <!--// =====================================================-->
                     <!--// SECTION 6: Activities & Lifecycle-->
                     <!--// =====================================================-->
                     <div class="section">
                         <div class="card mb-4 border">
                             <div class="card-header bg-white py-3">
                                 <h2 class="mb-0">Activities & Lifecycle</h2>
                             </div>
                             <div class="card-body p-4">
                                 <p>Activities are the fundamental building blocks of Android applications. Understanding their lifecycle is crucial for developing robust apps.</p>
                     
                                 <h3 class="fw-semibold mt-3">What is an Activity?</h3>
                                 <div class="alert alert-light border mb-4">
                                     <strong>Activity Definition:</strong> An Activity is a single, focused thing that the user can do. Almost all activities interact with the user, so the Activity class takes care of creating a window for you in which you can place your UI with setContentView.
                                 </div>
                                 <h4 class="fw-semibold">Activity Lifecycle Methods</h4>
                                 <div class="alert alert-info border">
                                     <strong>Lifecycle Callbacks:</strong>
                                     <ul>
                                         <li><code>onCreate()</code> - Called when the activity is first created</li>
                                         <li><code>onStart()</code> - Called when the activity becomes visible</li>
                                         <li><code>onResume()</code> - Called when the activity starts interacting with the user</li>
                                         <li><code>onPause()</code> - Called when the activity is partially obscured</li>
                                         <li><code>onStop()</code> - Called when the activity is no longer visible</li>
                                         <li><code>onRestart()</code> - Called when the activity is being restarted</li>
                                         <li><code>onDestroy()</code> - Called before the activity is destroyed</li>
                                     </ul>
                                 </div>
                                 <h5 class="fw-semibold mt-3">Activity Lifecycle Flow</h5>
                                 <div class="alert alert-light border">
                                     @verbatim
                                     <pre><code class="language-kotlin">
 class MainActivity : AppCompatActivity() {
     
     override fun onCreate(savedInstanceState: Bundle?) {
         super.onCreate(savedInstanceState)
         setContentView(R.layout.activity_main)
         // Initialize UI components
         // Restore saved state
         Log.d("Lifecycle", "onCreate called")
     }
 
     override fun onStart() {
         super.onStart()
         // Activity is becoming visible
         Log.d("Lifecycle", "onStart called")
     }
 
     override fun onResume() {
         super.onResume()
         // Activity is in foreground and interactive
         Log.d("Lifecycle", "onResume called")
         // Start animations, sensors, GPS
     }
 
     override fun onPause() {
         super.onPause()
         // Activity is partially visible or losing focus
         Log.d("Lifecycle", "onPause called")
         // Pause animations, save data, stop sensors
     }
 
     override fun onStop() {
         super.onStop()
         // Activity is no longer visible
         Log.d("Lifecycle", "onStop called")
         // Release resources
     }
 
     override fun onRestart() {
         super.onRestart()
         // Activity is being restarted after being stopped
         Log.d("Lifecycle", "onRestart called")
     }
 
     override fun onDestroy() {
         super.onDestroy()
         // Activity is being destroyed
         Log.d("Lifecycle", "onDestroy called")
         // Clean up resources
     }
 
     // Handle configuration changes
     override fun onConfigurationChanged(newConfig: Configuration) {
         super.onConfigurationChanged(newConfig)
         // Handle orientation, keyboard, etc.
         Log.d("Lifecycle", "Configuration changed: ${newConfig.orientation}")
     }
 
     // Save state for configuration changes
     override fun onSaveInstanceState(outState: Bundle) {
         super.onSaveInstanceState(outState)
         outState.putString("key", "value")
         outState.putInt("counter", 10)
         Log.d("Lifecycle", "Saving instance state")
     }
 
     // Restore state
     override fun onRestoreInstanceState(savedInstanceState: Bundle) {
         super.onRestoreInstanceState(savedInstanceState)
         val value = savedInstanceState.getString("key")
         val counter = savedInstanceState.getInt("counter")
         Log.d("Lifecycle", "Restoring instance state")
     }
 }
                                     </code></pre>
                                     @endverbatim
                                 </div>
                                 <h4 class="fw-semibold mt-4">Activity Launch Modes</h4>
                                 <div class="table-responsive">
                                     <table class="table table-bordered">
                                         <thead class="table-dark">
                                             <tr>
                                                 <th>Launch Mode</th>
                                                 <th>Description</th>
                                                 <th>Use Case</th>
                                             </tr>
                                         </thead>
                                         <tbody>
                                             <tr>
                                                 <td><strong>standard</strong></td>
                                                 <td>Default mode, creates a new instance each time</td>
                                                 <td>Most activities</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>singleTop</strong></td>
                                                 <td>Reuses instance if it's at the top of the stack</td>
                                                 <td>Search, notifications</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>singleTask</strong></td>
                                                 <td>Only one instance allowed, clears activities above it</td>
                                                 <td>Main activities, home screens</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>singleInstance</strong></td>
                                                 <td>Only one instance, no other activities in the task</td>
                                                 <td>Special activities (permissions)</td>
                                             </tr>
                                         </tbody>
                                     </table>
                                 </div>
                                 <h4 class="fw-semibold mt-4">Intents for Activity Communication</h4>
                                 <div class="alert alert-light border">
                                     @verbatim
                                     <pre><code class="language-kotlin">
 // Explicit Intent - Start activity
 val intent = Intent(this, SecondActivity::class.java)
 intent.putExtra("key", "value")
 startActivity(intent)
 
 // Start activity for result (deprecated, use Activity Result API)
 startActivityForResult(intent, REQUEST_CODE)
 
 // Implicit Intent - Open website
 val webIntent = Intent(Intent.ACTION_VIEW, Uri.parse("https://www.google.com"))
 startActivity(webIntent)
 
 // Implicit Intent - Send email
 val emailIntent = Intent(Intent.ACTION_SENDTO)
 emailIntent.data = Uri.parse("mailto:email@example.com")
 emailIntent.putExtra(Intent.EXTRA_SUBJECT, "Subject")
 emailIntent.putExtra(Intent.EXTRA_TEXT, "Message")
 startActivity(emailIntent)
 
 // Implicit Intent - Choose app
 val chooser = Intent.createChooser(intent, "Choose app")
 startActivity(chooser)
 
 // Activity Result API (Modern approach)
 private val resultLauncher = registerForActivityResult(ActivityResultContracts.StartActivityForResult()) { result ->
     if (result.resultCode == Activity.RESULT_OK) {
         val data = result.data?.getStringExtra("key")
         // Handle result
     }
 }
 
 // Usage
 val intent = Intent(this, SecondActivity::class.java)
 resultLauncher.launch(intent)
 
 // Passing complex objects (Parcelable)
 data class User(
     val id: Int,
     val name: String,
     val email: String
 ) : Parcelable {
     // Implement Parcelable
 }
 
 val user = User(1, "John", "john@email.com")
 intent.putExtra("user", user)
                                     </code></pre>
                                     @endverbatim
                                 </div>
                                 <div class="alert alert-warning mt-3">
                                     <strong>Best Practices:</strong>
                                     <ul>
                                         <li>Use ViewModel to handle configuration changes</li>
                                         <li>Use Activity Result API instead of startActivityForResult</li>
                                         <li>Handle back stack properly</li>
                                         <li>Save state on configuration changes</li>
                                         <li>Use explicit intents when possible</li>
                                         <li>Avoid memory leaks in lifecycle methods</li>
                                     </ul>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <!--=====================================================-->
                     <!--SECTION 7: User Interface (UI) Development-->
                     <!--=====================================================-->
                     <div class="section">
                         <div class="card mb-4 border">
                             <div class="card-header bg-white py-3">
                                 <h2 class="mb-0">User Interface (UI) Development</h2>
                             </div>
                             <div class="card-body p-4">
                                 <p>Android UI development involves creating responsive, attractive, and user-friendly interfaces using XML layouts and modern UI frameworks.</p>
                                 <h3 class="fw-semibold mt-3">Introduction to Android UI</h3>
                                 <div class="alert alert-light border mb-4">
                                     <strong>UI Development Overview:</strong> Android UI is built using a combination of XML layouts and code. XML defines the structure and appearance, while code handles interactivity and logic.
                                 </div>
                                 <h4 class="fw-semibold">XML Layout Fundamentals</h4>
                                 <div class="alert alert-light border">
                                     @verbatim
                                     <pre><code class="language-xml">
 &lt;!-- activity_main.xml --&gt;
 &lt;?xml version="1.0" encoding="utf-8"?&gt;
 &lt;androidx.constraintlayout.widget.ConstraintLayout 
     xmlns:android="http://schemas.android.com/apk/res/android"
     xmlns:app="http://schemas.android.com/apk/res-auto"
     android:layout_width="match_parent"
     android:layout_height="match_parent"
     android:padding="16dp"&gt;
 
     &lt;!-- TextView --&gt;
     &lt;TextView
         android:id="@+id/titleTextView"
         android:layout_width="wrap_content"
         android:layout_height="wrap_content"
         android:text="Hello World!"
         android:textSize="24sp"
         android:textStyle="bold"
         android:textColor="@color/primary"
         app:layout_constraintTop_toTopOf="parent"
         app:layout_constraintStart_toStartOf="parent"
         app:layout_constraintEnd_toEndOf="parent" /&gt;
 
     &lt;!-- EditText --&gt;
     &lt;com.google.android.material.textfield.TextInputLayout
         android:id="@+id/inputLayout"
         android:layout_width="match_parent"
         android:layout_height="wrap_content"
         android:layout_marginTop="16dp"
         app:layout_constraintTop_toBottomOf="@id/titleTextView"
         app:layout_constraintStart_toStartOf="parent"
         app:layout_constraintEnd_toEndOf="parent"&gt;
 
         &lt;com.google.android.material.textfield.TextInputEditText
             android:id="@+id/inputEditText"
             android:layout_width="match_parent"
             android:layout_height="wrap_content"
             android:hint="Enter your name"
             android:inputType="textPersonName" /&gt;
     &lt;/com.google.android.material.textfield.TextInputLayout&gt;
 
     &lt;!-- Button --&gt;
     &lt;Button
         android:id="@+id/submitButton"
         android:layout_width="match_parent"
         android:layout_height="wrap_content"
         android:layout_marginTop="16dp"
         android:text="Submit"
         android:backgroundTint="@color/primary"
         app:layout_constraintTop_toBottomOf="@id/inputLayout"
         app:layout_constraintStart_toStartOf="parent"
         app:layout_constraintEnd_toEndOf="parent" /&gt;
 
     &lt;!-- ImageView --&gt;
     &lt;ImageView
         android:id="@+id/imageView"
         android:layout_width="100dp"
         android:layout_height="100dp"
         android:layout_marginTop="16dp"
         android:src="@drawable/ic_launcher"
         android:scaleType="centerCrop"
         app:layout_constraintTop_toBottomOf="@id/submitButton"
         app:layout_constraintStart_toStartOf="parent"
         app:layout_constraintEnd_toEndOf="parent" /&gt;
 
     &lt;!-- ProgressBar --&gt;
     &lt;ProgressBar
         android:id="@+id/progressBar"
         android:layout_width="wrap_content"
         android:layout_height="wrap_content"
         android:layout_marginTop="16dp"
         app:layout_constraintTop_toBottomOf="@id/imageView"
         app:layout_constraintStart_toStartOf="parent"
         app:layout_constraintEnd_toEndOf="parent"
         android:visibility="gone" /&gt;
 
 &lt;/androidx.constraintlayout.widget.ConstraintLayout&gt;
                                     </code></pre>
                                     @endverbatim
                                 </div>
                                 <h4 class="fw-semibold mt-4">Common Views & Widgets</h4>
                                 <div class="row g-3">
                                     <div class="col-md-4">
                                         <div class="card h-100 border-0 shadow-sm">
                                             <div class="card-body">
                                                 <h5>📝 TextView</h5>
                                                 <ul>
                                                     <li>Display text to the user</li>
                                                     <li>Supports HTML formatting</li>
                                                     <li>Can be clickable</li>
                                                     <li>Properties: text, textSize, textColor</li>
                                                 </ul>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-4">
                                         <div class="card h-100 border-0 shadow-sm">
                                             <div class="card-body">
                                                 <h5>⌨️ EditText</h5>
                                                 <ul>
                                                     <li>User input field</li>
                                                     <li>Input types: text, number, email</li>
                                                     <li>Can be with hints</li>
                                                     <li>Text watchers for validation</li>
                                                 </ul>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-4">
                                         <div class="card h-100 border-0 shadow-sm">
                                             <div class="card-body">
                                                 <h5>🔘 Button</h5>
                                                 <ul>
                                                     <li>User click action</li>
                                                     <li>Various styles (raised, flat)</li>
                                                     <li>Click listeners</li>
                                                     <li>Can have icons</li>
                                                 </ul>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-4">
                                         <div class="card h-100 border-0 shadow-sm">
                                             <div class="card-body">
                                                 <h5>🖼️ ImageView</h5>
                                                 <ul>
                                                     <li>Display images</li>
                                                     <li>Scale types: center, fit, crop</li>
                                                     <li>Supports drawables, Bitmap</li>
                                                     <li>Glide/Coil for loading</li>
                                                 </ul>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-4">
                                         <div class="card h-100 border-0 shadow-sm">
                                             <div class="card-body">
                                                 <h5>☑️ CheckBox</h5>
                                                 <ul>
                                                     <li>Toggle selection</li>
                                                     <li>Checked state listener</li>
                                                     <li>Can be customized</li>
                                                     <li>Multiple selections</li>
                                                 </ul>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-4">
                                         <div class="card h-100 border-0 shadow-sm">
                                             <div class="card-body">
                                                 <h5>🔘 RadioButton</h5>
                                                 <ul>
                                                     <li>Single selection</li>
                                                     <li>RadioGroup for grouping</li>
                                                     <li>OnCheckedChangeListener</li>
                                                     <li>Mutually exclusive</li>
                                                 </ul>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <h4 class="fw-semibold mt-4">Layout Managers</h4>
                                 <div class="accordion" id="layoutAccordion">
                                     <div class="accordion-item">
                                         <h5 class="accordion-header">
                                             <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#linearLayout">
                                                 📐 LinearLayout
                                             </button>
                                         </h5>
                                         <div id="linearLayout" class="accordion-collapse collapse" data-bs-parent="#layoutAccordion">
                                             <div class="accordion-body">
                                                 <h6 class="fw-semibold">LinearLayout Features</h6>
                                                 <ul>
                                                     <li><strong>Orientation:</strong> horizontal or vertical</li>
                                                     <li><strong>Weight:</strong> Distributes space proportionally</li>
                                                     <li><strong>Gravity:</strong> Aligns child views</li>
                                                     <li><strong>Divider:</strong> Adds dividers between items</li>
                                                 </ul>
                                                 <div class="alert alert-light border">
                                                     @verbatim
                                                     <pre><code class="language-xml">
 &lt;LinearLayout
     android:layout_width="match_parent"
     android:layout_height="wrap_content"
     android:orientation="vertical"
     android:weightSum="10"
     android:gravity="center"&gt;
 
     &lt;TextView
         android:layout_width="match_parent"
         android:layout_height="0dp"
         android:layout_weight="4"
         android:text="Weight 4" /&gt;
 
     &lt;TextView
         android:layout_width="match_parent"
         android:layout_height="0dp"
         android:layout_weight="6"
         android:text="Weight 6" /&gt;
 
 &lt;/LinearLayout&gt;
                                                     </code></pre>
                                                     @endverbatim
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="accordion-item">
                                         <h5 class="accordion-header">
                                             <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#constraintLayout">
                                                 📐 ConstraintLayout
                                             </button>
                                         </h5>
                                         <div id="constraintLayout" class="accordion-collapse collapse" data-bs-parent="#layoutAccordion">
                                             <div class="accordion-body">
                                                 <h6 class="fw-semibold">ConstraintLayout Features</h6>
                                                 <ul>
                                                     <li><strong>Flexible:</strong> Powerful layout system</li>
                                                     <li><strong>Constraints:</strong> top, bottom, start, end, center</li>
                                                     <li><strong>Chains:</strong> Distributes space in groups</li>
                                                     <li><strong>Guidelines:</strong> Horizontal and vertical guides</li>
                                                     <li><strong>Barriers:</strong> Aligns views dynamically</li>
                                                     <li><strong>Performance:</strong> Flatten hierarchy</li>
                                                 </ul>
                                                 <div class="alert alert-light border">
                                                     @verbatim
                                                     <pre><code class="language-xml">
 &lt;androidx.constraintlayout.widget.ConstraintLayout
     android:layout_width="match_parent"
     android:layout_height="match_parent"&gt;
 
     &lt;!-- Guidelines --&gt;
     &lt;androidx.constraintlayout.widget.Guideline
         android:id="@+id/guideline"
         android:layout_width="wrap_content"
         android:layout_height="wrap_content"
         android:orientation="horizontal"
         app:layout_constraintGuide_percent="0.5" /&gt;
 
     &lt;!-- Barrier --&gt;
     &lt;androidx.constraintlayout.widget.Barrier
         android:id="@+id/barrier"
         android:layout_width="wrap_content"
         android:layout_height="wrap_content"
         app:barrierDirection="end"
         app:constraint_referenced_ids="view1,view2" /&gt;
 
     &lt;!-- Chain --&gt;
     &lt;TextView
         android:id="@+id/view1"
         android:layout_width="0dp"
         android:layout_height="wrap_content"
         app:layout_constraintStart_toStartOf="parent"
         app:layout_constraintEnd_toStartOf="@+id/view2"
         app:layout_constraintHorizontal_chainStyle="spread" /&gt;
 
     &lt;TextView
         android:id="@+id/view2"
         android:layout_width="0dp"
         android:layout_height="wrap_content"
         app:layout_constraintStart_toEndOf="@+id/view1"
         app:layout_constraintEnd_toEndOf="parent" /&gt;
 
 &lt;/androidx.constraintlayout.widget.ConstraintLayout&gt;
                                                     </code></pre>
                                                     @endverbatim
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <h3 class="fw-semibold mt-4">Material Design</h3>
                                 <div class="alert alert-info border">
                                     <strong>Material Design:</strong> Google's design system that provides guidelines for creating visually appealing and consistent user interfaces across all Android apps.
                                 </div>
                                 <h4 class="fw-semibold">Material Components</h4>
                                 <div class="row g-3">
                                     <div class="col-md-4">
                                         <div class="card h-100 border-0 shadow-sm">
                                             <div class="card-body">
                                                 <h5>🎨 MaterialButton</h5>
                                                 <ul>
                                                     <li>With icons and icon gravity</li>
                                                     <li>Elevation and corners</li>
                                                     <li>Ripple effect</li>
                                                     <li>Various styles</li>
                                                 </ul>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-4">
                                         <div class="card h-100 border-0 shadow-sm">
                                             <div class="card-body">
                                                 <h5>📝 TextInputLayout</h5>
                                                 <ul>
                                                     <li>Floating labels</li>
                                                     <li>Error messages</li>
                                                     <li>Password visibility toggle</li>
                                                     <li>Character counting</li>
                                                 </ul>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-4">
                                         <div class="card h-100 border-0 shadow-sm">
                                             <div class="card-body">
                                                 <h5>🔍 SearchView</h5>
                                                 <ul>
                                                     <li>Search functionality</li>
                                                     <li>Auto-complete</li>
                                                     <li>Voice search</li>
                                                     <li>Recent queries</li>
                                                 </ul>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <h4 class="fw-semibold mt-4">Themes & Styles</h4>
                                 <div class="alert alert-light border">
                                     @verbatim
                                     <pre><code class="language-xml">
 &lt;!-- res/values/themes.xml --&gt;
 &lt;resources&gt;
     &lt;!-- Light Theme --&gt;
     &lt;style name="Theme.MyApp" parent="Theme.Material3.Light"&gt;
         &lt;item name="colorPrimary"&gt;@color/purple_500&lt;/item&gt;
         &lt;item name="colorPrimaryVariant"&gt;@color/purple_700&lt;/item&gt;
         &lt;item name="colorOnPrimary"&gt;@color/white&lt;/item&gt;
         &lt;item name="colorSecondary"&gt;@color/teal_200&lt;/item&gt;
         &lt;item name="colorSecondaryVariant"&gt;@color/teal_700&lt;/item&gt;
         &lt;item name="colorOnSecondary"&gt;@color/black&lt;/item&gt;
         &lt;item name="android:statusBarColor"&gt;@color/purple_700&lt;/item&gt;
         &lt;item name="android:navigationBarColor"&gt;@color/purple_700&lt;/item&gt;
     &lt;/style&gt;
 
     &lt;!-- Dark Theme --&gt;
     &lt;style name="Theme.MyApp.Dark" parent="Theme.Material3.Dark"&gt;
         &lt;item name="colorPrimary"&gt;@color/purple_200&lt;/item&gt;
         &lt;item name="colorPrimaryVariant"&gt;@color/purple_400&lt;/item&gt;
         &lt;item name="colorOnPrimary"&gt;@color/black&lt;/item&gt;
         &lt;item name="colorSecondary"&gt;@color/teal_600&lt;/item&gt;
         &lt;item name="colorSecondaryVariant"&gt;@color/teal_400&lt;/item&gt;
         &lt;item name="colorOnSecondary"&gt;@color/white&lt;/item&gt;
         &lt;item name="android:statusBarColor"&gt;@color/purple_400&lt;/item&gt;
         &lt;item name="android:navigationBarColor"&gt;@color/purple_400&lt;/item&gt;
     &lt;/style&gt;
 
     &lt;!-- Custom Style --&gt;
     &lt;style name="MyButton" parent="Widget.Material3.Button"&gt;
         &lt;item name="cornerRadius"&gt;16dp&lt;/item&gt;
         &lt;item name="android:textSize"&gt;16sp&lt;/item&gt;
         &lt;item name="android:textColor"&gt;@color/white&lt;/item&gt;
         &lt;item name="android:backgroundTint"&gt;@color/primary&lt;/item&gt;
     &lt;/style&gt;
 
     &lt;!-- Typography --&gt;
     &lt;style name="Heading1"&gt;
         &lt;item name="android:textSize"&gt;32sp&lt;/item&gt;
         &lt;item name="android:textStyle"&gt;bold&lt;/item&gt;
         &lt;item name="android:textColor"&gt;@color/primary&lt;/item&gt;
     &lt;/style&gt;
 
     &lt;style name="Heading2" parent="Heading1"&gt;
         &lt;item name="android:textSize"&gt;24sp&lt;/item&gt;
     &lt;/style&gt;
 &lt;/resources&gt;
                                     </code></pre>
                                     @endverbatim
                                 </div>
                                 <h4 class="fw-semibold mt-4">Animations</h4>
                                 <div class="alert alert-light border">
                                     @verbatim
                                     <pre><code class="language-kotlin">
 // View Animation
 val animation = AnimationUtils.loadAnimation(this, R.anim.fade_in)
 view.startAnimation(animation)
 
 // Property Animation
 ObjectAnimator.ofFloat(view, "translationX", 0f, 200f).apply {
     duration = 1000
     start()
 }
 
 // Animator Set
 AnimatorSet().apply {
     playTogether(
         ObjectAnimator.ofFloat(view, "scaleX", 0f, 1f),
         ObjectAnimator.ofFloat(view, "scaleY", 0f, 1f),
         ObjectAnimator.ofFloat(view, "alpha", 0f, 1f)
     )
     duration = 500
     start()
 }
 
 // ViewPropertyAnimator
 view.animate()
     .translationX(200f)
     .translationY(200f)
     .rotation(360f)
     .alpha(0.5f)
     .setDuration(1000)
     .setInterpolator(AccelerateDecelerateInterpolator())
     .start()
 
 // Custom Animation with ValueAnimator
 ValueAnimator.ofFloat(0f, 100f).apply {
     duration = 2000
     addUpdateListener {
         val value = it.animatedValue as Float
         view.text = value.toInt().toString()
     }
     start()
 }
 
 // Animator Listeners
 view.animate()
     .translationX(200f)
     .setDuration(1000)
     .withStartAction { /* Start callback */ }
     .withEndAction { /* End callback */ }
     .start()
 
 // ViewPager2 Animation
 viewPager2.setPageTransformer { page, position ->
     page.apply {
         when {
             position < -1 -> alpha = 0f
             position <= 1 -> {
                 alpha = 1f - Math.abs(position)
                 scaleX = 1f - 0.5f * Math.abs(position)
                 scaleY = 1f - 0.5f * Math.abs(position)
             }
             else -> alpha = 0f
         }
     }
 }
                                     </code></pre>
                                     @endverbatim
                                 </div>
                                 <div class="alert alert-warning mt-3">
                                     <strong>UI Best Practices:</strong>
                                     <ul>
                                         <li>Use ConstraintLayout for complex layouts</li>
                                         <li>Follow Material Design guidelines</li>
                                         <li>Use vector drawables for scalability</li>
                                         <li>Optimize layouts for performance</li>
                                         <li>Support dark theme</li>
                                         <li>Provide accessibility support</li>
                                         <li>Use data binding for UI updates</li>
                                         <li>Test on different screen sizes</li>
                                     </ul>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <!--END : -->
                 </div>
                 <!-- Main Content Column Ending (col-lg-7) -->
                 @include('frontend.service.partials.footer')
@endsection
