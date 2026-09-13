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
                     <h1 class="section-heading">{{ $currentModuleObj->title ?? 'Module Not Found' }}</h1>
                     <!-- Create by user name and created_at date time -->
                     @include('frontend.service.partials.create-by-user-name')
                     <hr style="border: 0; border-top: 2px dashed #bbb;">
                     @if($currentModuleObj)
                     <!-- ===================================================== -->
                     <!-- Module {{ $moduleNumberFormatted }} Start : {{ $moduleTitle }} -->
                     <!-- ===================================================== -->
                     <div class="module" id="module-{{ $moduleNumber }}">
		             <hr style="border: 0; border-top: 2px dashed #bbb;">
		             <p class="">
		                 A well-organized campaign structure is essential for running successful Google Ads
		                 campaigns. In this module, you will learn how Google Ads accounts are structured,
		                 including the hierarchy of campaigns, ad groups, keywords, and ads. Understanding
		                 this structure helps advertisers organize campaigns efficiently, control budgets,
		                 improve ad relevance, and achieve better performance.
		             </p>
		             <p>
		                 You will also explore the different types of Google Ads campaigns such as Search,
		                 Display, Video, Shopping, and App campaigns. This section explains how to choose the
		                 right campaign type based on marketing goals like lead generation, website traffic,
		                 product sales, or brand awareness. Additionally, you will learn how to configure key
		                 campaign settings including location targeting, language selection, audience targeting,
		                 and ad scheduling to reach the right users at the right time.
		             </p>
		             <hr style="border: 0; border-top: 2px dashed #bbb;">
                         <!-- Section 1 -->
                         <div class="section" id="topic-1">
                             <h2 class="fw-bold mb-3">1 How to Create a Campaign (Step-by-Step)</h2>
                             <h3 class="mt-3">🚀 What Is a Campaign?</h3>
                             <p>
                                 A <strong>Campaign</strong> is the top-level setup inside Google Ads where you decide:
                             </p>
                             <ul>
                                 <li>🎯 Your advertising goal</li>
                                 <li>🌐 Where your ads will appear (Search, Display, Video)</li>
                                 <li>📍 Which locations to target</li>
                                 <li>💰 How much budget you want to spend</li>
                                 <li>⚙️ What bidding strategy to use</li>
                             </ul>
                             <p>Think of it like the <strong>main folder</strong> that controls everything in your ad account.</p>
                             <div class="alert alert-info mt-3">
                                 🧠 <strong>Simple Example:</strong>  
                                 If you want to promote school admissions in Sitamarhi, create a campaign like:  
                                 <strong>“R P Mission School – Admissions 2025 Campaign”</strong>
                             </div>
                             <hr>
                             <h3 class="mt-4">🧭 Step-by-Step Guide to Create Your First Campaign</h3>
                             <ol class="mt-3">
                                 <li>
                                     <strong>Go to Google Ads</strong>  
                                     Visit <a href="https://ads.google.com" target="_blank">ads.google.com</a> → Sign in with your Google account.
                                 </li>
                                 <li class="mt-2">
                                     <strong>Click on “New Campaign”</strong>  
                                     On the Dashboard → Click the <strong>+ New Campaign</strong> button.
                                 </li>
                                 <li class="mt-2">
                                     <strong>Select Your Campaign Goal</strong>  
                                     Choose what you want to achieve:
                                     <ul>
                                         <li>🧲 <strong>Leads</strong> – To get inquiries (Best for Schools)</li>
                                         <li>💰 <strong>Sales</strong> – For e-commerce</li>
                                         <li>🌐 <strong>Website Traffic</strong></li>
                                         <li>👁️ <strong>Brand Awareness</strong></li>
                                         <li>📱 <strong>App Promotion</strong></li>
                                     </ul>
                                     <div class="alert alert-success">
                                         🎯 <strong>Recommended Goal for Schools:</strong> Choose <strong>Leads</strong>
                                     </div>
                                 </li>
                                 <li class="mt-2">
                                     <strong>Choose Campaign Type</strong>  
                                     Select where your ads will show:
                                     <ul>
                                         <li><strong>Search Campaign</strong> – Shows ads on Google search results</li>
                                         <li><strong>Display Campaign</strong> – Shows banner ads on websites</li>
                                         <li><strong>Video Campaign</strong> – Ads on YouTube</li>
                                         <li><strong>Shopping</strong> – For online stores</li>
                                         <li><strong>App Campaign</strong> – For mobile apps</li>
                                     </ul>
                                     <div class="alert alert-warning">
                                         ⭐ Best for Schools: <strong>Search Campaign</strong>
                                     </div>
                                 </li>
                                 <li class="mt-2">
                                     <strong>Set Up Basic Settings</strong>
                                     <ul>
                                         <li>Campaign Name → <code>R P Mission School - Admissions 2025</code></li>
                                         <li>Networks → Uncheck “Display Network” (for Search campaigns)</li>
                                         <li>Start & End Date (optional)</li>
                                     </ul>
                                 </li>
                                 <li class="mt-2">
                                     <strong>Choose Locations</strong>  
                                     Select where you want your ads to appear:
                                     <ul>
                                         <li><strong>Sitamarhi, Bihar</strong> (Recommended)</li>
                                         <li>Nearby cities (optional)</li>
                                     </ul>
                                     <div class="alert alert-primary">
                                         🗺️ Target only your service area to avoid wasted budget.
                                     </div>
                                 </li>
                                 <li class="mt-2">
                                     <strong>Choose Languages</strong>  
                                     <ul>
                                         <li>English</li>
                                         <li>Hindi</li>
                                     </ul>
                                 </li>
                                 <li class="mt-2">
                                     <strong>Set Your Daily Budget</strong>
                                     <p>Budget = how much you want to spend per day.</p>
                                     <ul>
                                         <li>Best for beginners → ₹200–₹300/day</li>
                                         <li>Can increase later as results improve</li>
                                     </ul>
                                 </li>
                                 <li class="mt-2">
                                     <strong>Select a Bidding Strategy</strong>
                                     <ul>
                                         <li><strong>Maximize Clicks</strong> – Best for new campaigns</li>
                                         <li><strong>Maximize Conversions</strong> – After 20–30 conversions</li>
                                         <li><strong>Manual CPC</strong> – Full control</li>
                                     </ul>
                                 </li>
                                 <li class="mt-2">
                                     <strong>Create Ad Groups</strong>
                                     <p>Ad Groups = Groups of related keywords.</p>
                                     <p>Example for a School:</p>
                                     <ul>
                                         <li><strong>Ad Group 1:</strong> Admissions 2025</li>
                                         <li><strong>Ad Group 2:</strong> Best CBSE School Sitamarhi</li>
                                         <li><strong>Ad Group 3:</strong> Hostel School in Sitamarhi</li>
                                     </ul>
                                 </li>
                                 <li class="mt-2">
                                     <strong>Add Keywords</strong>
                                     <p>Use keyword match types:</p>
                                     <ul>
                                         <li>Broad → school in sitamarhi</li>
                                         <li>Phrase → "best school in sitamarhi"</li>
                                         <li>Exact → [cbse school sitamarhi]</li>
                                     </ul>
                                 </li>
                                 <li class="mt-2">
                                     <strong>Create Ads (Responsive Search Ads)</strong>
                                     <p>Include 10–15 headlines + 3–4 descriptions.</p>
                                     <ul>
                                         <li>“Best CBSE School in Sitamarhi”</li>
                                         <li>“Admissions Open 2025 – Apply Now”</li>
                                         <li>“Top English Medium School with Hostel”</li>
                                     </ul>
                                 </li>
                                 <li class="mt-2">
                                     <strong>Add Extensions (Very Important 🔥)</strong>
                                     <ul>
                                         <li>Sitelink – Admissions | Facilities | Contact</li>
                                         <li>Call Extension – School phone number</li>
                                         <li>Location Extension – Google Maps</li>
                                     </ul>
                                 </li>
                                 <li class="mt-2">
                                     <strong>Review & Publish</strong>  
                                     Double-check:
                                     <ul>
                                         <li>Budget</li>
                                         <li>Location</li>
                                         <li>Keywords</li>
                                         <li>Ads</li>
                                     </ul>
                                     Then click <strong>Publish</strong>.
                                 </li>
                             </ol>
                             <hr>
                             <h3 class="mt-4 text-success">📊 Example Setup for a School Campaign</h3>
                             <div class="table-responsive">
                                 <table class="table table-bordered">
                                     <thead class="table-light">
                                         <tr>
                                             <th>Setting</th>
                                             <th>Example</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         <tr><td>Goal</td><td>Leads</td></tr>
                                         <tr><td>Campaign Type</td><td>Search</td></tr>
                                         <tr><td>Location</td><td>Sitamarhi, Bihar</td></tr>
                                         <tr><td>Daily Budget</td><td>₹300</td></tr>
                                         <tr><td>Bidding Strategy</td><td>Maximize Clicks</td></tr>
                                         <tr><td>Ad Groups</td><td>Admissions, Facilities, Hostel</td></tr>
                                     </tbody>
                                 </table>
                             </div>
                             <hr>
                             <h3 class="mt-4">💡 Pro Tips (Must Read!)</h3>
                             <ul>
                                 <li>Start small → Increase budget when results improve.</li>
                                 <li>Use 3–4 ad variations to test performance.</li>
                                 <li>Check search terms every 3 days & add negative keywords.</li>
                                 <li>Use strong CTAs like “Apply Now” or “Call for Admission.”</li>
                                 <li>Always use location targeting (avoid wasted money).</li>
                             </ul>
                             <div class="alert alert-success mt-3">
                                 👍 <strong>Pro Tip:</strong>  
                                 70% of leads improve when you add <strong>Call Extensions + Location Extensions</strong>.
                             </div>
                             <hr>
                             <h3 class="mt-4">🏁 Final Summary</h3>
                             <p>
                                 Creating a campaign is easy if you follow a structured approach:  
                                 <strong>Goal → Campaign Type → Budget → Keywords → Ads → Extensions → Publish</strong>  
                                 Once set up correctly, your campaign can bring consistent leads and traffic.
                             </p>
                         </div>
                         <hr class="border border-dark border-5">
                         @include('frontend.service.partials.in-article-ads')
                         <!-- Section 2 -->
                         <div class="section" id="topic-2">
                             <h2 class="fw-bold mb-3">2 Account Hierarchy: Campaigns, Ad Groups, and Ads</h2>
                             <h3 class="mt-3">🏗️ What Is Google Ads Account Hierarchy?</h3>
                             <p>
                                 Google Ads follows a <strong>three-layer structure</strong> to organize and manage your advertising campaigns efficiently.  
                                 Understanding this structure helps you stay organized and control how your ads appear and to whom.
                             </p>
                             <div class="table-responsive mt-3">
                                 <table class="table table-bordered align-middle">
                                     <thead class="table-light">
                                       <tr>
                                         <th>Level</th>
                                         <th>Description</th>
                                         <th>Example</th>
                                       </tr>
                                     </thead>
                                     <tbody>
                                         <tr>
                                             <td><strong>Campaign</strong></td>
                                             <td>The top level — controls budget, location, language, and ad type (Search, Display, Video, etc.).</td>
                                             <td>Campaign: <code>English Coaching Ads – Sitamarhi</code></td>
                                         </tr>
                                         <tr>
                                             <td><strong>Ad Group</strong></td>
                                             <td>A sub-level under each campaign that organizes keywords and ads by theme.</td>
                                             <td>Ad Group: <code>Spoken English Courses</code>, <code>Grammar Classes</code></td>
                                         </tr>
                                         <tr>
                                             <td><strong>Ads</strong></td>
                                             <td>The actual advertisements users see on Google Search or YouTube.</td>
                                             <td>Ad: <em>“Join Best Spoken English Classes in Sitamarhi”</em></td>
                                         </tr>
                                     </tbody>
                                 </table>
                             </div>
                             <hr>
                             <h3 class="mt-4 text-primary">🎯 What Is an Ad Group?</h3>
                             <p>
                                 An <strong>Ad Group</strong> is a container inside a campaign where you organize a set of related keywords and ads.  
                                 Each Ad Group focuses on one main theme or product category.
                             </p>
                             <p>
                                 Think of a campaign as a big folder 📂 — and each Ad Group as smaller subfolders organizing your ads.
                             </p>
                             <h4 class="mt-3">📚 Example: R P Mission School – Google Ads Setup</h4>
                             <p>Imagine you’re running ads for <strong>R P Mission School in Sitamarhi</strong>. Your structure might look like this:</p>
                             <pre class="bg-light p-3 rounded"><code>
Campaign: R P Mission School - Admissions 2025
│
├── Ad Group 1: English Medium Admission
│   ├── Keywords: "English medium school Sitamarhi", "CBSE school admissions"
│   └── Ads: "Top CBSE English Medium School in Sitamarhi"
│
├── Ad Group 2: Hostel Facilities
│   ├── Keywords: "boarding school Sitamarhi", "hostel school near me"
│   └── Ads: "Best Hostel Facility for Boys & Girls in Sitamarhi"
│
└── Ad Group 3: Extra-Curricular Activities
    ├── Keywords: "sports school Sitamarhi", "music classes in schools"
    └── Ads: "R P Mission School – Where Education Meets Talent"
                             </code></pre>
                             <p>💡 Each Ad Group contains:</p>
                             <ul>
                                 <li>🎯 A specific <strong>theme or topic</strong></li>
                                 <li>🔑 A list of <strong>related keywords</strong></li>
                                 <li>📢 2–3 <strong>ads</strong> that target those keywords</li>
                             </ul>
                             <hr>
                             <h3 class="mt-4 text-success">📊 Why Ad Groups Are Important</h3>
                             <ul>
                                 <li>✅ Improve ad relevance — Google matches your ads with the right searches.</li>
                                 <li>💰 Increase Quality Score — better keyword-ad alignment = lower CPC.</li>
                                 <li>🎯 Help with A/B testing — you can test different ad messages within the same theme.</li>
                                 <li>📈 Easier optimization — see which ad group performs best and adjust accordingly.</li>
                             </ul>
                             <div class="alert alert-info mt-3">
                                 💡 <strong>Pro Tip:</strong>  
                                 Keep 10–20 related keywords per ad group.  
                                 Don’t mix unrelated topics like “Admissions” and “Sports” in one ad group.
                             </div>
                             <hr>
                             <h3 class="mt-4">⚙️ Ad Group Best Practices</h3>
                             <ol>
                                 <li>🧠 Group keywords by intent (e.g., “Join school” vs. “School fees”).</li>
                                 <li>🪄 Use 2–3 ad variations per group to test headlines and descriptions.</li>
                                 <li>📈 Monitor each group’s CTR and conversion rate separately.</li>
                                 <li>🚫 Avoid putting too many unrelated keywords — this lowers ad relevance.</li>
                                 <li>💬 Match your ad copy with the keywords in that ad group.</li>
                             </ol>
                             <div class="alert alert-success mt-3">
                                 ✅ <strong>Example Tip:</strong>  
                                 For the <strong>“Hostel Facilities”</strong> ad group, your ad headlines should include the keyword  
                                 <em>“Hostel School Sitamarhi”</em> to improve Quality Score and ad performance.
                             </div>
                             <hr>
                             <h3 class="mt-4">📋 Example Ad Group Setup in Google Ads</h3>
                             <div class="table-responsive">
                                 <table class="table table-bordered align-middle">
                                     <thead class="table-light">
                                         <tr>
                                             <th>Ad Group</th>
                                             <th>Keywords</th>
                                             <th>Ad Example</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         <tr>
                                             <td><strong>Admissions 2025</strong></td>
                                             <td>
                                                 "school admission Sitamarhi",  
                                                 "CBSE admission 2025",  
                                                "best school in Sitamarhi"
                                             </td>
                                             <td>
                                                 Headline: "Admissions Open 2025 – R P Mission School"<br>
                                                 Description: "Join the best English Medium CBSE School in Sitamarhi. Limited Seats – Apply Now!"
                                             </td>
                                         </tr>
                                         <tr>
                                             <td><strong>Hostel Facility</strong></td>
                                             <td>
                                                 "boarding school Sitamarhi",  
                                                 "hostel school near me"
                                             </td>
                                             <td>
                                                 Headline: "Best Boarding School in Sitamarhi – Safe & Disciplined"<br>
                                                 Description: "Spacious hostels, nutritious meals, and 24x7 supervision. Admissions Open Now!"
                                             </td>
                                         </tr>
                                     </tbody>
                                 </table>
                             </div>
                             <hr>
                             <h3 class="mt-4">🏁 Final Summary</h3>
                             <div class="table-responsive">
                                 <table class="table table-bordered align-middle">
                                     <thead class="table-light">
                                       <tr>
                                         <th>Component</th>
                                         <th>Purpose</th>
                                         <th>Example</th>
                                       </tr>
                                     </thead>
                                     <tbody>
                                         <tr>
                                             <td><strong>Campaign</strong></td>
                                             <td>Controls budget, targeting, and ad type</td>
                                             <td>R P Mission School Admissions 2025</td>
                                         </tr>
                                         <tr>
                                             <td><strong>Ad Group</strong></td>
                                             <td>Organizes related keywords and ads</td>
                                             <td>Hostel Facilities / English Medium Classes</td>
                                         </tr>
                                         <tr>
                                             <td><strong>Ads</strong></td>
                                             <td>The actual ad users see in Google</td>
                                             <td>“Join Best CBSE School in Sitamarhi”</td>
                                         </tr>
                                     </tbody>
                                 </table>
                             </div>
                             <p class="mt-3">
                                 🧠 <strong>In Short:</strong>  
                                 Campaign = Strategy 🎯  
                                 Ad Group = Theme 📂  
                                 Ads = Message 📢  
                                 Together, they make your Google Ads campaigns <strong>organized, efficient, and profitable.</strong>
                             </p>
                         </div>
                         <hr class="border border-dark border-5">
                         @include('frontend.service.partials.in-article-ads')
                         <!-- ============================================ -->
<!-- SECTION 3: Types of Google Ads Campaigns (H2) -->
<!-- ============================================ -->
<div class="section" id="topic-3">
    <h2 class="fw-bold mb-4">3 Types of Google Ads Campaigns: Search, Display, Video, Shopping & App</h2>
    
    <div class="alert alert-light border mb-4">
        <strong>📌 Core Concept:</strong> Google Ads offers five main campaign types, each designed for specific marketing objectives. Choosing the right campaign type is critical because it determines where your ads appear, how they look, and which users you reach. This section provides a comprehensive comparison to help you make informed decisions.
    </div>
    
    <!-- Overview Cards -->
    <div class="row g-3 mb-4">
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 border-primary">
                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0 fs-6">🔍 Search Campaigns</h3>
                </div>
                <div class="card-body">
                    <p class="small">Text ads on Google Search results pages when users actively search for keywords.</p>
                    <p class="fw-bold mb-0">Best for: <span class="text-primary">Capturing demand, leads, sales</span></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 border-success">
                <div class="card-header bg-success text-white">
                    <h3 class="mb-0 fs-6">🖼️ Display Campaigns</h3>
                </div>
                <div class="card-body">
                    <p class="small">Image and responsive ads across 2+ million websites, apps, and Google properties.</p>
                    <p class="fw-bold mb-0">Best for: <span class="text-success">Brand awareness, remarketing</span></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 border-danger">
                <div class="card-header bg-danger text-white">
                    <h3 class="mb-0 fs-6">📹 Video Campaigns</h3>
                </div>
                <div class="card-body">
                    <p class="small">Video ads on YouTube and across Google video partners.</p>
                    <p class="fw-bold mb-0">Best for: <span class="text-danger">Engagement, storytelling, YouTube reach</span></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 border-warning">
                <div class="card-header bg-warning text-dark">
                    <h3 class="mb-0 fs-6">🛍️ Shopping Campaigns</h3>
                </div>
                <div class="card-body">
                    <p class="small">Product listing ads with images, prices, and merchant details.</p>
                    <p class="fw-bold mb-0">Best for: <span class="text-dark">E-commerce sales, product visibility</span></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 border-info">
                <div class="card-header bg-info text-white">
                    <h3 class="mb-0 fs-6">📱 App Campaigns</h3>
                </div>
                <div class="card-body">
                    <p class="small">Promote mobile apps across Search, Play Store, YouTube, and Display Network.</p>
                    <p class="fw-bold mb-0">Best for: <span class="text-info">App installs, in-app actions</span></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 border-secondary">
                <div class="card-header bg-secondary text-white">
                    <h3 class="mb-0 fs-6">🚀 Performance Max</h3>
                </div>
                <div class="card-body">
                    <p class="small">AI-powered campaigns across all Google inventory from a single campaign.</p>
                    <p class="fw-bold mb-0">Best for: <span class="text-white">Full-funnel performance, scaling</span></p>
                </div>
            </div>
        </div>
    </div>
    
    <hr>
    
    <!-- ==================== SEARCH CAMPAIGNS DEEP DIVE ==================== -->
    <h3 class="fw-semibold mt-4">🔍 Search Campaigns: The Foundation of Google Ads</h3>
    
    <h4 class="fw-semibold mt-3">What Are Search Campaigns?</h4>
    <p>Search campaigns display text ads on Google Search Engine Results Pages (SERPs) when users actively search for keywords related to your business. These are the most common and often most profitable campaign type because they capture users with <strong>high purchase intent</strong>.</p>
    
    <h4 class="fw-semibold mt-3">Where Search Ads Appear</h4>
    <ul>
        <li><strong>Google Search Results:</strong> Above and below organic results (positions labeled "Ad")</li>
        <li><strong>Google Search Partners:</strong> Other search engines like Ask.com, and niche sites that use Google search</li>
        <li><strong>Google Shopping Tab:</strong> For Shopping campaigns (hybrid format)</li>
    </ul>
    
    <h4 class="fw-semibold mt-3">Key Features of Search Campaigns</h4>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="table-light">
                <tr>
                    <th>Feature</th>
                    <th>Description</th>
                    <th>Benefit</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Keyword Targeting</strong></td>
                    <td>Target specific search terms using match types (broad, phrase, exact)</td>
                    <td>High relevance, capture user intent</td>
                </tr>
                <tr>
                    <td><strong>Text Ads</strong></td>
                    <td>Headlines (3-5), descriptions (2-4), display path, final URL</td>
                    <td>Clear messaging, high CTR potential</td>
                </tr>
                <tr>
                    <td><strong>Ad Extensions</strong></td>
                    <td>Sitelinks, callouts, structured snippets, call extensions, location extensions</td>
                    <td>Increased real estate, higher CTR</td>
                </tr>
                <tr>
                    <td><strong>Ad Schedule</strong></td>
                    <td>Show ads only during specific days/times</td>
                    <td>Budget efficiency, target peak hours</td>
                </tr>
                <tr>
                    <td><strong>Location Targeting</strong></td>
                    <td>Target countries, cities, radius around specific points</td>
                    <td>Reach local customers, avoid waste</td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <h4 class="fw-semibold mt-3">When to Use Search Campaigns</h4>
    <ul>
        <li>✅ Users actively search for solutions like yours (high intent)</li>
        <li>✅ You want immediate results (hours, not weeks)</li>
        <li>✅ You have a local business and want "near me" traffic</li>
        <li>✅ You sell high-consideration products (people research before buying)</li>
        <li>✅ You have a B2B company targeting professionals via keywords</li>
    </ul>
    
    <div class="alert alert-primary mt-3">
        <strong>📊 Search Campaign Benchmarks (India):</strong> Average CTR: 3-5% | Average CPC: ₹20-₹150 | Average Conversion Rate: 2-5%
    </div>
    
    <hr>
    
    <!-- ==================== DISPLAY CAMPAIGNS DEEP DIVE ==================== -->
    <h3 class="fw-semibold mt-4">🖼️ Display Campaigns: Visual Advertising at Scale</h3>
    
    <h4 class="fw-semibold mt-3">What Are Display Campaigns?</h4>
    <p>Display campaigns show visual ads (images, responsive ads, GIFs) across the Google Display Network (GDN) – over 2 million websites, mobile apps, and Google properties like Gmail and YouTube. Unlike search ads that capture existing demand, display ads <strong>create demand</strong> by reaching users while they browse content.</p>
    
    <h4 class="fw-semibold mt-3">Google Display Network Statistics</h4>
    <div class="row g-3 mb-3">
        <div class="col-md-4">
            <div class="bg-light p-2 text-center rounded">
                <span class="fw-bold fs-4">2M+</span><br>
                <small>Websites in network</small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="bg-light p-2 text-center rounded">
                <span class="fw-bold fs-4">90%</span><br>
                <small>Global internet users reached</small>
            </div>
        </div>
        <div class="col-md-4">
            <div class="bg-light p-2 text-center rounded">
                <span class="fw-bold fs-4">650K+</span><br>
                <small>Mobile apps available</small>
            </div>
        </div>
    </div>
    
    <h4 class="fw-semibold mt-3">Display Ad Formats</h4>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="table-light">
                <tr>
                    <th>Format</th>
                    <th>Description</th>
                    <th>Best For</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Responsive Display Ads</strong></td>
                    <td>Automatically adapt to any ad space, upload images/logos/headlines</td>
                    <td>All goals – most effective format</td>
                </tr>
                <tr>
                    <td><strong>Uploaded Image Ads</strong></td>
                    <td>Custom JPG, PNG, or GIF images (300x250, 728x90, etc.)</td>
                    <td>Brand consistency, premium placements</td>
                </tr>
                <tr>
                    <td><strong>Gmail Ads</strong></td>
                    <td>Interactive ads in Gmail Promotions tab, expand to mini-webpage</td>
                    <td>Lead generation, newsletter signups</td>
                </tr>
                <tr>
                    <td><strong>Discovery Ads</strong></td>
                    <td>Native-style ads on YouTube Home feed, Gmail, Google Discover</td>
                    <td>Awareness and engagement</td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <h4 class="fw-semibold mt-3">Display Targeting Options</h4>
    <ul>
        <li><strong>Audience Targeting:</strong> Affinity audiences (long-term interests), In-Market audiences (active purchase intent), Custom audiences (keywords/URLs)</li>
        <li><strong>Content Targeting:</strong> Keywords (contextual), Topics (content categories), Placements (specific websites)</li>
        <li><strong>Remarketing:</strong> Target users who previously visited your website or YouTube channel</li>
    </ul>
    
    <div class="alert alert-success mt-3">
        <strong>💡 Pro Tip:</strong> Start with <strong>Responsive Display Ads</strong> – they automatically test thousands of combinations and typically outperform static image ads by 30-50%.
    </div>
    
    <hr>
    
    <!-- ==================== VIDEO CAMPAIGNS DEEP DIVE ==================== -->
    <h3 class="fw-semibold mt-4">📹 Video Campaigns: YouTube Advertising Mastery</h3>
    
    <h4 class="fw-semibold mt-3">What Are Video Campaigns?</h4>
    <p>Video campaigns display video ads on YouTube and across Google video partners. With over 2.5 billion monthly active users, YouTube is the world's second-largest search engine and most popular video platform. Video ads combine sight, sound, and motion for maximum engagement.</p>
    
    <h4 class="fw-semibold mt-3">YouTube Video Ad Formats</h4>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="table-light">
                <tr>
                    <th>Format</th>
                    <th>Length</th>
                    <th>Payment Model</th>
                    <th>Skippable?</th>
                    <th>Best For</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Skippable In-Stream</strong></td>
                    <td>Any (15-30s optimal)</td>
                    <td>CPV (pay after 30s or engagement)</td>
                    <td>Yes (after 5 sec)</td>
                    <td>Awareness, consideration, conversions</td>
                </tr>
                <tr>
                    <td><strong>Non-Skippable In-Stream</strong></td>
                    <td>6-15 seconds</td>
                    <td>CPM</td>
                    <td>No</td>
                    <td>Short, punchy brand messages</td>
                </tr>
                <tr>
                    <td><strong>Bumper Ads</strong></td>
                    <td>6 seconds</td>
                    <td>CPM</td>
                    <td>No</td>
                    <td>Quick reminders, sequential storytelling</td>
                </tr>
                <tr>
                    <td><strong>Discovery Ads</strong></td>
                    <td>Any</td>
                    <td>CPC (pay per click on thumbnail)</td>
                    <td>N/A (click to watch)</td>
                    <td>Lead generation, capturing active searchers</td>
                </tr>
                <tr>
                    <td><strong>YouTube Shorts Ads</strong></td>
                    <td>Up to 60 seconds</td>
                    <td>CPV or CPM</td>
                    <td>Yes</td>
                    <td>Gen Z reach, mobile-first content</td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <h4 class="fw-semibold mt-3">Video Ad Specifications</h4>
    <ul>
        <li><strong>Resolution:</strong> 1920x1080 (1080p) recommended, minimum 640x360</li>
        <li><strong>Aspect Ratio:</strong> 16:9 (horizontal) for in-stream, 9:16 for Shorts</li>
        <li><strong>File Size:</strong> Maximum 200MB, MP4 format with H.264 codec recommended</li>
        <li><strong>Captions:</strong> Strongly recommended (85% of mobile viewers watch without sound)</li>
    </ul>
    
    <h4 class="fw-semibold mt-3">YouTube Targeting Options</h4>
    <ul>
        <li><strong>Demographics:</strong> Age, gender, parental status, household income</li>
        <li><strong>Audiences:</strong> Affinity, In-Market, Custom Intent, Life Events</li>
        <li><strong>Keywords:</strong> Target YouTube search terms and video content</li>
        <li><strong>Placements:</strong> Specific YouTube channels or individual videos</li>
        <li><strong>Remarketing:</strong> Website visitors, YouTube viewers (by % watched), subscribers</li>
    </ul>
    
    <div class="alert alert-danger mt-3">
        <strong>⚠️ Critical Rule for Video Ads:</strong> Hook viewers in the first 5 seconds! If you don't capture attention immediately, viewers will skip and you pay nothing – but you also get no results. Use questions, bold statements, or visual hooks.
    </div>
    
    <hr>
    
    <!-- ==================== SHOPPING CAMPAIGNS DEEP DIVE ==================== -->
    <h3 class="fw-semibold mt-4">🛍️ Shopping Campaigns: E-Commerce Product Advertising</h3>
    
    <h4 class="fw-semibold mt-3">What Are Shopping Campaigns?</h4>
    <p>Shopping campaigns display product listing ads (PLAs) that show users product images, prices, ratings, and merchant names directly in Google Search results. Unlike text ads that use keywords, Shopping ads use your <strong>product feed</strong> (Merchant Center) to determine when and where to show your products.</p>
    
    <h4 class="fw-semibold mt-3">Requirements for Shopping Campaigns</h4>
    <ul>
        <li><strong>Google Merchant Center account:</strong> Upload your product feed (CSV, XML, Google Sheets)</li>
        <li><strong>Product Feed Optimization:</strong> High-quality images, accurate titles, GTIN/MPN, prices, availability</li>
        <li><strong>Website Requirements:</strong> Checkout page must be secure (HTTPS), clear return/refund policies</li>
        <li><strong>Tax & Shipping Settings:</strong> Configure in Merchant Center before launch</li>
    </ul>
    
    <h4 class="fw-semibold mt-3">Shopping Campaign Structure</h4>
    <ul>
        <li><strong>Standard Shopping:</strong> Manual control over product groups, bids, and priorities</li>
        <li><strong>Smart Shopping (Deprecated):</strong> Being replaced by Performance Max</li>
        <li><strong>Performance Max:</strong> AI-powered across all channels including Shopping</li>
    </ul>
    
    <h4 class="fw-semibold mt-3">Product Feed Optimization Tips</h4>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="table-light">
                <tr>
                    <th>Attribute</th>
                    <th>Best Practice</th>
                    <th>Impact</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Title</strong></td>
                    <td>Include brand + product type + key features + color/size</td>
                    <td>Primary factor for matching searches</td>
                </tr>
                <tr>
                    <td><strong>Image</strong></td>
                    <td>High resolution (800x800+), white background, no watermarks</td>
                    <td>CTR increases 30-40% with quality images</td>
                </tr>
                <tr>
                    <td><strong>Description</strong></td>
                    <td>500-1000 characters, include keywords naturally</td>
                    <td>Improves relevance and Quality Score</td>
                </tr>
                <tr>
                    <td><strong>GTIN/MPN</strong></td>
                    <td>Always include if available (required for many categories)</td>
                    <td>Improves eligibility and matching</td>
                </tr>
                <tr>
                    <td><strong>Availability</strong></td>
                    <td>Keep accurate (in_stock, out_of_stock, preorder)</td>
                    <td>Prevents customer frustration, improves trust</td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <div class="alert alert-warning mt-3">
        <strong>🔸 Important:</strong> Shopping campaigns typically have 10-30% lower CPC than text search ads for the same keywords, with similar or higher conversion rates for e-commerce.
    </div>
    
    <hr>
    
    <!-- ==================== APP CAMPAIGNS DEEP DIVE ==================== -->
    <h3 class="fw-semibold mt-4">📱 App Campaigns: Mobile App Promotion</h3>
    
    <h4 class="fw-semibold mt-3">What Are App Campaigns?</h4>
    <p>App campaigns are designed specifically to promote mobile apps across Google's entire network – Search, Play Store, YouTube, Display, and Discover. Google uses machine learning to optimize for your specified goal (installs or in-app actions).</p>
    
    <h4 class="fw-semibold mt-3">App Campaign Goals</h4>
    <ul>
        <li><strong>App Installs:</strong> Maximize number of downloads at target CPI (Cost Per Install)</li>
        <li><strong>In-App Actions:</strong> Optimize for specific events (purchases, level completions, signups)</li>
        <li><strong>App Engagement:</strong> Re-engage existing users (requires Firebase SDK)</li>
    </ul>
    
    <h4 class="fw-semibold mt-3">Assets You Need to Provide</h4>
    <ul>
        <li><strong>Text Assets:</strong> 4-5 headlines (max 30 chars), 5 descriptions (max 90 chars)</li>
        <li><strong>Image Assets:</strong> Landscape (1200x628), Square (1200x1200), Portrait (recommended)</li>
        <li><strong>Video Assets:</strong> YouTube video URL or uploaded MP4 (10-30 seconds)</li>
        <li><strong>HTML5 Assets:</strong> For interactive display ads</li>
    </ul>
    
    <h4 class="fw-semibold mt-3">Tracking Requirements</h4>
    <ul>
        <li><strong>Firebase SDK:</strong> Required for iOS and Android to track in-app actions</li>
        <li><strong>Google Play / App Store:</strong> App must be published and live</li>
        <li><strong>Conversion Tracking:</strong> Set up install and in-app event tracking</li>
    </ul>
    
    <hr>
    
    <!-- ==================== PERFORMANCE MAX DEEP DIVE ==================== -->
    <h3 class="fw-semibold mt-4">🚀 Performance Max: The Future of Google Ads</h3>
    
    <h4 class="fw-semibold mt-3">What Is Performance Max (PMax)?</h4>
    <p>Performance Max is Google's AI-powered campaign type that allows advertisers to access all Google Ads inventory from a single campaign. It uses real-time signals and machine learning to optimize performance across Search, Display, YouTube, Gmail, Discover, and Maps.</p>
    
    <h4 class="fw-semibold mt-3">Where PMax Ads Appear</h4>
    <ul>
        <li>🔍 Google Search (text and Shopping listings)</li>
        <li>🖼️ Google Display Network (responsive display ads)</li>
        <li>📹 YouTube (in-stream, in-feed, Shorts)</li>
        <li>📧 Gmail (Promotions tab ads)</li>
        <li>📱 Google Discover (mobile feed)</li>
        <li>🗺️ Google Maps (local inventory ads)</li>
    </ul>
    
    <h4 class="fw-semibold mt-3">When to Use Performance Max</h4>
    <div class="row">
        <div class="col-md-6">
            <div class="card border-success mb-3">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0 fs-6">✅ Best For</h5>
                </div>
                <div class="card-body">
                    <ul class="mb-0">
                        <li>Advertisers with specific conversion goals (sales, leads)</li>
                        <li>E-commerce stores with product feeds</li>
                        <li>Businesses wanting to scale across multiple channels</li>
                        <li>Campaigns with sufficient conversion data (30+ conversions/month)</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card border-warning mb-3">
                <div class="card-header bg-warning text-dark">
                    <h5 class="mb-0 fs-6">⚠️ Not Ideal For</h5>
                </div>
                <div class="card-body">
                    <ul class="mb-0">
                        <li>Brand new accounts with zero conversion history</li>
                        <li>Advertisers needing granular control over placements</li>
                        <li>Campaigns with very limited budgets (under ₹10,000/month)</li>
                        <li>Highly specific keyword-only targeting requirements</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
    <hr class="border border-dark border-5">
    @include('frontend.service.partials.in-article-ads')
    <!-- ==================== SECTION 4: Smart Campaigns vs Manual ==================== -->
    <div class="section" id="topic-4">
        <h2 class="fw-bold mb-4">4 Smart Campaigns vs Manual Campaigns: Which Should You Choose?</h2>
        
        <div class="alert alert-light border mb-4">
            <strong>📌 Core Concept:</strong> Google Ads offers two primary campaign management approaches. Smart Campaigns use automation for beginners, while Manual Campaigns provide full control for experienced advertisers. Understanding the trade-offs helps you choose the right approach for your skill level and goals.
        </div>
        
        <div class="row">
            <div class="col-md-6">
                <div class="card h-100 border-primary">
                    <div class="card-header bg-primary text-white">
                        <h3 class="mb-0 fs-5">🤖 Smart Campaigns (Simplified)</h3>
                    </div>
                    <div class="card-body">
                        <h4 class="fw-semibold mt-2 fs-6">What Are Smart Campaigns?</h4>
                        <p>Smart Campaigns are Google's simplified, automated campaign type designed for small businesses and beginners. Google's AI handles targeting, bidding, and ad placement based on your business goals.</p>
                        
                        <h4 class="fw-semibold mt-3 fs-6">Key Features</h4>
                        <ul>
                            <li>✅ Automated targeting based on your business category</li>
                            <li>✅ Simplified setup (5-10 minutes)</li>
                            <li>✅ Google AI optimizes bids and placements</li>
                            <li>✅ Basic reporting and recommendations</li>
                            <li>✅ Limited to Search and Display networks</li>
                        </ul>
                        
                        <h4 class="fw-semibold mt-3 fs-6">Best For</h4>
                        <ul>
                            <li>Small businesses with limited ad experience</li>
                            <li>Businesses wanting "set and forget" advertising</li>
                            <li>Local businesses targeting nearby customers</li>
                            <li>Monthly budgets under ₹30,000</li>
                        </ul>
                        
                        <div class="alert alert-warning mt-3 small">
                            <strong>⚠️ Limitations:</strong> No keyword-level control, limited negative keywords, no placement exclusions, restricted ad extensions.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100 border-success">
                    <div class="card-header bg-success text-white">
                        <h3 class="mb-0 fs-5">🛠️ Manual Campaigns (Expert Mode)</h3>
                    </div>
                    <div class="card-body">
                        <h4 class="fw-semibold mt-2 fs-6">What Are Manual Campaigns?</h4>
                        <p>Manual Campaigns (also called "Expert Mode") give you complete control over every aspect of your Google Ads campaigns – keywords, bids, targeting, placements, ad copy, and extensions.</p>
                        
                        <h4 class="fw-semibold mt-3 fs-6">Key Features</h4>
                        <ul>
                            <li>✅ Full control over keyword match types and bids</li>
                            <li>✅ Advanced targeting (audiences, placements, topics, demographics)</li>
                            <li>✅ All ad formats (Responsive, Expanded Text, Call-only, Dynamic)</li>
                            <li>✅ All ad extensions (sitelinks, callouts, structured snippets, price)</li>
                            <li>✅ Advanced bidding strategies (Target CPA, Target ROAS, Manual CPC)</li>
                            <li>✅ Detailed reporting and search term analysis</li>
                        </ul>
                        
                        <h4 class="fw-semibold mt-3 fs-6">Best For</h4>
                        <ul>
                            <li>Experienced PPC managers and agencies</li>
                            <li>Businesses with specific targeting requirements</li>
                            <li>Campaigns requiring granular optimization</li>
                            <li>Any budget size, especially larger budgets</li>
                        </ul>
                        
                        <div class="alert alert-info mt-3 small">
                            <strong>💡 Recommendation:</strong> Start with Smart Campaigns to collect data, then transition to Manual campaigns for better control and performance.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Comparison Table -->
        <h3 class="fw-semibold mt-4">📊 Smart vs Manual Campaigns: Complete Comparison</h3>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>Feature</th>
                        <th>Smart Campaigns</th>
                        <th>Manual Campaigns</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Setup Time</strong></td>
                        <td>5-10 minutes</td>
                        <td>30-60 minutes</td>
                    </tr>
                    <tr>
                        <td><strong>Keyword Control</strong></td>
                        <td>Automated (Google chooses)</td>
                        <td>Full control with match types</td>
                    </tr>
                    <tr>
                        <td><strong>Negative Keywords</strong></td>
                        <td>Limited</td>
                        <td>Full control at account/campaign/ad group level</td>
                    </tr>
                    <tr>
                        <td><strong>Ad Extensions</strong></td>
                        <td>Basic only</td>
                        <td>All extensions (sitelinks, callouts, structured snippets, etc.)</td>
                    </tr>
                    <tr>
                        <td><strong>Bidding Strategies</strong></td>
                        <td>Limited automated options</td>
                        <td>All strategies (Manual CPC, Target CPA, Target ROAS, Maximize Conversions)</td>
                    </tr>
                    <tr>
                        <td><strong>Placement Control</strong></td>
                        <td>None</td>
                        <td>Full control (include/exclude specific websites)</td>
                    </tr>
                    <tr>
                        <td><strong>Audience Targeting</strong></td>
                        <td>Basic demographics</td>
                        <td>Advanced (affinity, in-market, custom, remarketing)</td>
                    </tr>
                    <tr>
                        <td><strong>Reporting Detail</strong></td>
                        <td>Basic metrics</td>
                        <td>All metrics with custom columns and segments</td>
                    </tr>
                    <tr>
                        <td><strong>Search Term Analysis</strong></td>
                        <td>Limited</td>
                        <td>Full search terms report with negative keyword addition</td>
                    </tr>
                    <tr>
                        <td><strong>Best For</strong></td>
                        <td>Beginners, small budgets</td>
                        <td>Experienced advertisers, all budgets</td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <div class="alert alert-success mt-3">
            💡 <strong>Pro Tip:</strong> Start with a Smart Campaign to understand what works, then use the "Switch to Expert Mode" option to convert to Manual and refine your strategy with data.
        </div>
    </div>
    
    <hr class="border border-dark border-2 my-5">
    @include('frontend.service.partials.in-article-ads')
    <!-- ==================== SECTION 5: Choosing the Right Campaign Type ==================== -->
    <div class="section" id="topic-5">
        <h2 class="fw-bold mb-4">5 Choosing the Right Campaign Type for Your Business Goals</h2>
        
        <div class="alert alert-light border mb-4">
            <strong>📌 Core Concept:</strong> Selecting the wrong campaign type is one of the most common and costly mistakes in Google Ads. Each campaign type serves a different purpose in the marketing funnel. This decision matrix helps you match campaign types to your specific business objectives.
        </div>
        
        <h3 class="fw-semibold mt-4">🎯 Campaign Selection by Marketing Funnel Stage</h3>
        
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>Funnel Stage</th>
                        <th>Goal</th>
                        <th>Recommended Campaign Type</th>
                        <th>Example KPIs</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Top of Funnel (Awareness)</strong></td>
                        <td>Introduce brand, reach new audiences</td>
                        <td>Display, Video (Skippable In-Stream), YouTube Shorts</td>
                        <td>Impressions, Reach, CPM, View Rate</td>
                    </tr>
                    <tr>
                        <td><strong>Middle of Funnel (Consideration)</strong></td>
                        <td>Educate users, build trust, drive traffic</td>
                        <td>Search (Information keywords), Discovery Ads, Remarketing</td>
                        <td>CTR, CPC, Pages/Session, Time on Site</td>
                    </tr>
                    <tr>
                        <td><strong>Bottom of Funnel (Conversion)</strong></td>
                        <td>Drive purchases, leads, signups</td>
                        <td>Search (Transactional keywords), Shopping, Performance Max</td>
                        <td>Conversion Rate, CPA, ROAS, Revenue</td>
                    </tr>
                    </tr>
                        <td><strong>Full Funnel</strong></td>
                        <td>Cover all stages in one campaign</td>
                        <td>Performance Max</td>
                        <td>Combined metrics across all stages</td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <h3 class="fw-semibold mt-4">🏢 Campaign Selection by Business Type</h3>
        <div class="row g-4">
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0 fs-6">🛍️ E-commerce / Retail</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Primary Goal:</strong> Drive product sales</p>
                        <p><strong>Recommended Campaigns (in priority order):</strong></p>
                        <ol>
                            <li><strong>Shopping Campaigns</strong> – Product images and prices drive purchases</li>
                            <li><strong>Search Campaigns</strong> – Target product-specific keywords</li>
                            <li><strong>Performance Max</strong> – Scale across all channels</li>
                            <li><strong>Remarketing</strong> – Convert cart abandoners and past visitors</li>
                        </ol>
                        <div class="alert alert-info small mt-2 mb-0">
                            💡 <strong>Budget Allocation:</strong> 50% Shopping, 30% Search, 20% Remarketing
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-header bg-success text-white">
                        <h4 class="mb-0 fs-6">🏫 Local Business / Schools</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Primary Goal:</strong> Generate leads (calls, form fills, visits)</p>
                        <p><strong>Recommended Campaigns (in priority order):</strong></p>
                        <ol>
                            <li><strong>Search Campaigns</strong> – Target local intent keywords with location extensions</li>
                            <li><strong>Call-Only Campaigns</strong> – Drive phone calls directly</li>
                            <li><strong>Display Campaigns</strong> – Build awareness in local area</li>
                            <li><strong>YouTube Campaigns</strong> – Showcase facilities and testimonials</li>
                        </ol>
                        <div class="alert alert-info small mt-2 mb-0">
                            💡 <strong>Budget Allocation:</strong> 60% Search, 20% Display, 20% Video
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-header bg-info text-white">
                        <h4 class="mb-0 fs-6">💼 B2B / Professional Services</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Primary Goal:</strong> Generate qualified leads and demos</p>
                        <p><strong>Recommended Campaigns (in priority order):</strong></p>
                        <ol>
                            <li><strong>Search Campaigns</strong> – Target problem/solution keywords</li>
                            <li><strong>Display Remarketing</strong> – Nurture website visitors</li>
                            <li><strong>YouTube Discovery Ads</strong> – Educational content targeting</li>
                            <li><strong>Performance Max</strong> – Scale proven audiences</li>
                        </ol>
                        <div class="alert alert-info small mt-2 mb-0">
                            💡 <strong>Budget Allocation:</strong> 50% Search, 30% Remarketing, 20% Video
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card h-100">
                    <div class="card-header bg-warning text-dark">
                        <h4 class="mb-0 fs-6">📱 Mobile App</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Primary Goal:</strong> Drive app installs and in-app actions</p>
                        <p><strong>Recommended Campaigns (in priority order):</strong></p>
                        <ol>
                            <li><strong>App Campaigns</strong> – Optimized across all Google properties</li>
                            <li><strong>YouTube Video Campaigns</strong> – Showcase app features</li>
                            <li><strong>Display Campaigns</strong> – Reach users across websites and apps</li>
                            <li><strong>Search Campaigns</strong> – Target app-specific keywords</li>
                        </ol>
                        <div class="alert alert-info small mt-2 mb-0">
                            💡 <strong>Budget Allocation:</strong> 70% App Campaigns, 20% Video, 10% Search
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <h3 class="fw-semibold mt-4">📊 Campaign Type Decision Flowchart</h3>
        <pre class="bg-dark text-white p-4 rounded">
┌─────────────────────────────────────────────────────────────────┐
│                    CAMPAIGN TYPE DECISION TREE                  │
├─────────────────────────────────────────────────────────────────┤
│                                                                 │
│   START: What is your primary goal?                             │
│                                                                 │
│   ├── SELL PRODUCTS ONLINE                                      │
│   │   ├── Have product feed? ──Yes──► SHOPPING CAMPAIGN         │
│   │   └── No product feed? ─────────► SEARCH CAMPAIGN           │
│   │                                                             │
│   ├── GET LEADS/CALLS (Local Business)                          │
│   │   ├── Want phone calls only? ────► CALL-ONLY CAMPAIGN       │
│   │   └── Want form fills + calls? ──► SEARCH CAMPAIGN          │
│   │                                                             │
│   ├── BUILD BRAND AWARENESS                                     │
│   │   ├── Want video engagement? ────► VIDEO CAMPAIGN           │
│   │   └── Want mass reach? ──────────► DISPLAY CAMPAIGN         │
│   │                                                             │
│   ├── PROMOTE MOBILE APP                                        │
│   │   └── ───────────────────────────► APP CAMPAIGN             │
│   │                                                             │
│   └── MAXIMIZE EVERYTHING (Advanced)                            │
│       └──────────────────────────────► PERFORMANCE MAX          │
│                                                                 │
└─────────────────────────────────────────────────────────────────┘
        </pre>
    </div>
    
    <hr class="border border-dark border-2 my-5">
    @include('frontend.service.partials.in-article-ads')
    <!-- ==================== SECTION 6: Campaign Goals & Optimization Settings ==================== -->
    <div class="section" id="topic-6">
        <h2 class="fw-bold mb-4">6 Campaign Goals & Optimization Settings</h2>
        
        <div class="alert alert-light border mb-4">
            <strong>📌 Core Concept:</strong> Properly configured campaign settings determine where, when, and to whom your ads appear. Getting these settings right is essential for budget efficiency and campaign success.
        </div>
        
        <h3 class="fw-semibold mt-4">🎯 Step 1: Select Your Campaign Goal</h3>
        <p>When creating a campaign, Google asks you to select a primary goal. This guides Google's AI optimization:</p>
        
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="table-light">
                    <tr>
                        <th>Goal</th>
                        <th>Best For</th>
                        <th>Optimization Target</th>
                        <th>Recommended Campaign Types</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Sales</strong></td>
                        <td>E-commerce, product sales</td>
                        <td>Conversions, ROAS</td>
                        <td>Shopping, Search, Performance Max</td>
                    </tr>
                    <tr>
                        <td><strong>Leads</strong></td>
                        <td>Service businesses, B2B, schools</td>
                        <td>Conversions (form fills, calls)</td>
                        <td>Search, Display, Call-Only</td>
                    </tr>
                    <tr>
                        <td><strong>Website Traffic</strong></td>
                        <td>Content sites, blogs, news</td>
                        <td>Clicks, CTR</td>
                        <td>Search, Display, Discovery</td>
                    </tr>
                    <tr>
                        <td><strong>Brand Awareness</strong></td>
                        <td>New product launch, brand building</td>
                        <td>Impressions, Reach, CPM</td>
                        <td>Display, Video, YouTube Shorts</td>
                    </tr>
                    <tr>
                        <td><strong>App Promotion</strong></td>
                        <td>Mobile apps</td>
                        <td>App installs, In-app actions</td>
                        <td>App Campaigns</td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <h3 class="fw-semibold mt-4">⚙️ Step 2: Configure Optimization Settings</h3>
        
        <h4 class="fw-semibold mt-3">Location Targeting (Critical for Local Businesses)</h4>
        <p>Choose where your ads will show:</p>
        <ul>
            <li><strong>Countries/Regions:</strong> Select specific countries (e.g., India, USA)</li>
            <li><strong>States/Cities:</strong> Target specific states or metropolitan areas</li>
            <li><strong>Radius Targeting:</strong> Show ads within X kilometers of your business address</li>
            <li><strong>Location Options (Critical!):</strong>
                <ul>
                    <li><strong>Presence:</strong> People physically in your targeted location → <span class="badge bg-success">Recommended</span></li>
                    <li><strong>Interest:</strong> People interested in your location (wider reach)</li>
                    <li><strong>Presence or interest:</strong> Both groups (broadest, may waste budget)</li>
                </ul>
            </li>
        </ul>
        
        <h4 class="fw-semibold mt-3">Language Targeting</h4>
        <p>Select the languages your customers speak. Google shows your ads to users whose browser/device language matches your selection.</p>
        <ul>
            <li><strong>For most campaigns:</strong> Start with "All languages"</li>
            <li><strong>For local campaigns:</strong> Add local languages (Hindi, Tamil, Bengali, etc.)</li>
            <li><strong>For international campaigns:</strong> Create separate campaigns per language</li>
        </ul>
        
        <h4 class="fw-semibold mt-3">Ad Scheduling (Dayparting)</h4>
        <p>Choose specific days and times to run your ads. This prevents wasted spend during non-business hours.</p>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="table-light">
                    <tr>
                        <th>Business Type</th>
                        <th>Recommended Schedule</th>
                        <th>Bid Adjustment</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Local Business (School, Plumber)</strong></td>
                        <td>Mon-Sat, 9 AM - 8 PM</td>
                        <td>+20% during peak, -50% off-hours</td>
                    </tr>
                    <tr>
                        <td><strong>E-commerce</strong></td>
                        <td>Daily, 10 AM - 11 PM</td>
                        <td>+30% evenings, -30% early mornings</td>
                    </tr>
                    <tr>
                        <td><strong>B2B Services</strong></td>
                        <td>Mon-Fri, 9 AM - 6 PM</td>
                        <td>+15% business hours, -80% weekends</td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <h4 class="fw-semibold mt-3">Device Targeting & Bid Adjustments</h4>
        <p>Control bids for different devices based on performance:</p>
        <ul>
            <li><strong>Mobile:</strong> Usually has highest conversion rate for local businesses → increase bids +10-30%</li>
            <li><strong>Desktop:</strong> Better for B2B and complex forms → test with +0-20%</li>
            <li><strong>Tablet:</strong> Often lowest volume → consider -20-30% unless data shows otherwise</li>
        </ul>
        
        <h3 class="fw-semibold mt-4">🎯 Step 3: Audience Targeting (Optional but Powerful)</h3>
        <p>Layer audience targeting on top of your keywords to reach specific user segments:</p>
        <ul>
            <li><strong>Observation Mode:</strong> Collect data without limiting reach – use for testing</li>
            <li><strong>Targeting Mode:</strong> Only show ads to users in selected audiences – use for precision</li>
            <li><strong>Audience Types:</strong>
                <ul>
                    <li>Demographics (age, gender, income, parental status)</li>
                    <li>Affinity Audiences (long-term interests like "Fitness Enthusiasts")</li>
                    <li>In-Market Audiences (active purchase intent like "Buying a car")</li>
                    <li>Custom Audiences (keywords, URLs, apps your audience uses)</li>
                    <li>Remarketing (past website or YouTube visitors)</li>
                </ul>
            </li>
        </ul>
        
        <h3 class="fw-semibold mt-4">📈 Step 4: Conversion Tracking Setup</h3>
        <div class="alert alert-warning">
            <strong>⚠️ Critical:</strong> Set up conversion tracking BEFORE launching campaigns. Without it, you cannot optimize for results.
        </div>
        
        <h4 class="fw-semibold mt-3">Types of Conversions to Track</h4>
        <ul>
            <li><strong>Website Actions:</strong> Purchases, form submissions, newsletter signups</li>
            <li><strong>Phone Calls:</strong> Calls from your website or call extensions</li>
            <li><strong>App Installs:</strong> Downloads from Play Store or App Store</li>
            <li><strong>Local Actions:</strong> Store visits, directions requests</li>
            <li><strong>Offline Conversions:</strong> Import sales data from CRM</li>
        </ul>
        
        <h4 class="fw-semibold mt-3">How to Set Up Conversion Tracking</h4>
        <ol>
            <li>Go to <strong>Tools & Settings → Conversions</strong></li>
            <li>Click <strong>"+ New Conversion Action"</strong></li>
            <li>Select conversion type (Website, App, Phone calls, Import)</li>
            <li>Enter your conversion details and value (if e-commerce)</li>
            <li>Install the Google Ads tag via Google Tag Manager or directly</li>
            <li>Test that conversions are recording</li>
        </ol>
        
        <div class="alert alert-success mt-3">
            💡 <strong>Pro Tip:</strong> Set up conversion value tracking for e-commerce. This enables Target ROAS bidding, which is more profitable than Target CPA for stores with varying product prices.
        </div>
    </div>
    
    <hr class="border border-dark border-2 my-5">
    @include('frontend.service.partials.in-article-ads')
    <!-- ============================================ -->
<!-- SECTION 7: Location, Language & Audience Targeting Basics (H2) -->
<!-- ============================================ -->
<div class="section" id="topic-7">
    <h2 class="fw-bold mb-4">7 Location, Language & Audience Targeting Basics</h2>
    
    <div class="alert alert-light border mb-4">
        <strong>📌 Core Concept:</strong> Targeting determines who sees your ads. Poor targeting is the #1 cause of wasted ad spend. This section covers the three fundamental targeting layers: Location (WHERE), Language (WHAT LANGUAGE), and Audience (WHO) – and how to combine them for maximum efficiency.
    </div>
    
    <!-- ==================== PART 1: LOCATION TARGETING ==================== -->
    <h3 class="fw-semibold mt-4">📍 Location Targeting: Reaching the Right Geographic Area</h3>
    
    <h4 class="fw-semibold mt-3">What Is Location Targeting?</h4>
    <p>Location targeting allows you to choose specific geographic locations where your ads will appear. This is critical for local businesses and prevents wasted spend on users outside your service area.</p>
    
    <h4 class="fw-semibold mt-3">Types of Location Targeting</h4>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="table-light">
                <tr>
                    <th>Targeting Type</th>
                    <th>Description</th>
                    <th>Best For</th>
                    <th>Example</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Countries/Regions</strong></td>
                    <td>Target entire countries or regions</td>
                    <td>National businesses, e-commerce stores</td>
                    <td>India, USA, United Kingdom</td>
                </tr>
                <tr>
                    <td><strong>States/Provinces</strong></td>
                    <td>Target specific states within a country</td>
                    <td>Regional businesses</td>
                    <td>Maharashtra, California, Ontario</td>
                </tr>
                <tr>
                    <td><strong>Cities/Metro Areas</strong></td>
                    <td>Target specific cities or metropolitan areas</td>
                    <td>Local businesses, service area businesses</td>
                    <td>Mumbai, Delhi, Bangalore, Chennai</td>
                </tr>
                <tr>
                    <td><strong>Postal Codes (PIN Codes)</strong></td>
                    <td>Target specific postal or zip codes</td>
                    <td>Hyper-local targeting, delivery zones</td>
                    <td>400001, 110001, 560001</td>
                </tr>
                <tr>
                    <td><strong>Radius Targeting</strong></td>
                    <td>Target area within X km/miles of a point</td>
                    <td>Local businesses, stores, events</td>
                    <td>10 km around R P Mission School, Sitamarhi</td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <h4 class="fw-semibold mt-3">Location Options (Critical Setting!)</h4>
    <p>This is one of the most misunderstood and costly settings in Google Ads. Choose carefully:</p>
    
    <div class="row g-4 mb-4">
        <div class="col-md-4">
            <div class="card h-100 border-success">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0 fs-6">✅ Presence (Recommended)</h5>
                </div>
                <div class="card-body">
                    <p class="small">Target people who are <strong>physically located</strong> in your targeted location.</p>
                    <p class="small mb-0"><strong>Use for:</strong> Most local businesses, service area businesses, retail stores</p>
                    <p class="small text-muted mt-2">Example: A plumber in Mumbai only wants customers in Mumbai, not people searching from Delhi who are "interested" in Mumbai.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 border-warning">
                <div class="card-header bg-warning text-dark">
                    <h5 class="mb-0 fs-6">📍 Interest (Wider Reach)</h5>
                </div>
                <div class="card-body">
                    <p class="small">Target people who <strong>show interest</strong> in your location (searches about, reading about).</p>
                    <p class="small mb-0"><strong>Use for:</strong> Travel businesses, vacation rentals, real estate (people looking to move)</p>
                    <p class="small text-muted mt-2">Example: Someone in Delhi searching for "flats in Mumbai" sees Mumbai property ads.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 border-danger">
                <div class="card-header bg-danger text-white">
                    <h5 class="mb-0 fs-6">🌍 Presence or Interest (Default - Use with Caution!)</h5>
                </div>
                <div class="card-body">
                    <p class="small">Target both people physically present AND those interested in the location.</p>
                    <p class="small mb-0"><strong>Use for:</strong> National brands, travel destinations, rarely for local businesses</p>
                    <p class="small text-warning mt-2">⚠️ Warning: This is the default setting and often wastes budget for local businesses!</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="alert alert-danger">
        <strong>⚠️ Critical Warning:</strong> Google Ads defaults to "Presence or Interest" targeting. For local businesses, this means your ads may show to people across the country who are merely "interested" in your city – not potential customers. <strong>Always check and change this setting to "Presence" for local campaigns.</strong>
    </div>
    
    <h4 class="fw-semibold mt-3">Location Bid Adjustments</h4>
    <p>Increase or decrease bids for specific locations based on performance:</p>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="table-light">
                <tr>
                    <th>Location Performance</th>
                    <th>Bid Adjustment</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>High conversion rate, low CPA</td>
                    <td><strong class="text-success">+20% to +50%</strong></td>
                    <td>Increase bids to capture more traffic</td>
                </tr>
                <tr>
                    <td>Average conversion rate</td>
                    <td><strong class="text-info">0% to +10%</strong></td>
                    <td>Maintain current bids</td>
                </tr>
                <tr>
                    <td>Low conversion rate, high CPA</td>
                    <td><strong class="text-danger">-20% to -50%</strong></td>
                    <td>Reduce bids or exclude location</td>
                </tr>
                <tr>
                    <td>No conversions after ₹1,000 spend</td>
                    <td><strong class="text-danger">Exclude</strong></td>
                    <td>Remove location from targeting entirely</td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <hr>
    
    <!-- ==================== PART 2: LANGUAGE TARGETING ==================== -->
    <h3 class="fw-semibold mt-4">🌐 Language Targeting: Speaking Your Customer's Language</h3>
    
    <h4 class="fw-semibold mt-3">What Is Language Targeting?</h4>
    <p>Language targeting determines which language versions of Google your ads appear on. Google detects the user's browser/device language setting, not the language of their search query.</p>
    
    <h4 class="fw-semibold mt-3">How Language Targeting Works</h4>
    <ul>
        <li><strong>Google detects:</strong> User's browser language, device language, and Google interface language</li>
        <li><strong>NOT based on:</strong> The actual words typed in search (a Hindi speaker can search in English)</li>
        <li><strong>Best practice:</strong> Select ALL languages your customers speak, then let keywords determine relevance</li>
    </ul>
    
    <h4 class="fw-semibold mt-3">Language Targeting Best Practices by Region</h4>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="table-light">
                <tr>
                    <th>Target Region</th>
                    <th>Recommended Languages</th>
                    <th>Why</th>
                </td>
            </thead>
            <tbody>
                <tr>
                    <td><strong>India (National)</strong></td>
                    <td>English, Hindi</td>
                    <td>Most Indians use English for searches; Hindi covers vernacular users</td>
                </tr>
                <tr>
                    <td><strong>India (South)</strong></td>
                    <td>English, Hindi, Tamil, Telugu, Kannada, Malayalam</td>
                    <td>Regional language targeting for better reach</td>
                </tr>
                <tr>
                    <td><strong>North America</strong></td>
                    <td>English, French (Canada), Spanish (USA)</td>
                    <td>Bilingual coverage for diverse populations</td>
                </tr>
                <tr>
                    <td><strong>Europe</strong></td>
                    <td>English + local languages (German, French, Spanish, Italian, etc.)</td>
                    <td>Create separate campaigns per language for best results</td>
                </tr>
                <tr>
                    <td><strong>Middle East</strong></td>
                    <td>English, Arabic</td>
                    <td>Both languages widely used</td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <div class="alert alert-info mt-3">
        <strong>💡 Pro Tip:</strong> Don't over-restrict language targeting. Select ALL languages your target audience might use, then use negative keywords to exclude irrelevant terms. A user with Hindi browser settings can still search for "best school in Sitamarhi" in English.
    </div>
    
    <hr>
    
    <!-- ==================== PART 3: AUDIENCE TARGETING ==================== -->
    <h3 class="fw-semibold mt-4">👥 Audience Targeting: Reaching the Right People</h3>
    
    <h4 class="fw-semibold mt-3">What Is Audience Targeting?</h4>
    <p>Audience targeting allows you to reach specific groups of users based on their demographics, interests, behaviors, and past interactions with your brand. This works alongside keyword targeting (Search) or as primary targeting (Display/Video).</p>
    
    <h4 class="fw-semibold mt-3">Types of Audience Targeting</h4>
    
    <h5 class="fw-semibold mt-3 fs-6">1. Demographics Targeting</h5>
    <p>Target users based on who they are:</p>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="table-light">
                <tr>
                    <th>Demographic</th>
                    <th>Options</th>
                    <th>Best For</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Age</strong></td>
                    <td>18-24, 25-34, 35-44, 45-54, 55-64, 65+</td>
                    <td>Products/services targeting specific age groups</td>
                </tr>
                <tr>
                    <td><strong>Gender</strong></td>
                    <td>Male, Female, Unknown</td>
                    <td>Gender-specific products (cosmetics, razors, etc.)</td>
                </tr>
                <tr>
                    <td><strong>Parental Status</strong></td>
                    <td>Parent, Not a parent</td>
                    <td>Baby products, schools, family services</td>
                </tr>
                <tr>
                    <td><strong>Household Income</strong></td>
                    <td>Top 10%, 11-20%, 21-30%, 31-40%, 41-50%, Bottom 50%</td>
                    <td>Luxury products, premium services</td>
                </tr>
                <tr>
                    <td><strong>Education</strong></td>
                    <td>In college, College graduate, Some college, etc.</td>
                    <td>Educational institutions, professional services</td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <h5 class="fw-semibold mt-4 fs-6">2. Affinity Audiences (Long-term Interests)</h5>
    <p>Target users with passionate, long-term interests in specific topics:</p>
    <div class="row g-3 mb-3">
        <div class="col-md-4">
            <ul class="small">
                <li>Fitness Buffs & Health Nuts</li>
                <li>Foodies & Home Chefs</li>
                <li>Tech Enthusiasts</li>
                <li>Frequent Travelers</li>
                <li>Gamers</li>
            </ul>
        </div>
        <div class="col-md-4">
            <ul class="small">
                <li>Business Professionals</li>
                <li>Home & Garden Enthusiasts</li>
                <li>Auto Enthusiasts</li>
                <li>Fashionistas & Trendsetters</li>
                <li>Movie Lovers</li>
            </ul>
        </div>
        <div class="col-md-4">
            <ul class="small">
                <li>Sports Fans</li>
                <li>Music Lovers</li>
                <li>Pet Lovers</li>
                <li>DIY & Home Improvement</li>
                <li>Green Living Enthusiasts</li>
            </ul>
        </div>
    </div>
    <p><strong>Best for:</strong> Top-of-funnel brand awareness, reaching new audiences who don't know your product yet.</p>
    
    <h5 class="fw-semibold mt-4 fs-6">3. In-Market Audiences (Purchase Intent)</h5>
    <p>Target users actively researching and showing strong purchase intent:</p>
    <div class="row g-3 mb-3">
        <div class="col-md-4">
            <ul class="small">
                <li>Running Shoes & Apparel</li>
                <li>Laptops & Computers</li>
                <li>New Vehicles</li>
                <li>Real Estate (Buying)</li>
            </ul>
        </div>
        <div class="col-md-4">
            <ul class="small">
                <li>Credit Cards</li>
                <li>Investment & Trading</li>
                <li>Health Insurance</li>
                <li>Vacation Packages</li>
            </ul>
        </div>
        <div class="col-md-4">
            <ul class="small">
                <li>Home Improvement Services</li>
                <li>Education & Training</li>
                <li>Baby & Children's Products</li>
                <li>Wedding & Event Planning</li>
            </ul>
        </div>
    </div>
    <p><strong>Best for:</strong> Bottom-of-funnel conversions – highest converting non-remarketing audience.</p>
    
    <h5 class="fw-semibold mt-4 fs-6">4. Custom Audiences (Your Own Segments)</h5>
    <p>Build audiences based on your specific criteria:</p>
    <ul>
        <li><strong>Custom Intent:</strong> Keywords + URLs + apps your ideal customer engages with – Highest intent</li>
        <li><strong>Custom Affinity:</strong> Keywords + URLs + apps for broader interest-based targeting</li>
        <li><strong>Customer Match:</strong> Upload your email list to target existing customers</li>
        <li><strong>Website Remarketing:</strong> Target users who visited your website</li>
        <li><strong>YouTube Remarketing:</strong> Target users who watched your videos (by % watched)</li>
    </ul>
    
    <h5 class="fw-semibold mt-4 fs-6">5. Life Events Audiences</h5>
    <p>Target users experiencing major life changes (available in many countries):</p>
    <ul>
        <li><strong>Graduation:</strong> College students about to graduate</li>
        <li><strong>Moving:</strong> People planning to move to new homes</li>
        <li><strong>Wedding:</strong> Engaged couples planning weddings</li>
        <li><strong>New Job:</strong> People who recently started new jobs</li>
        <li><strong>New Homeowner:</strong> Recent home buyers</li>
    </ul>
    <p><strong>Best for:</strong> Time-sensitive offers relevant to life transitions (matrimonial services, home insurance, etc.)</p>
    
    <h4 class="fw-semibold mt-4">Targeting Mode: Observation vs Targeting</h4>
    <div class="row">
        <div class="col-md-6">
            <div class="card h-100 border-info">
                <div class="card-header bg-info text-white">
                    <h5 class="mb-0 fs-6">👁️ Observation Mode (Test First)</h5>
                </div>
                <div class="card-body">
                    <p class="small">Add audiences as "Observation" to collect performance data WITHOUT limiting your reach.</p>
                    <p class="small"><strong>Use when:</strong> Launching new campaigns, testing new audiences, unsure which segments will perform</p>
                    <p class="small mt-2"><strong>Process:</strong> Add 3-5 audience segments as observation → Run for 2-3 weeks → Identify top performers → Switch to Targeting mode</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card h-100 border-success">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0 fs-6">🎯 Targeting Mode (Precision)</h5>
                </div>
                <div class="card-body">
                    <p class="small">Set audiences as "Targeting" to show ads ONLY to users in those audiences (narrows reach).</p>
                    <p class="small"><strong>Use when:</strong> You have proven audience data, limited budget, high-value products</p>
                    <p class="small mt-2"><strong>Process:</strong> Move top 1-2 performing audiences from observation → Increase bids 20-30% → Monitor performance</p>
                </div>
            </div>
        </div>
    </div>
    
    <h4 class="fw-semibold mt-4">Audience Combinations (Layering)</h4>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="table-light">
                <tr>
                    <th>Strategy</th>
                    <th>Logic</th>
                    <th>Example</th>
                    <th>When to Use</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>AND (Layered)</strong></td>
                    <td>User must match ALL criteria</td>
                    <td>In-Market "Running Shoes" + Topic "Sports"</td>
                    <td>Limited budget, high-value products, precision needed</td>
                </tr>
                <tr>
                    <td><strong>OR (Separate Ad Groups)</strong></td>
                    <td>User matches ANY criteria</td>
                    <td>Ad Group 1: In-Market "Running Shoes", Ad Group 2: Affinity "Fitness Buffs"</td>
                    <td>Data collection, broader reach, testing</td>
                </tr>
                </tr>
                    <td><strong>Exclusions (Negative)</strong></td>
                    <td>User must NOT match criteria</td>
                    <td>Exclude "Purchasers" from remarketing campaigns</td>
                    <td>Preventing wasted spend, protecting converters</td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <div class="alert alert-success mt-4">
        <strong>💡 School/Education Example (R P Mission School):</strong><br>
        <strong>Location:</strong> Presence targeting – Sitamarhi, Bihar (30 km radius)<br>
        <strong>Language:</strong> English, Hindi<br>
        <strong>Audiences:</strong> In-Market "Education", Parental Status "Parent", Age 25-45<br>
        <strong>Observation:</strong> Add "Affinity – Education Enthusiasts" to collect data<br>
        <strong>Exclude:</strong> "Job seekers", "Free education", "Scholarship only"<br>
        This combination ensures ads only reach genuine parents actively looking for school admissions.
    </div>
</div>

<hr class="border border-dark border-2 my-5">
@include('frontend.service.partials.in-article-ads')
<!-- ============================================ -->
<!-- SECTION 8: Ad Scheduling & Dayparting Strategy (H2) -->
<!-- ============================================ -->
<div class="section" id="topic-8">
    <h2 class="fw-bold mb-4">8 Ad Scheduling & Dayparting Strategy</h2>
    
    <div class="alert alert-light border mb-4">
        <strong>📌 Core Concept:</strong> Ad scheduling (dayparting) allows you to control which days and times your ads run. Without ad scheduling, you waste budget showing ads when your target audience isn't active. Proper scheduling can reduce wasted spend by 20-40% while improving conversion rates.
    </div>
    
    <!-- ==================== PART 1: WHAT IS AD SCHEDULING ==================== -->
    <h3 class="fw-semibold mt-4">⏰ What Is Ad Scheduling (Dayparting)?</h3>
    
    <h4 class="fw-semibold mt-3">Definition</h4>
    <p>Ad scheduling lets you choose specific days of the week and times of day when your ads will run. You can also set bid adjustments for different time periods to maximize efficiency during peak hours.</p>
    
    <h4 class="fw-semibold mt-3">Why Ad Scheduling Matters</h4>
    <div class="row g-3 mb-4">
        <div class="col-md-3">
            <div class="card bg-primary text-white text-center h-100">
                <div class="card-body">
                    <div class="fs-2">💰</div>
                    <h5 class="card-title">20-40% Savings</h5>
                    <p class="small mb-0">Reduce wasted spend during off-hours</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-success text-white text-center h-100">
                <div class="card-body">
                    <div class="fs-2">📈</div>
                    <h5 class="card-title">15-30% Higher CTR</h5>
                    <p class="small mb-0">Show ads when users are engaged</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-warning text-dark text-center h-100">
                <div class="card-body">
                    <div class="fs-2">🎯</div>
                    <h5 class="card-title">2-3x Better CVR</h5>
                    <p class="small mb-0">Peak hours convert better</p>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-danger text-white text-center h-100">
                <div class="card-body">
                    <div class="fs-2">⚡</div>
                    <h5 class="card-title">Better ROI</h5>
                    <p class="small mb-0">Focus budget on what works</p>
                </div>
            </div>
        </div>
    </div>
    
    <hr>
    
    <!-- ==================== PART 2: RECOMMENDED SCHEDULES BY BUSINESS TYPE ==================== -->
    <h3 class="fw-semibold mt-4">📅 Recommended Ad Schedules by Business Type</h3>
    
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Business Type</th>
                    <th>Best Days</th>
                    <th>Best Hours</th>
                    <th>Bid Adjustments</th>
                    <th>Hours to Pause</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>🏫 School / Educational Institution</strong></td>
                    <td>Monday - Saturday</td>
                    <td>10:00 AM - 1:00 PM, 4:00 PM - 8:00 PM</td>
                    <td>+25% during peak, -75% after 10 PM</td>
                    <td>11 PM - 7 AM</td>
                </tr>
                <tr>
                    <td><strong>🛍️ E-commerce (General)</strong></td>
                    <td>Daily</td>
                    <td>12:00 PM - 2:00 PM, 7:00 PM - 11:00 PM</td>
                    <td>+30% evenings, -50% 1 AM - 7 AM</td>
                    <td>2 AM - 7 AM</td>
                </tr>
                <tr>
                    <td><strong>💼 B2B / Professional Services</strong></td>
                    <td>Monday - Friday</td>
                    <td>9:00 AM - 12:00 PM, 2:00 PM - 5:00 PM</td>
                    <td>+15% business hours, -80% weekends</td>
                    <td>Weekends, 8 PM - 8 AM</td>
                </tr>
                <tr>
                    <td><strong>🔧 Local Services (Plumber, Electrician)</strong></td>
                    <td>Monday - Saturday</td>
                    <td>8:00 AM - 8:00 PM</td>
                    <td>+20% 9 AM-11 AM & 4 PM-7 PM</td>
                    <td>11 PM - 6 AM</td>
                </tr>
                <tr>
                    <td><strong>🍔 Restaurant / Food Delivery</strong></td>
                    <td>Daily</td>
                    <td>11:00 AM - 2:00 PM, 6:00 PM - 10:00 PM</td>
                    <td>+30% during meal times</td>
                    <td>3 AM - 10 AM</td>
                </tr>
                <tr>
                    <td><strong>🏥 Healthcare / Clinic</strong></td>
                    <td>Monday - Saturday</td>
                    <td>9:00 AM - 1:00 PM, 4:00 PM - 7:00 PM</td>
                    <td>+15% during office hours</td>
                    <td>9 PM - 8 AM</td>
                </tr>
                <tr>
                    <td><strong>📱 Mobile App Promotion</strong></td>
                    <td>Daily</td>
                    <td>6:00 PM - 11:00 PM (peak usage)</td>
                    <td>+25% evenings, -70% 1 AM - 8 AM</td>
                    <td>2 AM - 7 AM</td>
                </tr>
                <tr>
                    <td><strong>🌏 International E-commerce</strong></td>
                    <td>Daily (24/7)</td>
                    <td>All hours (test time zones)</td>
                    <td>Segment by time zone, adjust accordingly</td>
                    <td>None (but use lower bids for off-hours)</td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <hr>
    
    <!-- ==================== PART 3: HOW TO ANALYZE BEST PERFORMING HOURS ==================== -->
    <h3 class="fw-semibold mt-4">📊 How to Find Your Best Performing Hours</h3>
    
    <h4 class="fw-semibold mt-3">Step-by-Step Analysis Process</h4>
    <div class="card mb-4">
        <div class="card-body">
            <ol>
                <li><strong>Run campaign without ad scheduling</strong> for 14-30 days to collect data</li>
                <li><strong>Enable "Hour of day" column</strong> in Google Ads reports (Customize columns → Attributes → Hour of day)</li>
                <li><strong>Add "Day of week" segment</strong> to see daily patterns</li>
                <li><strong>Export report</strong> to analyze conversion data by hour</li>
                <li><strong>Identify top 20% of hours</strong> by conversion volume and conversion rate</li>
                <li><strong>Identify bottom 30% of hours</strong> with zero or minimal conversions</li>
                <li><strong>Create ad schedule</strong> focusing on top hours with bid increases</li>
                <li><strong>Apply negative bid adjustments</strong> (reduce bids) for low-performing hours</li>
            </ol>
        </div>
    </div>
    
    <h4 class="fw-semibold mt-3">Sample Hour of Day Report Analysis</h4>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th>Hour (24h)</th>
                    <th>Time (12h)</th>
                    <th>Clicks</th>
                    <th>Conversions</th>
                    <th>Conv. Rate</th>
                    <th>CPA (₹)</th>
                    <th>Recommended Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>00:00-01:00</td>
                    <td>12 AM - 1 AM</td>
                    <td>15</td>
                    <td>0</td>
                    <td>0%</td>
                    <td>—</td>
                    <td><span class="badge bg-danger">Pause or -90%</span></td>
                </tr>
                <tr>
                    <td>06:00-07:00</td>
                    <td>6 AM - 7 AM</td>
                    <td>8</td>
                    <td>0</td>
                    <td>0%</td>
                    <td>—</td>
                    <td><span class="badge bg-warning">-70% bid</span></td>
                </tr>
                <tr>
                    <td>09:00-10:00</td>
                    <td>9 AM - 10 AM</td>
                    <td>45</td>
                    <td>3</td>
                    <td>6.7%</td>
                    <td>₹450</td>
                    <td><span class="badge bg-success">+30% bid</span></td>
                </tr>
                <tr>
                    <td>12:00-13:00</td>
                    <td>12 PM - 1 PM</td>
                    <td>62</td>
                    <td>5</td>
                    <td>8.1%</td>
                    <td>₹310</td>
                    <td><span class="badge bg-success">+40% bid</span></td>
                </tr>
                <tr>
                    <td>18:00-19:00</td>
                    <td>6 PM - 7 PM</td>
                    <td>38</td>
                    <td>2</td>
                    <td>5.3%</td>
                    <td>₹500</td>
                    <td><span class="badge bg-success">+20% bid</span></td>
                </tr>
                <tr>
                    <td>23:00-00:00</td>
                    <td>11 PM - 12 AM</td>
                    <td>12</td>
                    <td>0</td>
                    <td>0%</td>
                    <td>—</td>
                    <td><span class="badge bg-danger">-80% bid</span></td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <hr>
    
    <!-- ==================== PART 4: BID ADJUSTMENTS BY TIME ==================== -->
    <h3 class="fw-semibold mt-4">💰 Bid Adjustments for Ad Scheduling</h3>
    
    <h4 class="fw-semibold mt-3">How Bid Adjustments Work</h4>
    <p>Bid adjustments allow you to increase or decrease your bids for specific times of day. For example, if your base bid is ₹10 and you add a +30% adjustment for 6 PM - 9 PM, your bid becomes ₹13 during those hours.</p>
    
    <h4 class="fw-semibold mt-3">Recommended Bid Adjustment Ranges</h4>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="table-light">
                <tr>
                    <th>Time Period Performance</th>
                    <th>Bid Adjustment Range</th>
                    <th>When to Apply</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Peak Conversion Hours</strong></td>
                    <td><span class="text-success">+20% to +50%</span></td>
                    <td>Hours with highest conversion rates and volumes</td>
                </tr>
                <tr>
                    <td><strong>Good Performance Hours</strong></td>
                    <td><span class="text-info">0% to +15%</span></td>
                    <td>Above average but not best</td>
                </tr>
                <tr>
                    <td><strong>Low Performance Hours</strong></td>
                    <td><span class="text-warning">-10% to -30%</span></td>
                    <td>Below average conversion rate</td>
                </tr>
                <tr>
                    <td><strong>Very Low/Zero Conversion Hours</strong></td>
                    <td><span class="text-danger">-50% to -90%</span> or Pause</td>
                    <td>No conversions after sufficient data</td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <div class="alert alert-warning mt-3">
        <strong>⚠️ Important:</strong> Bid adjustments are multiplicative, not additive. A base bid of ₹100 with -50% = ₹50 bid. A base bid of ₹100 with +20% = ₹120 bid. Multiple adjustments compound (e.g., device + location + time adjustments all apply).
    </div>
    
    <hr>
    
    <!-- ==================== PART 5: SEASONAL & SPECIAL EVENT SCHEDULING ==================== -->
    <h3 class="fw-semibold mt-4">📆 Seasonal & Special Event Ad Scheduling</h3>
    
    <h4 class="fw-semibold mt-3">Key Dates to Schedule Around</h4>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="table-light">
                <tr>
                    <th>Event/Season</th>
                    <th>Recommended Schedule Change</th>
                    <th>Bid Adjustment</th>
                    <th>Duration</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Diwali / Festive Season</strong></td>
                    <td>Increase budget and run extended hours (10 AM - 12 AM)</td>
                    <td><span class="text-success">+40% to +100%</span></td>
                    <td>2-3 weeks before Diwali</td>
                </tr>
                <tr>
                    <td><strong>New Year / January</strong></td>
                    <td>Increase for fitness, education, health services</td>
                    <td><span class="text-success">+30% to +60%</span></td>
                    <td>First 2 weeks of January</td>
                </tr>
                </tr>
                    <td><strong>Back to School (April-May / August-September)</strong></td>
                    <td>Run ads 8 AM - 10 PM, peak admission season</td>
                    <td><span class="text-success">+50% for schools</span></td>
                    <td>4-6 weeks before session start</td>
                </tr>
                <tr>
                    <td><strong>Black Friday / Cyber Monday</strong></td>
                    <td>24-hour scheduling with high bids</td>
                    <td><span class="text-success">+50% to +200%</span></td>
                    <td>Week of Thanksgiving (e-commerce)</td>
                </tr>
                <tr>
                    <td><strong>Summer Holidays (May-June)</strong></td>
                    <td>Reduce school ads, increase travel/tourism ads</td>
                    <td><span class="text-danger">-30% for schools</span></td>
                    <td>May 15 - June 30</td>
                </tr>
                <tr>
                    <td><strong>Exam Season (February-March)</strong></td>
                    <td>Reduce school admission ads, increase coaching/tuition ads</td>
                    <td><span class="text-warning">-20% for admissions</span></td>
                    <td>During board exams</td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <hr>
    
    <!-- ==================== PART 6: DAY PARTING STRATEGIES ==================== -->
    <h3 class="fw-semibold mt-4">🎯 Advanced Dayparting Strategies</h3>
    
    <h4 class="fw-semibold mt-3">Strategy 1: Time Zone Segmentation</h4>
    <p>If targeting multiple time zones, create separate campaigns or ad schedules for each time zone to ensure ads show during local peak hours.</p>
    <pre class="bg-dark text-white p-3 rounded small">
Campaign A: India (IST) – 9 AM - 10 PM IST
Campaign B: USA Eastern (EST) – 9 AM - 10 PM EST
Campaign C: UK (GMT) – 9 AM - 10 PM GMT
    </pre>
    
    <h4 class="fw-semibold mt-3">Strategy 2: Day of Week Segmentation</h4>
    <p>Different days often have different performance patterns. Create separate ad schedules for weekdays vs weekends.</p>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="table-light">
                <tr>
                    <th>Day Type</th>
                    <th>Schedule</th>
                    <th>Bid Adjustment</th>
                    <th>Best For</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Weekdays (Mon-Thu)</strong></td>
                    <td>9 AM - 9 PM</td>
                    <td>Baseline (0%)</td>
                    <td>B2B, professional services, schools</td>
                </tr>
                <tr>
                    <td><strong>Friday</strong></td>
                    <td>9 AM - 6 PM (shorter)</td>
                    <td>-10% to -20%</td>
                    <td>Lower conversion day for many</td>
                </tr>
                <tr>
                    <td><strong>Saturday</strong></td>
                    <td>10 AM - 8 PM</td>
                    <td>+10% to +20%</td>
                    <td>E-commerce, retail, local services</td>
                </tr>
                <tr>
                    <td><strong>Sunday</strong></td>
                    <td>10 AM - 6 PM</td>
                    <td>-10% to -30%</td>
                    <td>Lower volume, test engagement</td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <h4 class="fw-semibold mt-3">Strategy 3: Hourly Budget Pacing</h4>
    <p>Use shared budgets with ad scheduling to control spend distribution throughout the day:</p>
    <ul>
        <li><strong>Morning (6 AM - 12 PM):</strong> 30% of daily budget</li>
        <li><strong>Afternoon (12 PM - 5 PM):</strong> 25% of daily budget</li>
        <li><strong>Evening (5 PM - 10 PM):</strong> 40% of daily budget</li>
        <li><strong>Night (10 PM - 6 AM):</strong> 5% of daily budget (or paused)</li>
    </ul>
    
    <hr>
    
    <!-- ==================== PART 7: COMMON AD SCHEDULING MISTAKES ==================== -->
    <h3 class="fw-semibold mt-4">❌ Common Ad Scheduling Mistakes to Avoid</h3>
    
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Mistake</th>
                    <th>Why It Hurts</th>
                    <th>How to Fix</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>No ad scheduling at all</strong></td>
                    <td>Wasting 20-40% of budget on off-hours</td>
                    <td>Analyze hour report and implement schedule</td>
                </tr>
                <tr>
                    <td><strong>Scheduling without data</strong></td>
                    <td>Guessing instead of using real performance data</td>
                    <td>Run 14-30 days without schedule first</td>
                </tr>
                <tr>
                    <td><strong>Same schedule for all campaigns</strong></td>
                    <td>Different campaign types need different schedules</td>
                    <td>Tailor schedule to each campaign's goal</td>
                </tr>
                <tr>
                    <td><strong>Pausing vs reducing bids</strong></td>
                    <td>Missing potential off-hour conversions</td>
                    <td>Use -50% to -90% instead of pausing completely</td>
                </tr>
                <tr>
                    <td><strong>Not updating seasonally</strong></td>
                    <td>Summer vs winter schedules differ</td>
                    <td>Review and adjust quarterly</td>
                </tr>
                <tr>
                    <td><strong>Ignoring time zone differences</strong></td>
                    <td>Ads show at wrong times for remote audiences</td>
                    <td>Use campaign-level time zones or separate campaigns</td>
                </tr>
            </tbody>
        </table>
    </div>
    
    <hr>
    
    <!-- ==================== PART 8: HOW TO SET UP AD SCHEDULING ==================== -->
    <h3 class="fw-semibold mt-4">⚙️ How to Set Up Ad Scheduling in Google Ads</h3>
    
    <div class="card mb-4">
        <div class="card-body">
            <ol>
                <li>Navigate to your <strong>Campaign</strong> → <strong>Settings</strong></li>
                <li>Click on <strong>"Ad schedule"</strong> (under Additional settings)</li>
                <li>Click <strong>"+ Ad schedule"</strong> to add time blocks</li>
                <li>Select <strong>days</strong> and <strong>time ranges</strong> (e.g., Monday 9:00 AM - 6:00 PM)</li>
                <li>Add <strong>bid adjustments</strong> for each time block (-90% to +900%)</li>
                <li>Click <strong>"Save"</strong> to apply changes</li>
            </ol>
        </div>
    </div>
    
    <div class="alert alert-info">
        <strong>💡 Pro Tip:</strong> Start with conservative bid adjustments (±20%) for the first 2 weeks after implementing scheduling. Analyze performance, then increase or decrease adjustments based on actual conversion data.
    </div>
    
    <hr>
    
    <!-- ==================== PART 9: SAMPLE AD SCHEDULES ==================== -->
    <h3 class="fw-semibold mt-4">📋 Sample Ad Schedule Templates</h3>
    
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0 fs-6">🏫 School (R P Mission School) - Admissions Campaign</h4>
                </div>
                <div class="card-body">
                    <pre class="bg-light p-2 small rounded">
Monday - Friday:
8:00 AM - 10:00 AM (bid +10%)
10:00 AM - 1:00 PM (bid +25%)
1:00 PM - 4:00 PM (bid 0%)
4:00 PM - 8:00 PM (bid +30%)
8:00 PM - 10:00 PM (bid +10%)

Saturday:
9:00 AM - 1:00 PM (bid +20%)
1:00 PM - 6:00 PM (bid +10%)

Sunday:
10:00 AM - 2:00 PM (bid -20%)
(Pause after 8 PM daily)
                    </pre>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-header bg-success text-white">
                    <h4 class="mb-0 fs-6">🛍️ E-commerce Store</h4>
                </div>
                <div class="card-body">
                    <pre class="bg-light p-2 small rounded">
Daily (7 days/week):
6:00 AM - 9:00 AM (bid -10%)
9:00 AM - 12:00 PM (bid +10%)
12:00 PM - 2:00 PM (bid +20%)
2:00 PM - 5:00 PM (bid 0%)
5:00 PM - 8:00 PM (bid +25%)
8:00 PM - 11:00 PM (bid +40%)
11:00 PM - 6:00 AM (bid -80%)
                    </pre>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-header bg-info text-white">
                    <h4 class="mb-0 fs-6">💼 B2B Services</h4>
                </div>
                <div class="card-body">
                    <pre class="bg-light p-2 small rounded">
Monday - Thursday:
9:00 AM - 12:00 PM (bid +20%)
12:00 PM - 1:00 PM (bid -10% - lunch)
1:00 PM - 5:00 PM (bid +15%)

Friday:
9:00 AM - 12:00 PM (bid +10%)
1:00 PM - 4:00 PM (bid 0%)

Saturday - Sunday:
Paused (or bid -90%)
                    </pre>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-3">
                <div class="card-header bg-warning text-dark">
                    <h4 class="mb-0 fs-6">🔧 Local Service Business (Plumber)</h4>
                </div>
                <div class="card-body">
                    <pre class="bg-light p-2 small rounded">
Monday - Saturday:
7:00 AM - 9:00 AM (bid +15%)
9:00 AM - 12:00 PM (bid +25%)
12:00 PM - 1:00 PM (bid -10%)
1:00 PM - 4:00 PM (bid +15%)
4:00 PM - 8:00 PM (bid +30%)
8:00 PM - 10:00 PM (bid +10%)

Sunday:
9:00 AM - 12:00 PM (bid -20%)
(Pause after 10 PM daily)
                    </pre>
                </div>
            </div>
        </div>
    </div>
    
    <hr>
    
    <!-- ==================== PART 10: SUMMARY ==================== -->
    <div class="alert alert-light border mt-4">
        <h3 class="fw-semibold mb-3">📌 Section 2.8 Summary: Ad Scheduling & Dayparting</h3>
        <ul>
            <li><strong>Ad scheduling</strong> lets you control when your ads run – essential for budget efficiency</li>
            <li><strong>Collect data first</strong> – Run 14-30 days without scheduling to find peak hours</li>
            <li><strong>Use bid adjustments</strong> – Increase bids during peak hours (+20% to +50%), decrease during off-hours (-50% to -90%)</li>
            <li><strong>Different schedules for different campaigns</strong> – Schools, e-commerce, B2B all have different patterns</li>
            <li><strong>Update seasonally</strong> – Review and adjust schedules for holidays, seasons, and special events</li>
            <li><strong>Consider time zones</strong> – Create separate campaigns or schedules for different regions</li>
            <li><strong>Never rely on default 24/7 delivery</strong> – That's how budgets get wasted</li>
        </ul>
        <p class="mb-0"><strong>Himanshu's Final Word:</strong> Ad scheduling is one of the most underutilized optimization tools. Most advertisers run 24/7 and waste 30%+ of their budget. A 15-minute investment in analyzing your hour-of-day report and setting up proper schedules can save thousands of rupees monthly while improving conversion rates.</p>
    </div>
</div>
                         <hr style="border: 0; border-top: 2px dashed #bbb;">
                         <!-- ===== Module Completion Section Start ===== -->
                         <div class="text-center mt-4 mb-4">
                             <p class="fw-bold text-success">
                                 ✅ Module {{ $moduleNumberFormatted }} : {{ $moduleTitle }} Successfully Completed
                             </p>
                             <p class="text-muted mb-2">
                                 You have successfully completed this module of 
                                 <strong>{{ $product->product_name }}</strong>.
                             </p>
                             <p class="text-muted">
                                 Keep building your expertise step by step — 
                                 <strong class="text-primary">Learn Next Module →</strong>
                             </p>
                         </div>
                         <hr style="border: 0; border-top: 2px dashed #bbb;">
                         <!-- ===== Module Completion Section End ===== -->
                     </div>
                     <!-- Module {{ $moduleNumberFormatted }} End : {{ $moduleTitle }} -->
                     <!-- ===================================================== -->
                     @else
                         <!-- No Module Selected -->
                         <div class="text-center py-5">
                             <h2 class="fw-bold" style="color: #f4952f;">Module Not Found</h2>
                             <p class="text-muted">Please select a module from the sidebar.</p>
                         </div>
                     @endif
                 </div>
                 <!-- Main Content Column Ending (col-lg-7) -->
                 @include('frontend.service.partials.footer')
@endsection