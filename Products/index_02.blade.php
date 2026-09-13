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
                     <h1 class="section-heading">{{ $currentModuleObj->title ?? 'GOOGLE ADS-FOR BEGINNERS ROADMAP' }}</h1>
                     <!-- Create by user name and created_at date time -->
                     @include('frontend.service.partials.create-by-user-name')
                     <hr style="border: 0; border-top: 2px dashed #bbb;">
                     <!-- Hero Image Section - Responsive Google Ads Introduction Image (16:9 Ratio) -->
                     <div class="google-ads-hero mb-4">
                         <!-- 16:9 Aspect Ratio Container -->
                         <div class="ratio ratio-16x9 px-3 px-md-4">
                             <img src="{{ asset('public/frontend/img/service/digital-marketing/google-ads-for-beginners/welcome.webp') }}" 
                                 alt="Introduction to Google Ads - Complete Guide for Beginners"
                                 class="img-fluid responsive-image rounded shadow-sm"
                                 loading="lazy"
                                 width="1920"
                                 height="1080"
                                 decoding="async"
                                 fetchpriority="high"
                                 style="object-fit: cover;">
                         </div>
                     </div>
                     <hr style="border: 0; border-top: 2px dashed #bbb;">
                     <!-- ============================================================ -->
                     <!-- SECTION 1: INTRODUCTION TO GOOGLE ADS                         -->
                     <!-- ============================================================ -->
                     <div class="section" id="introduction">
                         <div class="card mb-4 border">
                             <div class="card-header bg-white py-3">
                                 <h2 class="mb-0">Introduction to Google Ads</h2>
                             </div>
                             <div class="card-body p-4">
                                 <div class="alert alert-light border mb-4">
                                     <strong>What is Google Ads?</strong> Google Ads (formerly Google AdWords) is Google's powerful online advertising platform that allows businesses to display ads on Google's search engine results pages (SERPs), YouTube, Gmail, and across millions of partner websites. It operates on a pay-per-click (PPC) model, meaning you only pay when someone clicks on your ad.
                                 </div>
                                 <h3 class="fw-semibold mt-3">Understanding Google Ads</h3>
                                 <p>Think of Google Ads as renting advertising space on the world's largest search engine. Instead of paying for a billboard that everyone sees (whether they're interested or not), you pay only when someone who is actually looking for your product or service clicks on your ad. This makes Google Ads incredibly cost-effective and measurable.
                                 </p>
                                 <div class="alert alert-info mt-3">
                                     💡 <strong>Simple Analogy:</strong> Google Ads is like having a salesperson at a trade show who only talks to people who walk up to your booth and ask about your products. You pay only for the conversations that happen, not for everyone who walks past.
                                 </div>
                                 <h4 class="fw-semibold mt-4">How Google Ads Works</h4>
                                 <p>When someone searches on Google, an auction happens in milliseconds. Here's how it works:</p>
                                 <div class="card bg-light mb-4">
                                     <div class="card-body">
                                         <h5 class="fw-semibold">The Google Ads Auction Process:</h5>
                                         <ol>
                                             <li><strong>User Search:</strong> A user types a query into Google search (e.g., "best running shoes")</li>
                                             <li><strong>Ad Auction:</strong> Google runs an auction to determine which ads to show</li>
                                             <li><strong>Ad Rank Calculation:</strong> Google calculates Ad Rank = (Max CPC Bid × Quality Score) + Ad Extensions Impact</li>
                                             <li><strong>Ad Display:</strong> The winning ads appear above or below organic search results</li>
                                             <li><strong>Payment:</strong> You pay only when someone clicks your ad (Cost Per Click)</li>
                                         </ol>
                                         <div class="alert alert-primary mt-2">
                                             🔑 <strong>Key Insight:</strong> Google rewards advertisers who create relevant, high-quality ads. A better Quality Score means you pay less for better ad positions.
                                         </div>
                                     </div>
                                 </div>
                                 <!-- ============================================================ -->
                                 <!-- SUB-SECTION: TRADITIONAL ADVERTISING VS GOOGLE ADS               -->
                                 <!-- ============================================================ -->
                                 <h4 class="fw-semibold mt-4">Traditional Advertising vs Google Ads</h4>
                                 <div class="table-responsive">
                                     <table class="table table-bordered">
                                         <thead class="table-dark">
                                             <tr>
                                                 <th>Aspect</th>
                                                 <th>Traditional Advertising</th>
                                                 <th>Google Ads</th>
                                             </tr>
                                         </thead>
                                         <tbody>
                                             <tr>
                                                 <td><strong>Targeting</strong></td>
                                                 <td>Broad, untargeted (TV, radio, billboards)</td>
                                                 <td>Highly targeted (keywords, location, demographics, interests)</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>Payment Model</strong></td>
                                                 <td>Upfront cost regardless of results</td>
                                                 <td>Pay only when someone clicks your ad (PPC)</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>Measurability</strong></td>
                                                 <td>Difficult to measure ROI</td>
                                                 <td>Every click, impression, and conversion is tracked</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>Flexibility</strong></td>
                                                 <td>Cannot change ads once published</td>
                                                 <td>Change ads, bids, and targeting anytime</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>Budget Control</strong></td>
                                                 <td>Large upfront investment</td>
                                                 <td>Start with any budget, scale as you see results</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>Reach</strong></td>
                                                 <td>Mass audience, low engagement</td>
                                                 <td>Targeted audience, high engagement</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>Time to Results</strong></td>
                                                 <td>Weeks or months</td>
                                                 <td>Immediate results</td>
                                             </tr>
                                         </tbody>
                                     </table>
                                 </div>
                                 <!-- ============================================================ -->
                                 <!-- SUB-SECTION: KEY BENEFITS OF GOOGLE ADS                         -->
                                 <!-- ============================================================ -->
                                 <h4 class="fw-semibold mt-4">Key Benefits of Google Ads</h4>
                                 <div class="row g-4">
                                     <div class="col-md-3">
                                         <div class="card text-center h-100 border-primary">
                                             <div class="card-body">
                                                 <div class="display-4">🎯</div>
                                                 <h5 class="fw-bold">Targeted Reach</h5>
                                                 <p class="small">Show ads to people actively searching for your products or services</p>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-3">
                                         <div class="card text-center h-100 border-success">
                                             <div class="card-body">
                                                 <div class="display-4">💰</div>
                                                 <h5 class="fw-bold">Pay for Results</h5>
                                                 <p class="small">Only pay when someone clicks your ad - no wasted spend</p>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-3">
                                         <div class="card text-center h-100 border-info">
                                             <div class="card-body">
                                                 <div class="display-4">📊</div>
                                                 <h5 class="fw-bold">Measurable</h5>
                                                 <p class="small">Track every click, conversion, and ROI in real-time</p>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-3">
                                         <div class="card text-center h-100 border-warning">
                                             <div class="card-body">
                                                 <div class="display-4">⚡</div>
                                                 <h5 class="fw-bold">Fast Results</h5>
                                                 <p class="small">Start getting traffic within hours, not months</p>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <!-- ============================================================ -->
                                 <!-- SUB-SECTION: INDUSTRY EXAMPLES                                  -->
                                 <!-- ============================================================ -->
                                 <div class="alert alert-secondary mt-4">
                                     💡 <strong>Real-World Example:</strong> A local plumber can show ads only to people searching for "plumber near me" within a 10-mile radius of their location. They only pay when someone clicks and calls them. This targeted approach means they're reaching potential customers at the exact moment they need a plumber.
                                 </div>
                                 <!-- ============================================================ -->
                                 <!-- SUB-SECTION: WHY GOOGLE ADS IS POPULAR                         -->
                                 <!-- ============================================================ -->
                                 <h4 class="fw-semibold mt-4">Why Google Ads is So Popular</h4>
                                 <div class="row g-3">
                                     <div class="col-md-6">
                                         <div class="card h-100 border-0 bg-light">
                                             <div class="card-body">
                                                 <h5 class="fw-bold text-primary">🌍 Massive Reach</h5>
                                                 <p>Google processes over <strong>8.5 billion searches per day</strong> worldwide - that's more than 99,000 searches every second.</p>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-6">
                                         <div class="card h-100 border-0 bg-light">
                                             <div class="card-body">
                                                 <h5 class="fw-bold text-success">🎯 Intent-Based Targeting</h5>
                                                 <p>Reach people actively looking for what you offer. Unlike social media ads, Google Ads captures <strong>high-intent users</strong>.</p>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-6">
                                         <div class="card h-100 border-0 bg-light">
                                             <div class="card-body">
                                                 <h5 class="fw-bold text-info">💰 Flexible Budgeting</h5>
                                                 <p>Start with any budget - as low as ₹100 per day. Scale up or down as needed based on performance.</p>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-6">
                                         <div class="card h-100 border-0 bg-light">
                                             <div class="card-body">
                                                 <h5 class="fw-bold text-warning">📈 Complete Control</h5>
                                                 <p>Change ads, bids, and targeting in real-time. Pause underperforming ads and scale winners instantly.</p>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-6">
                                         <div class="card h-100 border-0 bg-light">
                                             <div class="card-body">
                                                 <h5 class="fw-bold text-danger">🌐 Global & Local</h5>
                                                 <p>Reach customers anywhere in the world or target specific cities, neighborhoods, or even zip codes.</p>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-6">
                                         <div class="card h-100 border-0 bg-light">
                                             <div class="card-body">
                                                 <h5 class="fw-bold text-secondary">📱 Multiple Formats</h5>
                                                 <p>Text ads, image ads, video ads, shopping ads, app ads - choose the format that works best for your business.</p>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <!-- ============================================================ -->
                                 <!-- SUB-SECTION: WHY LEARN GOOGLE ADS                             -->
                                 <!-- ============================================================ -->
                                 <h4 class="fw-semibold mt-4">Why Learn Google Ads?</h4>
                                 <p>Becoming proficient in Google Ads can transform your business or career. Here's why:</p>
                                 <div class="row g-3">
                                     <div class="col-md-4">
                                         <div class="card h-100">
                                             <div class="card-body text-center">
                                                 <div class="display-6">💼</div>
                                                 <h5 class="fw-bold">Career Growth</h5>
                                                 <p>Opens paths to roles like PPC Specialist, Digital Marketing Manager, and Agency Owner. Average salary in India: ₹4-15 LPA</p>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-4">
                                         <div class="card h-100">
                                             <div class="card-body text-center">
                                                 <div class="display-6">🚀</div>
                                                 <h5 class="fw-bold">Entrepreneurship</h5>
                                                 <p>Learn how to acquire customers profitably for any business. This skill is essential for founders and startup teams.</p>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-4">
                                         <div class="card h-100">
                                             <div class="card-body text-center">
                                                 <div class="display-6">📈</div>
                                                 <h5 class="fw-bold">Freelancing & Agency</h5>
                                                 <p>Offer Google Ads services to businesses and build a lucrative agency. Top freelancers earn ₹50,000-2,00,000 per month.</p>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-6">
                                         <div class="card h-100">
                                             <div class="card-body text-center">
                                                 <div class="display-6">🎓</div>
                                                 <h5 class="fw-bold">Certification</h5>
                                                 <p>Google Ads certifications are recognized worldwide and boost your credibility. Free certifications from Google Skillshop.</p>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-6">
                                         <div class="card h-100">
                                             <div class="card-body text-center">
                                                 <div class="display-6">🌟</div>
                                                 <h5 class="fw-bold">High Demand</h5>
                                                 <p>Digital marketing skills, especially Google Ads, are in massive demand globally. Thousands of job openings available daily.</p>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <!-- ============================================================ -->
                                 <!-- SUB-SECTION: TYPES OF GOOGLE ADS CAMPAIGNS                      -->
                                 <!-- ============================================================ -->
                                 <h4 class="fw-semibold mt-4">Types of Google Ads Campaigns</h4>
                                 <p>Google Ads offers multiple campaign types, each designed for specific marketing goals:</p>
                                 <div class="row g-3">
                                     <div class="col-md-6">
                                         <div class="card h-100">
                                             <div class="card-header bg-primary text-white">
                                                 <h5 class="mb-0">🔍 Search Campaigns</h5>
                                             </div>
                                             <div class="card-body">
                                                 <p>Text ads that appear on Google search results when users search for your keywords. </p>
                                                 <p class="text-muted small"><strong>Best for:</strong> Capturing high-intent customers, leads, sales</p>
                                                 <p class="text-muted small"><strong>Example:</strong> A dental clinic appearing when someone searches for "best dentist near me"</p>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-6">
                                         <div class="card h-100">
                                             <div class="card-header bg-success text-white">
                                                 <h5 class="mb-0">🖼️ Display Campaigns</h5>
                                             </div>
                                             <div class="card-body">
                                                 <p>Image and banner ads across 2+ million websites, apps, and Google properties.</p>
                                                 <p class="text-muted small"><strong>Best for:</strong> Brand awareness, remarketing, visual advertising</p>
                                                 <p class="text-muted small"><strong>Example:</strong> A fashion brand showing ads on lifestyle blogs</p>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-6">
                                         <div class="card h-100">
                                             <div class="card-header bg-danger text-white">
                                                 <h5 class="mb-0">📹 Video Campaigns</h5>
                                             </div>
                                             <div class="card-body">
                                                 <p>Video ads on YouTube and across Google's video partner network.</p>
                                                 <p class="text-muted small"><strong>Best for:</strong> Engagement, brand storytelling, YouTube reach</p>
                                                 <p class="text-muted small"><strong>Example:</strong> A software company running tutorial ads on YouTube</p>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-6">
                                         <div class="card h-100">
                                             <div class="card-header bg-warning text-dark">
                                                 <h5 class="mb-0">🛍️ Shopping Campaigns</h5>
                                             </div>
                                             <div class="card-body">
                                                 <p>Product listing ads with images, prices, and merchant details on Google Search.</p>
                                                 <p class="text-muted small"><strong>Best for:</strong> E-commerce stores, product sales</p>
                                                 <p class="text-muted small"><strong>Example:</strong> An online shoe store showing ads for Nike shoes</p>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-6">
                                         <div class="card h-100">
                                             <div class="card-header bg-info text-white">
                                                 <h5 class="mb-0">📱 App Campaigns</h5>
                                             </div>
                                             <div class="card-body">
                                                 <p>Promote mobile apps across Search, Play Store, YouTube, and Display Network.</p>
                                                 <p class="text-muted small"><strong>Best for:</strong> App installs, in-app actions</p>
                                                 <p class="text-muted small"><strong>Example:</strong> A gaming app promoting installs on Play Store</p>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-6">
                                         <div class="card h-100">
                                             <div class="card-header bg-secondary text-white">
                                                 <h5 class="mb-0">🚀 Performance Max</h5>
                                             </div>
                                             <div class="card-body">
                                                 <p>AI-powered campaigns across all Google inventory from a single campaign.</p>
                                                 <p class="text-muted small"><strong>Best for:</strong> Full-funnel performance, scaling</p>
                                                 <p class="text-muted small"><strong>Example:</strong> An e-commerce brand maximizing conversions across all channels</p>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-6">
                                         <div class="card h-100">
                                             <div class="card-header bg-dark text-white">
                                                 <h5 class="mb-0">📰 Smart Campaigns</h5>
                                             </div>
                                             <div class="card-body">
                                                 <p>Simplified campaign setup with automated targeting and bidding.</p>
                                                 <p class="text-muted small"><strong>Best for:</strong> Small businesses, beginners</p>
                                                 <p class="text-muted small"><strong>Example:</strong> A local restaurant promoting special offers</p>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-6">
                                         <div class="card h-100">
                                             <div class="card-header bg-purple text-white">
                                                 <h5 class="mb-0">📨 Discovery Campaigns</h5>
                                             </div>
                                             <div class="card-body">
                                                 <p>Visually rich ads on Google Discover, YouTube Home, and Gmail.</p>
                                                 <p class="text-muted small"><strong>Best for:</strong> Brand discovery, engagement</p>
                                                 <p class="text-muted small"><strong>Example:</strong> A travel agency showing vacation ideas on Google Discover</p>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <!-- ============================================================ -->
                                 <!-- SUB-SECTION: GOOGLE ADS AUCTION DETAILED                       -->
                                 <!-- ============================================================ -->
                                 <h4 class="fw-semibold mt-4">Understanding the Google Ads Auction</h4>
                                 <p>The Google Ads auction determines which ads appear and in what order. Here's a detailed breakdown:</p>
                                 <div class="card bg-dark text-white p-4 rounded">
                                     <pre style="font-family: monospace; color: #fff; margin: 0;">
┌─────────────────────────────────────────────────────────────────────────────────────┐
│                      GOOGLE ADS AUCTION FLOW                                        │
├─────────────────────────────────────────────────────────────────────────────────────┤
│                                                                                     │
│  1. User searches for "best running shoes"                                          │
│         ↓                                                                           │
│  2. Google identifies all eligible advertisers with relevant keywords               │
│         ↓                                                                           │
│  3. Ad Rank calculated = (Max CPC Bid × Quality Score) + Ad Extensions Impact       │
│         ↓                                                                           │
│  4. Ads with highest Ad Rank win the auction                                        │
│         ↓                                                                           │
│  5. Winner's ad appears at the top of search results                                │
│         ↓                                                                           │
│  6. Advertiser pays = (Ad Rank of next highest bidder / Your Ad Rank) + $0.01       │
│                      (Actual CPC)                                                   │
│                                                                                     │
│  🔑 You don't pay your max bid - you pay just enough to beat the next advertiser    │
│  ⭐ Quality Score is the most important factor for long-term success               │  
│                                                                                     │
└─────────────────────────────────────────────────────────────────────────────────────┘
                                     </pre>
                                 </div>
                                 <div class="alert alert-success mt-3">
                                     💡 <strong>Key Insight:</strong> Quality Score matters more than bid amount. A higher Quality Score means you pay less for better ad positions. Google rewards relevance and user experience.
                                 </div>
                                 <!-- ============================================================ -->
                                 <!-- SUB-SECTION: QUALITY SCORE DETAILED                         -->
                                 <!-- ============================================================ -->
                                 <h4 class="fw-semibold mt-4">Quality Score: The Secret to Success</h4>
                                 <p><strong>Quality Score</strong> is Google's rating of your ad quality and relevance. It's measured on a scale of 1-10 and is calculated in real-time.</p>
                                 <div class="card border-primary mb-4">
                                     <div class="card-header bg-primary text-white">
                                         <h5 class="mb-0">What Affects Quality Score?</h5>
                                     </div>
                                     <div class="card-body">
                                         <div class="row g-3">
                                             <div class="col-md-4">
                                                 <div class="card h-100 border-0 bg-light">
                                                     <div class="card-body text-center">
                                                         <div class="display-6">📝</div>
                                                         <h5 class="fw-bold">Expected CTR</h5>
                                                         <p class="small">How likely is your ad to be clicked? Based on historical performance and ad relevance.</p>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="col-md-4">
                                                 <div class="card h-100 border-0 bg-light">
                                                     <div class="card-body text-center">
                                                         <div class="display-6">📄</div>
                                                         <h5 class="fw-bold">Ad Relevance</h5>
                                                         <p class="small">How well does your ad match the search query? Keyword-to-ad relevance matters.</p>
                                                     </div>
                                                 </div>
                                             </div>
                                             <div class="col-md-4">
                                                 <div class="card h-100 border-0 bg-light">
                                                     <div class="card-body text-center">
                                                         <div class="display-6">🌐</div>
                                                         <h5 class="fw-bold">Landing Page Experience</h5>
                                                         <p class="small">Is your landing page relevant, fast-loading, and mobile-friendly? User experience matters.</p>
                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <div class="alert alert-info">
                                     📊 <strong>Impact of Quality Score:</strong>
                                     <ul class="mb-0">
                                         <li><strong>High Quality Score (8-10):</strong> Lower CPC, better ad positions, higher ROI</li>
                                         <li><strong>Medium Quality Score (5-7):</strong> Average CPC, competitive positions</li>
                                         <li><strong>Low Quality Score (1-4):</strong> Higher CPC, lower positions, poor performance</li>
                                     </ul>
                                 </div>
                                 <!-- ============================================================ -->
                                 <!-- SUB-SECTION: KEY TERMINOLOGY                                  -->
                                 <!-- ============================================================ -->
                                 <h4 class="fw-semibold mt-4">Key Google Ads Terminology</h4>
                                 <p>Master these essential terms to understand and optimize your campaigns:</p>
                                 <div class="table-responsive">
                                     <table class="table table-bordered">
                                         <thead class="table-dark">
                                             <tr>
                                                 <th>Term</th>
                                                 <th>Definition</th>
                                                 <th>Why It Matters</th>
                                                 <th>Industry Benchmark</th>
                                             </tr>
                                         </thead>
                                         <tbody>
                                             <tr>
                                                 <td><strong>PPC</strong></td>
                                                 <td>Pay-Per-Click - You pay when someone clicks your ad</td>
                                                 <td>You only pay for actual engagement, not impressions</td>
                                                 <td>Average CPC across industries: ₹10-50</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>CPC</strong></td>
                                                 <td>Cost Per Click - How much you pay for each click</td>
                                                 <td>Lower CPC = more clicks for your budget</td>
                                                 <td>Competitive keywords: ₹50-200</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>CTR</strong></td>
                                                 <td>Click-Through Rate - Percentage of impressions that become clicks</td>
                                                 <td>Higher CTR = more relevant ad = better Quality Score</td>
                                                 <td>Good CTR: 3-5%, Excellent: 5%+</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>Quality Score</strong></td>
                                                 <td>Google's rating of your ad relevance and landing page experience</td>
                                                 <td>Higher Quality Score = lower CPC + better positions</td>
                                                 <td>Good: 7+, Excellent: 9-10</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>Conversion Rate</strong></td>
                                                 <td>Percentage of clicks that become conversions (sales, leads, etc.)</td>
                                                 <td>Higher conversion rate = more results for your budget</td>
                                                 <td>Average: 2-5%, Excellent: 10%+</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>CPA</strong></td>
                                                 <td>Cost Per Acquisition - Cost to acquire a customer or lead</td>
                                                 <td>Lower CPA = higher profitability</td>
                                                 <td>Varies by industry and business model</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>ROAS</strong></td>
                                                 <td>Return On Ad Spend - Revenue generated per dollar spent</td>
                                                 <td>Higher ROAS = more profitable campaigns</td>
                                                 <td>Good: 3x+, Excellent: 5x+</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>Impressions</strong></td>
                                                 <td>Number of times your ad is shown</td>
                                                 <td>Indicates reach and visibility</td>
                                                 <td>1000+ impressions/day for good campaigns</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>Ad Rank</strong></td>
                                                 <td>Position of your ad on the search results page</td>
                                                 <td>Higher position = more visibility and clicks</td>
                                                 <td>Top 3 positions get 60-70% of clicks</td>
                                             </tr>
                                         </tbody>
                                     </table>
                                 </div>
                                 <!-- ============================================================ -->
                                 <!-- SUB-SECTION: GOOGLE ADS PLATFORMS                            -->
                                 <!-- ============================================================ -->
                                 <h4 class="fw-semibold mt-4">Where Can Your Ads Appear?</h4>
                                 <p>Google Ads provides multiple channels to reach your audience:</p>
                                 <div class="row g-3">
                                     <div class="col-md-4">
                                         <div class="card h-100">
                                             <div class="card-header bg-primary text-white">
                                                 <h5 class="mb-0">🔍 Google Search</h5>
                                             </div>
                                             <div class="card-body">
                                                 <p class="small">Ads appear on Google search results pages (SERPs) when users search for your keywords.</p>
                                                 <p class="text-muted small">80%+ of Google revenue comes from search ads</p>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-4">
                                         <div class="card h-100">
                                             <div class="card-header bg-danger text-white">
                                                 <h5 class="mb-0">📹 YouTube</h5>
                                             </div>
                                             <div class="card-body">
                                                 <p class="small">Video ads and display ads on YouTube. Reach 2.5 billion monthly active users.</p>
                                                 <p class="text-muted small">90% of people discover new brands on YouTube</p>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-4">
                                         <div class="card h-100">
                                             <div class="card-header bg-success text-white">
                                                 <h5 class="mb-0">🖼️ Display Network</56>
                                             </div>
                                             <div class="card-body">
                                                 <p class="small">2+ million websites, apps, and Google properties. Reaches 90% of global internet users.</p>
                                                 <p class="text-muted small">2 million+ sites in the network</p>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-4">
                                         <div class="card h-100">
                                             <div class="card-header bg-warning text-dark">
                                                 <h5 class="mb-0">📧 Gmail</h5>
                                             </div>
                                             <div class="card-body">
                                                 <p class="small">Ads appear in Gmail inboxes, reaching 1.8 billion active users.</p>
                                                 <p class="text-muted small">1.8B+ active Gmail users</p>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-4">
                                         <div class="card h-100">
                                             <div class="card-header bg-info text-white">
                                                 <h5 class="mb-0">📱 Google Play</h5>
                                             </div>
                                             <div class="card-body">
                                                 <p class="small">App install ads on Google Play Store. Reach app users globally.</p>
                                                 <p class="text-muted small">2.5B+ Android devices</p>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-4">
                                         <div class="card h-100">
                                             <div class="card-header bg-secondary text-white">
                                                 <h5 class="mb-0">📰 Google Discover</h5>
                                             </div>
                                             <div class="card-body">
                                                 <p class="small">Visually rich ads on Google's content discovery feed on mobile devices.</p>
                                                 <p class="text-muted small">800M+ monthly active users</p>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <!-- ============================================================ -->
                                 <!-- SUB-SECTION: GETTING STARTED                                   -->
                                 <!-- ============================================================ -->
                                 <h4 class="fw-semibold mt-4">Getting Started with Google Ads</h4>
                                 <p>Follow these steps to launch your first campaign:</p>
                                 <div class="card bg-light p-4">
                                     <div class="row g-3">
                                         <div class="col-md-4">
                                             <div class="card h-100 border-0">
                                                 <div class="card-body text-center">
                                                     <div class="display-6 text-primary">1</div>
                                                     <h5 class="fw-bold">Create an Account</h5>
                                                     <p class="small">Visit ads.google.com and create your Google Ads account. Link to your Gmail account.</p>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="col-md-4">
                                             <div class="card h-100 border-0">
                                                 <div class="card-body text-center">
                                                     <div class="display-6 text-success">2</div>
                                                     <h5 class="fw-bold">Set Your Goals</h5>
                                                     <p class="small">Define your campaign goals: leads, sales, brand awareness, website traffic, or app installs.</p>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="col-md-4">
                                             <div class="card h-100 border-0">
                                                 <div class="card-body text-center">
                                                     <div class="display-6 text-warning">3</div>
                                                     <h5 class="fw-bold">Choose Campaign Type</h5>
                                                     <p class="small">Select the campaign type that aligns with your goals: Search, Display, Video, Shopping, etc.</p>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="col-md-4">
                                             <div class="card h-100 border-0">
                                                 <div class="card-body text-center">
                                                     <div class="display-6 text-info">4</div>
                                                     <h5 class="fw-bold">Keyword Research</h5>
                                                     <p class="small">Use Google Keyword Planner to find relevant keywords with good search volume and low competition.</p>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="col-md-4">
                                             <div class="card h-100 border-0">
                                                 <div class="card-body text-center">
                                                     <div class="display-6 text-danger">5</div>
                                                     <h5 class="fw-bold">Create Compelling Ads</h5>
                                                     <p class="small">Write ad copy with clear headlines, descriptions, and calls-to-action (CTAs). Include ad extensions.</p>
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="col-md-4">
                                             <div class="card h-100 border-0">
                                                 <div class="card-body text-center">
                                                     <div class="display-6 text-secondary">6</div>
                                                     <h5 class="fw-bold">Launch & Optimize</h5>
                                                     <p class="small">Set your budget, launch the campaign, and continuously monitor and optimize for better performance.</p>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <!-- ============================================================ -->
                                 <!-- SUB-SECTION: COMMON MISTAKES                                  -->
                                 <!-- ============================================================ -->
                                 <h4 class="fw-semibold mt-4">Common Beginner Mistakes to Avoid</h4>
                                 <div class="table-responsive">
                                     <table class="table table-bordered table-hover">
                                         <thead class="table-dark">
                                             <tr>
                                                 <th>Mistake</th>
                                                 <th>Why It's Bad</th>
                                                 <th>Solution</th>
                                             </tr>
                                         </thead>
                                         <tbody>
                                             <tr>
                                                 <td><strong>Using Broad Match Keywords</strong></td>
                                                 <td>Shows ads for irrelevant searches, wasting budget</td>
                                                 <td>Use Phrase or Exact Match for better targeting</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>Not Using Negative Keywords</strong></td>
                                                 <td>Ads show for irrelevant queries, high spend with no results</td>
                                                 <td>Regularly add negative keywords to filter out junk traffic</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>Ignoring Quality Score</strong></td>
                                                 <td>Higher CPC and lower ad positions</td>
                                                 <td>Optimize ad relevance, CTR, and landing page experience</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>Poor Landing Pages</strong></td>
                                                 <td>Low conversion rates, wasted ad spend</td>
                                                 <td>Create relevant, fast-loading, mobile-friendly landing pages</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>Not Using Ad Extensions</strong></td>
                                                 <td>Lower CTR and ad rank</td>
                                                 <td>Add sitelink, callout, location, and call extensions</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>Setting and Forgetting</strong></td>
                                                 <td>Campaign performance declines over time</td>
                                                 <td>Regularly monitor and optimize your campaigns</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>Ignoring Mobile Users</strong></td>
                                                 <td>Miss mobile audience, poor user experience</td>
                                                 <td>Optimize for mobile devices, use mobile-friendly formats</td>
                                             </tr>
                                             <tr>
                                                 <td><strong>Not Tracking Conversions</strong></td>
                                                 <td>Can't measure ROI, don't know what's working</td>
                                                 <td>Set up conversion tracking immediately</td>
                                             </tr>
                                         </tbody>
                                     </table>
                                 </div>
                                 <!-- ============================================================ -->
                                 <!-- SUB-SECTION: CAREER OPPORTUNITIES                             -->
                                 <!-- ============================================================ -->
                                 <h4 class="fw-semibold mt-4">Career Opportunities in Google Ads</h4>
                                 <p>Google Ads expertise opens doors to exciting career paths:</p>
                                 <div class="row g-3">
                                     <div class="col-md-6">
                                         <div class="card h-100 border-primary">
                                             <div class="card-header bg-primary text-white">
                                                 <h5 class="mb-0">💼 Job Roles</h5>
                                             </div>
                                             <div class="card-body">
                                                 <ul class="list-unstyled">
                                                     <li>✓ PPC Specialist</li>
                                                     <li>✓ Digital Marketing Manager</li>
                                                     <li>✓ SEM Expert</li>
                                                     <li>✓ Performance Marketing Lead</li>
                                                     <li>✓ Google Ads Consultant</li>
                                                     <li>✓ Agency Founder</li>
                                                 </ul>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-6">
                                         <div class="card h-100 border-success">
                                             <div class="card-header bg-success text-white">
                                                 <h5 class="mb-0">💰 Salary Ranges (India)</h5>
                                             </div>
                                             <div class="card-body">
                                                 <ul class="list-unstyled">
                                                     <li>✓ Fresher: ₹3-5 LPA</li>
                                                     <li>✓ Junior Specialist: ₹5-8 LPA</li>
                                                     <li>✓ Senior Specialist: ₹8-15 LPA</li>
                                                     <li>✓ Manager: ₹12-25 LPA</li>
                                                     <li>✓ Freelancer: ₹50K-2L per month</li>
                                                     <li>✓ Agency Owner: ₹20L+ per year</li>
                                                 </ul>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-6">
                                         <div class="card h-100 border-info">
                                             <div class="card-header bg-info text-white">
                                                 <h5 class="mb-0">🎓 Certifications</h5>
                                             </div>
                                             <div class="card-body">
                                                 <ul class="list-unstyled">
                                                     <li>✓ Google Ads Search Certification</li>
                                                     <li>✓ Google Ads Display Certification</li>
                                                     <li>✓ Google Ads Video Certification</li>
                                                     <li>✓ Google Ads Shopping Certification</li>
                                                     <li>✓ Google Ads App Certification</li>
                                                     <li>✓ Google Analytics Certification</li>
                                                 </ul>
                                             </div>
                                         </div>
                                     </div>
                                     <div class="col-md-6">
                                         <div class="card h-100 border-warning">
                                             <div class="card-header bg-warning text-dark">
                                                 <h5 class="mb-0">🚀 Growth Path</h5>
                                             </div>
                                             <div class="card-body">
                                                 <ul class="list-unstyled">
                                                     <li>✓ Junior → Senior → Manager</li>
                                                     <li>✓ Specialist → Consultant → Trainer</li>
                                                     <li>✓ Employee → Freelancer → Agency</li>
                                                     <li>✓ India → Global Opportunities</li>
                                                     <li>✓ Google Ads → Full Stack Marketing</li>
                                                 </ul>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                                 <!-- ============================================================ -->
                                 <!-- SUB-SECTION: NEXT STEPS                                      -->
                                 <!-- ============================================================ -->
                                 <div class="alert alert-success mt-4">
                                     <h5 class="fw-bold">🚀 Ready to Master Google Ads?</h5>
                                     <p>This module is just the beginning. Continue your learning journey with:</p>
                                     <ul class="mb-0">
                                         <li>📚 <strong>Module 2:</strong> Campaign Structure & Types - Learn how to set up campaigns properly</li>
                                         <li>🔑 <strong>Module 3:</strong> Keyword Research & Targeting - Master keyword strategies</li>
                                         <li>✍️ <strong>Module 4:</strong> Creating & Writing Effective Ads - Write high-converting ad copy</li>
                                         <li>💰 <strong>Module 5:</strong> Bidding, Budget & Optimization - Maximize your ROI</li>
                                     </ul>
                                 </div>
                                 <div class="alert alert-light border mt-4">
                                     📘 <strong>Official Resources:</strong><br>
                                     <a href="https://ads.google.com" target="_blank">Google Ads Official Website</a> | 
                                     <a href="https://skillshop.withgoogle.com" target="_blank">Google Skillshop (Free Certification)</a> | 
                                     <a href="https://support.google.com/google-ads" target="_blank">Google Ads Help Center</a>
                                 </div>
                                 <div class="alert alert-warning mt-3">
                                     ⭐ <strong>Pro Tip:</strong> The best way to learn Google Ads is to practice. Start a test campaign with a small budget and experiment with different strategies. Learn from failures and scale what works.
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!-- Main Content Column Ending (col-lg-7) -->
                 @include('frontend.service.partials.footer')
@endsection