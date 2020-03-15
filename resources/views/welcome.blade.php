<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>More Affordable CRM</title>

    <!-- Tailwind -->
    <link href="/css/app.css" rel="stylesheet">
</head>
<body class="font-sans bg-white leading-tight antialiased">
{{--    <div id="app" class="mt-12 mx-4 lg:mt-32 lg:ml-32 max-w-3xl text-black">--}}
    <div id="app" class="container mx-auto mt-12 lg:mt-32 w-10/12 lg:w-1/2 xl:w-1/3">
        <div class="block font-bold text-4xl">
            More Affordable CRM
        </div>
        <div class="lg:mt-24 mt-12 text-2xl font-medium leading-loose">
            <p>
                We are working on a CRM application.
            </p>
            <p class="py-4">
                Yeah, I get it.. We already have Salesforce, Pipedrive, Hubspot, Freshsales, and probably a hundred more
                similar apps. Why do we need another glorified CRM, right?
            </p>
            <p class="py-4">
                Let's talk about these apps. Most of them have a ton of features, but it takes a lifetime to learn them.
                You pay for features that you don't need. Or the pricing is per user, which puts a big hole in your
                pocket. And most of these apps are designed for the tech-savvy or enterprise users.
            </p>
            <p class="py-4">
                The whole experience is confusing and expensive.
            </p>
            <div class="py-4">
                We are working on making CRM "less irritating" and "more affordable". Our focus is on small sales teams.
                A simple CRM for consultants, insurance agents and individuals. For recruiters, travel agents, and
                financial planners. Healthcare or educational professionals. And all other small, profitable,
                non-tech-savvy businesses.
            </div>
            <div class="py-4 font-extrabold">
                $29 per month. Unlimited users. All features.
            </div>
            <div class="py-4">
                We'll be launching our early beta access sometime this year. Join the waitlist.
            </div>
        </div>
        <div class="mt-8 mb-32 leading-tight">
            <subscribe></subscribe>
            <p class="mt-4 text-sm">
                We'll use your email to only send an invite for our beta. No other spam emails. Period.
            </p>
        </div>
    </div>
</body>
<script src="/js/app.js"></script>
</html>
