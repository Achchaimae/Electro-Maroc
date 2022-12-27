<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- link tailwind css -->
    <link href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/build/output.css">
    <!-- link to font awesome -->
    <script src="https://kit.fontawesome.com/93e0a23dda.js" crossorigin="anonymous"></script>
    <title>home</title>
</head>
<body>
     <section class="hero ">
        <div class="left-nav">
            <div class="logo">
               <a href="#"><img src="assets/image/mobile logo.png" alt="logo"></a>
            </div>
        
        </div>
       <!-- maybe nhaydo maybe nzido who knows -->
        <!-- <div class="search-bar">
            <input type="search" class="search" name="search" placeholder="search your item">
            <i class="fa-solid fa-search"></i>
        </div> -->
        <div>
            <!-- <div class=" categ-nav flex">
                <button id="states-button" data-dropdown-toggle="dropdown-states"
                    class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-500 bg-gray-100 border border-gray-300 rounded-l-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600"
                    type="button">
                    <svg aria-hidden="true" class="h-3 mr-2" viewBox="0 0 15 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.5" width="14" height="12" rx="2" fill="white" />
                        <mask id="mask0_12694_49953" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="15"
                            height="12">
                            <rect x="0.5" width="14" height="12" rx="2" fill="white" />
                        </mask>
                        <g mask="url(#mask0_12694_49953)">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M14.5 0H0.5V0.8H14.5V0ZM14.5 1.6H0.5V2.4H14.5V1.6ZM0.5 3.2H14.5V4H0.5V3.2ZM14.5 4.8H0.5V5.6H14.5V4.8ZM0.5 6.4H14.5V7.2H0.5V6.4ZM14.5 8H0.5V8.8H14.5V8ZM0.5 9.6H14.5V10.4H0.5V9.6ZM14.5 11.2H0.5V12H14.5V11.2Z"
                                fill="#D02F44" />
                            <rect x="0.5" width="6" height="5.6" fill="#46467F" />
                            <g filter="url(#filter0_d_12694_49953)">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M1.83317 1.20005C1.83317 1.42096 1.68393 1.60005 1.49984 1.60005C1.31574 1.60005 1.1665 1.42096 1.1665 1.20005C1.1665 0.979135 1.31574 0.800049 1.49984 0.800049C1.68393 0.800049 1.83317 0.979135 1.83317 1.20005ZM3.1665 1.20005C3.1665 1.42096 3.01727 1.60005 2.83317 1.60005C2.64908 1.60005 2.49984 1.42096 2.49984 1.20005C2.49984 0.979135 2.64908 0.800049 2.83317 0.800049C3.01727 0.800049 3.1665 0.979135 3.1665 1.20005ZM4.1665 1.60005C4.3506 1.60005 4.49984 1.42096 4.49984 1.20005C4.49984 0.979135 4.3506 0.800049 4.1665 0.800049C3.98241 0.800049 3.83317 0.979135 3.83317 1.20005C3.83317 1.42096 3.98241 1.60005 4.1665 1.60005ZM5.83317 1.20005C5.83317 1.42096 5.68393 1.60005 5.49984 1.60005C5.31574 1.60005 5.1665 1.42096 5.1665 1.20005C5.1665 0.979135 5.31574 0.800049 5.49984 0.800049C5.68393 0.800049 5.83317 0.979135 5.83317 1.20005ZM2.1665 2.40005C2.3506 2.40005 2.49984 2.22096 2.49984 2.00005C2.49984 1.77913 2.3506 1.60005 2.1665 1.60005C1.98241 1.60005 1.83317 1.77913 1.83317 2.00005C1.83317 2.22096 1.98241 2.40005 2.1665 2.40005ZM3.83317 2.00005C3.83317 2.22096 3.68393 2.40005 3.49984 2.40005C3.31574 2.40005 3.1665 2.22096 3.1665 2.00005C3.1665 1.77913 3.31574 1.60005 3.49984 1.60005C3.68393 1.60005 3.83317 1.77913 3.83317 2.00005ZM4.83317 2.40005C5.01726 2.40005 5.1665 2.22096 5.1665 2.00005C5.1665 1.77913 5.01726 1.60005 4.83317 1.60005C4.64908 1.60005 4.49984 1.77913 4.49984 2.00005C4.49984 2.22096 4.64908 2.40005 4.83317 2.40005ZM5.83317 2.80005C5.83317 3.02096 5.68393 3.20005 5.49984 3.20005C5.31574 3.20005 5.1665 3.02096 5.1665 2.80005C5.1665 2.57914 5.31574 2.40005 5.49984 2.40005C5.68393 2.40005 5.83317 2.57914 5.83317 2.80005ZM4.1665 3.20005C4.3506 3.20005 4.49984 3.02096 4.49984 2.80005C4.49984 2.57914 4.3506 2.40005 4.1665 2.40005C3.98241 2.40005 3.83317 2.57914 3.83317 2.80005C3.83317 3.02096 3.98241 3.20005 4.1665 3.20005ZM3.1665 2.80005C3.1665 3.02096 3.01727 3.20005 2.83317 3.20005C2.64908 3.20005 2.49984 3.02096 2.49984 2.80005C2.49984 2.57914 2.64908 2.40005 2.83317 2.40005C3.01727 2.40005 3.1665 2.57914 3.1665 2.80005ZM1.49984 3.20005C1.68393 3.20005 1.83317 3.02096 1.83317 2.80005C1.83317 2.57914 1.68393 2.40005 1.49984 2.40005C1.31574 2.40005 1.1665 2.57914 1.1665 2.80005C1.1665 3.02096 1.31574 3.20005 1.49984 3.20005ZM2.49984 3.60005C2.49984 3.82096 2.3506 4.00005 2.1665 4.00005C1.98241 4.00005 1.83317 3.82096 1.83317 3.60005C1.83317 3.37913 1.98241 3.20005 2.1665 3.20005C2.3506 3.20005 2.49984 3.37913 2.49984 3.60005ZM3.49984 4.00005C3.68393 4.00005 3.83317 3.82096 3.83317 3.60005C3.83317 3.37913 3.68393 3.20005 3.49984 3.20005C3.31574 3.20005 3.1665 3.37913 3.1665 3.60005C3.1665 3.82096 3.31574 4.00005 3.49984 4.00005ZM5.1665 3.60005C5.1665 3.82096 5.01726 4.00005 4.83317 4.00005C4.64908 4.00005 4.49984 3.82096 4.49984 3.60005C4.49984 3.37913 4.64908 3.20005 4.83317 3.20005C5.01726 3.20005 5.1665 3.37913 5.1665 3.60005ZM5.49984 4.80005C5.68393 4.80005 5.83317 4.62096 5.83317 4.40005C5.83317 4.17913 5.68393 4.00005 5.49984 4.00005C5.31574 4.00005 5.1665 4.17913 5.1665 4.40005C5.1665 4.62096 5.31574 4.80005 5.49984 4.80005ZM4.49984 4.40005C4.49984 4.62096 4.3506 4.80005 4.1665 4.80005C3.98241 4.80005 3.83317 4.62096 3.83317 4.40005C3.83317 4.17913 3.98241 4.00005 4.1665 4.00005C4.3506 4.00005 4.49984 4.17913 4.49984 4.40005ZM2.83317 4.80005C3.01727 4.80005 3.1665 4.62096 3.1665 4.40005C3.1665 4.17913 3.01727 4.00005 2.83317 4.00005C2.64908 4.00005 2.49984 4.17913 2.49984 4.40005C2.49984 4.62096 2.64908 4.80005 2.83317 4.80005ZM1.83317 4.40005C1.83317 4.62096 1.68393 4.80005 1.49984 4.80005C1.31574 4.80005 1.1665 4.62096 1.1665 4.40005C1.1665 4.17913 1.31574 4.00005 1.49984 4.00005C1.68393 4.00005 1.83317 4.17913 1.83317 4.40005Z"
                                    fill="url(#paint0_linear_12694_49953)" />
                            </g>
                        </g>
                        <defs>
                            <filter id="filter0_d_12694_49953" x="1.1665" y="0.800049" width="4.6665" height="5"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                    result="hardAlpha" />
                                <feOffset dy="1" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.06 0" />
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_12694_49953" />
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_12694_49953" result="shape" />
                            </filter>
                            <linearGradient id="paint0_linear_12694_49953" x1="1.1665" y1="0.800049" x2="1.1665" y2="4.80005"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="white" />
                                <stop offset="1" stop-color="#F0F0F0" />
                            </linearGradient>
                        </defs>
                    </svg>
                    USA <svg aria-hidden="true" class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div id="dropdown-states"
                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700">
                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="states-button">
                        <li>
                            <button type="button"
                                class="inline-flex w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white">
                                <div class="inline-flex items-center">
                                    <svg aria-hidden="true" class="h-3.5 w-3.5 rounded-full mr-2" xmlns="http://www.w3.org/2000/svg"
                                        id="flag-icon-css-us" viewBox="0 0 512 512">
                                        <g fill-rule="evenodd">
                                            <g stroke-width="1pt">
                                                <path fill="#bd3d44"
                                                    d="M0 0h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z"
                                                    transform="scale(3.9385)" />
                                                <path fill="#fff"
                                                    d="M0 10h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z"
                                                    transform="scale(3.9385)" />
                                            </g>
                                            <path fill="#192f5d" d="M0 0h98.8v70H0z" transform="scale(3.9385)" />
                                            <path fill="#fff"
                                                d="M8.2 3l1 2.8H12L9.7 7.5l.9 2.7-2.4-1.7L6 10.2l.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7L74 8.5l-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 7.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 24.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 21.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 38.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 35.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 52.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 49.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 66.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 63.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9z"
                                                transform="scale(3.9385)" />
                                        </g>
                                    </svg>
                                    United States
                                </div>
                            </button>
                        </li>
                        <li>
                            <button type="button"
                                class="inline-flex w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white">
                                <div class="inline-flex items-center">
                                    <svg aria-hidden="true" class="h-3.5 w-3.5 rounded-full mr-2" xmlns="http://www.w3.org/2000/svg"
                                        id="flag-icon-css-de" viewBox="0 0 512 512">
                                        <path fill="#ffce00" d="M0 341.3h512V512H0z" />
                                        <path d="M0 0h512v170.7H0z" />
                                        <path fill="#d00" d="M0 170.7h512v170.6H0z" />
                                    </svg>
                                    Germany
                                </div>
                            </button>
                        </li>
                        <li>
                            <button type="button"
                                class="inline-flex w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white">
                                <div class="inline-flex items-center">
                                    <svg aria-hidden="true" class="h-3.5 w-3.5 rounded-full mr-2" xmlns="http://www.w3.org/2000/svg"
                                        id="flag-icon-css-it" viewBox="0 0 512 512">
                                        <g fill-rule="evenodd" stroke-width="1pt">
                                            <path fill="#fff" d="M0 0h512v512H0z" />
                                            <path fill="#009246" d="M0 0h170.7v512H0z" />
                                            <path fill="#ce2b37" d="M341.3 0H512v512H341.3z" />
                                        </g>
                                    </svg>
                                    Italy
                                </div>
                            </button>
                        </li>
                        <li>
                            <button type="button"
                                class="inline-flex w-full px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white">
                                <div class="inline-flex items-center">
                                    <svg aria-hidden="true" class="h-3.5 w-3.5 rounded-full mr-2" xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" id="flag-icon-css-cn" viewBox="0 0 512 512">
                                        <defs>
                                            <path id="a" fill="#ffde00" d="M1-.3L-.7.8 0-1 .6.8-1-.3z" />
                                        </defs>
                                        <path fill="#de2910" d="M0 0h512v512H0z" />
                                        <use width="30" height="20" transform="matrix(76.8 0 0 76.8 128 128)" xlink:href="#a" />
                                        <use width="30" height="20" transform="rotate(-121 142.6 -47) scale(25.5827)"
                                            xlink:href="#a" />
                                        <use width="30" height="20" transform="rotate(-98.1 198 -82) scale(25.6)" xlink:href="#a" />
                                        <use width="30" height="20" transform="rotate(-74 272.4 -114) scale(25.6137)"
                                            xlink:href="#a" />
                                        <use width="30" height="20" transform="matrix(16 -19.968 19.968 16 256 230.4)"
                                            xlink:href="#a" />
                                    </svg>
                                    China
                                </div>
                            </button>
                        </li>
                    </ul>
                </div>
                <label for="states" class="sr-only">Choose a state</label>
                <select id="states"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-r-lg border-l-gray-100 dark:border-l-gray-700 border-l-2 focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Choose a state</option>
                    <option value="CA">California</option>
                    <option value="TX">Texas</option>
                    <option value="WH">Washinghton</option>
                    <option value="FL">Florida</option>
                    <option value="VG">Virginia</option>
                    <option value="GE">Georgia</option>
                    <option value="MI">Michigan</option>
                </select>
            </div> -->
            <div>
                <b><a href="View/allproduct.php">categorie</a></b>
            </div>
            
        </div>
        <div>
            <b><a href="View/Contact.php">Contact Us</a></b>
        </div>
        <div>
            <b><a href="View/about.php">About Us</a></b>
        </div>
        <div class="icons"> 
            <div class="icon-item">
                <a href="View/login.php">
                    <i class="fa-solid fa-user"></i>
                </a>
            </div>
            <div>
                <a href="View/cart.php">
                    <i class="fa-solid fa-cart-shopping"></i>
                </a>
            </div>
        </div>
    </section>
    <section class="categrories">
        <!-- <div class="title m-2">
            <p>categories</p>
        </div> -->

        <!-- <div class="all-categories" >
            <div class="categ-item ease-in-out duration-300">
                <p>laptop</p>
                <img src="assets/image/laptop.png" alt="laptop">
            </div>
            <div class="categ-item ease-in-out duration-300">
                <p>camera</p>
                <img src="assets/image/camera.png" alt="mobile">
            </div>
            <div class="categ-item ease-in-out duration-300 access-catego">
                <p>Accessories</p>
                <img src="assets/image/accessories.png" alt="headphone">
            </div>
            <div class="categ-item ease-in-out duration-300 tv-catego">
                <p>TV</p>
                <img src="assets/image/tv.png" alt="mobile">
            </div>
            <div class="categ-item ease-in-out duration-300 headset-catego">
                <p>Headphones</p>
                <img src="assets/image/headset.png" alt="mobile">
            </div>
            <div class="categ-item ease-in-out duration-300">
                <p>Storage</p>
                <img src="assets/image/storage.png" alt="mobile">
            </div>
            <div class="categ-item ease-in-out duration-300">
                <p>Home Theater</p>
                <img src="assets/image/homeset.png" alt="mobile">
            </div>
        </div>   -->
    </section>
    <section class="news" >
        <div class="mini-sold" >
            <div class="bg-gray-700 rounded w-36 h-36">
                <img src="assets/image/annonce2.png" alt="annonce">
                <p class="bg-gray-800 text-white text-center rounded">JBL Tour One </p>
            </div>
            <div class=" bg-teal-500 rounded w-36 h-36">
                <img src="assets/image/annonce3.png" alt="annonce">
                <p class="bg-teal-900 text-white text-center rounded">boat Rockerz 255 </p>

            </div>
        </div>
        <div class="big-sold">
            <img src="assets/image/annonce.png" alt="annonce">
            <div>
                <p>LG GRAM I7 </p><br>
                <p>12th Gen Core i7 / Win11 / Microsoft 365</p><br>
                <p>Starting at 499 $</p><br>
                <a href="#" class="bg-green-500 p-2 rounded text-white">SHOP NOW</a>
            </div>
        </div>
    </section>
    <section>
        <div class="gide">
            <div class="title m-2">
                <p>Today's deals</p>
            </div>
            <div class="indicator m-2">
                <a href="View/allproduct.php">View all</a>
            </div>
        </div>
        
        <div class="new-deals">
            <div class="deals">
                <div class="deal-comp">
                    <img src="assets/image/deal1.png" alt="deal 1">
                    <p>Zebronics ZEB-JUKE BAR DOLBY ATMOS Home Theater With Subwoofer</p>
                    <div class="deal-price">
                        <p>259 $</p>
                        <p><del>399 $</del></p>
                    </div>
                </div>   
            </div>
            <div class="deals">
                <div class="deal-comp">
                <img src="assets/image/cameraDeal.png" alt="deal 1">
                <p>Sony Alpha ILCE 6600M 24.2 MP Mirrorless Digital SLR Camera with 18-135 mm Zoom Lens</p>
                <div class="deal-price">
                    <p>259 $</p>
                    <p><del>399 $</del></p>
                </div>
                <div class="deals-sides">
                    <div class="sides">
                        <img src="assets/image/camera3.png" alt="camera deal">
                    </div>
                    <div class="sides">
                        <img src="assets/image/camera4.png" alt="camera deal">
                    </div>
                    <div class="sides">
                        <img src="assets/image/camera2.png" alt="camera deal">
                    </div>
                </div>
            </div> 
            </div>
            <div class="deals">
                <div class="deal-comp">
                <img src="assets/image/tvdeal.png" alt="deal 1" style="width: 9rem;">
                <p>OnePlus 80 cm (32 inches) Y Series HD Ready LED Smart Android TV 32Y1</p>
                <div class="deal-price">
                    <p>399 $</p>
                    <p><del>499 $</del></p>
                </div>
                <div class="deals-sides">
                    <div class="sides">
                        <img src="assets/image/tvdeal2.png" alt="camera deal">
                    </div>
                    <div class="sides">
                        <img src="assets/image/tvdeal3.png" alt="camera deal">
                    </div>
                    <div class="sides">
                        <img src="assets/image/remote.png" alt="camera deal">
                    </div>
                </div>
            </div> 
            </div>
            <div class="deals">
                <div class="deal-comp">
                <img src="assets/image/laptopdeal.png" alt="deal 1">
                <p>Lenovo Legion 5 11th Gen Intel Core i7 15.6"(39.62cm) FHD IPS Gaming Laptop</p>
                <div class="deal-price">
                    <p>599 $</p>
                    <p><del>799 $</del></p>
                </div>
                <div class="deals-sides">
                    <div class="sides">
                        <img src="assets/image/pcdeal1.png" alt="camera deal">
                    </div>
                    <div class="sides">
                        <img src="assets/image/pcdeal2.png" alt="camera deal">
                    </div>
                    <div class="sides">
                        <img src="assets/image/pcdeal3.png" alt="camera deal">
                    </div>
                </div>
            </div> 
            </div> 
        </div>
        <div class="headset">
            <div class="gide">
                <div class="title m-2">
                    <p>headphones</p>
                </div>
                <div class="indicator m-2">
                    <a href="View/allproduct.php">View all</a>
                </div>
            </div>
            <div class="headset-cat">
                <div class="headset-comp">
                    <img src="assets/image/headset1.png" alt="headset">
                    <p>Zebronics ZEB-JUKE BAR DOLBY ATMOS Home Theater With Subwoofer</p>
                    <p>559 $</p>
                </div>
                <div class="headset-comp">
                    <img src="assets/image/headset2.png" alt="headset">
                    <p>Zebronics ZEB-JUKE BAR DOLBY ATMOS Home Theater With Subwoofer</p>
                    <p>59 $</p>
                </div>
                <div class="headset-comp">
                    <img src="assets/image/headset3.png" alt="headset">
                    <p>Zebronics ZEB-JUKE BAR DOLBY ATMOS Home Theater With Subwoofer</p>
                    <p>259 $</p>
                </div>
                <div class="headset-comp">
                    <img src="assets/image/headset4.png" alt="headset">
                    <p>Zebronics ZEB-JUKE BAR DOLBY ATMOS Home Theater With Subwoofer</p>
                    <p>159 $</p>
                </div>
            </div>
        </div>
        <div class="headset">
            <div class="gide">
                <div class="title m-2">
                    <p>Accessories</p>
                </div>
                <div class="indicator m-2">
                    <a href="allproduct.php">View all</a>
                </div>
            </div>
            <div class="headset-cat">
                <div class="headset-comp">
                    <img src="assets/image/accessorie1.png" alt="accessorie">
                    <p>Zebronics ZEB-JUKE BAR DOLBY ATMOS Home Theater With Subwoofer</p>
                    <p>559 $</p>
                </div>
                <div class="headset-comp">
                    <img src="assets/image/accessorie2.png" alt="accessorie">
                    <p>Zebronics ZEB-JUKE BAR DOLBY ATMOS Home Theater With Subwoofer</p>
                    <p>59 $</p>
                </div>
                <div class="headset-comp">
                    <img src="assets/image/accessorie3.png" alt="accessorie">
                    <p>Zebronics ZEB-JUKE BAR DOLBY ATMOS Home Theater With Subwoofer</p>
                    <p>259 $</p>
                </div>
                <div class="headset-comp">
                    <img src="assets/image/accessorie4.png" alt="accessorie">
                    <p>Zebronics ZEB-JUKE BAR DOLBY ATMOS Home Theater With Subwoofer</p>
                    <p>159 $</p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <footer class="footer">
            <div class="footer__addr">
              <h1 class="footer__logo">
                <img src="assets/image/mobile logo.png" alt="">
              </h1>
                  
              <h2><b>Contact</b></h2>
              
              <address>
                5534 Somewhere In. The World 22193-10212<br>
                    
                <a class="footer__btn" href="mailto:example@gmail.com">Email Us</a>
              </address>
            </div>
            
            <ul class="footer__nav">
              <li class="nav__item">
                <h2 class="nav__title"><b>Know Us</b></h2>
          
                <ul class="nav__ul">
                  <li>
                    <a href="#">About Us</a>
                  </li>
                <li>
                    <a href="#">
                        Contact Us
                    </a>
                </li>
                <li>
                    <a href="#">
                        Press
                    </a>
                </li>
                <li>
                    <a href="#">
                        Careers
                    </a>
                </li>
                <li>
                    <a href="#">
                        Elexo Earn
                    </a>
                </li>
                </ul>
              </li>
              
              <li class="nav__item nav__item--extra">
                <h2 class="nav__title"><b>Policy</b></h2>
                
                <ul class="nav__ul nav__ul--extra">
                <li>
                    <a href="#">
                        Security
                    </a>
                </li>
                <li>
                    <a href="#">
                        Privacy
                    </a>
                </li>
                <li>
                    <a href="#">
                        Term of use
                    </a>
                </li>
                <li>
                    <a href="#">
                        Return policy
                    </a>
                </li>
                <li>
                    <a href="#">
                        Complience
                    </a>
                </li>
                </ul>
              </li>
              <li class="nav__item">
                <h2 class="nav__title"><b>Social</b></h2>
                
                <ul class="nav__ul">
                  <li>
                    <a href="#">Facebbok</a>
                  </li>
                  <li>
                    <a href="#">Instagram</a>
                  </li>
                  <li>
                    <a href="#">Twitter</a>
                  </li>
                  <li>
                    <a href="#">Youtube</a>
                  </li>
                </ul>
              </li>
            </ul>
            
            <div class="legal">
              <p>&copy; 2019 Something. All rights reserved.</p>
              
              <div class="legal__links">
                <span>Made with <span class="heart">♥</span> by Achchcaimae Khalaf</span>
              </div>
            </div>
          </footer>
    </section>
</body>
</html>