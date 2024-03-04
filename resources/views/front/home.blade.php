@extends('front.layouts.app')

@section('main')
<section class="section-0 lazy d-flex bg-image-style dark align-items-center "  class="" data-bg="{{ asset('assets/images/ban.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-8">
                <h1 class="h1"> <i ></i> Find your dream job</h1>
                <p class="auto-type"></p>
                <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
                <script>

                    var typed = new Typed(".auto-type",{
                        strings : [
    "As a software engineer, staying updated with the latest programming languages and frameworks is crucial for professional growth.",
    "Project managers play a pivotal role in ensuring that tasks are completed on time and within budget.",
    "Customer service representatives should possess excellent communication skills to effectively assist customers.",
    "Data analysts use statistical techniques to interpret complex data sets and provide valuable insights to organizations.",
    "Graphic designers combine creativity and technical skills to produce visually appealing designs.",
    "Cybersecurity specialists are in high demand as organizations strive to protect their data from cyber threats.",
    "Marketing managers develop strategic plans to promote products and services and increase brand awareness.",
    "Financial analysts analyze financial data to help businesses make informed investment decisions.",
    "Human resources professionals are responsible for recruiting, training, and retaining employees within an organization.",
    "Teachers play a crucial role in shaping the minds of future generations and fostering a love for learning.",
    "Nurses provide compassionate care to patients and assist doctors in various medical procedures.",
    "Mechanical engineers design and oversee the manufacturing of mechanical systems and devices.",
    "Social media managers create and curate engaging content to build and maintain an online presence for businesses.",
    "Accountants help businesses manage their finances by preparing financial statements and tax returns.",
    "Sales representatives build relationships with clients and negotiate deals to drive revenue for their companies.",
    "UX/UI designers focus on improving user experience and interface design to create intuitive digital products.",
    "Lawyers provide legal advice and representation to individuals and organizations in various legal matters.",
    "Operations managers oversee the day-to-day operations of a business to ensure efficiency and productivity.",
    "Medical doctors diagnose and treat illnesses and injuries, providing essential healthcare services to patients.",
    "Content writers produce engaging written content for websites, blogs, and social media platforms.",
    "Electrical engineers design, develop, and test electrical systems and equipment for various industries.",
    "Event planners coordinate all aspects of events, from venue selection to catering, to ensure they run smoothly.",
    "Software developers create applications and systems software to meet the needs of users and businesses.",
    "Web developers design and maintain websites, ensuring they are functional, user-friendly, and visually appealing.",
    "Data scientists analyze large data sets to identify trends and patterns that can help businesses make strategic decisions.",
    "Digital marketers utilize online channels such as social media and email to promote products and services.",
    "Project coordinators assist project managers in planning, executing, and monitoring project activities.",
    "Quality assurance testers evaluate software and systems to ensure they meet quality standards and user requirements.",
    "Financial advisors provide personalized financial advice and investment recommendations to clients.",
    "Human resource managers develop and implement HR strategies to attract, retain, and develop talent.",
    "Registered nurses administer medications, monitor patient vitals, and provide emotional support to patients and their families.",
    "Mechanical designers create detailed mechanical drawings and specifications for manufacturing purposes.",
    "Business analysts assess business processes and systems to identify areas for improvement and optimization.",
    "Front-end developers specialize in coding the user interface and interactions of websites and web applications.",
    "Digital content creators produce multimedia content such as videos, podcasts, and infographics for online platforms.",
    "Data engineers design and maintain the systems and infrastructure necessary for data collection and analysis.",
    "Market research analysts gather and analyze data on consumer preferences and market trends to inform business decisions.",
    "Network administrators manage and maintain an organization's computer networks and communication systems.",
    "Customer success managers build and maintain relationships with customers to ensure their satisfaction and loyalty.",
    "Product managers oversee the development and launch of products, from ideation to market release.",
    "UX researchers conduct user research to understand user behaviors and preferences and inform product design decisions.",
    "Healthcare administrators manage the business operations of healthcare facilities, ensuring efficiency and compliance.",
    "Software architects design the overall structure of software systems to ensure scalability, reliability, and maintainability.",
    "SEO specialists optimize website content and structure to improve search engine rankings and drive organic traffic.",
    "Database administrators manage and maintain databases to ensure they are secure, efficient, and reliable.",
    "UX designers create wireframes, prototypes, and mockups to design intuitive and user-friendly digital experiences.",
    "System administrators install, configure, and maintain an organization's computer systems and servers.",
    "Brand managers develop and execute branding strategies to establish and maintain a strong brand identity.",
    "IT support specialists provide technical assistance and support to users experiencing computer-related issues.",
    "Digital designers use graphic design software to create visual elements for digital platforms, such as websites and apps.",
    "Supply chain managers oversee the entire supply chain process, from sourcing raw materials to delivering finished products.",
    "Content strategists develop content plans and strategies to ensure consistency and effectiveness across digital platforms.",
    "DevOps engineers streamline the software development process by implementing automation and continuous integration practices.",
    "UX/UI developers specialize in both user experience and user interface design for digital products and applications.",
    "Business development managers identify new business opportunities and partnerships to drive company growth.",
    "Mobile app developers design and develop mobile applications for iOS and Android devices.",
    "Copywriters create persuasive and compelling copy for advertisements, websites, and marketing materials.",
    "Technical writers create documentation and instructional materials to help users understand and use technical products.",
    "Product designers conceptualize and design products that are both functional and aesthetically pleasing.",
    "Financial controllers oversee financial reporting, budgeting, and accounting operations within an organization.",
    "Operations coordinators assist operations managers in coordinating and managing daily business activities.",
    "UX strategists develop strategic plans to improve user experience and drive business objectives.",
    "IT project managers oversee the planning, execution, and delivery of IT projects within an organization.",
    "Digital project managers coordinate the development and launch of digital projects, such as websites and apps.",
    "Business consultants provide expert advice to businesses to help them improve efficiency and profitability.",
    "Marketing coordinators assist marketing managers in implementing marketing campaigns and initiatives.",
    "Front-end engineers specialize in coding the user interface and interactions of web applications.",
    "Software testers identify defects and bugs in software through manual and automated testing.",
    "IT managers oversee the planning, implementation, and maintenance of an organization's IT infrastructure.",
    "Content managers oversee the creation, publication, and management of content across digital platforms.",
    "User researchers gather insights from users to inform product design and development.",
    "Social media specialists manage and grow brands' social media presence through content creation and community engagement.",
    "Digital strategists develop comprehensive digital strategies to achieve business objectives and target audiences.",
    "Scrum masters facilitate Agile development teams to ensure efficient and effective delivery of software.",
    "Business analysts conduct market research and data analysis to inform business decisions and strategies.",
    "UX analysts analyze user data and behavior to identify opportunities for improving user experience.",
    "Digital marketing managers oversee all aspects of a company's digital marketing efforts, from strategy to execution.",
    "UI designers create visually appealing and intuitive user interfaces for digital products and applications.",
    "Data entry clerks input and maintain data in computer systems"]
,
                        typeSpeed:35,
                        backSpeed:25,
                        looped:true
                    })
                </script>
<div class="banner-btn mt-5">
    <a href="#" class="btn btn-primary mb-4 mb-sm-0">
        <i class="fas fa-search"></i> Explore Now
    </a>
</div>
            </div>
        </div>
    </div>
</section>

<section class="section-1 py-5 ">
    <div class="container">
        <div class="card border-0 shadow p-5">
            <form action="{{ route("jobs") }}" method="GET">
                <div class="row">
                    <div class="col-md-3 mb-3 mb-sm-3 mb-lg-0">
                        <input type="text" class="form-control" name="keyword" id="keyword" placeholder="Keywords">
                    </div>
                    <div class="col-md-3 mb-3 mb-sm-3 mb-lg-0">
<div class="input-group">
    <input type="text" class="form-control" name="location" id="location" placeholder="Location">

</div>
                    </div>
                   <div class="col-md-3 mb-3 mb-sm-3 mb-lg-0">
    <div class="input-group">
        <select name="category" id="category" class="form-control">
            <option value="">Select a Category</option>
            @if ($newCategories->isNotEmpty())
                @foreach ($newCategories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            @endif
        </select>

    </div>
</div>


                    <div class=" col-md-3 mb-xs-3 mb-sm-3 mb-lg-0">
                        <div class="d-grid gap-2">
                            {{-- <a href="jobs.html" class="btn btn-primary btn-block">Search</a> --}}
                            <button type="submit" class="btn btn-primary btn-block">
                                <i class="fas fa-search"></i> Search
                            </button>
                                                    </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<section class="section-2 bg-2 py-5">
    <div class="container">
        <h2>Popular Categories</h2>
        <div class="row pt-5">

            @if ($categories->isNotEmpty())
            @foreach ($categories as $category)
            <div class="col-lg-4 col-xl-3 col-md-6">
                <div class="single_catagory">
                    <a href="{{ route('jobs').'?category='.$category->id }}"><h4 class="pb-2">{{ $category->name }}</h4></a>
                    <p class="mb-0"> <span><i class="fas fa-user"></i> 0</span> Available position</p>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</section>

<section class="section-3  py-5">
    <div class="container">
        <h2>Featured Jobs</h2>
        <div class="row pt-5">
            <div class="job_listing_area">
                <div class="job_lists">
                    <div class="row">
                        @if ($featuredJobs->isNotEmpty())
                            @foreach ($featuredJobs as $featuredJob)
                            <div class="col-md-4">
                                <div class="card border-0 p-3 shadow mb-4">
                                    <div class="card-body">
                                        <h3 class="border-0 fs-5 pb-2 mb-0">{{ $featuredJob->title }}</h3>

                                        <p>{{ Str::words(strip_tags($featuredJob->description), 5) }}</p>

                                        <div class="bg-light p-3 border">
                                            <p class="mb-0">
                                                <span class="fw-bolder"><i class="fa fa-map-marker"></i></span>
                                                <span class="ps-1">{{ $featuredJob->location }}</span>
                                            </p>
                                            <p class="mb-0">
                                                <span class="fw-bolder"><i class="fa fa-clock-o"></i></span>
                                                <span class="ps-1">{{ $featuredJob->jobType->name }}</span>
                                            </p>
                                            @if (!is_null($featuredJob->salary))
                                            <p class="mb-0">
                                                <span class="fw-bolder"><i class="fa fa-usd"></i></span>
                                                <span class="ps-1">{{ $featuredJob->salary }}</span>
                                            </p>
                                            @endif
                                        </div>

                                        <div class="d-grid mt-3">
                                            <a href="{{ route('jobDetail', $featuredJob->id) }}" class="btn btn-primary btn-lg">
                                                <i class="fas fa-info-circle"></i> Details
                                            </a>
                                                                                    </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section-3 bg-2 py-5">
    <div class="container">
        <h2>Latest Jobs</h2>
        <div class="row pt-5">
            <div class="job_listing_area">
                <div class="job_lists">
                    <div class="row">
                        @if ($latestJobs->isNotEmpty())
                            @foreach ($latestJobs as $latestJob)
                            <div class="col-md-4">
                                <div class="card border-0 p-3 shadow mb-4">
                                    <div class="card-body">
                                        <h3 class="border-0 fs-5 pb-2 mb-0">{{ $latestJob->title }}</h3>

                                        <p>{{ Str::words(strip_tags($latestJob->description), 5) }}</p>

                                        <div class="bg-light p-3 border">
                                            <p class="mb-0">
                                                <span class="fw-bolder"><i class="fa fa-map-marker"></i></span>
                                                <span class="ps-1">{{ $latestJob->location }}</span>
                                            </p>
                                            <p class="mb-0">
                                                <span class="fw-bolder"><i class="fa fa-clock-o"></i></span>
                                                <span class="ps-1">{{ $latestJob->jobType->name }}</span>
                                            </p>
                                            @if (!is_null($latestJob->salary))
                                            <p class="mb-0">
                                                <span class="fw-bolder"><i class="fa fa-usd"></i></span>
                                                <span class="ps-1">{{ $latestJob->salary }}</span>
                                            </p>
                                            @endif
                                        </div>

                                        <div class="d-grid mt-3">
                                            <a href="{{ route('jobDetail',$latestJob->id) }}" class="btn btn-primary btn-lg">Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
