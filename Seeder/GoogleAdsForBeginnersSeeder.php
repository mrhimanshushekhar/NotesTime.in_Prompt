<?php
// database/seeders/DigitalMarketing/GoogleAdsForBeginnersSeeder.php

namespace Database\Seeders\DigitalMarketing;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GoogleAdsForBeginnersSeeder extends Seeder
{
     /**
     * Run the database seeds.
     */
     public function run(): void
     {
         $modules = [
             // =====================================================
             // Module 01: Introduction to Google Ads
             // =====================================================
             [
                 'user_id' => 1,
                 'service_type_id' => 5,
                 'product_slug' => 'google-ads-for-beginners',
                 'title' => 'Introduction to Google Ads',
                 'slug' => 'google-ads-introduction-basics',
                 'meta_title' => 'Google Ads Introduction: What is PPC & How It Works',
                 'meta_description' => 'Learn Google Ads basics: PPC advertising, account setup, interface navigation, key metrics like CTR, CPC, CPA, ROI, policies and platform differences.',
                 'meta_keywords' => 'Google Ads tutorial, PPC advertising, Google Ads account setup, CTR CPC CPA ROI, Google Ads policies, Google Ads vs Facebook Ads',
                 'order_position' => 1,
                 'subtopics' => json_encode([
                     ['id' => 'topic-1', 'title' => '1 What is Google Ads & How It Works?', 'order_position' => 1],
                     ['id' => 'topic-2', 'title' => '2 Understanding PPC Advertising', 'order_position' => 2],
                     ['id' => 'topic-3', 'title' => '3 Google Ads Account Setup', 'order_position' => 3],
                     ['id' => 'topic-4', 'title' => '4 Interface & Navigation Overview', 'order_position' => 4],
                     ['id' => 'topic-5', 'title' => '5 Key Terms: CTR, CPC, CPA, ROI', 'order_position' => 5],
                     ['id' => 'topic-6', 'title' => '6 Google Ads Policies & Account Restrictions', 'order_position' => 6],
                     ['id' => 'topic-7', 'title' => '7 Google Ads vs Facebook Ads – Key Differences', 'order_position' => 7],
                 ]),
                 'is_published' => true,
             ],
             // =====================================================
             // Module 02: Campaign Structure & Types
             // =====================================================
             [
                 'user_id' => 1,
                 'service_type_id' => 5,
                 'product_slug' => 'google-ads-for-beginners',
                 'title' => 'Campaign Structure & Types',
                 'slug' => 'google-ads-campaign-structure-types',
                 'meta_title' => 'Google Ads Campaign Structure: Types, Hierarchy & Settings',
                 'meta_description' => 'Master Google Ads campaign structure: account hierarchy, search, display, video, shopping campaigns, smart vs manual campaigns, ad scheduling and targeting.',
                 'meta_keywords' => 'Google Ads campaign, campaign types, search display video, smart campaigns, ad scheduling, location targeting, audience targeting',
                 'order_position' => 2,
                 'subtopics' => json_encode([
                     ['id' => 'topic-1', 'title' => '1 How to Create a Campaign (Step-by-Step)', 'order_position' => 1],
                     ['id' => 'topic-2', 'title' => '2 Account Hierarchy: Campaigns, Ad Groups, Ads', 'order_position' => 2],
                     ['id' => 'topic-3', 'title' => '3 Search, Display, Video, Shopping & App Campaigns', 'order_position' => 3],
                     ['id' => 'topic-4', 'title' => '4 Smart Campaigns vs. Manual', 'order_position' => 4],
                     ['id' => 'topic-5', 'title' => '5 Choosing the Right Campaign Type', 'order_position' => 5],
                     ['id' => 'topic-6', 'title' => '6 Campaign Goals & Optimization Settings', 'order_position' => 6],
                     ['id' => 'topic-7', 'title' => '7 Location, Language & Audience Targeting Basics', 'order_position' => 7],
                     ['id' => 'topic-8', 'title' => '8 Ad Scheduling & Dayparting Strategy', 'order_position' => 8],
                 ]),
                 'is_published' => true,
             ],
             // =====================================================
             // Module 03: Keyword Research & Targeting
             // =====================================================
             [
                 'user_id' => 1,
                 'service_type_id' => 5,
                 'product_slug' => 'google-ads-for-beginners',
                 'title' => 'Keyword Research & Targeting',
                 'slug' => 'google-ads-keyword-research-targeting',
                 'meta_title' => 'Google Ads Keyword Research: Match Types, Planner & Strategy',
                 'meta_description' => 'Learn Google Ads keyword research: match types (broad, phrase, exact), negative keywords, Keyword Planner, competitor analysis, search intent and long-tail strategy.',
                 'meta_keywords' => 'keyword research, keyword match types, negative keywords, Google Keyword Planner, competitor keywords, search intent, long-tail keywords',
                 'order_position' => 3,
                 'subtopics' => json_encode([
                     ['id' => 'topic-1', 'title' => '1 Introduction to Keywords', 'order_position' => 1],
                     ['id' => 'topic-2', 'title' => '2 Keyword Match Types (Broad, Phrase, Exact)', 'order_position' => 2],
                     ['id' => 'topic-3', 'title' => '3 Negative Keywords & Their Importance', 'order_position' => 3],
                     ['id' => 'topic-4', 'title' => '4 Using Google Keyword Planner', 'order_position' => 4],
                     ['id' => 'topic-5', 'title' => '5 Competitor Keyword Analysis', 'order_position' => 5],
                     ['id' => 'topic-6', 'title' => '6 Search Intent & Keyword Strategy', 'order_position' => 6],
                     ['id' => 'topic-7', 'title' => '7 Using Search Terms Report for Keyword Optimization', 'order_position' => 7],
                     ['id' => 'topic-8', 'title' => '8 Keyword Expansion & Long-Tail Strategy', 'order_position' => 8],
                 ]),
                 'is_published' => true,
             ],
             // =====================================================
             // Module 04: Creating & Writing Effective Ads
             // =====================================================
             [
                 'user_id' => 1,
                 'service_type_id' => 5,
                 'product_slug' => 'google-ads-for-beginners',
                 'title' => 'Creating & Writing Effective Ads',
                 'slug' => 'google-ads-creating-effective-ads',
                 'meta_title' => 'Google Ads Copywriting: RSA, DSA, Extensions & Landing Pages',
                 'meta_description' => 'Master Google Ads creation: ad formats, extensions, responsive search ads, dynamic search ads, call extensions, sitelinks, and landing page optimization.',
                 'meta_keywords' => 'Google Ads copywriting, responsive search ads, dynamic search ads, ad extensions, sitelinks, call extensions, landing page optimization',
                 'order_position' => 4,
                 'subtopics' => json_encode([
                     ['id' => 'topic-1', 'title' => '1 Ad Formats & Extensions', 'order_position' => 1],
                     ['id' => 'topic-2', 'title' => '2 Writing Compelling Ad Copy', 'order_position' => 2],
                     ['id' => 'topic-3', 'title' => '3 Responsive Search Ads (RSA)', 'order_position' => 3],
                     ['id' => 'topic-4', 'title' => '4 Dynamic Search Ads (DSA)', 'order_position' => 4],
                     ['id' => 'topic-5', 'title' => '5 Call Extensions, Sitelinks & Structured Snippets', 'order_position' => 5],
                     ['id' => 'topic-6', 'title' => '6 Landing Page Optimization for Ads', 'order_position' => 6],
                 ]),
                 'is_published' => true,
             ],
             // =====================================================
             // Module 05: Bidding, Budget & Optimization
             // =====================================================
             [
                 'user_id' => 1,
                 'service_type_id' => 5,
                 'product_slug' => 'google-ads-for-beginners',
                 'title' => 'Bidding, Budget & Optimization',
                 'slug' => 'google-ads-bidding-budget-optimization',
                 'meta_title' => 'Google Ads Bidding: Smart Bidding, CPC, CPA & Quality Score',
                 'meta_description' => 'Learn Google Ads bidding: manual vs automated bidding, CPC, CPA, ROAS, daily budget, bid adjustments, smart bidding strategies and Quality Score optimization.',
                 'meta_keywords' => 'Google Ads bidding, manual bidding, automated bidding, CPC CPA ROAS, smart bidding, Quality Score, ad rank, budget allocation',
                 'order_position' => 5,
                 'subtopics' => json_encode([
                     ['id' => 'topic-1', 'title' => '1 Manual vs Automated Bidding Strategies', 'order_position' => 1],
                     ['id' => 'topic-2', 'title' => '2 Understanding CPC, CPA, and ROAS Metrics', 'order_position' => 2],
                     ['id' => 'topic-3', 'title' => '3 Daily Budget Allocation', 'order_position' => 3],
                     ['id' => 'topic-4', 'title' => '4 Bid Adjustments for Devices & Locations', 'order_position' => 4],
                     ['id' => 'topic-5', 'title' => '5 Smart Bidding Strategies', 'order_position' => 5],
                     ['id' => 'topic-6', 'title' => '6 Quality Score & Ad Rank Explained', 'order_position' => 6],
                     ['id' => 'topic-7', 'title' => '7 Budget Pacing & Spend Control', 'order_position' => 7],
                 ]),
                 'is_published' => true,
             ],
             // =====================================================
             // Module 06: Audience Targeting & Segmentation
             // =====================================================
             [
                  'user_id' => 1,
                  'service_type_id' => 5,
                  'product_slug' => 'google-ads-for-beginners',
                  'title' => 'Audience Targeting & Segmentation',
                  'slug' => 'google-ads-audience-targeting',
                  'meta_title' => 'Google Ads Audience Targeting: Demographics & Remarketing',
                  'meta_description' => 'Master Google Ads audience targeting: demographics, interests, affinity audiences, remarketing, custom audiences, location targeting, and audience insights.',
                  'meta_keywords' => 'audience targeting, demographics targeting, affinity audiences, remarketing ads, custom audiences, location targeting, device targeting',
                  'order_position' => 6,
                  'subtopics' => json_encode([
                      ['id' => 'topic-1', 'title' => '1 Demographics, Interests & Affinity Audiences', 'order_position' => 1],
                      ['id' => 'topic-2', 'title' => '2 Remarketing & Custom Audiences', 'order_position' => 2],
                      ['id' => 'topic-3', 'title' => '3 Location & Device Targeting', 'order_position' => 3],
                      ['id' => 'topic-4', 'title' => '4 Time-Based & Geo Targeting', 'order_position' => 4],
                      ['id' => 'topic-5', 'title' => '5 Audience Insights Reports', 'order_position' => 5],
                      // ========== SECTION 2: AI-POWERED AUDIENCE GENERATION ==========
                      ['title' => '🤖 AI-Powered Audience Generation', 'is_heading' => true, 'order_position' => 6],
                      ['id' => 'topic-6', 'title' => '6 AI Prompts for Audience Persona Generation', 'order_position' => 7],
                      ['id' => 'topic-7', 'title' => '7 AI Prompts for Audience Interest Suggestions', 'order_position' => 8],
                      ['id' => 'topic-8', 'title' => '8 AI Prompts for Lookalike Audience Seed Suggestions', 'order_position' => 9],
                      // ========== SECTION 3: ADVANCED AI TARGETING ==========
                      ['title' => '🎯 Advanced AI Targeting Strategies', 'is_heading' => true, 'order_position' => 10],
                      ['id' => 'topic-9', 'title' => '9 AI Prompts for Location & Device Targeting Analysis', 'order_position' => 11],
                      ['id' => 'topic-10', 'title' => '10 AI Prompts for Audience Insights & Segmentation Analysis', 'order_position' => 12],
                  ]),
                  'is_published' => true,
             ],
             // =====================================================
             // Module 07: Conversion Tracking & Analytics
             // =====================================================
             [
                 'user_id' => 1,
                 'service_type_id' => 5,
                 'product_slug' => 'google-ads-for-beginners',
                 'title' => 'Conversion Tracking & Analytics',
                 'slug' => 'google-ads-conversion-tracking',
                 'meta_title' => 'Google Ads Conversion Tracking: Setup, GTM & Attribution',
                 'meta_description' => 'Learn Google Ads conversion tracking: setup conversion tracking, Google Tag Manager, Google Analytics integration, phone call tracking, and attribution models.',
                 'meta_keywords' => 'conversion tracking, Google Tag Manager, Google Analytics integration, phone call tracking, attribution models, conversion optimization',
                 'order_position' => 7,
                 'subtopics' => json_encode([
                     ['id' => 'topic-1', 'title' => '1 Setting Up Conversion Tracking', 'order_position' => 1],
                     ['id' => 'topic-2', 'title' => '2 Google Tag Manager & Global Site Tag', 'order_position' => 2],
                     ['id' => 'topic-3', 'title' => '3 Linking Google Analytics to Ads', 'order_position' => 3],
                     ['id' => 'topic-4', 'title' => '4 Tracking Phone Calls & Forms', 'order_position' => 4],
                     ['id' => 'topic-5', 'title' => '5 Using Conversion Data for Optimization', 'order_position' => 5],
                     ['id' => 'topic-6', 'title' => '6 Attribution Models & Conversion Paths', 'order_position' => 6],
                 ]),
                 'is_published' => true,
             ],
             // =====================================================
             // Module 08: Google Ads Extensions Mastery
             // =====================================================
             [
                 'user_id' => 1,
                 'service_type_id' => 5,
                 'product_slug' => 'google-ads-for-beginners',
                 'title' => 'Google Ads Extensions Mastery',
                 'slug' => 'google-ads-extensions-mastery',
                 'meta_title' => 'Google Ads Extensions: Sitelinks, Callouts & Location Extensions',
                 'meta_description' => 'Master Google Ads extensions: sitelink, callout, call, message, location, price, promotion, image, app extensions and best practices for higher CTR.',
                 'meta_keywords' => 'ad extensions, sitelink extensions, callout extensions, call extensions, location extensions, price extensions, promotion extensions',
                 'order_position' => 8,
                 'subtopics' => json_encode([
                     ['id'=>'topic-1','title'=>'1 Why Extensions Matter & How They Impact Ad Rank','order_position'=>1],
                     ['id'=>'topic-2','title'=>'2 Extension Hierarchy (Account, Campaign & Ad Group)','order_position'=>2],
                     ['id'=>'topic-3','title'=>'3 Sitelink Extensions','order_position'=>3],
                     ['id'=>'topic-4','title'=>'4 Callout Extensions','order_position'=>4],
                     ['id'=>'topic-5','title'=>'5 Structured Snippet Extensions','order_position'=>5],
                     ['id'=>'topic-6','title'=>'6 Call Extensions','order_position'=>6],
                     ['id'=>'topic-7','title'=>'7 Lead Form Extensions','order_position'=>7],
                     ['id'=>'topic-8','title'=>'8 Location Extensions','order_position'=>8],
                     ['id'=>'topic-9','title'=>'9 Affiliate Location Extensions','order_position'=>9],
                     ['id'=>'topic-10','title'=>'10 Price Extensions','order_position'=>10],
                     ['id'=>'topic-11','title'=>'11 Promotion Extensions','order_position'=>11],
                     ['id'=>'topic-12','title'=>'12 Image Extensions','order_position'=>12],
                     ['id'=>'topic-13','title'=>'13 App Extensions','order_position'=>13],
                     ['id'=>'topic-14','title'=>'14 Business Name Asset','order_position'=>14],
                     ['id'=>'topic-15','title'=>'15 Business Logo Asset','order_position'=>15],
                 ]),
                 'is_published' => true,
             ],
             // =====================================================
             // Module 09: Advanced Google Ads Extensions & Optimization
             // =====================================================
             [
                 'user_id' => 1,
                 'service_type_id' => 5,
                 'product_slug' => 'google-ads-for-beginners',
                 'title' => 'Advanced Google Ads Extensions & Optimization',
                 'slug' => 'advanced-google-ads-extensions-optimization',
                 'meta_title' => 'Advanced Google Ads Extensions, Ratings & Optimization',
                 'meta_description' => 'Learn advanced Google Ads extensions including Seller Ratings, Dynamic Assets, Education Assets, scheduling, policies, optimization and reporting.',
                 'meta_keywords' => 'seller ratings, dynamic assets, google ads optimization, automatic assets, asset reports',
                 'order_position' => 9,
                 'subtopics' => json_encode([
                     ['id'=>'topic-1','title'=>'1 Promotion Countdown & Ad Customizers','order_position'=>1],
                     ['id'=>'topic-2','title'=>'2 Seller Ratings','order_position'=>2],
                     ['id'=>'topic-3','title'=>'3 Customer Ratings','order_position'=>3],
                     ['id'=>'topic-4','title'=>'4 Education Assets','order_position'=>4],
                     ['id'=>'topic-5','title'=>'5 Dynamic Sitelink Extensions','order_position'=>5],
                     ['id'=>'topic-6','title'=>'6 Dynamic Callout Extensions','order_position'=>6],
                     ['id'=>'topic-7','title'=>'7 Dynamic Structured Snippet Extensions','order_position'=>7],
                     ['id'=>'topic-8','title'=>'8 Automatically Created Assets','order_position'=>8],
                     ['id'=>'topic-9','title'=>'9 Asset Scheduling & Device Preferences','order_position'=>9],
                     ['id'=>'topic-10','title'=>'10 Google Business Profile Integration','order_position'=>10],
                     ['id'=>'topic-11','title'=>'11 Asset Approval Status & Policy Troubleshooting','order_position'=>11],
                     ['id'=>'topic-12','title'=>'12 Asset Performance Reports','order_position'=>12],
                     ['id'=>'topic-13','title'=>'13 Best Practices for Maximum CTR','order_position'=>13],
                     ['id'=>'topic-14','title'=>'14 A/B Testing Extensions','order_position'=>14],
                     ['id'=>'topic-15','title'=>'15 Common Extension Mistakes & Optimization Tips','order_position'=>15],
                     ['id'=>'topic-16','title'=>'16 Live Demo: Creating Every Google Ads Extension','order_position'=>16],
                 ]),
                 'is_published'=>true,
             ],
             // =====================================================
             // Module 10: Landing Page & Conversion Mastery
             // =====================================================
             [
                'user_id' => 1,
                'service_type_id' => 5,
                'product_slug' => 'google-ads-for-beginners',
                'title' => 'Landing Page & Conversion Mastery',
                'slug' => 'google-ads-landing-page-conversion',
                'meta_title' => 'Google Ads Landing Page: CTA, A/B Testing & Structure',
                'meta_description' => 'Optimize Google Ads landing pages: page structure, CTA optimization, conversion boost techniques, A/B testing, and common landing page mistakes to avoid.',
                'meta_keywords' => 'landing page optimization, CTA optimization, conversion rate optimization, A/B testing, landing page mistakes, landing page structure',
                'order_position' => 10,
                'subtopics' => json_encode([
                    ['id' => 'topic-1', 'title' => '1 Landing Page Structure', 'order_position' => 1],
                    ['id' => 'topic-2', 'title' => '2 CTA Optimization', 'order_position' => 2],
                    ['id' => 'topic-3', 'title' => '3 Conversion Boost Techniques', 'order_position' => 3],
                    ['id' => 'topic-4', 'title' => '4 Common Landing Page Mistakes', 'order_position' => 4],
                    ['id' => 'topic-5', 'title' => '5 A/B Testing Strategy', 'order_position' => 5],
                    ['id' => 'topic-6', 'title' => '6 Internal Linking Strategy', 'order_position' => 6],
                    ['id' => 'topic-7', 'title' => '7 External Linking Strategy', 'order_position' => 7],
                ]),
                'is_published' => true,
            ],
             // =====================================================
             // Module 11: Display & Video Campaigns
             // =====================================================
             [
                 'user_id' => 1,
                 'service_type_id' => 5,
                 'product_slug' => 'google-ads-for-beginners',
                 'title' => 'Display & Video Campaigns',
                 'slug' => 'google-ads-display-video-campaigns',
                 'meta_title' => 'Google Display & Video: YouTube Ads, Remarketing & Safety',
                 'meta_description' => 'Learn Google Display Network and YouTube video ads: in-stream ads, discovery ads, remarketing campaigns, placement exclusions, and brand safety controls.',
                 'meta_keywords' => 'Google Display Network, YouTube ads, in-stream ads, discovery ads, video remarketing, placement exclusions, brand safety',
                 'order_position' => 11,
                 'subtopics' => json_encode([
                     ['id' => 'topic-1', 'title' => '1 Introduction to Google Display Network (GDN)', 'order_position' => 1],
                     ['id' => 'topic-2', 'title' => '2 Display Campaign Structure & Components', 'order_position' => 2],
                     ['id' => 'topic-3', 'title' => '3 How to Create a Display Campaign', 'order_position' => 3],
                     ['id' => 'topic-4', 'title' => '4 Display Ads Keyword Research & Targeting', 'order_position' => 4],
                     ['id' => 'topic-5', 'title' => '5 How Keywords Work in Google Display Campaigns', 'order_position' => 5],
                     ['id' => 'topic-6', 'title' => '6 Display Ads Audience Signals vs Keywords', 'order_position' => 6],
                     ['id' => 'topic-7', 'title' => '7 Finding High-Converting Display Keywords', 'order_position' => 7],
                     ['id' => 'topic-8', 'title' => '8 Keyword Planner for Display Ads', 'order_position' => 8],
                     ['id' => 'topic-9', 'title' => '9 Competitor Keyword Research for Display Ads', 'order_position' => 9],
                     ['id' => 'topic-10', 'title' => '10 Negative Keywords for Display Campaigns', 'order_position' => 10],
                     ['id' => 'topic-11', 'title' => '11 Responsive Display Ads & Creative Assets', 'order_position' => 11],
                     ['id' => 'topic-12', 'title' => '12 Display Campaign Optimization & Best Practices', 'order_position' => 12],
                     ['title' => '🔥 YouTube Video Advertising', 'is_heading' => true, 'order_position' => 13],
                     ['id' => 'topic-13', 'title' => '13 Introduction to YouTube & Video Advertising', 'order_position' => 14],
                     ['id' => 'topic-14', 'title' => '14 How to Create a Video Campaign', 'order_position' => 15],
                     ['id' => 'topic-15', 'title' => '15 In-Stream, In-Feed & Shorts Ads Explained', 'order_position' => 16],
                     ['id' => 'topic-16', 'title' => '16 YouTube Targeting Strategies (Audience, Keyword, Topic & Placement)', 'order_position' => 17],
                     ['id' => 'topic-17', 'title' => '17 Video Ad Creative Best Practices', 'order_position' => 18],
                     ['title' => '🔥 Advanced Display & Video Strategies', 'is_heading' => true, 'order_position' => 19],
                     ['id' => 'topic-18', 'title' => '18 Remarketing Display & Video Campaigns', 'order_position' => 20],
                     ['id' => 'topic-19', 'title' => '19 Video Sequencing & Ad Frequency Management', 'order_position' => 21],
                     ['id' => 'topic-20', 'title' => '20 Placement Exclusions & Brand Safety Controls', 'order_position' => 22],
                     ['title' => '🔥 AI-Powered Ad Creation', 'is_heading' => true, 'order_position' => 23],
                     ['id' => 'topic-21', 'title' => '21 AI Prompts for Generating High-Converting Headlines & Descriptions', 'order_position' => 24],
                     ['id' => 'topic-22', 'title' => '22 AI Prompt Templates for Display & Video Campaign Creation', 'order_position' => 25],
                     ['id' => 'topic-23', 'title' => '23 AI Image Generation for Google Display', 'order_position' => 26],
                 ]),
                 'is_published' => true,
             ],
             // =====================================================
             // Module 12: E-commerce & Shopping Ads
             // =====================================================
             [
                 'user_id' => 1,
                 'service_type_id' => 5,
                 'product_slug' => 'google-ads-for-beginners',
                 'title' => 'E-commerce & Shopping Ads',
                 'slug' => 'google-ads-shopping-ecommerce',
                 'meta_title' => 'Google Shopping Ads: Merchant Center & Product Feed',
                 'meta_description' => 'Master Google Shopping ads: Merchant Center setup, product feed optimization, smart shopping, dynamic remarketing, and Performance Max campaigns for e-commerce.',
                 'meta_keywords' => 'Google Shopping ads, Merchant Center, product feed optimization, smart shopping, dynamic remarketing, Performance Max, ecommerce advertising',
                 'order_position' => 12,
                 'subtopics' => json_encode([
                     ['title' => '🔥 Google Shopping Fundamentals', 'is_heading' => true, 'order_position' => 1],
                     ['id' => 'topic-1', 'title' => '1 What is Google Shopping & How It Works', 'order_position' => 2],
                     ['id' => 'topic-2', 'title' => '2 Google Shopping vs Performance Max', 'order_position' => 3],
                     ['id' => 'topic-3', 'title' => '3 Key Metrics for Google Shopping Campaigns', 'order_position' => 4],
                     ['id' => 'topic-4', 'title' => '4 Understanding Profitability & ROAS in Google Shopping', 'order_position' => 5],
                     ['title' => '🔥 Merchant Center & Product Feed Setup', 'is_heading' => true, 'order_position' => 6],
                     ['id' => 'topic-5', 'title' => '5 Google Merchant Center Setup', 'order_position' => 7],
                     ['id' => 'topic-6', 'title' => '6 Product Feed Optimization', 'order_position' => 8],
                     ['id' => 'topic-7', 'title' => '7 Merchant Center Suspension Prevention', 'order_position' => 9],
                     ['title' => '🔥 Shopping Campaign Creation & Management', 'is_heading' => true, 'order_position' => 10],
                     ['id' => 'topic-8', 'title' => '8 Shopping Campaign Structure', 'order_position' => 11],
                     ['id' => 'topic-9', 'title' => '9 How to Create a Shopping Campaign', 'order_position' => 12],
                     ['id' => 'topic-10', 'title' => '10 Bidding Strategies for Shopping Campaigns', 'order_position' => 13],
                     ['title' => '🔥 Optimization & Troubleshooting', 'is_heading' => true, 'order_position' => 14],
                     ['id' => 'topic-11', 'title' => '11 Shopping Campaign Optimization', 'order_position' => 15],
                     ['id' => 'topic-12', 'title' => '12 Troubleshooting Shopping Campaigns', 'order_position' => 16],
                 ]),
                 'is_published' => true,
             ],
             // =====================================================
             // Module 13: Google Ads for Local Businesses
             // =====================================================
             [
                 'user_id' => 1,
                 'service_type_id' => 5,
                 'product_slug' => 'google-ads-for-beginners',
                 'title' => 'Google Ads for Local Businesses',
                 'slug' => 'google-ads-local-business',
                 'meta_title' => 'Local Google Ads: GMB, Call-Only & Local Service Ads',
                 'meta_description' => 'Learn Google Ads for local businesses: Google My Business integration, call-only campaigns, Local Service Ads (LSA), geo-fencing, and reputation management.',
                 'meta_keywords' => 'local Google Ads, Google My Business integration, call-only campaigns, Local Service Ads, geo-fencing, radius targeting, reputation management',
                 'order_position' => 13,
                 'subtopics' => json_encode([
                     ['title' => 'Google Ads Fundamentals for Local Business', 'is_heading' => true, 'order_position' => 1],
                     ['id' => 'topic-1', 'title' => '1 Google Ads Account Setup for Local Businesses', 'order_position' => 2],
                     ['id' => 'topic-2', 'title' => '2 Campaign Structure for Local Businesses', 'order_position' => 3],
                     ['id' => 'topic-3', 'title' => '3 Keyword Research & Match Types for Local Businesses', 'order_position' => 4],
                     ['id' => 'topic-4', 'title' => '4 Network & Location Targeting for Local Businesses', 'order_position' => 5],
                     ['id' => 'topic-5', 'title' => '5 Ad Scheduling & Budgeting for Local Businesses', 'order_position' => 6],
                     ['title' => 'Ad Creation & Landing Pages', 'is_heading' => true, 'order_position' => 7],
                     ['id' => 'topic-6', 'title' => '6 Ad Copy for Local Businesses', 'order_position' => 8],
                     ['id' => 'topic-7', 'title' => '7 Landing Pages for Local Businesses', 'order_position' => 9],
                     ['title' => 'Bidding & Conversion Tracking', 'is_heading' => true, 'order_position' => 10],
                     ['id' => 'topic-8', 'title' => '8 Bidding Strategies for Local Businesses', 'order_position' => 11],
                     ['id' => 'topic-9', 'title' => '9 Conversion Tracking for Local Businesses', 'order_position' => 12],
                     ['title' => 'Advanced Local Strategies', 'is_heading' => true, 'order_position' => 13],
                     ['id' => 'topic-10', 'title' => '10 Google My Business Integration', 'order_position' => 14],
                     ['id' => 'topic-11', 'title' => '11 Negative Keywords & Ongoing Optimization', 'order_position' => 15],
                     ['id' => 'topic-12', 'title' => '12 Google\'s Recommendations & Auto-Apply Settings', 'order_position' => 16],
                     ['id' => 'topic-13', 'title' => '13 Local Service Ads (LSA) - Complete Guide', 'order_position' => 17],
                 ]),
                 'is_published' => true,
             ],
             // =====================================================
             // Module 14: Advanced Strategies & Automation
             // =====================================================
             [
                 'user_id' => 1,
                 'service_type_id' => 5,
                 'product_slug' => 'google-ads-for-beginners',
                 'title' => 'Advanced Strategies & Automation',
                 'slug' => 'google-ads-advanced-automation',
                 'meta_title' => 'Google Ads Automation: Scripts, Rules & AI Bidding',
                 'meta_description' => 'Advanced Google Ads strategies: smart campaigns, AI bidding, automation rules, scripts, responsive display, Performance Max, A/B testing and scaling frameworks.',
                 'meta_keywords' => 'automation rules, Google Ads scripts, AI bidding, smart campaigns, responsive display, A/B testing, scaling frameworks, campaign optimization',
                 'order_position' => 14,
                 'subtopics' => json_encode([
                     ['id' => 'topic-1', 'title' => '1 Smart Campaigns & AI Bidding', 'order_position' => 1],
                     ['id' => 'topic-2', 'title' => '2 Automation Rules & Scripts', 'order_position' => 2],
                     ['id' => 'topic-3', 'title' => '3 Responsive Display & Performance Max', 'order_position' => 3],
                     ['id' => 'topic-4', 'title' => '4 A/B Testing & Experiment Setup', 'order_position' => 4],
                     ['id' => 'topic-5', 'title' => '5 Scaling & Optimization Frameworks', 'order_position' => 5],
                     ['id' => 'topic-6', 'title' => '6 Using Google Ads Editor for Bulk Management', 'order_position' => 6],
                 ]),
                 'is_published' => true,
             ],
             // =====================================================
             // Module 15: Google Ads Optimization Mastery
             // =====================================================
             [
                 'user_id' => 1,
                 'service_type_id' => 5,
                 'product_slug' => 'google-ads-for-beginners',
                 'title' => 'Google Ads Optimization Mastery',
                 'slug' => 'google-ads-optimization-mastery',
                 'meta_title' => 'Google Ads Optimization: Increase CTR & Reduce CPC',
                 'meta_description' => 'Master Google Ads optimization: proven ways to increase CTR, reduce CPC, find budget for keywords, keyword research do\'s and don\'ts, and industry benchmarks.',
                 'meta_keywords' => 'increase CTR, reduce CPC, budget allocation, keyword optimization, CTR benchmarks, CPC reduction, optimization techniques',
                 'order_position' => 15,
                 'subtopics' => json_encode([
                     ['id' => 'topic-1', 'title' => '1 How to Increase CTR (15 Proven Ways)', 'order_position' => 1],
                     ['id' => 'topic-2', 'title' => '2 How to Find Budget for Keywords', 'order_position' => 2],
                     ['id' => 'topic-3', 'title' => '3 Keyword Research Do\'s & Don\'ts', 'order_position' => 3],
                     ['id' => 'topic-4', 'title' => '4 CTR Benchmarks & Agency Fees', 'order_position' => 4],
                     ['id' => 'topic-5', 'title' => '5 Industry CTR Benchmarks', 'order_position' => 5],
                 ]),
                 'is_published' => true,
             ],
             // =====================================================
             // Module 16: Advanced Optimization & Scaling
             // =====================================================
             [
                 'user_id' => 1,
                 'service_type_id' => 5,
                 'product_slug' => 'google-ads-for-beginners',
                 'title' => 'Advanced Optimization & Scaling',
                 'slug' => 'google-ads-scaling-strategies',
                 'meta_title' => 'Google Ads Scaling: Budget Strategies & Agency Management',
                 'meta_description' => 'Scale Google Ads successfully: budget scaling strategies, campaign structure for large accounts, multi-location management, and agency-level account handling.',
                 'meta_keywords' => 'budget scaling, large account management, multi-location campaigns, agency management, campaign structure, account scaling strategies',
                 'order_position' => 16,
                 'subtopics' => json_encode([
                     ['id' => 'topic-1', 'title' => '1 Budget Scaling Strategies', 'order_position' => 1],
                     ['id' => 'topic-2', 'title' => '2 Campaign Structure for Large Accounts', 'order_position' => 2],
                     ['id' => 'topic-3', 'title' => '3 Multi-Location Campaign Management', 'order_position' => 3],
                     ['id' => 'topic-4', 'title' => '4 Agency-Level Google Ads Management', 'order_position' => 4],
                 ]),
                 'is_published' => true,
             ],
             // =====================================================
             // Module 17: Google Ads Account Audit
             // =====================================================
             [
                 'user_id' => 1,
                 'service_type_id' => 5,
                 'product_slug' => 'google-ads-for-beginners',
                 'title' => 'Google Ads Account Audit',
                 'slug' => 'google-ads-account-audit',
                 'meta_title' => 'Google Ads Account Audit: Complete Checklist & Guide',
                 'meta_description' => 'Complete Google Ads account audit: account structure, campaign settings, ad groups, keywords, search terms, ads, extensions, landing pages and conversion tracking.',
                 'meta_keywords' => 'Google Ads audit, account audit checklist, campaign audit, keyword audit, ad extensions audit, landing page audit, conversion tracking audit',
                 'order_position' => 17,
                 'subtopics' => json_encode([
                     ['title' => 'Why Audit & Account Level Checks', 'is_heading' => true, 'order_position' => 1],
                     ['id' => 'topic-1', 'title' => '1 Why Audit a Google Ads Account?', 'order_position' => 2],
                     ['id' => 'topic-2', 'title' => '2 Account Structure & Settings Audit', 'order_position' => 3],
                     ['title' => 'Campaign & Ad Group Audit', 'is_heading' => true, 'order_position' => 4],
                     ['id' => 'topic-3', 'title' => '3 Campaign & Ad Group Performance Audit', 'order_position' => 5],
                     ['id' => 'topic-4', 'title' => '4 Keywords & Search Terms Audit', 'order_position' => 6],
                     ['title' => 'Creative, Tracking & Billing Audit', 'is_heading' => true, 'order_position' => 7],
                     ['id' => 'topic-5', 'title' => '5 Ads, Extensions & Landing Pages Audit', 'order_position' => 8],
                     ['id' => 'topic-6', 'title' => '6 Conversion Tracking & Billing Audit', 'order_position' => 9],
                     ['title' => 'Audit Implementation & Action Plan', 'is_heading' => true, 'order_position' => 10],
                     ['id' => 'topic-7', 'title' => '7 The 10-Minute Weekly Audit Checklist', 'order_position' => 11],
                     ['id' => 'topic-8', 'title' => '8 Three-Step Account Audit Process', 'order_position' => 12],
                     ['id' => 'topic-9', 'title' => '9 Common Google Ads Mistakes & How to Fix Them', 'order_position' => 13],
                     ['id' => 'topic-10', 'title' => '10 Live Account Audit Walkthrough', 'order_position' => 14],
                     ['title' => '🤖 AI-Powered Audit & Optimization Prompts', 'is_heading' => true, 'order_position' => 15],
                     ['id' => 'topic-11', 'title' => '11 Google Ads Audit Prompt Engineering (AI-Powered)', 'order_position' => 16],
                     ['id' => 'topic-12', 'title' => '12 Action Plan Generation from Audit Findings (AI Prompts)', 'order_position' => 17],
                     ['id' => 'topic-13', 'title' => '13 Performance Improvement Recommendations (AI Prompts)', 'order_position' => 18],
                     ['title' => '📋 Google Ads Audit Resources', 'is_heading' => true, 'order_position' => 19],
                     ['id' => 'topic-14', 'title' => '14 Complete Google Ads Account Audit Checklist (50+ Points)', 'order_position' => 20],
                     ['title' => '📝 Assessment & Quiz', 'is_heading' => true, 'order_position' => 21],
                     ['id' => 'topic-15', 'title' => '15 Google Ads Account Audit Quiz (25+ MCQs with Answers & Explanations)', 'order_position' => 22],
                 ]),
                 'is_published' => true,
             ],
             // =====================================================
             // Module 18: Real Campaign Execution System
             // =====================================================
             [
                 'user_id' => 1,
                 'service_type_id' => 5,
                 'product_slug' => 'google-ads-for-beginners',
                 'title' => 'Real Campaign Execution System',
                 'slug' => 'google-ads-campaign-execution',
                 'meta_title' => 'Google Ads Campaign Execution: Launch Blueprint & Strategy',
                 'meta_description' => 'Execute Google Ads campaigns successfully: launch blueprint, keyword setup, negative keywords, ad creation formula, day 1-7 optimization and scaling strategy.',
                 'meta_keywords' => 'campaign launch, keyword setup, negative keywords, ad creation, day 1-7 optimization, scaling campaigns, campaign execution blueprint',
                 'order_position' => 18,
                 'subtopics' => json_encode([
                     ['id' => 'topic-1', 'title' => '1 Campaign Launch Blueprint', 'order_position' => 1],
                     ['id' => 'topic-2', 'title' => '2 Keyword Setup & Match Types', 'order_position' => 2],
                     ['id' => 'topic-3', 'title' => '3 Negative Keywords Implementation', 'order_position' => 3],
                     ['id' => 'topic-4', 'title' => '4 Ad Creation Formula', 'order_position' => 4],
                     ['id' => 'topic-5', 'title' => '5 Day 1–7 Optimization Strategy', 'order_position' => 5],
                     ['id' => 'topic-6', 'title' => '6 Scaling Winning Campaigns', 'order_position' => 6],
                 ]),
                 'is_published' => true,
             ],
             // =====================================================
             // Module 19: Real Campaign Case Studies
             // =====================================================
             [
                 'user_id' => 1,
                 'service_type_id' => 5,
                 'product_slug' => 'google-ads-for-beginners',
                 'title' => 'Real Campaign Case Studies',
                 'slug' => 'google-ads-case-studies',
                 'meta_title' => 'Google Ads Case Studies: Local Business & E-commerce',
                 'meta_description' => 'Real Google Ads case studies: local business lead generation, e-commerce conversion campaigns, scaling from ₹500/day to ₹5000/day, and fixing high CPC campaigns.',
                 'meta_keywords' => 'Google Ads case studies, local business leads, e-commerce conversions, scaling campaigns, high CPC fix, real campaign results',
                 'order_position' => 19,
                 'subtopics' => json_encode([
                     ['id' => 'topic-1', 'title' => '1 Local Business Lead Generation Campaign', 'order_position' => 1],
                     ['id' => 'topic-2', 'title' => '2 E-commerce Conversion Campaign', 'order_position' => 2],
                     ['id' => 'topic-3', 'title' => '3 Scaling a Campaign from ₹500/day to ₹5000/day', 'order_position' => 3],
                     ['id' => 'topic-4', 'title' => '4 Fixing High CPC Campaigns', 'order_position' => 4],
                 ]),
                 'is_published' => true,
             ],
             // =====================================================
             // Module 20: Psychology & Sales Strategy
             // =====================================================
             [
                 'user_id' => 1,
                 'service_type_id' => 5,
                 'product_slug' => 'google-ads-for-beginners',
                 'title' => 'Psychology & Sales Strategy',
                 'slug' => 'google-ads-psychology-sales',
                 'meta_title' => 'Google Ads Psychology: Buyer Psychology & Emotional Triggers',
                 'meta_description' => 'Learn psychology in Google Ads: buyer psychology basics, emotional triggers, high-converting ad hooks, emotional copywriting, and funnel strategy for conversions.',
                 'meta_keywords' => 'buyer psychology, emotional triggers, ad hooks, emotional copywriting, funnel strategy, conversion psychology, sales strategy',
                 'order_position' => 20,
                 'subtopics' => json_encode([
                     ['id' => 'topic-1', 'title' => '1 Buyer Psychology Basics', 'order_position' => 1],
                     ['id' => 'topic-2', 'title' => '2 Emotional Triggers', 'order_position' => 2],
                     ['id' => 'topic-3', 'title' => '3 High-Converting Ad Hooks', 'order_position' => 3],
                     ['id' => 'topic-4', 'title' => '4 Emotional Copywriting', 'order_position' => 4],
                     ['id' => 'topic-5', 'title' => '5 Funnel Strategy', 'order_position' => 5],
                 ]),
                 'is_published' => true,
             ],
             // =====================================================
             // Module 21: Freelancing & Client System
             // =====================================================
             [
                 'user_id' => 1,
                 'service_type_id' => 5,
                 'product_slug' => 'google-ads-for-beginners',
                 'title' => 'Freelancing & Client System',
                 'slug' => 'google-ads-freelancing-clients',
                 'meta_title' => 'Google Ads Freelancing: Client Acquisition & Pricing',
                 'meta_description' => 'Build Google Ads freelancing career: client acquisition platforms, high-demand niches, pricing strategy, proposal writing template, and client closing techniques.',
                 'meta_keywords' => 'Google Ads freelancing, client acquisition, pricing strategy, proposal template, client closing, high-demand niches, freelancing platforms',
                 'order_position' => 21,
                 'subtopics' => json_encode([
                     ['id' => 'topic-1', 'title' => '1 Client Acquisition Platforms', 'order_position' => 1],
                     ['id' => 'topic-2', 'title' => '2 High-Demand Niches', 'order_position' => 2],
                     ['id' => 'topic-3', 'title' => '3 Pricing Strategy', 'order_position' => 3],
                     ['id' => 'topic-4', 'title' => '4 Proposal Writing Template', 'order_position' => 4],
                     ['id' => 'topic-5', 'title' => '5 Client Closing Techniques', 'order_position' => 5],
                 ]),
                 'is_published' => true,
             ],
             // =====================================================
             // Module 22: Reporting, Insights & Certification
             // =====================================================
             [
                 'user_id' => 1,
                 'service_type_id' => 5,
                 'product_slug' => 'google-ads-for-beginners',
                 'title' => 'Reporting, Insights & Certification',
                 'slug' => 'google-ads-reporting-certification',
                 'meta_title' => 'Google Ads Reporting: Dashboards, KPIs & Certification',
                 'meta_description' => 'Master Google Ads reporting: custom reports, dashboards, KPI tracking, ROI analysis, certification preparation, career paths, and industry benchmarks.',
                 'meta_keywords' => 'Google Ads reporting, custom dashboards, KPI tracking, ROI analysis, certification prep, career paths, industry benchmarks',
                 'order_position' => 22,
                 'subtopics' => json_encode([
                     ['id' => 'topic-1', 'title' => '1 Understanding Google Ads Reports', 'order_position' => 1],
                     ['id' => 'topic-2', 'title' => '2 Custom Reports & Dashboards', 'order_position' => 2],
                     ['id' => 'topic-3', 'title' => '3 KPI Tracking & ROI Analysis', 'order_position' => 3],
                     ['id' => 'topic-4', 'title' => '4 Google Ads Certification Preparation', 'order_position' => 4],
                     ['id' => 'topic-5', 'title' => '5 Career Paths in Google Ads & Freelancing', 'order_position' => 5],
                     ['id' => 'topic-6', 'title' => '6 Industry Benchmarks for CTR, CPC, CPA & ROAS', 'order_position' => 6],
                     ['id' => 'topic-7', 'title' => '7 Using Looker Studio for Google Ads Reporting', 'order_position' => 7],
                 ]),
                 'is_published' => true,
             ],
             // =====================================================
             // Module 23: Automation in Google Ads
             // =====================================================
             [
                 'user_id' => 1,
                 'service_type_id' => 5,
                 'product_slug' => 'google-ads-for-beginners',
                 'title' => 'Automation in Google Ads',
                 'slug' => 'google-ads-automation',
                 'meta_title' => 'Google Ads Automation: AI Ad Copy & Smart Bidding',
                 'meta_description' => 'Learn Google Ads automation: AI for ad copy creation, AI keyword research, automation tools overview, automated rules, and smart bidding strategies.',
                 'meta_keywords' => 'AI ad copy, AI keyword research, automation tools, automated rules, smart bidding, Google Ads automation, machine learning',
                 'order_position' => 23,
                 'subtopics' => json_encode([
                     ['id' => 'topic-automation-1', 'title' => '1 AI for Ad Copy Creation', 'order_position' => 1],
                     ['id' => 'topic-automation-2', 'title' => '2 AI Keyword Research', 'order_position' => 2],
                     ['id' => 'topic-automation-3', 'title' => '3 Automation Tools Overview', 'order_position' => 3],
                     ['id' => 'topic-automation-4', 'title' => '4 Automated Rules Setup', 'order_position' => 4],
                     ['id' => 'topic-automation-5', 'title' => '5 Smart Bidding Strategies', 'order_position' => 5],
                 ]),
                 'is_published' => true,
             ],
             // =====================================================
             // Module 24: AI Prompt Engineering & Asset Generation
             // =====================================================
             [
                 'user_id' => 1,
                 'service_type_id' => 5,
                 'product_slug' => 'google-ads-for-beginners',
                 'title' => 'AI Prompt Engineering & Asset Generation',
                 'slug' => 'google-ads-prompt-engineering',
                 'meta_title' => 'AI Prompt Engineering for Google Ads: Keywords & Copy',
                 'meta_description' => 'Master AI prompt engineering for Google Ads: keyword generation, ad copy creation, negative keywords, search intent analysis, competitor analysis and A/B testing.',
                 'meta_keywords' => 'prompt engineering, AI keyword generation, ad copy prompts, negative keywords, search intent analysis, competitor analysis, A/B testing',
                 'order_position' => 24,
                 'subtopics' => json_encode([
                     // ========== SECTION 1: FOUNDATIONS ==========
                     ['id' => 'topic-prompt-1', 'title' => '1. Introduction to Prompt Engineering', 'order_position' => 1],
                     ['id' => 'topic-prompt-2', 'title' => '2. Prompt Structure & Best Practices', 'order_position' => 2],
                     // ========== SECTION 2: KEYWORD GENERATION ==========
                     ['title' => '🔑 Keyword Generation Prompts', 'is_heading' => true, 'order_position' => 3],
                     ['id' => 'topic-prompt-3', 'title' => '3. One Keyword to Multiple Keywords', 'order_position' => 4],
                     ['id' => 'topic-prompt-4', 'title' => '4. Business Name to Keyword Generation', 'order_position' => 5],
                     ['id' => 'topic-prompt-5', 'title' => '5. Location-Based Keyword Prompts', 'order_position' => 6],
                     ['id' => 'topic-prompt-6', 'title' => '6. Long-Tail Keyword Generation', 'order_position' => 7],
                     // ========== SECTION 3: AD COPY GENERATION ==========
                     ['title' => '📝 Ad Copy Generation Prompts', 'is_heading' => true, 'order_position' => 8],
                     ['id' => 'topic-prompt-7', 'title' => '7. Create Google Ads (RSA) Copy', 'order_position' => 9],
                     ['id' => 'topic-prompt-8', 'title' => '8. High-Converting Headlines Generation', 'order_position' => 10],
                     ['id' => 'topic-prompt-9', 'title' => '9. Description Writing Prompts', 'order_position' => 11],
                     ['id' => 'topic-prompt-10', 'title' => '10. Ad Extensions Generation', 'order_position' => 12],
                     ['id' => 'topic-prompt-11', 'title' => '11. Generating Multiple Ad Copies from Existing Copy', 'order_position' => 13],
                     ['id' => 'topic-prompt-12', 'title' => '12. One Ad Copy to Two Ad Copies (Variation Generation)', 'order_position' => 14],
                     ['id' => 'topic-prompt-13', 'title' => '13. One Ad Copy to Multiple Ad Copies (Batch Generation)', 'order_position' => 15],
                     // ========== SECTION 4: ADVANCED COPY & FRAMEWORKS ==========
                     ['title' => '🎯 Advanced Copy & Copywriting Frameworks', 'is_heading' => true, 'order_position' => 16],
                     ['id' => 'topic-prompt-14', 'title' => '14. Effective Ad Copy Frameworks (AIDA, PAS, BAB)', 'order_position' => 17],
                     ['id' => 'topic-prompt-15', 'title' => '15. Generating AIDA Copy Variations', 'order_position' => 18],
                     ['id' => 'topic-prompt-16', 'title' => '16. Generating PAS Copy Variations', 'order_position' => 19],
                     ['id' => 'topic-prompt-17', 'title' => '17. Generating BAB Copy Variations', 'order_position' => 20],
                     ['id' => 'topic-prompt-18', 'title' => '18. CTA & Funnel Copy Prompts', 'order_position' => 21],
                     ['id' => 'topic-prompt-19', 'title' => '19. Landing Page Content Generation', 'order_position' => 22],
                     // ========== SECTION 5: AUDIENCE & COMPETITOR ==========
                     ['title' => '🔍 Audience & Competitor Analysis Prompts', 'is_heading' => true, 'order_position' => 23],
                     ['id' => 'topic-prompt-20', 'title' => '20. Negative Keywords Generation', 'order_position' => 24],
                     ['id' => 'topic-prompt-21', 'title' => '21. Search Intent Analysis Prompts', 'order_position' => 25],
                     ['id' => 'topic-prompt-22', 'title' => '22. Competitor Analysis Prompts', 'order_position' => 26],
                     // ========== SECTION 6: TESTING & OPTIMIZATION ==========
                     ['title' => '🧪 Testing & Optimization Prompts', 'is_heading' => true, 'order_position' => 27],
                     ['id' => 'topic-prompt-23', 'title' => '23. A/B Testing Prompts', 'order_position' => 28],
                     ['id' => 'topic-prompt-24', 'title' => '24. Campaign Optimization Prompts', 'order_position' => 29],
                 ]),
                 'is_published' => true,
             ],
             // =====================================================
             // Module 25: Google Ads Tools & Resources
             // =====================================================
             [
                 'user_id' => 1,
                 'service_type_id' => 5,
                 'product_slug' => 'google-ads-for-beginners',
                 'title' => 'Google Ads Tools & Resources',
                 'slug' => 'google-ads-tools-resources',
                 'meta_title' => 'Google Ads Tools: Keyword Planner, Editor & Analytics',
                 'meta_description' => 'Essential Google Ads tools: Keyword Planner, Google Ads Editor, Google Analytics integration, Tag Manager, conversion tracking, and reporting dashboards.',
                 'meta_keywords' => 'Keyword Planner, Google Ads Editor, Google Analytics, Google Tag Manager, conversion tools, keyword research tools, competitor analysis',
                 'order_position' => 25,
                 'subtopics' => json_encode([
                     ['id' => 'topic-tools-1', 'title' => '1. Keyword Planner Tool', 'order_position' => 1],
                     ['id' => 'topic-tools-2', 'title' => '2. Google Ads Editor', 'order_position' => 2],
                     ['id' => 'topic-tools-3', 'title' => '3. Google Analytics Integration', 'order_position' => 3],
                     ['id' => 'topic-tools-4', 'title' => '4. Google Tag Manager Setup', 'order_position' => 4],
                     ['id' => 'topic-tools-5', 'title' => '5. Conversion Tracking Tools', 'order_position' => 5],
                     ['id' => 'topic-tools-6', 'title' => '6. Keyword Research Tools', 'order_position' => 6],
                     ['id' => 'topic-tools-7', 'title' => '7. Competitor Analysis Tools', 'order_position' => 7],
                     ['id' => 'topic-tools-8', 'title' => '8. Landing Page Tools', 'order_position' => 8],
                     ['id' => 'topic-tools-9', 'title' => '9. Automation & Scripts Tools', 'order_position' => 9],
                     ['id' => 'topic-tools-10', 'title' => '10. Reporting & Dashboard Tools', 'order_position' => 10],
                 ]),
                 'is_published' => true,
             ],
             // =====================================================
             // Module 26: Google Ads Interview Preparation
             // =====================================================
             [
                 'user_id' => 1,
                 'service_type_id' => 5,
                 'product_slug' => 'google-ads-for-beginners',
                 'title' => 'Google Ads Interview Preparation',
                 'slug' => 'google-ads-interview-preparation',
                 'meta_title' => 'Google Ads Interview Q&A: Basics & Scenario Questions',
                 'meta_description' => 'Prepare for Google Ads interviews: basic questions, campaign structure, bidding strategies, conversion tracking, scenario-based questions, and career tips.',
                 'meta_keywords' => 'Google Ads interview, interview questions, campaign structure, bidding strategies, conversion tracking, scenario questions, certification',
                 'order_position' => 26,
                 'subtopics' => json_encode([
                     ['id' => 'topic-interview-1', 'title' => '1. Basic Google Ads Interview Questions', 'order_position' => 1],
                     ['id' => 'topic-interview-2', 'title' => '2. Campaign Structure & Optimization Questions', 'order_position' => 2],
                     ['id' => 'topic-interview-3', 'title' => '3. Bidding Strategies & Budget Questions', 'order_position' => 3],
                     ['id' => 'topic-interview-4', 'title' => '4. Conversion Tracking & Analytics Questions', 'order_position' => 4],
                     ['id' => 'topic-interview-5', 'title' => '5. Real Google Ads Scenario-Based Questions', 'order_position' => 5],
                     ['id' => 'topic-interview-6', 'title' => '6. Google Ads Certification & Career Tips', 'order_position' => 6],
                     ['id' => 'topic-interview-7', 'title' => '7. Freelancing & Agency Client Acquisition', 'order_position' => 7],
                 ]),
                 'is_published' => true,
             ],
         ];
         // Insert all modules with duplicate checking
         foreach ($modules as $module) {
             $exists = DB::table('modules')->where('slug', $module['slug'])->exists();
             if (!$exists) {
                 DB::table('modules')->insert(array_merge($module, [
                     'created_at' => now(),
                     'updated_at' => now(),
                 ]));
             }
         }
     }
}