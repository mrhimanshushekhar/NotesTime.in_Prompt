<?php

// database/seeders/FinanceFundamentals/FinanceFundamentalsForBeginnersSeeder.php

namespace Database\Seeders\FinanceFundamentals;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FinanceFundamentalsForBeginnersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $modules = [
            // =====================================================
            // Module 01: Introduction to Finance & Financial Literacy
            // =====================================================
            [
                'user_id' => 1,
                'service_type_id' => 1,
                'product_slug' => 'finance-fundamentals-for-beginners',
                'title' => 'Introduction to Finance & Financial Literacy',
                'slug' => 'introduction-to-finance-financial-literacy',
                'meta_title' => 'Introduction to Finance & Financial Literacy: Money Management Basics',
                'meta_description' => 'Learn finance fundamentals, financial literacy, money management, personal finance, financial planning, budgeting basics, and building financial security.',
                'meta_keywords' => 'finance fundamentals, financial literacy, money management, personal finance basics, financial planning, financial education, wealth building',
                'order_position' => 1,
                'subtopics' => json_encode([
                    ['id' => 'topic-1', 'title' => '1. What is Finance? – Definition & Scope', 'order_position' => 1],
                    ['id' => 'topic-2', 'title' => '2. Why Financial Literacy Matters', 'order_position' => 2],
                    ['id' => 'topic-3', 'title' => '3. Key Finance Concepts: Income, Expenses, Assets, Liabilities', 'order_position' => 3],
                    ['id' => 'topic-4', 'title' => '4. The Psychology of Money & Financial Mindset', 'order_position' => 4],
                    ['id' => 'topic-5', 'title' => '5. Financial Goals: Short-Term, Medium-Term & Long-Term', 'order_position' => 5],
                    ['id' => 'topic-6', 'title' => '6. Overview of Personal vs Corporate Finance', 'order_position' => 6],
                ]),
                'is_published' => true,
            ],
            // =====================================================
            // Module 02: Income & Expense Management
            // =====================================================
            [
                'user_id' => 1,
                'service_type_id' => 1,
                'product_slug' => 'finance-fundamentals-for-beginners',
                'title' => 'Income & Expense Management',
                'slug' => 'income-expense-management',
                'meta_title' => 'Income & Expense Management: Track Cash Flow & Budgeting',
                'meta_description' => 'Master income and expense tracking, cash flow management, budgeting systems, expense categories, income streams, and financial tracking tools.',
                'meta_keywords' => 'income management, expense tracking, cash flow, budgeting basics, income streams, financial tracking, expense categories',
                'order_position' => 2,
                'subtopics' => json_encode([
                    ['id' => 'topic-1', 'title' => '1. Understanding Income Sources & Types', 'order_position' => 1],
                    ['id' => 'topic-2', 'title' => '2. Categorizing Expenses: Fixed vs Variable', 'order_position' => 2],
                    ['id' => 'topic-3', 'title' => '3. Tracking Cash Flow: Income Statement Basics', 'order_position' => 3],
                    ['id' => 'topic-4', 'title' => '4. Tools for Tracking Income & Expenses', 'order_position' => 4],
                    ['id' => 'topic-5', 'title' => '5. Practical Lab: Creating a Personal Income Statement', 'order_position' => 5],
                ]),
                'is_published' => true,
            ],
            // =====================================================
            // Module 03: Budgeting Fundamentals
            // =====================================================
            [
                'user_id' => 1,
                'service_type_id' => 1,
                'product_slug' => 'finance-fundamentals-for-beginners',
                'title' => 'Budgeting Fundamentals',
                'slug' => 'budgeting-fundamentals',
                'meta_title' => 'Budgeting Fundamentals: Create & Manage Budgets Effectively',
                'meta_description' => 'Learn budgeting fundamentals including zero-based budgeting, 50/30/20 rule, envelope system, creating budgets, and budget management strategies.',
                'meta_keywords' => 'budgeting fundamentals, zero-based budgeting, 50/30/20 rule, envelope system, budget creation, budget management, financial planning',
                'order_position' => 3,
                'subtopics' => json_encode([
                    ['title' => '📊 Budgeting Systems', 'is_heading' => true, 'order_position' => 1],
                    ['id' => 'topic-1', 'title' => '1. What is a Budget? – Definition & Importance', 'order_position' => 2],
                    ['id' => 'topic-2', 'title' => '2. The 50/30/20 Budgeting Rule', 'order_position' => 3],
                    ['id' => 'topic-3', 'title' => '3. Zero-Based Budgeting', 'order_position' => 4],
                    ['id' => 'topic-4', 'title' => '4. Envelope System & Cash Budgeting', 'order_position' => 5],
                    ['title' => '📝 Creating & Managing Budgets', 'is_heading' => true, 'order_position' => 6],
                    ['id' => 'topic-5', 'title' => '5. Step-by-Step: Creating Your First Budget', 'order_position' => 7],
                    ['id' => 'topic-6', 'title' => '6. Budget Tracking & Adjustment Strategies', 'order_position' => 8],
                    ['id' => 'topic-7', 'title' => '7. Practical Lab: Build a Budget Spreadsheet', 'order_position' => 9],
                ]),
                'is_published' => true,
            ],
            // =====================================================
            // Module 04: Banking & Financial Institutions
            // =====================================================
            [
                'user_id' => 1,
                'service_type_id' => 1,
                'product_slug' => 'finance-fundamentals-for-beginners',
                'title' => 'Banking & Financial Institutions',
                'slug' => 'banking-financial-institutions',
                'meta_title' => 'Banking & Financial Institutions: Accounts, Cards & Services',
                'meta_description' => 'Understand banking fundamentals including checking accounts, savings accounts, credit cards, debit cards, interest rates, and financial institutions.',
                'meta_keywords' => 'banking basics, checking account, savings account, credit cards, debit cards, interest rates, financial institutions, banking services',
                'order_position' => 4,
                'subtopics' => json_encode([
                    ['title' => '🏦 Banking Basics', 'is_heading' => true, 'order_position' => 1],
                    ['id' => 'topic-1', 'title' => '1. Overview of Financial Institutions', 'order_position' => 2],
                    ['id' => 'topic-2', 'title' => '2. Checking Accounts – Features & Benefits', 'order_position' => 3],
                    ['id' => 'topic-3', 'title' => '3. Savings Accounts & Interest Rates', 'order_position' => 4],
                    ['title' => '💳 Payment Methods', 'is_heading' => true, 'order_position' => 5],
                    ['id' => 'topic-4', 'title' => '4. Credit Cards – How They Work & Interest Calculations', 'order_position' => 6],
                    ['id' => 'topic-5', 'title' => '5. Debit Cards vs Credit Cards – Pros & Cons', 'order_position' => 7],
                    ['id' => 'topic-6', 'title' => '6. Online Banking & Digital Wallets', 'order_position' => 8],
                ]),
                'is_published' => true,
            ],
            // =====================================================
            // Module 05: Debt Management & Credit Scores
            // =====================================================
            [
                'user_id' => 1,
                'service_type_id' => 1,
                'product_slug' => 'finance-fundamentals-for-beginners',
                'title' => 'Debt Management & Credit Scores',
                'slug' => 'debt-management-credit-scores',
                'meta_title' => 'Debt Management & Credit Scores: Strategies for Financial Freedom',
                'meta_description' => 'Master debt management strategies, credit score improvement, debt repayment methods, types of debt, credit reports, and building good credit.',
                'meta_keywords' => 'debt management, credit score, credit report, debt repayment, debt snowball, debt avalanche, credit building, financial freedom',
                'order_position' => 5,
                'subtopics' => json_encode([
                    ['title' => '📋 Understanding Debt', 'is_heading' => true, 'order_position' => 1],
                    ['id' => 'topic-1', 'title' => '1. Types of Debt: Good vs Bad Debt', 'order_position' => 2],
                    ['id' => 'topic-2', 'title' => '2. Understanding Credit Scores & Reports', 'order_position' => 3],
                    ['id' => 'topic-3', 'title' => '3. How Credit Scores are Calculated', 'order_position' => 4],
                    ['title' => '💰 Debt Repayment Strategies', 'is_heading' => true, 'order_position' => 5],
                    ['id' => 'topic-4', 'title' => '4. Debt Snowball Method', 'order_position' => 6],
                    ['id' => 'topic-5', 'title' => '5. Debt Avalanche Method', 'order_position' => 7],
                    ['id' => 'topic-6', 'title' => '6. Debt Consolidation & Refinancing', 'order_position' => 8],
                    ['id' => 'topic-7', 'title' => '7. Practical Lab: Creating a Debt Repayment Plan', 'order_position' => 9],
                ]),
                'is_published' => true,
            ],
            // =====================================================
            // Module 06: Savings & Emergency Funds
            // =====================================================
            [
                'user_id' => 1,
                'service_type_id' => 1,
                'product_slug' => 'finance-fundamentals-for-beginners',
                'title' => 'Savings & Emergency Funds',
                'slug' => 'savings-emergency-funds',
                'meta_title' => 'Savings & Emergency Funds: Build Financial Security',
                'meta_description' => 'Learn savings strategies, emergency fund essentials, types of savings accounts, automated saving, and building a financial safety net.',
                'meta_keywords' => 'savings strategy, emergency fund, financial security, savings accounts, automated saving, financial safety net, saving money',
                'order_position' => 6,
                'subtopics' => json_encode([
                    ['id' => 'topic-1', 'title' => '1. Importance of Saving Money', 'order_position' => 1],
                    ['id' => 'topic-2', 'title' => '2. The Emergency Fund – Why & How Much to Save', 'order_position' => 2],
                    ['id' => 'topic-3', 'title' => '3. Types of Savings Accounts (High-Yield, Money Market, CDs)', 'order_position' => 3],
                    ['id' => 'topic-4', 'title' => '4. Strategies for Building Savings Fast', 'order_position' => 4],
                    ['id' => 'topic-5', 'title' => '5. Automated Saving & Financial Automation', 'order_position' => 5],
                    ['id' => 'topic-6', 'title' => '6. Practical Lab: Emergency Fund Calculator & Plan', 'order_position' => 6],
                ]),
                'is_published' => true,
            ],
            // =====================================================
            // Module 07: Investment Basics
            // =====================================================
            [
                'user_id' => 1,
                'service_type_id' => 1,
                'product_slug' => 'finance-fundamentals-for-beginners',
                'title' => 'Investment Basics',
                'slug' => 'investment-basics',
                'meta_title' => 'Investment Basics: Stocks, Bonds & Investment Strategies',
                'meta_description' => 'Learn investment fundamentals including stocks, bonds, mutual funds, ETFs, risk tolerance, diversification, and basic investment strategies.',
                'meta_keywords' => 'investment basics, stocks, bonds, mutual funds, ETFs, risk tolerance, diversification, investment strategy, passive investing',
                'order_position' => 7,
                'subtopics' => json_encode([
                    ['title' => '📈 Investment Fundamentals', 'is_heading' => true, 'order_position' => 1],
                    ['id' => 'topic-1', 'title' => '1. What is Investing? – Building Wealth Over Time', 'order_position' => 2],
                    ['id' => 'topic-2', 'title' => '2. Understanding Risk & Return', 'order_position' => 3],
                    ['id' => 'topic-3', 'title' => '3. The Power of Compound Interest', 'order_position' => 4],
                    ['title' => '📊 Investment Vehicles', 'is_heading' => true, 'order_position' => 5],
                    ['id' => 'topic-4', 'title' => '4. Stocks – Equities & Stock Market Basics', 'order_position' => 6],
                    ['id' => 'topic-5', 'title' => '5. Bonds – Fixed Income Securities', 'order_position' => 7],
                    ['id' => 'topic-6', 'title' => '6. Mutual Funds & ETFs – Pooled Investments', 'order_position' => 8],
                    ['title' => '📋 Investment Strategies', 'is_heading' => true, 'order_position' => 9],
                    ['id' => 'topic-7', 'title' => '7. Diversification & Asset Allocation', 'order_position' => 10],
                    ['id' => 'topic-8', 'title' => '8. Dollar-Cost Averaging', 'order_position' => 11],
                    ['id' => 'topic-9', 'title' => '9. Investment Accounts: 401(k), IRA, Taxable Accounts', 'order_position' => 12],
                ]),
                'is_published' => true,
            ],
            // =====================================================
            // Module 08: Retirement Planning
            // =====================================================
            [
                'user_id' => 1,
                'service_type_id' => 1,
                'product_slug' => 'finance-fundamentals-for-beginners',
                'title' => 'Retirement Planning',
                'slug' => 'retirement-planning',
                'meta_title' => 'Retirement Planning: Build Your Retirement Nest Egg',
                'meta_description' => 'Plan your retirement with confidence using 401(k), IRAs, retirement calculators, withdrawal strategies, and building a sustainable retirement income.',
                'meta_keywords' => 'retirement planning, 401(k), IRA, retirement accounts, retirement calculator, retirement income, financial independence, nest egg',
                'order_position' => 8,
                'subtopics' => json_encode([
                    ['title' => '🏦 Retirement Accounts', 'is_heading' => true, 'order_position' => 1],
                    ['id' => 'topic-1', 'title' => '1. Introduction to Retirement Planning', 'order_position' => 2],
                    ['id' => 'topic-2', 'title' => '2. 401(k) Plans – Employer-Sponsored Retirement', 'order_position' => 3],
                    ['id' => 'topic-3', 'title' => '3. Traditional IRA vs Roth IRA', 'order_position' => 4],
                    ['title' => '💰 Retirement Strategies', 'is_heading' => true, 'order_position' => 5],
                    ['id' => 'topic-4', 'title' => '4. How Much to Save for Retirement', 'order_position' => 6],
                    ['id' => 'topic-5', 'title' => '5. Retirement Withdrawal Strategies (4% Rule)', 'order_position' => 7],
                    ['id' => 'topic-6', 'title' => '6. Practical Lab: Retirement Calculator & Projection', 'order_position' => 8],
                ]),
                'is_published' => true,
            ],
            // =====================================================
            // Module 09: Tax Basics & Tax Planning
            // =====================================================
            [
                'user_id' => 1,
                'service_type_id' => 1,
                'product_slug' => 'finance-fundamentals-for-beginners',
                'title' => 'Tax Basics & Tax Planning',
                'slug' => 'tax-basics-tax-planning',
                'meta_title' => 'Tax Basics & Tax Planning: Understand & Optimize Your Taxes',
                'meta_description' => 'Learn tax fundamentals including income tax, deductions, credits, tax brackets, tax-efficient investing, and strategies for tax optimization.',
                'meta_keywords' => 'tax basics, tax planning, income tax, tax deductions, tax credits, tax brackets, tax-efficient investing, tax optimization',
                'order_position' => 9,
                'subtopics' => json_encode([
                    ['title' => '📋 Tax Fundamentals', 'is_heading' => true, 'order_position' => 1],
                    ['id' => 'topic-1', 'title' => '1. Understanding Income Tax Basics', 'order_position' => 2],
                    ['id' => 'topic-2', 'title' => '2. Tax Brackets & Marginal Tax Rates', 'order_position' => 3],
                    ['id' => 'topic-3', 'title' => '3. Standard Deduction vs Itemized Deductions', 'order_position' => 4],
                    ['title' => '💡 Tax Optimization', 'is_heading' => true, 'order_position' => 5],
                    ['id' => 'topic-4', 'title' => '4. Tax-Advantaged Accounts (401k, IRA, HSA)', 'order_position' => 6],
                    ['id' => 'topic-5', 'title' => '5. Tax-Efficient Investing Strategies', 'order_position' => 7],
                    ['id' => 'topic-6', 'title' => '6. Tax Filing Basics & Common Mistakes to Avoid', 'order_position' => 8],
                ]),
                'is_published' => true,
            ],
            // =====================================================
            // Module 10: Insurance & Risk Management
            // =====================================================
            [
                'user_id' => 1,
                'service_type_id' => 1,
                'product_slug' => 'finance-fundamentals-for-beginners',
                'title' => 'Insurance & Risk Management',
                'slug' => 'insurance-risk-management',
                'meta_title' => 'Insurance & Risk Management: Protect Your Financial Future',
                'meta_description' => 'Understand insurance fundamentals including health insurance, life insurance, auto insurance, homeowners insurance, and comprehensive risk management.',
                'meta_keywords' => 'insurance basics, risk management, health insurance, life insurance, auto insurance, homeowners insurance, financial protection',
                'order_position' => 10,
                'subtopics' => json_encode([
                    ['title' => '🛡️ Insurance Basics', 'is_heading' => true, 'order_position' => 1],
                    ['id' => 'topic-1', 'title' => '1. Why Insurance Matters – Risk Management', 'order_position' => 2],
                    ['id' => 'topic-2', 'title' => '2. Health Insurance – Plans & Coverage Options', 'order_position' => 3],
                    ['id' => 'topic-3', 'title' => '3. Life Insurance – Term vs Whole Life', 'order_position' => 4],
                    ['id' => 'topic-4', 'title' => '4. Auto Insurance – Coverage Types & Requirements', 'order_position' => 5],
                    ['id' => 'topic-5', 'title' => '5. Homeowners & Renters Insurance', 'order_position' => 6],
                    ['id' => 'topic-6', 'title' => '6. Disability & Long-Term Care Insurance', 'order_position' => 7],
                    ['id' => 'topic-7', 'title' => '7. Practical Lab: Insurance Needs Assessment', 'order_position' => 8],
                ]),
                'is_published' => true,
            ],
            // =====================================================
            // Module 11: Corporate Finance Fundamentals
            // =====================================================
            [
                'user_id' => 1,
                'service_type_id' => 1,
                'product_slug' => 'finance-fundamentals-for-beginners',
                'title' => 'Corporate Finance Fundamentals',
                'slug' => 'corporate-finance-fundamentals',
                'meta_title' => 'Corporate Finance Fundamentals: Business Financial Management',
                'meta_description' => 'Learn corporate finance basics including financial statements, ratio analysis, working capital, capital budgeting, and business financial management.',
                'meta_keywords' => 'corporate finance, financial statements, ratio analysis, working capital, capital budgeting, business finance, financial management',
                'order_position' => 11,
                'subtopics' => json_encode([
                    ['title' => '📊 Financial Statements', 'is_heading' => true, 'order_position' => 1],
                    ['id' => 'topic-1', 'title' => '1. The Balance Sheet – Assets, Liabilities, Equity', 'order_position' => 2],
                    ['id' => 'topic-2', 'title' => '2. Income Statement – Revenue, Expenses, Profit', 'order_position' => 3],
                    ['id' => 'topic-3', 'title' => '3. Cash Flow Statement – Operating, Investing, Financing', 'order_position' => 4],
                    ['title' => '📈 Financial Analysis', 'is_heading' => true, 'order_position' => 5],
                    ['id' => 'topic-4', 'title' => '4. Financial Ratio Analysis (Liquidity, Solvency, Profitability)', 'order_position' => 6],
                    ['id' => 'topic-5', 'title' => '5. Working Capital Management', 'order_position' => 7],
                    ['id' => 'topic-6', 'title' => '6. Capital Budgeting & Investment Decisions', 'order_position' => 8],
                ]),
                'is_published' => true,
            ],
            // =====================================================
            // Module 12: Financial Planning & Wealth Management
            // =====================================================
            [
                'user_id' => 1,
                'service_type_id' => 1,
                'product_slug' => 'finance-fundamentals-for-beginners',
                'title' => 'Financial Planning & Wealth Management',
                'slug' => 'financial-planning-wealth-management',
                'meta_title' => 'Financial Planning & Wealth Management: Build & Protect Wealth',
                'meta_description' => 'Master comprehensive financial planning, wealth management, net worth tracking, estate planning, and strategies for long-term wealth building.',
                'meta_keywords' => 'financial planning, wealth management, net worth, estate planning, wealth building, financial independence, financial goals',
                'order_position' => 12,
                'subtopics' => json_encode([
                    ['title' => '📋 Comprehensive Financial Planning', 'is_heading' => true, 'order_position' => 1],
                    ['id' => 'topic-1', 'title' => '1. Creating a Comprehensive Financial Plan', 'order_position' => 2],
                    ['id' => 'topic-2', 'title' => '2. Net Worth Tracking & Balance Sheet', 'order_position' => 3],
                    ['id' => 'topic-3', 'title' => '3. Cash Flow Planning & Budgeting', 'order_position' => 4],
                    ['title' => '🏦 Wealth Management', 'is_heading' => true, 'order_position' => 5],
                    ['id' => 'topic-4', 'title' => '4. Estate Planning – Wills, Trusts, Beneficiaries', 'order_position' => 6],
                    ['id' => 'topic-5', 'title' => '5. Charitable Giving & Philanthropy', 'order_position' => 7],
                    ['id' => 'topic-6', 'title' => '6. Practical Lab: Building Your Financial Plan', 'order_position' => 8],
                ]),
                'is_published' => true,
            ],
            // =====================================================
            // Module 13: Financial Tools & Technology
            // =====================================================
            [
                'user_id' => 1,
                'service_type_id' => 1,
                'product_slug' => 'finance-fundamentals-for-beginners',
                'title' => 'Financial Tools & Technology',
                'slug' => 'financial-tools-technology',
                'meta_title' => 'Financial Tools & Technology: FinTech & Money Apps',
                'meta_description' => 'Explore financial technology tools including budgeting apps, investment platforms, robo-advisors, crypto basics, and personal finance automation.',
                'meta_keywords' => 'financial tools, FinTech, budgeting apps, investment platforms, robo-advisors, cryptocurrency, personal finance automation',
                'order_position' => 13,
                'subtopics' => json_encode([
                    ['title' => '📱 FinTech & Money Apps', 'is_heading' => true, 'order_position' => 1],
                    ['id' => 'topic-1', 'title' => '1. Best Budgeting & Financial Tracking Apps', 'order_position' => 2],
                    ['id' => 'topic-2', 'title' => '2. Investment Platforms & Brokerage Comparison', 'order_position' => 3],
                    ['id' => 'topic-3', 'title' => '3. Robo-Advisors vs Human Financial Advisors', 'order_position' => 4],
                    ['title' => '🔗 Emerging Technologies', 'is_heading' => true, 'order_position' => 5],
                    ['id' => 'topic-4', 'title' => '4. Cryptocurrency & Blockchain Basics', 'order_position' => 6],
                    ['id' => 'topic-5', 'title' => '5. Financial Automation – Tools & Techniques', 'order_position' => 7],
                ]),
                'is_published' => true,
            ],
            // =====================================================
            // Module 14: Financial Mistakes & Lessons Learned
            // =====================================================
            [
                'user_id' => 1,
                'service_type_id' => 1,
                'product_slug' => 'finance-fundamentals-for-beginners',
                'title' => 'Financial Mistakes & Lessons Learned',
                'slug' => 'financial-mistakes-lessons-learned',
                'meta_title' => 'Financial Mistakes & Lessons Learned: Avoid Common Pitfalls',
                'meta_description' => 'Learn from common financial mistakes including budgeting errors, investment pitfalls, debt mistakes, and strategies to avoid financial regrets.',
                'meta_keywords' => 'financial mistakes, money mistakes, budgeting errors, investment pitfalls, debt mistakes, financial regrets, money lessons',
                'order_position' => 14,
                'subtopics' => json_encode([
                    ['id' => 'topic-1', 'title' => '1. Common Budgeting Mistakes', 'order_position' => 1],
                    ['id' => 'topic-2', 'title' => '2. Investment Mistakes & How to Avoid Them', 'order_position' => 2],
                    ['id' => 'topic-3', 'title' => '3. Debt Mistakes That Cost You', 'order_position' => 3],
                    ['id' => 'topic-4', 'title' => '4. Lifestyle Inflation & Consumer Traps', 'order_position' => 4],
                    ['id' => 'topic-5', 'title' => '5. Lessons from Financial Regrets', 'order_position' => 5],
                ]),
                'is_published' => true,
            ],
            // =====================================================
            // Module 15: Financial Resources & Continuing Education
            // =====================================================
            [
                'user_id' => 1,
                'service_type_id' => 1,
                'product_slug' => 'finance-fundamentals-for-beginners',
                'title' => 'Financial Resources & Continuing Education',
                'slug' => 'financial-resources-continuing-education',
                'meta_title' => 'Financial Resources & Continuing Education: Grow Your Financial Knowledge',
                'meta_description' => 'Discover essential financial resources including books, podcasts, courses, calculators, tools, and continuing education for financial literacy.',
                'meta_keywords' => 'financial resources, financial books, finance podcasts, financial courses, money calculators, financial education, learning finance',
                'order_position' => 15,
                'subtopics' => json_encode([
                    ['id' => 'topic-1', 'title' => '1. Best Financial Books for Beginners', 'order_position' => 1],
                    ['id' => 'topic-2', 'title' => '2. Top Finance Podcasts to Follow', 'order_position' => 2],
                    ['id' => 'topic-3', 'title' => '3. Financial YouTube Channels & Content Creators', 'order_position' => 3],
                    ['id' => 'topic-4', 'title' => '4. Financial Calculators & Planning Tools', 'order_position' => 4],
                    ['id' => 'topic-5', 'title' => '5. Continuing Education & Financial Certifications', 'order_position' => 5],
                ]),
                'is_published' => true,
            ],
            // =====================================================
            // Module 16: AI Prompt Engineering for Finance
            // =====================================================
            [
                'user_id' => 1,
                'service_type_id' => 1,
                'product_slug' => 'finance-fundamentals-for-beginners',
                'title' => 'AI Prompt Engineering for Finance',
                'slug' => 'ai-prompt-engineering-for-finance',
                'meta_title' => 'AI Prompt Engineering for Finance: Smart Financial Analysis',
                'meta_description' => 'Learn AI prompt engineering for finance including financial analysis, budgeting, investment research, tax planning, and financial automation using AI.',
                'meta_keywords' => 'AI prompt engineering, finance AI, financial analysis AI, budgeting AI, investment research, tax planning AI, financial automation',
                'order_position' => 16,
                'subtopics' => json_encode([
                    ['title' => '🤖 AI & Financial Analysis', 'is_heading' => true, 'order_position' => 1],
                    ['id' => 'topic-1', 'title' => '1. Introduction to AI Prompt Engineering for Finance', 'order_position' => 2],
                    ['id' => 'topic-2', 'title' => '2. AI Prompts for Budgeting & Personal Finance', 'order_position' => 3],
                    ['id' => 'topic-3', 'title' => '3. AI Prompts for Investment Research & Analysis', 'order_position' => 4],
                    ['title' => '💡 AI-Powered Financial Planning', 'is_heading' => true, 'order_position' => 5],
                    ['id' => 'topic-4', 'title' => '4. AI Prompts for Tax Planning & Optimization', 'order_position' => 6],
                    ['id' => 'topic-5', 'title' => '5. AI Prompts for Corporate Finance & Business Planning', 'order_position' => 7],
                    ['id' => 'topic-6', 'title' => '6. Practical Lab: Creating AI Prompts for Financial Scenarios', 'order_position' => 8],
                    ['id' => 'topic-7', 'title' => '7. Best Practices & Ethics in AI Financial Advising', 'order_position' => 9],
                ]),
                'is_published' => true,
            ],
            // =====================================================
            // Module 17: Financial Mathematics
            // =====================================================
            [
                'user_id' => 1,
                'service_type_id' => 1,
                'product_slug' => 'finance-fundamentals-for-beginners',
                'title' => 'Financial Mathematics',
                'slug' => 'financial-mathematics',
                'meta_title' => 'Financial Mathematics: TVM, NPV, IRR & Investment Math',
                'meta_description' => 'Master financial mathematics including Time Value of Money, NPV, IRR, discount rates, loan EMI, annuities, perpetuities, and inflation adjustments for smart investing.',
                'meta_keywords' => 'financial mathematics, time value of money, NPV, IRR, discount rate, EMI formula, annuities, perpetuities, inflation adjustment, present value, future value',
                'order_position' => 17,
                'subtopics' => json_encode([
                    ['title' => '⏰ Time Value of Money (TVM)', 'is_heading' => true, 'order_position' => 1],
                    ['id' => 'topic-1', 'title' => '1. Time Value of Money (TVM)', 'order_position' => 2],
                    ['id' => 'topic-2', 'title' => '2. Present Value', 'order_position' => 3],
                    ['id' => 'topic-3', 'title' => '3. Future Value', 'order_position' => 4],
                    ['id' => 'topic-4', 'title' => '4. Net Present Value (NPV)', 'order_position' => 5],
                    ['id' => 'topic-5', 'title' => '5. Internal Rate of Return (IRR)', 'order_position' => 6],
                    ['id' => 'topic-6', 'title' => '6. Discount Rate', 'order_position' => 7],
                    ['id' => 'topic-7', 'title' => '7. Effective Interest Rate', 'order_position' => 8],
                    ['id' => 'topic-8', 'title' => '8. Loan EMI Formula', 'order_position' => 9],
                    ['id' => 'topic-9', 'title' => '9. Mortgage Calculations', 'order_position' => 10],
                    ['id' => 'topic-10', 'title' => '10. Annuities', 'order_position' => 11],
                    ['id' => 'topic-11', 'title' => '11. Perpetuities', 'order_position' => 12],
                    ['id' => 'topic-12', 'title' => '12. Inflation Adjustments', 'order_position' => 13],
                ]),
                'is_published' => true,
            ],
            // =====================================================
            // Module 18: Financial Statement Analysis
            // =====================================================
            [
                'user_id' => 1,
                'service_type_id' => 1,
                'product_slug' => 'finance-fundamentals-for-beginners',
                'title' => 'Financial Statement Analysis',
                'slug' => 'financial-statement-analysis',
                'meta_title' => 'Financial Statement Analysis: Horizontal, Vertical & Ratio Analysis',
                'meta_description' => 'Master financial statement analysis including horizontal analysis, vertical analysis, ratio analysis, DuPont analysis, cash flow analysis, and bankruptcy prediction.',
                'meta_keywords' => 'financial statement analysis, horizontal analysis, vertical analysis, ratio analysis, DuPont analysis, cash flow analysis, financial health indicators, bankruptcy prediction',
                'order_position' => 18,
                'subtopics' => json_encode([
                    ['id' => 'topic-1', 'title' => '1. Horizontal Analysis', 'order_position' => 1],
                    ['id' => 'topic-2', 'title' => '2. Vertical Analysis', 'order_position' => 2],
                    ['id' => 'topic-3', 'title' => '3. Common Size Statements', 'order_position' => 3],
                    ['id' => 'topic-4', 'title' => '4. Ratio Analysis', 'order_position' => 4],
                    ['id' => 'topic-5', 'title' => '5. DuPont Analysis', 'order_position' => 5],
                    ['id' => 'topic-6', 'title' => '6. Cash Flow Analysis', 'order_position' => 6],
                    ['id' => 'topic-7', 'title' => '7. Earnings Quality', 'order_position' => 7],
                    ['id' => 'topic-8', 'title' => '8. Financial Health Indicators', 'order_position' => 8],
                    ['id' => 'topic-9', 'title' => '9. Bankruptcy Prediction', 'order_position' => 9],
                    ['id' => 'topic-10', 'title' => '10. Case Studies', 'order_position' => 10],
                ]),
                'is_published' => true,
            ],
            // =====================================================
            // Module 19: Advanced Investment Analysis
            // =====================================================
            [
                'user_id' => 1,
                'service_type_id' => 1,
                'product_slug' => 'finance-fundamentals-for-beginners',
                'title' => 'Advanced Investment Analysis',
                'slug' => 'advanced-investment-analysis',
                'meta_title' => 'Advanced Investment Analysis: Value, Growth, ETFs & Portfolio Optimization',
                'meta_description' => 'Master advanced investment analysis including value investing, growth investing, ETFs, REITs, commodities, portfolio optimization, CAPM, Beta & Alpha strategies.',
                'meta_keywords' => 'advanced investment analysis, value investing, growth investing, ETFs, REITs, commodities, portfolio optimization, CAPM, Beta, Alpha, efficient frontier',
                'order_position' => 19,
                'subtopics' => json_encode([
                    ['id' => 'topic-1', 'title' => '1. Value Investing', 'order_position' => 1],
                    ['id' => 'topic-2', 'title' => '2. Growth Investing', 'order_position' => 2],
                    ['id' => 'topic-3', 'title' => '3. Dividend Investing', 'order_position' => 3],
                    ['id' => 'topic-4', 'title' => '4. Index Investing', 'order_position' => 4],
                    ['id' => 'topic-5', 'title' => '5. ETF Investing', 'order_position' => 5],
                    ['id' => 'topic-6', 'title' => '6. REITs', 'order_position' => 6],
                    ['id' => 'topic-7', 'title' => '7. Commodities', 'order_position' => 7],
                    ['id' => 'topic-8', 'title' => '8. Gold', 'order_position' => 8],
                    ['id' => 'topic-9', 'title' => '9. Silver', 'order_position' => 9],
                    ['id' => 'topic-10', 'title' => '10. Oil', 'order_position' => 10],
                    ['id' => 'topic-11', 'title' => '11. Portfolio Optimization', 'order_position' => 11],
                    ['id' => 'topic-12', 'title' => '12. Efficient Frontier', 'order_position' => 12],
                    ['id' => 'topic-13', 'title' => '13. CAPM', 'order_position' => 13],
                    ['id' => 'topic-14', 'title' => '14. Beta', 'order_position' => 14],
                    ['id' => 'topic-15', 'title' => '15. Alpha', 'order_position' => 15],
                ]),
                'is_published' => true,
            ],
            // =====================================================
            // Module 20: Stock Market Complete Guide
            // =====================================================
            [
                'user_id' => 1,
                'service_type_id' => 1,
                'product_slug' => 'finance-fundamentals-for-beginners',
                'title' => 'Stock Market Complete Guide',
                'slug' => 'stock-market-complete-guide',
                'meta_title' => 'Stock Market Complete Guide: Exchanges, IPOs & Trading Strategies',
                'meta_description' => 'Complete stock market guide covering stock exchanges, IPOs, market capitalization, candlestick basics, order types, NSE, BSE, NASDAQ & NYSE trading.',
                'meta_keywords' => 'stock market guide, stock exchanges, IPO, FPO, market capitalization, blue chip stocks, candlestick basics, trading platforms, NSE, BSE, NASDAQ, NYSE',
                'order_position' => 20,
                'subtopics' => json_encode([
                    ['id' => 'topic-1', 'title' => '1. Stock Exchanges', 'order_position' => 1],
                    ['id' => 'topic-2', 'title' => '2. IPO', 'order_position' => 2],
                    ['id' => 'topic-3', 'title' => '3. FPO', 'order_position' => 3],
                    ['id' => 'topic-4', 'title' => '4. Market Capitalization', 'order_position' => 4],
                    ['id' => 'topic-5', 'title' => '5. Blue Chip Stocks', 'order_position' => 5],
                    ['id' => 'topic-6', 'title' => '6. Small Cap', 'order_position' => 6],
                    ['id' => 'topic-7', 'title' => '7. Mid Cap', 'order_position' => 7],
                    ['id' => 'topic-8', 'title' => '8. Candlestick Basics', 'order_position' => 8],
                    ['id' => 'topic-9', 'title' => '9. Market Orders', 'order_position' => 9],
                    ['id' => 'topic-10', 'title' => '10. Limit Orders', 'order_position' => 10],
                    ['id' => 'topic-11', 'title' => '11. Stop Loss', 'order_position' => 11],
                    ['id' => 'topic-12', 'title' => '12. Trading Platforms', 'order_position' => 12],
                    ['id' => 'topic-13', 'title' => '13. NSE', 'order_position' => 13],
                    ['id' => 'topic-14', 'title' => '14. BSE', 'order_position' => 14],
                    ['id' => 'topic-15', 'title' => '15. NASDAQ', 'order_position' => 15],
                    ['id' => 'topic-16', 'title' => '16. NYSE', 'order_position' => 16],
                ]),
                'is_published' => true,
            ],
            // =====================================================
            // Module 21: Mutual Funds Complete Guide
            // =====================================================
            [
                'user_id' => 1,
                'service_type_id' => 1,
                'product_slug' => 'finance-fundamentals-for-beginners',
                'title' => 'Mutual Funds Complete Guide',
                'slug' => 'mutual-funds-complete-guide',
                'meta_title' => 'Mutual Funds Complete Guide: SIP, STP, SWP & Fund Types',
                'meta_description' => 'Complete mutual funds guide covering SIP, STP, SWP, NAV, expense ratio, debt funds, equity funds, hybrid funds, ELSS, and index fund investing.',
                'meta_keywords' => 'mutual funds guide, SIP, STP, SWP, NAV, expense ratio, debt funds, equity funds, hybrid funds, ELSS, index funds, mutual fund investing',
                'order_position' => 21,
                'subtopics' => json_encode([
                    ['id' => 'topic-1', 'title' => '1. SIP', 'order_position' => 1],
                    ['id' => 'topic-2', 'title' => '2. STP', 'order_position' => 2],
                    ['id' => 'topic-3', 'title' => '3. SWP', 'order_position' => 3],
                    ['id' => 'topic-4', 'title' => '4. NAV', 'order_position' => 4],
                    ['id' => 'topic-5', 'title' => '5. Expense Ratio', 'order_position' => 5],
                    ['id' => 'topic-6', 'title' => '6. Direct vs Regular', 'order_position' => 6],
                    ['id' => 'topic-7', 'title' => '7. Debt Funds', 'order_position' => 7],
                    ['id' => 'topic-8', 'title' => '8. Equity Funds', 'order_position' => 8],
                    ['id' => 'topic-9', 'title' => '9. Hybrid Funds', 'order_position' => 9],
                    ['id' => 'topic-10', 'title' => '10. ELSS', 'order_position' => 10],
                    ['id' => 'topic-11', 'title' => '11. Index Funds', 'order_position' => 11],
                ]),
                'is_published' => true,
            ],
            // =====================================================
            // Module 22: Risk Management
            // =====================================================
            [
                'user_id' => 1,
                'service_type_id' => 1,
                'product_slug' => 'finance-fundamentals-for-beginners',
                'title' => 'Risk Management',
                'slug' => 'risk-management',
                'meta_title' => 'Risk Management: Diversification, Hedging & Risk Analysis',
                'meta_description' => 'Master risk management including diversification, hedging, risk appetite, VaR, credit risk, market risk, liquidity risk, operational risk, and currency risk.',
                'meta_keywords' => 'risk management, diversification, hedging, risk appetite, VaR, credit risk, market risk, liquidity risk, operational risk, currency risk',
                'order_position' => 22,
                'subtopics' => json_encode([
                    ['id' => 'topic-1', 'title' => '1. Diversification', 'order_position' => 1],
                    ['id' => 'topic-2', 'title' => '2. Hedging', 'order_position' => 2],
                    ['id' => 'topic-3', 'title' => '3. Risk Appetite', 'order_position' => 3],
                    ['id' => 'topic-4', 'title' => '4. Risk Tolerance', 'order_position' => 4],
                    ['id' => 'topic-5', 'title' => '5. VaR', 'order_position' => 5],
                    ['id' => 'topic-6', 'title' => '6. Credit Risk', 'order_position' => 6],
                    ['id' => 'topic-7', 'title' => '7. Market Risk', 'order_position' => 7],
                    ['id' => 'topic-8', 'title' => '8. Liquidity Risk', 'order_position' => 8],
                    ['id' => 'topic-9', 'title' => '9. Operational Risk', 'order_position' => 9],
                    ['id' => 'topic-10', 'title' => '10. Currency Risk', 'order_position' => 10],
                ]),
                'is_published' => true,
            ],
            // =====================================================
            // Module 23: Business Finance
            // =====================================================
            [
                'user_id' => 1,
                'service_type_id' => 1,
                'product_slug' => 'finance-fundamentals-for-beginners',
                'title' => 'Business Finance',
                'slug' => 'business-finance',
                'meta_title' => 'Business Finance: Startup Funding, Valuation & Cash Flow',
                'meta_description' => 'Master business finance including startup finance, business budgeting, business loans, valuation, funding, venture capital, angel investors, and IPO process.',
                'meta_keywords' => 'business finance, startup finance, business budgeting, business valuation, venture capital, angel investors, crowdfunding, IPO process, cash flow forecasting',
                'order_position' => 23,
                'subtopics' => json_encode([
                    ['id' => 'topic-1', 'title' => '1. Startup Finance', 'order_position' => 1],
                    ['id' => 'topic-2', 'title' => '2. Business Budgeting', 'order_position' => 2],
                    ['id' => 'topic-3', 'title' => '3. Business Loans', 'order_position' => 3],
                    ['id' => 'topic-4', 'title' => '4. Business Valuation', 'order_position' => 4],
                    ['id' => 'topic-5', 'title' => '5. Cash Flow Forecasting', 'order_position' => 5],
                    ['id' => 'topic-6', 'title' => '6. Funding', 'order_position' => 6],
                    ['id' => 'topic-7', 'title' => '7. Venture Capital', 'order_position' => 7],
                    ['id' => 'topic-8', 'title' => '8. Angel Investors', 'order_position' => 8],
                    ['id' => 'topic-9', 'title' => '9. Crowdfunding', 'order_position' => 9],
                    ['id' => 'topic-10', 'title' => '10. IPO Process', 'order_position' => 10],
                ]),
                'is_published' => true,
            ],
            // =====================================================
            // Module 24: International Finance
            // =====================================================
            [
                'user_id' => 1,
                'service_type_id' => 1,
                'product_slug' => 'finance-fundamentals-for-beginners',
                'title' => 'International Finance',
                'slug' => 'international-finance',
                'meta_title' => 'International Finance: Forex, Exchange Rates & Global Economy',
                'meta_description' => 'Master international finance including foreign exchange, currency markets, exchange rates, international trade, IMF, World Bank, WTO and global economy.',
                'meta_keywords' => 'international finance, foreign exchange, currency markets, exchange rates, IMF, World Bank, WTO, international trade, global economy',
                'order_position' => 24,
                'subtopics' => json_encode([
                    ['id' => 'topic-1', 'title' => '1. Foreign Exchange', 'order_position' => 1],
                    ['id' => 'topic-2', 'title' => '2. Currency Markets', 'order_position' => 2],
                    ['id' => 'topic-3', 'title' => '3. Exchange Rates', 'order_position' => 3],
                    ['id' => 'topic-4', 'title' => '4. International Trade', 'order_position' => 4],
                    ['id' => 'topic-5', 'title' => '5. IMF', 'order_position' => 5],
                    ['id' => 'topic-6', 'title' => '6. World Bank', 'order_position' => 6],
                    ['id' => 'topic-7', 'title' => '7. WTO', 'order_position' => 7],
                    ['id' => 'topic-8', 'title' => '8. International Banking', 'order_position' => 8],
                    ['id' => 'topic-9', 'title' => '9. Global Economy', 'order_position' => 9],
                ]),
                'is_published' => true,
            ],
            // =====================================================
            // Module 25: Behavioral Finance
            // =====================================================
            [
                'user_id' => 1,
                'service_type_id' => 1,
                'product_slug' => 'finance-fundamentals-for-beginners',
                'title' => 'Behavioral Finance',
                'slug' => 'behavioral-finance',
                'meta_title' => 'Behavioral Finance: Cognitive Bias & Emotional Investing',
                'meta_description' => 'Master behavioral finance including cognitive bias, herd mentality, emotional investing, overconfidence, anchoring, loss aversion, and confirmation bias.',
                'meta_keywords' => 'behavioral finance, cognitive bias, herd mentality, emotional investing, overconfidence bias, anchoring bias, loss aversion, confirmation bias',
                'order_position' => 25,
                'subtopics' => json_encode([
                    ['id' => 'topic-1', 'title' => '1. Cognitive Bias', 'order_position' => 1],
                    ['id' => 'topic-2', 'title' => '2. Herd Mentality', 'order_position' => 2],
                    ['id' => 'topic-3', 'title' => '3. Emotional Investing', 'order_position' => 3],
                    ['id' => 'topic-4', 'title' => '4. Overconfidence Bias', 'order_position' => 4],
                    ['id' => 'topic-5', 'title' => '5. Anchoring Bias', 'order_position' => 5],
                    ['id' => 'topic-6', 'title' => '6. Loss Aversion', 'order_position' => 6],
                    ['id' => 'topic-7', 'title' => '7. Confirmation Bias', 'order_position' => 7],
                ]),
                'is_published' => true,
            ],
            // =====================================================
            // Module 26: FinTech
            // =====================================================
            [
                'user_id' => 1,
                'service_type_id' => 1,
                'product_slug' => 'finance-fundamentals-for-beginners',
                'title' => 'FinTech',
                'slug' => 'fintech',
                'meta_title' => 'FinTech: UPI, Digital Payments, Blockchain & AI in Finance',
                'meta_description' => 'Master FinTech including UPI, digital payments, open banking, payment gateways, BNPL, blockchain, CBDC, crypto regulations, and AI in finance.',
                'meta_keywords' => 'FinTech, UPI, digital payments, open banking, payment gateway, BNPL, blockchain, CBDC, crypto regulations, AI in finance',
                'order_position' => 26,
                'subtopics' => json_encode([
                    ['id' => 'topic-1', 'title' => '1. UPI', 'order_position' => 1],
                    ['id' => 'topic-2', 'title' => '2. Digital Payments', 'order_position' => 2],
                    ['id' => 'topic-3', 'title' => '3. Open Banking', 'order_position' => 3],
                    ['id' => 'topic-4', 'title' => '4. Payment Gateway', 'order_position' => 4],
                    ['id' => 'topic-5', 'title' => '5. Buy Now Pay Later', 'order_position' => 5],
                    ['id' => 'topic-6', 'title' => '6. Blockchain', 'order_position' => 6],
                    ['id' => 'topic-7', 'title' => '7. CBDC', 'order_position' => 7],
                    ['id' => 'topic-8', 'title' => '8. Crypto Regulations', 'order_position' => 8],
                    ['id' => 'topic-9', 'title' => '9. AI in Finance', 'order_position' => 9],
                ]),
                'is_published' => true,
            ],
            // =====================================================
            // Module 27: Financial Modeling
            // =====================================================
            [
                'user_id' => 1,
                'service_type_id' => 1,
                'product_slug' => 'finance-fundamentals-for-beginners',
                'title' => 'Financial Modeling',
                'slug' => 'financial-modeling',
                'meta_title' => 'Financial Modeling: DCF, Forecasts & Sensitivity Analysis',
                'meta_description' => 'Master financial modeling including Excel basics, revenue forecasting, DCF models, comparable analysis, scenario analysis, and sensitivity analysis.',
                'meta_keywords' => 'financial modeling, Excel basics, DCF model, revenue forecasting, comparable analysis, scenario analysis, sensitivity analysis, financial models',
                'order_position' => 27,
                'subtopics' => json_encode([
                    ['id' => 'topic-1', 'title' => '1. Excel Basics', 'order_position' => 1],
                    ['id' => 'topic-2', 'title' => '2. Financial Models', 'order_position' => 2],
                    ['id' => 'topic-3', 'title' => '3. Revenue Forecasting', 'order_position' => 3],
                    ['id' => 'topic-4', 'title' => '4. Expense Forecasting', 'order_position' => 4],
                    ['id' => 'topic-5', 'title' => '5. DCF Model', 'order_position' => 5],
                    ['id' => 'topic-6', 'title' => '6. Comparable Analysis', 'order_position' => 6],
                    ['id' => 'topic-7', 'title' => '7. Scenario Analysis', 'order_position' => 7],
                    ['id' => 'topic-8', 'title' => '8. Sensitivity Analysis', 'order_position' => 8],
                ]),
                'is_published' => true,
            ],
            // =====================================================
            // Module 28: Financial Fraud & Cyber Security
            // =====================================================
            [
                'user_id' => 1,
                'service_type_id' => 1,
                'product_slug' => 'finance-fundamentals-for-beginners',
                'title' => 'Financial Fraud & Cyber Security',
                'slug' => 'financial-fraud-cyber-security',
                'meta_title' => 'Financial Fraud & Cyber Security: Protection & Prevention',
                'meta_description' => 'Master financial fraud prevention including banking fraud, Ponzi schemes, identity theft, phishing, credit card fraud, online banking security, and secure transactions.',
                'meta_keywords' => 'financial fraud, cyber security, banking fraud, Ponzi schemes, identity theft, phishing, credit card fraud, online banking security, digital signature',
                'order_position' => 28,
                'subtopics' => json_encode([
                    ['id' => 'topic-1', 'title' => '1. Banking Fraud', 'order_position' => 1],
                    ['id' => 'topic-2', 'title' => '2. Investment Scams', 'order_position' => 2],
                    ['id' => 'topic-3', 'title' => '3. Ponzi Schemes', 'order_position' => 3],
                    ['id' => 'topic-4', 'title' => '4. Identity Theft', 'order_position' => 4],
                    ['id' => 'topic-5', 'title' => '5. Phishing', 'order_position' => 5],
                    ['id' => 'topic-6', 'title' => '6. Credit Card Fraud', 'order_position' => 6],
                    ['id' => 'topic-7', 'title' => '7. Online Banking Security', 'order_position' => 7],
                    ['id' => 'topic-8', 'title' => '8. Digital Signature', 'order_position' => 8],
                    ['id' => 'topic-9', 'title' => '9. Secure Transactions', 'order_position' => 9],
                ]),
                'is_published' => true,
            ],
            // =====================================================
            // Module 29: Indian Financial System
            // =====================================================
            [
                'user_id' => 1,
                'service_type_id' => 1,
                'product_slug' => 'finance-fundamentals-for-beginners',
                'title' => 'Indian Financial System',
                'slug' => 'indian-financial-system',
                'meta_title' => 'Indian Financial System: RBI, SEBI, IRDAI & Regulations',
                'meta_description' => 'Master Indian financial system including RBI, SEBI, IRDAI, PFRDA, AMFI, NPCI, stock exchanges, banking structure, and financial regulations.',
                'meta_keywords' => 'Indian financial system, RBI, SEBI, IRDAI, PFRDA, AMFI, NPCI, stock exchanges, banking structure, financial regulations',
                'order_position' => 29,
                'subtopics' => json_encode([
                    ['id' => 'topic-1', 'title' => '1. RBI', 'order_position' => 1],
                    ['id' => 'topic-2', 'title' => '2. SEBI', 'order_position' => 2],
                    ['id' => 'topic-3', 'title' => '3. IRDAI', 'order_position' => 3],
                    ['id' => 'topic-4', 'title' => '4. PFRDA', 'order_position' => 4],
                    ['id' => 'topic-5', 'title' => '5. AMFI', 'order_position' => 5],
                    ['id' => 'topic-6', 'title' => '6. NPCI', 'order_position' => 6],
                    ['id' => 'topic-7', 'title' => '7. Stock Exchanges', 'order_position' => 7],
                    ['id' => 'topic-8', 'title' => '8. Banking Structure', 'order_position' => 8],
                    ['id' => 'topic-9', 'title' => '9. Financial Regulations', 'order_position' => 9],
                ]),
                'is_published' => true,
            ],
            // =====================================================
            // Module 30: Taxation (India)
            // =====================================================
            [
                'user_id' => 1,
                'service_type_id' => 1,
                'product_slug' => 'finance-fundamentals-for-beginners',
                'title' => 'Taxation (India)',
                'slug' => 'taxation-india',
                'meta_title' => 'Taxation (India): Income Tax, GST, TDS & ITR Filing',
                'meta_description' => 'Master Indian taxation including income tax, GST, TDS, advance tax, capital gains, tax saving, Section 80C, 80D, ITR filing, AIS, and Form 26AS.',
                'meta_keywords' => 'Indian taxation, income tax, GST, TDS, advance tax, capital gains, Section 80C, 80D, ITR filing, AIS, Form 26AS, tax saving',
                'order_position' => 30,
                'subtopics' => json_encode([
                    ['id' => 'topic-1', 'title' => '1. Income Tax', 'order_position' => 1],
                    ['id' => 'topic-2', 'title' => '2. GST', 'order_position' => 2],
                    ['id' => 'topic-3', 'title' => '3. TDS', 'order_position' => 3],
                    ['id' => 'topic-4', 'title' => '4. Advance Tax', 'order_position' => 4],
                    ['id' => 'topic-5', 'title' => '5. Capital Gains', 'order_position' => 5],
                    ['id' => 'topic-6', 'title' => '6. Tax Saving', 'order_position' => 6],
                    ['id' => 'topic-7', 'title' => '7. Section 80C', 'order_position' => 7],
                    ['id' => 'topic-8', 'title' => '8. 80D', 'order_position' => 8],
                    ['id' => 'topic-9', 'title' => '9. ITR Filing', 'order_position' => 9],
                    ['id' => 'topic-10', 'title' => '10. AIS', 'order_position' => 10],
                    ['id' => 'topic-11', 'title' => '11. Form 26AS', 'order_position' => 11],
                ]),
                'is_published' => true,
            ],
            // =====================================================
            // Module 31: Personal Wealth Building
            // =====================================================
            [
                'user_id' => 1,
                'service_type_id' => 1,
                'product_slug' => 'finance-fundamentals-for-beginners',
                'title' => 'Personal Wealth Building',
                'slug' => 'personal-wealth-building',
                'meta_title' => 'Personal Wealth Building: FIRE, Passive Income & Financial Freedom',
                'meta_description' => 'Master personal wealth building including FIRE, multiple income sources, passive income, wealth pyramid, net worth tracking, asset allocation, and legacy planning.',
                'meta_keywords' => 'personal wealth building, FIRE, passive income, multiple income sources, net worth tracking, financial independence, asset allocation, legacy planning',
                'order_position' => 31,
                'subtopics' => json_encode([
                    ['id' => 'topic-1', 'title' => '1. FIRE', 'order_position' => 1],
                    ['id' => 'topic-2', 'title' => '2. Multiple Income Sources', 'order_position' => 2],
                    ['id' => 'topic-3', 'title' => '3. Passive Income', 'order_position' => 3],
                    ['id' => 'topic-4', 'title' => '4. Wealth Pyramid', 'order_position' => 4],
                    ['id' => 'topic-5', 'title' => '5. Net Worth Tracking', 'order_position' => 5],
                    ['id' => 'topic-6', 'title' => '6. Financial Independence', 'order_position' => 6],
                    ['id' => 'topic-7', 'title' => '7. Asset Allocation', 'order_position' => 7],
                    ['id' => 'topic-8', 'title' => '8. Legacy Planning', 'order_position' => 8],
                ]),
                'is_published' => true,
            ],
            // =====================================================
            // Module 32: Excel for Finance
            // =====================================================
            [
                'user_id' => 1,
                'service_type_id' => 1,
                'product_slug' => 'finance-fundamentals-for-beginners',
                'title' => 'Excel for Finance',
                'slug' => 'excel-for-finance',
                'meta_title' => 'Excel for Finance: Formulas, Pivot Tables & Dashboards',
                'meta_description' => 'Master Excel for finance including formulas, XLOOKUP, INDEX MATCH, pivot tables, charts, dashboards, financial templates, and loan/investment calculators.',
                'meta_keywords' => 'Excel for finance, Excel formulas, XLOOKUP, INDEX MATCH, pivot tables, financial dashboards, budget templates, loan calculator, investment calculator',
                'order_position' => 32,
                'subtopics' => json_encode([
                    ['id' => 'topic-1', 'title' => '1. Excel Formulas', 'order_position' => 1],
                    ['id' => 'topic-2', 'title' => '2. XLOOKUP', 'order_position' => 2],
                    ['id' => 'topic-3', 'title' => '3. INDEX MATCH', 'order_position' => 3],
                    ['id' => 'topic-4', 'title' => '4. Pivot Tables', 'order_position' => 4],
                    ['id' => 'topic-5', 'title' => '5. Charts', 'order_position' => 5],
                    ['id' => 'topic-6', 'title' => '6. Dashboards', 'order_position' => 6],
                    ['id' => 'topic-7', 'title' => '7. Financial Templates', 'order_position' => 7],
                    ['id' => 'topic-8', 'title' => '8. Budget Templates', 'order_position' => 8],
                    ['id' => 'topic-9', 'title' => '9. Loan Calculator', 'order_position' => 9],
                    ['id' => 'topic-10', 'title' => '10. Investment Calculator', 'order_position' => 10],
                ]),
                'is_published' => true,
            ],
            // =====================================================
            // Module 33: Finance Automation
            // =====================================================
            [
                'user_id' => 1,
                'service_type_id' => 1,
                'product_slug' => 'finance-fundamentals-for-beginners',
                'title' => 'Finance Automation',
                'slug' => 'finance-automation',
                'meta_title' => 'Finance Automation: AI Budgeting, Power BI & Python for Finance',
                'meta_description' => 'Master finance automation including AI budgeting, AI portfolio analysis, AI tax assistant, Excel automation, Power BI, Google Sheets automation, and Python for finance.',
                'meta_keywords' => 'finance automation, AI budgeting, AI portfolio analysis, AI tax assistant, Power BI, Google Sheets automation, Python for finance, Excel automation',
                'order_position' => 33,
                'subtopics' => json_encode([
                    ['id' => 'topic-1', 'title' => '1. AI Budgeting', 'order_position' => 1],
                    ['id' => 'topic-2', 'title' => '2. AI Portfolio Analysis', 'order_position' => 2],
                    ['id' => 'topic-3', 'title' => '3. AI Tax Assistant', 'order_position' => 3],
                    ['id' => 'topic-4', 'title' => '4. Excel Automation', 'order_position' => 4],
                    ['id' => 'topic-5', 'title' => '5. Power BI', 'order_position' => 5],
                    ['id' => 'topic-6', 'title' => '6. Google Sheets Automation', 'order_position' => 6],
                    ['id' => 'topic-7', 'title' => '7. Python for Finance', 'order_position' => 7],
                ]),
                'is_published' => true,
            ],
            // =====================================================
            // Module 34: Real-World Case Studies
            // =====================================================
            [
                'user_id' => 1,
                'service_type_id' => 1,
                'product_slug' => 'finance-fundamentals-for-beginners',
                'title' => 'Real-World Case Studies',
                'slug' => 'real-world-case-studies',
                'meta_title' => 'Real-World Case Studies: Learn from Financial Success Stories',
                'meta_description' => 'Analyze real-world financial case studies including debt payoff, investment success, business financial management, and wealth building stories.',
                'meta_keywords' => 'financial case studies, wealth building stories, debt payoff success, investment success, business finance cases, financial learning',
                'order_position' => 34,
                'subtopics' => json_encode([
                    ['id' => 'case-study-1', 'title' => '1. Case Study: Aggressive Debt Payoff Success', 'order_position' => 1],
                    ['id' => 'case-study-2', 'title' => '2. Case Study: Building Wealth Through Index Investing', 'order_position' => 2],
                    ['id' => 'case-study-3', 'title' => '3. Case Study: FIRE Movement – Early Retirement', 'order_position' => 3],
                    ['id' => 'case-study-4', 'title' => '4. Case Study: Business Financial Management Success', 'order_position' => 4],
                    ['id' => 'case-study-5', 'title' => '5. Case Study: Real Estate Investment Journey', 'order_position' => 5],
                ]),
                'is_published' => true,
            ],
            // =====================================================
            // Module 35: Finance Certifications
            // =====================================================
            [
                'user_id' => 1,
                'service_type_id' => 1,
                'product_slug' => 'finance-fundamentals-for-beginners',
                'title' => 'Finance Certifications',
                'slug' => 'finance-certifications',
                'meta_title' => 'Finance Certifications: CFA, CFP, CPA, FRM & Career Paths',
                'meta_description' => 'Master finance certifications including CFA, CFP, CPA, FRM, CMA, ACCA, MBA Finance, NISM, NCFM, and career paths in the finance industry.',
                'meta_keywords' => 'finance certifications, CFA, CFP, CPA, FRM, CMA, ACCA, MBA Finance, NISM, NCFM, finance career paths',
                'order_position' => 35,
                'subtopics' => json_encode([
                    ['id' => 'topic-1', 'title' => '1. CFA', 'order_position' => 1],
                    ['id' => 'topic-2', 'title' => '2. CFP', 'order_position' => 2],
                    ['id' => 'topic-3', 'title' => '3. CPA', 'order_position' => 3],
                    ['id' => 'topic-4', 'title' => '4. FRM', 'order_position' => 4],
                    ['id' => 'topic-5', 'title' => '5. CMA', 'order_position' => 5],
                    ['id' => 'topic-6', 'title' => '6. ACCA', 'order_position' => 6],
                    ['id' => 'topic-7', 'title' => '7. MBA Finance', 'order_position' => 7],
                    ['id' => 'topic-8', 'title' => '8. NISM', 'order_position' => 8],
                    ['id' => 'topic-9', 'title' => '9. NCFM', 'order_position' => 9],
                    ['id' => 'topic-10', 'title' => '10. Career Paths', 'order_position' => 10],
                ]),
                'is_published' => true,
            ],
            // =====================================================
            // Module 36: Finance Projects
            // =====================================================
            [
                'user_id' => 1,
                'service_type_id' => 1,
                'product_slug' => 'finance-fundamentals-for-beginners',
                'title' => 'Finance Projects',
                'slug' => 'finance-projects',
                'meta_title' => 'Finance Projects: Budget Dashboard, Calculator & Portfolio Tracker',
                'meta_description' => 'Build practical finance projects including personal budget dashboard, loan EMI calculator, retirement calculator, investment tracker, and portfolio dashboard.',
                'meta_keywords' => 'finance projects, budget dashboard, loan EMI calculator, retirement calculator, investment tracker, portfolio dashboard, cash flow model, tax planner',
                'order_position' => 36,
                'subtopics' => json_encode([
                    ['id' => 'project-1', 'title' => '1. Personal Budget Dashboard', 'order_position' => 1],
                    ['id' => 'project-2', 'title' => '2. Loan EMI Calculator', 'order_position' => 2],
                    ['id' => 'project-3', 'title' => '3. Retirement Calculator', 'order_position' => 3],
                    ['id' => 'project-4', 'title' => '4. Investment Tracker', 'order_position' => 4],
                    ['id' => 'project-5', 'title' => '5. Portfolio Dashboard', 'order_position' => 5],
                    ['id' => 'project-6', 'title' => '6. Business Cash Flow Model', 'order_position' => 6],
                    ['id' => 'project-7', 'title' => '7. Tax Planner', 'order_position' => 7],
                    ['id' => 'project-8', 'title' => '8. Financial Statement Analysis', 'order_position' => 8],
                ]),
                'is_published' => true,
            ],
            // =====================================================
            // Module 37: Master Finance Interview
            // =====================================================
            [
                'user_id' => 1,
                'service_type_id' => 1,
                'product_slug' => 'finance-fundamentals-for-beginners',
                'title' => 'Master Finance Interview',
                'slug' => 'master-finance-interview',
                'meta_title' => 'Master Finance Interview: 500+ Questions & Mock Interviews',
                'meta_description' => 'Prepare for finance interviews with 500+ questions including HR round, technical round, case study round, valuation questions, and corporate finance questions.',
                'meta_keywords' => 'finance interview, interview questions, HR round, technical round, case study, valuation questions, investment questions, corporate finance, mock interview',
                'order_position' => 37,
                'subtopics' => json_encode([
                    ['id' => 'interview-1', 'title' => '1. 500+ Interview Questions', 'order_position' => 1],
                    ['id' => 'interview-2', 'title' => '2. HR Round', 'order_position' => 2],
                    ['id' => 'interview-3', 'title' => '3. Technical Round', 'order_position' => 3],
                    ['id' => 'interview-4', 'title' => '4. Case Study Round', 'order_position' => 4],
                    ['id' => 'interview-5', 'title' => '5. Excel Round', 'order_position' => 5],
                    ['id' => 'interview-6', 'title' => '6. Valuation Questions', 'order_position' => 6],
                    ['id' => 'interview-7', 'title' => '7. Investment Questions', 'order_position' => 7],
                    ['id' => 'interview-8', 'title' => '8. Corporate Finance Questions', 'order_position' => 8],
                    ['id' => 'interview-9', 'title' => '9. Mock Interviews', 'order_position' => 9],
                ]),
                'is_published' => true,
            ],
        ];
        // Insert all modules with duplicate checking
        foreach ($modules as $module) {
            $exists = DB::table('modules')->where('slug', $module['slug'])->exists();
            if (! $exists) {
                DB::table('modules')->insert(array_merge($module, [
                    'created_at' => now(),
                    'updated_at' => now(),
                ]));
            }
        }

        // Call Quiz Seeder for 1 Product Level Quiz & 37 Module Level Quizzes (15 questions each)
        $this->call(FinanceFundamentalsQuizSeeder::class);
    }
}
