<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ByteBridgers|Mart</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
{{--        <link rel="icon" type="image/x-icon" href="{{  asset('css/home_styles.css') }}" />--}}
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

        {{--   Custom style's  --}}
        <link rel="stylesheet" href="{{  asset('css/home_styles.css') }}">
        <link rel="stylesheet" href="{{  asset('css/custom_style.css') }}">
    </head>
    <body class="antialiased">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-gray-100">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#!">
                <div class="flex justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-auto bg-gray-100 dark:bg-gray-900" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev/svgjs" viewBox="0 0 1000 295"><g transform="matrix(1,0,0,1,-0.6060606060606801,-0.4308396658437914)"><svg viewBox="0 0 396 117" data-background-color="#28353b" preserveAspectRatio="xMidYMid meet" height="295" width="1000" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="tight-bounds" transform="matrix(1,0,0,1,0.24000000000003752,0.17087539289397569)"><svg viewBox="0 0 395.5199999999999 116.65824921421208" height="116.65824921421208" width="395.5199999999999"><g><svg viewBox="0 0 657.2295342277798 193.84922834467253" height="116.65824921421208" width="395.5199999999999"><g><rect width="5.847893512512708" height="168.32060348307309" x="240.5530189547626" y="12.76431243079972" fill="#ffffff" opacity="1" stroke-width="0" stroke="transparent" fill-opacity="1" class="rect-r$-0" data-fill-palette-color="primary" rx="1%" id="r$-0" data-palette-color="#ffffff"></rect></g><g transform="matrix(1,0,0,1,261.7095342277798,26.791029387722475)"><svg viewBox="0 0 395.52 140.26716956922758" height="140.26716956922758" width="395.52"><g id="textblocktransform"><svg viewBox="0 0 395.52 140.26716956922758" height="140.26716956922758" width="395.52" id="textblock"><g><svg viewBox="0 0 395.52 64.84615869679455" height="64.84615869679455" width="395.52"><g transform="matrix(1,0,0,1,0,0)"><svg width="395.52" viewBox="4.5 -35.6 285.42 46.8" height="64.84615869679455" data-palette-color="#ffffff"><path d="M14.95 0L4.5 0 4.5-32.8 14.25-32.8Q16.75-32.8 18.82-32.35 20.9-31.9 22.38-30.95 23.85-30 24.68-28.48 25.5-26.95 25.5-24.8L25.5-24.8Q25.5-22.35 24.28-20.38 23.05-18.4 20.7-17.65L20.7-17.65 20.7-17.45Q23.7-16.9 25.55-14.95 27.4-13 27.4-9.6L27.4-9.6Q27.4-7.2 26.5-5.4 25.6-3.6 23.95-2.4 22.3-1.2 20-0.6 17.7 0 14.95 0L14.95 0ZM8.65-29.5L8.65-18.85 13.5-18.85Q17.7-18.85 19.55-20.3 21.4-21.75 21.4-24.25L21.4-24.25Q21.4-27.1 19.48-28.3 17.55-29.5 13.7-29.5L13.7-29.5 8.65-29.5ZM8.65-15.65L8.65-3.3 14.35-3.3Q18.6-3.3 20.95-4.88 23.3-6.45 23.3-9.75L23.3-9.75Q23.3-12.8 21-14.23 18.7-15.65 14.35-15.65L14.35-15.65 8.65-15.65ZM33.2 10.45L33.2 10.45Q32.35 10.45 31.65 10.33 30.95 10.2 30.35 9.95L30.35 9.95 31.15 6.7Q31.55 6.8 32.05 6.93 32.55 7.05 33 7.05L33 7.05Q35.1 7.05 36.42 5.58 37.75 4.1 38.5 1.85L38.5 1.85 39.05 0.05 29.3-24.3 33.55-24.3 38.5-10.85Q39.05-9.25 39.67-7.48 40.3-5.7 40.85-4L40.85-4 41.05-4Q41.6-5.65 42.1-7.45 42.6-9.25 43.1-10.85L43.1-10.85 47.45-24.3 51.45-24.3 42.3 2Q41.65 3.8 40.85 5.35 40.05 6.9 38.95 8.03 37.85 9.15 36.45 9.8 35.05 10.45 33.2 10.45ZM63.8 0.6L63.8 0.6Q61.84 0.6 60.52 0 59.2-0.6 58.37-1.65 57.55-2.7 57.2-4.2 56.84-5.7 56.84-7.5L56.84-7.5 56.84-20.95 53.25-20.95 53.25-24.05 57.05-24.3 57.55-31.1 61-31.1 61-24.3 67.55-24.3 67.55-20.95 61-20.95 61-7.45Q61-5.2 61.82-3.98 62.65-2.75 64.75-2.75L64.75-2.75Q65.4-2.75 66.15-2.95 66.9-3.15 67.5-3.4L67.5-3.4 68.3-0.3Q67.3 0.05 66.12 0.33 64.95 0.6 63.8 0.6ZM82.19 0.6L82.19 0.6Q79.74 0.6 77.62-0.28 75.49-1.15 73.92-2.78 72.34-4.4 71.44-6.75 70.54-9.1 70.54-12.1L70.54-12.1Q70.54-15.1 71.47-17.48 72.39-19.85 73.92-21.5 75.44-23.15 77.39-24.03 79.34-24.9 81.44-24.9L81.44-24.9Q83.74-24.9 85.57-24.1 87.39-23.3 88.62-21.8 89.84-20.3 90.49-18.2 91.14-16.1 91.14-13.5L91.14-13.5Q91.14-12.85 91.12-12.23 91.09-11.6 90.99-11.15L90.99-11.15 74.59-11.15Q74.84-7.25 77.02-4.98 79.19-2.7 82.69-2.7L82.69-2.7Q84.44-2.7 85.92-3.23 87.39-3.75 88.74-4.6L88.74-4.6 90.19-1.9Q88.59-0.9 86.64-0.15 84.69 0.6 82.19 0.6ZM74.54-14.1L74.54-14.1 87.54-14.1Q87.54-17.8 85.97-19.73 84.39-21.65 81.54-21.65L81.54-21.65Q80.24-21.65 79.07-21.15 77.89-20.65 76.94-19.68 75.99-18.7 75.37-17.3 74.74-15.9 74.54-14.1ZM107.99 0L97.54 0 97.54-32.8 107.29-32.8Q109.79-32.8 111.87-32.35 113.94-31.9 115.42-30.95 116.89-30 117.72-28.48 118.54-26.95 118.54-24.8L118.54-24.8Q118.54-22.35 117.32-20.38 116.09-18.4 113.74-17.65L113.74-17.65 113.74-17.45Q116.74-16.9 118.59-14.95 120.44-13 120.44-9.6L120.44-9.6Q120.44-7.2 119.54-5.4 118.64-3.6 116.99-2.4 115.34-1.2 113.04-0.6 110.74 0 107.99 0L107.99 0ZM101.69-29.5L101.69-18.85 106.54-18.85Q110.74-18.85 112.59-20.3 114.44-21.75 114.44-24.25L114.44-24.25Q114.44-27.1 112.52-28.3 110.59-29.5 106.74-29.5L106.74-29.5 101.69-29.5ZM101.69-15.65L101.69-3.3 107.39-3.3Q111.64-3.3 113.99-4.88 116.34-6.45 116.34-9.75L116.34-9.75Q116.34-12.8 114.04-14.23 111.74-15.65 107.39-15.65L107.39-15.65 101.69-15.65ZM130.64 0L126.54 0 126.54-24.3 129.94-24.3 130.29-19.9 130.44-19.9Q131.69-22.2 133.46-23.55 135.24-24.9 137.34-24.9L137.34-24.9Q138.79-24.9 139.94-24.4L139.94-24.4 139.14-20.8Q138.54-21 138.04-21.1 137.54-21.2 136.79-21.2L136.79-21.2Q135.24-21.2 133.56-19.95 131.89-18.7 130.64-15.6L130.64-15.6 130.64 0ZM147.99 0L143.89 0 143.89-24.3 147.99-24.3 147.99 0ZM145.99-29.3L145.99-29.3Q144.79-29.3 143.96-30.05 143.14-30.8 143.14-31.95L143.14-31.95Q143.14-33.15 143.96-33.88 144.79-34.6 145.99-34.6L145.99-34.6Q147.19-34.6 148.01-33.88 148.84-33.15 148.84-31.95L148.84-31.95Q148.84-30.8 148.01-30.05 147.19-29.3 145.99-29.3ZM164.48 0.6L164.48 0.6Q159.88 0.6 157.16-2.7 154.43-6 154.43-12.1L154.43-12.1Q154.43-15.05 155.31-17.43 156.18-19.8 157.63-21.45 159.08-23.1 160.98-24 162.88-24.9 164.98-24.9L164.98-24.9Q167.08-24.9 168.63-24.15 170.18-23.4 171.78-22.1L171.78-22.1 171.58-26.25 171.58-35.6 175.73-35.6 175.73 0 172.33 0 171.98-2.85 171.83-2.85Q170.38-1.45 168.51-0.43 166.63 0.6 164.48 0.6ZM165.38-2.85L165.38-2.85Q167.08-2.85 168.58-3.68 170.08-4.5 171.58-6.2L171.58-6.2 171.58-18.9Q170.03-20.3 168.61-20.88 167.18-21.45 165.68-21.45L165.68-21.45Q164.23-21.45 162.96-20.78 161.68-20.1 160.73-18.88 159.78-17.65 159.23-15.95 158.68-14.25 158.68-12.15L158.68-12.15Q158.68-7.75 160.43-5.3 162.18-2.85 165.38-2.85ZM193.78 0.6L193.78 0.6Q191.33 0.6 189.21-0.28 187.08-1.15 185.51-2.78 183.93-4.4 183.03-6.75 182.13-9.1 182.13-12.1L182.13-12.1Q182.13-15.1 183.06-17.48 183.98-19.85 185.51-21.5 187.03-23.15 188.98-24.03 190.93-24.9 193.03-24.9L193.03-24.9Q195.33-24.9 197.16-24.1 198.98-23.3 200.21-21.8 201.43-20.3 202.08-18.2 202.73-16.1 202.73-13.5L202.73-13.5Q202.73-12.85 202.71-12.23 202.68-11.6 202.58-11.15L202.58-11.15 186.18-11.15Q186.43-7.25 188.61-4.98 190.78-2.7 194.28-2.7L194.28-2.7Q196.03-2.7 197.51-3.23 198.98-3.75 200.33-4.6L200.33-4.6 201.78-1.9Q200.18-0.9 198.23-0.15 196.28 0.6 193.78 0.6ZM186.13-14.1L186.13-14.1 199.13-14.1Q199.13-17.8 197.56-19.73 195.98-21.65 193.13-21.65L193.13-21.65Q191.83-21.65 190.66-21.15 189.48-20.65 188.53-19.68 187.58-18.7 186.96-17.3 186.33-15.9 186.13-14.1ZM216.43 11.2L216.43 11.2Q214.18 11.2 212.33 10.78 210.48 10.35 209.15 9.5 207.83 8.65 207.1 7.45 206.38 6.25 206.38 4.65L206.38 4.65Q206.38 3.1 207.33 1.7 208.28 0.3 209.93-0.85L209.93-0.85 209.93-1.05Q209.03-1.6 208.4-2.58 207.78-3.55 207.78-5L207.78-5Q207.78-6.55 208.63-7.7 209.48-8.85 210.43-9.5L210.43-9.5 210.43-9.7Q209.23-10.7 208.25-12.38 207.28-14.05 207.28-16.25L207.28-16.25Q207.28-18.25 208-19.85 208.73-21.45 209.98-22.58 211.23-23.7 212.9-24.3 214.58-24.9 216.43-24.9L216.43-24.9Q217.43-24.9 218.3-24.73 219.18-24.55 219.88-24.3L219.88-24.3 228.33-24.3 228.33-21.15 223.33-21.15Q224.18-20.3 224.75-19 225.33-17.7 225.33-16.15L225.33-16.15Q225.33-14.2 224.63-12.63 223.93-11.05 222.73-9.98 221.53-8.9 219.9-8.3 218.28-7.7 216.43-7.7L216.43-7.7Q215.53-7.7 214.58-7.93 213.63-8.15 212.78-8.55L212.78-8.55Q212.13-8 211.68-7.33 211.23-6.65 211.23-5.65L211.23-5.65Q211.23-4.5 212.13-3.75 213.03-3 215.53-3L215.53-3 220.23-3Q224.48-3 226.6-1.63 228.73-0.25 228.73 2.8L228.73 2.8Q228.73 4.5 227.88 6.03 227.03 7.55 225.43 8.7 223.83 9.85 221.55 10.53 219.28 11.2 216.43 11.2ZM216.43-10.45L216.43-10.45Q217.48-10.45 218.4-10.85 219.33-11.25 220.05-12 220.78-12.75 221.18-13.83 221.58-14.9 221.58-16.25L221.58-16.25Q221.58-18.95 220.08-20.43 218.58-21.9 216.43-21.9L216.43-21.9Q214.28-21.9 212.78-20.43 211.28-18.95 211.28-16.25L211.28-16.25Q211.28-14.9 211.68-13.83 212.08-12.75 212.8-12 213.53-11.25 214.45-10.85 215.38-10.45 216.43-10.45ZM217.03 8.35L217.03 8.35Q218.78 8.35 220.2 7.93 221.63 7.5 222.63 6.83 223.63 6.15 224.18 5.25 224.73 4.35 224.73 3.4L224.73 3.4Q224.73 1.7 223.48 1.05 222.23 0.4 219.83 0.4L219.83 0.4 215.63 0.4Q214.93 0.4 214.1 0.33 213.28 0.25 212.48 0L212.48 0Q211.18 0.95 210.58 2 209.98 3.05 209.98 4.1L209.98 4.1Q209.98 6.05 211.85 7.2 213.73 8.35 217.03 8.35ZM242.58 0.6L242.58 0.6Q240.13 0.6 238-0.28 235.88-1.15 234.3-2.78 232.73-4.4 231.83-6.75 230.93-9.1 230.93-12.1L230.93-12.1Q230.93-15.1 231.85-17.48 232.78-19.85 234.3-21.5 235.83-23.15 237.78-24.03 239.73-24.9 241.83-24.9L241.83-24.9Q244.13-24.9 245.95-24.1 247.78-23.3 249-21.8 250.23-20.3 250.88-18.2 251.53-16.1 251.53-13.5L251.53-13.5Q251.53-12.85 251.5-12.23 251.48-11.6 251.38-11.15L251.38-11.15 234.98-11.15Q235.23-7.25 237.4-4.98 239.58-2.7 243.08-2.7L243.08-2.7Q244.83-2.7 246.3-3.23 247.78-3.75 249.13-4.6L249.13-4.6 250.58-1.9Q248.98-0.9 247.03-0.15 245.08 0.6 242.58 0.6ZM234.93-14.1L234.93-14.1 247.93-14.1Q247.93-17.8 246.35-19.73 244.78-21.65 241.93-21.65L241.93-21.65Q240.63-21.65 239.45-21.15 238.28-20.65 237.33-19.68 236.38-18.7 235.75-17.3 235.13-15.9 234.93-14.1ZM261.62 0L257.52 0 257.52-24.3 260.92-24.3 261.27-19.9 261.42-19.9Q262.67-22.2 264.45-23.55 266.22-24.9 268.32-24.9L268.32-24.9Q269.77-24.9 270.92-24.4L270.92-24.4 270.12-20.8Q269.52-21 269.02-21.1 268.52-21.2 267.77-21.2L267.77-21.2Q266.22-21.2 264.55-19.95 262.87-18.7 261.62-15.6L261.62-15.6 261.62 0ZM281.02 0.6L281.02 0.6Q278.42 0.6 276.07-0.35 273.72-1.3 271.97-2.75L271.97-2.75 274.02-5.5Q275.62-4.2 277.3-3.4 278.97-2.6 281.17-2.6L281.17-2.6Q283.57-2.6 284.77-3.7 285.97-4.8 285.97-6.4L285.97-6.4Q285.97-7.35 285.47-8.05 284.97-8.75 284.2-9.28 283.42-9.8 282.42-10.2 281.42-10.6 280.42-11L280.42-11Q279.12-11.45 277.82-12.03 276.52-12.6 275.5-13.43 274.47-14.25 273.82-15.35 273.17-16.45 273.17-18L273.17-18Q273.17-19.45 273.75-20.73 274.32-22 275.4-22.93 276.47-23.85 278.02-24.38 279.57-24.9 281.52-24.9L281.52-24.9Q283.82-24.9 285.75-24.1 287.67-23.3 289.07-22.15L289.07-22.15 287.12-19.55Q285.87-20.5 284.52-21.1 283.17-21.7 281.57-21.7L281.57-21.7Q279.27-21.7 278.2-20.65 277.12-19.6 277.12-18.2L277.12-18.2Q277.12-17.35 277.57-16.73 278.02-16.1 278.77-15.63 279.52-15.15 280.5-14.78 281.47-14.4 282.52-14L282.52-14Q283.82-13.5 285.15-12.95 286.47-12.4 287.52-11.58 288.57-10.75 289.25-9.55 289.92-8.35 289.92-6.65L289.92-6.65Q289.92-5.15 289.35-3.85 288.77-2.55 287.65-1.55 286.52-0.55 284.85 0.03 283.17 0.6 281.02 0.6Z" opacity="1" transform="matrix(1,0,0,1,0,0)" fill="#ffffff" class="wordmark-text-0" data-fill-palette-color="primary" id="text-0"></path></svg></g></svg></g><g transform="matrix(1,0,0,1,0,80.15478045729901)"><svg viewBox="0 0 211.02391142788903 60.11238911192855" height="60.11238911192855" width="211.02391142788903"><g transform="matrix(1,0,0,1,0,0)"><svg width="211.02391142788903" viewBox="1.5 -35 125.49 35.75" height="60.11238911192855" data-palette-color="#ffffff"><path d="M22.25 0.5L7-28.75 7-2.25 11-0.75 11 0 1.5 0 1.5-0.75 5.5-2.25 5.5-33.5 2.5-34.25 2.5-35 8.75-35Q11.35-35 12.88-33.93 14.4-32.85 15.5-30.75L15.5-30.75 26.4-9.9 34.75-30.75Q35.6-32.95 37.05-33.98 38.5-35 41.5-35L41.5-35 46.75-35 46.75-34.25 43.75-33.5 43.75-1.5 46.75-0.75 46.75 0 32.5 0 32.5-0.75 35.5-1.5 35.5-28.75 23.75 0.5 22.25 0.5ZM61 0.75Q56.55 0.75 54.15-1.15 51.75-3.05 51.75-6L51.75-6Q51.75-7.95 52.6-9.85L52.6-9.85Q52.95-10.75 53.5-11.5L53.5-11.5Q55.55-12 57.95-12.4L57.95-12.4Q63.35-13.3 67.5-13.5L67.5-13.5 67.5-15Q67.5-20.55 66.15-22.65 64.8-24.75 62-24.75L62-24.75Q60.95-24.75 60.2-24.5L60.2-24.5 59.5-24.25 59.5-16.75 58.85-16.6Q58.05-16.5 57.5-16.5L57.5-16.5Q55.8-16.5 54.77-17.53 53.75-18.55 53.75-20.25L53.75-20.25Q53.75-22.55 56.07-24.15 58.4-25.75 63-25.75L63-25.75Q66.9-25.75 69.72-24.38 72.55-23 74.02-20.58 75.5-18.15 75.5-15L75.5-15 75.5-1.5 78.5-0.75 78.5 0 74 0Q71 0 69.35-1.85L69.35-1.85Q68.65-2.6 68.25-3.75L68.25-3.75Q67.55-2.5 66.6-1.5L66.6-1.5Q64.35 0.75 61 0.75L61 0.75ZM63-1Q64.85-1 66.35-3L66.35-3Q66.9-3.75 67.5-5L67.5-5 67.5-12.25Q65.2-12.25 63.1-12L63.1-12Q61.55-11.8 61-11.75L61-11.75Q60.75-11.2 60.5-10.25L60.5-10.25Q60-8.35 60-6.5L60-6.5Q60-3.7 60.85-2.35 61.7-1 63-1L63-1ZM81.5 0L81.5-0.75 84.5-1.5 84.5-23.5 81.5-24.25 81.5-25 86-25Q88.95-25 90.65-23.1L90.65-23.1Q91.3-22.35 91.75-21.25L91.75-21.25Q92.5-22.35 93.59-23.25L93.59-23.25Q96.09-25.25 99.2-25.25L99.2-25.25Q101.84-25.25 103.17-24.03 104.5-22.8 104.5-20.5L104.5-20.5Q104.5-18.8 103.47-17.78 102.45-16.75 100.75-16.75L100.75-16.75Q100.05-16.75 99.34-16.85L99.34-16.85 98.75-17 98.75-24Q96.2-24 94.09-22L94.09-22Q93.09-21 92.5-20L92.5-20 92.5-1.5 95.5-0.75 95.5 0 81.5 0ZM120.24 0.75Q116.94 0.75 114.52-0.45 112.09-1.65 110.79-3.75 109.49-5.85 109.49-8.5L109.49-8.5 109.49-23.75 105.99-23.75 105.99-25 109.49-25 109.49-27.5Q109.49-32 113.99-32L113.99-32 117.49-32 117.49-25 124.49-25 124.49-23.75 117.49-23.75 117.49-8.5Q117.49-3.9 118.44-2.2 119.39-0.5 121.24-0.5L121.24-0.5Q123.04-0.5 124.39-2.25 125.74-4 125.74-7L125.74-7 126.99-7Q126.99-3.3 125.14-1.28 123.29 0.75 120.24 0.75L120.24 0.75Z" opacity="1" transform="matrix(1,0,0,1,0,0)" fill="#ffffff" class="slogan-text-1" data-fill-palette-color="secondary" id="text-1"></path></svg></g></svg></g></svg></g></svg></g><g><svg viewBox="0 0 225.2443971942581 193.84922834467253" height="193.84922834467253" width="225.2443971942581"><g><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0" y="0" viewBox="8 12.986999999999998 85.99989647571269 74.013" enable-background="new 0 0 100 100" xml:space="preserve" height="193.84922834467253" width="225.2443971942581" class="icon-icon-0" data-fill-palette-color="accent" id="icon-0"><path d="M23.149 49.139c-5.409 0-9.808 4.4-9.808 9.808s4.399 9.808 9.808 9.808c5.407 0 9.807-4.4 9.807-9.808S28.556 49.139 23.149 49.139zM23.149 65.646c-3.695 0-6.701-3.006-6.701-6.7s3.006-6.7 6.701-6.7c3.693 0 6.699 3.006 6.699 6.7S26.842 65.646 23.149 65.646z" fill="#ff2d20" data-fill-palette-color="accent"></path><path d="M80.293 25.135c-0.58-0.24-1.248-0.108-1.693 0.335l-6.641 6.633c-3.059-2.404-6.461-4.307-10.162-5.673-0.805-0.297-1.697 0.114-1.994 0.918-0.299 0.806 0.113 1.699 0.918 1.996 3.273 1.208 6.291 2.879 9.018 4.973l-8.971 8.96c-0.445 0.444-0.576 1.112-0.338 1.692 0.24 0.581 0.807 0.988 1.436 0.988L79.684 46c0.002 0 0.002 0 0.002 0 0.412 0 0.807-0.191 1.098-0.482s0.455-0.7 0.455-1.112l0.012-17.827C81.25 25.95 80.873 25.376 80.293 25.135zM78.133 42.835l-12.516-0.009 12.523-12.507L78.133 42.835z" fill="#ff2d20" data-fill-palette-color="accent"></path><path d="M17.585 43.525c0.259 0.167 0.549 0.246 0.835 0.246 0.513 0 1.014-0.252 1.311-0.716 3.48-5.432 8.423-9.771 14.293-12.547 0.776-0.367 1.107-1.293 0.74-2.069-0.366-0.775-1.292-1.106-2.067-0.74-6.399 3.025-11.787 7.756-15.582 13.681C16.652 42.102 16.863 43.063 17.585 43.525z" fill="#ff2d20" data-fill-palette-color="accent"></path><path d="M49.184 26.381C48.856 26.241 49 26.101 48 25.963v-7.104c2 0.551 1.973 1.594 2.01 1.672 0.362 0.771 1.398 1.107 2.176 0.751 0.779-0.357 0.94-1.28 0.581-2.06C52.706 19.088 52 16.303 48 15.584v-1.044c0-0.858-0.642-1.553-1.499-1.553-0.858 0-1.501 0.695-1.501 1.553v0.997c-3 0.539-5.572 2.827-5.572 5.932 0 2.818 2.572 4.841 5.572 6.439v9.147c-2-0.539-3.581-2.24-4.092-3.049-0.458-0.727-1.322-0.943-2.048-0.484-0.726 0.458-1.084 1.417-0.625 2.143C38.851 36.643 41 39.588 45 40.21v1.322c0 0.858 0.643 1.554 1.501 1.554 0.857 0 1.499-0.695 1.499-1.554v-1.33c4-0.642 6.241-3.634 6.241-6.543C54.241 31.105 53.962 28.439 49.184 26.381zM45 24.321c-1-1.04-2.466-1.994-2.466-2.852 0-1.372 1.466-2.367 2.466-2.759V24.321zM48 37.038v-7.671c3 1.372 3.012 2.667 3.012 4.292C51.012 34.797 51 36.482 48 37.038z" fill="#ff2d20" data-fill-palette-color="accent"></path><path d="M93.986 47.428c-0.109-0.85-0.885-1.448-1.74-1.339l-2.732 0.357c-0.562 0.074-1.039 0.447-1.246 0.975l-2.625 6.718L55.631 55.25c-0.434 0.018-0.842 0.215-1.125 0.545-0.283 0.331-0.412 0.766-0.359 1.197l1.654 13.5c0.09 0.73 0.678 1.299 1.41 1.359l22.57 1.898c0.49 0.547 1.182 1.262 2.137 2.249 1.186 1.224 1.332 1.95 1.232 2.188-0.189 0.444-1.289 0.896-2.182 0.896-1.912 0-24.238 0.137-24.463 0.139-0.859 0.006-1.551 0.541-1.545 1.398C54.967 81.475 55.66 82 56.514 82h0.01c0.227 0 22.543 0.025 24.445 0.025 1.551 0 4.174-0.662 5.043-2.71 0.488-1.155 0.562-3.019-1.861-5.52-1.064-1.095-1.678-1.736-2.031-2.127l8.709-22.272 1.82-0.232C93.5 49.053 94.1 48.279 93.986 47.428zM79.207 70.584L58.73 68.862l-1.295-10.569 26.879-0.996L79.207 70.584z" fill="#ff2d20" data-fill-palette-color="accent"></path><circle cx="59.805" cy="84.845" r="1.7" fill="#ff2d20" data-fill-palette-color="accent"></circle><circle cx="83.668" cy="84.845" r="1.7" fill="#ff2d20" data-fill-palette-color="accent"></circle><path d="M32.288 70H14.475C10.798 70 8 73.041 8 76.717v8.906C8 86.48 8.504 87 9.362 87h28.038C38.258 87 39 86.48 39 85.623v-8.906C39 73.041 35.962 70 32.288 70zM36 84h-4v-5.387c0-0.857-0.642-1.553-1.5-1.553S29 77.756 29 78.613V84H18v-5.387c0-0.857-0.643-1.553-1.501-1.553-0.857 0-1.499 0.695-1.499 1.553V84h-4v-7.283C11 74.755 12.512 73 14.475 73h17.813C34.25 73 36 74.755 36 76.717V84z" fill="#ff2d20" data-fill-palette-color="accent"></path></svg></g></svg></g></svg></g><defs></defs></svg><rect width="395.5199999999999" height="116.65824921421208" fill="none" stroke="none" visibility="hidden"></rect></g></svg></g></svg>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item"><a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a></li>
                        @else
                            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                            @if (Route::has('register'))
                                <li class="nav-item"><a class="nav-link" href="#!">Register</a></li>
                            @endif
                        @endauth
                    @endif
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#!">All Products</a></li>
                            <li><hr class="dropdown-divider" /></li>
                            <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                            <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <button class="btn btn-outline-dark button_cart" type="submit">
                        <i class="bi-cart-fill me-1"></i>
                        Cart
                        <span class="badge bg-light text-white ms-1 rounded-pill">0</span>
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Shop in style</h1>
                <p class="lead fw-normal text-white-50 mb-0">With this shop hompeage template</p>
            </div>
        </div>
    </header>

    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Fancy Product</h5>
                                <!-- Product price-->
                                $40.00 - $80.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{ route('/details') }}">View details</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                        <!-- Product image-->
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Special Item</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Product price-->
                                <span class="text-muted text-decoration-line-through">$20.00</span>
                                $18.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{ route('/details') }}">Add to cart</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                        <!-- Product image-->
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Sale Item</h5>
                                <!-- Product price-->
                                <span class="text-muted text-decoration-line-through">$50.00</span>
                                $25.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Popular Item</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Product price-->
                                $40.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                        <!-- Product image-->
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Sale Item</h5>
                                <!-- Product price-->
                                <span class="text-muted text-decoration-line-through">$50.00</span>
                                $25.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Fancy Product</h5>
                                <!-- Product price-->
                                $120.00 - $280.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Sale badge-->
                        <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>
                        <!-- Product image-->
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Special Item</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Product price-->
                                <span class="text-muted text-decoration-line-through">$20.00</span>
                                $18.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Popular Item</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Product price-->
                                $40.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container"><p class="m-0 text-center text-white">Copyright &copy; ByteBridgers|Mart 2023</p></div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
