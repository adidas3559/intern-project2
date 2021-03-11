@extends('_layouts.master')

@section('body')

    @include('_modules.hero')

    <div class="buckets lightGrid">
        <div class="buckets__intro w-11/12 lg:w-4/5">
            <h2>
                Featured Rentals
            </h2>
            <p class="brandBorder">
                ASCO Equipment operates a full line rental department with locations across Texas and Eastern New Mexico.
            </p>
        </div>
        <div class="buckets__container w-11/12 lg:w-4/5">
            <div class="bucket">
                
                    <div class="bucket__img">
                        <img src="/assets/img/bucket1.webp" alt="bucket">
                    </div>
                    <div class="bucket__text">
                        <h3>
                            LOADERS
                        </h3>
                        <p>
                            View Products
                        </p>
                    </div>
                
            </div>

            <div class="bucket">
                <div class="bucket__img">
                    <img src="/assets/img/bucket2.webp" alt="bucket">
                </div>
                <div class="bucket__text">
                    <h3>
                        Rollers & Compaction
                    </h3>
                    <p>
                        View Products
                    </p>
                </div>
            </div>

            <div class="bucket">
                <div class="bucket__img">
                    <img src="/assets/img/bucket3.webp" alt="bucket">
                </div>
                <div class="bucket__text">
                    <h3>
                        Forklift & Lifttrucks
                    </h3>
                    <p>
                        View Products
                    </p>
                </div>
            </div>

            <div class="bucket">
                <div class="bucket__img">
                    <img src="/assets/img/bucket4.webp" alt="bucket">
                </div>
                <div class="bucket__text">
                    <h3>
                        Aerials
                    </h3>
                    <p>
                        View Products
                    </p>
                </div>
            </div>
        </div>
    </div>


    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="bg-brand-light bg-opacity-25">
        <div class="max-w-7xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:px-8">
        <div class="lg:grid lg:grid-cols-2 lg:gap-8">
            <h2 class="max-w-md mx-auto text-3xl font-extrabold text-indigo-900 text-center lg:max-w-xl">
                BRANDS WE SELL
            </h2>
            <div class="flow-root self-center mt-8 lg:mt-0">
            <div class="-mt-4 -ml-8 flex flex-wrap justify-between lg:-ml-4">
                <div class="mt-4 ml-8 flex flex-grow flex-shrink-0 justify-center lg:flex-grow-0 lg:ml-4">
                <img class="h-12" src="https://tailwindui.com/img/logos/workcation-logo-indigo-900.svg" alt="Workcation">
                </div>
                <div class="mt-4 ml-8 flex flex-grow flex-shrink-0 justify-center lg:flex-grow-0 lg:ml-4">
                <img class="h-12" src="https://tailwindui.com/img/logos/tuple-logo-indigo-900.svg" alt="Tuple">
                </div>
                <div class="mt-4 ml-8 flex flex-grow flex-shrink-0 justify-center lg:flex-grow-0 lg:ml-4">
                <img class="h-12" src="https://tailwindui.com/img/logos/level-logo-indigo-900.svg" alt="Level">
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>

    <div style="background: #1d1e1f;">
        @include ('_modules.split', [
            'title1' => $page->pages->test->split1->title1,
            'title2' => $page->pages->test->split1->title2,
            'subtitle' => $page->pages->test->split1->subtitle,
            'text' => $page->pages->test->split1->text,
            'button_text' => $page->pages->test->split1->button_text,
            'button_url' => $page->pages->test->split1->button_url,
            'reverse' =>  $page->pages->test->split1->reverse,
        ])

        @include ('_modules.split', [
            'title1' => $page->pages->test->split2->title1,
            'title2' => $page->pages->test->split2->title2,
            'subtitle' => $page->pages->test->split2->subtitle,
            'text' => $page->pages->test->split2->text,
            'button_text' => $page->pages->test->split2->button_text,
            'button_url' => $page->pages->test->split2->button_url,
            'reverse' =>  $page->pages->test->split2->reverse,
        ])
    </div>
    

    <div class="customSplit">
        <div class="customSplit__container">
            <div class="customSplit__textColumn">
                <div class="customSplit__textContainer">
                    <h2>About ASCO</h2>
                    <p>
                        ASCO Equipment, sells, rents and provides parts and services for agriculture, construction and material handling equipment in 23 locations throughout Texas and Eastern New Mexico.
                        <br><br>
                        ASCO represents CASE Construction, CASE IH, Caterpillar lift truck line, Crown, Doosan, Genie, JCB, JLG, Mitsubishi, Volvo, and several other lines of well-known and respected agriculture, construction and material handling equipment.
                        <br><br>
                        ASCO is a family owned company that has operated under the core values of Honor God, Develop People, Pursue Excellence, and Grow Profitably since 1960.
                    </p>
                </div>
            </div>

            <div class="customSplit__imageColumn">
                <img src="/assets/img/familyPic.jpg" alt="Family Picture">
            </div>
        </div>
    </div>

    <div id="indexContactUs">
        <contact-form></contact-form>
    </div>
    

    @include('_modules.footer')

@stop
